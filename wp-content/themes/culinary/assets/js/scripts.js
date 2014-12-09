$(function(){

  $('.testimonials-slider').owlCarousel({
    loop: true,
    items: 1,
    nav: true,
    navText: ['<span class="icon-prev"></span>','<span class="icon-next"></span>']
  });

  $('.partners-slider').owlCarousel({
    loop: true,
    items: 6,
    nav: true,
    navText: ['<span class="icon-prev"></span>','<span class="icon-next"></span>'],
    responsive: {
      0:{
        items: 2
      },
      600:{
        items: 3
      },
      840:{
        items: 4
      },
      1200:{
        items: 6
      }
    }
  });
  
  $('.hero-slider .slides').owlCarousel({
    loop: false,
    items: 1,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    URLhashListener: true,
    navText: ['<span class="icon-prev"></span>','<span class="icon-next"></span>']
  });

  sliderTabActive = function() {
    var tab = $('.slider-tabs a');
    $('.slider-tabs a').on('click', function() {
      $(tab).removeClass('active');
      $(this).addClass('active');
    });  
  }

  sliderContentHeight = function() {
    var content = $('.slide-content');
    var img = $('.slide-img');
    var contentHeight = content.map(function() {
      $(this).removeAttr('style');
      return $(this).height();
    }).get();
    var maxHeight = Math.max.apply(Math, contentHeight);
    content.height(maxHeight);
    img.height(maxHeight);
  }
  
  labelFade = function() {
    var emailField = $('.form-newsletter #email');
    var emailLabel = $('.form-newsletter label');
    $(emailField).bind('focus', function(){
      emailLabel.fadeOut();
    });
    $(emailField).bind('blur', function(){
      var emailFieldVal = $(this).val();
      if(emailFieldVal == '') {
        emailLabel.fadeIn();
      }
    });
  }

  sliderTabActive();
  sliderContentHeight();
  labelFade();

});