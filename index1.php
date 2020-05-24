
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" href="css/sstyle.css">
	<title> АНстрой</title>
	</head>
	<body>
		
	<?php require "blocks/header.php" ?>
		<?php
require "db.php";
if (isset($_POST['send'])) {
	if (trim($_POST['name']) == "" || trim($_POST['message']) == "" || trim($_POST['email']) == ""){
		$err = "Введите все поля!";
	} else {
$koments = R::dispense('koments');
$koments->name = $_POST['name'];
$koments->email = $_POST['email'];
$koments->message = $_POST['message'];

R::store($koments);
header('location: /');
}
}
?>
	<form action="" method="post" class="form">
	    <input type="text" name="name" placeholder="Имя"><br><br>
	    <input type="text" name="email" placeholder="Email"><br><br>
		<textarea type="text" name="message" placeholder="Сообщение"></textarea>
	    <input type="submit" name="send">
		<?= '<div style="color: red">' .$err. '</div>' ?>
	</form>
		<?php $komen = mysqli_query($con, "SELECT * FROM `koments` ORDER BY `id`") ?>
		<?php while($kom = mysqli_fetch_assoc($komen)) {?>
	<div class="koment">
	     <img src="/icons/bricks.png">
		 <div class="name">
		<?= $kom['name'] ?><hr>
		<div class="message">
		<?= $kom['message'] ?>
			<input type="date">
		</div>
		</div>
	</div>
		
	<?php } 
		?>
		
</body>
</html>
