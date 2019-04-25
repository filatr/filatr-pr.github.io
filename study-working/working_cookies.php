<?php
 //session_start();
//$_SESSION['username'] = "maksim";
//SetCookie("myCookie","HelloWorld");
//setcookie();
//if ($_SESSION['authorized']<>1) {
//header("Location: /admin");
//echo "Зарегистрируйся";
//exit;
//} 
//echo @$_COOKIE["myCookie"];
//echo @$_SESSION["username"];


// Устанавливаем массив Cookies:
//setcookie("cookie[1]", "Первый");
//setcookie("cookie[2]", "Второй");
//setcookie("cookie[3]", "Третий");

// После перезагрузки страницы мы отобразим
// Состав массива Cookies 'cookie':

include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<h1>Сессии и Cookies</h1>


<?php
/* if (isset($_COOKIE['cookie'])) {
    foreach ($_COOKIE['cookie'] as $name => $value) {
        echo "$name : $value <br>";
    }
}
*/
/*
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Текст, отправляемый в том случае,
    если пользователь нажал кнопку Cancel';
    exit;
} else {
    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>Вы ввели пароль {$_SERVER['PHP_AUTH_PW']}.</p>";
}
*/
/*

echo " Вывести одно конкретное значение cookie<br>";
echo $_COOKIE["myCookie"];
echo "<br>";
echo "В целях тестирования и отладки может пригодиться вывод всех cookie<br>";
print_r($_COOKIE);
echo "<br><hr>";

*/
require_once ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/connection.php"); // подключаем скрипт

$link = mysqli_connect($servername, $username, $password, $dbname) 
    or die("Ошибка " . mysqli_error($link)); 
     $link->set_charset("utf8");
$query ="SELECT * FROM users";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 


// тут скрипт: авторизовать пользователя



// тут скрипт
mysqli_close($link);

include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
<?php //include '../template/inc/footer.php'; ?>