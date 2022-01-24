<?php
include "config/db.php";
include "config/settings.php";

?>
<?php

// Показывать всю информацию, по умолчанию INFO_ALL
phpinfo();

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $nameSite; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,100&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>

	<?php
	// Подключаем шапку сайта
	include "chast_site/shapka.php";
	?>
	<div id="content">
		


		<div id="subscribe">
			
			 <?php
			 if(isset($_COOKIE["polzovatel_id"])) // Проверяем есть ли куки пользователя
			 {
			 	// Подключаем модуль ответсвенный за подписку
			 	include "modules/subscribe.php";
			 
			 }
			 else
			 {
			 	?>

				<div id="title">
				<p>Подписка</p> 
				</div>
				<div class="subscribe20">
		    		<div class="inner">
		        		<div class="stamp"></div>
		        			<h3>Чтобы подписатся на рассылку, нужно войти или зарегистрироватся</h3>
		        
		        <div style="display: none;" id="asd_subscribe_res"></div>
		        	<form id="asd_subscribe_form" method="post" action="/">
		            <div class="submit_group">
		                <a href="login.php" id="open_entry">Войти</a> <!--Выйти-->
		                <a href="registr.php">Регистрация</a>
		            </div>
		        	</form>
		    		</div>
		    	</div>
		</div>
			 	<?php
			 }
			 ?>
	
<!--<h1>Шаблон Flexible content </h1> -->
    <div class="flex-container row">
    
      <div class="flex-item color1">
      <h2>Lorem Ipsum</h2>
      Lorem Ipsum - это текст-"рыба", часто используемый
          в печати и вэб-дизайне. Lorem Ipsum является
          стандартной "рыбой" для текстов на латинице с
          начала XVI века. В то время некий безымянный
          печатник создал большую коллекцию размеров и форм
          шрифтов, используя Lorem Ipsum для распечатки
          образцов. Lorem Ipsum не только успешно пережил
          без заметных изменений пять веков, но и перешагнул
          в электронный дизайн. Его популяризации в новое
          время</div>
      
    </div>

    <!-- <h1>Шаблон Flexible content Repeter</h1> -->
    
    <div class="flex-container row2 space-between">
	
      <div class="flex-item color1">
			<img src="images/pencil.png">       
           Sed ut perspiciatis unde omnis
      </div>
      <div class="flex-item color2">
		<img src="images/megaphone.png">
      Iste natus error sit voluptatem
      </div>
     
      <div class="flex-item color3">
		<img src="images/features.png"> 
      Accusantium doloremque laudan
      </div>
      
    </div>

     <!-- <h1>Реклама банера ACF repeater</h1> -->
    <div class="flex-container row3 space-between2">
      <div class="circle">
          <a href="https://extremstyle.ua/ru " target="_blank"><img src="images/bannersneakers.png"></a> 
        </div>
        <div class="circle2">
          <a href="https://slh.com/ " target="_blank"><img src="images/hotel.png"></a> 
        </div>
        <div class="circle3">
          <a href="https://kleo.ua/ " target="_blank"><img src="images/bannerkleo.png"></a> 
        </div>   
    </div>
	<script src="js/script.js"></script>
</body>
</html>