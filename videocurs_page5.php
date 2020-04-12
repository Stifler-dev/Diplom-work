 
 <!-- реклама  -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>itPro - сайт для разработчиков</title>

   <link rel="stylesheet"  href="css/main.css" type="text/css" charset="utf-8">

    <link rel="stylesheet"  href="css/asidereklama.css" type="text/css" charset="utf-8">

     <meta name="description" content="Информационно-развлекательный портал для программистов! Обучающие курсы,новости в сфере IT и многое другое">
     <meta name="keywords" content="itPro,it,курсы,новости,уроки">
     <meta name="viewport" content="width=device-width, initial=scale=1">
     <link href="img/favicon.ico" rel="shortcut icon"type="imge/x-icon">
     <link href="css/fontawesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab|Suez+One&display=swap">
</head>

<style type="text/css">
 .bimg>img{
    height: 300px;
    width: 1050px;
  }

   .block>iframe {
    margin-left: 59px;
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
            <h2 class="heading">Уроки CSS </h2>
            <div style="clear: both;"><br></div>

            <!-- Основная страница -->
         
 <div class="block">
  
  <div class="bimg">
    <img src="img/css.png">
  </div><br>

 <br><center><h2>Уроки CSS3 | #1 - Создание стилей на сайте</h2><br></center>

Представляем вам курс по изучению языка стилей CSS. CSS стили способны полностью изменить отображения сайта, изменив отображение как простых элементов, так и вид самого веб-сайта. За курс мы изучим CSS3 и научимся прописывать все необходимые стили для HTML. <br>

<br><iframe width="560" height="315" src="https://www.youtube.com/embed/Fw679JPOo0w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>


<br><h2>Информация про CSS</h2>

<br>CSS является языком, что отвечает за оформление вида страницы. Он позволяет указать стилевое оформление каждого из <a href="">HTML</a> элементов. Также за счёт CSS можно указывать стили для файлов с XML-разметок: <code>XUL</code>, <code>SVG</code> и прочие.<br>
 
<br>Чистый HTML-документ выглядит ужасно без использования стилей. Каскадные таблицы стилей или же CSS помогает указать всё оформление для веб сайта. Используя лишь HTML и CSS можно создать любой дизайн сайта, какой вам только будет нужен.<br>


<br><h2>Написание CSS</h2><br>

CSS-стиль – это определённое правило, что подсказывает веб-обозревателю правила форматирования для каждого элемента. Под форматированием подразумевается: изменение цвета текста, фона элемента, шрифта, теней, позиции на экране и тому прочее.<br>

 <br><div class="bimg1">
   <center> <img src="img/css3.gif"></center>
  </div><br>

Чтобы создать рабочий CSS-стиль, нужно правильно указать 2 основные части:<br>

<br><ul>
  <li><strong>Селектор</strong> – указывает целевой элемент, которому назначается стиль;</li>
  <li><strong>Блок стилей</strong> – подсказывает браузеру нужные правила форматирования.</li>
</ul><br>

Пример:<br>
<br><div class="bimg1">
   <center> <img src="img/css3.png"></center>
  </div><br>

В примере селектором выступает тег div. Это означает, что все стили в блоке будут применены к каждому div-элементу на странице.<br>

<br>В фигурных скобках всегда указываются стили. Они должны стоять строго в скобках, а не за их пределами. В представленном примере на выходе получится <a href="">div</a> блок c красным фоном, шириной 100 и высотой 60 пикселей.<br>

<br>Все команды имеют свойство, а за ним идёт значение. Иллюстрация на основании того же примера:<br>

<br><div class="bimg1">
   <center> <img src="img/css4.png"></center>
  </div><br>

Свойство задаёт определённый стиль. Подобных свойств очень много, в нашем случае – это цвет фона. Значение всегда указывается после двоеточия. По примеру, свойству <a href="">background-color</a> установлено значение red. Таким образом перекрашивается цвет фона в красный.<br>

<br>По завершению команды всегда ставится точка с запятой. Этот символ является делителем, который отделяет между собой команды.<br>

<br>Список различных стилей принято называть таблицей стилей или CSS. Есть несколько разных методов указания стилей. <br>

<br><h2>Атрибуты html и стили css</h2>

<br>Большинство HTML-элементов поддерживают установку стилей посредством атрибутов. Пример, отдельным элементам есть возможность указать атрибуты width и height (ширина с высотой). Атрибуты указываются прямо в HTML-файле. С ними нужно быть осторожными. <br>

<br><div class="bimg1">
   <center> <img src="img/main.gif"></center>
  </div><br>

С одной стороны – это удобный способ указать стили для конкретного блока (значения в атрибутах имеют высший приоритет), все прочие теги, подпадающие под общие селекторы, будут иметь стили с CSS-файла. <br>

<br>С другой стороны – это портит HTML-код, он перестаёт быть чистым. В случае редактирования неудобно находить и менять стили по разным файлам, появляется излишняя путаница.<br>

<br><h2>Проверка валидности</h2><br>

Во время создания стилей нередко появляются неясности в отношении правильности их указания и корректности. В данном случае на помощь приходит валидатор CSS, доступный по <a href="https://www.youtube.com/watch?v=Fw679JPOo0w&feature=emb_logo">этой ссылке.</a>










   <br><br></b> <strong>Продолжения уроков по ссылке на Youtube канал <a href="https://www.youtube.com/watch?v=Yh0jAI7ObmI&feature=emb_logo">нажми на ссылку...</a></strong>

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