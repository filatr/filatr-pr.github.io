<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>

<h1>Работа с файлами</h1>






<?php 
// https://php.net/manual/ru/book.filesystem.php
// http://www.php.su/articles/?cat=fs&page=005


/*fopen(filename, mode);
fwrite(handle, string);
fread(handle, length);
fclose(handle);*/
/*$fo = fopen("file.txt", "a");
$text = "assdeeer";
$test = fwrite($fo, $text);
if ($test) echo 'Данные в файл успешно занесены.';
else echo 'Ошибка при записи в файл.';
fclose($fo);
*/
// file_get_contents
/*
$fr = file_get_contents("file.txt");

echo $fr;*/
/*
$ddf = file_get_contents("../study-theory/theory-bd-sql.php", "r");
echo $ddf;
*/

// file_put_content
$f = "file.txt";

// $fr = file_get_contents("file.txt");

$ffg = "2dfggggggggggggggg2222222222";

$rtt = file_put_contents($f, $ffg,FILE_APPEND);
echo (file_get_contents($f));

fclose($f);

//echo $fr;


// 

include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>