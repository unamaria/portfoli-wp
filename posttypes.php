<?php
// Add new post type for Photos
add_action('init', 'helloworld_photos_init');
function helloworld_photos_init() 
{
	$photo_labels = array(
		'name' => _x('Photos', 'post type general name'),
		'singular_name' => _x('Photo', 'post type singular name'),
		'all_items' => __('All Photos'),
		'add_new' => _x('Add new photo', 'photos'),
		'add_new_item' => __('Add new photo'),
		'edit_item' => __('Edit photo'),
		'new_item' => __('New photo'),
		'view_item' => __('View photo'),
		'search_items' => __('Search in photos'),
		'not_found' =>  __('No photos found'),
		'not_found_in_trash' => __('No photos found in trash'), 
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $photo_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','author','thumbnail','excerpt','custom-fields'),
		'has_archive' => 'photos'
	); 
	register_post_type('photos',$args);
}

// Add new post type for Projects
add_action('init', 'helloworld_projects_init');
function helloworld_projects_init() 
{
	$project_labels = array(
		'name' => _x('Projects', 'post type general name'),
		'singular_name' => _x('Project', 'post type singular name'),
		'all_items' => __('All Projects'),
		'add_new' => _x('Add new project', 'projects'),
		'add_new_item' => __('Add new project'),
		'edit_item' => __('Edit project'),
		'new_item' => __('New project'),
		'view_item' => __('View project'),
		'search_items' => __('Search in projects'),
		'not_found' =>  __('No projects found'),
		'not_found_in_trash' => __('No projects found in trash'), 
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $project_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','author','thumbnail','excerpt','custom-fields'),
		'has_archive' => 'projects'
	); 
	register_post_type('projects',$args);
}

// Add new post type for Books
add_action('init', 'helloworld_books_init');
function helloworld_books_init() 
{
	$book_labels = array(
		'name' => _x('Books', 'post type general name'),
		'singular_name' => _x('Books', 'post type singular name'),
		'all_items' => __('All Books'),
		'add_new' => _x('Add new book', 'books'),
		'add_new_item' => __('Add new book'),
		'edit_item' => __('Edit book'),
		'new_item' => __('New book'),
		'view_item' => __('View book'),
		'search_items' => __('Search in books'),
		'not_found' =>  __('No books found'),
		'not_found_in_trash' => __('No books found in trash'), 
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $book_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','author','thumbnail','excerpt','custom-fields'),
		'has_archive' => 'books'
	); 
	register_post_type('books',$args);
}

?>