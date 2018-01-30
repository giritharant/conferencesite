//     Lavazi - Lava Lamp jQuery Plugin v1.1
//     Coded By Mohammad Hamza
//     @hamzadhamiya
//     Must Be Used Under MIT Lisence
(function($) {
    $.fn.lavazi = function(options) {
        var defaults = {
            // These are the defaults.
            theme: "simple",
            activeClass: "selected",
			background:"#222",
			transitionTime:300,
			height:4
        }
        var settings = $.extend({}, defaults, options);
        this.addClass('lavazi_nav ' + settings.theme).append('<span class="lavazi_lamp '+settings.theme+'"></span>');
		this.find('.lavazi_lamp').height(settings.height).css({
			"transition": "all "+settings.transitionTime+"ms ease-in-out",
	"-moz-transition": "all "+settings.transitionTime+"ms ease-in-out",
	"-webkit-transition": "all "+settings.transitionTime+"ms ease-in-out",
	"background":settings.background,
	"height":settings.height+"px"
			});
			if(settings.theme=="rounded"){
				var cheight=settings.height,
				nheight=cheight/2;
				this.find('.lavazi_lamp').css({
					"border-radius":nheight+"px",
					"-moz-border-radius":nheight+"px",
					"-webkit-border-radius":nheight+"px"
					})
			}
			if(settings.theme=="arrow"){
				this.find('.lavazi_lamp').append('<span class="arrow_inner"></span>');
				$('.arrow_inner',this).css({
					"border-bottom-color":settings.background
					});
			}
        var t = this,
            m = t.children('li.' + settings.activeClass);
        $.findLavaziSelected = function() {
            if (t.children('li').hasClass(settings.activeClass)) {
                var u = t.children('li.' + settings.activeClass);
            }else{
				var u=t.children('li').first();
			}
			var v= u.position().left,
                    w = u.width();
                x = t.find('.lavazi_lamp');
                x.css({
                    'left': v,
                    'width': w,
					'opacity':1
                });
        };
        $(window).load(function() {
            $.findLavaziSelected();
        });
        t.children('li').hover(function() {
            m.addClass('temporary_remove').removeClass(settings.activeClass);
            $(this).addClass(settings.activeClass);
            $.findLavaziSelected();
        }, function() {
            m.addClass(settings.activeClass).removeClass('temporary_remove');
            $(this).removeClass(settings.activeClass);
            $.findLavaziSelected();
        });
    };
}(jQuery));

// Trigger Lavazi

$(document).ready(function() {
    $('nav>ul').lavazi({background:"#cbcbcb",transitionTime:1000,theme:'rounded',height:3});
});
