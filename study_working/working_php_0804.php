<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<h1>08/04/19</h1>
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

<hr>
<?php
//типы данных
// функция и метот - чем отличаются

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

/*
$arr = [15,17,85,88,19,96,51,1,0,3,7,16,51,96,57];
foreach ($arr as $value) {
	//if ($value === 0) {
	//	break;
	//}


	if ($value === 3) {
		continue;
	}
echo($value);

}
*/
$arr2 = [
0 => 'o5',
1 => '17',
2 => '856ja',
3 => '8a8',
4 => '1h9',
5 => '22',
6 => 'kbhkh',
7 => 'jjjhg',
8 => '48',
9 => '66',
10 => 'lkjlk'
];
//$a = 'a';
foreach ($arr2 as $key => $valuer) {
	//echo $key . '=>' . $valuer . '<br>';
	/*if ($key === 4) {
		continue;
	}
echo $key;
	
	if ($valuer === '66') {
		break;
}
echo $valuer . '<br>';*/
if ($key >=0 && $key <= 5 && strpos($valuer, 'a') != false) {


echo $valuer . '<br>';
}
//echo $valuer . '<br>';


}




	include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php");

?>