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

      <link rel="stylesheet" type="text/css" href="css/style.css">

     <meta name="description" content="Информационно-развлекательный портал для программистов! Обучающие курсы,новости в сфере IT и многое другое">
     <meta name="keywords" content="itPro,it,курсы,новости,уроки">
     <meta name="viewport" content="width=device-width, initial=scale=1">
     <link href="img/favicon.ico" rel="shortcut icon"type="imge/x-icon">
     <link href="css/fontawesome.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
  <style type="text/css">
 #podpis{
   width: 40%;
   margin-left: 54px;
   margin-bottom: -34px;
 }

  #rub{
    width: 10%;
    height: 10%;
    margin-left: 36px;
    margin-top: -22px;
  }
  .main-cart{
    width: 7%;
    height: 7%;
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
            <h2 class="heading"> Корзина</h2>
            <div style="clear: both;"><br></div>

            <!-- РЕКЛАМА -->
            
              <div class="block">
              <div id="podpis">Ваша текущая выбранная подписка</div>
              <div class="main-cart"></div>
              <div id= "rub">рублей</div>
               
               </div>

         <div class="block">
          
           Укажите Ваши данные для оформления выбранной Вами подписки:
           вам будет высланно на ваш email реквизиты для оплаты.
           <form>
               <div>
                 <input type="text" id="name" placeholder="Ваше имя..." onclick="$(this).css ('border-color','#ccc')">
                 <br>
                 <input type="email" id="email" placeholder="email..." onclick="$(this).css ('border-color','#ccc')">
               </div>
               <div>
                 <textarea id="message" placeholder="Введите ваше сообщение..." onclick="$(this).css ('border-color','#ccc')"></textarea>
               </div>
               <input type="button" id="send" class="btn" value="Отправить">
           </form>

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


<script>
$('#send').click (function () {
  var email = $('#email').val ();
  var name = $('#name').val ();
  var message = $('#message').val ();
  $.ajax({
    url:      'ajax/kontakti.php',
    type:   'POST',
    cache:    false,
    data:     {'name':name, 'email':email, 'message':message},
    dataType: 'html',
    beforeSend: function () {
      $('#send').attr ("disabled", "disabled");//делаем кнопку не активной после отравки
    },
    success: function(data) {
      if (data == true) {
        $('#name').val ("");
        $('#email').val ("");
        $('#message').val ("");
        $('#send').text ("Сообщение отправлено");
        $('#email').css ("border-color", "#60fc8c");
        $('#name').css ("border-color", "#60fc8c");
        $('#message').css ("border-color", "#60fc8c");
      } else {
        if (data == false)        
          alert ("Что-то пошло не так! Сообщение не отправлено");
        else {          
          switch (data) {
          case "Имя не указано":
          $('#name').css ("border-color", "#f7b4b4");
          break;
          case "Сообщение не указано":
          $('#message').css ("border-color", "#f7b4b4");
          break;
          case "Неправильный e-mail":
          $('#email').css ("border-color", "#f7b4b4");
          break;
          default:
          $('#email').css ("border-color", "#f7b4b4");
          $('#message').css ("border-color", "#f7b4b4");
          $('#name').css ("border-color", "#f7b4b4");
          }
        }
      }
      $('#send').removeAttr ("disabled");       
    }
  });
});
</script>

      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/cart.js"></script>
   
</body>

      

</html>