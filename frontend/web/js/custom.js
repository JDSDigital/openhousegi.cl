/********************************

Revelo's JavaScript Document for Custom Scripts
Version: 1.0
Created By: Amazyne Themes

*********************************/

var tpj=jQuery;
var revapi110;
tpj(document).ready(function() {
  if(tpj("#rev_slider_110_1").revolution == undefined){
    // revslider_showDoubleJqueryError("#rev_slider_110_1");
  }else{
    revapi110 = tpj("#rev_slider_110_1").show().revolution({
      // sliderType:"hero",
      jsFileLocation:"third-party/revolution/js/",
      sliderLayout:"fullscreen",
      dottedOverlay:"none",
      delay:9000,
      navigation: {
        onHoverStop: 'off',
        arrows: {
          enable: false,
          style: 'hesperiden',
          tmp: '',
          rtl: false,
          hide_onleave: false,
          hide_onmobile: true,
          hide_under: 0,
          hide_over: 9999,
          hide_delay: 200,
          hide_delay_mobile: 1200,

          left: {
              container: 'slider',
              h_align: 'left',
              v_align: 'center',
              h_offset: 20,
              v_offset: 0
          },

          right: {
              container: 'slider',
              h_align: 'right',
              v_align: 'center',
              h_offset: 20,
              v_offset: 0
          }

      },
        // bullets: {
        //   enable: true,
        //   hide_onmobile: false,
        //   style: "bullet-bar",
        //   hide_onleave: false,
        //   direction: "horizontal",
        //   h_align: "center",
        //   v_align: "bottom",
        //   h_offset: 0,
        //   v_offset: 50,
        //   space: 5,
        //   tmp: ''
        // }
      },
      responsiveLevels:[1240,1024,778,778],
      gridwidth:[1240,1024,778,480],
      gridheight:[600,500,400,300],
      lazyType:"none",
      // parallax: {
      //   type:"mouse",
      //   origo:"slidercenter",
      //   speed:2000,
      //   levels:[2,3,4,5,6,7,12,16,10,50],
      // },
      shadow:0,
      spinner: "off",
      stopLoop: "off",
      stopAfterLoops: -1,
      stopAtSlide: -1,
      stopOnHover: "off",
      onHoverStop: 'off',
      shuffle: "off",
      autoHeight:"off",
      fullScreenAlignForce:"off",
      fullScreenOffsetContainer: "",
      fullScreenOffset: "",
      hideThumbsOnMobile:"off",
      hideSliderAtLimit:0,
      hideCaptionAtLimit:0,
      hideAllCaptionAtLilmit:0,
      debugMode:false,
      fallbacks: {
        simplifyAll:"off",
        disableFocusListener:false,
      }
    });
  }
});	/*ready*/

(function ($) {

	$.fn.SameHeight = function () {

		diffBoxAndContent = 0;

		this.run = function () {
			// Boxes
			var bhs = this.map(function () {
				return $(this).height();
			}).get();
			var mbh = Math.max.apply(null, bhs);

			// Contents
			var chs = this.children().map(function () {
				return $(this).height();
			}).get();
			var mch = Math.max.apply(null, chs);

			diffBoxAndContent = mbh - mch;
			this.height(mbh);
		};

		this.update = function () {
			var chs = this.children().map(function () {
				return $(this).height();
			}).get();
			var mch = Math.max.apply(null, chs);
			var newHeight = mch + diffBoxAndContent;
			this.height(newHeight);
		};

		this.run();
		my = this;
		var resize = function () {
			my.update();
		};
		$(window).resize(resize);

		return this;
	};
})(jQuery);

(function ($) {

    $.fn.yiiActiveForm = function (method) {
        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || !method) {
            return methods.init.apply(this, arguments);
        } else {
            $.error('Method ' + method + ' does not exist on jQuery.yiiActiveForm');
            return false;
        }
    };

    var methods = {
        init: function (attributes, options) {
        }
    };
})(window.jQuery);
