jQuery(function($){
	$('#loadmore-video').click(function(e){
		e.preventDefault();
		$(this).text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'loadmorevideo',
			'query': true_posts,
			'page' : current_page
		};
		$.ajax({
			url:ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) { 
					$('#loadmore-video').text('Посмотреть ещё').parent().before(data); // вставляем новые посты
					current_page++; // увеличиваем номер страницы на единицу
					if (current_page == max_pages) $("#loadmore-video").remove(); // если последняя страница, удаляем кнопку
				} else {
					$('#loadmore-video').remove(); // если мы дошли до последней страницы постов, скроем кнопку
				}
			}
		});
	});

	$('#loadmore-video-pod-kluch').click(function(e){
		e.preventDefault();
		$(this).text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'loadmorevideopodkluch',
			'query': true_posts,
			'page' : current_page
		};
		$.ajax({
			url:ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) { 
					$('#loadmore-video-pod-kluch').text('Посмотреть ещё').parent().before(data); // вставляем новые посты
					current_page++; // увеличиваем номер страницы на единицу
					if (current_page == max_pages) $("#loadmore-video-pod-kluch").remove(); // если последняя страница, удаляем кнопку
				} else {
					$('#loadmore-video-pod-kluch').remove(); // если мы дошли до последней страницы постов, скроем кнопку
				}
			}
		});
	});



	$('#loadmore-foto').click(function(e){
		e.preventDefault();
		$(this).text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page
		};
		$.ajax({
			url:ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) { 
					$('#loadmore-foto').text('Посмотреть ещё').parent().before(data); // вставляем новые посты
					current_page++; // увеличиваем номер страницы на единицу
					if (current_page == max_pages) $("#loadmore-foto").remove(); // если последняя страница, удаляем кнопку
				} else {
					$('#loadmore-foto').remove(); // если мы дошли до последней страницы постов, скроем кнопку
				}
			}
		});
	});

});
