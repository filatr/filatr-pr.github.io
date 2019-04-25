<?php include ("{$_SERVER['DOCUMENT_ROOT']}template/inc/header.php"); ?>
<h1>Админка</h1>

<p><a href="/phpmyadmin/" target="_blank">phpmyadmin</a></p>
<fieldset>
    <legend>Регистрация</legend>
<form action="
<?php require_once ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/connection.php");
 
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
}?>
" method="post">
 <p><input type="text" name="login" placeholder="Укажите логин"/></p>
 <p><input type="password" maxlength="25" name="password" placeholder="Укажите пароль"/></p>
 <p><input type="email" name="email" placeholder="Укажите e-mail"/></p>
 <p><input type="submit" value="Регистрация" /></p>
</form>
</fieldset>
<fieldset>
    <legend>Вход</legend>
<form action="act.php" method="post">
 <p><input type="text" name="login" placeholder="Укажите логин" /></p>
 <p><input type="password" maxlength="25" name="password" placeholder="Укажите пароль"/></p>
 <p><input type="submit" value="Вход" /></p>
</form>
</fieldset>




<?php include ("{$_SERVER['DOCUMENT_ROOT']}template/inc/footer.php"); ?>