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
<style type="text/css">
  .block{
    width: 180%;
  }
</style>
<body>
    <div id="wrapper">
        <div id="content">
                  <?php
                    require_once "blocks/header.php"
                  ?>

  <!-- основаная часть слева -->
       <div id="main">
          <div id="news">
            <h2 class="heading"> Поддержать проект</h2>
            <div style="clear: both;"><br></div>

            <!-- РЕКЛАМА -->
         
         <div class="block">
          <strong>Рекламные площадки:</strong>
           <ul>
             <li>Информационно-развлекательный портал - <a href="https://itPro.com" target="_blank" >itPro</a></li>
             <li><noindex><a href="https://www.Youtube.com/user/PlurrimiTube"rel="nofollow"target = "_blank">YouTube канал</a></noindex></li>
             <li><noindex><a href="https://vk.com/prog_life" rel="nofollow" target="_blank">Группа Вконтакте</a></noindex></li>
           </ul><br>

          <h2>Наши реквизиты</h2>
            <ul>
               <li>Qiwi - 892323527219603003</li>
               <li>Сбербанк Оналайн - 465482131387982326548</li>
               <li>Yandex money - 879862321654896363645</li>
               <li>Webmoney - 29684897523215618</li>
            </ul>

            <br><h2>Контакты</h2>
            <ul>
              <li><i class="fas fa fa-phone">+38 (067) 469-08-51</i></li>
              <li><i class="fas fa fa-envelope"> help@itpro.com</i></li>
            </ul>





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