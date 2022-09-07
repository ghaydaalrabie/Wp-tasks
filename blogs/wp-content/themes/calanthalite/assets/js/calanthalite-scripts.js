(function($){
	"use strict";	
    $(document).ready(function() {

        if ($('body').length ) { $('body').fitVids(); }
        $('select').chosen();

        // Menu Touch  
        $('.menu-touch').on('click',function(){
            $(this).toggleClass('active');
            $('.header-content .main-menu-horizontal').slideToggle();
        });

        $('.calanthalite-main-menu').children().last().focusout( function() {
            $('.header-content .main-menu-horizontal').removeAttr('style');
            $('.menu-touch').removeClass('active');
        } );

        $('audio').mediaelementplayer({
            pluginPath: 'https://cdnjs.com/libraries/mediaelement/',
            shimScriptAccess: 'always'
        });

        // Function Calanthalite
        calanthalite_main_menu();
        
        
        //Submenu 
        var _subMenu = $('.main-menu-horizontal .calanthalite-main-menu > li > .sub-menu');
        _subMenu.each(function(){
            var _widthSub = $(this).outerWidth(),
                _widthContainer = $('.main-wrapper-boxed').outerWidth(),
                offsetContent = ($(window).width() - _widthContainer)/2;
            
            var offsetLeft = $(this).offset().left,
                offsetRight = $(window).width() - offsetLeft;

            var _rightPos =  offsetRight - offsetContent;

            if(_rightPos < _widthSub){
                var _left = (_widthSub - _rightPos) + 50;
                console.log(_left);
                $(this).css({
                    "left": '-'+_left+'px'
                });
                $(this).find('.sub-menu').css({
                    "left": "auto",
                    "right": "100%"
                });
            }

        })

    });
    

    // Menu
    function calanthalite_main_menu()
    {
        //Add caret 
        $('.calanthalite-main-menu li.menu-item-has-children > a,.calanthalite-main-menu li.page_item_has_children > a').append( '<div class="icon-dropdown"><i class="fas fa-angle-down"></i></div>' );

        //Click
        $('.calanthalite-main-menu li.menu-item-has-children > a > .icon-dropdown,.calanthalite-main-menu li.page_item_has_children > a > .icon-dropdown').on('click',function(e){
            if( $(this).closest('li').hasClass('show-submenu') ){
                $(this).closest('li').removeClass('show-submenu');
                $(this).parent().removeClass('active');
            } else {
                $(this).closest('ul').children('li').removeClass('show-submenu');
                $(this).closest('ul').children('li').children('.active').removeClass('active');
                $(this).closest('li').toggleClass('show-submenu');
                $(this).parent().addClass('active');
            }
            return false;
        });

    }
    
    
})(jQuery);
