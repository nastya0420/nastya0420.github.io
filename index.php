<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<title> АНстрой</title>
	</head>
	<body>
		
	<?php require "blocks/header.php" ?>
	  </div>
		<div class="container mt-5">
			<h5 class >Строительство дома перестанет быть для Вас неразрешимой задачей. Наша команда высококвалифицированных специалистов спроектирует дом вашей мечты. Мы поможем правильно сформулировать цели и идеи строительства, отделочных работ, предоставим техническое задание. Стоимость работ приятно удивит, и Вам точно не придется сомневаться в их качестве.</h5>
			<div class="d-flex flex-wrap">
			<?php
			for($i = 0; $i < 3; $i++):
				?>
				<div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Лучшие постройки</font></font></h4>
      </div>
      <div class="card-body">
		  <img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">"АНстрой", сделай правильный выбор!</font></font></li>
        </ul>
		  <a class="btn btn-outline-primary" href="index1.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Оставить отзыв</font></font></a>
      </div>
    </div>
				<?php endfor; ?>
			</div>		
    </div>
  </div>
</div>
		</div>
<?php require "blocks/footer.php" ?>
</body>
</html>