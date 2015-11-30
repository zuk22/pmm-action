<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/meta.html'); ?>
<body class="page-general">
	<div id="page-preloader"><span class="spinner"></span></div><!--page-preloader-->
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/nav.html'); ?>
	
	<div class="container">

		<div class="row">
        	<div id="bc1" class="btn-group btn-breadcrumb">
        	    <a href="#" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
        	    <a href="#" class="btn btn-default"><div>Личный кабинет</div></a>
        	</div>
	</div>
		
	</div> <!--container-->
	
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<div class="text UserNav">
				<ul class="nav">
					<li ><a href="userarea.php"><span class="glyphicon glyphicon-shopping-cart"></span>Мои заказы</a></li>
					<li class="active"><a href="userarea(favorite).php"><span class="glyphicon glyphicon-heart"></span> Избранное</a></li>
					<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Профиль</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Подписки</a></li>
					
				</ul>	
				</div>
			</div>
			
			
			<div class="col-md-10 UserPage">
				<div class="content clearfix">
					<h2>Избранное</h2>
					<div class="product medium cat-2">
			<div class="media">
				<a href="product.php" title="product title">
					<img src="img/product-1.jpg" alt="product title" data-img="product-1" class="img-responsive" />
				</a>
				<ul class="Color">
					<li><a class="Red" href="#"></a></li>
					<li><a class="Blue" href="#"></a></li>
					<li><a class="Yellow" href="#"></a></li>
				</ul>
				
				<span class="Favorites glyphicon glyphicon-heart"></span>
				<span class="plabel">ХИТ</span>				
			</div>
			<div class="details">
				<p class="name"><a href="product.php">Одежда</a></p>
				<p class="price"><span class="total">2500</span><span class="cur">&#8381;</span></p>
				<a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" class="details-expand" ><span class="glyphicon glyphicon-shopping-cart"></span></a>
			</div>
			
		</div>
				<div class="product medium cat-3">
			<div class="media">
				<a href="product.php" title="product title">
					<img src="img/product-3.jpg" alt="product title" data-img="product-2" class="img-responsive" />
				</a>
				<ul class="Color">
					<li><a class="Red" href="#"></a></li>
					<li><a class="Blue" href="#"></a></li>
					<li><a class="Yellow" href="#"></a></li>
				</ul>
				
				<span class="Favorites glyphicon glyphicon-heart"></span>
			</div>
			<div class="details">
				<p class="name"><a href="product.php">Одежда</a></p>
				<p class="price"><span class="total">2500</span><span class="cur">&#8381;</span></p>
				<a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" class="details-expand" ><span class="glyphicon glyphicon-shopping-cart"></span></a>
			</div>
						
		</div>
		<div class="product medium cat-2">
			<div class="media">
				<a href="product.php" title="product title">
					<img src="img/product-1.jpg" alt="product title" data-img="product-1" class="img-responsive" />
				</a>
				<ul class="Color">
					<li><a class="Red" href="#"></a></li>
					<li><a class="Blue" href="#"></a></li>
					<li><a class="Yellow" href="#"></a></li>
				</ul>
				
				<span class="Favorites glyphicon glyphicon-heart"></span>
				<span class="plabel">ХИТ</span>				
			</div>
			<div class="details">
				<p class="name"><a href="product.php">Одежда</a></p>
				<p class="price"><span class="total">2500</span><span class="cur">&#8381;</span></p>
				<a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" class="details-expand" ><span class="glyphicon glyphicon-shopping-cart"></span></a>
			</div>
			
		</div>
				<div class="product medium cat-3">
			<div class="media">
				<a href="product.php" title="product title">
					<img src="img/product-3.jpg" alt="product title" data-img="product-2" class="img-responsive" />
				</a>
				<ul class="Color">
					<li><a class="Red" href="#"></a></li>
					<li><a class="Blue" href="#"></a></li>
					<li><a class="Yellow" href="#"></a></li>
				</ul>
				
				<span class="Favorites glyphicon glyphicon-heart"></span>
			</div>
			<div class="details">
				<p class="name"><a href="product.php">Одежда</a></p>
				<p class="price"><span class="total">2500</span><span class="cur">&#8381;</span></p>
				<a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" class="details-expand" ><span class="glyphicon glyphicon-shopping-cart"></span></a>
			</div>
						
		</div>
					
				</div>			
			</div> <!-- // end span12 -->
		</div> <!-- //end row -->
	</div> <!-- //end container -->
	
	
	
	
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/modal.html'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/footer.html'); ?>
			
</body>
</html>