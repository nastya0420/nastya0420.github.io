<!doctype html> 
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=API_KEY" type="text/javascript"></script>
	<script src="js/geo.js"></script> <!-- Разместим в этом скрипте все нужные нам скрипты -->
	<title> АНстрой</title>
	</head>
<body>
	<?php require "blocks/header.php" ?>
	<div id="map">
	<script type="text/javascript">

	ymaps.ready(init); 
	var myMap;
	
	function init() {
	
		myMap = new ymaps.Map("map", {
			center: [43.238253, 76.945465], // Координаты центра карты
			zoom: 13 // Маштаб карты
		}); 
	
		myMap.controls.add(
			new ymaps.control.ZoomControl()  // Добавление элемента управления картой
		); 
	
		myPlacemark = new ymaps.Placemark([43.238253, 76.945465], {}, {  // Координаты метки объекта
	preset: "twirl#skatingIcon" // Тип метки
});

myMap.geoObjects.add(myPlacemark);
	};
	
</script>
</div>
	<?php require "blocks/footer.php" ?>

</body>
</html>