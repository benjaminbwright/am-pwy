<?php

/*** Menus ***/
function mytheme_setup() {
	
	//This theme uses wp_nav_menu in one location
	register_nav_menu(
		//the menu's theme location
		'main',
		//menu title
		'Main Menu'
	);

}

add_action(
	//after the hook...
	'after_setup_theme',
	//run the action...
	'mytheme_setup'
);

/*** CSS Classes ***/
function mytheme_menu_item_classes($classes) {
	if (
		in_array(
			//check if this css class is in $classes
			'current-menu-item',
			$classes
		)
	) {
		array_push(
			//if so, put this other class in there too
			$classes,
			'active'
		);
	}
	//return the updated classes
	return $classes;
}

add_filter(
	//filter nav menu classes
	'nav_menu_css_class',
	//with this function
	'mytheme_menu_item_classes'
);

/*** Widgets ***/

function mytheme_widgets_init() {
	//Register all of the sidebar(widget) areas.
	
	//Footer sidebar
	register_sidebar(
		array(
			//What's the name, and what theme does it live in?
			'name' 			=> __('Footer Widget Area', 'mytheme'),
			//What's the specific id for the sidebar
			'id' 			=> 'footer',
			//Tell us about this sidebar
			'description'	=> __('Appears in the footer section of the site. Limited to 900px', 'mytheme'),
			//tags & CSS classes for styling
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' 	=> '</aside>',
			'befor_title'	=> '<h3 class="widget-title">',
			'after_title'	=> '</h3>'
		)
	);
	
	//Header sidebar
	register_sidebar(
		array(
			//What's the name, and what theme does it live in?
			'name' 			=> __('Header Widget Area', 'mytheme'),
			//What's the specific id for the sidebar
			'id' 			=> 'header',
			//Tell us about this sidebar
			'description'	=> __('Appears on the right side of the header. Limited to 300px', 'mytheme'),
			//tags & CSS classes for styling
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' 	=> '</aside>',
			'befor_title'	=> '<h3 class="widget-title">',
			'after_title'	=> '</h3>'
		)
	);
	
	//Blog sidebar widget area
	register_sidebar(
		array(
			//What's the name, and what theme does it live in?
			'name' 			=> __('Blog Sidebar Widget Area', 'mytheme'),
			//What's the specific id for the sidebar
			'id' 			=> 'blog-sidebar',
			//Tell us about this sidebar
			'description'	=> __('Appears on blogs as a sidebar. Limited to 300px', 'mytheme'),
			//tags & CSS classes for styling
			'before_widget' => '<aside id="%1$s" class="widget col-md-3 %2$s">',
			'after_widget' 	=> '</aside>',
			'befor_title'	=> '<h3 class="widget-title">',
			'after_title'	=> '</h3>'
		)
	);

	//Page sidebar widget area
	register_sidebar(
		array(
			//What's the name, and what theme does it live in?
			'name' 			=> __('Page Sidebar Widget Area', 'mytheme'),
			//What's the specific id for the sidebar
			'id' 			=> 'page-sidebar',
			//Tell us about this sidebar
			'description'	=> __('Appears on static pages as a sidebar. Limited to 300px', 'mytheme'),
			//tags & CSS classes for styling
			'before_widget' => '<aside id="%1$s" class="widget col-md-3 %2$s">',
			'after_widget' 	=> '</aside>',
			'befor_title'	=> '<h3 class="widget-title">',
			'after_title'	=> '</h3>'
		)
	);

	//Front Page sidebar widget area
	register_sidebar(
		array(
			//What's the name, and what theme does it live in?
			'name' 			=> __('Front Page Sidebar Widget Area', 'mytheme'),
			//What's the specific id for the sidebar
			'id' 			=> 'front-page-sidebar',
			//Tell us about this sidebar
			'description'	=> __('Appears on Front pages above the footer widgets. Limited to 300px', 'mytheme'),
			//tags & CSS classes for styling
			'before_widget' => '<aside id="%1$s" class="widget col-md-3 %2$s">',
			'after_widget' 	=> '</aside>',
			'befor_title'	=> '<h3 class="widget-title">',
			'after_title'	=> '</h3>'
		)
	);	
}

add_action(
	//The hook
	'widgets_init',
	//The action
	'mytheme_widgets_init'
);

require get_template_directory() . '/lichen/functions.php';