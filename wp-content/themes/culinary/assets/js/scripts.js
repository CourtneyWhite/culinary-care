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
        items: 1
      },
      460:{
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
    var emailField = $('.form-newsletter #mce-EMAIL');
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

  mobileNav = function() {
    var mobileBtn = $('.btn-mobile');
    var mainMenu = $('.menu-main-menu-container');
    mobileBtn.on('click', function(e){
      e.preventDefault();
      mainMenu.toggleClass('show');
      $(this).toggleClass('active');
    });
  }
  
  donateFormCheck = function() {
    var donateForm = $('#donate-form');
    var donateAmount = $('#amount');
    var recurringCheckbox = $('#recurring');
    var hiddenDonateType = $('input[name="cmd"]');
    var hiddenDonateTitle = $('input[name="item_name"]');
    var hiddenDonateDuration = $('<input/>',{type:'hidden',name:'p3',value:'12'});
    var hiddenDonateUnits = $('<input/>',{type:'hidden',name:'t3',value:'M'});
    
    if (recurringCheckbox.is(':checked')) {
      hiddenDonateType.val('_xclick-subscriptions');
      hiddenDonateTitle.val('Culinary Care Monthly Donation');
      donateAmount.attr('name', 'a3');
      donateForm.prepend(hiddenDonateDuration);
      donateForm.prepend(hiddenDonateUnits);
    }
    
    $(recurringCheckbox).click(function() {
      if (recurringCheckbox.is(':checked')) {
        hiddenDonateType.val('_xclick-subscriptions');
        hiddenDonateTitle.val('Culinary Care Monthly Donation');
        donateAmount.attr('name', 'a3');
        donateForm.prepend(hiddenDonateDuration);
        donateForm.prepend(hiddenDonateUnits);
      } else {
        hiddenDonateType.val('_donations');
        hiddenDonateTitle.val('Culinary Care Donation');
        donateAmount.attr('name', 'amount');
        donateForm.find(hiddenDonateDuration).remove();
        donateForm.find(hiddenDonateUnits).remove();
      }
    });
  }
  
  $(window).on("resize", function() {
    sliderContentHeight();
  }).resize();
  
  sliderTabActive();
  labelFade();
  mobileNav();
  donateFormCheck();

});