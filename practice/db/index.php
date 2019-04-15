<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
		<title>БД и SQL: разбор</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description"  content="Песочница. Просто песочница. Проходи дальше" />
		<meta name="robots" content="index, follow">
<?php include ("{$_SERVER['DOCUMENT_ROOT']}template/inc/scripts.php"); ?>
</head>
<body>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}template/inc/header.php"); ?>
<div class="contet txt">
<h1>БД и SQL запросы</h1>
<p>Источники</p>

<ul>
<li><a href="http://tradebenefit.ru/primery-mysql-zaprosov" target="_blank">Примеры SQL запросов к базе данных MySQL</a></li>
<li><a href="https://www.site-do.ru/db/db.php#2" target="_blank">Уроки SQL и баз данных</a>
	<ul><li><a href="https://www.site-do.ru/db/sql4.php" target="_blank">Урок 4. Выборка данных - оператор SELECT</a></li></ul>
</li>
<li><a href="https://www.php.net/manual/ru/mysqli.quickstart.statements.php" target="_blank">Выполнение запросов</a></li>
<li><a href="https://www.php.net/manual/ru/function.mysql-query.php" target="_blank">mysql_query</a></li>
<li><a href="https://php.ru/manual/function.mysql-query.html" target="_blank">mysql_query - Посылает запрос MySQL</a></li>
<li><a href="http://www.php.su/articles/?cat=phpdb&page=025" target="_blank">SQL - запросы и их обработка с помощью PHP</a></li>
<li><a href="https://htmlweb.ru/php/mysql.php" target="_blank">Связь с базами данных MySQL</a></li>
<li><a href="https://metanit.com/web/php/7.5.php" target="_blank">Получение данных</a></li>
</ul>

<h2>Теория</h2>

<p>Подключение к БД: mysqli_connect(хост, пользователь, пароль, название БД)</p>
<p>После выполенения скрыпта закрыть соединение к БД: mysqli_close();</p>
<p>mysqli_query() - что-то запрашиваем в БД, синтаксис: SELECT "выборка таблицы или всех" FROM "название ячейки"</p>
<p>Чтобы <span class="like_b">создать</span> таблицу, нам надо использовать выражение SQL "CREATE TABLE 'название таблицы'"</p>
<p>Чтобы <span class="like_b">удалить</span> таблицу, нам надо использовать выражение SQL "DROP TABLE 'название таблицы'"</p>
<p>Чтобы <span class="like_b">добавить данные</span> в таблицу, нам надо использовать SQL "INSERT" (<span class="like_i">INSERT INTO tovars VALUES(NULL, 'Samsung Galaxy III','Samsumg')</span>)</p>
<p>mysqli_real_escape_string() - защита со стороны скрипта (SQL-инъекции)</p>
<p>Чтобы <span class="like_b">получить данные</span> из таблици, нам надо использовать SQL "SELECT" (<span class="like_i">SELECT * FROM tovars)</span>)</p>
<p>mysqli_num_rows() - узнаем количество строк</p>
<p>mysqli_fetch_row() - извлечь отдельную строку</p>
<p>mysqli_free_result() - очистить память от ненужных данных</p>
<p>Чтобы <span class="like_b">редактировать данные</span> в таблице, нам надо использовать SQL "UPDATE" (<span class="like_i">UPDATE tovars SET name='Samsung ACE II', company='Samsung' WHERE id='1')</span>), при редактировании юзать GET</p>
<p>Чтобы <span class="like_b">удалить данные</span> из таблици, нам надо использовать SQL "DELETE" (<span class="like_i">DELETE FROM tovars WHERE id = '5'</span>)</p>

<h2>Практика</h2>
<p>Пример 1: вывод данных, полученых в <a href="/practice/forms/#forma1" target="_blank">форме 1</a></p>
<?php require_once ("{$_SERVER['DOCUMENT_ROOT']}template/inc/connection.php"); // подключаем скрипт

$link = mysqli_connect($servername, $username, $password, $dbname) 
    or die("Ошибка " . mysqli_error($link)); 
     $link->set_charset("utf8");
$query ="SELECT * FROM users";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<div class=\"test_bd\">
	<div>Id</div>
	<div>Имя</div>
	<div>Возраст</div>
	<div>E-mail</div>
	<div>Редактируем запись</div>
	</div>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<div class=\"test_bd\">";
            for ($j = 0 ; $j < 4 ; ++$j) echo "<div>$row[$j]</div>";
			for ($k = 0 ; $k < 1 ; ++$k) echo "<div><a href=\"?id=$row[0]#url\">Запись $row[0]</a></div>";
        echo "</div>";
    }
     
    // очищаем результат
    mysqli_free_result($result);
}
 
mysqli_close($link);

?>
<p>Пример 2: скрипт редактирования данных, полученых в <a href="/practice/forms/#forma1" target="_blank">форме 1</a>. Ссылка на редактирование - см.в в примере выше</p>

<?php

$link = mysqli_connect($servername, $username, $password, $dbname) 
        or die("Ошибка " . mysqli_error($link)); 
		$link->set_charset("utf8");
     
// если запрос POST 
if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['email']) && isset($_POST['id'])){
 
    $id = htmlentities(mysqli_real_escape_string($link, $_POST['id']));
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $age = htmlentities(mysqli_real_escape_string($link, $_POST['age']));
    $email = htmlentities(mysqli_real_escape_string($link, $_POST['email']));
     
    $query ="UPDATE users SET name='$name', age='$age', email='$email' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
    if($result)
        echo "<span style='color:blue;'>Данные обновлены</span>";
}

// если запрос GET
if(isset($_GET['id']))
{   
    $id = htmlentities(mysqli_real_escape_string($link, $_GET['id']));
     
    // создание строки запроса
    $query ="SELECT * FROM users WHERE id = '$id'";
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    //если в запросе более нуля строк
    if($result && mysqli_num_rows($result)>0) 
    {
        $row = mysqli_fetch_row($result); // получаем первую строку
        $name = $row[1];
        $company = $row[2];
         
        echo "<a name=\"url\"></a>
			<form method='POST'>
            <input type='hidden' name='id' value='$id' />
            <p>Введите имя:<br> 
            <input type='text' name='name' value='$name' /></p>
            <p>Введите возраст: <br> 
            <input type='number' name='age' min='0' max='100' step='1' value='' /></p>
            <p>Уточните e-mail: <br> 
            <input type='text' name='email' value='' /></p>
            <input type='submit' value='Сохранить'>
			</form>
			<p><a href=\"/practice/db/\">Вернутся назад</a></p>";
         
        mysqli_free_result($result);
    }
}
// закрываем подключение
mysqli_close($link);


?>



</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
</body>
</html>