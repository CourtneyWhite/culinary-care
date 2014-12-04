$(function(){

  $('.testimonials-slider').owlCarousel({
    loop: true,
    items: 1,
    nav: true,
    navText: []
  });


  charityColHeight = function() {

    var col = $('.place .col-1-3');
    var colHeight = col.map(function() {
      $(this).removeAttr('style');
      return $(this).height();
    }).get();
    var maxHeight = Math.max.apply(Math, colHeight);

    col.height(maxHeight);

  }

  formSubmit = function() {
  
  	$('form').submit(function(e) {
  		e.preventDefault();
  		var errorcount = 0;
  		
  		$('input[type="text"]').each(function() {
  	    iValue = $(this).val();
    		if(iValue == '') {
          $(this).addClass('error');
          errorcount++;
    		}
  		});
  		
  		if(errorcount == 0) {
    		$(this).find('button').prop('disabled', 'disabled').html('Please wait...');
    
    		var first_name = $('#first-name').val();
    		var last_name = $('#last-name').val();
    		var attending = $('.attending:checked').val();
    		var num_attending = $('#num-attending').val();
    		var message = $('#message').val();
    		var data = {
    			first_name: first_name,
    			last_name: last_name,
    			attending: attending,
    			num_attending: num_attending,
    			message: message
    		}
    		$.post('/php/mail.php', data, function(response){
    			$('form').fadeOut(500, function(){
    				$(this).html('<h4>Thanks for your RSVP!</h4><p>We&#8217;re counting down the days...</p>');
    				$(this).fadeIn(500);
    			});
    		});
  		}
  
  	});
  	
  	$('input[type="text"]').focus(function() {
	   if ($(this).hasClass('error')) {
       $(this).keyup(function() {
         $(this).removeClass('error');
       });
	   }
  	});
	
	}
  
  // navScroll();
  // charityColHeight();
  // formSubmit();

});