<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/sstyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<title> АНстрой</title>
	</head>
	<body>
		<?php require "blocks/header.php" ?>
<?php
$dbc = mysqli_connect('localhost', 'root', '', 'lesson');
if(!isset($_COOKIE['user_id'])){
	if(isset($_POST['submit'])){
		$user_username = mysqli_real_escape_string($dbc, trim($_POST['
		username']));
		$user_password = mysqli_real_escape_string($dbc, trim($_POST['
		password']));
		if(!empty($user_username) && !empty($user_password)){
			$query = "SELECT `user_id` , `username` FROM `signup` WHERE 
			       username = '$user_username' AND password = SHA('$
				   user_password')";
			$data = mysqli_query($dbc,$query);
			if(mysqli_num_rows($data) == 1){
				$row = mysqli_fetch_assoc($data);
				setcookie('user_id', $row['user_id'], time() + (60*60*24*30))
					;
				setcookie('username', $row['username'], time() + (60*60*24*30))
					;
				$home_url = 'http://' . $_SERVER['HTTP_HOST'];
				header('Location: '. $home_url);
			}
			else {
				echo 'Извините, вы должны ввести правильно имя пользователя и пароль';
			}
		}
		else{
			echo 'Извините, выдолжны заполнить поля правильно';
		}
	}
}
?>
<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="css/sstyle.css">
	<link rel="stylesheet"
</head>
	<body>
	<section>
	<?php
		if(empty($COOKIE['username'])){
	?>		
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<label for="username">Логин:</label>
		<input type="text" name="username">
		
		<label for="password">Пароль:</label>
		<input type="password" name="password">
		<button type="submit" name="submit">Вход</button>
			<a href="signup.php">Регистрация</a>
		    <p><a href="exit.php">Выйти</a></p>
		</form>
	<?php
	}
	else {
		?>
		
	<?php
	}
	?>
		</section> 
		<?php require "blocks/footer.php" ?>
</body>
</html>