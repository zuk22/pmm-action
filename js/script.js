$(function(){
	$(document).bind('masonryconf', function(){
		var $container = $('#product-board');
		
		var cw = 180;
		cwr = $container.width();
		if(cwr >= 1200){
			cw = 200;
		}
		if(cwr < 1200){
			cw = 180;
		}
		if(cwr < 767){
			cw = cwr/3;
		}
		if(cwr < 500){
			cw = cwr/2;
		}
		
		$container.imagesLoaded( function(){
		  $container.masonry({
				itemSelector: '.offer',
				isAnimated: true,
				columnWidth: cw,
				animationOptions: {
					duration: 300
				}
		  });
		});
	}).trigger('masonryconf');
	
});

$(window).resize(function(){
	// Reflow masonry columns, not really needed in normal life, but web devs will appreciate
	var $container = $('#product-board');
	var cw = 180;
	cwr = $container.width();
	if(cwr >= 1200){
		cw = 200;
	}
	if(cwr < 1200){
		cw = 180;
	}
	if(cwr < 767){
		cw = cwr/3;
	}
	if(cwr < 520){
		cw = cwr/2;
	}
    $container.masonry( 'option', { columnWidth: cw });
});


$(window).load(function(){
	//Reflow masonry when fonts are loaded
	$('#product-board').masonry();
});

$(document).ready(function(){

	
	// Load more on product boards via AJAX
	$(document).on('click', '.load-more', function(){
		curLabel = $(this).html();
		$(this).html('загрузка...');
	
		$.ajax({
			type: 'GET',
			url: "ajax-content.html",
			context: $(this)
		}).done(function(response) {
			$(this).html(curLabel);
			var $container = $('#product-board');	
			var $newElements = $(response).filter('div');
			$newElements.css({opacity:0});
			$container.append( $newElements );
			
			$newElements.imagesLoaded(function() { 
				$newElements.css({opacity:1});			
				$container.masonry('appended', $newElements);
			});
		});
	});
	
}); //end doc ready

function resetNav(){
	$('.submenu li').removeClass('active');
			
	$('.submenu').each(function(){
		$('li', $(this)).eq(0).addClass('active');					
	});
	
	$('#main-nav li').removeClass('activehover');
}

//HideShow

	Block = {};
	
	Block.Click = function (event){
		
		var MainBlock = $(event.target.parentElement);
		var OpenCloseElem = $(MainBlock).find('.glyphicon-menu-down');
		event.preventDefault();
		
		if($(OpenCloseElem).hasClass('glyphicon-menu-down')){
			$(OpenCloseElem).removeClass('glyphicon-menu-down').addClass('glyphicon-menu-up');

			$(MainBlock).find('.More').text('скрыть');
			
		}
		
		else if ($(OpenCloseElem).hasClass('glyphicon-menu-up')){
			$(OpenCloseElem).removeClass('glyphicon-menu-up').addClass('glyphicon-menu-down');
			
			$(MainBlock).find('.More').text('развернуть');	
		}
		
	};

	Block.Init = function (){
		$('.ShowHide button').click(Block.Click);
		$('.ShowHide .More').click(Block.Click);
		
	};

$(Block.Init);




