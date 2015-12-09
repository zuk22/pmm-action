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
	
	
	// Product details expand
	$(document).on('click', '.details-expand', function(e){
		if($('#'+$(this).data('target')).is(':visible')){
			$(this).html('+').removeClass('expanded');	
		}
		else{
			$(this).text('–').addClass('expanded');
		}
		$('#'+$(this).data('target')).toggle();
		
        $('#product-board').masonry();    
		
		e.preventDefault();
	});
	
	var hover;
	if($('html').hasClass('no-touch')){
		$("#main-nav a.top-level, #nav-basket a.basket-link").hover( 
			function () {
				if($(window).width() > 979){
					hover = true;
					var menua = $(this);
					$(this).data('timeout', setTimeout( function(){showSubNav(menua)}, 300));
				}
			}, function () {
				clearTimeout($(this).data('timeout'));
				hover = false;
			}
		);
	}
	else{
		//Touch events for nav
		// Show menu dropdown
		$('#main-nav a.top-level, #nav-basket a.basket-link').on('touchstart', function(e){ 
			if($(window).width() >= 979){
				if($(this).data('hit') == undefined){		
					var menua = $(this);
					setTimeout( function(){showSubNav(menua)}, 300);
					$(this).data('hit', 1);
					e.preventDefault();			
				}
			}
		});
		
		// Hiding menu dropdown
		$('body').on('touchstart', function(e){ 
			if(e.target.className != 'submenu-container' && e.target.className != 'top-level' && $(e.target).parents('.submenu-container').length == 0){
				$('.submenu-container:visible').slideUp(function(){
					resetNav();
				});
			}
		});
	}
	
	function showSubNav(menua) {
		var $container = $(menua).parent();
		
		// Show the submenu
		if($('.submenu-container').is(':visible') || $('#nav-basket .submenu-container').is(':visible')){
			if($container.prop('id') == 'nav-basket'){
				$('.submenu-container').hide();
			}
			$('.submenu-container', $container).show();
		}
		else{
			$('.submenu-container .submenu li.active .submenu-preview').hide();			
			$('.submenu-container', $container).fadeIn('fast',function(){
				$('.submenu-container .submenu li.active .submenu-preview').show();			
			});
			
		}

		// Handling of the active class for top level menu
		if($container.prop('id') != 'nav-basket'){
			$container.addClass('activehover');
			$container.siblings().removeClass('activehover');
			$('#nav-basket .submenu-container').hide();
		}
		else{
			$container.prev().children(':first-child').children().removeClass('activehover');		
		}
		
		// No submenu on flat classed items so it gets hidden if its shown
		if($(menua).hasClass('flat')){
			$container.siblings().children('.submenu-container').slideUp();		
		}
		else{
			$container.siblings().children('.submenu-container').hide();				
		}
	}
	
	// Hide submenu
	if($('html').hasClass('no-touch')){
		$(document).on('mouseleave', '.submenu-container', function(e){
			setTimeout(function(){
				if(!hover){
					$('.submenu-container:visible').fadeOut(function(){
						resetNav();
					});
				}
			}, 100);
		});
	}
	
	//Main menu item sub menu
	if($('html').hasClass('no-touch')){
		$(document).on('mouseover', '.sml', function(e){
			$(this).parent().siblings().removeClass('active');
			$(this).parent().siblings().children('.submenu-preview').hide();
			$(this).next().show();			
			$(this).parent().addClass('active');
		});
		
		$(document).on('mouseover', '.sml2', function(e){
			$(this).parent().siblings().removeClass('active');
			$(this).parent().siblings().children('.subsubmenu-preview').hide();
			$(this).next().show();			
			$(this).parent().addClass('active');
		});
		
	}
	else{
		$('.sml').on('touchstart', function(e){
			if($(this).data('hit') == undefined){
				$(this).parent().siblings().removeClass('active');
				$(this).parent().addClass('active');
				$(this).parent().siblings().children('.submenu-preview').hide();
				$(this).next().show();			
				$(this).data('hit', 1);
				
				e.preventDefault();
			}
		});
		
		$('.sml2').on('touchstart', function(e){
			if($(this).data('hit') == undefined){
				$(this).parent().siblings().removeClass('active');
				$(this).parent().addClass('active');
				$(this).parent().siblings().children('.subsubmenu-preview').hide();
				$(this).next().show();			
				$(this).data('hit', 1);
				
				e.preventDefault();
			}
		});
		
	}
	
	$(document).on('mouseleave', '#main-nav a.flat', function(e){
		$(this).parent().removeClass('activehover');
	});
	
	// Product page info tabs
	$('#product-tabs a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	})
	
	
	
	// Product remove
	$('.cart-remove').click(function(e){
		$(this).parent().parent().remove();
		updateTotal();
		e.preventDefault();
	});
	
	//Checkout step 1 submit 
	$('#checkout-1').click(function(e){
		var error = false;
		
		//Clear old errors 
		$('#checkout-details-main .control-group, #shipping-form .control-group').removeClass('has-error');
		$('#checkout-details-main .control-group .help-block, #shipping-form .control-group .help-block').hide();
		
		//Error validation 
		// Check inputs
		$('#checkout-details-main input.req').each(function(){
			if($(this).val() == ''){
				var $cg = $(this).parent().parent();
				$cg.addClass('has-error');
				$('.help-block', $cg).show();
				error = true;
			}
		});
		
		// Check selects
		$('#checkout-details-main select.req').each(function(){
			if($('option:selected',$(this)).val() == ''){
				var $cg = $(this).parent().parent();
				$cg.addClass('has-error');
				$('.help-block', $cg).show();
				error = true;
			}
		});
		
		if(!$('#shipping-toggle').is(':checked')){
			// Check input fields 
			$('#shipping-form input.req').each(function(){
				if($(this).val() == ''){
					var $cg = $(this).parent().parent();
					$cg.addClass('has-error');
					$('.help-block', $cg).show();
					error = true;						
				}
			});
			
			// Check selects
			$('#shipping-form select.req').each(function(){
				if($('option:selected',$(this)).val() == ''){
					var $cg = $(this).parent().parent();
					$cg.addClass('has-error');
					$('.help-block', $cg).show();
					error = true;
				}
			});
		}

		if(!error){
			//submit form, for dev it just redirects to checkout-2.html
			var href = window.location.href;
			var newhref = window.location.href.substr(0, href.lastIndexOf('/'));

			// Normally you'd submit the form			
			//$('#checkout-details').submit();
		}
		
		e.preventDefault();
		
	});
	
	
	
	

	
	
	
	
}); //end doc ready



