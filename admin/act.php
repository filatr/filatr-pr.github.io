<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php");

echo "<h1>Админка</h1>";

require_once ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/connection.php");
 
if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['email'])){
 
    // подключаемся к серверу
    $link = mysqli_connect($servername, $username, $password, $dbname) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
	$login = htmlentities(mysqli_real_escape_string($link, $_POST['login']));
	$password = htmlentities(mysqli_real_escape_string($link, $_POST['password']));
	$email = htmlentities(mysqli_real_escape_string($link, $_POST['email']));

     
    // создание строки запроса
    $query ="INSERT INTO users VALUES(NULL, '$login','$password','$email')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
    // закрываем подключение
    mysqli_close($link);
}

 
 
 
 
 
 
 
 
 
 
 
include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php");

?>