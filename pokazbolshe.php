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
     <link rel="stylesheet"  href="css/pokazbolshe.css" type="text/css" charset="utf-8">
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
            <h2 class="heading">IT статьи</h2>
            <div style="clear: both;"><br></div>

              <!-- статьи -->

                   <div class="article2">
                     <img src="img/pg.png" alt="Как стать богатым программистом?" title="Как стать богатым программистом?">
                     <a href="/page_1" title="JavaScript">Как стать богатым программистом?</a>
                     <span>Существует несколько общепринятых стратегий для повышения доходности в сфере программирования. В статье мы расскажем про 3 действенных способа стать более богатым разработчиком </span>
                    </div>

                    <div class="article2">
                     <img src="img/old.png" alt="Нужны ли программисты за 40?" title="Нужны ли программисты за 40?">
                      <a href="/page_2" title="CSS3">Кому «за 40»: нужны ли такие программисты IT-компаниям?</a>
                      <span>Ходят слухи, что после 40 лет у разработчиков ПО уже нет будущего в своей сфере. И что все возрастные  IT-специалисты вынуждены переходить в менджент.</span>
                    </div>

                     <div class="article2">
                      <img src="img/go.png" alt="GO" title="GO">
                      <a href="/page_3" title="HTML">В чем секрет языка GO?</a>
                      <span>Вы знали, что заработок Golang-разработчиков выше, чем у других? И что в будущем многие проекты будут реализовываться именно на нем? Сейчас мы выясним почему Golang стал таким востребованным!</span>
                    </div>
                     
                      <div class="article2">
                      <img src="img/jvsk.png" alt="Java vs Kotlin" title="Java vs Kotlin">
                      <a href="/page_4" title="Java vs Kotlin">Java vs Kotlin: кто же круче?</a>
                      <span>Kotlin создавали как аналог Java. И есть мнение, что этот ученик имеет все шансы превзойти своего учителя. Мы задались вопросом, кто круче и за кем будущее Android разработки?</span>
                    </div>

                    <div class="article2">
                      <img src="img/java1.png" alt=" 8 любопытных фактов о Java"title="8 любопытных фактов о Java">
                      <a href="/page_5" title="Java">8 любопытных фактов о Java</a>
                      <span>В 1995 году Sun Microsystems выпустили объектно-ориентированную среду программирования Java. И сейчас этот язык стал одним из самых популярных во всем мире.</span>
                    </div>
                     
                       <div class="article2">
                        <img src="img/wml.png" alt="Что выбрать: сравнение Windows, Mac и Linux" title="Что выбрать: сравнение Windows, Mac и Linux">
                      <a href="/page_6" title="Mac и Linux">Cравнение: Windows, Mac и Linux</a>
                      <span>Многие пользуются Windows по одной простой причине: так привычнее. Но не нужно забывать, что выбор есть всегда. И в данном случае это вопрос не только вкуса, но и профессионализма.</span>
                    </div>




                    <div class="article2">
                     <img src="img/data.png" alt="Как стать богатым программистом?" title="Как стать богатым программистом?">
                     <a href="/page_7" title="6 крупных Data Science проектов с открытым исходным кодом">6 крупных Data Science проектов с открытым исходным кодом</a>
                     <span>Data Science – это не просто новое модное IT-направление, а наука, которая совсем скоро кардинально изменит наш мир. В статье мы узнаем про 6 крутых проектов в этой сфере.</span>
                    </div>

                    <div class="article2">
                     <img src="img/old.png" alt="Нужны ли программисты за 40?" title="Нужны ли программисты за 40?">
                      <a href="/old" title="CSS3">Нужны ли программисты за 40?</a>
                    </div>

                     <div class="article2">
                      <img src="img/go.png" alt="GO" title="GO">
                      <a href="/go" title="HTML">В чем секрет языка GO?</a>
                    </div>
                     
                      <div class="article2">
                      <img src="img/jvsk.png" alt="Java vs Kotlin" title="Java vs Kotlin">
                      <a href="/jvsk" title="Java vs Kotlin">Java vs Kotlin: кто же круче?</a>
                    </div>

                    <div class="article2">
                      <img src="img/java1.png" alt=" 8 любопытных фактов о Java"title="8 любопытных фактов о Java">
                      <a href="/8factov" title="Java">8 любопытных фактов о Java</a>
                    </div>
                     
                       <div class="article2">
                        <img src="img/wml.png" alt="Что выбрать: сравнение Windows, Mac и Linux" title="Что выбрать: сравнение Windows, Mac и Linux">
                      <a href="/wml" title="Mac и Linux">Cравнение: Windows, Mac и Linux</a>
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