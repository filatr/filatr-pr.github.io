<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<h1>Практика с БД</h1>


<p>Пример 1: вывод данных, полученых в <a href="/study-working/working_form_examples.php#forma1" target="_blank">форме 1</a></p>
<?php require_once ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/connection.php"); // подключаем скрипт

$link = mysqli_connect($servername, $username, $password, $dbname) 
    or die("Ошибка " . mysqli_error($link)); 
     $link->set_charset("utf8");
$query ="SELECT * FROM user";

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
<p>Пример 2: скрипт редактирования данных, полученых в <a href="/study-working/working_form_examples.php#forma1" target="_blank">форме 1</a>. Ссылка на редактирование - см.в в примере выше</p>

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
			<p><a href=\"/study-working/working_bd_homework_1.php\">Вернутся назад</a></p>";
         
        mysqli_free_result($result);
    }
}
// закрываем подключение
mysqli_close($link);
//truncate

?>

<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
<?php //include '../template/inc/footer.php'; ?>