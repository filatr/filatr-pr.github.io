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

include ("../template/inc/header.php"); ?>
<h1>Сессии и Cookies</h1>


<?php

require_once ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/connection.php"); // подключаем скрипт

$link = mysqli_connect($servername, $username, $password, $dbname)
or die("Ошибка " . mysqli_error($link));
$link->set_charset("utf8");

// Если форма авторизации отправлена...
if (!empty($_POST['password']) and !empty($_POST['login'])) {

    // Пишем логин и пароль из формы в переменные для удобства работы:
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Формируем и отсылаем SQL запрос:
    $query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
    $result = mysqli_query($link, $query);

    // Преобразуем ответ из БД в нормальный массив PHP:
    $user = mysqli_fetch_assoc($result);
    if (!empty($user)) {
        // Пользователь прошел авторизацию, выполним какой-то код
        $_SESSION['auth'] = true;
        setcookie('login', $user['login'], time()+60);
        echo $login . "<style>form.loginform {display:none;}</style>";
    } else {
        echo "Не верно введены логин/пароль. Повторите попытку";
    }

}
// где и как пользовать $_COOKIE ?
// Где, когда и как закрывать сессию
?>
<form class="loginform" action="" method="POST">
	<input name="login" placeholder="Укажите логин">
	<input name="password" type="password" placeholder="Укажите пароль">
	<input type="submit" value="Отправить">
</form>


<?php



include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
<?php //include '../template/inc/footer.php'; ?>