<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/meta.html'); ?>

<body class="product-board">
	
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/nav.html'); ?>
	
	<div class="container RegBlock">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="RegForm">
        <div class="modal-header">
        
        <h4 class="modal-title">Зарегистрироваться</h4>
      </div>
        
            <ul id="myTab" class="nav nav-tabs">
              <li ><a href="#webmasters" data-toggle="tab">Для вэбмастеров</a></li>
              <li class="active"><a href="#mediamasters" data-toggle="tab">Для рекламодателей</a></li>
              
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
            
                        
            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="password">Пароль (не менее 6 символов. Должен включать заглавные буквы и символы)</label>
              <div class="controls">
              	<span class="glyphicon glyphicon-asterisk"></span>
                <input id="password" name="password" class="form-control" type="password" placeholder="" class="input-large" required="">
              
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="reenterpassword">Повторите пароль:</label>
              <div class="controls">
              	<span class="glyphicon glyphicon-asterisk"></span>
                <input id="reenterpassword" class="form-control" name="reenterpassword" type="password" placeholder="" class="input-large" required="">
              </div>
            </div>
            
            
           <div class="GreyArea">
           
           	 <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="reenterpassword">Skype/icq/Телефон:</label>
              <div class="controls">
                <input id="Phone" class="form-control" name="Phone" type="text" placeholder="" class="input-large" >
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="reenterpassword">Кошелек WMR:</label>
              <div class="controls">
                <input id="Pay" class="form-control" name="Pay" type="text" placeholder="" class="input-large" >
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="reenterpassword">Промо-код <span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></label>
              <div class="controls">
              	
                <input id="Code" class="form-control" name="Code" type="text" placeholder="" class="input-large" >
              </div>
            </div>
           
           </div><!--GreyArea-->
            
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              
              	<p class="req"><sup><span class="glyphicon glyphicon-asterisk"></span></sup> поля обязательные для заполнения</p>
              	<div class="checkbox">
	              	<label>
	              	  <input type="checkbox" value="">
	              	  Я согласен(a) с <a href="#">правилами площадки</a>
	              	</label>
	              </div>
	              <br>
                <button class="btn btn-success">Зарегистрироваться</button>
              
            </div>
            </fieldset>
            </form>
        </div>
        <div class="tab-pane fade" id="mediamasters">
            <form class="form-horizontal">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="Email">Ваше имя:</label>
              <div class="controls">
                <input id="Name" name="Name" class="form-control" type="text" placeholder="Введите имя" class="input-large" required="">
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="Email">Ваш Email:</label>
              <div class="controls">
                <input id="Email" name="Email" class="form-control" type="text" placeholder="Введите e-mail" class="input-large" required="">
              </div>
            </div>
            
                        
            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="password">Пароль (не менее 6 символов. Должен включать заглавные буквы и символы)</label>
              <div class="controls">
                <input id="password" name="password" class="form-control" type="password" placeholder="" class="input-large" required="">
              
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="reenterpassword">Повторите пароль:</label>
              <div class="controls">
                <input id="reenterpassword" class="form-control" name="reenterpassword" type="password" placeholder="" class="input-large" required="">
              </div>
            </div>
            
            
           <div class="GreyArea">
           
           	 <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="reenterpassword">Skype/icq/Телефон:</label>
              <div class="controls">
                <input id="Phone" class="form-control" name="Phone" type="text" placeholder="" class="input-large" >
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="reenterpassword">Кошелек WMR:</label>
              <div class="controls">
                <input id="Pay" class="form-control" name="Pay" type="text" placeholder="" class="input-large" >
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="reenterpassword">Промо-код <span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></label>
              <div class="controls">
                <input id="Code" class="form-control" name="Code" type="text" placeholder="" class="input-large" >
              </div>
            </div>
           
           </div><!--GreyArea-->
            
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="confirmsignup" class="btn btn-success">Зарегистрироваться</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div><!--tab-pane-->
    </div>
      </div><!--modal-body-->
      
    </div>
			</div><!--col-md-6-->
			<div class="col-md-3"></div>
			
		</div><!--row-->
	</div><!--container-->
	
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/modal.html'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/footer.html'); ?>
			
</body>
</html>