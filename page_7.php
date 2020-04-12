 <!-- реклама  -->
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <title>itPro - сайт для разработчиков</title>
   <link rel="stylesheet"  href="css/main.css" type="text/css" charset="utf-8">
    <link rel="stylesheet"  href="css/aside.css" type="text/css" charset="utf-8">

  <link rel="stylesheet"  href="css/asidereklama.css" type="text/css" charset="utf-8">
    
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
            <h2 class="heading"> 6 крупных Data Science проектов</h2>
            <div style="clear: both;"><br></div>

            <!-- Основная страница -->
         
       <div class="block">
      
      <div class="bimg">
      <img src="img/data.png" alt="data" title="data"class="fr-fic fr-dib"> 
       </div>

      <h2>6 крупных Data Science проектов с открытым исходным кодом</h2>

       <br>Data Science – это не просто новое модное IT-направление, а наука, которая совсем скоро кардинально изменит наш мир. В статье мы узнаем про 6 крутых проектов в этой сфере..<br>

       <br>Человек уже не справляется с обработкой многих видов данных, особенно если речь идет о колоссальных объемах, поэтому в дальнейшем без помощи самообучающегося ИИ нам никак не обойтись. <br>

       <br></b><h2>JS-библиотека для визуализации данных</h2>

       <br><a href="https://github.com/jwilber/roughViz">RoughViz</a> представляет данные в виде картинки, которая выглядит так, будто ее нарисовали от руки.

       <img src="https://itproger.com/img/news/1575100225.gif" class="fr-fic fr-dib"><br>

       Вот команда для установки RoughViz:<br>

         <div class="bimg1">
        <img src="img/rough.png" alt="data" title="data"> 
        </div>

        <br>В репозитории GitHub есть много подробных примеров кода, показывающих, как применять библиотеку. С ее помощью можно сгенерировать линейные графики, гистограмму, кольцевую, круговую и точечную диаграммы. <br>
       
        <br><h2>Простой, легкий и быстрый распознаватель лиц</h2><br>

       <p> Пусть вас не смущает описание на китайском языке – оно прекрасно переводится в Google Translate. Зато эта <a href="https://github.com/Linzaer/Ultra-Light-Fast-Generic-Face-Detector-1MB">модель детектора </a>лиц весит всего-навсего 1 Мб!</p>
              
              <div class="bimg1">
        <br> <img src="img/rough2.png" alt="data" title="data"><br> 
            </div>

       <br>Архитектура, используемая в детекторе, основана на <a href="https://github.com/ShiqiYu/libfacedetection/">libfacedetection.</a>
       Библиотека представлена в двух версиях:<br>
      
      <br> <ol>
         <li>RFB (более точная)</li>
         <li>slim (шустрая, но попроще)</li>
       </ol>
        
        <br>С такой легковесной библиотекой очень удобно разрабатывать более сложные и совершенные системы компьютерного зрения. <br>

        <br><h2>Самая масштабная карта знаний</h2><br>

        Теории графов используются во многих научных дисциплинах, в том числе в Data Science. Особенный интерес сейчас вызывают еще не приевшиеся <a href="https://ru.wikipedia.org/wiki/%D0%A2%D0%B5%D0%BC%D0%B0%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D0%BA%D0%B0%D1%80%D1%82%D0%B0">тематическая карта</a>, <a href="https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D1%80%D1%82%D0%B0_%D0%BA%D0%BE%D0%BD%D1%86%D0%B5%D0%BF%D1%82%D0%BE%D0%B2">карта концептов</a> и <a href="https://ru.wikipedia.org/wiki/%D0%94%D0%B8%D0%B0%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B0_%D1%81%D0%B2%D1%8F%D0%B7%D0%B5%D0%B9">ассоциативные карты. </a><br>

        <br>Этот проект стал своеобразным гигантом среди таких систем. Он был создан в Китае и представляет собой <a href="https://github.com/ownthink/KnowledgeGraphData"> собой наибольшую из всех существующих карту знаний</a> число ее узлов превышает 140 миллионов. Содержимое карты имеет расширение csv.<br>


    

         </div> 
       </div>
      </div>
  

 <!-- основаная часть справа -->

         <?php
           require_once "blocks/asidereklama.php"
         ?>        
         <div style="clear: both;"><br></div>


     <!-- низ сайта  -->
      </div>
      <?php
           require_once "blocks/footer.php"
       ?>
      </div>


       <?php
           require_once "blocks/JS_scriptsreklama.php"
       ?>
</body>
</html>