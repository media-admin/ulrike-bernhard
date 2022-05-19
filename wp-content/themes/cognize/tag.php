<?php
/**
 * Template for displaying tag archive posts.
 * 
 * @package Cognize
 */
?>
<?php get_header() ?>

<div id="content-section" class="content-section grid-col-16">
    <div class="inner-content-section">

              <?php if( have_posts() ) : ?>

                    <div class="archive-meta-container">
                         <div class="archive-head">
                              <h1><?php printf( __( 'Tag Archives: %s', 'cognize' ), '' . single_term_title( '', false ) . '' ) ?></h1>
                         </div>
                         <div class="archive-description">
                              <?php
                                   $tag_description = tag_description();
                                   if ( ! empty( $tag_description ) )
                                   echo apply_filters( 'tag_archive_meta', '' . $tag_description . '' );
                              ?>
                         </div>
                       
                    </div><!-- Archive Meta Container ends -->
                    

                    <?php if( have_posts() ) : ?>

                    <div class="loop-container-section clearfix">

                        <?php
                            // Here starts the loop
                            while (have_posts()): the_post();
                                get_template_part('loop', get_post_format());
                            endwhile;
                        ?>                

                    </div><!-- loop-container-section ends -->

                    <?php endif; ?>
                    
                    
                    <?php cognize_archive_nav() // Calls the 'Previous' and 'Next' Post Links  ?>

              <?php else : ?>

                    <?php cognize_404_show() // Function dedicated for handling empty queries. ?>

              <?php endif ?>

    </div><!-- inner-content-section ends -->
</div><!-- Content-section ends here -->

<?php get_footer() ?>