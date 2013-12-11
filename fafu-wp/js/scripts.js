$(document).ready(function(){

	externalLinks(".text", "http://fafu.in.ua");

    $('.text a[href ^="http:"] img').each(function(i){
        if($(this).length){             
           var flexlink = $(this).parent().attr('href');
           $(this).parent().attr('data-lightbox', flexlink);
        }   
    });
    $('.ngg-gallery-thumbnail img').each(function(i){
        if($(this).length){             
           $(this).parent().removeAttr('data-lightbox');
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
	      if (code == '25') { 
	        // window.open("http://fafu.in.ua/volynskaya-oblast.htm");
	        window.location.href = 'http://fafu.in.ua/volynskaya-oblast.htm'; 
	      }
	      if (code == '24') { 
	        // window.open("http://fafu.in.ua/vinnickaya-oblast.htm"); 
	        window.location.href = 'http://fafu.in.ua/vinnickaya-oblast.htm'; 
	      }
	      if (code == '26') { 
	        // window.open("http://fafu.in.ua/zaporozhskaya-oblast.htm"); 
	        window.location.href = 'http://fafu.in.ua/zaporozhskaya-oblast.htm'; 
	      }
	      if (code == '27') { 
	        // window.open("http://fafu.in.ua/zhitomirskaya-oblast.htm"); 
	        window.location.href = 'http://fafu.in.ua/zhitomirskaya-oblast.htm'; 
	      }
	      if (code == '20') { 
	        // window.open("http://fafu.in.ua/ar-krym.htm"); 
	        window.location.href = 'http://fafu.in.ua/ar-krym.htm'; 
	      }
	      if (code == '21') { 
	        // window.open("http://fafu.in.ua/sumskaya-oblast.htm"); 
	        window.location.href = 'http://fafu.in.ua/sumskaya-oblast.htm'; 
	      }
	      if (code == '22') { 
	        // window.open("http://fafu.in.ua/ternopolskaya-oblast.htm");
	        window.location.href = 'http://fafu.in.ua/ternopolskaya-oblast.htm';  
	      }
	      if (code == '23') { 
	        // window.open("http://fafu.in.ua/zakarpatskaya-oblast.htm"); 
	        window.location.href = 'http://fafu.in.ua/zakarpatskaya-oblast.htm'; 
	      }
	      if (code == '1') { 
	        // window.open("http://fafu.in.ua/cherkasskaya-oblast.htm");
	        window.location.href = 'http://fafu.in.ua/cherkasskaya-oblast.htm';  
	      }
	      if (code == '3') { 
	        // window.open("http://fafu.in.ua/chernovickaya-oblast.htm"); 
	        window.location.href = 'http://fafu.in.ua/chernovickaya-oblast.htm'; 
	      }
	      if (code == '2') { 
	        // window.open("http://fafu.in.ua/chernigovskaya-oblast.htm"); 
	        window.location.href = 'http://fafu.in.ua/chernigovskaya-oblast.htm'; 
	      }
	      if (code == '5') { 
	        // window.open("http://fafu.in.ua/dnepropetrovskaya-oblast.htm");
	        window.location.href = 'http://fafu.in.ua/dnepropetrovskaya-oblast.htm';  
	      }
	      if (code == '4') { 
	        // window.open("http://fafu.in.ua/ar-krym.htm"); 
	        window.location.href = 'http://fafu.in.ua/ar-krym.htm'; 
	      }
	      if (code == '7') { 
	        // window.open("http://fafu.in.ua/ivano-frankovskaya-oblast.htm");
	        window.location.href = 'http://fafu.in.ua/ivano-frankovskaya-oblast.htm';  
	      }
	      if (code == '6') { 
	        // window.open("http://fafu.in.ua/doneckaya-oblast.htm"); 
	        window.location.href = 'http://fafu.in.ua/doneckaya-oblast.htm'; 
	      }
	      if (code == '9') { 
	        // window.open("http://fafu.in.ua/xersonskaya-oblast.htm"); 
	        window.location.href = 'http://fafu.in.ua/xersonskaya-oblast.htm'; 
	      }
	      if (code == '8') { 
	        // window.open("http://fafu.in.ua/xarkovskaya-oblast.htm"); 
	        window.location.href = 'http://fafu.in.ua/xarkovskaya-oblast.htm'; 
	      }
	      if (code == '11') { 
	        // window.open("http://fafu.in.ua/kievskaya-oblast.htm"); 
	        window.location.href = 'http://fafu.in.ua/kievskaya-oblast.htm'; 
	      }
	      if (code == '10') { 
	        // window.open("http://fafu.in.ua/xmelnickaya-oblast.htm"); 
	        window.location.href = 'http://fafu.in.ua/xmelnickaya-oblast.htm'; 
	      }
	      if (code == '13') { 
	        // window.open("http://fafu.in.ua/kirovogradskaya-oblast.htm"); 
	        window.location.href = 'http://fafu.in.ua/kirovogradskaya-oblast.htm'; 
	      }
	      if (code == '12') { 
	        // window.open("http://fafu.in.ua/kievskaya-oblast.htm"); 
	        window.location.href = 'http://fafu.in.ua/kievskaya-oblast.htm'; 
	      }
	      if (code == '15') { 
	        // window.open("http://fafu.in.ua/luganskaya-oblast.htm"); 
	        window.location.href = 'http://fafu.in.ua/luganskaya-oblast.htm'; 
	      }
	      if (code == '14') { 
	        // window.open("http://fafu.in.ua/lvovskaya-oblast.htm"); 
	        window.location.href = 'http://fafu.in.ua/lvovskaya-oblast.htm'; 
	      }
	      if (code == '17') { 
	        // window.open("http://fafu.in.ua/odesskaya-oblast.htm"); 
	        window.location.href = 'http://fafu.in.ua/odesskaya-oblast.htm'; 
	      }
	      if (code == '16') { 
	        // window.open("http://fafu.in.ua/nikolaevskaya-oblast.htm"); 
	        window.location.href = 'http://fafu.in.ua/nikolaevskaya-oblast.htm'; 
	      }
	      if (code == '19') { 
	        // window.open("http://fafu.in.ua/rovenskaya-oblast.htm"); 
	        window.location.href = 'http://fafu.in.ua/rovenskaya-oblast.htm'; 
	      }
	      if (code == '18') { 
	        // window.open("http://fafu.in.ua/poltavskaya-oblast.htm"); 
	        window.location.href = 'http://fafu.in.ua/poltavskaya-oblast.htm'; 
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

function externalLinks(div, site){
		exSettings = {
		exLink : $(div).find('a'),
		exTarget : "_blank",
		exClass : "external",
		docClass : "doc",
		pdfClass : "pdf",
		exSite : site,
		exArrEl : ['img', 'span', 'em'],
		exArrLinks : ['[href ^="http:"]', '[href ^="https:"]'],
		docArrLinks: ['[href $=".pdf"]', '[href $=".doc"]']   
	}
	var exLinkSite = '[href ^="'+exSettings.exSite+'/"]',
	  exLinkHttpSite = exSettings.exLink.filter(exLinkSite);
	for (var htlink = 0, htlinkLength = exSettings.exArrLinks.length; htlink < htlinkLength; htlink++) {
	  var exHttp = exSettings.exLink.filter(exSettings.exArrLinks[htlink]);
	  exHttp
	  .attr('target', exSettings.exTarget)
	  .addClass(exSettings.exClass)
	  .each(function(){
	       for (var i = 0, exArrElLength = exSettings.exArrEl.length; i < exArrElLength; i++) {
	            if($(this).find(exSettings.exArrEl[i]).length){            
	                 $(this).removeClass(exSettings.exClass);
	           };              
	       }
	  });    
	};

    exLinkHttpSite.removeClass(exSettings.exClass);
    var docHttp = exSettings.exLink.filter(exSettings.docArrLinks[1]);
		pdfHttp = exSettings.exLink.filter(exSettings.docArrLinks[0]);

	docHttp.addClass(exSettings.docClass);
	pdfHttp.addClass(exSettings.pdfClass);
}


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