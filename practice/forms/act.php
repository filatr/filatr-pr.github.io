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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mbd";


// https://www.w3schools.com/php/php_mysql_insert.asp

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";



?>

	<?php

// echo $_POST['name'];
// echo $_POST['age'];

$myName = $_POST['name'];
$myAge = $_POST['age'];
//$zero = var_dump($_POST);

echo '<p>' . $myName . '</p>';
echo '<p>' . $myAge . '</p>';
//echo '<p>' . $zero . '</p>';
//var_dump($_POST);


//$myName1 = $_GET['name1'];
//$myAge1 = $_GET['age1'];

//echo '<p>' . $myName1 . '</p>';
//echo '<p>' . $myAge1 . '</p>';
$sql = "INSERT INTO name (name, age)
VALUES ('$myName', '$myAge')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



<br><br><br><br><br><br><br><br><br>
<p><a href="1104.php">назад</a></p>
</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}template/inc/footer.php"); ?>
</body>
</html>