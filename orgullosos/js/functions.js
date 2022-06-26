function onScrollInit( items, trigger ) {
  console.log('entro')
    items.each( function() {
        var osElement = $(this),
        osAnimationClass = osElement.attr('data-os-animation'),
        osAnimationRemove = osElement.attr('data-os-animation-remove'),
        osAnimationDelay = osElement.attr('data-os-animation-delay');
        osElement.css({
          '-webkit-animation-delay':  osAnimationDelay,
          '-moz-animation-delay':     osAnimationDelay,
          'animation-delay':          osAnimationDelay
        });
        var osTrigger = ( trigger ) ? trigger : osElement;

        if (osTrigger.parent('.menu-laptop').length>0) {
            osElement.addClass('animated')
            osElement.removeClass(osAnimationRemove);
            osElement.addClass(osAnimationClass);
            $('a.link').removeClass('no-line')
        }else{
          var waypoint = new Waypoint({
              element: osTrigger,
              handler: function(direction) {
                  if (direction=='up') {
                    osElement.addClass('animated')
                    setTimeout(function() {
                       $('a.link').removeClass('no-line')
                    }, 200);                    
                    osElement.addClass(osAnimationRemove);
                    osElement.removeClass(osAnimationClass);
                  }else{
                        setTimeout(function() {
                       $('a.link').removeClass('no-line')
                    }, 200);
                      
                      osElement.addClass('animated')
                      osElement.removeClass(osAnimationRemove);
                      osElement.addClass(osAnimationClass);
                  }
              },
              offset: '100%'
          });
        }
    });
}
function hovering(elem){ 
    $(elem).on('mouseenter touchstart', function () {
      $(this).addClass('hover')
      if ($(this).hasClass('button-prod')) {
        $(this).find('.circle').removeClass('rotating')
      }
    })
    $(elem).on('mouseleave touchend', function () {
      $(this).removeClass('hover')
       if ($(this).hasClass('button-prod')) {
        $(this).find('.circle').addClass('rotating')
      }
    })  
}
var mobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i) ? !0 : !1
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i) ? !0 : !1
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPod/i) ? !0 : !1
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i) ? !0 : !1
    },
    any: function() {
        var istablet = isTablet.any();
        return (mobile.Android() || mobile.BlackBerry() || mobile.iOS() || mobile.Windows() || istablet)
    }
};
function sendForm() {

    $.validate({
        modules: 'security',
        lang: 'es',
        borderColorOnError: '#c23154',
    });

    $('#contact-form #suscribe ').click(function(event) {
        event.preventDefault();
        var f = $('#contact-form').serialize();
        var form = $('#contact-form');
        var formdata = !1;
        console.log(f);
        if (window.FormData) {
            formdata = new FormData(form[0])
        }

        if ($('#contact-form').isValid()) {
            $.ajax({
                url: 'https://www.takeaway.es/smartgreen/services/contacto/insertContacto',
                dataType: 'html',
                type: 'post',
                data: formdata ? formdata : form.serialize(),
                processData: !1,
                contentType: !1,
                crossDomain: true,
                success: function(data) {
                    $('#contact-form #suscribe').hide('slow')
                    $('#modalNews p.response').html('')
                    $('#modalNews p.response').append('<b>Gracias por unirte a SmartGreen, pronto nos pondremos en contacto contigo.</b>')
                    $('#modalNews').modal('show')
                    $('#modalNews .close, body').click(function(event) {
                       location.reload();
                    });
                },
                error: function(error) {
                    console.log(error)
                },
                complete: function() {}
            })
        }
    })
}
//jj
function menuPlace(){
    $('.hamburger').click(function(event) {
        $(this).toggleClass('is-active');
        $('.header-sg .logo .place').toggleClass('is-active');
        $('.full-screen-menu').toggleClass('active');

    $('.header-sg .os-animation').each(function(index, el) {
            var osElement = $(this),
            osAnimationClass = osElement.attr('data-os-animation'),
            osAnimationRemove = osElement.attr('data-os-animation-remove'),
            osAnimationDelay = osElement.attr('data-os-animation-delay');
            osElement.css({
                '-webkit-animation-delay':  osAnimationDelay,
                '-moz-animation-delay':     osAnimationDelay,
                'animation-delay':          osAnimationDelay
            }); 
            osElement.addClass('animated')
            osElement.removeClass(osAnimationRemove);
            osElement.addClass(osAnimationClass);
        });
        if ($('.full-screen-menu').hasClass('active')) {
            $('body').css('overflow','hidden')
        }else{
            $('body').css('overflow','initial')
            $('.header-sg .os-animation').removeClass('animated')
            $('.header-sg .os-animation').removeClass('fadeInUp')
        }
          });
    var place= $('body').data('place');

    if (place =='home') {
      
        $('.menu-laptop li:nth-child(1) a').addClass('active')
        // $('.header-sg li:nth-child(1) a').addClass('active')
    }
    if (place =='reforestacion') {
        $('.menu-laptop li:nth-child(2) a').addClass('active')
        // $('.header-sg li:nth-child(2) a').addClass('active')
    }
    if (place =='ecotecnologia') {
        $('.menu-laptop li:nth-child(3) a').addClass('active')
        // $('.header-sg li:nth-child(3) a').addClass('active')
    }
    if (place =='movimiento') {
        $('.menu-laptop li:nth-child(4) a').addClass('active')
        // $('.header-sg li:nth-child(4) a').addClass('active')
    }
}
function modalCompartir(){
  $('.compartir').click(function(event) {
    $('#modalCompartir').modal('show');
  });
}
/*
function modalVideos(){
  $('.play').click(function(event) {
    event.preventDefault();
    var video = $(this).data('video')
    $('#modalVideo').modal('show');
    $('#modalVideo').find('iframe').attr('src',video)
  });
}*/
function modalVideos(){
  $('.play').click(function(event) {
    event.preventDefault();
    var video = $(this).data('video');
    $('#modalVideo').modal('show');
    $('#modalVideo').find('iframe').attr('src',video);
  });
  
    $('body').click(function(event) {
     if($('#modalVideo').css('display') == 'block' && $('body').hasClass('modal-open')){
        $('#modalVideo iframe').attr('src','');
        console.log( $('#modalVideo iframe').attr('src'))
      }
    });


}
function slider() {   
  if ($(window).width()<770) {
      var bande_4 = new Swiper('.bande_4 .swiper-container', {
          direction: 'horizontal',
          slidesPerView: 'auto',
          centeredSlides: true,
          loop:false,
          breakpoints: {
            768: {
              slidesPerView: 2
            },
            600: {
              slidesPerView: 1
            }
          }, navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
          }, pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
            clickable: true
          }
      });
      var bande_3 = new Swiper('.bande_3 .swiper-container', {
        direction: 'horizontal',
        slidesPerView: 'auto',
        centeredSlides: true,
        loop:false,
        breakpoints: {
          768: {
            slidesPerView: 2
          },
          600: {
            slidesPerView: 1  
          }
        },navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
        },pagination: {
          el: '.swiper-pagination',
          dynamicBullets: true,
          clickable: true
        }
      });
      var galleryThumbsMobile = new Swiper('.gallery-thumbs.mobile-thumbs', {
        spaceBetween: 1,
        slidesPerView:1,
        freeMode: true,
        effect:'fade',
        watchSlidesVisibility: true,
        watchSlidesProgress: true
      });
      var galleryTopMobile = new Swiper('.gallery-top', {
        spaceBetween: 10,
        slidesPerView:1.5,
        effect: 'fade',
        direction: 'horizontal',
        mousewheel: false,
        thumbs: {
          swiper: galleryThumbsMobile
        },pagination: {
          el: '.swiper-pagination',
          dynamicBullets: true,
          clickable: true
        }
      });
      var bande_insti = new Swiper('.bande_insti .swiper-container', {
        slidesPerView: 2,
        spaceBetween: 20,
        navigation: {
              nextEl: '.bande_insti .swiper-button-next',
              prevEl: '.bande_insti .swiper-button-prev',
        }
      });
      var bande_empresas = new Swiper('.bande_empresas .swiper-container', {
        slidesPerView: 2,
        spaceBetween: 34,
        navigation: {
              nextEl: '.bande_empresas .swiper-button-next',
              prevEl: '.bande_empresas .swiper-button-prev',
        }
      });
      var bande_wall = new Swiper('.bande_wall .swiper-container', {
        slidesPerView: 2,
        spaceBetween: 30,
        navigation: {
              nextEl: '.bande_wall .swiper-button-next',
              prevEl: '.bande_wall .swiper-button-prev',
        }
      });
      var bande_electro = new Swiper('.bande_electro .swiper-container', {
        slidesPerView: 2,
        spaceBetween: 33,
        navigation: {
              nextEl: '.bande_electro .swiper-button-next',
              prevEl: '.bande_electro .swiper-button-prev',
        }
      });
      var bande_produits = new Swiper('.bande_produits .swiper-container', {
        slidesPerView: 2,
        spaceBetween: 33,
        navigation: {
              nextEl: '.bande_produits .swiper-button-next',
              prevEl: '.bande_produits .swiper-button-prev',
        }
      });
        var bande_news = new Swiper('.bande_news .swiper-container', {
        slidesPerView: 2,
        spaceBetween: 33,
        navigation: {
          nextEl: '.bande_news .swiper-button-next',
          prevEl: '.bande_news .swiper-button-prev',
        }
    });
    if ($(window).width()<650) {
      var bandevideo = new Swiper('.bande_2 .swiper-container', {
          spaceBetween: 1,
          slidesPerView: 'auto',
          centeredSlides: true,
          slidesPerView:1,
          pagination: {
            el: '.swiper-pagination',
             dynamicBullets: true,
             clickable: true
          }
      });
      var bande_empresas = new Swiper('.bande_empresas .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 20,
        pagination: {
          el: '.bande_empresas .swiper-pagination',
          dynamicBullets: true,
          clickable: true
        }
      });
       var bande_insti = new Swiper('.bande_insti .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 20,
        pagination: {
          el: '.bande_insti .swiper-pagination',
          dynamicBullets: true,
          clickable: true
        }
      });
      var bande_wall = new Swiper('.bande_wall .swiper-container', {
        slidesPerView: 1,
         grabCursor: false,
        pagination: {
          el: '.bande_wall .swiper-pagination',
          dynamicBullets: true,
          clickable: true
        }
      });
      var bande_electro = new Swiper('.bande_electro .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 20,
        pagination: {
          el: '.bande_electro .swiper-pagination',
          dynamicBullets: true,
          clickable: true
        }
      });
      var bande_produits = new Swiper('.bande_produits .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 20,
        pagination: {
          el: '.bande_produits .swiper-pagination',
          dynamicBullets: true,
          clickable: true
        }
      });
        var bande_news = new Swiper('.bande_news .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
          nextEl: '.bande_news .swiper-button-next',
          prevEl: '.bande_news .swiper-button-prev',
        }
    });
    }
  }else{
    var bande_insti = new Swiper('.bande_insti .swiper-container', {
        slidesPerView: 4,
        spaceBetween: 34,
        navigation: {
              nextEl: '.bande_insti .swiper-button-next',
              prevEl: '.bande_insti .swiper-button-prev',
        }
      });
    var galleryThumbs = new Swiper('.gallery-thumbs.desktop-thumbs', {
        spaceBetween: 20,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        navigation: {
        nextEl: '.gallery-thumbs.desktop-thumbs .swiper-button-next',
        prevEl: '.gallery-thumbs.desktop-thumbs .swiper-button-prev',
      },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 50,
          }
        }
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      effect: 'fade',
      direction: 'horizontal',
      mousewheel: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs
      },pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
        clickable: true
      }
    });
    var bande_empresas = new Swiper('.bande_empresas .swiper-container', {
        slidesPerView: 4,
        spaceBetween: 34,
        navigation: {
              nextEl: '.bande_empresas .swiper-button-next',
              prevEl: '.bande_empresas .swiper-button-prev',
        }
    });
    var bande_wall = new Swiper('.bande_wall .swiper-container', {
      slidesPerView: 4,
      spaceBetween: 30,
      navigation: {
            nextEl: '.bande_wall .swiper-button-next',
            prevEl: '.bande_wall .swiper-button-prev',
      }
    });
    var bande_electro = new Swiper('.bande_electro .swiper-container', {
        slidesPerView: 4,
        spaceBetween: 35,
        navigation: {
              nextEl: '.bande_electro .swiper-button-next',
              prevEl: '.bande_electro .swiper-button-prev',
        }
    });
    var bande_produits = new Swiper('.bande_produits .swiper-container', {
        slidesPerView: 4,
        spaceBetween: 33,
        navigation: {
          nextEl: '.bande_produits .swiper-button-next',
          prevEl: '.bande_produits .swiper-button-prev',
        }
    });
        var bande_news = new Swiper('.bande_news .swiper-container', {
        slidesPerView: 3,
        spaceBetween: 33,
        navigation: {
          nextEl: '.bande_news .swiper-button-next',
          prevEl: '.bande_news .swiper-button-prev',
        }
    });
  } 
}
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
  canvas = document.getElementById("canvas");
  anim_container = document.getElementById("animation_container");
  dom_overlay_container = document.getElementById("dom_overlay_container");
  var comp=AdobeAn.getComposition("89DE93B41F3C004EB1D320086618846B");
  var lib=comp.getLibrary();
  handleComplete({},comp);
}
function handleComplete(evt,comp) {
//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
  var lib=comp.getLibrary();
  var ss=comp.getSpriteSheet();
  exportRoot = new lib.mapa();
  stage = new lib.Stage(canvas);
  stage.enableMouseOver();  
//Registers the "tick" event listener.
fnStartAnimation = function() {
    stage.addChild(exportRoot);
    createjs.Ticker.framerate = lib.properties.fps;
    createjs.Ticker.addEventListener("tick", stage);
  }     
//Code to support hidpi screens and responsive scaling.
  AdobeAn.makeResponsive(false,'both',false,1,[canvas,anim_container,dom_overlay_container]); 
  AdobeAn.compositionLoaded(lib.properties.id);
  fnStartAnimation();
}



function scrollTo(){
  var url=window.location.href;
  if(url.indexOf('lugar-eficiente') != -1){
      var offset = -20;
      $('html, body').animate({
          scrollTop: $("#lugar-eficiente").offset().top + offset
      }, 2000);
  }
}



function getCookie(nombre) {
  var value = "; " + document.cookie;
  var parts = value.split("; " + nombre + "=");
  if (parts.length == 2) return parts.pop().split(";").shift();
}  

jQuery( document ).ready(function() {

  
    setTimeout(function(){  
  	//    if(getCookie('ES_eCookieOpenFlag') == 'true'){
      //     $('.navigation').prepend('<div class="dimmed" style="position:fixed; z-index:10000; top:0;left:0; width:100%; height:100%; background:#000; opacity:0.5;"></div>'); 
      //     $('..header-sg-sg').addClass('nodisplay');
  	//    }   
      jQuery('.dimmed').remove(); 

      
	if(getCookie('ES_eCookieOpenFlag') == 'true' || getCookie('ES_eCookieOpenFlag') == undefined){
  		$('.navigation').prepend('<div class="dimmed" style="position:fixed; z-index:10000; top:200px;left:0; width:100%; height:100%; background:#000; opacity:0.5;"></div>');  

    }
    }, 2800);
}); 

    jQuery( document ).ready(function() {
        // if(jQuery(window).width() < 768){
        //   jQuery( ".menu-laptop" ).hide();
        // }
        // else{
        //   console.log(jQuery(window).width());
        // }
/*
setTimeout(function(){ alert("Hello"); }, 3000);
 */
        jQuery(".hamburger").click(function() {
         // setTimeout(function(){  
            if(!jQuery('.hamburger').hasClass('is-active')){                     
              // jQuery( ".menu-laptop" ).hide();
              jQuery( ".menu-4" ).hide();

            }else{
              // jQuery( ".menu-laptop" ).show();
         //     jQuery( ".menu-3" ).show();
            }
       //   }, 1000);
        });

    }); 

    jQuery(window).resize(function(){
      var alto=jQuery(window).height();
      var ancho=jQuery(window).width();
      if(ancho >= 768){
        jQuery( ".menu-laptop" ).show();        
      }else{
        // jQuery( ".menu-laptop" ).hide();
        jQuery( ".menu-4" ).hide();
      }
      
    });

function modalFormulario(){
$( "#enviar-unete" ).click(function(e) {
      e.preventDefault();

        event.preventDefault();
        var f = $('#contact-form-modal').serialize();
        // var f = $('#contact-form').serialize();
        var form = $('#contact-form-modal');
        // var form = $('#contact-form');
        
        if($('#newsletter').prop('checked')){
          $('#newsletter').val('on')
        }

        var formdata = !1;
        console.log(f);
        if (window.FormData) {
            formdata = new FormData(form[0])
        }

        // if ($('#contact-form').isValid()) {
        if ($('#contact-form-modal').isValid()) {
   
            $.ajax({
             //   url: 'https://www.takeaway.es/smartgreen/services/contacto/insertContacto',
                url: 'https://www.takeaway.es/smartgreen/services/contacto/insertContactoModal',                          
                dataType: 'html',
                type: 'post',
                data: formdata ? formdata : form.serialize(),
                processData: !1,
                contentType: !1,
                crossDomain: true,
                success: function(data) {
                    $('#mensaje-respuesta').html('');
                    $('#mensaje-respuesta').html('<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Se han enviado los datos correctamente<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div> ');
                    
                      setTimeout(function(){ 
                        $('#modal-unete').hide('show'); 

                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                      }, 2000);    

                },
                error: function(error) {
                    console.log(error);
                    $('#mensaje-respuesta').html('<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Se ha producido un error<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div> ');                    
                },
                complete: function() {}
            })
        }      
    });  


  setTimeout(function(){ 

  // var url = window.location.href;
  //   if(url.includes("prueba_popup")){

    if(localStorage.getItem("mf") != '1'){

      $('#modal-unete').modal('show');
      $( "#si" ).click(function(e) {
         $('.form1').addClass('d-none');
         $('.form2').removeClass('d-none');
         localStorage.setItem("mf", '1');
      });  
      $( "#no" ).click(function(e) {
         $('#modal-unete').hide('show'); 
         $('body').removeClass('modal-open');
         $('.modal-backdrop').remove();  
         localStorage.setItem("mf", '1');
      });    

         
      }         
    // }
  }, 20000);

}    