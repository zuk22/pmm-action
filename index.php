<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/meta.html'); ?>

<body class="product-board">
	<!--<div id="page-preloader"><span class="spinner"></span></div><!--page-preloader-->
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/nav.html'); ?>

	<!--<div class="container hidden-xs hidden-sm">
		<div class="row">
			<div class="PopInfo inIndex clearfix ">
				<div class="PopBlock col-md-3"  data-container="body" data-toggle="popover" data-placement="bottom" data-content="Несколько способов доставки">
					<div class="TryOn"></div>
					
					
					<p><b>ЭКСКЛЮЗИВНЫЕ ОФФЕРЫ</b>Офферы от крупнейших рекламодателей. Гарантии максимальных выплат для  мобильного трафика.</p>
					
 				</div>
 				
 				<div class="PopBlock col-md-3"  data-container="body" data-toggle="popover" data-placement="bottom" data-content="Несколько способов доставки">
					<div class="Delivery"></div>
					
					<p><b>ПЕРСОНАЛЬНЫЙ МЕНЕДЖЕР</b>Консультации нашего специалиста по арбитражу. Помощь с выбором оффера, подготовко промо-материалов</p>
 				</div>
 				
 				<div class="PopBlock col-md-3"  data-container="body" data-toggle="popover" data-placement="bottom" data-content="Несколько способов доставки">
					<div class="EasyPay"></div>
					
					<p><b>СТАТИСТИКА В ДЕТАЛЯХ</b>Максимум информации о трафике и лидах в режиме реального времени.</p>
 				</div>
 				
 				<div class="PopBlock col-md-3"  data-container="body" data-toggle="popover" data-placement="bottom" data-content="Несколько способов доставки">
					<div class="Phone"></div>
					
					<p><b>МОМЕНТАЛЬНЫЕ ВЫПЛАТЫ</b>Вывод средств без ограничений по суммам в удобное вам время и через любые платежные системы.</p>
 				</div>
 				
			</div>
		</div>	
	</div><!--container-->
	
	<div class="container hidden-xs">
		<div id="radioBtn" class="btn-group board-filters clearfix">
			
			<a class="active" data-toggle="size" data-filter="cat-2" data-title="Y">Новые офферы<span class="Triangle"></span></a>
			<a class="notActive" data-toggle="size" data-filter="cat-3" data-title="X">Лучшие офферы<span class="Triangle"></span></a>
			<a class="notActive" data-toggle="size" data-filter="cat-1" data-title="Z">Эксклюзивные офферы<span class="Triangle"></span></a>
		</div>
	</div>
				
	<div id="product-board" class="clearfix">
	
	
	
		<!--<div class="product large cta">
			<div class="content">
				<h3>Новые поступления!</h3>
				<p>Июль - пожалуй, самый прияный и ожидаемый летний месяц, поэтому мы подготовили для тебя коллекцию, наполненную воздушными платьями.</p>
			</div>
			<a href="collection.php" class="btn btn-bottom">Показать</a>	
		</div>-->
		<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/item.html'); ?>
	</div> <!-- //end product-board -->
	
	
	
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/modal.html'); ?>
	
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/footer.html'); ?>
			
</body>
</html>