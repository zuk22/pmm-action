<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/meta.html'); ?>
<body class="page-general">
	<div id="page-preloader"><span class="spinner"></span></div><!--page-preloader-->
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/nav.html'); ?>
	
	<div class="container">

		<div class="row">
        	<div id="bc1" class="btn-group btn-breadcrumb">
        	    <a href="#" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
        	    <a href="#" class="btn btn-default"><div>Корзина</div></a>
        	</div>
	</div>
		
	</div> <!--container-->
	
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Ваша покупка</h3>
			</div>
		</div>
	</div><!--container-->
	
	<div class="container main-content">
		<div class="row">
			<div class="col-xs-12">
				<div class="content">
					<div class="empty-cart">
						<p class="lead">В корзине нет товаров.</p>
						<p>Пожалуйста <a href="index.html">вернитесь к покупкам</a>.</p>
					</div>
					
					<form action="shopping-cart.php" method="post" class="shopping-cart">
						<table class="table table-striped">
							<tr>
								<td class="img"><img src="img/product-1-mini.jpg" alt="" /></td>
								<td class="name"><a href="product.html">Платье Ksenia Knyazeva</a></td>
								<td class="size"><span class="size-small">M</span></td>
								<td class="quantity-cell">
									<a href="" class="quantity minus">-</a>
									<span class="order-quantity" data-sub="20">1</span>
									<a href="" class="quantity plus">+</a>									
								</td>
								<td class="sub-total"><span class="total">20</span><span class="cur">&#8381;</span></td>
								<td><a href="" class="cart-remove pull-right"><span class="remove-small">×</span></a></td>
							</tr>
							<tr>
								<td class="img"><img src="img/product-1-mini.jpg" alt="" /></td>
								<td class="name"><a href="product.html">Джинсы MOSKO</a></td>
								<td class="size"><span class="size-small">M</span></td>
								
								<td class="quantity-cell">
									<a href="" class="quantity minus">-</a>
									<span class="order-quantity" data-sub="20">1</span>
									<a href="" class="quantity plus">+</a>									
								</td>
								<td class="sub-total"><span class="total">20</span><span class="cur">&#8381;</span></td>
								<td><a href="" class="cart-remove pull-right"><span class="remove-small">×</span></a></td>
							</tr>		
							<tr>
								<td class="img"><img src="img/product-1-mini.jpg" alt="" /></td>
								<td class="name"><a href="product.html">Юбка Remix</a></td>
								<td class="size"><span class="size-small">M</span></td>
								
								<td class="quantity-cell">
									<a href="" class="quantity minus">-</a>
									<span class="order-quantity" data-sub="20">1</span>
									<a href="" class="quantity plus">+</a>									
								</td>
								<td class="sub-total"><span class="total">20</span><span class="cur">&#8381;</span></td>
								<td><a href="" class="cart-remove pull-right"><span class="remove-small">×</span></a></td>
							</tr>					
							<tr class="cart-summary">
							
								<td colspan="5" class="text-right"><span >Итого:</span></td>
								<td class="cart-total text-right"><span class="total-total">12 510</span><span class="cur"> &#8381;</span></td>
							</tr>	
							<!--<tr class="cart-summary">
								<td colspan="6">
									<a class="btn btn-large pull-right" href="checkout.php">Оформить заказ</a>
									<!-- <input class="btn" value="Checkout" /> 
								</td>
							</tr>	-->
						</table>
					</form>

				</div><!--content-->	

			</div> <!-- // end span12 -->
		</div> <!-- //end row -->

	</div> <!-- //end container -->
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Оформить заказ</h3>
			</div>
		</div>
	</div><!--container-->
	
	<div class="container BasketForm">
		<div class="row">
			
			<div class="col-md-12 ">
				<div class="content">
				<form class="form-horizontal" role="form">
					<fieldset>

          			    <!-- Form Name -->
          			    <legend><span>1 . </span>Покупатель</legend>
          			    <div class="row">
          			    	<div class="col-md-6">
          			    		<div class="row">
          			    		<div class="col-md-6">
	          			    	<!-- Text input-->
	          			    	<div class="form-group">
	          			    	    <div class="col-md-12">
          			        <input type="text" placeholder="Введите Имя" class="form-control">
          			      </div>
	          			    	</div>
          			    		</div>
          			    		<div class="col-md-6">
	          			    	<div class="form-group">
	          			    		<div class="col-sm-12">
          			        <input type="text" placeholder="Введите эл.почту" class="form-control">
          			      </div>
	          			    	</div>
          			    		</div>
          			    		</div>
          			    	</div><!--col-md-6-->
          			    	
          			   
          			    <div class="col-sm-6">
          			    	<div class="checkbox">
          			        <label>
          			            <input type="checkbox" value="">
          			            Использовать мои регистрационные данные
          			        </label>
          			    </div>
          			    </div>
          			    </div><!--row-->
          			    
		  
          			</fieldset>
          		</form>
				</div>
			</div><!--col-md-12-->
			
			<div class="col-md-12 ">
			<div class="content">
				<form class="form-horizontal" role="form">
					<fieldset>
					
					<legend><span>2 . </span>Доставка</legend>
					<div class="row">
						<div class="col-md-6">
						<div class="form-group">
							<div class="radio">
                              <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                Курьерская доставка по Москве
                              </label>
                            </div>
							<div class="radio">
                              <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                Самовывоз
                              </label>
                            </div>
							<div class="radio">
                              <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                                Почтой России
                              </label>
                            </div>
						</div>
						</div>
						<div class="col-md-6">
						<!-- Form Name -->
						
						<div class="form-group">
            
                        <div class="col-sm-12">
                          <input type="text" placeholder="Улица" class="form-control">
                        </div>
                      </div>

         				 <div class="form-group">
            
            <div class="col-sm-4">
              <input type="text" placeholder="Дом" class="form-control">
            </div>
            
            <div class="col-sm-4">
              <input type="text" placeholder="Корпус" class="form-control">
            </div>

            <div class="col-sm-4">
              <input type="text" placeholder="Квартира" class="form-control">
            </div>
          </div>
						</div><!--col-md-6-->
					</div><!--row-->	
          

        </fieldset>
				</form>
			</div>
			</div><!--col-md-12-->
			
			<div class="col-md-12 ">
			<div class="content">
				<form class="form-horizontal" role="form">
					<fieldset>
					
					<legend><span>3 . </span>Оплата</legend>
					<div class="row">
						<div class="col-md-6">
						<div class="form-group">
				<div class="radio">
					<label>
					  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
					  Наличными при получении
					</label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
				    Банковской картой
				  </label>
				</div>
				</div>
						</div>
						<div class="col-md-6">
												
        
          
                    </div>	<!--col-md-6-->
		
						
					</div><!--row-->	
          

        </fieldset>
				</form>
			</div>
			</div><!--col-md-12-->
			
			<div class="col-md-12 ">
			<div class="content">
				<form class="form-horizontal" role="form">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
            
            <div class="col-sm-12">
               <textarea class="form-control" placeholder="Примечание к заказу" rows="5" ></textarea>
            </div>
          </div>	
						</div><!--col-md-6-->
						<div class="col-md-6 text-right">
							<table class="table Total">
								<tr>
									<td>Стоимость товаров: </td>
									<td>22 990 <span class="cur"> &#8381;</span></td>
								</tr>
								<tr>
									<td>Стоимость доставки:</td>
									<td>0 <span class="cur"> &#8381;</span></td>
								</tr>
								<tr>
									<td><b>Итого</b></td>
									<td>22 990 <span class="cur"> &#8381;</span></td>
								</tr>
							</table>
							<button class="btn btn-fresh btn-lg" value="Checkout" >Оформить заказ</button>
						</div><!--col-md-6-->
					</div>
				</form>
			
			
			</div><!--content-->
			</div><!--col-md-12-->
			
		</div><!--row-->
	</div>
	
	
	
	
	
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/modal.html'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/footer.html'); ?>
			
</body>
</html>