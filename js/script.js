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

	//Product board filtering 
	$(document).on('click', '.board-filters a', function(e){
		$filter = $(this);

		$('.board-filters a').removeClass('filter-hidden');
		
		if($filter.data('filter') == 'all'){
			//show all
			$('.offer').show();
			$filter.addClass('filter-hidden');			
		}
		else{
			if(!$filter.hasClass('filter-hidden')){
				//hide
				$('.'+$filter.data('filter')).show();
				$('.offer').not('.'+$filter.data('filter')).not('.static').hide();
				$filter.addClass('filter-hidden');
			}
			else{
				//show
				$('.offer').not('.'+$filter.data('filter')).show();
				$filter.removeClass('filter-hidden');
			}
		}
		
		// reflow masonry		
		$('#product-board').masonry();
		
		e.preventDefault();
	});
	
	
	
	Block = {};
	
	Block.Click = function (event){
		
		var MainBlock = $(event.target.parentElement.parentElement);
		var OpenCloseElem = $(MainBlock).find('.glyphicon');
		event.preventDefault();
		
		if($(OpenCloseElem).hasClass('glyphicon-menu-down')){
			$(OpenCloseElem).removeClass('glyphicon-menu-down').addClass('glyphicon-menu-up');
			
					
			$(MainBlock).find('.More').text('скрыть');
			
		}else if ($(OpenCloseElem).hasClass('glyphicon-menu-up')){
			$(OpenCloseElem).removeClass('glyphicon-menu-up').addClass('glyphicon-menu-down');
			
			
		
			$(MainBlock).find('.More').text('подробнее');	
		}
		
	};

	Block.Init = function (){
		$('.ShowHide button ').click(Block.Click);
		$('.ShowHide .More').click(Block.Click);
		
	};

$(Block.Init);
	
	
	
	
}); //end doc ready





