$(function(){

  navScroll = function() {

    var navLink = $('.main-nav a');
  
    navLink.on('click', function(e) {
      e.preventDefault();
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
      }
    });
    
  }

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
  
  navScroll();
  charityColHeight();
  formSubmit();

});



/*
  sectionNavScroll = function() {
  
    var navListItem = $('.section-nav li');
    var navLink = $('.section-nav a');
    var fullViewUpBtn = $('.slide-up-btn');
    
    fullViewUpBtn.on('click', function(e) {
      e.preventDefault();
      var introPos = $('#intro').offset();
      
      $('html,body').animate({
        scrollTop: introPos.top
      }, 1000);      
    });
  
    navListItem.on({
      mouseenter: function() {
        var toolTip = $(this).data('tooltip');
        $('<div class="tooltip">' + toolTip + '</div>').hide().appendTo(this).fadeIn(200);
      },
      mouseleave: function() {
        $(this).find('.tooltip').fadeOut(200, function() {
          $(this).remove();
        });
      }
    });
    
    navLink.on('click', function(e) {
      e.preventDefault();
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
      }
    });
    
    var aChildren = $('.section-nav li').children(); // find the a children of the list items
    var aArray = []; // create the empty aArray
    
    for (var i=0; i < aChildren.length; i++) {    
      var aChild = aChildren[i];
      var ahref = $(aChild).attr('href');
      aArray.push(ahref);
    } // this for loop fills the aArray with attribute href values
    
    $(window).scroll(function(){
      var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
      var windowHeight = $(window).height(); // get the height of the window
      var docHeight = $(document).height();
      
      for (var i=0; i < aArray.length; i++) {
        var theID = aArray[i];
        var sectionPos = $(theID).offset().top; // get the offset of the div from the top of page
        var sectionHeight = $(theID).height(); // get the height of the div in question

        if (windowPos > (sectionPos - 40) && windowPos < (sectionPos + 40)) {
          $(theID).find('.triggers').addClass('fadeInUp animated');
        }
        
        if (windowPos >= (sectionPos - 300) && windowPos < ( (sectionPos - 300) + sectionHeight)) {
          $(".section-nav a[href='" + theID + "']").addClass('active');
        } else {
          $(".section-nav a[href='" + theID + "']").removeClass('active');
        }
      }
      
      if(windowPos + windowHeight == docHeight) {
        if (!$(".section-nav li:last-child a").hasClass("active")) {
          var navActiveCurrent = $(".active").attr("href");
          $("a[href='" + navActiveCurrent + "']").removeClass("active");
          $(".section-nav li:last-child a").addClass("active");
        }
      }
    });

  }
*/
