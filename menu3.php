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

<style type="text/css">

#pages {
  float: right;
  width: 40%;
  margin-top: 10px;
  margin-bottom: 30px;
   margin-right: 1051px;
}

#pages>a>span{
  color: #e7e7e7;
  color: black;
}


#pages>a {
  border-radius: 60%;/*делаем круг*/
  -moz-border-radius: 60%;
  -webkit-border-radius: 60%;
  background-color: rgba(217, 91, 72, 1);/*заливаем задний фон круга*/
  margin-left: 3%;/*каждый будет иметь оступ по 2%*/
  width: 40px;/*ширина круга 30px*/
  height: 40px;/*высота круга 30px*/
  float: right;/*позицианируется справа*/
  color: white;
  text-align: center;/*текст внутри круга по центру*/
  line-height: 40px;/*текст внутри круга по центру*/

}


#pages>a:hover {
    background-color: #F08080;
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
            <h2 class="heading">IT статьи</h2>
            <div style="clear: both;"><br></div>

              <!-- статьи -->
            
                   <div class="article2">
                     <img src="img/ted.png" alt="" title="">
                     <a href="/page_12" title="">Самые интересные TED-видео о Data Science</a>
                     <span>Мы приготовили подборку лучших мотивирующих лекций, посвященных разным аспектам Data Science. Опубликованные в статье ссылки ведут на ролики с русскими субтитрами.</span>
                    </div>

                    <div class="article2">
                     <img src="img/legend.png" alt="" title="">
                      <a href="" title="">Легенды в IT: подборка лучших и влиятельных программистов мира</a>
                      <span>В целом профессия программиста очень уважаемая. Но как насчет личностей? Чьи достижения вызывают у нас наибольшее восхищение?</span>
                    </div>

                     <div class="article2">
                      <img src="img/open.png" alt="" title="">
                      <a href="" title="">OpenBCI: «взлом» мозга через нейрокомпьютерный интерфейс</a>
                      <span>Мы расскажем о проекте с открытым исходным кодом, который применяется при снятии электроэнцефалограмм. Информация для тех, кто интересуется разработкой ПО и нейробиологией.</span>
                    </div>
                     
                      <div class="article2">
                      <img src="img/10.png" alt="" title="">
                      <a href="" title="">10 перспективных IT-профессий ближайших лет </a>
                      <span>Современным миром управляют компьютерные технологии. Мы расскажем про 10 профессий, которые в ближайшем будущем точно будут востребованы.</span>
                    </div>

                    <div class="article2">
                      <img src="img/deno.png" alt=" 8 любопытных фактов о Java"title="8 любопытных фактов о Java">
                      <a href="" title="Java">Deno заменит Node.js?</a>
                      <span>Главная задача Deno – исправить недостатки Node.js. И, похоже, что новый проект уверенными шагами идёт к тому, чтобы сменить своего предшественника. Давайте узнаем о нем детальнее.</span>
                    </div>
                     
                       <div class="article2">
                        <img src="img/rules.png" alt="Что выбрать: сравнение Windows, Mac и Linux" title="Что выбрать: сравнение Windows, Mac и Linux">
                      <a href="" title="Mac и Linux">Несколько важных правил написания кода</a>
                      <span>Вы можете встретить много рекомендаций по работе современного разработчика. Мы хотим внести свою лепту в тему и предложить вашему вниманию список из пяти очень дельных советов.</span>
                    </div>


                    <div class="article2">
                     <img src="img/android.png" alt="6 крупных Data Science проектов" title="6 крупных Data Science проектов">
                     <a href="" title="6 крупных Data Science проектов с открытым исходным кодом">10 полезных Android и iOS библиотек</a>
                     <span>В статье мы рассмотрим красивые и востребованные библиотеки как под Андроид, так и под iOS разработку. Если вы с ними еще не работаете – срочно пополняйте свою коллекцию.</span>
                    </div>


                    <div class="article2">
                     <img src="img/dev.png" alt="7 языков программирования, без которых не обойтись в 2020 году" title="7 языков программирования, без которых не обойтись в 2020 году">
                      <a href="" title="CSS3">Как начать карьеру Android-разработчика?</a>
                      <span> Если вы хотите разрабатывать под Андроид, тогда эта статья для вас. Здесь мы поговорим о первых шагах, этапах обучения и, конечно же, языках программирования что нужны для Андроид.</span>
                    </div>



                <div class="article2">
                     <img src="img/find.png" alt="4 лучших PHP-фреймворка для использования в 2020 году" title="4 лучших PHP-фреймворка для использования в 2020 году">
                      <a href="" title="CSS3">Как найти материалы для своих проектов?</a>
                      <span> Невозможно создать сайт, приложение или игру без изображений, музыки и прочих подобных элементов. Но где их искать? Сейчас вы узнаете о нескольких отличных источниках.</span>
                    </div>
                   
                  
                  
        <div id="pages">
          <a href="/menu3" title="страница 3"><span>3</span></a>
          <a href="/menu2" title="страница 2">2</a>
          <a href="/menu2" title="назад"><span><i class="fas fa fa-arrow-left"></i></span></a>
        </div>

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