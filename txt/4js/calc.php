<html>
    <head>
		<title>Простейший калькулятор, v1</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description"  content="Простейший калькулятор" />
		<meta name="robots" content="index, follow">
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/scripts.php"); ?>
</head>
<body>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<div class="contet">
<h1>Простейший калькулятор</h1>

<p>Будем делать простейший калькулятор, для работы с пройстейшими аритфметическими действиями</p>
<p>Срабатывает при загрузке страницы</p>
<p><script>

 var a = parseInt(prompt('Введите первое число', Number(''))), b = parseInt(prompt('Введите второе число', Number(''))), matFunction = prompt('Можем приплосовать, отнять или узнать остаток от деления', '');

  if (matFunction=='+') {
	  document.write(a+b);
  }
  else if (matFunction=='-') {
	  document.write(a-b);
  }
  else if (matFunction=='%') {
	  document.write(a%b);
  }
  else {
	  document.write('упс, что-то пошло не так');
  }
  //parseIn или number
  
  // var a = prompt('Введите первое число', Number('')), b = prompt('Введите второе число', Number('')), matFunction = prompt('Можем приплосовать, отнять или узнать остаток от деления', '');

  // if (matFunction=='+') {
	  // alert(+a + +b);
  // }
  // else if (matFunction=='-') {
	  // alert(a-b);
  // }
  // else if (matFunction=='%') {
	  // alert(a%b);
  // }
  // else {
	  // alert('упс, что-то пошло не так');
  // }
</script>

  </p>
</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
</body>
</html>