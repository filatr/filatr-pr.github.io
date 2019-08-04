<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>

    <h1>Добавление контакта</h1>
<?php

$uploaddir = '../images/contact_list/';
$uploadfile = $uploaddir . basename($_FILES['img']['name']);

require_once ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/connection.php");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");

$myName = $_POST['name'];
$myTel = $_POST['tel'];
$myInfo = $_POST['info'];

echo '<p>' . $myName . '</p>';
echo '<p>' . $myTel . '</p>';
echo '<p>' . $myInfo . '</p>';
echo '<img src="' . $uploadfile . '" class="upload_img">';

$sql = "INSERT INTO contact_list (name, tel, info, img)
VALUES ('$myName', '$myTel', '$myInfo', '$uploadfile')";

if ($conn->query($sql) === TRUE and move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile))   {
    echo "<p class='data_added'>Ваши данные добавлены</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

echo "<a href=\"javascript:history.go(-1)\">Вернутся назад</a>";

include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>