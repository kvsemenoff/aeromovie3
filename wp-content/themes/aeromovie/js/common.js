// 1. Создается загрузка api youtube
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 2. Создается объект player. This function creates an <iframe> (and YouTube player)
// где videoId - это идентификатор видео. 
// В любом месте можно изменить значение видео с помощью player.loadVideoById('новый_идентификатор_видео');
// Параметры плеера, такие как показать/скрыть controls, showinfo можно править в массиве playerVars
 var player;
 function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
      height: '490',
      width: '100%',
      videoId: '974CsH5Cumg',
      playerVars: { 
      	'autoplay': 0,
	    'controls': 1, 
	    'showinfo': 1
	  },
      events: {
        'onReady': onPlayerReady
      }
    });
}


// 3. API вызовит эту функцию когда видео плеер будет загружен
function onPlayerReady(event) {
	
	//event.target.playVideo();
}


//функция, которая останавливает проигрывание      
  
function stopVideo() {
    player.stopVideo();
}

//Эта простая функция парсит URL ссылки видео с youtube и возвращает идентификатор видео.
function youtube_parser(url){
    var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
    var match = url.match(regExp);
    return (match&&match[7].length==11)? match[7] : false;
}


jQuery(document.body).on('click', '.portfolio__box, .main-page-video, .compare__imgbox, .equpment-link', function(e) {
   	e.preventDefault();
	var videoId = $(this).find('.video-bag').html();
	videoId = youtube_parser(videoId);
	player.loadVideoById(videoId);
});

jQuery(document.body).on('click', '.portfolio__box, .main-page-video, .compare__imgbox, .equpment-link', function(e) {
   	e.preventDefault();
	var videoId = $(this).find('.video-bag').html();
	videoId = youtube_parser(videoId);
	player.loadVideoById(videoId);
});


// $('.portfolio__box, .main-page-video, .compare__imgbox, .equpment-link').on('click', function (e) {
// 		e.preventDefault();
// 		var videoId = $(this).find('.video-bag').html();
// 		videoId = youtube_parser(videoId);
// 		player.loadVideoById(videoId);
// 	});	


$(document).ready(function(){
	$('.stop').on('click', function(){		
		stopVideo();
	});	


	$(".mobile-main-menu").html($(".main-menu").html());
	

	$(".call-back-header").click(function(){
		$("#kindform").val('Форма Заказать звонок с шапки сайта');
	});
	$(".order-spec-header").click(function(){
		$("#kindform").val('Заказать звонок специалиста');
	});
	$(".order-s1").click(function(){
		$("#kindform").val('Заказать съемку. Главная');
	});
	$(".order-s2").click(function(){
		$("#kindform").val('Оставить заявку на съемку. Главная');
	});
	$(".order-s3").click(function(){
		$("#kindform").val('Оставить заявку на аренду. Главная');
	});
	$(".order-s4").click(function(){
		$("#kindform").val('Заказать съемку панорамы. Главная');
	});
	$(".order-s5").click(function(){
		$("#kindform").val('Заказать онлайн трансляцию. Главная');
	});
	$(".order-s6").click(function(){
		$("#kindform").val('Заказать съемку и пост-продакшн. Главная');
	});

	$(".order-video-main").click(function(){
		$("#kindform").val($(this).parents('.bigpark__leftbox').find('h4').html());
	});
	
	$(".order-foto-aerovideo").click(function(){
		$("#kindform").val('Заказать видеосъемку. Страница Аэрофотосъемка');
	});

 	$(".order-spec-aerofoto").click(function(){
		$("#kindform").val('Заказать звонок специалиста. Блок сравнения. Страница Аэроaфотосъемка');
	});


	$(".order-video-aerovideo").click(function(){
		$("#kindform").val('Заказать видеосъемку. Страница Аэровидеосхемка');
	});

 	$(".order-spec-aerovideo").click(function(){
		$("#kindform").val('Заказать звонок специалиста. Блок сравнения. Страница Аэровидеосхемка');
	});

 	$(".order-video-production").click(function(){
		$("#kindform").val('Заказать съемку. Страница Продакшн');
	});

	$(".order-panoram-tours").click(function(){
		$("#kindform").val('Заказать панораму. Страница Виртуальные туры');
	});

	$(".order-kvadr-arenda").click(function(){
		$("#kindform").val('Арендовать квадрокоптер. Страница Аренда оборудования');
	});
	$(".order-master-arenda").click(function(){
		$("#kindform").val('Заказать мастер-класс. Страница Аренда оборудования');
	});

	$(".order-dron-arenda").click(function(){
		$("#kindform").val('Заказать дрон. Страница Аренда оборудования');
	});
	

	$(".order-panoram-tours").click(function(){
		$("#kindform").val('Заказать панораму. Страница Виртуальные туры');
	});

	$(".order-panoram-tours").click(function(){
		$("#kindform").val('Заказать панораму. Страница Виртуальные туры');
	});

	$(".order-video-p1-tours").click(function(){
		$("#kindform").val('Заказать видеосъемку. Страница Виртуалные туры. Стоимость Пункт 1');
	});
	$(".order-video-p2-tours").click(function(){
		$("#kindform").val('Заказать видеосъемку. Страница Виртуалные туры. Стоимость Пункт 2');
	});
	$(".order-video-p3-tours").click(function(){
		$("#kindform").val('Заказать видеосъемку. Страница Виртуалные туры. Стоимость Пункт 3');
	});




	$('.form-popup').submit(function(){
		var phone = $(this).find('input[name="phone"]');
		if(phone.val() == ""){
			phone.focus();
			return false;
		}
		else{
			var form_data = $(this).serialize(); 
			$.ajax({
				type: "POST", 
				url: "/sendmessage.php", 
				data: form_data,
				success: function(form) {
					cleanTnanks(this);
			}
		});
		}
		return false;
	});

	function cleanTnanks(form){
		$('.js-window').hide();
		$('.mask').remove();
		$('.modal-window').hide();
		
		$("input[type=text]").val("");
		$("input[type=tel]").val("");
		$("textarea").val("");
		$('a[href=#thanks]').trigger('click');
				// location = "thanks.php";
	};

	//Этот код отвечает за ссылку "заказать звнонок" в футере
	$('#menu-item-139').find('a').attr('data-modal', 'modal');
	$('#menu-item-139').find('a').removeAttr('href');
	$('#menu-item-139').find('a').attr('href', '#order');


	$("head").append('<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">');
	$("head").append("<link href='//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css' rel='stylesheet'>");

	$('.lastnews__link').hover(function (e) {
		$(this).parents('.lastnews__topnews').find('.lastnews__leftimg').html($(this).parent().next('.lastnews__imgsmoll').html());
	});
	
	$('.lastnews__leftimg').html($('.lastnews__txtbox').find('.lastnews__imgsmoll').html());
	


	$('.pag-nav .next').html('');
	$('.pag-nav .prev').html('');
	
	//$('a[data-modal="modal"]').on("click", function(e){
	$('body').on("click", 'a[data-modal="modal"]', function(e){
		e.preventDefault();
		var  id = $(this).attr('href'),
		winW = $(window).width(),
		winH = $(window).height();
		$(id).css("left", winW/2-$(id).innerWidth()/2);
		$(id).css("top", winH/2-$(id).innerHeight()/2);
		$('body').append('<div class="mask"></div>');
		$(id).fadeIn();
	});

	$('a[data-modal="mobile"]').on("click", function(e){
		e.preventDefault();
		var  id = $(this).attr('href'),
		winW = $(window).width(),
		winH = $(window).height();
		$(id).css("left", winW/2-$(id).innerWidth()/2);
		$(id).css("top", 0);
		$('body').append('<div class="mask"></div>');
		$('body').css('overflow','hidden');

		$(id).css('display', 'block');
	});
	$('body').on("click", ".mobile-main-menu", function(){
		//e.preventDefault();
		$('.mask').remove();
		$('.modal-window').hide();
		$('.mobile-window').hide();
	});	 
	$('body').on("click", ".modal-close", function(e){
		e.preventDefault();
		$('.mask').remove();
		$('.modal-window').hide();
		$('.mobile-window').hide();
		$('body').css('overflow','scroll');
	});
	$('body').on("click", ".mask", function(e){
		e.preventDefault();
		$('.mask').remove();
		$('.modal-window').hide();
		$('.mobile-window').hide();
	});

});



$(document).ready(function(){


	ymaps.ready(init);

	function init() {
		var center = [59.933821, 30.276351];
		var myMap = new ymaps.Map('mape', {
			center: center,
			controls: [],
			zoom: 16
			// ,  
			// controls: ['smallMapDefaultSet']
		}, {
			searchControlProvider: 'yandex#search'

		});

		myMap.behaviors.disable('scrollZoom');

		 var myPlacemark = new ymaps.Placemark(center);
		 //, {
  //       // Свойства.
  //       // Содержимое иконки, балуна и хинта.
  //       balloonContent: 'улица Ивана Франко, 4к4',
  //       hintContent: 'улица Ивана Франко, 4к4'
    //}
    // , {
    //     // Опции.
    //     iconLayout: 'default#image',
    //     iconImageHref: 'img/map-ic.png',
    //     iconImageSize: [42, 42]
        // preset: 'twirl#violetIcon'
   // });

		myMap.geoObjects.add(myPlacemark);
	}


	

	var owl2 = $("#our-slider");
	owl2.owlCarousel({
		loop:true,
		nav:true, 
		autoplay:false,
		smartSpeed:1000,
		margin:0,
        center:false,     //если нужны обрезаные края
        navText:['<span class="nav-left"></span>','<span class="nav-right"></span>'],
        responsive:{
        	0:{
        		items:1
        	},
        	480:{
        		items:2 
        	},
        	768:{
        		items:3
        	},  
        	1240:{
        		items:4
        	},     
        }
    });

	// Переключатель кол-ва товара в корзине (legatkani)
	var itemprice = $('.item-price').text();
	$('#total').val(itemprice);

	$(".switch__number .switch__button").on("click", function() {
		var $button = $(this);
		var oldValue = $button.parent().find("input").val();
		if ($button.text() == "+") {
			var newVal = parseFloat(oldValue) + 1;
		}
		else {
			if (oldValue > 1) {
				var newVal = parseFloat(oldValue) - 1;
			} else {
				newVal = 1;
			}
		}
		$button.parent().find("input").val(newVal);

		var quantity = $('#quantity').val();
		var total = itemprice*quantity;
		$('#total').val(total);
	});
	// END Переключатель кол-ва товара в корзине (legatkani)

	// Бургер (legatkani)
	$(".burger").click(function(){
		$(".main-menu__style").slideDown(500);
		$(".fa-bars").css("display", "none");
	});
	$(".main-menu__closer").click(function(){
		$(".main-menu__style").slideUp(500);
		$(".fa-bars").css("display", "inline-block");
	});
	// END бургер (legatkani)

	// Раскрывающийся каталог на главной
	$(".catalog-main__button").click(function(){
		$(".catalog-main__hidden").slideDown(500);
		$(".catalog-main__button").css("display", "none");
		$(".catalog-main__button_2").css("display", "block");
	});
	$(".catalog-main__button_2").click(function(){
		$(".catalog-main__hidden").slideUp(500);
		$(".catalog-main__button").css("display", "block");
		$(".catalog-main__button_2").css("display", "none");
	});
	// END Раскрывающийся каталог на главной

	// Раскрывающийся список в каталоге
	$(".button__catalog, .but-spisok").click(function(evt){
		evt.preventDefault();
		$(".sidebar-menu").slideToggle(500);
	});
	// END Раскрывающийся список в каталоге


	// slider &  counter
	var owlcart = $(".slider-owl-carousel");
	owlcart.owlCarousel({
		loop:false,
		nav:true,
		autoplay:false,
		smartSpeed:1000,
		margin:10,
		mouseDrag:false,
		touchDrag: false,
		center:false,
		navText:['<span class="prev-left"></span>','<span class="next-right"></span>'],
		responsive:{
			0:{
				items:1
			},
			320:{
				items:1
			},
			750:{
				items:1
			},
			1200:{
				items:1
			}
		}
	});
	$('.slider-owl-carousel').each(function(index) {
		var thisitem = $(this).find('.item');
		$(this).next('.common-slider__txtbox')
		.find('.number-all').html($(thisitem).length);			
	});		
	$('.slider-owl-carousel .next-right').on('click', function() {
		var thisel = $(this).parents('.common-slider').find('.number-active');
		var numberActive = thisel.text();	
		numberActive = parseFloat(numberActive);
		var numberAll = $(this).parents('.common-slider').find('.number-all').text();
		numberAll = parseFloat(numberAll);
		if (numberActive < numberAll) {
			numberActive++;
			$(thisel).text(numberActive);
		}	
	});
	$('.slider-owl-carousel .prev-left').on('click', function() {		
		var thisel = $(this).parents('.common-slider').find('.number-active');
		var numberActive = thisel.text();	
		numberActive = parseFloat(numberActive);
		var numberAll = $(this).parents('.common-slider').find('.number-all').text();
		numberAll = parseFloat(numberAll);
		if (numberActive > 1) {
			numberActive--;
			$(thisel).text(numberActive);
		}	
	});

	// // end slider counter


	// // tabs	
	$('.accordeon__visiblebox').on('click', function (e) {
		e.preventDefault();
		if( !$(this).parents('.bigpark__accordeon-item').hasClass("bigpark__accordeon-active")){
			$('.bigpark__accordeon-hiddenbox').slideUp();	
			$('.bigpark__accordeon-item').removeClass('bigpark__accordeon-active');				
		}		
		$(this).parents('.bigpark__accordeon-item').toggleClass('bigpark__accordeon-active');
		$(this).next('.bigpark__accordeon-hiddenbox').slideToggle();
		
	});
	$('.bigpark__accordeon-item').on('click', function (e) {
		e.preventDefault();		
		var tab = $(this).attr('data-tab');
		tab = '.' + tab;
		$('.bigpark__tab').not(tab).css({'display':'none'});
		$(tab).css({'display':'block'});
	});	
	$('.panorams__tabs a').on('click', function (e) {
		e.preventDefault();
		$('.panorams__tabs a').removeClass('panorams__acivetab');
		$(this).addClass('panorams__acivetab');
		var tab = $(this).attr('href');
		tab = '.' + tab;
		$('.panorams__img').not(tab).css({'display':'none'});
		$(tab).css({'display':'block'});
	});	
	$('.compare__tabs a').on('click', function (e) {
		e.preventDefault();
		$('.compare__tabs a').removeClass('compare__tabs-activelink');
		$(this).addClass('compare__tabs-activelink');
		var tab = $(this).attr('href');
		tab = '.' + tab;
		$('.compare__imgbox').not(tab).css({'display':'none'});
		$(tab).css({'display':'block'});
	});
	$('.portfolio__tab a').on('click', function (e) {
		//e.preventDefault();
		$('.portfolio__tab a').removeClass('panorams__acivetab');
		$(this).addClass('panorams__acivetab');
		var tab = $(this).attr('href');
		tab = '.' + tab;
		$('.portfolio__block').not(tab).css('display', 'none');		
		$(tab).css('display', 'block');
	});

	

	$('.zacadrom__tab a').on('click', function (e) {
		e.preventDefault();
		$('.zacadrom__tab a').removeClass('panorams__acivetab');
		$(this).addClass('panorams__acivetab');
		
	});
	$('.second-menu__tab1').addClass('main-tab__active');
	$('.second-menu__box a').on('click', function (e) {
		e.preventDefault();
		$('.second-menu__box a').removeClass('second-menu__acivetab');
		$(this).addClass('second-menu__acivetab');
		var tab = $(this).attr('href');
		tab = '.' + tab;
		//$('.video').not(tab).css({'display':'none'}).removeClass('flexjs');	
		$('.main-tab__active').removeClass('main-tab__active');
		$(tab).addClass('main-tab__active');
	});

	// // end tabs

	$('input[type="range"]').rangeslider({
		 polyfill: false,	
		 onSlide: function(position, value) {
		 	$('.compare__imgbox img').css({
		 		'width'  : value+'%',
		 		'height' : value+'%'
		 	});
		 },	
	});
	
	$('.js-phone').mask("+7(999)999-99-99?");

	$('.choose__btn').click(function(){
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$('.managers-block').css('display','none');
		}
		else{
			$(this).addClass('active');
			$('.managers-block').css('display','block');
		}
	});

	$('.tabs-content > .tab-content').each(function(index){
		if (!$(this).hasClass('active')) {
			$(this).css('display','none');
		};
	});
	$('.tab').click(function(){
		$('.tab').removeClass('active');
		$('.tabs-content').find('div').removeClass('active');
		$('.tabs-content > .tab-content').css('display','none');
		$(this).addClass('active');

		for (var i = 0; i < 4; i++) {
			if($('.tabs > .tab-' + i).hasClass('active')){
				$('.tabs-content > .tab-' + i).addClass('active');
			};

			$('.tabs-content > .active').css('display','block');
		};

		if ($('.main__link_question').hasClass('active')) {
			$('.main__nav > .manager').css('display','none');
		};

		if (!$('.main__link_question').hasClass('active')) {
			$('.main__nav > .manager').css('display','block');
		};

	});

	
	$("a[data-fancybox-group^='group']").fancybox({
		'transitionIn' : 'none',
		'transitionOut' : 'none',
		'titlePosition' : 'over',
		'titleFormat' : function(title, currentArray, currentIndex, currentOpts) {
			return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
		},
		helpers: {
	    	overlay: {
	      		locked: false
	   		},
	   		title: {
	            type: 'inside'
	        }
	  	},
	  	beforeShow : function(){
   			this.title =  $(this.element).data("caption");
  		}

	});

	// hide show 3last elements page->prodacshn
	$('.examplesblock__button a').on('click', function(e) {
		e.preventDefault();
		var last3el = $('.examplesblock__box:gt(2)');
		if ($(this).text()=='Посмотреть еще') {
			$(last3el).css('display', 'flex');
			$(this).text('Скрыть');
		}else{
			$(last3el).css('display', 'none');
			$(this).text('Посмотреть еще');	
		}		
	});
	////////////////////////


	// slider 

		var aeroowl = $(".howwework__slider");
		aeroowl.owlCarousel({
		loop:true,
		nav:true,
		autoplay:false,
		smartSpeed:1000,
		margin:65,
		mouseDrag:false,
		touchDrag: true,
		center:false,
		navText:['<span class="prev-left"></span>','<span class="next-right"></span>'],
		responsive:{
			0:{
				items:1
			},
			320:{
				items:1
			},
			750:{
				items:1
			},
			1200:{
				items:1
			}
		}
	});
	

	
	
		


});



jQuery(document).ready(function() {
	function webglAvailable() {
				try {
					var canvas = document.createElement("canvas");
					return !!window.WebGLRenderingContext && (canvas.getContext("webgl") || canvas.getContext("experimental-webgl"));
				} catch(e) {
					return false;
				}
			}
			function getWmodeValue() {
				var webglTest = webglAvailable();
				if(webglTest){
					return 'direct';
				}
				return 'opaque';
			}
			function readDeviceOrientation() {
				// window.innerHeight is not supported by IE
				var winH = window.innerHeight ? window.innerHeight : jQuery(window).height();
				var winW = window.innerWidth ? window.innerWidth : jQuery(window).width();
				//force height for iframe usage
				if(!winH || winH == 0){
					winH = '100%';
				}
				// set the height of the document
				jQuery('html').css('height', winH);
				// scroll to top
				window.scrollTo(0,0);
			}
			jQuery( document ).ready(function() {
				if (/(iphone|ipod|ipad|android|iemobile|webos|fennec|blackberry|kindle|series60|playbook|opera\smini|opera\smobi|opera\stablet|symbianos|palmsource|palmos|blazer|windows\sce|windows\sphone|wp7|bolt|doris|dorothy|gobrowser|iris|maemo|minimo|netfront|semc-browser|skyfire|teashark|teleca|uzardweb|avantgo|docomo|kddi|ddipocket|polaris|eudoraweb|opwv|plink|plucker|pie|xiino|benq|playbook|bb|cricket|dell|bb10|nintendo|up.browser|playstation|tear|mib|obigo|midp|mobile|tablet)/.test(navigator.userAgent.toLowerCase())) {
					if(/iphone/.test(navigator.userAgent.toLowerCase()) && window.self === window.top){
						jQuery('body').css('height', '100.18%'); 
					}
					// add event listener on resize event (for orientation change)
					if (window.addEventListener) {
						window.addEventListener("load", readDeviceOrientation);
						window.addEventListener("resize", readDeviceOrientation);
						window.addEventListener("orientationchange", readDeviceOrientation);
					}
					//initial execution
					setTimeout(function(){readDeviceOrientation();},10);
				}
			});
			
			function accessWebVr(){
				unloadPlayer();

				setTimeout(function(){ loadPlayer(true); }, 100);
			}
			function accessStdVr(){
				unloadPlayer();

				setTimeout(function(){ loadPlayer(false); }, 100);
			}
			function loadPlayer(isWebVr) {
				if (isWebVr) {
					embedpano({
						id:"krpanoSWFObject"
						,xml:"/zavoddata/zavod_vr.xml"
						,target:"panoDIV"
						,passQueryParameters:true
						,bgcolor:"#000000"
						,html5:"only+webgl"
						,vars:{skipintro:true,norotation:true}
					});
				} else {
					embedpano({
						id:"krpanoSWFObject"

						,swf:"/zavoddata/zavod.swf"

						,target:"panoDIV"
						,passQueryParameters:true
						,bgcolor:"#000000"

						,html5:"prefer"


					});
				}
				//apply focus on the visit if not embedded into an iframe
				if(top.location === self.location){
					kpanotour.Focus.applyFocus();
				}
			}
			function unloadPlayer(){
				if(jQuery('#krpanoSWFObject')){
					removepano('krpanoSWFObject');
				}
			}
		    function isVRModeRequested() {
				var querystr = window.location.search.substring(1);
				var params = querystr.split('&');
				for (var i=0; i<params.length; i++){
					if (params[i].toLowerCase() == "vr"){
						return true;
					}
				}
				return false;
			}
		
			var panoramsImgId;
			$('.panorams .panorams__tabs a').on('click', function (e) {
				e.preventDefault();		
				var tab = $(this).attr('href');
				tab = '.' + tab;
				panoramsImgId = $('.panorams__content').find(tab).attr('id');
				if (isVRModeRequested()){
					accessWebVr();
				}else{
					accessStdVr();
				}				
			});
			$('.panorams__tabs a:first').click();
		});


$(function(){ /* to make sure the script runs after page load */

	$('.faq-item').each(function(event){ /* select all divs with the item class */
	
		var max_length = 150; /* set the max content length before a read more link will be added */
		
		if($(this).html().length > max_length){ /* check for content length */
			
			var short_content 	= $(this).html().substr(0,max_length); /* split the content in two parts */
			var long_content	= $(this).html().substr(max_length);
			
			$(this).html(short_content+
						 '<a href="#" class="read_more"><br/>Читать далее</a>'+
						 '<span class="more_text" style="display:none;">'+long_content+'</span>'); /* Alter the html to allow the read more functionality */
						 
			$(this).find('a.read_more').click(function(event){ /* find the a.read_more element within the new html and bind the following code to it */
 
				event.preventDefault(); /* prevent the a from changing the url */
				$(this).hide(); /* hide the read more button */
				$(this).parents('.faq-item').find('.more_text').show(); /* show the .more_text span */
		 
			});
			
		}
		
	});
 
 
});














