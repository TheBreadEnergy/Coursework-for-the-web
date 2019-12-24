<!DOCTYPE HTML>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Обратная связь</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="page-header">
      <h1>Характеристика форматов графических файлов, используемых в Web-дизайне</h1>
      <div class="host">
        <a href="index.html">Главная</a>
        </div>
        <div class="test">
        <a href="test.html">Тест</a>
        </div>
        <div class="mail">
        <a href="mail.php">Обратная связь</a>
        </div>
      </div>
      <div class="content">
        <h2>Обратная связь</h2>
      <form method="post">
  <p>Ваше имя:</p>
  <input type="text" name="name" placeholder="Например: Александр">
  <br>
  <br>
  <p>E-mail:</p>
  <input type="text" name="email" placeholder="Например: example@gmail.com">
  <br>
  <p>Сообщение:</p>
  <textarea rows="10" cols="45" name="message" placeholder="Введите сообщение..."></textarea>
  <br>
  <br>
  <input type="submit" value="Отправить сообщение">
  </form>
  </div>
  <br>
  <div class="footer">
    <br>
    <p>Данный сайт был разработан в рамках курсовой работы по направлению "Web технологии"
      студентом 3го курса - Чугуненко Александром Сергеевичем</p>
  </div>
  <?php
  if(!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['message'])){
 $to = "thebreadenergy@gmail.com";
 $tema = "Обратная связь";
 $message = "Ваше имя: ".$_POST['name']."\r\n";
 $message .= "E-mail: ".$_POST['email']."\r\n";
 $message .= "Сообщение: ".$_POST['message']."\r\n";
 $headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
 $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
 mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
}
 ?>
  </body>
</html>
