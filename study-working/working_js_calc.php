<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
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
<p>Код скрипта</p>
<pre>
<code>
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
</code>
</pre>

<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
<?php //include '../template/inc/footer.php'; ?>