<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/meta.html'); ?>
<body >
	
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/nav.html'); ?>
	
	<div class="container CatalogPage">
		<div class="row">
		
			<div class="col-sm-3">
				
				<div class="BlockPadding">
					<div class="row">
					<div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control " placeholder="Поиск по офферам" />
                    <span class="input-group-btn">
                        <button class="btn btn-info " type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
					
					</div>
				</div><!--Block-->
				
				<div class="Block">
					<ul class="list-group">
					<li class="list-group-item">
						<span class="badge">89</span>
						<a href="#">Туризм</a>
					</li>
					<li class="list-group-item">
						<span class="badge">139</span>
						<a href="#">Сервисы</a>
					</li>
					<li class="list-group-item active">
						<span class="badge">38</span>
						<a href="#">Финансы</a>
					</li>
					<li class="list-group-item">
						<span class="badge">56</span>
						<a href="#">Автомобили</a>
					</li>
					<li class="list-group-item">
						<span class="badge">626</span>
						<a href="#">Финансы</a>
					</li>
					<li class="list-group-item">
						<span class="badge">12</span>
						<a href="#">Туризм</a>
					</li>
					
				</ul><!--list-group-->
				</div><!--Block-->
				
				<div class="BlockPadding">
					<div class="Select">
					<select class="selectpicker show-tick form-control" multiple="" style="display: none;">
						<option>Россия</option>
						<option>Бразилия</option>
						<option>Никарагуа</option>
					</select>
					</div><!--Select-->
					<div class="checkbox">
						<label><input type="checkbox" value="">Новые офферы</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="">Эксклюзивные офферы</label>
					</div>
				</div><!--Block-->
				
				<div class="BlockPadding">
					<div class="checkbox">
						<label><input type="checkbox" value="">Вэбсайт</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="">Мобильный трафик</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="">E-mail маркетинг</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="">Баннера</label>
					</div>
					
				</div><!--Block-->
				
			</div><!--col-sm-3-->
			
			<div class="col-sm-9">
				
				<div class="BlockPadding">
					<div class="row">
					<div class="col-md-5">
						<h5>Все офферы </h5>
						
					</div>
					<div class="col-md-7 Sort">
					
						
						<button class="btn UpDown"><span class="glyphicon glyphicon-arrow-up"></span><span class="glyphicon glyphicon-arrow-down"></span></button>
						<div class="Select">
					<select class="selectpicker show-tick form-control" multiple="" style="display: none;">
						<option>Страна</option>
						<option>Цена</option>
						<option>Сообразить по фильтрам</option>
					</select>
					</div><!--Select-->
					<span class="simpletext hidden-xs">сортировать по:</span>
						
					</div>
					</div>
				</div><!--Block-->
			
				<div class="Offer">
					
					<div class="OfferInclude New">
						<div class="Badges">новый</div>
						<a href="product.php" class="btn OnBtn hidden-xs ">Подключить</a>
						<div class="row">
						<div class="col-md-3 OfferImg">
							<a href="product.php"><img data-large="img/product-1.jpg" src="img/product-1.jpg" alt="img" class="main-img img-responsive" /></a>
							<p class="Only"><span>только для мобильных</span></p>
							<div class="LandingLink">
								<a href="#">http://website.com</a>
							</div><!--LandingLink-->
							<div class="Rate"><img src="img/rate.png" alt="rate" width="83" height="15" /></div>
						</div>
						<div class="col-md-5 Description">
							<div class="DescriptionInclude">
							<div class="Title">
							<h3><a href="product.php">Он-лайн игра Amala</a></h3>
							<small><span class="glyphicon  glyphicon-calendar"></span>
							<a href=""> 22 сентября</a></small>
						
							<small><span class="glyphicon glyphicon-tags"></span>
							<a href=""> он-лайн игры</a></small>
							</div><!--Title-->
							<table id="OfferDescriptionTable" class="table table-striped ">
							<tr>
								<td>eCPC:</td>
								<td>8%</td>
								<td><span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></td>
							</tr>
							<tr>
								<td>Время жизни Cookie:</td>
								<td>30 дней</td>
								<td><span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></td>
							</tr>
							<tr>
								<td>Холд:</td>
								<td>14 дней</td>
								<td><span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></td>
							</tr>
							
							<tr>
								<td>CR:</td>
								<td>2 %</td>
								<td><span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></td>
							</tr>
							<tr>
								<td>Апрув:</td>
								<td>14 дней </td>
								<td><span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></td>
							</tr>
							
						</table>
							</div><!--Description-->
						</div><!--col-sm-5-->
						<div class="col-md-4 OfferPrices">
							<table class="table ">
							<tr>
								<td>Подтверждение заказа:</td>
								<td class="text-right price">620 <span class="glyphicon glyphicon-ruble"></span></td>
								
							</tr>
							<tr>
								<td>Цена на лэндинге:</td>
								<td class="text-right price">1 620 <span class="glyphicon glyphicon-ruble"></span></td>
								
							</tr>
						</table>
						<div class="MobleButton text-right hidden-md hidden-lg hidden-sm">
							<a href="product.php" class="btn ">Подключить</a>
						</div>
						
						</div><!--OfferPrices-->
						
					</div><!--row-->
					</div><!--OfferInclude-->
					<div class="row ">
						<div class="col-md-12 ">
						<div class="DescriptionMore">
						<div class="collapse" id="collapse1">
						<div class="CollapseInclude">
	          				
	          				<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#description" aria-controls="home" role="tab" data-toggle="tab">Описание</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Условия</a></li>
    <li role="presentation"><a href="#geo" aria-controls="messages" role="tab" data-toggle="tab">Гео</a></li>
    <li role="presentation"><a href="#banners" aria-controls="settings" role="tab" data-toggle="tab">Баннера</a></li>
  </ul>
	          				
	          				<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="description">
	  <p>Мы уверены в качестве часов и гарантируем отсутствие дефектов связанных с внутренним механизмом часов.
Если покупка не оправдает Ваших ожиданий, Вы можете вернуть или обменять ее в течение 14 дней после получения товара.
Если возникнут дефекты механизма в течение 365 дней, то мы обменяем часы бесплатно!
Гарантия доставки. Все наши посылки застрахованы и отправляются надежной курьерской кампанией прямо до вашей двери.
Все посылки отправляются с описью. Это означает, что Вы имеете возможность осмотреть их перед оплатой</p>
  </div><!--description-->
  <div role="tabpanel" class="tab-pane fade" id="profile">...</div>
  <div role="tabpanel" class="tab-pane fade" id="geo">...</div>
  <div role="tabpanel" class="tab-pane fade" id="banners">...</div>
</div>
	          				
		          		</div><!--collapse-->
						</div><!--CollapseInclude-->	
		          		<div class="text-right ShowHide">
        				<button class="btn " type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapseExample">
	        				<span class="More">подробнее</span> <span class="glyphicon glyphicon-menu-down"></span>
          				</button>
		          		</div>
						</div><!--DescriptionMore-->
						</div><!--DescriptionMore-->
					</div><!--col-md-12-->
				</div><!--Offer-->
				
				<div class="Offer">
					
					<div class="OfferInclude Exs">
						<div class="Badges">эксклюзив</div>
						<a href="product.php" class="btn OnBtn">Подключить</a>
						<div class="row">
						<div class="col-md-3 OfferImg">
							<a href="product.php"><img data-large="img/product-1.jpg" src="img/product-3.jpg" alt="img" class="main-img img-responsive" /></a>
							
							<div class="LandingLink">
								<a href="#">http://website.com</a>
							</div><!--LandingLink-->
							<div class="Rate"><img src="img/rate.png" alt="rate" width="83" height="15" /></div>
						</div>
						<div class="col-md-5 Description">
							<div class="DescriptionInclude">
							<div class="Title">
							<h3><a href="product.php">Билайн Локатор. Целевая конверсия – Ребилл абонента (факт списания денег со счета абонента)</a></h3>
							<small><span class="glyphicon  glyphicon-calendar"></span>
							<a href=""> 22 сентября</a></small>
						
							<small><span class="glyphicon glyphicon-tags"></span>
							<a href=""> он-лайн игры</a></small>
							</div><!--Title-->
							<table id="OfferDescriptionTable" class="table table-striped ">
							<tr>
								<td>eCPC:</td>
								<td>8%</td>
								<td><span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></td>
							</tr>
							<tr>
								<td>Время жизни Cookie:</td>
								<td>30 дней</td>
								<td><span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></td>
							</tr>
							<tr>
								<td>Холд:</td>
								<td>14 дней</td>
								<td><span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></td>
							</tr>
							
							<tr>
								<td>CR:</td>
								<td>2 %</td>
								<td><span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></td>
							</tr>
							<tr>
								<td>Апрув:</td>
								<td>14 дней </td>
								<td><span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></td>
							</tr>
							
						</table>
							</div><!--Description-->
						</div><!--col-sm-5-->
						<div class="col-md-4 OfferPrices">
							<table class="table ">
							<tr>
								<td>Подтверждение заказа:</td>
								<td class="text-right price">620 <span class="glyphicon glyphicon-ruble"></span></td>
								
							</tr>
							<tr>
								<td>Цена на лэндинге:</td>
								<td class="text-right price">1 620 <span class="glyphicon glyphicon-ruble"></span></td>
								
							</tr>
						</table>
						
						
						</div><!--OfferPrices-->
						
					</div><!--row-->
					</div><!--OfferInclude-->
					<div class="row ">
						<div class="col-md-12 ">
						<div class="DescriptionMore">
						<div class="collapse" id="collapse2">
						<div class="CollapseInclude">
	          				
	          				<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#description" aria-controls="home" role="tab" data-toggle="tab">Описание</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Условия</a></li>
    <li role="presentation"><a href="#geo" aria-controls="messages" role="tab" data-toggle="tab">Гео</a></li>
    <li role="presentation"><a href="#banners" aria-controls="settings" role="tab" data-toggle="tab">Баннера</a></li>
  </ul>
	          				
	          				<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="description">
	  <p>Мы уверены в качестве часов и гарантируем отсутствие дефектов связанных с внутренним механизмом часов.
Если покупка не оправдает Ваших ожиданий, Вы можете вернуть или обменять ее в течение 14 дней после получения товара.
Если возникнут дефекты механизма в течение 365 дней, то мы обменяем часы бесплатно!
Гарантия доставки. Все наши посылки застрахованы и отправляются надежной курьерской кампанией прямо до вашей двери.
Все посылки отправляются с описью. Это означает, что Вы имеете возможность осмотреть их перед оплатой</p>
  </div><!--description-->
  <div role="tabpanel" class="tab-pane fade" id="profile">...</div>
  <div role="tabpanel" class="tab-pane fade" id="geo">...</div>
  <div role="tabpanel" class="tab-pane fade" id="banners">...</div>
</div>
	          				
		          		</div><!--collapse-->
						</div><!--CollapseInclude-->	
		          		<div class="text-right ShowHide">
        				<button class="btn " type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapseExample">
          <span class="More">подробнее</span> <span class="glyphicon glyphicon-menu-down"></span>
          				</button>
		          		</div>
						</div><!--DescriptionMore-->
						</div><!--DescriptionMore-->
					</div><!--col-md-12-->
				</div><!--Offer-->
				
				<div class="Offer">
					
					<div class="OfferInclude Soon">
						<div class="Badges">скоро</div>
						<a href="product.php" class="btn OnBtn">Подключить</a>
						<div class="row">
						<div class="col-md-3 OfferImg">
							<a href="product.php"><img data-large="img/product-4.jpg" src="img/product-4.jpg" alt="img" class="main-img img-responsive" /></a>
							
							<div class="LandingLink">
								<a href="#">http://website.com</a>
							</div><!--LandingLink-->
						</div>
						<div class="col-md-5 Description">
							<div class="DescriptionInclude">
							<div class="Title">
							<h3><a href="product.php">Концентрат Сывороточного Белка</a></h3>
							<small><span class="glyphicon  glyphicon-calendar"></span>
							<a href=""> 22 сентября</a></small>
						
							<small><span class="glyphicon glyphicon-tags"></span>
							<a href=""> он-лайн игры</a></small>
							</div><!--Title-->
							<table id="OfferDescriptionTable" class="table table-striped ">
							<tr>
								<td>eCPC:</td>
								<td>8%</td>
								<td><span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></td>
							</tr>
							<tr>
								<td>Время жизни Cookie:</td>
								<td>30 дней</td>
								<td><span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></td>
							</tr>
							<tr>
								<td>Холд:</td>
								<td>14 дней</td>
								<td><span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></td>
							</tr>
							
							<tr>
								<td>CR:</td>
								<td>2 %</td>
								<td><span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></td>
							</tr>
							<tr>
								<td>Апрув:</td>
								<td>14 дней </td>
								<td><span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></td>
							</tr>
							
						</table>
							</div><!--Description-->
						</div><!--col-sm-5-->
						<div class="col-md-4 OfferPrices">
							<table class="table ">
							<tr>
								<td>Подтверждение заказа:</td>
								<td class="text-right price">620 <span class="glyphicon glyphicon-ruble"></span></td>
								
							</tr>
							<tr>
								<td>Цена на лэндинге:</td>
								<td class="text-right price">1 620 <span class="glyphicon glyphicon-ruble"></span></td>
								
							</tr>
						</table>
						
						
						</div><!--OfferPrices-->
						
					</div><!--row-->
					</div><!--OfferInclude-->
					<div class="row ">
						<div class="col-md-12 ">
						<div class="DescriptionMore">
						<div class="collapse" id="collapse3">
						<div class="CollapseInclude">
	          				
	          				<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#description" aria-controls="home" role="tab" data-toggle="tab">Описание</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Условия</a></li>
    <li role="presentation"><a href="#geo" aria-controls="messages" role="tab" data-toggle="tab">Гео</a></li>
    <li role="presentation"><a href="#banners" aria-controls="settings" role="tab" data-toggle="tab">Баннера</a></li>
  </ul>
	          				
	          				<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="description">
	  <p>Мы уверены в качестве часов и гарантируем отсутствие дефектов связанных с внутренним механизмом часов.
Если покупка не оправдает Ваших ожиданий, Вы можете вернуть или обменять ее в течение 14 дней после получения товара.
Если возникнут дефекты механизма в течение 365 дней, то мы обменяем часы бесплатно!
Гарантия доставки. Все наши посылки застрахованы и отправляются надежной курьерской кампанией прямо до вашей двери.
Все посылки отправляются с описью. Это означает, что Вы имеете возможность осмотреть их перед оплатой</p>
  </div><!--description-->
  <div role="tabpanel" class="tab-pane fade" id="profile">...</div>
  <div role="tabpanel" class="tab-pane fade" id="geo">...</div>
  <div role="tabpanel" class="tab-pane fade" id="banners">...</div>
</div>
	          				
		          		</div><!--collapse-->
						</div><!--CollapseInclude-->	
		          		<div class="text-right ShowHide">
        				<button class="btn " type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseExample">
          <span class="More">подробнее</span> <span class="glyphicon glyphicon-menu-down"></span>
          				</button>
		          		</div>
						</div><!--DescriptionMore-->
						</div><!--DescriptionMore-->
					</div><!--col-md-12-->
				</div><!--Offer-->
				
				<div class="Offer">
					
					<div class="OfferInclude Private">
						<div class="Badges">приватный</div>
						<a href="product.php" class="btn OnBtn">Подключить</a>
						<div class="row">
						<div class="col-md-3 OfferImg">
							<a href="product.php"><img data-large="img/product-4.jpg" src="img/product-4.jpg" alt="img" class="main-img img-responsive" /></a>
							
							<div class="LandingLink">
								<a href="#">http://website.com</a>
							</div><!--LandingLink-->
						</div>
						<div class="col-md-5 Description">
							<div class="DescriptionInclude">
							<div class="Title">
							<h3><a href="product.php">Концентрат Сывороточного Белка</a></h3>
							<small><span class="glyphicon  glyphicon-calendar"></span>
							<a href=""> 22 сентября</a></small>
						
							<small><span class="glyphicon glyphicon-tags"></span>
							<a href=""> он-лайн игры</a></small>
							</div><!--Title-->
							<table id="OfferDescriptionTable" class="table table-striped ">
							<tr>
								<td>eCPC:</td>
								<td>8%</td>
								<td><span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></td>
							</tr>
							<tr>
								<td>Время жизни Cookie:</td>
								<td>30 дней</td>
								<td><span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></td>
							</tr>
							<tr>
								<td>Холд:</td>
								<td>14 дней</td>
								<td><span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></td>
							</tr>
							
							<tr>
								<td>CR:</td>
								<td>2 %</td>
								<td><span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></td>
							</tr>
							<tr>
								<td>Апрув:</td>
								<td>14 дней </td>
								<td><span class="Question" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Время на которое пользователь будет привязан к сессии">?</span></td>
							</tr>
							
						</table>
							</div><!--Description-->
						</div><!--col-sm-5-->
						<div class="col-md-4 OfferPrices">
							<table class="table ">
							<tr>
								<td>Подтверждение заказа:</td>
								<td class="text-right price">620 <span class="glyphicon glyphicon-ruble"></span></td>
								
							</tr>
							<tr>
								<td>Цена на лэндинге:</td>
								<td class="text-right price">1 620 <span class="glyphicon glyphicon-ruble"></span></td>
								
							</tr>
						</table>
						
						
						</div><!--OfferPrices-->
						
					</div><!--row-->
					</div><!--OfferInclude-->
					<div class="row ">
						<div class="col-md-12 ">
						<div class="DescriptionMore">
						<div class="collapse" id="collapse3">
						<div class="CollapseInclude">
	          				
	          				<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#description" aria-controls="home" role="tab" data-toggle="tab">Описание</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Условия</a></li>
    <li role="presentation"><a href="#geo" aria-controls="messages" role="tab" data-toggle="tab">Гео</a></li>
    <li role="presentation"><a href="#banners" aria-controls="settings" role="tab" data-toggle="tab">Баннера</a></li>
  </ul>
	          				
	          				<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="description">
	  <p>Мы уверены в качестве часов и гарантируем отсутствие дефектов связанных с внутренним механизмом часов.
Если покупка не оправдает Ваших ожиданий, Вы можете вернуть или обменять ее в течение 14 дней после получения товара.
Если возникнут дефекты механизма в течение 365 дней, то мы обменяем часы бесплатно!
Гарантия доставки. Все наши посылки застрахованы и отправляются надежной курьерской кампанией прямо до вашей двери.
Все посылки отправляются с описью. Это означает, что Вы имеете возможность осмотреть их перед оплатой</p>
  </div><!--description-->
  <div role="tabpanel" class="tab-pane fade" id="profile">...</div>
  <div role="tabpanel" class="tab-pane fade" id="geo">...</div>
  <div role="tabpanel" class="tab-pane fade" id="banners">...</div>
</div>
	          				
		          		</div><!--collapse-->
						</div><!--CollapseInclude-->	
		          		<div class="text-right ShowHide">
        				<button class="btn " type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseExample">
          <span class="More">подробнее</span> <span class="glyphicon glyphicon-menu-down"></span>
          				</button>
		          		</div>
						</div><!--DescriptionMore-->
						</div><!--DescriptionMore-->
					</div><!--col-md-12-->
				</div><!--Offer-->
				
			</div><!--col-sm-9-->
			
		</div><!--row-->
		<div class="col-md-9 col-md-offset-3">
			<ul class="pagination">
			<li class="disabled"><a href="#">«</a></li>
			<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">»</a></li>
		</ul>
		</div>
	</div><!--container-->
	
	
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/modal.html'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']. '/templates/footer.html'); ?>
			
</body>
</html>