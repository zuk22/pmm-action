<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/meta.html'); ?>

<body>
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/nav.html'); ?>
	<div class="container Support">
		<div class="row">
			
			<div class="col-sm-12">
				<p class="Title">Контакты</p>
				
			</div>
		</div>
	</div><!--container-->
	
	<div class="container  RegBlock ContactBlock">
		<div class="row">
			
			<div class="col-md-12">
				<div class="row">
					<div class="col-sm-6 Support">
						<h4>Служба поддержки</h4>
						<ul>
							<li><a class="IconMail" href="#">support@pmm-action.ru</a></li>
							<li><a class="IconSkype"  href="#">pmm-action</a></li>
							<li><b class="IconPhone">7 (495) 269-00-99</b> <span>( с 10:00 до 18:00 Мск. )</span></li>
						</ul>
						<p>Мы стараемся быть ближе к нашим клиентам и партнерам и будем рады обсудить любые ваши вопросы по телефону, электронной почте или при личной встрече.</p>
					</div><!--col-sm-6-->
					<div class="col-sm-6">
						<div class="RegForm">
        <div class="modal-header">
        
        <h4 class="modal-title">Я обращаюсь как</h4>
      </div>
        
            <ul id="myTab" class="nav nav-tabs">
              <li ><a href="#webmasters" data-toggle="tab">Вэбмастер</a></li>
              <li class="active"><a href="#mediamasters" data-toggle="tab">Рекламодатель</a></li>
              
            </ul>
        
      <div class="modal-body">
        <div id="TabContent" class="tab-content">
       
        	<div class="tab-pane fade active in" id="webmasters">
            <form class="form-horizontal">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="Email">Ваше имя:</label>
              <div class="controls">
              	<span class="glyphicon glyphicon-asterisk"></span>
                <input id="Name" name="Name" class="form-control" type="text" placeholder="Введите имя" class="input-large" required="">
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="Email">Ваш Email:</label>
              <div class="controls">
              	<span class="glyphicon glyphicon-asterisk"></span>
                <input id="Email" name="Email" class="form-control" type="text" placeholder="Введите e-mail" class="input-large" required="">
              </div>
            </div>
            
           	 <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="reenterpassword">Skype/icq/Телефон:</label>
              <div class="controls">
                <input id="Phone" class="form-control" name="Phone" type="text" placeholder="" class="input-large" >
              </div>
            </div>
            
           
           
        
            
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              
              	<p class="req"><sup><span class="glyphicon glyphicon-asterisk"></span></sup> поля обязательные для заполнения</p>
              	
	              <br>
                <button class="btn btn-success">Зарегистрироваться</button>
              
            </div>
            </fieldset>
            </form>
        </div>
        	<div class="tab-pane fade  in" id="mediamasters">
            <form class="form-horizontal">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="Email">Ваше имя:</label>
              <div class="controls">
              	<span class="glyphicon glyphicon-asterisk"></span>
                <input id="Name" name="Name" class="form-control" type="text" placeholder="Введите имя" class="input-large" required="">
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="Email">Ваш Email:</label>
              <div class="controls">
              	<span class="glyphicon glyphicon-asterisk"></span>
                <input id="Email" name="Email" class="form-control" type="text" placeholder="Введите e-mail" class="input-large" required="">
              </div>
            </div>
            
           	 <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="reenterpassword">Skype/icq/Телефон:</label>
              <div class="controls">
                <input id="Phone" class="form-control" name="Phone" type="text" placeholder="" class="input-large" >
              </div>
            </div>
            
           
           
        
            
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              
              	<p class="req"><sup><span class="glyphicon glyphicon-asterisk"></span></sup> поля обязательные для заполнения</p>
              	
	              <br>
                <button class="btn btn-success">Зарегистрироваться</button>
              
            </div>
            </fieldset>
            </form>
        </div>
        </div><!--TabContent-->
      </div><!--modal-body-->
      
    </div>
					</div><!--col-sm-6-->
				</div><!--row-->	
			</div><!--col-md-6-->
			
			
		</div><!--row-->
	</div><!--container-->
	
	<div class="Map">
	</div>
	
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/modal.html'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/footer.html'); ?>
			
</body>
</html>