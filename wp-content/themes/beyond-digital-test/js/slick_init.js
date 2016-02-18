/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//tabs
jQuery(document).ready(function() {
    jQuery(function () {
    jQuery('#technology_tab a:first').tab('show')
  })
});

jQuery(document).ready(function() {
        jQuery('.slick-swipe').slick({
         dots: true,
         speed: 500,
         arrows: false,
       });
        jQuery('.slick-swipe-testimonials').slick({
         dots: true,
         speed: 500,
         arrows: false,
         slidesToShow: 1,
         slidesToScroll: 1,
         centerMode: false,
         });
        jQuery('.slick-swipe-aboutus').slick({
         dots: true,
         speed: 500,
         arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,
         });
         ////---* Responsive Sliders *---/
jQuery('.single-slick').slick({
      dots: false,
      variableWidth: false,
      arrows: false,
      centerMode: true,
      edgeFriction: true,
      centerPadding: '0px',
});
//about us sliders
jQuery('.aboutus-responsive').slick({
  dots: false,
  variableWidth: false,
  arrows: false,
  centerMode: true,
  centerPadding: '0px',
  slidesToShow: 7,
  slidesToScroll: 5,
  edgeFriction: true,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 7,
        slidesToScroll: 5,
        infinite: true,
        dots: false,
        arrows: false,
        centerMode: true,
      }
    }, 
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 7,
        infinite: true,
        dots: true,
        arrows: false,
        centerMode: true,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 8,
        arrows: false,
        centerMode: true,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 9,
        centerMode: true,
        arrows: false,
        }
      },
      {
      breakpoint: 320,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 11,
        arrows: false,
      }
    },
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
//partners/clients banner.    
jQuery('.responsive-slide').slick({
  dots: true,
  variableWidth: false,
  arrows: true,
  centerMode: true,
  centerPadding: '0px',
  slidesToShow: 2,
  slidesToScroll: 4,
  edgeFriction: true,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 4,
        infinite: true,
        dots: true,
        arrows: true,
        centerMode: true,
      }
    }, 
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 4,
        infinite: true,
        dots: true,
        arrows: true,
        centerMode: true,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 5,
        centerMode: true,
        dots: true,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 5,
        dots: true,
        centerMode: true,
        }
      },
      {
      breakpoint: 320,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 5,
        dots: true,
      }
    },
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});    
    console.log('responsive slick');

});