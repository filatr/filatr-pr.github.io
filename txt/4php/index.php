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
echo '<h2>Начинаем разбор</h2>';
//var_dump
var_dump(printf('<h2>ddf</h2>'));
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




?>
</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
</body>
</html>