(function($){
	$(document).ready(function(e){
		$('#customize-controls .preview-notice').append('<a class="cognize-pro-link" href="http://www.mudthemes.com/showcase/cognize-pro-theme" title="'+cognizeCustomizerUpgradeVars.upgrade_text+'" target="_blank">'+cognizeCustomizerUpgradeVars.upgrade_text+'</a>');
		$('.cognize-pro-link').click(function(e){
			e.stopPropagation();
		});
	});
})(jQuery);