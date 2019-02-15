var $ = jQuery;
jQuery(document).ready(function () {
    if($('#header-01').length>0){
        $('body').css('padding-top', $('.site-header').height() + 'px');
    }
    
    mobileButtons();
    fixedMenu();
    lmn_scroll_down_fixed_menu($('header.site-header'));
    lmn_mobile_btn_toggle($('header .btn-mob'));
    lmn_mobile_subcategories_btns();
    lmn_change_product_thumb();
    scroll_down('.full-page-scroll-down');
    filter_results_sticky_menu();

    lmn_close_popup_section();
    lmn_open_popup_section();

    
    $('body').click(function () {
        //document.activeElement.blur();
    });

    $('input, textarea').click(function (event) {
        //event.stopPropagation();
    });

    

    $('.share-btn').on("click", function(e) {
      $(this).lmn_share_popup(e);
    });
    
    $(window).on('load', function(){

        /*
        if($('#contactForm')){
            $('#contactForm').formSubmit();
        }
        
        if($('#requestForm')){
            $('#requestForm').formSubmit();
        }

        $('.footer-subscribe').formSubscribe();
        $('.sidebar-subscribe').formSubscribe();
        $('.subscribe-popup .sbs-form').formSubscribe();
        */

    });

    
});

function mobileButtons(){

    $('#mobMenuBtn').on('click touch', function(e){
        e.preventDefault();
        $('body').toggleClass('mobile');
        $('body').removeClass('search-mobile');
    });

}


function fixedMenu(){
    $(window).on('scroll', function(){
        if($(this).scrollTop()>0){
            $('body').addClass('fix-menu');
        }else{
            $('body').removeClass('fix-menu');
        }
    });
}

function scroll_down(scroll_down){
    $(document).on('click touch', scroll_down, function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(this).parent().next().offset().top
         }, 1500);
    });
}


function imageSlider(element, args){
    
    Lum.slick(".single-slider", {
        centerMode: true,
        centerPadding: '0px',
        dots: true,
        arrows:false,
        infinite: true,
        autoplay: true,
        variableWidth: true,        
        autoplaySpeed: 3000,
        pauseOnHover: false,
        speed: 1000,
        easing: 'easeOutElastic',
        slidesToShow: 1,
        adaptiveHeight: true
    });

    $(".single-slider").on('init', function(){
        $(this).addClass('slick-loaded');
    });
}
/*
* jQuery Functions for the Theme
*/

function lmn_slick_slider_init(slider, args){

    Lum.slick(slider, args);

    $(document).on('init', $(slider), function(){
        $(this).parent().addClass('slick-loaded');
    });

}


function lmn_scroll_up_fixed_menu(header){

    //http://jsfiddle.net/mariusc23/s6mLJ/31/
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $(header).outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();
        
        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;
        
        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $(header).removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $(header).removeClass('nav-up').addClass('nav-down');
            }
            if(st===0){
                $(header).removeClass('nav-down');
            }
        }
        
        lastScrollTop = st;
    }

}

function lmn_scroll_down_fixed_menu(header) {

    $(window).scroll(function(){

        var scrollPos = $(document).scrollTop();

        if(scrollPos > 0){

            $(header).addClass('nav-down');

        } else {
            
            $(header).removeClass('nav-down');
    
        }

    });

}

function lmn_mobile_btn_toggle(button){
    $(button).on('click touch', function(){
        if($('body').hasClass('mobile-active')){
            $('body').removeClass('mobile-active').addClass('mobile-not-active');
        }else{
            $('body').removeClass('mobile-not-active').addClass('mobile-active');
        }
    });
}

function lmn_mobile_subcategories_btns(){
    
    $(window).on('resize load', function(){
        
        if($(document).height()<768){
            $('.mobile-nav > div > ul > li.menu-item-has-children').each(function(){
                $(this).append('<a class="btn-mob-sub" href="#"><i class="fas fa-chevron-bottom"></i></a>');
            });
        }
        
    });

}


function lmn_open_popup_section(){
    $(document).on('click touch', '.btn-popup', function(e){
        e.preventDefault();
        var popup_id = '#' + $(this).attr('data-popup');
        $('html').toggleClass('popup-active');
        $(popup_id).addClass('this-popup-active');
    });
}

function lmn_close_popup_section(){
    
    $(document).on('click touch', '.section-popup-close', function(e){
        e.preventDefault();
        $('html').removeClass('popup-active');
        $('.this-popup-active').removeClass('this-popup-active');
    });

    $(document).on('click touch', '.this-popup-active', function(e){
        
        console.log(e.target);
        console.log(this.childNodes);

        if (e.target === this){
            return;
        }
    });

}


function lmn_change_product_thumb(){
    $(document).on('click touch', '.product-images-thumb-btn', function(e){
        e.preventDefault();

        $('.product-image-wrap .column-image').append('<div id="loader-1"><div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div></div>');
        $('.product-image-wrap .column-image img').attr('src', $(this).attr('href')).load(function(){
            $('.product-image-wrap .column-image').find('#loader-1').fadeOut(200, function(){ $(this).remove(); });        
        });
            
        

    });
}



//SHARE POPUP Function on click - open popup window with the corresponding social share URL
$.fn.lmn_share_popup = function (e, intWidth, intHeight, blnResize) {
    
    // Prevent default anchor event
    e.preventDefault();

    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;

    var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

    // Set values for window
    intWidth = intWidth || '500';
    intHeight = intHeight || '400';
    strResize = (blnResize ? 'yes' : 'no');

    var left = ((width / 2) - (intWidth / 2)) + dualScreenLeft;
    var top = ((height / 2) - (intHeight / 2)) + dualScreenTop;

    // Set title and open popup with focus on it
    var strTitle = ((typeof this.attr('title') !== 'undefined') ? this.attr('title') : 'Social Share'),
        strParam = 'width=' + intWidth + ',height=' + intHeight + ',resizable=' + strResize + ',top=' + top + ',left=' + left,    
        objWindow = window.open(this.attr('href'), strTitle, strParam).focus();

}

//contact form submit based on barterhouse form
$.fn.lmn_form_submit = function (){
    
    var this_form = $(this);
    var form_data = {};
    var token;
    var contact_loader = $(this_form).find('.contact-loader');
    var recaptcha = $(this_form).find('.g-recaptcha')[0];

    if(recaptcha){

        var recaptcha_widget = grecaptcha.render(recaptcha ,{
            'sitekey' : '6Ldn6jkUAAAAAELj62XVtOFjYQosOJ2wzozb1e84',
            'callback' : function(){
                $(this_form).find('.g-recaptcha.error-rqrd').removeClass('error-rqrd');
            },
            'theme' : 'light'
        });

    }

    
    $(this_form).on('submit', function(e){
        
        e.preventDefault();

        if(handleValidation($(this))){
            
            $(this_form).find('input, textarea').each(function(){
                
                var name_key = $(this).attr('id');

                if($(this).prop('type')!=='checkbox'){
                    if($(this).val()!=='' && name_key!==undefined){
                        form_data[name_key] = $(this).val();
                    }
                }else{
                    if($(this).is(":checked")){
                        form_data[name_key] = 1;
                    }else{
                        form_data[name_key] = 0;
                    }
                }
                

            });


            $(contact_loader).addClass('active');

            token = grecaptcha.getResponse(recaptcha_widget);

            //send the formData via AJAX
            setTimeout(function(){

                $.ajax({
                    url: ajaxurl,
                    dataType: 'json',
                    type: 'POST',
                    data: {'action'  : 'submitContactForm', 'captcha_token' : token , 'form_data' : JSON.stringify(form_data)},
                    success: function(resp){

                        if(resp===1){
                            $(contact_loader).removeClass('active').addClass('success');
                            $(contact_loader).find('.nf-msg').html('Thank you for contacting us.<br><br>We are reviewing the information you have submitted and<br>will be in contact with you as soon as possible!');
                        }else{
                            $(contact_loader).removeClass('active').addClass('error');
                            $(contact_loader).find('.nf-msg').text('There was a problem submitting the form. Please try again. ' + resp);
                        }
                        
                    },
                    error: function(){
                        $(contact_loader).removeClass('active').addClass('error');
                        $(contact_loader).find('.notification-msg').text('There was a problem submitting the form. Please try again. ' + resp);
                    },
                    complete: function(){
                        clearInputs(this_form);
                    }
                });

            }, 2000);
            
        }else{
            return false;
        }
    
    });
    

    $(this_form).find('input, textarea, .g-recaptcha, .g-recaptcha *').on('click touch focus', function(){
        $(this).removeClass('error-rqrd');
        checkAllRequired(this_form);
    });


    $(this_form).find('.nfBack').on('click touch', function(e){
        e.preventDefault();
        $('.contact-loader').removeClass('success error');

        if($(this_form).attr('id')=="requestForm"){
            $('.rp-wrap').fadeOut(500);
            $('.rp-form-wrap').removeClass('loaded');
            $('html').removeClass('popup-open');
        }

    });


    function handleValidation(form){
        
        var all_clear = true;

        $(form).find('.required').each(function(){
            
            var this_val = $(this).val();
            
            if(emptyValidation(this_val)===0){
                $(this).addClass('error-rqrd');
                $(form).find('.contact-status').addClass('fadeIn').text('The fields with * are required.');
                all_clear=false;
            }
    
        });


        token = grecaptcha.getResponse(recaptcha_widget);

        if(token==='' || token===undefined){
            $(recaptcha).addClass('error-rqrd');
            all_clear=false;
        }

        checkAllRequired(this_form);

        return all_clear;
    
    }

    function clearInputs(form){
        
        $(form).find('input[type=text], input[type=email], textarea').each(function(){
            $(this).val('');
        });

        $(form).find('input[type=checkbox]').prop('checked', false);

        grecaptcha.reset();
    }
    
    function emptyValidation(value){
        if(value!=="" && value!==undefined && value.length>1 && value!==null && value!==false){
            return 1;
        }else{
            return 0;
        }
    }

    function checkAllRequired(this_form){
        var all_clear=0;
        var all=0;

        $(this_form).find('.required').each(function(){
            var this_val = $(this).val();
            all_clear += emptyValidation(this_val);
            all++;
        });

        if(all_clear===all){
            $(this_form).find('.contact-status').removeClass('fadeIn');
        }
    }

}

//subscribe form based on barterhouse
$.fn.lmn_form_subscribe = function (){
    
    var this_form = $(this);
    var email = $(this_form).find('.required');
    var contact_loader = $(this_form).find('.contact-loader');

    var session = sessionStorage.getItem("hide_subscribe");

    if(session!=="1" || $(this_form).hasClass('sidebar-subscribe') || $(this_form).hasClass('footer-subscribe')){

        setTimeout(function(){
            $(this_form).parent().addClass('loaded');
        }, 1000);
        
        $(document).on('click touch', '.sbs-close', function(e){
            
            e.preventDefault();
            
            $(this_form).parent().removeClass('loaded');
            
            if (typeof localStorage === 'object') {
                try{
                    sessionStorage.setItem("hide_subscribe", 1);
                }catch (e){
                    console.log(e);
                }
            }
            
        });

        $(document).on('click touch', '.sbs-nf-close', function(e){
            e.preventDefault();
            $(this_form).find('.contact-loader').removeClass('error active success');
        });
    
        $(email).on('click touch', function(){
            $(this).removeClass('error-rqrd');
        });
    
    
        $(this_form).on('submit', function(e){
    
            e.preventDefault();
    
           
    
            if($(email).val()==='' || $(email).val()===undefined){
                $(email).addClass('error-rqrd');
                return false;
            }else{
                $(contact_loader).addClass('active');
                //send the formData via AJAX
                setTimeout(function(){
                    
                    $.ajax({
                        url: ajaxurl,
                        dataType: 'json',
                        type: 'POST',
                        data: {'action'  : 'submitSubscribeForm', 'email' : $(email).val() },
                        success: function(resp){
    
                            if(resp===1){
                                $(contact_loader).removeClass('active').addClass('success');
                                $(contact_loader).find('.nf-msg').html('Thank you for subscribing!');
                            }else if(resp===2){
                                $(contact_loader).removeClass('active').addClass('error');
                                $(contact_loader).find('.nf-msg').text('You have already subscribed.');
                            }else{
                                $(contact_loader).removeClass('active').addClass('error');
                                $(contact_loader).find('.nf-msg').text('There was a problem submitting the form. Please try again.');
                            }
                            
                        },
                        error: function(){
                            $(contact_loader).removeClass('active').addClass('error');
                            $(contact_loader).find('.notification-msg').text('There was a problem submitting the form. Please try again.');
                        },
                        complete: function(){
                            $(email).val('');
    
                            sessionStorage.setItem("hide_subscribe", 1);
    
                            setTimeout(function(){
                                $(this_form).parent().removeClass('loaded');
                            }, 3500);
                        }
                    });
    
                }, 2000);
    
            }
            
        });

    }//check session hide subscribe

}

function filter_results_sticky_menu() {

    if($(window).width() <= 991) {

        $('body').addClass('filter-mobile');
        $('.blogs-sidebar .pop-up').appendTo('.mobile-section');
        $('.blogs-sidebar .categories-blogs').appendTo('.mobile-section');
        $('.blogs-sidebar .recent-wrapper').appendTo('.mobile-section');

    }
    
    $(window).resize(function() {

        if($(window).width() <= 991 && !$('body').hasClass('filter-mobile')) {

            $('body').addClass('filter-mobile');
            $('.blogs-sidebar .pop-up').appendTo('.mobile-section');
            $('.blogs-sidebar .categories-blogs').appendTo('.mobile-section');
            $('.blogs-sidebar .recent-wrapper').appendTo('.mobile-section');


        } else if($(window).width() > 991 && $('body').hasClass('filter-mobile')) {

            $('body').removeClass('filter-mobile');
            $('.mobile-section .categories-blogs').appendTo('.blogs-sidebar .section-content-html');
            $('.mobile-section .recent-wrapper').appendTo('.blogs-sidebar .section-content-html');
            $('.mobile-section .pop-up').appendTo('.blogs-sidebar .section-content-html');


        }

    });


    $(window).scroll(function(){

        var scrollPos = $(document).scrollTop();

        if(scrollPos > 0){

            $('.filter-mobile .filter-results').addClass('filter-res-inactive');

        } else {
            
            $('.filter-mobile .filter-results').removeClass('filter-res-inactive');
    
        }

    });

    $('.filter-mob').click(function() {

        $('.filter-results').removeClass('filter-res-inactive');
        $('.filter-results').addClass('filter-res-active');
        $('body').addClass('filter-mobile-active');

    });

    $('.close-filter').click(function() {

        var scrollPos = $(document).scrollTop();



        $('.filter-results').removeClass('filter-res-active');
        $('body').removeClass('filter-mobile-active');
        
        if(scrollPos > 0){
            
            $('.filter-results').addClass('filter-res-inactive');

        }

    });

}

function getParameterByName(name) {
  var res = new RegExp(
      // Parameter names always start after a ? or &.
      '[\?&]' +

      // Make sure any [ or ] are escaped in the name.
      name.replace(/\[/g, '\\\[').replace(/\]/g, '\\\]') +

      // Either match a =... or match an empty value.
      // Values can be terminated by an & a # or the end of the string ($).
      '(?:=([^&#]*))?(?:[&#]|$)'
  ).exec(window.location.search);

  return res ?
    (res[1] ? // res[1] will be undefined for a parameter without value.
      decodeURIComponent(res[1].replace(/\+/g, ' ')) : ''
    ) : null;
}