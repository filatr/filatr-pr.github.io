<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>

<h1>Список контактов</h1>

<?php require_once ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/connection.php");

$link = mysqli_connect($servername, $username, $password, $dbname)
or die("Ошибка " . mysqli_error($link));
$link->set_charset("utf8");

$query ="SELECT * FROM contact_list";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
    echo "<table class='table'>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
        for ($j = 1 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
        for ($m = 4 ; $m < 5 ; ++$m) echo "<td><img src=\"$row[$m]\"></td>";
        for ($k = 0 ; $k < 1 ; ++$k) echo "<td class='contact_edit'><a href=\"working_bd_4_edit.php?id=$row[0]\" target='_blank'>Редактровать $row[0]</a></td>";
        for ($l = 0 ; $l < 1 ; ++$l) echo "<td class='contact_delete'><a href=\"working_bd_4_delete.php?id=$row[0]\" target='_blank'>Удалить $row[0]</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
}
mysqli_close($link);

echo "<p><a href='working_form_examples.php'>Форма добавления</a></p>";

include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
