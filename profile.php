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
					<li><a href="userarea(favorite).php"><span class="glyphicon glyphicon-heart"></span> Избранное</a></li>
					<li class="active"><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Профиль</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Подписки</a></li>
					
				</ul>	
				</div>
			</div>
			
			
			<div class="col-md-10 UserPage">
				<div class="content">
					<div class="row">
					<div class="col-xs-7">
					<h2>Мой профиль</h2>
					
					
					<form id="loginForm" method="POST" action="/login/" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="username" class="control-label">Ваше имя</label>
                                  <div class="Required"></div>
                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Пожалуйста введите свое имя" placeholder="">
                                  <span class="help-block"></span>
                              </div>
                              
                              <div class="form-group">
                                  <label class="radio-inline">
	                                  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">я женщина
	                              </label>
	                              <label class="radio-inline">
		                              <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">я мужчина
		                          </label>
                              </div>
                              
                              <div class="form-group">
                                  <label for="email" class="control-label">Эл. Почта</label>
                                  <input type="text" class="form-control" id="username" name="email" value="" required="" title="Пожалуйста, введите e-mail" placeholder="пример@ххх.хх">
                                  <span class="help-block"></span>
                              </div>

                              <h3>Контактные данные</h3>
                              <p>Заполните профиль до конца и не тратьте время на заполнение форм при оформлении заказа!</p>
                              
                              <div class="form-group">
                                  <label for="adress" class="control-label">Адрес (Улица)</label>
                                  
                                  <div class="Required"></div>
                                  <input type="text" class="form-control" id="adress" name="adress" value="" required=""  title="Адрес">
                                  
                                  <span class="help-block"></span>
                              </div>
                              
                              <div class="form-inline">
	                              <div class="form-group">
                                  <label for="home" class="control-label"></label>
                                  <div class="Required"></div>
                                  <input  type="text" class="form-control " id="home" name="home" value="" required="" placeholder="Дом" title="home">
                                 
                                  <span class="help-block"></span>
                              </div>
	                              <div class="form-group">
                                  <label for="corp" class="control-label"></label>
                                  <div class="Required"></div>
                                  <input type="text" class="form-control" id="corp" name="corp" value="" required="" placeholder="Корпус" title="corp">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="flat" class="control-label"></label>
                                  <div class="Required"></div>
                                  <input type="text" class="form-control" id="flat" name="flat" value="" required="" placeholder="Квартира" title="flat">
                                  <span class="help-block"></span>
                              </div>
                              </div><!--form-inline-->
                              <br>
                              <p><span class="dot" ></span>обязательные поля для заполнения</p>
                              
                              <div id="loginErrorMsg" class="alert alert-error hide">Неверно</div>
                              
                              	
                              	<button type="submit" class="btn ">Сохранить</button>
   
                             </form>
					</div><!--col-xs-6-->
					<div class="col-xs-5">
						<p><b>Ваши данные под защитой</b></p>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam quis odio sit amet nibh cursus venenatis. Curabitur vestibulum lacus vel neque tincidunt elementum.  </p>
					</div><!--col-xs-6-->
					</div>
					
					
				</div>	<!-- content -->		
			</div> <!-- // end span12 -->
		</div> <!-- //end row -->
	</div> <!-- //end container -->
	
	
	
	
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/modal.html'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/footer.html'); ?>
			
</body>
</html>