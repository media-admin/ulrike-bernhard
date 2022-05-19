<?php
/**
 * Contains Customizer Extended Controls
 *
 * @since 1.0
 */
 

if ( class_exists( 'WP_Customize_Control' )):

	/**
	 * Cognize Customize Important Links Control
	 *
	 * Controls Important Links for the Theme
	 */
	class Cognize_Customize_Important_Links_Control extends WP_Customize_Control {
	
		public function render_content() {
			echo '<p><a href="'.COGNIZE_DOCS_URL.'" target="_blank">'.__('Theme Documentation','cognize').'</a></p>';
			echo '<p><a href="'.COGNIZE_CONTACT_URL.'" target="_blank">'.__('Contact us','cognize').'</a></p>';
		}
	}

endif;