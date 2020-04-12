<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>itPro - сайт для разработчиков</title>
   <link rel="stylesheet"  href="css/main.css" type="text/css" charset="utf-8">
    <link rel="stylesheet"  href="css/main_page.css" type="text/css" charset="utf-8">
    <link rel="stylesheet"  href="css/aside.css" type="text/css" charset="utf-8">
     <link rel="stylesheet"  href="css/videoCurs.css" type="text/css" charset="utf-8">
 
     <meta name="description" content="Информационно-развлекательный портал для программистов! Обучающие курсы,новости в сфере IT и многое другое">
     <meta name="keywords" content="itPro,it,курсы,новости,уроки">
     <meta name="viewport" content="width=device-width, initial=scale=1">
     <link href="img/favicon.ico" rel="shortcut icon"type="imge/x-icon">
     <link href="css/fontawesome.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
            <h2 class="heading">Видеокурсы</h2>
            <div style="clear: both;"><br></div>

              <!-- статьи -->
                   
                    <div class="article1">
                     <a href="/videocurs_page1">
                     <img src="img/kotlin.png" alt="Kotlin" title="Kotlin">
                    <a href="/videocurs_page1" title="Kotlin">Уроки по Kotlin c нуля урок №1</a>
                     <br><br><span>10 Уроков</span>
                   </div>
                    



                     <div class="article1">
                      <a href="/videocurs_page2">
                     <img src="img/sharp1.png" alt="C#" title="C#">
                    <a href="/videocurs_page2" title="C#">Уроки по С# с нуля Урок №1</a>
                     <br><br><span>9 Уроков</span>
                    </div>

                     
                      <div class="article1">
                     <a href="/videocurs_page3">
                     <img src="img/pyton.png" alt="Python" title="Python">
                    <a href="/videocurs_page3" title="pyton">Изучения Python для начинающих  </a>
                     <br><br><span> 21 Урок</span>
                    </div>

          
                    <div class="article1">
                     <a href="/videocurs_page5">
                     <img src="img/style.png" alt="CSS" title="CSS">
                    <a href="/videocurs_page5" title="CSS">Основные фичи CSS стилей</a>
                     <br><br><span>1 Урок</span>
                    </div>

                     
                       <div class="article1">
                       <a href="/videocurs_page6">
                     <img src="img/php7.png" alt="PHP7" title="PHP7">
                    <a href="/videocurs_page6" title="PHP7">Изучение языка программирования PHP</a>
                     <br><br><span>11 Уроков</span>
                    </div>
                     
        
                       <div class="article1">
                       <a href="/videocurs_page7">
                     <img src="img/c++.png" alt="PHP7" title="PHP7">
                    <a href="/videocurs_page7" title="C++">Изучение языка программирования C++</a>
                     <br><br><span>9 Уроков</span>
                    </div>
                     

          </div>
      </div>

      <!-- основаная часть справа -->
     

     <!-- низ сайта  -->
     
   

      <?php
           require_once "blocks/footer.php"
       ?>

   </div>
  
        <?php
           require_once "blocks/JS_scripts.php"
       ?>


  
</body>
</html>