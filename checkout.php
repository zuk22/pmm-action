<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/meta.html'); ?>
<body class="page-general">
	<div id="page-preloader"><span class="spinner"></span></div><!--page-preloader-->
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/nav.html'); ?>
	
	<div class="container">

		<div class="row">
        	<div id="bc1" class="btn-group btn-breadcrumb">
        	    <a href="#" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
        	    <a href="#" class="btn btn-default"><div>Оформление заказа</div></a>
        	</div>
	</div>
		
	</div> <!--container-->
	
	
	
	<div class="container BasketForm">
		<div class="row">
		
			<div class="col-md-4">
				<form class="form-horizontal" role="form">
					<fieldset>

          			    <!-- Form Name -->
          			    <legend>Покупатель</legend>
          			    
          			    <!-- Text input-->
          			    <div class="form-group">
          			      <label class="col-sm-2 control-label" for="textinput">Имя</label>
          			      <div class="col-sm-10">
          			        <input type="text" placeholder="Введите Имя" class="form-control">
          			      </div>
          			    </div>
          			    
          			    <!-- Text input-->
          			    <div class="form-group">
          			      <label class="col-sm-2 control-label" for="textinput">E-mail</label>
          			      <div class="col-sm-10">
          			        <input type="text" placeholder="Введите эл.почту" class="form-control">
          			      </div>
          			    </div>
          			    
          			    <div class="checkbox">
          			        <label>
          			            <input type="checkbox" value="">
          			            Использовать мои регистрационные данные
          			        </label>
          			    </div>
		  
          			</fieldset>
          		</form>
			</div><!--col-md-4-->
			
			<div class="col-md-4">
				<form class="form-horizontal" role="form">
				<fieldset>
        
					<legend>Доставка</legend>
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
				

          <!-- Form Name -->
          <legend>Адрес доставки</legend>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Улица</label>
            <div class="col-sm-10">
              <input type="text" placeholder="" class="form-control">
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Телефон</label>
            <div class="col-sm-10">
              <input type="text" placeholder="" class="form-control">
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Дом</label>
            <div class="col-sm-4">
              <input type="text" placeholder="" class="form-control">
            </div>

            <label class="col-sm-2 control-label" for="textinput">Квартира</label>
            <div class="col-sm-4">
              <input type="text" placeholder="" class="form-control">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput"></label>
            <div class="col-sm-10">
               <textarea class="form-control" placeholder="Примечание к заказу" rows="5" ></textarea>
            </div>
          </div>	
          	

          

        </fieldset>
      </form>
			</div><!--col-md-4-->
			
			<div class="col-md-4">
			<form class="form-horizontal" role="form">
				<fieldset>
        
			<legend>Оплата</legend>
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
				
				
            
            <a class="btn btn-large " href="checkout.php">Оформить заказ</a>
				</fieldset>
			</form>
			</div>
		</div><!--row-->
		
		
	</div> <!-- //end container -->
	
	
	
	
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/modal.html'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/footer.html'); ?>
			
</body>
</html>