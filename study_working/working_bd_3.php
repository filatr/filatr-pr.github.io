<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>

<h1>Вывод данных их 3 таблиц в 4ю, группировка</h1>
<p>Есть 3 таблицы: offers (товары), operators (операторы), requests (заказы)</p>

<?php require_once ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/connection.php");

$link = mysqli_connect($servername, $username, $password, $dbname)
or die("Ошибка " . mysqli_error($link));
$link->set_charset("utf8");

$query ="SELECT * FROM offers";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    $rows = mysqli_num_rows($result);

    echo "<h2>Товары</h2>
    <table class='table offers'>
	<tr>
	<th>Id</th>
	<th>Товар</th>
	</tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        echo "<tr>";
        $row = mysqli_fetch_row($result);
        for ($j = 0 ; $j < 2 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
}

$query ="SELECT * FROM operators";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    $rows = mysqli_num_rows($result);

    echo "<h2>Операторы</h2>
    <table class='table operators'>
    <tr>
	<th>Id</th>
	<th>Должность</th>
	<th>Имя, Фамилия</th>
	</tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
        for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
}

$query ="SELECT * FROM requests";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    $rows = mysqli_num_rows($result);

    echo "<h2>Заказы</h2>
    <table class='table requests'>
    <tr>
	<th>Id</th>
	<th>Id товара</th>
	<th>Цена</th>
	<th>Количество заказов</th>
	<th>Id оператора</th>
	</tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
        for ($j = 0 ; $j < 5 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
}

mysqli_close($link); ?>

<p>Вывести такие варианты запросов:</p>
<ol>
    <li>Номер заказа, имя товара, цена, количество, имя оператора за которым числится заказ ,ГДЕ количество товара >2 И id оператора 10 ИЛИ 12</li>
    <li>Имя товара, количество товара, и сумма (price) по каждому товару (сгруппировать)</li>
</ol>

<?php require_once ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/connection.php");

$link = mysqli_connect($servername, $username, $password, $dbname)
or die("Ошибка " . mysqli_error($link));
$link->set_charset("utf8");

$query ="
SELECT requests.id, offers.name, requests.price, requests.count, requests.operator_id 
FROM requests
INNER JOIN offers
ON offers.id = requests.offer_id
INNER JOIN operators
ON operators.id = requests.operator_id WHERE operators.id = '12' or operators.id = '10' and requests.count > '2'
ORDER BY requests.operator_id
";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

if($result)
{
    $rows = mysqli_num_rows($result);

    echo "<h2>Выполнение п.1</h2>
    <table class='table'>
    <tr>
        <th>Номер заказа</th>
        <th>Товар</th>
        <th>Цена</th>
        <th>Количество</th>
        <th>Оператор</th>
	</tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
        for ($j = 0 ; $j < 5 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_free_result($result);
}
$query ="
SELECT offers.name, requests.price*SUM(requests.count), SUM(requests.count)
FROM requests
INNER JOIN offers
ON offers.id = requests.offer_id
GROUP BY offers.id
ORDER BY offers.id
";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк

    echo "<h2>Выполнение п.2</h2>
    <table class='table'>
    <tr>
        <th>Товар</th>
        <th>Сума</th>
        <th>Количество</th>
	</tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
        for ($k = 0 ; $k < 3 ; ++$k) echo "<td>$row[$k]</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_free_result($result);
}

mysqli_close($link); ?>

<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
