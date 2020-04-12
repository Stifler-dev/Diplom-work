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

<style type="text/css">
  #internet>a>img {
      height:220px;
      width: 520px;
      border: 4px solid #808080;
      transition: all.6s ease;
  }

   #internet>a>img:hover {
       border: 4px solid #e8622d;;
       transition: all.6s ease;
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
            <h2 class="heading"> IT Статьи</h2>
            <div style="clear: both;"><br></div>

              <!-- статьи -->
      
                    <div class="article">
                     <img src="img/pg.png" alt="Как стать богатым программистом?" title="Как стать богатым программистом?">
                     <a href="/page_1" title="JavaScript">Как стать богатым программистом?</a>
                    </div>

                    <div class="article">
                     <img src="img/old.png" alt="Нужны ли программисты за 40?" title="Нужны ли программисты за 40?">
                      <a href="/page_2" title="CSS3">Нужны ли программисты за 40?</a>
                    </div>

                     <div class="article">
                      <img src="img/go.png" alt="GO" title="GO">
                      <a href="/page_3" title="HTML">В чем секрет языка GO?</a>
                    </div>
                     
                      <div class="article">
                      <img src="img/jvsk.png" alt="Java vs Kotlin" title="Java vs Kotlin">
                      <a href="/page_4" title="Java vs Kotlin">Java vs Kotlin: кто же круче?</a>
                    </div>

                    <div class="article">
                      <img src="img/java1.png" alt=" 8 любопытных фактов о Java"title="8 любопытных фактов о Java">
                      <a href="/page_5" title="Java">8 любопытных фактов о Java</a>
                    </div>
                     
                       <div class="article">
                        <img src="img/wml.png" alt="Что выбрать: сравнение Windows, Mac и Linux" title="Что выбрать: сравнение Windows, Mac и Linux">
                      <a href="/page_6" title="Mac и Linux">Cравнение: Windows, Mac и Linux</a>
                    </div>
                     
             
              <a href="/menu" title="посмотреть больше статей">
                    <div class="btn" href="">
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
     <div style="clear: both;"><br></div>
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
           <a class="twitter-timeline" data-width="350" data-height="400" href="https://twitter.com/Nikita07759365?ref_src=twsrc%5Etfw">Tweets by Nikita07759365</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 

     </div>
     
      <div id="sub_to_project">
          <div style="clear: both;"><br></div>
         <span class="heading">Подпиcаться на проект</span>
          <div style="clear: both;"><br></div>
          <p>Чтобы получить доступ ко всем функциям сайта оформите подписку на проект</p>

            <a href="/podpiska" title="посмотреть информацию о подписке на проект">
                    <div class="btn">
                      Узнать детальнее о подписке
                   </div>
              </a>

               <div style="clear: both;"><br></div>
               <h2 class="heading"> создание онлайн магазина</h2>
                  <div style="clear: both;"><br></div>


                  <div id="internet">
                 <a href="/internet_magazin"><img src="img/internet.png"></a> </div>


            </div>
             <div style="clear: both;"><br></div>

            <div id="web_sites">
              <span>Хотите создать сайт?</span>
               <a href="/buysite" title="Заказать сайт">
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