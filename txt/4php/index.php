<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
		<title>Немного PHP</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description"  content="PHP. Просто PHP. Проходи дальше" />
		<meta name="robots" content="index, follow">
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/scripts.php"); ?>
</head>
<body>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<div class="contet">
<h1>Немного PHP</h1>
<p><a href="https://www.php.net/manual/ru/" target="_blank">Мануалы по PHP</a></p>
<p><a href="http://www.php.su/" target="_blank">Мануалы по PHP, v2</a></p>
<p class="like_i"><a href="/txt/4php/phpinfo.php" target="_blank">phpinfo</a></p>

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
<div style=display:none;>
<?php
$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";
?>
<hr>
<?php
define ( 'MY_CONST' , 100 );
echo MY_CONST;
?>
<hr>
<?php
$name = "GeekBrains user";
echo "<p>Hello, $name!</p>";
echo "<hr>";
$ab = мураха;
echo "<p>$ab</p>";
echo '<p>$ab</p>';
?>
<hr>
<?php
$a = 10;
$b = ( boolean )$b;
echo "<hr>";
$a = 'Hello,';
$b = 'world';
$c = $a . $b;
echo $c;
echo "<hr>";
$a = 4;
$b = 5;
echo $a + $b . '<br>' ; // сложение
echo $a * $b . '<br>' ; // умножение
echo $a - $b . '<br>' ; // вычитание
echo $a / $b . '<br>' ; // деление
echo $a % $b . '<br>' ; // остаток от деления
//echo $a ** $b . '<br>' ; // возведение в степень
echo pow ( $a , $b );
echo "<hr>";
$a = 4;
$b = 5;
$a += $b;
echo 'a = ' . $a;
$a = 0;
echo $a ++; // Постинкремент
echo ++ $a ; // Преинкремент
echo $a --; // Постдекремент
echo -- $a ; // Предекремент
echo "<hr>";
$a = 4;
$b = 5;
var_dump ( $a == $b ); // Сравнение по значению
var_dump ( $a === $b ); // Сравнение по значению и типу
var_dump ( $a > $b ); // Больше
var_dump ( $a < $b ); // Меньше
var_dump ( $a <> $b ); // Не равно
var_dump ( $a != $b ); // Не равно
var_dump ( $a !== $b ); // Не равно без приведения типов
var_dump ( $a <= $b ); // Меньше или равно
var_dump ( $a >= $b ); // Больше или равно

echo "<hr>";
?>
</div>

<?php
//типы данных
// функция и метот - чем отличаются
echo '<h3>Начинаем разбор</h3>';
//var_dump
var_dump(printf('<p>ddf</p>'));
// инкатонация строк
// типизация
/*function add(sting $a, string$b){

}*/
function add(string $a, string $b){

	$c = ($a . $b);
	printf($c);

};
$a = 'yugyuguyg';
$b = 'jihuihjo';
add($a,$b);

echo 'price \$';

/*phpinfo();*/


$a = 4;
$b = 5;
echo $a + $b . '<br>' ; // сложение
echo $a * $b . '<br>' ; // умножение
echo $a - $b . '<br>' ; // вычитание
echo $a / $b . '<br>' ; // деление
echo $a % $b . '<br>' ; // остаток от деления
echo '<hr>';
function sum1($a, $b){

	$c = ($a + $b);
	printf($c);

};
$a = '2';
$b = '3';
sum1($a,$b);
echo "<br>";

function umn1($a, $b){

	$c = ($a * $b);
	printf($c);

};
$a = '4';
$b = '5';
umn1($a,$b);
echo "<br>";

function del1($a, $b){

	$c = ($a / $b);
	printf($c);

};
$a = '6';
$b = '7';
del1($a,$b);
//область видимости переменной
// масивы, инициализация, unset

?>

</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
</body>
</html>