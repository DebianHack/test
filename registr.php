<?php
include "config/db.php";
/*

1. Дизаин/мокап - done
2. Сделать отправку формы - done
3. Проверить если ли пользователь с таким email - done
4. Проверить заполнил ли пользователь поля формы - done
5. Поставить статус подписки 0, то есть не подписан
6. Если все шаги прошли, то 
	6.1 Добавить пользователя в БД - done

*/
// Проверка на существование, уникальность и заполнение почты и пароля
if(
	isset($_POST["email"]) && isset($_POST["password"])
	&& $_POST["email"] != "" && $_POST["password"] != ""
)
	{
		// Вставить в таблицу данные заданные при регистрации и статус подписки 0 (не подписан)
		$sql = "INSERT INTO polzovateli ( email,  password, name, status) VALUES ('".$_POST["email"]."', '".$_POST["password"] ."' , '".$_POST["name"]."','0')";
		
		if(mysqli_query($connect,$sql))
		{
			echo "<h2>Пользователь добавлен</h2>";
		}
		else
		{
			echo "<h2>Произошла ошибка</h2>" . mysqli_error($connect);
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php
	include "chast_site/shapka.php";
	?>

	<div id="content">
	<form action="registr.php" method="POST">
		<p>
			Введите ваше имя:<br/>
		<input type="text" name="name">
		</p>
		<p>
			Введите свой email:<br/>
		<input type="text" name="email">
		</p>

		<p>
			Введите свой пароль:<br/>
		<input type="password" name="password">
		</p>

		<p>
			<button type="submit">Зарегистрироваться</button>
		</p>
	</form>
	<a href="login.php">Авторизация</a>
</div>

</body>
</html>