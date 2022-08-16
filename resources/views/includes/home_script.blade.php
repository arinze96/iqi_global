
    <script src="{{ asset('assets/new/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/new/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/growl-notification/growl-notification.min.js') }}"></script>
    {{-- <script src="dist/growl-notification.min.js"></script> --}}
    <script src="{{ asset('assets/new/js/bootstrap-dropdownhover.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/new/js/init.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/new/js/owl.carousel.min.js') }}"></script>    
    <script type="text/javascript" src="{{ asset('assets/new/js/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/new/js/jquery.counterup.min.js') }}"></script>    
    <script type='text/javascript' src="{{ asset('assets/new/js/jquery.fancybox8cbb.js?v=2.1.5') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/new/js/jquery.appear.min.js') }}"></script>    
    <script type="text/javascript" src="{{ asset('assets/new/js/jquery.easypiechart.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/new/js/jquery.validate.min.js') }}"></script>

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{ asset('assets/new/rev-slider/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/new/rev-slider/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->  
    <script type="text/javascript" src="{{ asset('assets/new/rev-slider/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/new/rev-slider/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/new/rev-slider/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/new/rev-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/new/rev-slider/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/new/rev-slider/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/new/rev-slider/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/new/rev-slider/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

    <!-- Masonary Plugin -->
    <script type="text/javascript" src="{{ asset('assets/new/js/jquery.cubeportfolio.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/new/js/masonary-custom.js') }}"></script>

    <script src="{{ asset('assets/new/js/site-custom.js') }}"></script>  
     

    <script type="text/javascript">
    var tpj=jQuery;

    var revapi1078;
    tpj(document).ready(function() {
      if(tpj("#rev_slider_1078_1").revolution == undefined){
        revslider_showDoubleJqueryError("#rev_slider_1078_1");
      }else{
        revapi1078 = tpj("#rev_slider_1078_1").show().revolution({
          sliderType:"standard",
    jsFileLocation:"revolution/js/",
          sliderLayout:"fullscreen",
          dottedOverlay:"none",
          delay:9000,
          navigation: {
            keyboardNavigation:"off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation:"off",
            mouseScrollReverse:"default",
            onHoverStop:"off",
            touch:{
              touchenabled:"on",
              swipe_threshold: 75,
              swipe_min_touches: 1,
              swipe_direction: "horizontal",
              drag_block_vertical: false
            }
            ,
            arrows: {
              style:"metis",
              enable:true,
              hide_onmobile:true,
              hide_under:600,
              hide_onleave:true,
              hide_delay:200,
              hide_delay_mobile:1200,
              //tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
              left: {
                h_align:"left",
                v_align:"center",
                h_offset:30,
                v_offset:0
              },
              right: {
                h_align:"right",
                v_align:"center",
                h_offset:30,
                v_offset:0
              }
            }
            ,
            bullets: {
              style: 'hades',
              tmp: '<span class="tp-bullet-image"></span>',
              enable:false,
              hide_onmobile:true,
              hide_under:600,
              //style:"metis",
              hide_onleave:true,
              hide_delay:200,
              hide_delay_mobile:1200,
              direction:"horizontal",
              h_align:"center",
              v_align:"bottom",
              h_offset:0,
              v_offset:30,
              space:5,
            }
          },
          viewPort: {
            enable:true,
            outof:"pause",
            visible_area:"80%",
            presize:false
          },
          responsiveLevels:[1240,1024,778,480],
          visibilityLevels:[1240,1024,778,480],
          gridwidth:[1240,1024,778,480],
          gridheight:[600,600,500,400],
          lazyType:"none",
          parallax: {
            type:"mouse",
            origo:"slidercenter",
            speed:2000,
            levels:[2,3,4,5,6,7,12,16,10,50,47,48,49,50,51,55],
            type:"mouse",
          },
          shadow:0,
          spinner: 'spinner2',
          stopLoop:"off",
          stopAfterLoops:-1,
          stopAtSlide:-1,
          shuffle:"off",
          autoHeight:"off",
          hideThumbsOnMobile:"off",
          hideSliderAtLimit:0,
          hideCaptionAtLimit:0,
          hideAllCaptionAtLilmit:0,
          debugMode:false,
          fallbacks: {
            simplifyAll:"off",
            nextSlideOnWindowFocus:"off",
            disableFocusListener:false,
          }
        });
      }
    }); /*ready*/
    </script> 

<script>
  let data = [
     {
       txt: "steve from Colorado just eaned $5,300 &nbsp; 45 minutes ago"
     },
     {
       txt: "Jake from Pittsburg just eaned $7,350 &nbsp; 2 hours ago"
     },
     {
       txt: "abdul from kabul just eaned $4,500 &nbsp; 15 minutes ago"
     },
     {
       txt: "Geraldine from Utah just eaned $1,350 &nbsp; 25 minutes ago"
     },
     {
       txt: "Joseph from Baltimore just eaned $300 &nbsp; 15 minutes ago"
     },
     {
       txt: "Mark from Athens just eaned $5,500 &nbsp; 3 hours ago"
     },
     {
       txt: "Rodrigo from Havana just eaned $5,900 &nbsp; 45 minutes ago"
     },
     {
       txt: "Catherine from Oregon just eaned $15,100 &nbsp; 2 hours ago"
     },
     {
       txt: "Majorie from Medaline just eaned $25,500 &nbsp; 10 hours ago"
     },
     {
       txt: "Mustafa from Damascus just eaned $10,250 &nbsp; 2 minutes ago"
     },
     {
       txt: "Jane from Damascus just eaned $250 &nbsp; 52 minutes ago"
     }
   ]
 var $slider = document.getElementById("slider");
 var $toggle = document.getElementById("toggle");
 var isOpen = $slider.classList.contains("slide-in");
 var isClosed = $slider.classList.contains("slide-out");

 setInterval(
   () => { setTimeout(() => {
         slide();
         }, 1000)
   },

   5000
 );
 let myData = document.querySelector('.xd').textContent;

 const slide = () => {
   var isOpen = $slider.classList.contains("slide-in");
   $slider.setAttribute("class", isOpen ? "slide-out" : "slide-in");
   var Ran = Math.floor(Math.random() * 10) + 1;
   $(".xd").text(`${data[Ran].txt}`);
   myData = data[Ran].txt;
   console.log(Ran);
   console.log(myData);
 };

</script>

<script type="text/javascript">
  baseUrl = "https://widgets.cryptocompare.com/";
  var scripts = document.getElementsByTagName("script");
  var embedder = scripts[scripts.length - 1];
  var cccTheme = {
      "General": {
          "background": "#000",
          "priceText": "#fff",
          "enableMarquee": true
      },
      "Currency": {
          "color": "#fff"
      }
  };
  (function() {
      var appName = encodeURIComponent(window.location.hostname);
      if (appName == "") {
          appName = "local";
      }
      var s = document.createElement("script");
      s.type = "text/javascript";
      s.async = true;
      var theUrl = baseUrl + 'serve/v3/coin/header?fsyms=BTC,ETH,XMR,LTC,DASH&tsyms=USD,EUR,CNY,GBP';
      s.src = theUrl + (theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
      embedder.parentNode.appendChild(s);
  })();
</script>

<script>
  GrowlNotification.notify({
  title: 'Notification Title',
  description: 'Notification Description',
  closeTimeout: 3000,
  animation.open: 'slide-in',
  animation.close: 'slide-out',
  zIndex: 1056,
  position: 'bottom-left',
  showProgress: true
});

setInterval(
   () => { setTimeout(() => {
    growlNotification.show();
         }, 1000)
   },

   5000
 );
</script>