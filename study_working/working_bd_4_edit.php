<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
    <h1>Редактор контактов</h1>

<?php
require_once ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/connection.php");

$link = mysqli_connect($servername, $username, $password, $dbname)
or die("Ошибка " . mysqli_error($link));
$link->set_charset("utf8");

// если запрос POST 
if(isset($_POST['name']) && isset($_POST['tel']) && isset($_POST['info']) && isset($_POST['id'])){

    $id = htmlentities(mysqli_real_escape_string($link, $_POST['id']));
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $tel = htmlentities(mysqli_real_escape_string($link, $_POST['tel']));
    $info = htmlentities(mysqli_real_escape_string($link, $_POST['info']));

    $query ="UPDATE user SET name='$name', tel='tel', info='info' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

    if($result)
        echo "<span style='color:blue;'>Данные обновлены</span>";
}

// если запрос GET
if(isset($_GET['id']))
{
    $id = htmlentities(mysqli_real_escape_string($link, $_GET['id']));

    // создание строки запроса
    $query ="SELECT * FROM contact_list WHERE id = '$id'";
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    //если в запросе более нуля строк
    if($result && mysqli_num_rows($result)>0)
    {
        $row = mysqli_fetch_row($result); // получаем первую строку
        $name = $row[1];
        $tel = $row[2];
        $info = $row[3];
        $img = $row[4];

        echo "<form method='POST'>
            <input type='hidden' name='id' value='$id' />
            <p>Введите имя:<br> 
            <input type='text' name='name' value='$name' /></p>
            <p>Ваш телефон <span class='red'>*</span>:</p>
            <input type='tel' name='tel' value='$tel' pattern='\+380[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}' required placeholder='+38099-999-66-99'>
            <p>Дополнительная информация</p>
            <input type='text' name='info' value='$info' maxlength='25' size='40' />
            <p>Изображение</p>
            <input type='file' accept='image/*' name='img' />
            <input type='submit' value='Сохранить'>
			</form>
			<p><a href='working_bd_4.php' class='go_back'>Вернутся на стр контактов</a></p>";

        mysqli_free_result($result);
    }
}
// закрываем подключение
mysqli_close($link);

include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>