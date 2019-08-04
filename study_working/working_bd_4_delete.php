<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
    <h1>Удаление контактов</h1>

<?php
require_once ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/connection.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM contact_list WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<p class='data_added'>Ваши данные удалены</p>";
    }

mysqli_close($conn);

include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>