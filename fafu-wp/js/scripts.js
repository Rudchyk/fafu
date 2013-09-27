$(document).ready(function(){

	$('.text a[href ^="http:"], .text a[href ^="https:"]').attr({
        target: "_blank"
    }).addClass('external');

    $('.text a[href ^="http://fafu.in.ua/"], .text a[href ^="https://fafu.in.ua/"]').removeClass('external');

    $('.text a[href ^="http:"] img, .text a[href ^="https:"] img, .text a[href ^="http:"] span, .text a[href ^="https:"] span, .text a[href ^="http:"] div, .text a[href ^="https:"] div').each(function(i){
        if($(this).length){             
           $(this).parent().removeClass('external');
        }   
    });
	
	$("input[placeholder], textarea[placeholder]").textPlaceholder();

 	$('ul.tabs').delegate('li:not(.current)', 'click', function() {
		$(this).addClass('current').siblings().removeClass('current')
		.parents('div.tabs-section').find('div.tabs-box').eq($(this).index())
		.show().siblings('div.tabs-box').hide();
	})

	// $('.tabs-item.current').prepend("<span class='tabs-item-current-before'></span>")

	$('#ukraine-map').vectorMap({
	    map: 'ukraine_merc_en',
	    backgroundColor: 'transparent',
	    zoomOnScroll: false,
	    zoomMax: 1,
	    regionsSelectable: true,
	    regionsSelectableOne: true,
	    onRegionClick: function(click, code){
	      if (code == '24') { 
	        window.open("http://stackoverflow.com"); 
	        // window.location.href = 'http://example.com';
	      }
	      if (code == '23') { 
	        window.open("http://stackoverflow1.com"); 
	      }
	    },
	    regionStyle: {
	      initial: {
	        fill: '#125269',
	        "fill-opacity": 1,
	        stroke: '#196d89',
	        "stroke-width": 1,
	        "stroke-opacity": 1
	      },
	      hover: {
	        fill: '#0e3b4b',
	        "fill-opacity": 1
	      },
	      selected: {
	        fill: '#0e3b4b',
	        "fill-opacity": 1
	      }
	    }
	  });

	$(document).mousemove(function (pos) {
		$(".future-game-team-name, .fixed-tooltip").css({top: pos.clientY+12, left: pos.clientX+12});
	});	

	clock(); //вызываем функцию времени
    window.setInterval(clock, 1000); //вызываем функцию clock() каждую секунду	

    
    $(".future-game-info .icon").each(function(i){
		if ($(this).hasClass('higher-very-small-icon')) {
	    	$(this).parent().find('.fixed-tooltip').text('Высшая лига');
	    }
	    if($(this).hasClass('first-very-small-icon')){
	    	$(this).parent().find('.fixed-tooltip').text('Первая лига');
	    }
	    if($(this).hasClass('cup-very-small-icon')){
	    	$(this).parent().find('.fixed-tooltip').text('Кубок Украины');
	    }
	    if($(this).hasClass('flag-very-small-icon')){
	    	$(this).parent().find('.fixed-tooltip').text('Флаг-футбол');
	    }
	    if($(this).hasClass('arena-very-small-icon')){
	    	$(this).parent().find('.fixed-tooltip').text('Донбасс-Аренабол зимний чемпионат');
	    }
	    if($(this).hasClass('friendly-very-small-icon')){
	    	$(this).parent().find('.fixed-tooltip').text('Товарищеская игра');
	    }    	
    }) 
    $(".game-page-championship .icon").each(function(i){
		if ($(this).hasClass('higher-big-icon')) {
	    	$(this).parent().find('.fixed-tooltip').text('Высшая лига');
	    }
	    if($(this).hasClass('first-big-icon')){
	    	$(this).parent().find('.fixed-tooltip').text('Первая лига');
	    }
	    if($(this).hasClass('cup-big-icon')){
	    	$(this).parent().find('.fixed-tooltip').text('Кубок Украины');
	    }
	    if($(this).hasClass('flag-big-icon')){
	    	$(this).parent().find('.fixed-tooltip').text('Флаг-футбол');
	    }
	    if($(this).hasClass('arena-big-icon')){
	    	$(this).parent().find('.fixed-tooltip').text('Донбасс-Аренабол зимний чемпионат');
	    }
	    if($(this).hasClass('friendly-big-icon')){
	    	$(this).parent().find('.fixed-tooltip').text('Товарищеская игра');
	    }    	
    });

	$('.popup-link-js').modal();
	
	$().UItoTop({ 
        containerID: 'toTop',
        containerHoverID: 'toTopHover',
        scrollSpeed: 1200,                
        easingType: 'easeOutQuart' 
    });	

	$(".nav a").each(function(i){
		var urlPageNav = "http://forum.fafu.in.ua/",
			navItem = $(this).attr('href');
		if (navItem == urlPageNav) {
			$(this).attr('target', '_blank');
		};		
	})
	
	$(".roster-table").each(function(i){
		$(this).find('tr:odd').addClass('roster-light-row');
	})

}); // Ready

$(window).load(function(){

     $(".future-games-slider").sliderkit({
          auto:false,
          scroll:1,
          shownavitems:4,
          circular:true,
          start:0,
          width:850,
          height:50
     });

     $(".friends-slider").sliderkit({
          auto:false,
          scroll:1,
          shownavitems:4,
          circular:true,
          start:0,
          width:860,
          height:108
     });

     $(".news-carousel").sliderkit({
          auto:false,
          scroll:1,
          shownavitems:1,
          circular:true,
          start:0,
          width:270,
          height:215
     });

	$(".main-carousel").sliderkit({
		width:675,
		height:318,
		auto:true,
		circular:true,
		shownavitems:5
	});     

});

// Placeholder for IE8/9
jQuery.fn.textPlaceholder = function () {
	return this.each(function(){
		var that = this;
		if (that.placeholder && 'placeholder' in document.createElement(that.tagName)) return;
		var placeholder = that.getAttribute('placeholder');
		var input = jQuery(that);
		if (that.value === '' || that.value == placeholder) {
			input.addClass('text-placeholder');
			that.value = placeholder;
		}
		input.focus(function(){
			if (input.hasClass('text-placeholder')) {
				this.value = '';
				input.removeClass('text-placeholder')
			}
		});
		input.blur(function(){
			if (this.value === '') {
				input.addClass('text-placeholder');
				this.value = placeholder;
			} else {
				input.removeClass('text-placeholder');
			}
		});
		that.form && jQuery(that.form).submit(function(){
			if (input.hasClass('text-placeholder')) {
				that.value = '';
			}
		});
	});
};
// end placeholder for IE8/9

function clock(){
    var days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота']; //создадим массив дней недели по-русски
    var months = ['января', 'Февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря']; //создадим массив месяцев по-русски
    var currentTime = new Date(); //Получаем текущую дату
    var currentHours = currentTime.getHours(); //Получаем часы
    var currentMinutes = currentTime.getMinutes(); //Получаем минуты
    var currentSeconds = currentTime.getSeconds(); //Получаем секунды
    currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes; //Если меньше 10, то к минутам присваивается 0
    currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds; //Если меньше 10, то к секундам присваивается 0
    var currentDay = days[currentTime.getDay()];//Получаем из нашего массива текущий день недели (имя)
    var currentDate = currentTime.getDate();//Получаем день
    var currentMonth = months[currentTime.getMonth()];//Получаем из нашего массива текущий месяц (имя)
    var currentDateMonth = currentTime.getMonth() + 1;//Получаем месяц
    var currentYear = currentTime.getFullYear();//Получаем год
    //В элемент с id=date выводим текущую дату в красивом формате
    $('.hallo').text(currentDay + ', ' + currentDate + ' ' + currentMonth + ' ' + currentYear + ' г.' + ', ' + currentHours + ':' + currentMinutes + ':' + currentSeconds);
}

function roster(){
	var currentTime = new Date(),
		currentYear = currentTime.getFullYear();
		
	$("span.roster-p-age").each(function(i){
		var playerData = $(this).text(),
			playerYear = playerData.substr(-4),
			playerAge = currentYear - playerYear;

			$(this).html(playerAge+' '+incline(['год', 'года', 'лет'], playerAge));
	}) 
	$("span.roster-p-exp").each(function(i){
		var playerExp = $(this).text(),
			playerExpYear = playerExp.substr(-4),
			playerExpAge = currentYear - playerExpYear;

			$(this).html(playerExpAge+' '+incline(['год', 'года', 'лет'], playerExpAge));
	}) 
}
function incline(words,n){
   return words[(n%100>4 && n%100<20)?2:[2,0,1,1,1,2][Math.min(n%10,5)]];
}
roster();

// modal.js
(function($){
  function block(settings){
      settings.popup.hide();
      settings.popupShadowBlock.hide();
      settings.key = false;   
  }
  modal = function() {
    this._init = function(element, options) {
      var defaults = {
        key: false,
        modalPositionCenter: true,
        modalLink: $(element),
        popup: $('.popupper-js'),
        popupShadowBlock: $('.popup-shadow-js')     
      },  
      settings = $.extend(defaults, options); 
      settings.modalLink.click(function(){
        var modalLinkID = $(this).attr("data-popup"),
            modalPopap = $('.popupper_'+modalLinkID);
        settings.popup.hide();
        settings.popupShadowBlock.show();
        modalPopap.show();
        if (settings.modalPositionCenter == true) {
            modalPopap.css({top:($(window).height()/2-modalPopap.height()/2), left:($(window).width()/2-modalPopap.width()/2)});
        }
        else{
            modalPopap.addClass('popupper-pos');
        };           
      });
      settings.popup.find('.popupper-close-js').click(function(){
          block(settings);
          return;
      });
      $(window).keydown(function(eventObject){
          if (eventObject.which == 27){
              block(settings);
          }
      });      
      $(document).click(function(event) {
          var state = $('.popup-shadow-js').css("display") == 'none';
          if(settings.key && !$(event.target).closest(settings.popup).length){
              block(settings);
              return;
          }

          if(!$(event.target).hasClass("popupper-close-js"))
          {
             settings.key = true;
          }
          if(state) settings.key = false;
      }); 
    };
  };
  // Launch plugin
  $.fn.modal = function( options ){

      return this.each(function(){

           $( this ).data( "modal", new modal()._init( this, options ) );

       });
  };
})(jQuery);
// end modal.js

(function($){
	$.fn.UItoTop = function(options) {

 		var defaults = {
    			text: 'To Top',
    			min: 200,
    			inDelay:600,
    			outDelay:400,
      			containerID: 'toTop',
    			containerHoverID: 'toTopHover',
    			scrollSpeed: 1200,
    			easingType: 'linear'
 		    },
            settings = $.extend(defaults, options),
            containerIDhash = '#' + settings.containerID,
            containerHoverIDHash = '#'+settings.containerHoverID;
		
		$('body').append('<a href="#" id="'+settings.containerID+'">'+settings.text+'</a>');
		$(containerIDhash).hide().on('click.UItoTop',function(){
			$('html, body').animate({scrollTop:0}, settings.scrollSpeed, settings.easingType);
			$('#'+settings.containerHoverID, this).stop().animate({'opacity': 0 }, settings.inDelay, settings.easingType);
			return false;
		})
		.prepend('<span id="'+settings.containerHoverID+'"></span>')
		.hover(function() {
				$(containerHoverIDHash, this).stop().animate({
					'opacity': 1
				}, 600, 'linear');
			}, function() { 
				$(containerHoverIDHash, this).stop().animate({
					'opacity': 0
				}, 700, 'linear');
			});
					
		$(window).scroll(function() {
			var sd = $(window).scrollTop();
			if(typeof document.body.style.maxHeight === "undefined") {
				$(containerIDhash).css({
					'position': 'absolute',
					'top': sd + $(window).height() - 50
				});
			}
			if ( sd > settings.min ) 
				$(containerIDhash).fadeIn(settings.inDelay);
			else 
				$(containerIDhash).fadeOut(settings.Outdelay);
		});
};
})(jQuery);