<?php
//Миниатрюра
add_filter('show_admin_bar', '__return_false');

add_theme_support( 'post-thumbnails' );

function Landing_scripts() {
	/////////////Css app
    wp_enqueue_style( 'bootstrap',get_template_directory_uri() .'/css/main.css');
	wp_enqueue_style( 'font-awesome',get_template_directory_uri() .'/css/font-awesome.min.css');

////////////////////////////////
}
add_action( 'wp_enqueue_scripts', 'Landing_scripts' );

function my_scripts_method() {


    wp_deregister_script('jquery');
    wp_register_script('jquery',get_template_directory_uri() . "/js/jquery-3.1.1.js", false, '3.1.1');
	wp_enqueue_script('jquery');



    wp_register_script( 'control', get_template_directory_uri() . '/js/control.js',  array('jquery'),'',true, '1'  );
    wp_enqueue_script( 'control' );




if (is_page(array(11))){
	wp_register_script( 'myscript1', get_template_directory_uri() . '/js/pupap.js',  array('jquery'),'',true  );
    wp_enqueue_script( 'myscript1' );

    wp_register_script( 'myscript2', get_template_directory_uri() . '/js/slides.js',  array('jquery'),'',true  );
    wp_enqueue_script( 'myscript2' );

                                }


}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

require get_template_directory() . '/libs/theme-option.php';

////////////////////// Меню строки //////////////////////////////////
register_nav_menus( array(
	'menu_colum1' => esc_html__( 'Header', 'solid' ),
	//'menu_colum2' => esc_html__( 'Строка 2', 'solid' ),
	//'menu_colum3' => esc_html__( 'Строка 3', 'solid' ),
	//'menu_colum4' => esc_html__( 'Test', 'solid' ),
) );
//////////////////////////////////////////////////////////////////////

//установка класса пункту меню

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class($classes){
     if(is_page(4)){
             $classes[] = 'active';
     }
     return $classes;
}
///////////////////////////////////////////////////////////////////////

function search(){
	register_sidebar( array(
		'name'          => 'Поиск',
		'id'            => 'search',
		//'description' => 'Выводит 4 поста из рубрики 3', // описание
		'before_widget' => '<div>',
		'after_widget'  => "</div>\n",

	) );
}
add_action( 'widgets_init', 'search' );

function custom_posts_per_page($query){
//if(is_home()){ $query->set('posts_per_page',3); }
if(is_category(3)){ $query->set('posts_per_page',6); }
}
add_action('pre_get_posts','custom_posts_per_page');

// удаляет H2 из шаблона пагинации
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	/*
	Вид базового шаблона:
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>
	';
}


/*
 * Функция создает дубликат поста в виде черновика и редиректит на его страницу редактирования
 */
function true_duplicate_post_as_draft(){
	global $wpdb;
	if (! ( isset( $_GET['post']) || isset( $_POST['post'])  || ( isset($_REQUEST['action']) && 'true_duplicate_post_as_draft' == $_REQUEST['action'] ) ) ) {
		wp_die('Нечего дублировать!');
	}

	/*
	 * получаем ID оригинального поста
	 */
	$post_id = (isset($_GET['post']) ? $_GET['post'] : $_POST['post']);
	/*
	 * а затем и все его данные
	 */
	$post = get_post( $post_id );

	/*
	 * если вы не хотите, чтобы текущий автор был автором нового поста
	 * тогда замените следующие две строчки на: $new_post_author = $post->post_author;
	 * при замене этих строк автор будет копироваться из оригинального поста
	 */
	$current_user = wp_get_current_user();
	$new_post_author = $current_user->ID;

	/*
	 * если пост существует, создаем его дубликат
	 */
	if (isset( $post ) && $post != null) {

		/*
		 * массив данных нового поста
		 */
		$args = array(
			'comment_status' => $post->comment_status,
			'ping_status'    => $post->ping_status,
			'post_author'    => $new_post_author,
			'post_content'   => $post->post_content,
			'post_excerpt'   => $post->post_excerpt,
			'post_name'      => $post->post_name,
			'post_parent'    => $post->post_parent,
			'post_password'  => $post->post_password,
			'post_status'    => 'draft', // черновик, если хотите сразу публиковать - замените на publish
			'post_title'     => $post->post_title,
			'post_type'      => $post->post_type,
			'to_ping'        => $post->to_ping,
			'menu_order'     => $post->menu_order
		);

		/*
		 * создаем пост при помощи функции wp_insert_post()
		 */
		$new_post_id = wp_insert_post( $args );

		/*
		 * присваиваем новому посту все элементы таксономий (рубрики, метки и т.д.) старого
		 */
		$taxonomies = get_object_taxonomies($post->post_type); // возвращает массив названий таксономий, используемых для указанного типа поста, например array("category", "post_tag");
		foreach ($taxonomies as $taxonomy) {
			$post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
			wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
		}

		/*
		 * дублируем все произвольные поля
		 */
		$post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
		if (count($post_meta_infos)!=0) {
			$sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
			foreach ($post_meta_infos as $meta_info) {
				$meta_key = $meta_info->meta_key;
				$meta_value = addslashes($meta_info->meta_value);
				$sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
			}
			$sql_query.= implode(" UNION ALL ", $sql_query_sel);
			$wpdb->query($sql_query);
		}


		/*
		 * и наконец, перенаправляем пользователя на страницу редактирования нового поста
		 */
		wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
		exit;
	} else {
		wp_die('Ошибка создания поста, не могу найти оригинальный пост с ID=: ' . $post_id);
	}
}
add_action( 'admin_action_true_duplicate_post_as_draft', 'true_duplicate_post_as_draft' );

/*
 * Добавляем ссылку дублирования поста для post_row_actions
 */
function true_duplicate_post_link( $actions, $post ) {
	if (current_user_can('edit_posts')) {
		$actions['duplicate'] = '<a href="admin.php?action=true_duplicate_post_as_draft&amp;post=' . $post->ID . '" title="Дублировать этот пост" rel="permalink">Дублировать</a>';
	}
	return $actions;
}

add_filter( 'post_row_actions', 'true_duplicate_post_link', 10, 2 );
