<?php
/**
 * The homepage file.
 * 
 * @package Cognize
 */
?>
<?php get_header() ?>

<div id="content-section" class="content-section blog-page grid-col-16">
    <div class="inner-content-section">
        
            <?php if( have_posts() ) : ?>
        
            <div class="archive-meta-container">
                <div class="archive-head">
                    <?php echo apply_filters('cognize_blog_template_heading_filter', '') ?>
                </div>
                <div class="archive-description">
                </div>
            </div><!-- Archive Meta Container ends -->

                    <div class="loop-container-section clearfix">
                    
                    <?php
                    // Here starts the loop
                    while( have_posts() ): the_post();
                        get_template_part( 'loop', 'home' );
                    endwhile;
                    ?>
                        
                    </div><!-- loop-container-section ends -->

                <?php cognize_archive_nav(); // Calls the 'Previous' and 'Next' Post Links. ?>

            <?php else : ?>

                    <?php cognize_404_show(); // Function dedicated for handling empty queries. ?>

            <?php endif;?>

        
    </div><!-- inner-content-section ends -->
</div><!-- Content-section ends here -->

<?php get_footer() ?>