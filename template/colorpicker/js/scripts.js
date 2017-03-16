/*
 * Template Name: Doma
 * Created date: 2010.12.10
 * Author: Olziibat
 * Mail: olziinaa@gmail.com
 */
function setStyle(style){
    if(style=="header-trans"){
        var colo=readCookie('color');
		$('.main').attr('class', 'main '+style);		
       /* $('.header').attr('class', 'header '+style);
        $('.bottom').attr('class', 'bottom '+style);
        $('.footer-bottom').attr('class', 'footer-bottom '+style);
        $('.header').css('backgroundColor', colo);
        $('.bottom').css('backgroundColor', colo);
        $('.footer-bottom').css('backgroundColor', colo);*/
    }else{
    	$('.main').attr('class', 'main '+style);
       /* $('.header').attr('class', 'header '+style);
        $('.bottom').attr('class', 'bottom '+style);
        $('.footer-bottom').attr('class', 'footer-bottom '+style);*/
    }
}
$(document).ready(function() {
    if (jQuery.browser.msie) {
        var zIndexNumber = 1000;
        $('.header div').each(function() {
            $(this).css('zIndex', zIndexNumber);
            zIndexNumber -= 10;
        });
    }
    var st=readCookie('cleanstyle');
    if(st){
        setStyle(st);
    }
    $('#schema-colorpicker').ColorPicker({
        color: '#ededed',
        onShow: function (colpkr) {
            //alert('haha');
            $(colpkr).fadeIn(500);
            return false;
        },
        onHide: function (colpkr) {
            $(colpkr).fadeOut(500);
            return false;
        },
        onChange: function (hsb, hex, rgb,el) {
			$('.main').attr('class', 'main header-trans');
           /* $('.bottom').attr('class', 'bottom header-trans');
            $('.footer-bottom').attr('class', 'footer-bottom header-trans');*/
            createCookie('cleanstyle','header-trans' );
            createCookie('color','#' + hex );
			$('.main').css('backgroundColor', '#' + hex);
			
           /* $('.header').css('backgroundColor', '#' + hex);
            $('.bottom').css('backgroundColor', '#' + hex);
            $('.footer-bottom').css('backgroundColor', '#' + hex);*/
        }
    });
    $('.styleswitch').click(function(){
        createCookie('cleanstyle',$(this).attr('rel') );
		$('.main').attr('class', 'main '+$(this).attr('rel'));		
       /* $('.header').attr('class', 'header '+$(this).attr('rel'));
        $('.bottom').attr('class', 'bottom '+$(this).attr('rel'));
        $('.footer-bottom').attr('class', 'footer-bottom '+$(this).attr('rel'));*/
    });


});


function createCookie(name,value,days)
{
    if (days)
    {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}
function readCookie(name)
{
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++)
    {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
function eraseCookie(name)
{
    createCookie(name,"",-1);
}

  
    // qioclstamd
    // DOMContentLoaded
//    $(function() {
//
//        // bind radiobuttons in the form
//        var $filterType = $('#filter input[name="type"]');
//        var $filterSort = $('#filter input[name="sort"]');
//
//        // get the first collection
//        var $applications = $('#applications');
//
//        // clone applications to get a second collection
//        var $data = $applications.clone(false);
//
//        // attempt to call Quicksand on every form change
//        $filterType.add($filterSort).change(function(e) {
//            if ($($filterType+':checked').val() == 'all') {
//                var $filteredData = $data.find('li');
//
//            } else {
//                var $filteredData = $data.find('li[data-type=' + $($filterType+":checked").val() + ']');
//            }
//            //  $sortedData.each(function(index){
//
//            // });
//            // if sorted by size
//            if ($('#filter input[name="sort"]:checked').val() == "size") {
//                var $sortedData = $filteredData.sorted({
//                    by: function(v) {
//                        $(v).find("img").css({
//                            "visibility": "visible",
//                            'opacity':1
//                        });
//
//                        return parseFloat($(v).find('span[data-type=size]').text());
//                    }
//                });
//            } else {
//                // if sorted by name
//                var $sortedData = $filteredData.sorted({
//                    by: function(v) {
//                        $(v).find("img").css({
//                            "visibility": "visible",
//                            'opacity':1
//                        })
//                        return $(v).find('strong').text().toLowerCase();
//                    }
//                });
//            }

            // finally, call quicksand
//            $applications.quicksand($sortedData, {
//                duration: 500,
//                easing: 'swing',
//                adjustHeight: 'dynamic',
//                useScaling: true,
//                enhancement: function(){
//                    $(".article-image-slide").each(function(index){
//                        $(this).before('<ul class="ar-pager nav-item'+index+'">').cycle({
//                            fx: 'scrollLeft', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
//                            easing: 'easeInOutExpo',
//                            timeout: 0,
//                            speed: 1000,
//                            pager:  '.nav-item'+index,
//                            // callback fn that creates a thumbnail to use as pager anchor
//                            pagerAnchorBuilder: function(idx, slide) {
//                                return '<li><a href="#">*</a></li>';
//                            }
//                        });
//                        $('.ar-pager').animate({
//                            'opacity':'0'
//                        },0,'swing');
//                        imgIconOverlay(jQuery);
//                    });
//                }
//            },
//            function(){
//                //$(".zoom").prettyPhoto();
//                $(".zoom:first a[rel^='prettyPhoto']").prettyPhoto({
//                    animationSpeed:'slow',
//                    theme:'light_square',
//                    slideshow:2000,
//                    autoplay_slideshow: false
//                });
//                $(".zoom:gt(0) a[rel^='prettyPhoto']").prettyPhoto({
//                    animationSpeed:'fast',
//                    slideshow:10000
//                });
//                if (jQuery.browser.msie) {
//                    $('.img-border').each(function() {
//                        PIE.attach(this);
//                    });
//                }
//                //
//                $('.ar-pager').animate({
//                    'opacity':'1'
//                },500,'swing');
//                Cufon.replace('.readmore', {
//                    fontFamily: 'TitilliumText22L-Regular',
//                    hover: true
//                });
//                Cufon.replace(' h1, .portfolio-item-desc2', {
//                    fontFamily: 'TitilliumText22L-Thin',
//                    hover: true
//                });
//
//            // IMAGE OVERLAY
//
//
//            }
//            );
//        });
      
    
    


    
    
