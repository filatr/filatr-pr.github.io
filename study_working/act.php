<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>

<p><a href ="/study_working/working_form_examples.php">Назад</a></p>
<h2>Результат выполнения формы "пример 1" из занесением в БД</h2>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new_bd";


// https://www.w3schools.com/php/php_mysql_insert.asp

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
 $conn->set_charset("utf8"); // устанавлдиваем кодировку отправляемых сообщений, устанавливаем после подключения к БД
// echo $_POST['name'];
// echo $_POST['age'];

$myName = $_POST['name'];
$myAge = $_POST['age'];
$myEmail = $_POST['email'];
//$zero = var_dump($_POST);

echo '<p>' . $myName . '</p>';
echo '<p>' . $myAge . '</p>';
echo '<p>' . $myEmail . '</p>';
//var_dump($_POST);


//$myName1 = $_GET['name1'];
//$myAge1 = $_GET['age1'];

//echo '<p>' . $myName1 . '</p>';
//echo '<p>' . $myAge1 . '</p>';
$sql = "INSERT INTO user (name, age, email)
VALUES ('$myName', '$myAge', '$myEmail')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<p><a href ="/study_working/working_form_examples.php">Назад</a></p>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
