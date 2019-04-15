<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
		<title>Админка</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description"  content="Песочница. Просто песочница. Проходи дальше" />
		<meta name="robots" content="index, follow">
<?php include ("{$_SERVER['DOCUMENT_ROOT']}template/inc/scripts.php"); ?>
</head>
<body>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}template/inc/header.php"); ?>
<div class="contet">
<h1>Админка</h1>
<?php
require_once ("{$_SERVER['DOCUMENT_ROOT']}template/inc/connection.php");
 
if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['login']) && isset($_POST['password']) && isset($_POST['email'])){
 
    // подключаемся к серверу
    $link = mysqli_connect($servername, $username, $password, $dbname) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
	$age = htmlentities(mysqli_real_escape_string($link, $_POST['age']));
	$login = htmlentities(mysqli_real_escape_string($link, $_POST['login']));
	$password = htmlentities(mysqli_real_escape_string($link, $_POST['password']));
	$email = htmlentities(mysqli_real_escape_string($link, $_POST['email']));

     
    // создание строки запроса
    $query ="INSERT INTO favouriteday VALUES(NULL, '$name','$age','$login','$password','$email')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
    // закрываем подключение
    mysqli_close($link);
}

 
 
 
 
 
 
 
 
 
 
 
 
  ?>
</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
</body>
</html>