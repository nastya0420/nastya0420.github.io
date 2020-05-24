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

if(isset($_POST['submit'])){
	
	$username = mysqli_real_escape_string($dbc, trim($_POST['username']));
	$password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
	$password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
	if(!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2)) {
		$query = "SELECT * FROM `signup` WHERE username = '$username'";
		$data = mysqli_query($dbc, $query);
		if(mysqli_num_rows($data) == 0) {
		$query = "INSERT INTO `signup` (username, password) VALUES ('$username',  SHA('$password2'))";
		mysqli_query($dbc,$query);
		echo 'Все готово, можете авторизоваться';
			mysqli_close($dbc);	
			exit();
		}
		else {
			echo 'Логин уже существует';
			
		}
		
		}
	
 }
	
	
	
?>
<!doctype html>
<html>
<head>
	
	<link rel="stylesheet" href="css/stylle.css">
	<link rel="stylesheet" 


</head>
<body>
	
	<content>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="username">Введите ваш логин:</label>
		<input type="text" name="username">
		
		<label for="username">Введите ваш пароль:</label>
		<input type="password" name="password1">
		
		<label for="username">Введите пароль еще раз:</label>
		<input type="password" name="password2">
		<button type="submit" name="submit">Вход</button>
		
		</form>
		
	</content>
	<?php require "blocks/footer.php" ?>
</body>
</html>