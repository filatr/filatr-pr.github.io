<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>

<h1>Работа с файловой системой</h1>


<pre><code>
fopen(filename, mode);
fwrite(handle, string);
fread(handle, length);
fclose(handle);
</code></pre>
<hr>
<pre><code>
$fo = fopen("file.txt", "a");
$text = "assdeeer";
$test = fwrite($fo, $text);
if ($test) echo 'Данные в файл успешно занесены.';
else echo 'Ошибка при записи в файл.';
fclose($fo);
</code></pre>
<hr>


<?php 

$fi = "../study_working/file.txt";
$ffg = "2dfggggggggggggggg2222222222\n";

$rtt = file_put_contents($fi, $ffg,FILE_APPEND);
echo (file_get_contents($fi));

fclose($fi);


include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>