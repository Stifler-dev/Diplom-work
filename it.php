<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>itPro - сайт для разработчиков</title>
	 <link rel="stylesheet"  href="css/main.css" type="text/css" charset="utf-8">
    <link rel="stylesheet"  href="css/main_page.css" type="text/css" charset="utf-8">
    <link rel="stylesheet"  href="css/aside.css" type="text/css" charset="utf-8">
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
            <h2 class="heading"> IT Статьи</h2>
            <div style="clear: both;"><br></div>

              <!-- статьи -->
            
                     <div class="article">
                      <img src="https://vuejsdevelopers.com/images/posts/es6_vue.jpg" alt="test" title="JavaScript">
                     <a href="/js" title="JavaScript">программирования на JavaScript</a>
                    </div>

                    <div class="article">
                      <img src="https://colorlib.com/wp/wp-content/uploads/sites/2/creative-css3-tutorials.jpg" alt="test" title="CSS3">
                      <a href="/css3" title="CSS3">Изучения основ стилей CSS3</a>
                    </div>

                     <div class="article">
                      <img src="https://miro.medium.com/max/800/1*28-1lYrYTQoLhi87mllgBw.png" alt="test" title="HTML">
                      <a href="" title="HTML">Изучения основных тегов HTML</a>
                    </div>
                     
                      <div class="article">
                      <img src="https://unity3dschool.ru/wp-content/uploads/2019/09/unity3dschool-ru-home.jpg" alt="test" title="Unity3d">
                      <a href="" title="unity3d">Разработка игр на Unity3d</a>
                    </div>

                    <div class="article">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVarV57aVr0Q-opZrCE7KcKpFYvY9hidPVoWQtQmkJ5hrGMZls&s" alt="test" title="test">
                      <a href="" title="GitHub">как пользоваться GitHub</a>
                    </div>
                     
                       <div class="article">
                      <img src="https://topchick.info/wp-content/uploads/2019/07/php-illustration.png" alt="test" title="PHP 7">
                      <a href="" title="PHP 7">программирование на языке PHP</a>
                    </div>
                     
              
              <a href="" title="посмотреть больше статей">
                    <div class="btn">
                      посмотреть больше
                   </div>
              </a>
          </div>
      </div>

      <!-- основаная часть справа -->
      <?php
         require_once "blocks/aside.php"
       ?>


     <!-- низ сайта  -->
     
     <div id="subscribe">
          <span>Подпишитесь чтобы быть в курсе всех новостей</span>
          <div style="clear: both;"><br></div>

          <!-- VK Widget -->
        <script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>
        <div id="vk_groups"></div>
        <script type="text/javascript">
        VK.Widgets.Group("vk_groups", {mode: 3, width: "500"}, 54530371);
        </script>
        <div style="clear: both;"><br></div>


         <!-- faceBook widget  -->
         <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=350&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>


           <!-- twitter widget  -->
            <a class="twitter-timeline" data-width="350" data-height="400" href="https://twitter.com/ItPro68092106?ref_src=twsrc%5Etfw">Tweets by ItPro68092106</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

     </div>
     
      <div id="sub_to_project">
         <span class="heading">Подпиcаться на проект</span>
          <div style="clear: both;"><br></div>
          <p>Чтобы получить доступ ко всем функциям сайта оформите подписку на проект</p>
            <a href="" title="посмотреть информацию о подписке на проект">
                    <div class="btn">
                      Узнать детальнее о подписке
                   </div>
              </a>
               <div style="clear: both;"><br></div>
               <h2 class="heading"> создание онлайн магазина</h2>
                  <div style="clear: both;"><br></div>
                  <img src="http://biz911.net/upload/medialibrary/7d0/%D0%BA%D0%B0%D0%BA%20%D0%BE%D1%82%D0%BA%D1%80%D1%8B%D1%82%D1%8C%20%D1%81%D0%B2%D0%BE%D0%B9%20%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%BD%D0%B5%D1%82-%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD.PNG">
            </div>
             <div style="clear: both;"><br></div>

            <div id="web_sites">
              <span>Хотите создать сайт?</span>
               <a href="" title="Заказать сайт">
                    <div class="btn">
                      Заказать сайт
                   </div>
              </a>
            </div>

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