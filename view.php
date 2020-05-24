<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<?php
	$title = "Построенные объекты";
	require_once "blocks/head.php";
	$news = getNews(1);
	?>
	<title> АНстрой</title>
	</head>
	<body>
		
	<?php require_once "blocks/header.php" ?>
		<div id="wrapper">
		 <div id="leftCol">
			 <?php
	for ($i = 0; $i < count($news); $i++){
		if($i == 0)
			echo "div id=\"bigArticle\">";
		else
			echo "<div class=\"article\">";
		    echo '<img src="/img/1.jpg" alt="Статья 1" title="Статья 1">
				 <h2>Статья 1</h2>
				 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				 <a href="/about.php">
				 <div class="more">Далее</div>
				 </a>
			 </div>';
		if($i == 0 )
			echo "<div class=\"cleaner\"><br></div>";
	}
		?>
			 
			 <!--<div class="clear"><br></div>
			 <div class="article">
				 <img src="/img/1.jpg" alt="Статья 1" title="Статья 1">
				 <h2>Статья 1</h2>
				 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				 <a href="/about.php">
				 <div class="more">Далее</div>
				 </a>
			 </div>-->

	
			
	
			 </div>
			</div>
		<?php require "blocks/footer.php" ?>
</body>
</html>