<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "solid_option";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => esc_html__( 'Sample Options', 'solid' ),
        'page_title'           => esc_html__( 'Sample Options', 'solid' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    Redux::setArgs( $opt_name, $args );




    Redux::setSection( $opt_name, array(
        'title'      => __( 'Информация в шапке сайта', 'redux-framework-demo' ),
        'id'         => 'media-gallery',
       // 'desc'       => __( 'Изображения соц. икон ', 'redux-framework-demo' ),
       // 'subsection' => true,
        'fields'     => array(
            array(
                'id'      => 'opt-select_image-field_logo',
                'type'    => 'select_image',
                'url'      => true,
                'title'   => __( 'Выберете логотип', 'redux-framework-demo' ),
                'subtitle' => __( 'Логотип разместить в :/wp-content/plugins/redux-framework/sample/presets. Название должно быть "logo"', 'redux-framework-demo' ),
                'options' => array(
                    array(
                        'alt' => 'Logotip png',
                        'img' => ReduxFramework::$_url . '../sample/presets/logo.png',
                    ),
                    array(
                        'alt' => 'Logotip jpg',
                        'img' => ReduxFramework::$_url . '../sample/presets/preset2.jpg',
                    ),
                ),
                'default' => ReduxFramework::$_url . '../sample/presets/logo.png',
            ),
            array(
                'id'       => 'opt-gallery',
                'type'     => 'gallery',
                'title'    => __( 'Добавить/Изменить галерею', 'redux-framework-demo' ),
                'subtitle' => __( 'Создайте новую Галерею, выбрав существующий или загрузив новые изображения, используя загрузчик WordPress', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'id_soc_url',
                'type'     => 'multi_text',
                'desc'             => esc_html__( 'Вставьте ссылки на социальные сети', 'solid' ) ,
                'add_text'	=> 	'Добавить еще',
                'title'    => esc_html__('ссылки на соц. сети', 'solid'),
                'dfault'  => esc_html__('About')
            ),

            array(
                'id'       => 'opt-text_phone',
                'type'     => 'text',
                'title'    => __('Ваш номер:', 'redux-framework-demo'),
                'validate' => 'numeric',
                'msg'      => 'Ошибка при вводе',
                'default'  => '+380000000'
            ),

            array(
                'id'       => 'opt-text_mail',
                'type'     => 'text',
                'title'    => __('Ваш Email:', 'redux-framework-demo'),
                'validate' => 'email',
                'msg'      => 'Ошибка при вводе',
                'default'  => 'test@test.com'
            ),

            array(
                'id'       => 'opt-text_adr',
                'type'     => 'text',
                'title'    => __('Ваш адрес:', 'redux-framework-demo'),
                'default'  => 'Дом))'
            ),

            array(
                'id'       => 'cop_footer',
                'type'     => 'text',
                'title'    => __('Копирайт:', 'redux-framework-demo'),
                'default'  => ' ©2018. Все права защищены.'
            ),


        )
    ) );


    Redux::setSection( $opt_name, array(
        'title'      => __( 'Поля мета', 'redux-framework-demo' ),
        'id'         => 'meta-box',
       // 'desc'       => __( 'Изображения соц. икон ', 'redux-framework-demo' ),
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'keywords_meta',
                'type'     => 'text',
                'title'    => __('Перечень ключевых слов(meta keywords):', 'redux-framework-demo'),
                'default'  => 'Перечень ключевых слов'
            ),

            array(
                'id'       => 'description_meta',
                'type'     => 'text',
                'title'    => __('Содержимое мета-тега «description»:', 'redux-framework-demo'),
                'default'  => 'Содержимое мета-тега «description»'
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
    'title'            => esc_html__( 'Список', 'solid' ),
    'id'               => 'my_filter-section',
    'subsection' => true,
    'icon'=>'el el-adjust-alt',
    'fields'           => array(

      array(
          'id'       => 'id_filter_title',
          'type'     => 'text',
          'title'    => esc_html__('Название блока:', 'redux-framework-demo'),
          'default'  => 'Filter'
      ),

      array(
          'id'       => 'id_filter_name_ti',
          'type'     => 'multi_text',
          'desc'       => esc_html__( 'Количество полей должно быть name == fl ', 'redux-framework-demo' ),
          'add_text'	=> 	'Добавить еще',
          'title'    => esc_html__('Имя в списке фильтра (для класса f-fl) ', 'solid'),
      ),

        array(
            'id'       => 'id_filter_name',
            'type'     => 'multi_text',
            'desc'       => esc_html__( 'Количество полей должно быть f-fl == fl ', 'redux-framework-demo' ),
            'add_text'	=> 	'Добавить еще',
            'title'    => esc_html__('Класс фильтра f-fl(для фильтра) ', 'solid'),
        ),

        array(
            'id'       => 'id_filter_class',
            'type'     => 'multi_text',
            'desc'       => esc_html__( 'Количество полей должно быть fl == f-fl ', 'redux-framework-demo' ),
            'add_text'	=> 	'Добавить еще',
            'title'    => esc_html__('Класс фильтра fl(для постов)', 'solid'),
        ),


    )
) );

    Redux::setSection( $opt_name, array(
        'title' => __( 'Рандом информация в блоге', 'redux-framework-demo' ),
        'id'    => 'сol_bl',
        'desc'  => __( '', 'redux-framework-demo' ),
        'icon'  => 'el el-th-list'
    ) );

        Redux::setSection( $opt_name, array(
            'title'      => __( 'Блок 1', 'redux-framework-demo' ),
            'id'         => 'box_cl_1',
            'subsection' => true,
            'fields'     => array(

                array(
                    'id'       => 'col1_text_box1',
                    'type'     => 'text',
                    'title'    => __('Заголовок 1:', 'redux-framework-demo'),
                    'default'  => 'Another Post where you can put a link to a specific website'
                ),

                array(
                    'id'       => 'col1_herf_box1',
                    'type'     => 'text',
                    'title'    => __('Ссылка 1:', 'redux-framework-demo'),
                    'default'  => 'http://www.themeforest.net'
                ),
                array(
                    'id'       => 'col1_text_box2',
                    'type'     => 'text',
                    'title'    => __('Заголовок 2:', 'redux-framework-demo'),
                    'default'  => 'Another Post where you can put a link to a specific website'
                ),

                array(
                    'id'       => 'col1_herf_box2',
                    'type'     => 'text',
                    'title'    => __('Ссылка 2:', 'redux-framework-demo'),
                    'default'  => 'http://www.themeforest.net'
                ),
                array(
                    'id'       => 'col1_text_box3',
                    'type'     => 'text',
                    'title'    => __('Заголовок 3:', 'redux-framework-demo'),
                    'default'  => 'Another Post where you can put a link to a specific website'
                ),

                array(
                    'id'       => 'col1_herf_box3',
                    'type'     => 'text',
                    'title'    => __('Ссылка 3:', 'redux-framework-demo'),
                    'default'  => 'http://www.themeforest.net'
                ),
                array(
                    'id'       => 'col1_text_box4',
                    'type'     => 'text',
                    'title'    => __('Заголовок 4:', 'redux-framework-demo'),
                    'default'  => 'Another Post where you can put a link to a specific website'
                ),

                array(
                    'id'       => 'col1_herf_box4',
                    'type'     => 'text',
                    'title'    => __('Ссылка 4:', 'redux-framework-demo'),
                    'default'  => 'http://www.themeforest.net'
                ),
            )
        ) );

        Redux::setSection( $opt_name, array(
            'title'      => __( 'Блок 2', 'redux-framework-demo' ),
            'id'         => 'box_cl_2',
            'subsection' => true,
            'fields'     => array(

                array(
                    'id'       => 'col2_text_box1',
                    'type'     => 'text',
                    'title'    => __('Заголовок 1:', 'redux-framework-demo'),
                    'default'  => 'Another Post where you can put a link to a specific website'
                ),

                array(
                    'id'       => 'col2_herf_box1',
                    'type'     => 'text',
                    'title'    => __('Ссылка 1:', 'redux-framework-demo'),
                    'default'  => 'http://www.themeforest.net'
                ),
                array(
                    'id'       => 'col2_text_box2',
                    'type'     => 'text',
                    'title'    => __('Заголовок 2:', 'redux-framework-demo'),
                    'default'  => 'Another Post where you can put a link to a specific website'
                ),

                array(
                    'id'       => 'col2_herf_box2',
                    'type'     => 'text',
                    'title'    => __('Ссылка 2:', 'redux-framework-demo'),
                    'default'  => 'http://www.themeforest.net'
                ),
                array(
                    'id'       => 'col2_text_box3',
                    'type'     => 'text',
                    'title'    => __('Заголовок 3:', 'redux-framework-demo'),
                    'default'  => 'Another Post where you can put a link to a specific website'
                ),

                array(
                    'id'       => 'col2_herf_box3',
                    'type'     => 'text',
                    'title'    => __('Ссылка 3:', 'redux-framework-demo'),
                    'default'  => 'http://www.themeforest.net'
                ),
                array(
                    'id'       => 'col2_text_box4',
                    'type'     => 'text',
                    'title'    => __('Заголовок 4:', 'redux-framework-demo'),
                    'default'  => 'Another Post where you can put a link to a specific website'
                ),

                array(
                    'id'       => 'col2_herf_box4',
                    'type'     => 'text',
                    'title'    => __('Ссылка 4:', 'redux-framework-demo'),
                    'default'  => 'http://www.themeforest.net'
                ),
            )
        ) );

        Redux::setSection( $opt_name, array(
            'title'      => __( 'Блок 3', 'redux-framework-demo' ),
            'id'         => 'box_cl_3',
            'subsection' => true,
            'fields'     => array(

                array(
                    'id'       => 'col3_text_box1',
                    'type'     => 'text',
                    'title'    => __('Заголовок 1:', 'redux-framework-demo'),
                    'default'  => 'Another Post where you can put a link to a specific website'
                ),

                array(
                    'id'       => 'col3_herf_box1',
                    'type'     => 'text',
                    'title'    => __('Текст 1:', 'redux-framework-demo'),
                    'default'  => 'Post where you'
                ),
                array(
                    'id'       => 'col3_text_box2',
                    'type'     => 'text',
                    'title'    => __('Заголовок 2:', 'redux-framework-demo'),
                    'default'  => 'Another Post where you can put a link to a specific website'
                ),

                array(
                    'id'       => 'col3_herf_box2',
                    'type'     => 'text',
                    'title'    => __('Текст 2:', 'redux-framework-demo'),
                    'default'  => 'Post where you'
                ),
                array(
                    'id'       => 'col3_text_box3',
                    'type'     => 'text',
                    'title'    => __('Заголовок 3:', 'redux-framework-demo'),
                    'default'  => 'Another Post where you can put a link to a specific website'
                ),

                array(
                    'id'       => 'col3_herf_box3',
                    'type'     => 'text',
                    'title'    => __('Текст 3:', 'redux-framework-demo'),
                    'default'  => 'Post where you'
                ),
                array(
                    'id'       => 'col3_text_box4',
                    'type'     => 'text',
                    'title'    => __('Заголовок 4:', 'redux-framework-demo'),
                    'default'  => 'Another Post where you can put a link to a specific website'
                ),

                array(
                    'id'       => 'col3_herf_box4',
                    'type'     => 'text',
                    'title'    => __('Текст 4:', 'redux-framework-demo'),
                    'default'  => 'Post where you'
                ),
            )
        ) );

        Redux::setSection( $opt_name, array(
           'title' => __( 'О себе', 'redux-framework-demo' ),
           'id'    => 'i_top',
           'desc'  => __( '', 'redux-framework-demo' ),
           'icon'  => 'el el-adult'
       ) );

    Redux::setSection( $opt_name, array(
    'title'            => esc_html__( 'Skills', 'solid' ),
    'id'               => 'skils-section',
    'subsection' => true,
    'desc'             => esc_html__( 'Ввод данных происходит:ваши Skills (умения), процент навыка', 'solid' ) ,
    'icon'=>'el el-upload',
    'fields'           => array(

      array(
          'id'       => 'id_sk_title',
          'type'     => 'text',
          'title'    => __('Название блока:', 'redux-framework-demo'),
          'default'  => 'Our Skills'
      ),

        array(
            'id'       => 'id_sk_name',
            'type'     => 'multi_text',
            'add_text'	=> 	'Добавить еще',
            'title'    => esc_html__('Название skills', 'solid'),
            'dfault'  => esc_html__('')
        ),
        array(
            'id'       => 'id_sk_proc',
            'type'     => 'multi_text',
            'add_text'	=> 	'Добавить еще',
            'title'    => esc_html__(' % - skills', 'solid'),
            'dfault'  => esc_html__('')
        ),
    )
) );

    Redux::setSection( $opt_name, array(
    'title'            => esc_html__( 'Цитата или отзыв и т.п.', 'solid' ),
    'id'               => 'testimonials-section',
    'subsection' => true,
    'icon'=>'el el-paper-clip',
    'fields'           => array(

      array(
          'id'       => 'id_testimonials_title',
          'type'     => 'text',
          'title'    => __('Название блока:', 'redux-framework-demo'),
          'default'  => 'Testimonials'
      ),

      array(
          'id'      => 'testimonials_select_image',
          'type'    => 'select_image',
          'url'      => true,
          'title'   => __( 'Выберете логотип', 'redux-framework-demo' ),
          'subtitle' => __( 'Картинку разместить в :папку img. Название изображения, должно быть "testimonials"', 'redux-framework-demo' ),
          'options' => array(
              array(
                  'alt' => 'testimonials png',
                  'img' => '/wp-content/themes/portfolio/img/testimonials.png',
              ),
              array(
                  'alt' => 'testimonials jpg',
                  'img' => '/wp-content/themes/portfolio/img/testimonials.jpg',
              ),
          ),
          'default' => '/wp-content/themes/portfolio/img/testimonials.png',
      ),


      array(
          'id'       => 'id_testimonials_exp',
          'type'     => 'text',
          'title'    => __('Текст возле картинки', 'redux-framework-demo'),
          'default'  => 'Collis Ta’eed - CEO at Envato'
      ),

      array(
          'id'       => 'id_testimonials_textarea',
          'type'     => 'textarea',
          'rows'     => 12,
          'title'    => __('Полный текст', 'redux-framework-demo'),
          'default'  => 'Sollicitudin lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.'
      ),
    )
    ) );

    Redux::setSection( $opt_name, array(
    'title'            => esc_html__( 'Список', 'solid' ),
    'id'               => 'my_list-section',
    'subsection' => true,
    'icon'=>'el el-lines',
    'fields'           => array(

      array(
          'id'       => 'id_list_title',
          'type'     => 'text',
          'title'    => esc_html__('Название блока:', 'redux-framework-demo'),
          'default'  => 'Services'
      ),

        array(
            'id'       => 'id_list_name',
            'type'     => 'multi_text',
            'add_text'	=> 	'Добавить еще',
            'title'    => esc_html__('Список пунктов', 'solid'),
            'dfault'  => esc_html__('Test')
        ),
    )
) );

Redux::setSection( $opt_name, array(
'title'            => esc_html__( 'Карта в контактах', 'solid' ),
'id'               => 'my_map-section',
//'subsection' => true,
'icon'=>'el el-map-marker-alt',
'fields'           => array(
      array(
          'id'       => 'switch-off',
          'type'     => 'switch',
          'title'    => __( 'Включить живую карту в контактах?', 'redux-framework-demo' ),
          'subtitle' => __( 'Вкл.\Выкл.', 'redux-framework-demo' ),
          'default'  => false,
      ),
      array(
          'id'       => 'id_map',
          'type'     => 'text',
          'title'    => esc_html__('Ccылка карты', 'redux-framework-demo'),
      ),


    )
) );
