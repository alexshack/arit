<?php
	 function arit_styles() {
		  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css'  );

		  wp_enqueue_script( 'modal', get_template_directory_uri() . '/js/modal.min.js', '', '1.0.0', false );
		  wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', '', '1.0.0', false );
		  wp_enqueue_script( 'showmore', get_template_directory_uri() . '/js/blocks/showmore.min.js', '', '1.0.0', false );
		  wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/js/dropdown.min.js', '', '1.0.0', false );
		  wp_enqueue_script( 'tabbar', get_template_directory_uri() . '/js/blocks/tabbar.min.js', '', '1.0.0', true );
		  wp_enqueue_script( 'header_and_footer', get_template_directory_uri() . '/js/blocks/headerAndFooter.min.js', '', '1.0.0', true );
		  wp_enqueue_script( 'forms', get_template_directory_uri() . '/js/form.js', '', '1.0.0', true   );
		  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/main.min.js', '', '1.0.0', true   );
	}
	add_action('wp_enqueue_scripts','arit_styles' );


	add_action( 'init', 'register_post_types' );
	function register_post_types(){
		register_post_type( 'seminars', array(
			'labels'             => array(
				'name'               => 'Семинары',
				'singular_name'      => 'Семинар',
				'add_new'            => 'Добавить новый',
				'add_new_item'       => 'Добавить новый семинар',
				'edit_item'          => 'Редактировать семинар',
				'new_item'           => 'Новый семинар',
				'view_item'          => 'Посмотреть семинар',
				'search_items'       => 'Найти семинар',
				'not_found'          => 'Семинаров не найдено',
				'not_found_in_trash' => 'Удаленных семинаров не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Семинары',
		  ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
			'menu_icon'          => 'dashicons-id-alt'
		) );


		register_post_type( 'webinars', array(
			'labels'             => array(
				'name'               => 'Вебинары',
				'singular_name'      => 'Вебинар',
				'add_new'            => 'Добавить новый',
				'add_new_item'       => 'Добавить новый вебинар',
				'edit_item'          => 'Редактировать вебинар',
				'new_item'           => 'Новый вебинар',
				'view_item'          => 'Посмотреть вебинар',
				'search_items'       => 'Найти вебинар',
				'not_found'          => 'Вебинаров не найдено',
				'not_found_in_trash' => 'Удаленных вебинаров не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Вебинары',
		  ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
			'menu_icon'          => 'dashicons-welcome-view-site'
		) );


		register_post_type( 'news', array(
			'labels'             => array(
				'name'               => 'Новость',
				'singular_name'      => 'Новость',
				'add_new'            => 'Добавить',
				'add_new_item'       => 'Добавить новость',
				'edit_item'          => 'Редактировать новость',
				'new_item'           => 'Новая новость',
				'view_item'          => 'Посмотреть новость',
				'search_items'       => 'Найти новость',
				'not_found'          => 'Новостей не найдено',
				'not_found_in_trash' => 'Удаленных новостей не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Новости',
		  ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
			'menu_icon'          => 'dashicons-admin-site-alt3'
		) );

		// register_post_type( 'courses', array(
		//   'labels'             => array(
		//     'name'               => 'Курс',
		//     'singular_name'      => 'Курс',
		//     'add_new'            => 'Добавить новый',
		//     'add_new_item'       => 'Добавить курс',
		//     'edit_item'          => 'Редактировать курс',
		//     'new_item'           => 'Новый курс',
		//     'view_item'          => 'Посмотреть курс',
		//     'search_items'       => 'Найти курс',
		//     'not_found'          => 'Курсов не найдено',
		//     'not_found_in_trash' => 'Удаленных курсов не найдено',
		//     'parent_item_colon'  => '',
		//     'menu_name'          => 'Курсы',
		//   ),
		//   'public'             => true,
		//   'publicly_queryable' => true,
		//   'show_ui'            => true,
		//   'show_in_menu'       => true,
		//   'query_var'          => true,
		//   'rewrite'            => true,
		//   'capability_type'    => 'post',
		//   'has_archive'        => true,
		//   'hierarchical'       => false,
		//   'menu_position'      => null,
		//   'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
		//   'menu_icon'          => 'dashicons-welcome-learn-more',
		//   'taxonomies'         => array( 'category', 'post_tag'	),
		// ) );

		register_post_type( 'courses_skillup', array(
			'labels'             => array(
				'name'               => 'Курс ПК',
				'singular_name'      => 'Курс ПК',
				'add_new'            => 'Добавить новый',
				'add_new_item'       => 'Добавить курс ПК',
				'edit_item'          => 'Редактировать курс ПК',
				'new_item'           => 'Новый курс ПК',
				'view_item'          => 'Посмотреть курс ПК',
				'search_items'       => 'Найти курс ПК',
				'not_found'          => 'Курсов ПК не найдено',
				'not_found_in_trash' => 'Удаленных курсов ПК не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Курсы ПК',
		  ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
			'menu_icon'          => 'dashicons-welcome-learn-more',
			'taxonomies'         => array( 'category', 'post_tag'	),
		) );

		register_post_type( 'courses_retrain', array(
			'labels'             => array(
				'name'               => 'Курс ПП',
				'singular_name'      => 'Курс ПП',
				'add_new'            => 'Добавить новый',
				'add_new_item'       => 'Добавить курс ПП',
				'edit_item'          => 'Редактировать курс ПП',
				'new_item'           => 'Новый курс ПП',
				'view_item'          => 'Посмотреть курс ПП',
				'search_items'       => 'Найти курс ПП',
				'not_found'          => 'Курсов ПП не найдено',
				'not_found_in_trash' => 'Удаленных курсов ПП не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Курсы ПП',
		  ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
			'menu_icon'          => 'dashicons-welcome-learn-more',
			'taxonomies'         => array( 'category', 'post_tag'	),
		) );
		
		register_post_type( 'jobs', array(
			'labels'             => array(
				'name'               => 'Вакансия',
				'singular_name'      => 'Вакансия',
				'add_new'            => 'Добавить новую',
				'add_new_item'       => 'Добавить вакансию',
				'edit_item'          => 'Редактировать вакансию',
				'new_item'           => 'Новая вакания',
				'view_item'          => 'Посмотреть вакансию',
				'search_items'       => 'Найти вакансию',
				'not_found'          => 'Вакансий не найдено',
				'not_found_in_trash' => 'Удаленных вакансий не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Вакансии',
		  ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
			'menu_icon'          => 'dashicons-nametag',
			'taxonomies'         => array( 'category' ),
		) );

		register_post_type( 'partners', array(
			'labels'             => array(
				'name'               => 'Партнер',
				'singular_name'      => 'Партнер',
				'add_new'            => 'Добавить нового',
				'add_new_item'       => 'Добавить партнеры',
				'edit_item'          => 'Редактировать партнера',
				'new_item'           => 'Новый преподаватель',
				'view_item'          => 'Посмотреть партнера',
				'search_items'       => 'Найти партнера',
				'not_found'          => 'Партнеров не найдено',
				'not_found_in_trash' => 'Удаленных Партнеров не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Партнеры',
		  ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
			'menu_icon'          => 'dashicons-admin-users',
		) );

		register_post_type( 'teachers', array(
			'labels'             => array(
				'name'               => 'Преподаватель',
				'singular_name'      => 'Преподаватель',
				'add_new'            => 'Добавить нового',
				'add_new_item'       => 'Добавить преподавателя',
				'edit_item'          => 'Редактировать преподавателя',
				'new_item'           => 'Новый преподаватель',
				'view_item'          => 'Посмотреть преподавателя',
				'search_items'       => 'Найти преподавателя',
				'not_found'          => 'Преподавателей не найдено',
				'not_found_in_trash' => 'Удаленных преподавателей не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Преподаватели',
		  ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
			'menu_icon'          => 'dashicons-admin-users',
		) );


		register_post_type( 'testimonials', array(
			'labels'             => array(
				'name'               => 'Отзыв',
				'singular_name'      => 'Отзыв',
				'add_new'            => 'Добавить новый',
				'add_new_item'       => 'Добавить отзыв',
				'edit_item'          => 'Редактировать отзыв',
				'new_item'           => 'Новый отзыв',
				'view_item'          => 'Посмотреть отзыв',
				'search_items'       => 'Найти отзыв',
				'not_found'          => 'Отзывов не найдено',
				'not_found_in_trash' => 'Удаленных отзывов не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Отзывы',
		  ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
			'menu_icon'          => 'dashicons-thumbs-up',
		) );

		register_post_type( 'licenses', array(
			'labels'             => array(
				'name'               => 'Лицензия',
				'singular_name'      => 'Лицензия',
				'add_new'            => 'Добавить новую',
				'add_new_item'       => 'Добавить лицензию',
				'edit_item'          => 'Редактировать лицензию',
				'new_item'           => 'Новая лицензия',
				'view_item'          => 'Посмотреть лицензию',
				'search_items'       => 'Найти лицензию',
				'not_found'          => 'Лицензий не найдено',
				'not_found_in_trash' => 'Удаленных Лицензий не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Лицензии',
		  ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
		) );
	
		register_post_type( 'docs', array(
			'labels'             => array(
				'name'               => 'Документ',
				'singular_name'      => 'Документ',
				'add_new'            => 'Добавить новую',
				'add_new_item'       => 'Добавить документ',
				'edit_item'          => 'Редактировать документ',
				'new_item'           => 'Новый документ',
				'view_item'          => 'Посмотреть документ',
				'search_items'       => 'Найти документ',
				'not_found'          => 'Документов не найдено',
				'not_found_in_trash' => 'Удаленных документов не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Документы',
		  ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
		) );

	}


/* Должен быть обработчик писем, но не работает так*/
if(function_exists('add_theme_support')) {
	add_theme_support('menus');
}

function mihdan_debug_wp_mail( $wp_error ) {
    return error_log( print_r( $wp_error, true ) );
}
add_action( 'wp_mail_failed', 'mihdan_debug_wp_mail', 10, 1 );


/*===   Security   ===*/

// Hide WP version
function wp_version_remove_version() {
return '';
}
add_filter('the_generator', 'wp_version_remove_version');



// add_filter( 'wpseo_opengraph_url', 'replace_url_punycode' );
// function replace_url_punycode( $url ) {
//   return idn_to_utf8($url);
// }


add_filter( 'wpseo_breadcrumb_links', 'yoast_seo_breadcrumb_append_link' );

function yoast_seo_breadcrumb_append_link( $links ) {
    global $post;
    if ( is_tag() ) {
        $breadcrumb[] = array(
            'url' => site_url( '/learning/' ),
            'text' => 'Обучение',
        );
        array_splice( $links, 1, -2, $breadcrumb );
    }
    if ( is_singular(['courses_skillup', 'courses_retrain']) ) {
        $breadcrumb[] = array(
            'url' => site_url( '/learning/' ),
            'text' => 'Обучение',
        );
        array_splice( $links, 1, -2, $breadcrumb );
    }
   
    return $links;
}
