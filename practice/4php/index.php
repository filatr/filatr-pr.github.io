<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
		<title>Немного PHP</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description"  content="PHP. Просто PHP. Проходи дальше" />
		<meta name="robots" content="index, follow">
<?php include ("{$_SERVER['DOCUMENT_ROOT']}template/inc/scripts.php"); ?>
</head>
<body>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}template/inc/header.php"); ?>
<div class="contet">
<h1>Немного PHP</h1>
<p><a href="https://www.php.net/manual/ru/" target="_blank">Мануалы по PHP</a></p>
<p><a href="http://www.php.su/" target="_blank">Мануалы по PHP, v2</a></p>
<p class="like_i"><a href="/practice/4php/phpinfo.php" target="_blank">phpinfo</a></p>

<h2>Типы данных</h2>
<div class="php_type">
<p>PHP поддерживает восемь простых типов данных (переменных):</p>
<p>Четыре скалярных типа:</p>
<ol>
    <li>boolean (двоичные данные)</li>
    <li>integer (целые числа)</li>
    <li>float (числа с плавающей точкой или 'double')</li>
    <li>string (строки)</li>
</ol>
<p>Два смешанных типа:</p>
<ol start="5">
    <li>array (массивы)</li>
    <li>object (объекты)</li>
</ol>
<p>И два специальных типа:</p>
<ol start="7">
    <li>resource (ресурсы)</li>
    <li>NULL ("пустой" тип)</li>
</ol>
<p>Существуют также несколько псевдотипов:</p>
<ul>
    <li>mixed (смешанный)</li>
    <li>number (числовой)</li>
    <li>callback (обратного вызова)</li>
</ul>
<p class="like_i"><a href="http://www.php.su/learnphp/vars/?types" target="_blank">Источник 1</a></p>
</div>


<?php
/*

функция и метод - чем отличаются
	https://puzzleweb.ru/php/23_function.php
	https://puzzleweb.ru/php/23_function2.php#a2
	http://php720.com/lesson/42
var_dump
инкатонация строк
типизация
область видимости переменной
масивы, инициализация, unset
*/
?>

<h2>include и require</h2>
<ul>
<li><a href="https://www.php.net/manual/ru/function.include.php" target="_blank">include</a></li>
<li><a href="https://www.php.net/manual/ru/function.require.php" target="_blank">require</a></li>
</ul>

<h3>Различие между include и require</h3>
<p>При ошибке:</p>
<ul>
<li>include выдаст предупреждение E_WARNING и продолжить выполнение скрипта;</li>
<li>require выдаст также и фатальную ошибку уровня E_COMPILE_ERROR и остановит выполнение скрипта.</li>
</ul>
<h2>Практика</h2>
<ul>
<li><a href="other.php" target="_blank">Разное</a></li>
<li><a href="0804.php" target="_blank">08/04</a></li>
<li><a href="/practice/forms/" target="_blank">Форма(ы)</a></li>
</ul>



</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}template/inc/footer.php"); ?>
</body>
</html>