<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<h1>Практикум по цыклам</h1>

<p>Задача 1</p>
<p>В наличии HTML'ный сайт (сайт не имеет БД ак таковой). Реализовать вывод мета-тегов в отдельном файле с привязкой к страницам.</p>
<p>Реализация:</p>
<p>Создаем отдельный файл с расщирением .php и "подключаем" к шаблону с помощью include. В самом файле пишем следующий код:</p>
<p>Вариант №1</p>
<pre><code>
if ($_SERVER['REQUEST_URI']=='/') {
	$title = "Песочница";
}
elseif ($_SERVER['REQUEST_URI']=='/study_theory/') {
	$title = "Теория";
}
elseif ($_SERVER['REQUEST_URI']=='/study_theory/theory_js.php') {
	$title = "JS: теория";
}
elseif ($_SERVER['REQUEST_URI']=='/study_theory/theory_php.php') {
	$title = "PHP: теория";
}
elseif ($_SERVER['REQUEST_URI']=='/study_theory/theory_bd_sql.php') {
	$title = "БД и SQL запросы";
}
else $title = "Песочница";
</code></pre>
<p>Вариант №2</p>
<pre><code>
switch ($_SERVER['REQUEST_URI']) {
	case "/":
		$title = "Песочница";
	break;
	case "/study_theory/":
		$title = "Теория";
	break;
	case "/study_theory/theory_js.php":
		$title = "JS: теория";
	break;
	case "/study_theory/theory_php.php":
		$title = "PHP: теория";
	break;
	case "/study_theory/theory_bd_sql.php":
		$title = "БД и SQL запросы";
	break;
}
</code></pre>
<hr>




<?php




	include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php");

?>