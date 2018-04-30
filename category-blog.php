<?php get_header();
/* Template Name:BLOG */



function another_colum_1()
 {
	 global $solid_option;
	$x=rand(0,3);
	switch ($x) {
		case 0:
			echo '<div class="box_post another">
			<h3>'.$solid_option['col1_text_box1'].'</h3>
			<a href="'.$solid_option['col1_herf_box1'].'">'.$solid_option['col1_herf_box1'].'</a>
			</div>';
			break;
		case 1:
			echo '<div class="box_post another">
			<h3>'.$solid_option['col1_text_box2'].'</h3>
			<a href="'.$solid_option['col1_herf_box2'].'">'.$solid_option['col1_herf_box2'].'</a>
			</div>';
			break;
		case 2:
			echo '<div class="box_post another">
			<h3>'.$solid_option['col1_text_box3'].'</h3>
			<a href="'.$solid_option['col1_herf_box3'].'">'.$solid_option['col1_herf_box3'].'</a>
			</div>';
			break;

		case 3:
			echo '<div class="box_post another">
			<h3>'.$solid_option['col1_text_box4'].'</h3>
			<a href="'.$solid_option['col1_herf_box4'].'">'.$solid_option['col1_herf_box4'].'</a>
			</div>';
			break;


	}

}

function another_colum_2()
{
	global $solid_option;
	$x=rand(0,3);
	switch ($x) {
		case 0:
			echo '<div class="box_post another">
			<h3>'.$solid_option['col2_text_box1'].'</h3>
			<a href="'.$solid_option['col2_herf_box1'].'">'.$solid_option['col2_herf_box1'].'</a>
			</div>';
			break;
		case 1:
			echo '<div class="box_post another">
			<h3>'.$solid_option['col2_text_box2'].'</h3>
			<a href="'.$solid_option['col2_herf_box2'].'">'.$solid_option['col2_herf_box2'].'</a>
			</div>';
			break;
		case 2:
			echo '<div class="box_post another">
			<h3>'.$solid_option['col2_text_box3'].'</h3>
			<a href="'.$solid_option['col2_herf_box3'].'">'.$solid_option['col2_herf_box3'].'</a>
			</div>';
			break;

		case 3:
			echo '<div class="box_post another">
			<h3>'.$solid_option['col2_text_box4'].'</h3>
			<a href="'.$solid_option['col2_herf_box4'].'">'.$solid_option['col2_herf_box4'].'</a>
			</div>';
			break;
	}

}
function another_colum_3()
{
	$x=rand(0,3);
	switch ($x) {
		case 0:
		echo '
		<div class="box_post rew main_flex__nowrap flex__align-items_center flex__jcontent_centr">
			<h4>'.$solid_option['col3_text_box1'].'</h4>
			<p>“</p>
			<p class="name_rew">'.$solid_option['col3_herf_box1'].'</p>
		</div>';
			break;
		case 1:
		echo '
		<div class="box_post rew main_flex__nowrap flex__align-items_center flex__jcontent_centr">
			<h4>'.$solid_option['col3_text_box2'].'</h4>
			<p>“</p>
			<p class="name_rew">'.$solid_option['col3_herf_box2'].'</p>
		</div>';
			break;
		case 2:
		echo '
		<div class="box_post rew main_flex__nowrap flex__align-items_center flex__jcontent_centr">
			<h4>'.$solid_option['col3_text_box3'].'</h4>
			<p>“</p>
			<p class="name_rew">'.$solid_option['col3_herf_box3'].'</p>
		</div>';
			break;

		case 3:
		echo '
		<div class="box_post rew main_flex__nowrap flex__align-items_center flex__jcontent_centr">
			<h4>'.$solid_option['col3_text_box4'].'</h4>
			<p>“</p>
			<p class="name_rew">'.$solid_option['col3_herf_box4'].'</p>
		</div>';
			break;


	}

}


?>

	<main>
			<div class="wrap">
			<?php $count_p=0;$count_colum=0; ?>
				<div id="list_box" class="main_flex flex__jcontent_between">
					<?php while (have_posts()) : the_post();
					$title= get_the_title();
					$excerpt=get_the_excerpt();
					$img=get_the_post_thumbnail();
					$cate_count=get_category(3)->category_count;
					$page_link=get_page_link( 11 );
					$p_id=get_the_ID();

			if($count_colum==0 || $count_colum==1 )
			{
				if ($count_p==0){echo '<div class="colum_post">';
					another_colum_1();
					}

					echo '
						<div class="box_post">

							<div class="img_post">
							'.$img.'
							</div>

							<div class="about_post">

								<h2>'.$title.'</h2>
								<p>'.$excerpt.'</p>


							</div>

							<div class="info_post main_flex__nowrap flex__jcontent_center flex__align-content_center">
								<a href="'.$page_link.'?post='.$p_id.'" class="blog_link">+ Больше</a>
							</div>
						</div>';

					  if ($count_p==1){ echo '</div>'; }

			}

			if($count_colum==2 || $count_colum==3 )
			{
				if ($count_p==2){echo '<div class="colum_post">';}

					echo '
						<div class="box_post">

							<div class="img_post">
							'.$img.'
							</div>

							<div class="about_post">

								<h2>'.$title.'</h2>
								<p>'.$excerpt.'</p>


							</div>

							<div class="info_post main_flex__nowrap flex__jcontent_center flex__align-content_center">
								<a href="'.$page_link.'?post='.$p_id.'" class="blog_link">+ Больше</a>
							</div>
						</div>';

						if ($count_p==3){another_colum_2();}


					  if ($count_p==3){ echo '</div>'; }

			}


			if($count_colum==4 || $count_colum==5 )
			{
				if ($count_p==4){echo '<div class="colum_post">';}

				if ($count_p==5){another_colum_2();}

					echo '
						<div class="box_post">

							<div class="img_post">
							'.$img.'
							</div>

							<div class="about_post">

								<h2>'.$title.'</h2>
								<p>'.$excerpt.'</p>


							</div>

							<div class="info_post main_flex__nowrap flex__jcontent_center flex__align-content_center">
								<a href="'.$page_link.'?post='.$p_id.'" class="blog_link">+ Больше</a>
							</div>
						</div>';

					  if ($count_p==5){ echo '</div>'; }

			}

					  ?>

					<?php $count_p++;$count_colum++; endwhile; ?>

					<?php if ($count_colum==4 ||$count_colum==2 || $count_colum==0){ echo '</div>'; } ?>

					</div>

				</div><!-- хз может уд -->

				<div class="main_flex__nowrap flex__jcontent_center mg-top">
					<!--<button class="more" type="button">Older Post</button>-->
          <?php
          $args = array(
            	'show_all'     => false, // показаны все страницы участвующие в пагинации
            	'end_size'     => 1,     // количество страниц на концах
            	'mid_size'     => 1,     // количество страниц вокруг текущей
            	'prev_next'    => false,  // выводить ли боковые ссылки "предыдущая/следующая страница".
            	'prev_text'    => __('« Previous'),
            	'next_text'    => __('Next »'),
            	'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
            	'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
            	'screen_reader_text' => __( 'Posts navigation' ),
            );
          the_posts_pagination($args);
           ?>
				</div>

			</div>
	</main>

<?php get_footer( ) ?>
