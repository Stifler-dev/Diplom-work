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
  margin-right: 945px;
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
                     <img src="img/react1.png" alt="" title="">
                     <a href="/page_11" title="">Релизы, которыми запомнился 2019-й год</a>
                     <span>За последние дни каждый из нас часто начал заходить на сайты, которые предоставляют актуальные данные по количеству заболевших в разных странах мира. Сервисы эти, безусловно, полезны, но все же они не столь удобны для частого их использования.</span>
                    </div>

                    <div class="article2">
                     <img src="img/zp.png" alt="" title="">
                      <a href="" title="">Зарплаты айтишников в разных странах: где программисту жить хорошо?</a>
                      <span>Часто интересуются, сколько разработчики получают за границей. Сегодня мы сравним зарплаты IT-специалистов в разных частях мира, опираясь на..</span>
                    </div>

                     <div class="article2">
                      <img src="img/2020.png" alt="" title="">
                      <a href="" title="">Каким будет 2020 год для программирования?</a>
                      <span>Наступил 2020 год и как раз самое время обсудить прогнозы и надвигающиеся тенденции в новом году. В статье мы рассмотрим некоторые технологии, что будут популярны в 2020 году..</span>
                    </div>
                     
                      <div class="article2">
                      <img src="img/vr.png" alt="" title="">
                      <a href="" title="">10 крутых примеров WebVR – дополненной реальности в браузере </a>
                      <span>Мы собрали подборку отличных VR игр, которые запускаются прямо в браузере. Для того чтобы увидеть полную картину, вам понадобится специальная гарнитура.</span>
                    </div>

                    <div class="article2">
                      <img src="img/ii.png" alt=" 8 любопытных фактов о Java"title="8 любопытных фактов о Java">
                      <a href="" title="Java">Искусственный интеллект в реальной жизни: примеры, которые впечатляют</a>
                      <span>ИИ уже успел обосноваться во многих важных сферах деятельности человека, существенно упростив нам выполнение очень многих задач. Рассмотрим интересные примеры.</span>
                    </div>
                     
                       <div class="article2">
                        <img src="img/fullstack.png" alt="Что выбрать: сравнение Windows, Mac и Linux" title="Что выбрать: сравнение Windows, Mac и Linux">
                      <a href="" title="Mac и Linux">Что должен знать каждый Full Stack разработчик?</a>
                      <span>Умеете ли вы видеть в простоте красоту? Для разработчика это значит везде применять только один инструмент. В статье мы поговорим про 10 вещей, что должен знать каждый Full Stack.</span>
                    </div>


                    <div class="article2">
                     <img src="img/film.png" alt="6 крупных Data Science проектов" title="6 крупных Data Science проектов">
                     <a href="" title="6 крупных Data Science проектов с открытым исходным кодом">Что посмотреть айтишнику? 10 фильмов и сериалов для вдохновения</a>
                     <span>Подборка отличных фильмов в тематики программирования. Фильмы отлично заряжают мотивацией и вдохновляют на новые проекты и свершения.</span>
                    </div>


                    <div class="article2">
                     <img src="img/prog.svg" alt="7 языков программирования, без которых не обойтись в 2020 году" title="7 языков программирования, без которых не обойтись в 2020 году">
                      <a href="" title="CSS3">Программа на Python для отслеживания курса валюты</a>
                      <span> Курс валют постоянно находиться в нестабильном состоянии. Отслеживать его вручную не так удобно, поэтому предлагаем создать программу на Питон для автоматического трекинга.</span>
                    </div>



                <div class="article2">
                     <img src="img/telegram.png" alt="4 лучших PHP-фреймворка для использования в 2020 году" title="4 лучших PHP-фреймворка для использования в 2020 году">
                      <a href="" title="CSS3">Телеграмм и коронавирус / Пишем бота на Python с отслеживанием данных</a>
                      <span> За последнии несколько недель коронавирус охватил паникой практически все страны мира и сейчас найти человека не знающего что такое коронавирус очень и очень сложно.</span>
                    </div>
                   
                  
                 
                  
        <div id="pages">
          <a href="/menu3" title="следующая"><span><i class="fas fa fa-arrow-right"></i></span></a>
          <a href="/menu3" title="страница 3">3</a>
          <a href="/menu2" title="страница 2"><span>2</span></a>
          <a href="/menu" title="страница 1">1</a>
          <a href="/menu" title="назад"><span><i class="fas fa fa-arrow-left"></i></span></a>

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