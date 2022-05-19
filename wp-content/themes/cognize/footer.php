<?php
/*
 * Template for displaying footer.
 * 
 * @package Cognize
 */
get_sidebar() ?>


            <div class="footer-bg-section grid-col-16 clearfix">
                <div id="footer-section" class="footer-section grid-col-16">
                    <?php if(cognize_get_option('show_copyright')): ?>
                        <div id="copyright"><?php _e( 'Copyright', 'cognize' ) ?> <?php echo date( 'Y' ) ?> <?php if( cognize_get_option('footer_name') ) { echo esc_html( cognize_get_option('footer_name') ); } ?> | <?php _e( 'Powered by', 'cognize' ) ?> <a href="http://www.wordpress.org">WordPress</a> | <?php _e( 'Cognize theme by', 'cognize' ) ?> <a href="http://www.mudthemes.com/" target="_blank">mudThemes</a></div>
                    <?php endif ?>
                </div>
            </div>

        </div><!-- wrapper ends -->
    </div><!-- parent-wrapper ends -->
    <?php wp_footer(); ?>
</body>
</html>