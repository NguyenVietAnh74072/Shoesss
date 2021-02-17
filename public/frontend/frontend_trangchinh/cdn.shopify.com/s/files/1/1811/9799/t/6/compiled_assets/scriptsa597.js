(function() {
  var __sections__ = {};
  (function() {
    for(var i = 0, s = document.getElementById('sections-script').getAttribute('data-sections').split(','); i < s.length; i++)
      __sections__[s[i]] = true;
  })();
  (function() {
  if (!__sections__["grid-banner-type-1"] && !window.DesignMode) return;
  try {
    
$(document).ready(function(){
     $("#carousel_banner").owlCarousel({ 
      autoPlay: 3000, //Set AutoPlay to 3 seconds 
        items: 1,
        itemsCustom: false,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [980, 1],
        itemsTablet: [630, 1],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        singleItem: false,
        itemsScaleUp: false,
        responsive: true,
        responsiveRefreshRate: 200,
        responsiveBaseWidth: window,
        autoPlay: true,
        stopOnHover: false,
        navigation: false,
        pagination:true
 
  });
});
      

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["sidebar-bestsellers"]) return;
  try {
    
$(document).ready(function(){
var top_products_count = $('.top-products li').length;
      if(top_products_count > 1) { $('.top_products_nav').css('display','block');}
      else {$('.top_products_nav').css('display','none');}
      var top_products = $(".top-products");
      top_products.owlCarousel({
        items: 1,
        itemsCustom: false,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [980, 1],
        itemsTablet: [630, 1],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        singleItem: false,
        itemsScaleUp: false,
        responsive: true,
        responsiveRefreshRate: 200,
        responsiveBaseWidth: window,
        autoPlay: false,
        stopOnHover: false,
        navigation: false,
        pagination:false
      });
      // Custom Navigation Events
      $(".top_products_nav .next").click(function(){
        top_products.trigger('owl.next');
      })
      $(".top_products_nav .prev").click(function(){
        top_products.trigger('owl.prev');
      })             
});
      

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["sidebar-category"]) return;
  try {
    
$(document).ready(function(){
$(".dt-menu-expand").click(function(event){
event.preventDefault();
if( $(this).hasClass("dt-mean-clicked") ){
$(this).text("+");
if( $(this).prev('ul').length ) {
$(this).prev('ul').slideUp(400);
} else {
$(this).prev('.megamenu-child-container').find('ul:first').slideUp(600);
}
} else {
$(this).text("-");
if( $(this).prev('ul').length ) {
$(this).prev('ul').slideDown(400);
} else{
$(this).prev('.megamenu-child-container').find('ul:first').slideDown(2000);
}
}

$(this).toggleClass("dt-mean-clicked");
return false;
});

});


  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["sidebar-promoimage"]) return;
  try {
    
$(document).ready(function(){
     $("#promo-carousel").owlCarousel({ 
      autoPlay: 3000, //Set AutoPlay to 3 seconds 
        items: 1,
        itemsCustom: false,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [980, 1],
        itemsTablet: [630, 1],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        singleItem: false,
        itemsScaleUp: false,
        responsive: true,
        responsiveRefreshRate: 200,
        responsiveBaseWidth: window,
        autoPlay: false,
        stopOnHover: false,
        navigation: false,
        pagination:true
 
  });
});
      

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["top-bar"]) return;
  try {
    

if (jQuery.cookie('headerTop') == 'closed') {
jQuery('.header-top').fadeOut();
}

jQuery('.header-top a.close').bind('click',function(){
jQuery('.header-top').fadeOut();
jQuery.cookie('headerTop', 'closed', {expires:-1, path:'/'});
});  

  } catch(e) { console.error(e); }
})();

})();
