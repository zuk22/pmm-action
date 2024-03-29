<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/meta.html'); ?>

<body class="product-board">
	<div id="page-preloader"><span class="spinner"></span></div><!--page-preloader-->
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/nav.html'); ?>
	
	<div class="jumbotron">
		<div class="container">
			<div class="col-sm-8">
				<h1>Мы охотимся за вкусными <a href="catalog.php">офферами!</a></h1>
				<p>Мобильная партнёрская сеть, предоставляющая технические и организационные возможности по проведению рекламных кампаний <br>с оплатой за результат.</p>
				<p><a href="reg.php" class="GoButton btn btn-primary btn-lg"><span></span>Начать!</a></p>
			</div>
			<div class="col-sm-4 text-right">
				<img class="img-responsive hidden-xs" src="img/mainimg.png" alt="mainimg" />
			</div>
		</div><!--container-->
	</div><!--jumbotron-->
	<div class="container NewsContainer">
		<div class="row">
				<div class="col-md-9 hidden-xs">
					
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
				<div class="col-md-3 NewsBlock">
					
						<h4>Новости</h4>
						
						<div class="News">
							<div class="row">
							<div class="col-xs-3">
								<div class="Date">
								<b>22 </b><span>окт</span>
								</div>	
							</div><!--col-md-3-->
							<div class="col-xs-9">
								<a href="#">
								<span class="New">обновление</span>
								Средство для увеличения члена Титан гель
								</a>
							</div><!--col-md-9-->
							</div><!--row-->
						</div><!--News-->
						
						<div class="News">
							<div class="row">
							<div class="col-xs-3">
								<div class="Date">
								<b>16 </b> <span>дек</span>
								</div>	
							</div><!--col-md-3-->
							<div class="col-xs-9">
								<a href="#">
								<span class="New">новый оффер</span>
								Приложение livegames
								</a>
							</div><!--col-md-9-->
							</div><!--row-->
						</div><!--News-->
						
						<div class="News">
							<div class="row">
							<div class="col-xs-3">
								<div class="Date">
								<b>31 </b><span>янв</span>
								</div>	
							</div><!--col-md-3-->
							<div class="col-xs-9">
								<a href="#">
								
								Билайн Локатор. Целевая конверсия – Ребилл абонента (факт списания денег со счета абонента)
								</a>
							</div><!--col-md-9-->
							</div><!--row-->
						</div><!--News-->
						
				</div><!--NewsBlock-->
		</div><!--row-->	
	</div><!--NewsContainer-->
	
	<div class="container Pacman">
		
			<img class="img-responsive" src="img/pacmaneat.png" alt="pacmaneat" width="756" height="125" />
		
	</div><!--Pacman-->
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
	<div class="clearfix"></div>
	
	</div> <!-- //end product-board -->
	
		<div class="load-more-container">
			<button class="btn btn-lg ">
				каталог офферов 
			</button>
		</div>
	
	
	<div class="Webmaster hidden-xs">
		<div class="container Pacman">
		
			<img class="img-responsive" src="img/pacmaster.png" alt="pacmaster" width="756" height="125" />
			
			<div class="row">
				<div class="col-md-5">
					<h2><A href="web2.php">Вэбмастеру</A></h2>
				</div><!--col-sm-4-->
				<div class="col-md-7">
					<p class="lead">Хотите увеличить доход от монетизации вебсайтов? Мы предлагаем работу с крупнейшими рекламодателями с оплатой по CPI, CPC, CPM и CPA модели. Автоматический таргетинг по устройствам, странам, тематике сайтов. Еженедельные выплаты. Установка кода за 2 минуты.</p>
				</div><!--col-sm-8-->
			</div>
		
	</div><!--Pacman-->
	</div><!--Webmaster-->
	
	</div><!--White-->
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/modal.html'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/footer.html'); ?>
			
</body>
</html>