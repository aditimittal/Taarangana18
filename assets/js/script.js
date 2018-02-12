$(function() {
    
    checkCookie();
    
    function saveCookie() {
        Cookies.set('websiteusecookies', 'true');
    }
    
    function checkCookie(){
        if (Cookies.get('websiteusecookies') !== 'true') {
            $('.cookie-policy').fadeIn();
        }
    }
    
    FastClick.attach(document.body);

    $('.scroll-up').click(function(e){
        e.preventDefault();
        $('html, body').stop().animate({
            'scrollTop': 0
        },500);
    })

    $('.btn-cookie-dismiss').click(function() {
        $('.cookie-policy').fadeOut();
        saveCookie();
    })

    $(document).bind("ready scroll", function () {
        var t = $(document).scrollTop();
        t >= 10 ? $(".navbar").addClass("navbar-white") : $(".navbar").removeClass("navbar-white")

        var ps = (t/$(document).height())*100;
        if (ps > 30) {
            $('.scroll-up').fadeIn();
        } else {
            $('.scroll-up').fadeOut();
        }
    })

    var click = $('.hamburger');
    var clicked = true;
    click.click(function() {
        if(clicked){
            $('#menu').fadeIn('fast');
            click.addClass('is-active');
            $('body').addClass('menu-open');
        }else{
            closeMenu()
        }
        clicked = !clicked;
    });

    $('#menu, .navbar').click(function(e){
        e.stopPropagation()
    })
    $('body').click(function(){
        closeMenu()
    })

    function closeMenu(){
        $('#menu').fadeOut('fast');
        click.removeClass('is-active');
        setTimeout(function(){
            $('body').removeClass('menu-open');
        },600)
    }

    $('a.contact-us, a.contact-us-xs').click(function(e){
        $('body').addClass('contact-open')
        e.preventDefault()
    })
    $('.footer-contact .close').click(function(){
        $('body').removeClass('contact-open')
    })

    new WOW().init();

    /* btn hover */
    var glitchTexts = [];
    var possibleChar = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789/;\[]=-~!@#$%^&*()+{}:?><";
    var glitchStrength = 20; // how many characters should be coverted PER GLITCH (in percentage)
    var glitchSpeed = 5; // how many times per second should the effect be applied
    var glitchDuration = 500; // how long the effect should last (in miliseconds)
    var glitchLeave = false; // if the effect should last when you dont hover the item anymore
    var timeouts = [];
    $('.btn:not(.not-anim), .menu-nav .nav > li > a').each(function(index, el) {
      var txt = $('span', this).text().trim();
      glitchTexts.push(txt);
    });
    $('.btn:not(.not-anim), .menu-nav .nav > li > a').hover(function() {
      randomText(this)
    }, function() {
      if(!glitchLeave) {
        $.each(timeouts, function(i, el){
          clearTimeout(el);
          delete timeouts[i];
        });
        timeouts = [];
        $('span', this).text(glitchTexts[$(this).index('.btn:not(.not-anim), .menu-nav .nav > li > a')]);
      }
    });
    

    

    $('#signup-form').validator().on('submit', function (e) {
        if (e.isDefaultPrevented()) {
            // handle the invalid form...
        } else {
            $('.signup-thanks').fadeIn();
            $.ajax( {
                type: "POST",
                url: $('#signup-form').attr('action'),
                data: $('#signup-form').serialize(),
                success: function( response ) {
					$("#response").html(response);
                    $('#signup-form')[0].reset();
                }
            });
            return false;
        }
    })
    $('.btn-signup').click(function(){
        $('body').addClass('bio-open')
        $('.signup-thanks').hide();
        $('#signup').fadeIn()
        //if($(window).width()>1024){
            new IScroll('.signup-wrap', { 
                mouseWheel: true,
                scrollbars: true
            });
        //}
        if($('#fullpage').hasClass('fullpage-wrapper')){
            $.fn.fullpage.setAllowScrolling(false);
            $.fn.fullpage.setKeyboardScrolling(false);
        }
    })
    $('#btn-dissmiss-register, [data-dismiss="signup"]').click(function(e){
        $('body').removeClass('bio-open')
        $('#signup').fadeOut()
    })
	
	
	$('#login-form').validator().on('submit', function (e) {
        if (e.isDefaultPrevented()) {
            // handle the invalid form...
        } else {
            $('.login-thanks').fadeIn();
            $.ajax( {
                type: "POST",
                url: $('#login-form').attr('action'),
                data: $('#login-form').serialize(),
                success: function( response ) {
					$("#response").html(response);
                    $('#signup-form')[0].reset();
                }
            });
            return false;
        }
    })
    $('.btn-login').click(function(){
        $('body').addClass('bio-open')
        $('.login-thanks').hide();
        $('#login').fadeIn()
        //if($(window).width()>1024){
            new IScroll('.login-wrap', { 
                mouseWheel: true,
                scrollbars: true
            });
        //}
        if($('#fullpage').hasClass('fullpage-wrapper')){
            $.fn.fullpage.setAllowScrolling(false);
            $.fn.fullpage.setKeyboardScrolling(false);
        }
    })
    $('#btn-dissmiss-register, [data-dismiss="login"]').click(function(e){
        $('body').removeClass('bio-open')
        $('#login').fadeOut()
        
    })
	
	
	$('#register-form').validator().on('submit', function (e) {
        if (e.isDefaultPrevented()) {
            // handle the invalid form...
        } else {
            $('.register-thanks').fadeIn();
            $.ajax( {
                type: "POST",
                url: $('#register-form').attr('action'),
                data: $('#register-form').serialize(),
                success: function( response ) {
                    
                    $('#register-form')[0].reset();
                }
            });
            return false;
        }
    })
    $('.btn-register').click(function(){
        $('body').addClass('bio-open')
        $('.register-thanks').hide();
        $('#register').fadeIn()
        //if($(window).width()>1024){
            new IScroll('.register-wrap', { 
                mouseWheel: true,
                scrollbars: true
            });
        //}
        if($('#fullpage').hasClass('fullpage-wrapper')){
            $.fn.fullpage.setAllowScrolling(false);
            $.fn.fullpage.setKeyboardScrolling(false);
        }
    })
    $('#btn-dissmiss-register, [data-dismiss="register"]').click(function(e){
        $('body').removeClass('bio-open')
        $('#register').fadeOut()
    })

})

/* Image filter */
function hexToRgb(hex) {
    var bigint = parseInt(hex, 16),
        r = (bigint >> 16) & 255,
        g = (bigint >> 8) & 255,
        b = bigint & 255;
    return [r,g,b];
}
function duotone (hexes) {
    var hex = hexes.split(',');
    var matrix = document.querySelector('.color-matrix');
    var color1 = hexToRgb(hex[0]);
    var color2 = hexToRgb(hex[1]);
    
    var c1   = {};
    c1.red   = color1[0] / 256;
    c1.green = color1[1] / 256;
    c1.blue  = color1[2] / 256;
    
    var c2   = {};
    c2.red   = color2[0] / 256;
    c2.green = color2[1] / 256;
    c2.blue  = color2[2] / 256;
    
    var value = [];
    value = value.concat([c1.red - c2.red, 0, 0, 0, c2.red]);
    value = value.concat([c1.green - c2.green, 0, 0, 0, c2.green]);
    value = value.concat([c1.blue - c2.blue, 0, 0, 0, c2.blue]);
    value = value.concat([0, 0, 0, 1, 0]);

    return value.join(' ');
}
function createSvgFilters (hex,i) {
    var filterNum = 'duotone_' + i,
        ns = 'http://www.w3.org/2000/svg',
        svg = document.createElementNS(ns,'svg'),
        filterEl = document.createElementNS(ns,"filter"),
        matrix = document.createElementNS(ns,"feColorMatrix");
    
        svg.setAttribute('style','color-interpolation-filters: sRGB');
        filterEl.setAttribute('id','duotone_' + i);
        matrix.setAttribute('type', 'matrix');
        matrix.setAttribute('values', duotone(hex));
    
    document.body.appendChild(svg).appendChild(filterEl).appendChild(matrix);
    return;
}
var hex = $('[data-hex]').first().data('hex')
createSvgFilters(hex, 0);

$('[data-hex]').each(function(index, element) {
    $(element).attr('style', '-webkit-filter: url(#duotone_0);filter: url(#duotone_0);')
})