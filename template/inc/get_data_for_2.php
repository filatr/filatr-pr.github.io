<?php

$res=get_dat2();
echo json_encode($res);

function get_dat2(){

    require_once ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/connection.php");

    $link = mysqli_connect($servername, $username, $password, $dbname)
    or die("Ошибка " . mysqli_error($link));
    $link->set_charset("utf8");

    $query = "SELECT o.id, o.name, IFNULL(SUM(r.count),0) as counts, IFNULL(SUM(r.price),0) as prices 
                    FROM Requests r RIGHT JOIN Offers o ON r.offer_id = o.id GROUP BY o.id ";
    $result = mysqli_query($link, $query);
    $data = null;
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}