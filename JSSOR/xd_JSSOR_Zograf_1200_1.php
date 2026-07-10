<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Πίνακες Ζωγραφικής - Slideshow #2</title>
<link href="src="https://upload.wikimedia.org/wikipedia/commons/d/d0/Greenwood_Lake_by_Jasper_Francis_Cropsey%2C_1879.jpg" rel="image_src">
<link rel="stylesheet" href="/MNU/menu-style.css">

</head>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/MNU/menu.html'; ?>

    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Composer -->
    <!-- Source: https://www.jssor.com/xridim/image-gallery.slider_bora.slider/=edit -->
    
    <!-- Αυτό τ0  ακυρώνω και βάζω το γενικό Αρχείο της LIBRARY...
    <script src="js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
    -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jssor-slider/28.0.0/jssor.slider.min.js" type="text/javascript"></script>
    
    
    
    <script type="text/javascript">
        window.jssor_1ab_slider_init = function() {

            var jssor_1ab_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1ab_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1ab_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 16,
                $SpacingY: 16
              }
            };

            var jssor_1ab_slider = new $JssorSlider$("jssor_1ab", jssor_1ab_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1200;

            function ScaleSlider() {
                var containerElement = jssor_1ab_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1ab_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 036 css*/
        .jssorb036 {position:absolute;}
        .jssorb036 .i {position:absolute;cursor:pointer;}
        .jssorb036 .i .b {fill:#fff;fill-opacity:0.7;stroke:#000;stroke-width:1000;stroke-miterlimit:10;stroke-opacity:0.5;}
        .jssorb036 .i:hover .b {fill:#000;fill-opacity:1;stroke:#fff;stroke-opacity:1;}
        .jssorb036 .iav .b {fill:#000;fill-opacity:1;stroke:#fff;stroke-width:1600;stroke-opacity:0.6;}
        .jssorb036 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 103 css*/
        .jssora103 {display:block;position:absolute;cursor:pointer;}
        .jssora103 .c {fill:#fff;opacity:.8;}
        .jssora103 .a {fill:#333;opacity:.8;}
        .jssora103:hover .c {opacity:.6;}
        .jssora103:hover .a {opacity:1;}
        .jssora103.jssora103dn .c {opacity:.3;}
        .jssora103.jssora103dn .a {opacity:1;}
        .jssora103.jssora103ds {opacity:.3;pointer-events:none;}
    </style>
        <!--                                                 
       <div align="center">
        <span style="font-family: verdana;">Λαγκάδια Αρκαδίας - Φθινοπωρινές Εικόνες</span>                    
        </div>
        -->                                                 
                                                         
    <div id="jssor_1ab" style="position:relative;margin:0 auto;top:0px;left:0px;width:1200px;height:675px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="https://xridim.github.io/Sldshow/spin_Ld.svg" />
         </div>                                                                                                                                    
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1200px;height:675px;overflow:hidden;">
                                                                                                                                 
                                                                                                                                 
                                                                                                                                
                                                                                                                                    
             <div>
                <img data-u="image" src="https://upload.wikimedia.org/wikipedia/commons/d/d0/Greenwood_Lake_by_Jasper_Francis_Cropsey%2C_1879.jpg"/>
            </div>
            <div>
                <img data-u="image" src="https://www.museothyssen.org/sites/default/files/imagen/obras/1983.39_lago-greenwood.jpg"/>
            </div>
            
            <div>
                <img data-u="image" src="https://i.pinimg.com/originals/69/e9/9d/69e99d6e1740affa502e9422b4cdcdc9.jpg"/>
            </div>
            
            <div>
                <img data-u="image" src="https://www.incollect.com/sites/uploads/Hankin080906Ed01.jpg"/>
            </div>
            <div>
                <img data-u="image" src="https://sothebys-com.brightspotcdn.com/dims4/default/8e239ff/2147483647/strip/true/crop/2000x1164+0+0/resize/2880x1674!/format/webp/quality/90/?url=http%3A%2F%2Fsothebys-brightspot-migration.s3.amazonaws.com%2Ff1%2F7b%2F67%2F61e80c90baef56d6adc34064a322e87446a6ef960501ebb7e747996553%2F012n09688-98b42.jpg"/>
            </div>
                                                                                                                                    
                                                                                                                                    
                                                                                                                                    
                                                                                                                                    
                                                                                                                                    
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">slider html</a>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb036" style="position:absolute;bottom:12px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:13px;height:13px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <rect class="b" x="2200" y="2200" width="11600" height="11600"></rect>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora103" style="width:55px;height:55px;top:162px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6240"></circle>
                <path class="a" d="M5738.1,7867.2l2689.6-2689.5c38.5-38.4,82.8-57.8,132.8-57.8c50,0,94.3,19.3,132.8,57.8l288.5,288.6 c38.5,38.5,57.7,82.7,57.7,132.8c0,50.1-19.2,94.3-57.7,132.8L6713.5,8000.1l2268.2,2268.3c38.5,38.5,57.7,82.7,57.7,132.7 c0,50.1-19.2,94.3-57.7,132.8l-288.5,288.5c-38.5,38.5-82.7,57.7-132.8,57.7c-50,0-94.3-19.2-132.8-57.7L5738.2,8132.8 c-38.4-38.4-57.7-82.7-57.7-132.8S5699.6,7905.8,5738.1,7867.2z"></path>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora103" style="width:55px;height:55px;top:162px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6240"></circle>
                <path class="a" d="M10261.9,7867.2L7572.3,5177.8c-38.5-38.4-82.8-57.8-132.8-57.8c-50,0-94.3,19.3-132.8,57.8l-288.5,288.6 c-38.5,38.5-57.7,82.7-57.7,132.8c0,50.1,19.2,94.3,57.7,132.8l2268.2,2268.2l-2268.2,2268.3c-38.5,38.5-57.7,82.7-57.7,132.7 c0,50.1,19.2,94.3,57.7,132.8l288.5,288.5c38.5,38.5,82.7,57.7,132.8,57.7c50,0,94.3-19.2,132.8-57.7l2689.5-2689.5 c38.4-38.4,57.7-82.7,57.7-132.8S10300.4,7905.8,10261.9,7867.2z"></path>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1ab_slider_init();
    </script>
    <!-- #endregion Jssor Slider End -->
                                 
<div align="center">
  Πίνακες του Jasper Francis Cropsey (1823-1900)<br />
 (ΧΔ)                                                                                                              
  </div>   
<script src="/MNU/menu-script.js"></script>                                                                                                          
</body>
</html>
