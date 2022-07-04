<?php
$to = "artn9ne@gmail.com"; 
$tema = "Форма обратной связи на PHP"; 
$message = "Ваше имя: " . $_POST['name'] . "<br>"; 

$message .= "Номер телефона: " . $_POST['phone'] . "<br>"; 

$headers  = 'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 
mail($to, $tema, $message, $headers); 
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/btn.css">

    <title>Document</title>
  </head>
  <body>
    <div class="max-width" style="margin-top: 50px;">
      <div style="margin:0 auto; text-align: center;">
        <h1 style="color: #D49520;">Спасибо за оставленные контакты! <br> Хорошего Вам дня!</h1>
        <div>
          <img style="max-width: 400px; margin: 0 auto; width: 80%;" src="./Logo.png" alt="" />
        </div>
        <div style="margin: 40px auto; width:255px;">
            <a class="border-animation " data-toggle="modal" style="max-width: 350px; " data-target=".bd-example-modal-lg" href="https://docs.google.com/spreadsheets/d/15SlAAJTutLH4zerWTGuAjXsJIWW89Dyx3A6cBMYMnzU/edit?usp=sharing">
                <div class="border-animation__inner " style="width: 250px;">Скачать прайс-лист</div>
            </a>
            <a class="border-animation "  style="max-width: 100%;"  href="./index.html">
                <div class="border-animation__inner" style="width: 250px;">На сайт</div>
            </a>
        </div>
      </div>
    </div>
  </body>
</html>

