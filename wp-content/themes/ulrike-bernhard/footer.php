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
                        <div id="copyright"><?php _e( 'Copyright', 'cognize' ) ?> <?php echo date( 'Y' ) ?> <?php if( cognize_get_option('footer_name') ) { echo esc_html( cognize_get_option('footer_name') ); } ?> - Mag. Ulrike Bernhard | <a class="footer-impressum" href="<?php echo get_site_url(); ?>/impressum">Impressum</a> | <a class="footer-impressum" href="<?php echo get_site_url(); ?>/datenschutz">Datenschutz</a> | Umsetzung -  <a href="www.media-lab.at" target="_blank">Media Lab Tritremmel GmbH</a></div>
                    <?php endif ?>
                </div>
            </div>

        </div><!-- wrapper ends -->
    </div><!-- parent-wrapper ends -->
    <?php wp_footer(); ?>
</body>
</html>