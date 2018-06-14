/********************************

Revelo's JavaScript Document for Custom Scripts
Version: 1.0
Created By: Amazyne Themes

*********************************/

var tpj=jQuery;
var revapi110;
tpj(document).ready(function() {
  if(tpj("#rev_slider_110_1").revolution == undefined){
    revslider_showDoubleJqueryError("#rev_slider_110_1");
  }else{
    revapi110 = tpj("#rev_slider_110_1").show().revolution({
      // sliderType:"hero",
      jsFileLocation:"third-party/revolution/js/",
      sliderLayout:"fullscreen",
      dottedOverlay:"none",
      delay:5000,
      navigation: {
        arrows: {

          enable: true,
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
