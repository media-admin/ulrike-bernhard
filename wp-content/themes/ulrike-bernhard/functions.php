<?php
/**
 * Ulrike Bernhard Child Theme functions and definitions
 * 
 * @package Ulrike Bernhard Child Theme
 * @since 1.0
 */





/* #INSERT CATEGORY IN BODY-TAG-CLASS */ 
function categories_body_classes($classes) {
 
 
    if (is_single()) {
 
        global $wp_query;
 
        $pid = $wp_query->post->ID;
 
        $cats = wp_get_post_categories( $pid );
 
        foreach($cats as $cat) {
 
            $c = get_category($cat);
 
            $classes[] = 'category-'. $c->slug;
 
        }
 
    }
 
    return $classes;
}
 
add_filter('body_class', 'categories_body_classes');




/* INSERT POST THUMB IN POST */ 
if ( ! function_exists( 'theme_slug_setup' ) ) :
    /**
     * Sets up theme and registers support for various WordPress features.
     */
    function theme_slug_setup() {
        // Other Theme Setup code...

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );
    }
endif;
add_action( 'after_setup_theme', 'theme_slug_setup' );




/* SET CUSTOM POST THUMBNAIL SIZE */ 
add_image_size( 'theme-slug-single-post', 650, 9999, false );




/* DIFINE POST THUMB IN POST */ 
if ( ! function_exists( 'theme_slug_setup' ) ) :
    /**
     * Sets up theme and registers support for various WordPress features.
     */
    function theme_slug_setup() {
        // Other Theme Setup code...

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Set detfault Post Thumbnail size.
        set_post_thumbnail_size( 300, 200, true );

        // Add custom image size for single posts.
        add_image_size( 'theme-slug-single-post', 960, 9999 );
    }
endif;
add_action( 'after_setup_theme', 'theme_slug_setup' );





/**
 * Displays the navigation links for the posts and pages.
 * 
 * @since 1.0
 */
function edited_post_nav() {
?>
    <div class="post-nav">
        <div class="nav-next"><?php next_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Next post link', 'cognize' ) . '</span> ', TRUE ) ?></div>
        <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&rarr;', 'Previous post link', 'cognize' ) . '</span>', TRUE ) ?></div>
    </div>
        
    
    <?php


	



add_filter('get_next_post_sort',  'filter_next_and_prev_post_sort');

add_filter('get_previous_post_sort',  'filter_next_and_prev_post_sort');


function filter_next_and_prev_post_sort($sort) {
    $op = ('get_previous_post_sort' == current_filter()) ? 'DESC' : 'ASC';
    $sort = "ORDER BY p.ID ".$op ." LIMIT 1";
    return $sort;

}



add_filter( 'get_next_post_join', 'navigate_in_same_taxonomy_join', 20);

add_filter( 'get_previous_post_join', 'navigate_in_same_taxonomy_join', 20 );

function navigate_in_same_taxonomy_join() {
  global $wpdb;
  return " INNER JOIN $wpdb->term_relationships AS tr ON p.ID = tr.object_id INNER JOIN $wpdb->term_taxonomy tt ON tr.term_taxonomy_id = tt.term_taxonomy_id";
}





add_filter( 'get_next_post_where' , 'filter_next_and_prev_post_where' );

add_filter( 'get_previous_post_where' , 'filter_next_and_prev_post_where' );


function filter_next_and_prev_post_where( $original ) {
  global $wpdb, $post;
  $where = '';
  $taxonomy   = 'category';
  $op = ('get_previous_post_where' == current_filter()) ? '<' : '>';

  if ( ! is_object_in_taxonomy( $post->post_type, $taxonomy ) ) {
    return $original ;
  }

  $term_array = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );

  $term_array = array_map( 'intval', $term_array );

  if ( ! $term_array || is_wp_error( $term_array ) ) {
    return $original;
  }
  $where = " AND tt.term_id IN (" . implode( ',', $term_array ) . ")";
  return $wpdb->prepare( "WHERE p.ID $op %s AND p.post_type = %s AND p.post_status = 'publish' $where", $post->post_title, $post->post_type );
}


	
	
	
}


