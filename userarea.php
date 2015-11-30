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
					<li class="active"><a href="userarea.php"><span class="glyphicon glyphicon-shopping-cart"></span>Мои заказы</a></li>
					<li><a href="userarea(favorite).php"><span class="glyphicon glyphicon-heart"></span> Избранное</a></li>
					<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Профиль</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Подписки</a></li>
					
				</ul>	
				</div>
			</div>
			
			
			<div class="col-md-10 UserPage">
				<div class="content">
					<h2>Мои заказы</h2>
					<div class="empty-cart">
						<p class="lead">В корзине нет товаров.</p>
						<p>Пожалуйста <a href="index.html">вернитесь к покупкам</a>.</p>
					</div>
					
					<form action="shopping-cart.php" method="post" class="shopping-cart">
						<table class="table table-striped">
							<tr>
								<td class="img"><img src="img/product-1-mini.jpg" alt="" /></td>
								<td class="name"><a href="product.html">Платье Ksenia Knyazeva</a></td>
								<td class="size"><span class="size-small">M</span><span class="size-large">Medium</span></td>
								<td class="quantity-cell">
									<a href="" class="quantity minus">-</a>
									<span class="order-quantity" data-sub="20">1</span>
									<a href="" class="quantity plus">+</a>									
								</td>
								<td class="sub-total"><span class="total">20</span><span class="cur">&#8381;</span></td>
								<td><a href="" class="cart-remove pull-right"><span class="remove-small">x</span><span class="remove-large">удалить</span></a></td>
							</tr>
							<tr>
								<td class="img"><img src="img/product-1-mini.jpg" alt="" /></td>
								<td class="name"><a href="product.html">Джинсы MOSKO</a></td>
								<td class="size"><span class="size-small">M</span><span class="size-large">Medium</span></td>
								
								<td class="quantity-cell">
									<a href="" class="quantity minus">-</a>
									<span class="order-quantity" data-sub="20">1</span>
									<a href="" class="quantity plus">+</a>									
								</td>
								<td class="sub-total"><span class="total">20</span><span class="cur">&#8381;</span></td>
								<td><a href="" class="cart-remove pull-right"><span class="remove-small">x</span><span class="remove-large">удалить</span></a></td>
							</tr>		
							<tr>
								<td class="img"><img src="img/product-1-mini.jpg" alt="" /></td>
								<td class="name"><a href="product.html">Юбка Remix</a></td>
								<td class="size"><span class="size-small">M</span><span class="size-large">Medium</span></td>
								
								<td class="quantity-cell">
									<a href="" class="quantity minus">-</a>
									<span class="order-quantity" data-sub="20">1</span>
									<a href="" class="quantity plus">+</a>									
								</td>
								<td class="sub-total"><span class="total">20</span><span class="cur">&#8381;</span></td>
								<td><a href="" class="cart-remove pull-right"><span class="remove-small">x</span><span class="remove-large">удалить</span></a></td>
							</tr>					
							<tr class="cart-summary">
								<td colspan="3"></td>
								<td><span>Итого:</span></td>
								<td colspan="2" class="cart-total"><span class="total-total">60</span><span class="cur">&#8381;</span></td>
							</tr>	
							<tr class="cart-summary">
								<td colspan="6">
									<a class="btn btn-large pull-right" href="checkout.php">Оформить заказ</a>
									<!-- <input class="btn" value="Checkout" /> -->
								</td>
							</tr>	
						</table>
					</form>
					
					<h2>Приобретенные товары</h2>
					<form action="shopping-cart.php" method="post" class="shopping-cart">
						<table class="table table-striped">
							
							<tr>
								<td class="img"><img src="img/product-1-mini.jpg" alt="" /></td>
								<td class="name"><a href="product.html">Джинсы MOSKO</a></td>
								<td class="size"><span class="size-small">M</span><span class="size-large">Medium</span></td>
								
								<td class="quantity-cell">
									
									<span class="order-quantity" data-sub="20">1</span>
																		
								</td>
								<td class="sub-total"><span class="total">20</span><span class="cur">&#8381;</span></td>
								<td></td>
							</tr>		
							<tr>
								<td class="img"><img src="img/product-1-mini.jpg" alt="" /></td>
								<td class="name"><a href="product.html">Юбка Remix</a></td>
								<td class="size"><span class="size-small">M</span><span class="size-large">Medium</span></td>
								
								<td class="quantity-cell">
									
									<span class="order-quantity" data-sub="20">1</span>
																		
								</td>
								<td class="sub-total"><span class="total">20</span><span class="cur">&#8381;</span></td>
								<td></td>
							</tr>					
								
								
						</table>
					</form>
					
				</div>			
			</div> <!-- // end span12 -->
		</div> <!-- //end row -->
	</div> <!-- //end container -->
	
	
	
	
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/modal.html'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/footer.html'); ?>
			
</body>
</html>