<!--форма авторизации -->

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Форма авторизации</title>
	<link rel="stylesheet" type="text/css" href="css/vhod.css">
	<link href="css/fontawesome.min.css" rel="stylesheet">
</head>
<body>
   <div class="container">

   	 
   	 <?php
        if($_COOKIE['user'] == ''):
     ?>
    
 <div class="col">

  <img src="https://dwstroy.ru/lessons/les3373/demo/img/men.png">

         <form action="auth.php" method="post">

              <div class="dws-input">
                   <input type="text" class="from-control" name="login" id="login" placeholder="Введите логин"><br>
             </div>


            <div class="dws-input">
                  <input type="password" class="from-control" name="pass" id="pass" placeholder="Введите пароль"><br>
            </div>


        <input class="dws-submit" type="submit" name="submit" value="ВОЙТИ"><br />  

              <a href="#">Восстановить пароль</a>

         </form>   
    </div>


<?php else: ?>

<p>Добро пожаловать, <?=$_COOKIE['user']?>!. Чтобы выйти в нажмите <a href="/exit.php">здесь</a>.</p>

<?php endif;?>

</div>

</body>
</html>