jQuery(document).ready(function($) {
    
    /* Superfish Menu Call */
    $('#cognize_menu').superfish({});
    
    /* Responsive Menu */
    $('.primarymenu-resp i').toggle(function(){
        $('.primarymenu-section').addClass('menuClicked');
        $('.menuClicked').slideDown();
        $('.menuClicked ul.sub-menu').show().css('visibility', 'visible');
        $('.menuClicked ul.sf-menu').removeClass('sf-js-enabled');
    }, function(){
	    
        /* IRGENDWO ZWISCHEN HIER 
        
        $('.menuClicked').hide();
        $('.menuClicked ul.sf-menu').addClass('sf-js-enabled');
        $('.menuClicked ul.sub-menu').hide().css('visibility', 'hidden');
        $('.primarymenu-section').removeClass('menuClicked');
        
        	UND HIER */
        	
        $('.menuClicked').hide();
        $('.menuClicked ul.sf-menu').addClass('sf-js-enabled');
        $('.menuClicked ul.sub-menu').hide().css('visibility', 'hidden');
        $('.primarymenu-section').removeClass('menuClicked');
        
    });
    
    /* $( '.primarymenu-resp i' ).toggle( 'fold', 1000 ); */
    
    $(window).resize(function(){
       if( $('.primarymenu-resp').css('display') != 'block'){
           
           $('.primarymenu-section').removeClass('menuClicked');
           $('.primarymenu-section ul.sf-menu').addClass('sf-js-enabled');
           $('.primarymenu-section ul.sub-menu').hide().css('visibility', 'hidden');
       } else {
           $('.primarymenu-section').addClass('menuClicked');
           $('.primarymenu-section ul.sf-menu').removeClass('sf-js-enabled');
           $('.primarymenu-section ul.sub-menu').show().css('visibility', 'visible');           
       }
    });
    
    /* Social Icons */
        
    var mouseInSocialColor = $('.socialicons-mi').css('color');
    var mouseInSocialBgColor = $('.socialicons-mi').css('background-color');
    var mouseInSocialBorderColor = $('.socialicons-mi').css('border-top-color');
    var mouseOutSocialColor = $('.socialicons-mo').css('color');
    var mouseOutSocialBgColor = $('.socialicons-mo').css('background-color');
    var mouseOutSocialBorderColor = $('.socialicons-mo').css('border-top-color');
        
    $('.social-icons a').hover(
        function(){
            $(this).stop().animate({
                backgroundColor: mouseInSocialBgColor,
                borderColor: mouseInSocialBorderColor,
                color: mouseInSocialColor
            });
        },
        function(){
            $(this).stop().animate({
                backgroundColor: mouseOutSocialBgColor,
                borderColor: mouseOutSocialBorderColor,
                color: mouseOutSocialColor
            });
        });
});