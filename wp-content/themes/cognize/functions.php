<?php
/**
 * Cognize Theme functions and definitions
 * 
 * @package Cognize
 * @since 1.0
 */


/**
 * Cognize Theme Constants
 * 
 * @since 1.0
 */
define('COGNIZE_PRO', FALSE);
define('COGNIZE_ASSETS_URL', get_template_directory_uri() . '/assets/');
define('COGNIZE_GLOBAL_URL', COGNIZE_ASSETS_URL . 'global/');
define('COGNIZE_GLOBAL_JS_URL', COGNIZE_ASSETS_URL . 'global/js/');
define('COGNIZE_GLOBAL_IMAGES_URL', COGNIZE_ASSETS_URL . 'global/images/');
define('COGNIZE_GLOBAL_CSS_URL', COGNIZE_ASSETS_URL . 'global/css/');
define('COGNIZE_ADMIN_URL', COGNIZE_ASSETS_URL . 'admin/');
define('COGNIZE_INCLUDES_DIR' , get_template_directory() . '/includes/' );



/**
 * Cognize Theme Variables
 * 
 * @since 1.0
 */
$cognize_post_count = 1;
$cognize_sticky_count = 0;



/**
 * Includes Customizer
 */
require_once COGNIZE_INCLUDES_DIR . 'customizer.php';



/**
 * Sets up theme defaults and registers support for various theme features
 * 
 * @since 1.0
 */
function cognize_setup() {
    
    global $content_width;
    
    /**
     * Primary content width according to the design and stylesheet.
     */
    if ( ! isset( $content_width ) ) { $content_width = 700; }
    
    /**
     * Makes cognize Theme ready for translation.
     * Translations can be filed in the /languages/ directory
     */
    load_theme_textdomain('cognize', get_template_directory() . '/languages');

    /**
     * Add default posts and comments RSS feed links to head.
     */
    add_theme_support('automatic-feed-links');

    /**
     * Adds supports for Theme menu.
     * Cognize uses wp_nav_menu() in a single location to diaplay one single menu.
     */
    register_nav_menu('primary', 'Primary Menu');

    /**
     * Add support for Post Thumbnails.
     * Defines a custom name and size for Thumbnails to be used in the theme.
     *
     * Note: In order to use the default theme thumbnail, add_image_size() must be removed
     * and 'cognizeThumb' value must be removed from the_post_thumbnail in the loop file.
     */
    add_theme_support('post-thumbnails');
    add_image_size('cognizeThumb', 175, 150, true);
    
    /**
     * Add support for title-tag
     */
    add_theme_support('title-tag');
}
add_action( 'after_setup_theme', 'cognize_setup' );



/**
 * Defines menu values and call the menu itself.
 * The menu is registered using register_nav_menu function in the theme setup.
 * 
 * @since 1.0
 */
function cognize_nav() {
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'container_id' => 'menu',
        'menu_class' => 'sf-menu cognize_menu',
        'menu_id' => 'cognize_menu',
        'fallback_cb' => 'cognize_nav_fallback' // Fallback function in case no menu item is defined.
    ));
}



/**
 * Displays a custom menu in case either no menu is selected or
 * menu does not contains any items or wp_nav_menu() is unavailable.
 * 
 * @since 1.0
 */
function cognize_nav_fallback() {
?>
    <div id="menu">
    	<ul class="sf-menu" id="cognize_menu">
			<?php
            	wp_list_pages( 'title_li=&sort_column=menu_order&depth=3');
            ?>
        </ul>
    </div>
<?php
}



/**
 * Register sidebars one at right and three footer sidebars in a box.
 * 
 * @since 1.0
 */
function cognize_sidebars() {

    // Footerbox Sidebar #1
    register_sidebar(array(
        'name' => __('Footerbox Sidebar #1', 'cognize'),
        'id' => 'footerbox_sidebar_1',
        'description' => __('Footerbox Sidebar #1', 'cognize'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
    
    // Footerbox Sidebar #2
    register_sidebar(array(
        'name' => __('Footerbox Sidebar #2', 'cognize'),
        'id' => 'footerbox_sidebar_2',
        'description' => __('Footerbox Sidebar #2', 'cognize'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
    
    // Footerbox Sidebar #3
    register_sidebar(array(
        'name' => __('Footerbox Sidebar #3', 'cognize'),
        'id' => 'footerbox_sidebar_3',
        'description' => __('Footerbox Sidebar #3', 'cognize'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
    
}
add_action( 'widgets_init', 'cognize_sidebars' );



/**
 * Enqueue CSS and JS files
 * 
 * @since 1.0
 */
function cognize_enqueue() {
   
    wp_enqueue_style('cognize-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,600italic,700italic,800,800italic');
    wp_enqueue_style('cognize-font-awesome', COGNIZE_ADMIN_CSS_URL . 'font-awesome.4.5.0.css');
    wp_enqueue_style('cognize-stylesheet', get_stylesheet_uri(), false, '1.0.4', 'all' );
    
    // Enqueue (comment-reply )Javascript in case of threaded comments.
    if (is_singular() && comments_open() && get_option('thread_comments')) :
        wp_enqueue_script('comment-reply');
    endif;
    
    wp_enqueue_script('cognize-superfish', COGNIZE_GLOBAL_JS_URL . 'superfish.min.js', array( 'jquery' ), '1.4.8', true);
    wp_enqueue_script('jquery-color');
    wp_enqueue_script('cognize-custom', COGNIZE_GLOBAL_JS_URL . 'custom.js', array( 'jquery' ), '1.0.0', true);
    
    /* ----------- DAS IST NEU -------------- */
    
    	wp_enqueue_script('cognize-custom', COGNIZE_GLOBAL_JS_URL . 'jquery-migrate.js', array( 'jquery' ), '3.3.1', true);
    
    /* -------------------------------------- */
    
}
add_action( 'wp_enqueue_scripts', 'cognize_enqueue');



/**
 * Hooks respond.js for IE in the wp_head hook.
 * 
 * @since 1.0
 */
function cognize_enqueue_ie_script() {
    echo "\n";
    ?><!--[if lt IE 9]><script type='text/javascript' src='<?php echo COGNIZE_GLOBAL_JS_URL ?>respond.js?ver=1.0'></script><![endif]--><?php
    echo "\n";
    ?><!--[if lt IE 9]><script type='text/javascript' src='<?php echo COGNIZE_GLOBAL_JS_URL ?>html5shiv.min.js'></script><![endif]--><?php
    echo "\n";
}
add_action('wp_head', 'cognize_enqueue_ie_script');



/**
 * Defines the number of characters for post excerpts
 * and is added to excerpt_length filter.
 * 
 * @since 1.0
 */
function cognize_excerpt_length( $length ) {
	return 43;
}
add_filter( 'excerpt_length', 'cognize_excerpt_length' );



/**
 * Defines the text for the (read more) link for post excerpts
 * and is added to excerpt_more filter.
 * 
 * @since 1.0
 */
function cognize_auto_excerpt_more( $more ) {
	return '&hellip;' ;
}
add_filter( 'excerpt_more', 'cognize_auto_excerpt_more' );



/**
 * Used to return body classes
 * 
 * @param array $classes
 * @return array
 * @since 1.0
 */
function cognize_body_class($classes) {
    
    if(is_single()):
        
        $classes[] = 'single-template';
        $classes[] = 'post-template';
    
    elseif(is_page()):
        
        $classes[] = 'page-template';
        $classes[] = 'post-template';

    elseif(is_front_page()):
        
        $classes[] = 'home-template';
    
    elseif(is_home()):
        
        $classes[] = 'home-template';
        $classes[] = 'blog-template';
    
    elseif (is_archive()):
        
        $classes[] = 'archive-template';
    
    elseif(is_404()):
        
        $classes[] = 'archive-template';
        $classes[] = 'empty-template';
    
    elseif(is_search()):
        
        $classes[] = 'archive-template';
        $classes[] = 'search-template';
    
    endif;
    
        $classes[] = 'white';
    
    return $classes;
}
add_filter('body_class', 'cognize_body_class');


/**
 * Used to display CTA section
 * 
 * @since 1.0
 */
function cognize_cta_section_show(){
    ?>
    <?php if(!cognize_get_option('disable_cta_section')): ?>
        <div id="cta-bg-section" class="cta-bg-section grid-col-16 clearfix">
            <div id="cta-section" class="cta-section grid-col-16 clearfix">
                <div id="cta-image-section" class="cta-image-section grid-col-6 grid-float-left"><img src="<?php echo esc_url( cognize_get_option('featured_image') ) ?>" /></div>
                <div id="cta-content-section" class="cta-content-section grid-col-10 grid-float-right">
                    <div class="cta-content-heading"><span><?php echo esc_html( cognize_get_option('featured_heading') ) ?></span></div>
                    <div class="cta-content-text"><span><?php echo esc_html( cognize_get_option('featured_content') ) ?></span></div>

                        <div class="cta-buttons clearfix">
                            <div class="cta-button-1 clearfix"><a title="<?php echo esc_attr( cognize_get_option('cta_button_1') ) ?>" href="<?php echo esc_url( cognize_get_option('cta_button_url_1') ) ?>"><?php if(!cognize_get_option('disable_cta_icons')){ ?><i class="mdf mdf-<?php echo esc_attr( cognize_get_option('cta_button_icon_1') ) ?>"></i><?php } ?><?php echo esc_html( cognize_get_option('cta_button_1') ) ?></a></div>
                            <div class="cta-button-2 clearfix"><a title="<?php echo esc_attr( cognize_get_option('cta_button_2') ) ?>" href="<?php echo esc_url( cognize_get_option('cta_button_url_2') ) ?>"><?php if(!cognize_get_option('disable_cta_icons')){ ?><i class="mdf mdf-<?php echo esc_attr( cognize_get_option('cta_button_icon_2') ) ?>"></i><?php } ?><?php echo esc_html( cognize_get_option('cta_button_2') ) ?></a></div>
                        </div>

                </div>
            </div> <!-- cta section ends -->
        </div>
    <?php endif; ?>

<?php }



/**
 * Used to display featured box section
 * 
 * @since 1.0
 */
function cognize_featured_box_section_show() {
    
    if (!cognize_get_option('disable_featured_boxes')):
    ?>
            <div class="mudpack-shortcodes">
                <div class="mudpack-columns mudpack-contentbox featured-box">
                    <div class="mudpack-columns-3">
    <?php
        for($i = 1; $i <= 3; $i++){
            $fb_title = cognize_get_option('featured_box_'.$i.'_title');
            $fb_content = cognize_get_option('featured_box_'.$i.'_content');
            $fb_icon = cognize_get_option('featured_box_'.$i.'_icon');
    ?>
        
                        <div class="single-column mudpack-column-<?php echo $i ?>">
                            <div class="mudpack-cb-icon-location-left mudpack-cb-icon-border-circular">
                                <div class="mudpack-cb-icon"><i class="mdf mdf-<?php echo esc_attr( $fb_icon ) ?>"></i></div>
                                <div class="mudpack-cb-title"><span><?php echo esc_html( $fb_title ) ?></span></div>
                                <div class="mudpack-cb-content"><span><?php echo esc_html( $fb_content ) ?></span></div>
                            </div>
                        </div>
    <?php } ?>
                    </div>
                </div>
            </div> <!-- content box section ends -->
            
<?php 
    endif;
}



/**
 * Checks whether the all the content sections are disabled or not.
 * 
 * @since 1.0
 */
function cognize_is_home() {
    
    if(cognize_get_option('disable_cta_section') && cognize_get_option('disable_featured_boxes') && (get_option('show_on_front') == 'posts')){
        add_filter('cognize_blog_template_heading_filter', 'cognize_is_blog_heading_text', 20);
        return TRUE;
    } else {
        return FALSE;
    }
}



/**
 * Adds text to cognize_blog_template_heading_filter used on home.php
 * 
 * @return string
 */
function cognize_is_blog_heading_text(){
    return '';
}



/**
 * Used to display social section
 * 
 * @since 1.0
 */
function cognize_social_section_show() {
    
    if(!cognize_get_option('disable_social_section')):

    $output = false;
    ?>            
                
                <?php if(cognize_get_option('facebook')): ?>
                <?php $output .= '
                <div class="social-icons">
                    <a href="'.esc_url(cognize_get_option('facebook')).'" title="Facebook Profile"><i class="mdf mdf-facebook"></i></a>
                </div>' ?>
                <?php endif ?>
                
                <?php if(cognize_get_option('twitter')): ?>
                <?php $output .= '
                <div class="social-icons">
                    <a href="'.esc_url(cognize_get_option('twitter')).'" title="Twitter Profile"><i class="mdf mdf-twitter"></i></a>
                </div>' ?>
                <?php endif ?>
                
                <?php if(cognize_get_option('rss')): ?>
                <?php $output .= '
                <div class="social-icons">
                    <a href="'.esc_url(cognize_get_option('rss')).'" title="RSS Feed"><i class="mdf mdf-rss"></i></a>
                </div>' ?>
                <?php endif ?>
                
                <?php if($output !== false): ?>
                <div id="social-section" class="social-section grid-col-16 clearfix">
                    <?php echo $output ?>
                </div>
                <?php endif ?>
            
            <div class="socialicons-mi"></div><div class="socialicons-mo"></div>

<?php
    endif;
}



/**
 * Displays the content in case of 404 page, empty search query
 * and any other query which does not output any result.
 * 
 * Both heading and content of the page will be displayed with a
 * search form. Any modification to this module will effect only
 * 404 error or related pages.
 * 
 * @since 1.0
 */
function cognize_404_show(){
?>
        <div class="archive-meta-container">
            <div class="archive-head">
                <?php if (is_404()) : ?>
                    <h1><?php _e('Ooops! Nothing Found', 'cognize'); ?></h1>
                <?php elseif (is_search()) : ?>
                    <h1><?php printf(__('Nothing found for: %s', 'cognize'), get_search_query()); ?></h1>
                <?php else : ?>
                    <h1><?php printf(__('Nothing found for: %s', 'cognize'), single_term_title('', false)); ?></h1>
                <?php endif; ?>
            </div>
        </div><!-- Archive Meta Container ends -->
        
        <div class="archive-loop-container archive-empty">
            <div class="archive-excerpt">
                <p><?php _e('Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'cognize'); ?></p>
                <?php get_search_form(); ?>
            </div>
        </div>
<?php }



/**
 * Decides and returns the accurate 'text' to be displayed.
 * 
 * @return string
 * @since 1.0
 */
function cognize_date_text() {
    if (is_date()):
        if (is_day()):
            $date_text = __('Day', 'cognize');
        elseif (is_month()):
            $date_text = __('Month', 'cognize');
        elseif (is_year()):
            $date_text = __('Year', 'cognize');
        else:
            $date_text = __('Period', 'cognize');
        endif;

        return $date_text;

    endif;
}



/**
 * Displays the navigation links for the archive pages. Is only
 * applicable if the total number of pages is more than 'one'.
 * 
 * @since 1.0
 */
function cognize_archive_nav() {
    
    global $wp_query;

    if ($wp_query->max_num_pages > 1): ?>
        
        <div class="archive-nav grid-col-16">
            <div class="nav-next"><?php previous_posts_link(__('<span class="meta-nav">&larr;</span> Newer posts', 'cognize')); ?></div>
            <div class="nav-previous"><?php next_posts_link(__('Older posts <span class="meta-nav">&rarr;</span>', 'cognize')); ?></div>
        </div>
        
<?php endif;
}



/**
 * Displays the navigation links for the posts and pages.
 * 
 * @since 1.0
 */
function cognize_post_nav() {
?>
    <div class="post-nav">
        <div class="nav-previous"><?php previous_post_link( '%link', '%title, TRUE <span class="meta-nav">' . _x( '&rarr;', 'Previous post link', 'cognize' ) . '</span>' ) ?></div>
        <div class="nav-next"><?php next_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Next post link', 'cognize' ) . '</span> %title' ) ?></div>
    </div>
<?php
}



/**
 * Display site title/description or logo
 * 
 * @since 1.0
 */
function cognize_logo() {
    
    $logo = cognize_get_option('logo_img');
            
        if( empty($logo)): ?>
        
        <div id="site-title" class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ) . ' | ' . esc_attr( get_bloginfo('description') ) ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name', 'display' )) ?></a>
            </div>
            <?php if(!cognize_get_option('disable_site_desc')): ?>
                <div id="site-description" class="site-description"><?php bloginfo( 'description' ) ?></div>
            <?php endif; ?>
        <?php else: ?>
        
            <div id="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ) ?>" rel="home"><img src="<?php echo esc_url( cognize_get_option('logo_img') ) ?>"/></a>
            </div>

        <?php endif;
}



/**
 * Template for comments and pingbacks.
 * 
 * @since 1.0
 */
function cognize_comment_callback( $comment, $args, $depth ) {

  $GLOBALS['comment'] = $comment;
  switch ( $comment->comment_type ):

         case '' :
		 // Proceed with normal comments.
  ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
        <?php if ($comment->comment_approved == '0') : ?><div class="comment-awaiting"><em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'cognize'); ?></em></div><?php endif; ?>
    		<?php $cognize_get_comment_ID = get_comment_ID() ?>
		<?php $cognize_is_comment_reply = get_comment($cognize_get_comment_ID)->comment_parent ?>
		<?php $cognize_the_comment_author = get_comment_author(get_comment($cognize_get_comment_ID)->comment_parent) ?>
        <?php if($cognize_is_comment_reply != 0 ) printf('<div class="comment-parent-author"><span>Replied to %s</span></div>', $cognize_the_comment_author ) ?>
      <div id="comment-<?php comment_ID(); ?>" class="comment-block-container grid-float-left grid-col-16">
          
          
                     <div class="comment-info-container grid-col-4 grid-float-left">
                          <div class="comment-author vcard">
                              <div class="comment-author-avatar-container"><?php echo get_avatar($comment, 100); ?></div>
                              <div class="comment-author-info-container">
                                  <div class="comment-author-name"><?php printf(__('%s <span class="says"></span>', 'cognize'), sprintf('<cite class="fn">%s</cite>', get_comment_author_link())) ?></div>
                              </div>
                          </div><!-- .comment-author .vcard -->
                     </div>
          
                     <div class="comment-body-container grid-col-12 grid-float-left">
                        <div class="comment-body"><?php comment_text(); ?></div>
                        <div class="comment-meta commentmetadata"><a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>"><?php printf(__('%1$s at %2$s', 'cognize'), get_comment_date(), get_comment_time()); ?></a></div>
                        <div class="reply"><?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></div>
                        <?php edit_comment_link(__('(Edit)', 'cognize'), '<div class="comment-edit">', '</div>');?>
                     </div>

      </div><!-- #comment-##  -->

<?php
         break;

         case 'pingback' :
         case 'trackback' :
		 // Display trackbacks differently than normal comments.
  ?>

  <li class="post pingback">
      <p><?php _e( 'Pingback:', 'cognize' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'cognize' ), ' ' ); ?></p>

  <?php
         break;

  endswitch;
}



/**
 * Adds text to cognize_readmore_text_filter
 * 
 * @return string
 * @since 1.0
 */
function cognize_readmore_text() {
    return __('Read more', 'cognize');
}
add_filter('cognize_readmore_text_filter', 'cognize_readmore_text', 10);



/**
 * Adds text to cognize_blog_template_heading_filter used on home.php
 * 
 * @return string
 * @since 1.0
 */
function cognize_blog_template_heading_text() {
    return '<h1>' . get_bloginfo('name') . ' Blog</h1>';
}
add_filter('cognize_blog_template_heading_filter', 'cognize_blog_template_heading_text', 10);