<?php
/**
 * Template for displaying author archive page.
 * 
 * @package Cognize
 */
?>
<?php get_header() ?>

<div id="content-section" class="content-section grid-col-16">
    <div class="inner-content-section">
        
              <?php if ( have_posts() ) : the_post() ?>

                    <div class="archive-meta-container">
                         <div class="archive-head">
                              <h1 class="page-title author"><?php printf( __( 'Author Archives: %s', 'cognize' ), "<span class='vcard'><a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a></span>" ) ?></h1>
                         </div>
                         <div class="archive-description">
                              <?php
                                   if ( get_the_author_meta( 'description' ) ) :
                                   	printf( '%s', "<p>" . get_the_author_meta( 'description' ) . "</p>" );
                                   endif;
                              ?>
                         </div>


                    </div><!-- Archive Meta Container ends -->

                    <div class="loop-container-section clearfix">

                        <?php
                            // Here starts the loop
                            rewind_posts();
                            while (have_posts()): the_post();
                                get_template_part('loop', 'archive');
                            endwhile;
                        ?>                

                    </div><!-- loop-container-section ends -->
                    
                    <?php cognize_archive_nav() // Calls the 'Previous' and 'Next' Post Links ?>

              <?php else : ?>

                    <?php cognize_404_show() // Function dedicated for handling empty queries. ?>

              <?php endif ?>

        
    </div><!-- inner-content-section ends -->
</div><!-- Content-section ends here -->

<?php get_footer() ?>