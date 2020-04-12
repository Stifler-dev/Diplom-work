 
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
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab|Suez+One&display=swap">
</head>

<style type="text/css">
  .block>img{
    height: 350px;
    width: 1050px;
  }
   
  .block>iframe {
    margin-left: 65px;
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
            <h2 class="heading">Создание IOS приложения</h2>
            <div style="clear: both;"><br></div>

            <!-- Основная страница -->
         
 <div class="block">
  <div class="bimg">
<img src="img/ios.png" alt="test" title="Kotlin">
</div>
<br> <h2>Без финансовых вложений и специальных знаний.</h2>  

       <!--  <div class="info">
            <div>
               <i class="fas fa fa-circle" style="color: rgb(225,61,80);"></i>
                7 уроков
            
               <i class="fas fa fa-circle" style="color: rgb(225,61,80);"></i>
                3 Урока
            
               <i class="fas fa fa-circle" style="color: rgb(225,61,80);"></i>
                89 заданий
            </div>
        </div>
    --->

   <br> Вот простейшая инструкция, как создать элементарное iOS-приложение и испытать его на своем устройстве. Отталкиваясь от нее вы сможете дальше углубиться в тему и создавать реально полезные программы.<br>
 
   <br><h2>Примечание для пользователей Windows:</h2>чтобы создавать приложения для iOS вам необходимо установить OS X на виртуальной машине (VirtualBox, VMware). Это процесс отнюдь не прост и для его осуществления требуется отдельная инструкция.<br>

    <br>1. Идем в App Store и устанавливаем <a href=""></a>среду разработки XCode:<br>
   
    <br><div class="bimg1">
      <img src="img/ios1.jpg" alt="test" title="Kotlin">
   </div><br>
    
  <br>Если у вас уже стоит XCode, то необходимо обновить его.<br>

 <br>2. Запускаем xCode и выбираем пункт меню <strong>File -> New -> Project:</strong><br>

    <br><div class="bimg1">
      <img src="img/ios2.jpg" alt="test" title="Kotlin">
   </div><br>

    3. Выбираем платформу и тип приложения:<br>

   <br><div class="bimg1">
      <img src="img/ios3.jpg" alt="test" title="Kotlin">
   </div><br>
   
 

   4. Указываем информацию о проекте. Обратите внимание, что мы выбрали тип приложения «Universal»:<br>

      <br><div class="bimg1">
      <img src="img/ios4.jpg" alt="test" title="Kotlin">
   </div><br>
    

    5. Нажимаем на кнопку New Folder и указываем имя папки, в которой будем хранить файлы приложения:<br>

     <br><div class="bimg1">
      <img src="img/ios5.jpg" alt="test" title="Kotlin">
   </div><br>

    6. Снимаем галочку с чекбокса Create Git Repository и нажимаем кнопку Create. В результате вы должны попасть на стартовый экран работы над приложением:<br>

         <br><div class="bimg1">
      <img src="img/ios6.jpg" alt="test" title="Kotlin">
   </div><br>


   7. Нажимаем на пункт <strong>Main.storyboard</strong> в правом меню, перетаскиваем на основное поле элемент<strong> Label</strong> и добавляем в него текст<strong> Hello_world:</strong><br>

      <br><div class="bimg1">
      <img src="img/ios7.jpg" alt="test" title="Kotlin">
   </div><br>

   8. Теперь надо сделать иконку для приложения. Подбираем картинку и загружаем ее на <a href="https://makeappicon.com/">mapappicon.com:</a><br>
   

    <br><div class="bimg1">
      <img src="img/ios8.jpg" alt="test" title="Kotlin">
   </div><br>


  9. Ждем когда веб-приложение закончит работу и указываем свой адрес электронной почты для получения архива с иконками:<br>

     <br><div class="bimg1">
      <img src="img/ios9.jpg" alt="test" title="Kotlin">
   </div><br>

   

  10. Возвращаемся в XCode и в левом меню выбираем раздел <strong> Assets.xassets:</strong><br>


  <br><div class="bimg1">
      <img src="img/ios10.jpg" alt="test" title="Kotlin">
   </div><br>


  11. Открываем архив из почты и перетаскиваем иконки оттуда на рабочее пространство XCode:<br>


  <br><div class="bimg1">
      <img src="img/ios11.jpg" alt="test" title="Kotlin">
   </div><br>


  12. Выбираем один из симуляторов устройств, нажимаем на кнопку запуска приложения (черный треугольник) и включаем на своем <strong> Mac Developer Mode:</strong><br>
   
  
   <br><div class="bimg1">
      <img src="img/ios12.jpg" alt="test" title="Kotlin">
   </div><br>

  
  13. Повторяем попытку запуска. Ждем, когда на симуляторе загрузится iOS:<br>

  <br><div class="bimg1">
      <img src="img/ios13.jpg" alt="test" title="Kotlin">
   </div><br>


  14. Убеждаемся, что приложение работает:<br>


  <br><div class="bimg1">
      <img src="img/ios14.jpg" alt="test" title="Kotlin">
   </div><br>



  <br><h2>Смотрим готовое приложение на устройстве</h2><br>


  1. Идем в xCode -> Preferencies -> Accounts и добавляем свой Apple ID:<br>


   <br><div class="bimg1">
      <img src="img/ios15.jpg" alt="test" title="Kotlin">
   </div><br>


  2. Подсоединяем iOS-устройство к компьютеру:<br>


 <br><div class="bimg1">
      <img src="img/ios16.jpg" alt="test" title="Kotlin">
   </div><br>


  <br>3. Выбираем нужное устройство в списке и нажимаем на кнопку запуска. Ждем некоторое время.<br>


  <br> 4. Если вылезло сообщение о проблемах с безопасностью, то на iOS-устройстве идем в <strong> Настройки -> Основные -> Управление устройством </strong>и разрешаем запуск приложений от разработчика с вашим Apple ID:<br>

  <br><div class="bimg1">
      <img src="img/ios17.jpg" alt="test" title="Kotlin">
   </div><br>

  
  <br><div class="bimg1">
      <img src="img/ios18.jpg" alt="test" title="Kotlin">
   </div><br>

5. Идем на рабочий стол и находим иконку нового приложения:<br>

 <br><div class="bimg1">
      <img src="img/ios19.jpg" alt="test" title="Kotlin">
   </div><br>


 6. Запускаем:<br>


 <br><div class="bimg1">
      <img src="img/ios20.jpg" alt="test" title="Kotlin">
   </div><br>


  7. Отсоединяем устройство от компа. Теперь приложением можно пользоваться.<br>

  <br><h2>Что делать, если хочешь больше?</h2><br>

  С помощью метода научного тыка и Google можно расширить вышеприведенную последовательность действий и создать более функциональное приложение. Но использовать его можно будет только на своих устройствах.<br>


  <br>С помощью метода научного тыка и Google можно расширить вышеприведенную последовательность действий и создать более функциональное приложение. Но использовать его можно будет только на своих устройствах.<br>

  <br>Ведь Apple предъявляет очень высокие требования к приложениям.<a href="https://developer.apple.com/app-store/review/guidelines/">App Store Review Guidelines</a>
   включает в себя 29 пунктов и более сотни подпунктов. Для того, чтобы приложение им соответствовало и было принято для публикации в магазине, разработчику требуется большой объем технических знаний.<br>

   <br>Если хотите создавать качественные приложения для iOS предназначенные для массового использования,<a href="https://geekbrains.ru/?utm_source=iphones&utm_medium=affiliate&utm_term=iOS&utm_campaign=post_iphones_03.04.2016">надо учиться!</a><br><br>

   <br><h2>Удачи!</h2>


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