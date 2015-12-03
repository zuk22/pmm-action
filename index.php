<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/meta.html'); ?>

<body class="product-board">
	<div id="page-preloader"><span class="spinner"></span></div><!--page-preloader-->
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/nav.html'); ?>
	
	<div class="jumbotron">
		<div class="container">
			<div class="col-sm-7">
				<h1>Мы охотимся за вкусными <a href="catalog.php">офферами!</a></h1>
				<p>Мобильная партнёрская сеть, предоставляющая технические и организационные возможности по проведению<br> рекламных кампаний с оплатой за результат.</p>
				<p><a class="btn btn-primary btn-lg">Начать</a></p>
			</div>
			<div class="col-sm-5 text-right">
				<img class="img-responsive hidden-xs" src="img/mainimg.png" alt="mainimg" />
			</div>
		</div><!--container-->
	</div>
	
	
	<div class="container NewsContainer">
		<div class="row">
				<div class="col-sm-9">
					
					<div class="PopInfo inIndex clearfix">
					<div class="row">
					<div class="col-md-6">
						<div class="PopBlock"  >
					<div class="Exs"></div>
					
					
					<p><b>ЭКСКЛЮЗИВНЫЕ ОФФЕРЫ</b>Офферы от крупнейших рекламодателей. Гарантии максимальных выплат для  мобильного трафика.</p>
					
 				</div><!--PopBlock-->
					</div><!--col-md-6-->
					<div class="col-md-6">
					<div class="PopBlock ">
					<div class="Manager"></div>
					
					<p><b>ПЕРСОНАЛЬНЫЙ МЕНЕДЖЕР</b>Консультации нашего специалиста по арбитражу. Помощь с выбором оффера, подготовко промо-материалов</p>
 				</div><!--PopBlock-->
					</div><!--col-md-6-->
					</div><!--row-->
					<div class="row">
					<div class="col-md-6">
					<div class="PopBlock ">
					<div class="Stat"></div>
					
					<p><b>СТАТИСТИКА В ДЕТАЛЯХ</b>Максимум информации о трафике и лидах в режиме реального времени.</p>
 				</div><!--PopBlock-->
					</div><!--col-md-6-->
					
					<div class="col-md-6">
					<div class="PopBlock ">
					<div class="Pay"></div>
					
					<p><b>МОМЕНТАЛЬНЫЕ ВЫПЛАТЫ</b>Вывод средств без ограничений по суммам в удобное вам время и через любые платежные системы.</p>
 				</div><!--PopBlock-->
					</div><!--col-md-6-->
					</div>
			</div><!--PopInfo-->
					
				</div><!--col-sm-9-->
				<div class="col-sm-3 NewsBlock">
					
						<h4>Новости</h4>
						
						<div class="News">
							<div class="row">
							<div class="col-md-3">
								<div class="Date">
								22 <span>окт</span>
								</div>	
							</div><!--col-md-3-->
							<div class="col-md-9">
								<a href="#">
								<span class="New">новый оффер</span>
								Средство для увеличения члена Титан гель
								</a>
							</div><!--col-md-9-->
							</div><!--row-->
						</div><!--News-->
						
						<div class="News">
							<div class="row">
							<div class="col-md-3">
								<div class="Date">
								22 <span>окт</span>
								</div>	
							</div><!--col-md-3-->
							<div class="col-md-9">
								<a href="#">
								<span class="New">новый оффер</span>
								Приложение livegames
								</a>
							</div><!--col-md-9-->
							</div><!--row-->
						</div><!--News-->
						
						<div class="News">
							<div class="row">
							<div class="col-md-3">
								<div class="Date">
								22 <span>окт</span>
								</div>	
							</div><!--col-md-3-->
							<div class="col-md-9">
								<a href="#">
								<span class="New">новый оффер</span>
								Билайн Локатор. Целевая конверсия – Ребилл абонента (факт списания денег со счета абонента)
								</a>
							</div><!--col-md-9-->
							</div><!--row-->
						</div><!--News-->
						
				</div><!--NewsBlock-->
		</div><!--row-->	
	</div><!--container-->
	
	<div class="container Pacman">
		
			<img class="img-responsive" src="img/pacmaneat.png" alt="pacmaneat" width="756" height="125" />
		
	</div>
	<div class="White">
	<div class="container hidden-xs">
		<div id="radioBtn" class="btn-group board-filters clearfix">
			
			<a class="active" data-toggle="size" data-filter="cat-2" data-title="Y">Новые офферы<span class="Triangle"></span></a>
			<a class="notActive" data-toggle="size" data-filter="cat-3" data-title="X">Лучшие офферы<span class="Triangle"></span></a>
			<a class="notActive" data-toggle="size" data-filter="cat-1" data-title="Z">Эксклюзивные офферы<span class="Triangle"></span></a>
		</div>
	</div>
				
	<div id="product-board" class="clearfix">
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/item.html'); ?>
	</div> <!-- //end product-board -->
	</div><!--White-->
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/modal.html'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/subscribe.html'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/footer.html'); ?>
			
</body>
</html>