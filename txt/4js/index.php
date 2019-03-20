<html>
    <head>
		<title>Немного JS</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description"  content="JS. Просто JS. Проходи дальше" />
		<meta name="robots" content="index, follow">
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/scripts.php"); ?>
</head>
<body>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<div class="contet">
<h1>Немного JS: теория и практика</h1>

<p>Полезные сайты</p>
<ul>
<li><a href="https://learn.javascript.ru/" target="_blank">Современный учебник Javascript</a></li>
<li><a href="http://qaru.site/questions/12331/what-is-event-bubbling-and-capturing" target="_blank">Что такое пузырь и захват событий?</a></li>
<li><a href="http://www.linkex.ru/java/inc-dec.php" target="_blank">Инкремент и декремент</a></li>
<li><a href="https://learn.javascript.ru/types-intro" target="_blank">Шесть типов данных, typeof</a></li>
</ul>
<p>Полезный материал</p>
<h2>Шесть типов данных, typeof</h2>
<ol>
<li>Число «number»</li>
<li>Строка «string»</li>
<li>Булевый (логический) тип «boolean»</li>
<li>Специальное значение «null»</li>
<li>Специальное значение «undefined»</li>
<li>Объекты «object»</li>
</ol>

<h3>Оператор typeof</h3>

<p>Оператор typeof возвращает тип аргумента.</p>
<p>У него есть два синтаксиса: со скобками и без:</p>
<ul>
    <li>Синтаксис оператора: typeof x.</li>
    <li>Синтаксис функции: typeof(x).</li>
</ul>
<p>Работают они одинаково, но первый синтаксис короче.</p>

<h2>Будем делать калькулятор</h2>

<script>

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

// </script>
<ol>
<li><a href="calc1.php" target="_blank">Простейший калькулятор, v1</a></li>
<li><a href="calc2.php" target="_blank">Юзаем function</a></li>
</ol>


  
</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
</body>
</html>