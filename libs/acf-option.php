<?php 

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_our-clients',
		'title' => 'OUR CLIENTS',
		'fields' => array (
			array (
				'key' => 'field_5a4149e15f8d3',
				'label' => 'OUR CLIENTS',
				'name' => 'our_clients_text',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a41482e97705',
				'label' => 'OUR CLIENTS 1',
				'name' => 'our_clients_1',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
			),
			array (
				'key' => 'field_5a41486283b52',
				'label' => 'OUR CLIENTS 2',
				'name' => 'our_clients_2',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5a41486183b51',
				'label' => 'OUR CLIENTS 3',
				'name' => 'our_clients_3',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5a41485f83b50',
				'label' => 'OUR CLIENTS 4',
				'name' => 'our_clients_4',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '4',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '8',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_post',
		'title' => 'POST',
		'fields' => array (
			array (
				'key' => 'field_5a42bedeca3b6',
				'label' => 'Шапка 5 последних постов',
				'name' => 'last_p',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'Latest Posts',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a42bf46ca3b8',
				'label' => 'Шапка 5 топ постов',
				'name' => 'top_p',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'Frequently Asked',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a42c021ca3b9',
				'label' => 'Имя поста №1',
				'name' => 'post_1',
				'type' => 'text',
				'instructions' => 'Ввести название поста',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'Post',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a42bf40ca3b7',
				'label' => 'Ссылка на пост №1',
				'name' => 'link_post_1',
				'type' => 'page_link',
				'instructions' => 'Вставить ссылку на нужный пост',
				'post_type' => array (
					0 => 'post',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5a42c068ca3ba',
				'label' => 'Имя поста №2',
				'name' => 'post_2',
				'type' => 'text',
				'instructions' => 'Ввести название поста',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'Post',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a42c06cca3bb',
				'label' => 'Ссылка на пост №2',
				'name' => 'link_post_2',
				'type' => 'page_link',
				'instructions' => 'Вставить ссылку на нужный пост',
				'post_type' => array (
					0 => 'post',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5a42c098ca3bc',
				'label' => 'Имя поста №3',
				'name' => 'post_3',
				'type' => 'text',
				'instructions' => 'Ввести название поста',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'Post',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a42c09bca3bd',
				'label' => 'Ссылка на пост №3',
				'name' => 'link_post_3',
				'type' => 'page_link',
				'instructions' => 'Вставить ссылку на нужный пост',
				'post_type' => array (
					0 => 'post',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5a42c0ee7cadc',
				'label' => 'Имя поста №4',
				'name' => 'post_4',
				'type' => 'text',
				'instructions' => 'Ввести название поста',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'Post',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a42c0f27cadd',
				'label' => 'Ссылка на пост №4',
				'name' => 'link_post_4',
				'type' => 'page_link',
				'instructions' => 'Вставить ссылку на нужный пост',
				'post_type' => array (
					0 => 'post',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5a42c1157cade',
				'label' => 'Имя поста №5',
				'name' => 'post_5',
				'type' => 'text',
				'instructions' => 'Ввести название поста',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'Post',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a42c1197cadf',
				'label' => 'Ссылка на пост №5',
				'name' => 'link_post_5',
				'type' => 'page_link',
				'instructions' => 'Вставить ссылку на нужный пост',
				'post_type' => array (
					0 => 'post',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '4',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_%d0%b4%d0%b0%d0%bd%d0%bd%d1%8b%d0%b5-%d0%bf%d1%80%d0%be%d0%b5%d0%ba%d1%82%d0%b0',
		'title' => 'Данные проекта',
		'fields' => array (
			array (
				'key' => 'field_5a43dcc6dc097',
				'label' => 'Заголовок',
				'name' => 'title_p',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a43dcf1dc098',
				'label' => 'Дата',
				'name' => 'date',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a43dd11dc099',
				'label' => 'Автор',
				'name' => 'author',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a43dd36dc09a',
				'label' => 'Категория',
				'name' => 'categories_p',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a43dd55dc09b',
				'label' => 'Маркировать',
				'name' => 'tagged',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a43dd80dc09c',
				'label' => 'Клиент',
				'name' => 'client',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a43dda4dc09d',
				'label' => 'Сайт',
				'name' => 'web',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_category',
					'operator' => '==',
					'value' => '7',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_%d0%b8%d0%bd%d1%84%d0%be%d1%80%d0%bc%d0%b0%d1%86%d0%b8%d1%8f',
		'title' => 'Информация',
		'fields' => array (
			array (
				'key' => 'field_5a4145af100e7',
				'label' => 'About ',
				'name' => 'more_about_our_agency',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_5a4147d5e2abe',
				'label' => 'TESTIMONIALS',
				'name' => 'testimonials',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '4',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '8',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_%d0%ba%d0%be%d0%bd%d1%82%d0%b0%d0%ba%d1%82%d1%8b',
		'title' => 'Контакты',
		'fields' => array (
			array (
				'key' => 'field_5a43c727902cd',
				'label' => 'Шапка блока информация',
				'name' => 'info_cont1',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a43c77c902ce',
				'label' => 'Блок информации',
				'name' => 'info_cont2',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '10',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_%d1%81%d0%bb%d0%b0%d0%b9%d0%b4%d0%b5%d1%80',
		'title' => 'Слайдер',
		'fields' => array (
			array (
				'key' => 'field_5a43ddfdd586a',
				'label' => 'Слайд №1',
				'name' => 'sl_1',
				'type' => 'image',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
			),
			array (
				'key' => 'field_5a43de36d586c',
				'label' => 'Слайд №2',
				'name' => 'sl_2',
				'type' => 'image',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
			),
			array (
				'key' => 'field_5a43de35d586b',
				'label' => 'Слайд №3',
				'name' => 'sl_3',
				'type' => 'image',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_category',
					'operator' => '==',
					'value' => '7',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_%d1%81%d0%be%d1%86-%d1%81%d0%b5%d1%82%d0%b8',
		'title' => 'Соц. сети',
		'fields' => array (
			array (
				'key' => 'field_5a45509fb8b85',
				'label' => 'Флаг',
				'name' => 'flag',
				'type' => 'text',
				'instructions' => 'Установить флаг в 1, если не стоит.',
				'required' => 1,
				'default_value' => 1,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a4642eaad6a9',
				'label' => 'Икона fa-fa №1',
				'name' => 'ico_fa-fa1',
				'type' => 'text',
				'required' => 1,
				'default_value' => 'fa-twitter',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a464396ad6ad',
				'label' => 'Ссылка №1',
				'name' => 'sc_1',
				'type' => 'text',
				'required' => 1,
				'default_value' => 'google.com',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a464332ad6aa',
				'label' => 'Икона fa-fa №2',
				'name' => 'ico_fa-fa2',
				'type' => 'text',
				'required' => 1,
				'default_value' => 'fa-facebook',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a4643f3ad6b0',
				'label' => 'Ссылка №2',
				'name' => 'sc_2',
				'type' => 'text',
				'required' => 1,
				'default_value' => 'google.com',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a46435dad6ab',
				'label' => 'Икона fa-fa №3',
				'name' => 'ico_fa-fa3',
				'type' => 'text',
				'required' => 1,
				'default_value' => 'fa-tumblr',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a4643f2ad6af',
				'label' => 'Ссылка №3',
				'name' => 'sc_3',
				'type' => 'text',
				'required' => 1,
				'default_value' => 'google.com',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a464379ad6ac',
				'label' => 'Икона fa-fa №4',
				'name' => 'ico_fa-fa4',
				'type' => 'text',
				'required' => 1,
				'default_value' => 'fa-google-plus',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a4643f1ad6ae',
				'label' => 'Ссылка №4',
				'name' => 'sc_4',
				'type' => 'text',
				'required' => 1,
				'default_value' => 'google.com',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_category',
					'operator' => '==',
					'value' => '15',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_category',
					'operator' => '==',
					'value' => '4',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}