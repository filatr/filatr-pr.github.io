<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
		<title>Занятие от 08/04</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description"  content="PHP. Просто PHP. Проходи дальше" />
		<meta name="robots" content="index, follow">
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/scripts.php"); ?>
</head>
<body>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<div class="contet">
<h1>08/04/19</h1>
<?php
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


// continue

//  на следюзантие - формы
// асоциативный массив
//strripos
// strpos
?>



</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
</body>
</html>