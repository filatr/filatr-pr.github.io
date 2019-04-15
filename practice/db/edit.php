<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
		<title>Формы</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description"  content="Песочница. Просто песочница. Проходи дальше" />
		<meta name="robots" content="index, follow">
<?php include ("{$_SERVER['DOCUMENT_ROOT']}template/inc/scripts.php"); ?>
</head>
<body>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}template/inc/header.php"); ?>
<div class="contet txt">
<?php
require_once ("{$_SERVER['DOCUMENT_ROOT']}template/inc/connection.php"); // подключаем скрипт

$link = mysqli_connect($servername, $username, $password, $dbname) 
        or die("Ошибка " . mysqli_error($link)); 
		$link->set_charset("utf8");
     
// если запрос POST 
if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['email']) && isset($_POST['id'])){
 
    $id = htmlentities(mysqli_real_escape_string($link, $_POST['id']));
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $age = htmlentities(mysqli_real_escape_string($link, $_POST['age']));
    $email = htmlentities(mysqli_real_escape_string($link, $_POST['email']));
     
    $query ="UPDATE user SET name='$name', age='$age', email='$email' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
    if($result)
        echo "<span style='color:blue;'>Данные обновлены</span>";
}
 
// если запрос GET
if(isset($_GET['id']))
{   
    $id = htmlentities(mysqli_real_escape_string($link, $_GET['id']));
     
    // создание строки запроса
    $query ="SELECT * FROM user WHERE id = '$id'";
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    //если в запросе более нуля строк
    if($result && mysqli_num_rows($result)>0) 
    {
        $row = mysqli_fetch_row($result); // получаем первую строку
        $name = $row[1];
        $company = $row[2];
         
        echo "<h2>Изменить данные пользователя</h2>
            <form method='POST'>
            <input type='hidden' name='id' value='$id' />
            <p>Введите имя:<br> 
            <input type='text' name='name' value='$name' /></p>
            <p>Введите возраст: <br> 
            <input type='number' name='age' min='0' max='100' step='1' value='$age' /></p>
            <p>Уточните e-mail: <br> 
            <input type='text' name='email' value='$email' /></p>
            <input type='submit' value='Сохранить'>
            </form>";
         
        mysqli_free_result($result);
    }
}
// закрываем подключение
mysqli_close($link);

?>
</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}template/inc/footer.php"); ?>
</body>
</html>