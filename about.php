<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	

      <link rel="stylesheet" href="css/style.css">
	<title>Контактная форма</title>
	
	</head>
	<body>
	<?php require "blocks/header.php" ?>
		<div class="container nt-5">
			
			<div class="right-page-block">
						<h4 class="heading">Как с нами связаться</h4>
						<p>По всем интересующим вопросам обращаться к директору!</p>
		        		
		        		<ul class="address-block">
		        			<li class="address">Город Санкт-Петербург, пр.Энгельса д. 129 к.4</li>
		        			<li class="phone">8(48-239)3-14-72</li>
		        			<li class="mobile">+79301560689</li>
		        			<li class="email"><a href="mailto:nastya1.orlova2015@yandex.ru">Почта директора</a></li>
							<a href="https://vk.com/orlik_a" target="_blank"><i class="fa fa-vk" aria-hidden="true"
   onclick="this.href='https://vk.com/orlik_a'" target="_blank"><i class="fa fa-vk" aria-hidden="true">
   Добавить в ВКонтакт</a>
		        		</ul>
				
					</div>
					
		<form action="check.php" method="post">
			<input type="email" name="email" placeholder="Введите Email" class="form-control"><br>
			<textarea name="massage" class="form-control" placeholder="Введите ваше сообщение"></textarea><br>
			<button type="submit" name="send" class="btn btn-success" >Отправить</button>
		</form>
		</div>
		<div class="row contacts">
	<div class="col-lg-6 contacts__text">
		<div class="contacts__box">
			<div class="contacts__icon">
 <i class="fa fa-map-marker" aria-hidden="true"></i>
			</div>
			
		</div>
	</div>
	<div class="col-lg-6 contacts_form">
	</div>
	
</div>
	  <?php require "blocks/footer.php" ?>
</body>
</html>