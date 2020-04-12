<?php 
   $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);

   $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

   $pass = md5($pass."fhsfwfaagfhh2345");

   $mysql = new mysqli('localhost','root','','register-bd');


     //получее данных с бд

     $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass' ");

     $user = $result->fetch_assoc();

     if(count($user)==0)
     {
     	echo "такой пользователь не найден";
     	exit();
     }

     setcookie('user', $user['name'], time() + 3600, "/");
    
     $mysql->close();
     
     header('Location: vhod.php');
?>
 <!--php код авторизации -->