<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Форма регистрации</title>
	<link rel="stylesheet" href="css/reg.css">
</head>
<body>
	<div class="container mt-4">

       <div class="row">
        <div class="col">

     <img src="https://dwstroy.ru/lessons/les3373/demo/img/men.png">

        <form action="reg.php" method="post">

            <div class="dws-input">
           	   <input type="text" class="from-control" name="login" id="login" placeholder="Введите логин"><br>
            </div>

             <div class="dws-input">
           	    <input type="text" class="from-control" name="name" id="name" placeholder="Введите имя"><br>
            </div>

            <div class="dws-input">
           	    <input type="password" class="from-control" name="pass" id="pass" placeholder="Введите пароль"><br>
            </div>
          
            <input class="dws-submit" type="submit" name="submit" value="Зарегистрироваться"><br />

        </form>
</div>


<?php
		$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);//фильтр вар принимает ту строку которую необходимо отфильтровать,вторым парамтеротм принимает тип    фильтрации,функция trim удаляет лишние проблеы
		$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
		$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

		if(mb_strlen($login) <5 || mb_strlen($login) > 90)
		{
			echo "Недопустимая длина логина";
			exit();
		}

		else if(mb_strlen($name)<3 || mb_strlen($name) >50)
		{
			echo "Недопустимая длина имени";
			exit();
		}
		else if(mb_strlen($pass)<3 || mb_strlen($pass) >6)
		{
			echo "Недопустимая длина пароля (от 3 до 6 символов должен содержать пароль)";
			exit();
		}

		$pass = md5($pass."fhsfwfaagfhh2345");

		$mysql = new mysqli('localhost','root','','register-bd');

		$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES( '$login', '$pass','$name')");

		$mysql->close();

		header('Location: /');
?>
</div>
</div>
</body>
</html>
<!--форма регистрации -->
