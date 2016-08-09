<?php

/* Email Variables */

$emailSubject = 'contactformprocess!';
$webMaster = 'nikol.designer@gmail.com';


/* Data Variables */

$name = $_POST['name'];
$mail = $_POST['mail'];
$text = $_POST['text'];



$body = <<<EOD
<br><hr><br>
name: $name <br>
mail: $mail <br>
text: $text <br>


EOD;


$headers = "From: $email\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($webMaster, $emailSubject, $body,
$headers);


/* Results rendered as HTML */

$theResults = <<<EOD
<html>
<head>
<title>sent message</title>
<meta http-equiv="refresh" content="3;URL=http://nikol-design.ru/">
<style type="text/css">
<!--
body {
background-color: #000;
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 20px;
font-style: normal;
line-height: normal;
font-weight: normal;
font-color:#fff;
color:#FFF;
text-decoration: none;
padding-top: 200px;
margin-left: 150px;
width: 800px;
}

-->
</style>
</head>
<div align="center">Спасибо! Ваше сообщение отправлено</div>
</div>
</body>
</html>
EOD;
echo "$theResults";
?>

