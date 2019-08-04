<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
    <h1>Сортировка</h1>


<?php


include 'sort.php';
$object = new taskClass;
$object->sort();
$object->viewResult();



?>

<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>