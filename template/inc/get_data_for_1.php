<?php
        $res=get_dat1();
        echo json_encode($res);

        function get_dat1(){

            require_once ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/connection.php");

            $link = mysqli_connect($servername, $username, $password, $dbname)
            or die("Ошибка " . mysqli_error($link));
            $link->set_charset("utf8");

            $query = "SELECT r.id, o.name, r.price, r.count, c.id AS oper FROM Offers o RIGHT OUTER JOIN Requests r ON o.id = r.offer_id LEFT OUTER JOIN Operators c ON r.operator_id = c.id WHERE r.count > 2 AND r.operator_id IN (10,12) ";
            $result = mysqli_query($link, $query);
            $data = null;
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
            return $data;
        }