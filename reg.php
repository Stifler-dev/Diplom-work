<!--форма регистрации -->

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

        <form action="check.php" method="post">

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

</div>
</div>
</body>
</html>