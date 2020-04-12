 <!-- реклама  -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>itPro - сайт для разработчиков</title>
	    <link rel="stylesheet"  href="css/main.css" type="text/css" charset="utf-8">
    <link rel="stylesheet"  href="css/aside.css" type="text/css" charset="utf-8">
     <link rel="stylesheet"  href="css/form.css" type="text/css" charset="utf-8">
      <link rel="stylesheet"  href="css/kontakti.css" type="text/css" charset="utf-8">

     <meta name="description" content="Информационно-развлекательный портал для программистов! Обучающие курсы,новости в сфере IT и многое другое">
     <meta name="keywords" content="itPro,it,курсы,новости,уроки">
     <meta name="viewport" content="width=device-width, initial=scale=1">
     <link href="img/favicon.ico" rel="shortcut icon"type="imge/x-icon">
     <link href="css/fontawesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
</head>
<body>
    <div id="wrapper">
        <div id="content">
                  <?php
                    require_once "blocks/header.php"
                  ?>

  <!-- основаная часть слева -->
       <div id="main">
          <div id="news">
            <h2 class="heading"> Реклама</h2>
            <div style="clear: both;"><br></div>

            <!-- РЕКЛАМА -->
         
         <div class="block">
          <strong>Рекламные площадки:</strong>
           <ul>
             <li>Информационно-развлекательный портал - <a href="https://itPro.com" target="_blank" >itPro</a></li>
             <li><noindex><a href="https://www.Youtube.com/user/PlurrimiTube"rel="nofollow"target = "_blank">YouTube канал</a></noindex></li>
             <li><noindex><a href="https://vk.com/prog_life" rel="nofollow" target="_blank">Группа Вконтакте</a></noindex></li>
           </ul><br>

           <strong>Виды рекламы:</strong><br>
           <a href="https://itPro.com" target="_blank"></a>:
           <ul>
               <li>написание рекламной статьи и размещение ее на сайте;</li>
               <li>подготовка и публикация рекламных банеров на сайте;</li>
               <li>размещение вечных ссылок на ваш проект</li>
           </ul><br>
            <noindex><a href="https://www.Youtube.com/user/PlurrimiTube"rel="nofollow" target="_blank">YouTube канал</a></noindex>
            <ul>
                <li>небоьшое рекламное видео в начале/середине/в конце виедо;</li>
               <li>полноценный видеоролик более 10 минут;</li>
               <li>ссылка на ваш проект в шапке канала</li>
               <li>специальное предложение,которое обепечит максимальный приток клиентов _ размещение вашей рекламы на несколько дней (не более 14 дней) во всех новых видеороликах. Такая реклама и по скиде!</li>
            </ul><br>
            <noindex><a href="https://vk.com/prog_life"rel="nofollow" target="_blank">Группа Вконтакте</a></noindex>: размещение рекламного поста<br><br>
            Рекламу можно комбинировать и получать дополнитльеньые скидки! По вопросам рекламы обращайтесь через форк обратной свзяи ниже:
         </div>
           
          </div>
      </div>
      
 <!-- основаная часть справа -->

         <?php
           require_once "blocks/aside.php"
         ?>        
         <div style="clear: both;"><br></div>


     <!-- низ сайта  -->
      </div>
      <?php
           require_once "blocks/footer.php"
       ?>
      </div>


       <?php
           require_once "blocks/JS_scripts.php"
       ?>
</body>
</html>