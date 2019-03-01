<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
		<title>Текста</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description"  content="Песочница. Просто песочница. Проходи дальше" />
		<meta name="robots" content="index, follow">
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/scripts.php"); ?>
</head>
<body>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<div class="contet txt">

<p>Поработаем немножко над вертикальным меню с подпунктами</p>

<ul class="vert_menu_test">
<li><a href="/txt/page_1">Готовые страницы</a></li>
<li><a href="/txt/page_2">Страницы, которые надо доработать</a></li>
<li><a href="/txt/page_3">Материал на переделку</a></li>
<li><a href="/txt/page_4">Табы</a></li>
<li><a href="/txt/page_5">Пункт 5</a></li>
<li><a href="javascript:void(0);">Пункт 6</a>
	<ol class="sub_menu_vert_test_ol">
		<li><a href="javascript:void(0);">Пункт 6.1</a></li>
		<li><a href="javascript:void(0);">Пункт 6.2</a></li>
		<li><a href="javascript:void(0);">Пункт 6.3</a></li>
		<li><a href="javascript:void(0);">Пункт 6.4</a>
			<ul  class="sub_menu_vert_test_ul">
				<li><a href="javascript:void(0);">Пункт 6.4.1</a></li>
				<li><a href="javascript:void(0);">Пункт 6.4.2</a></li>
				<li><a href="javascript:void(0);">Пункт 6.4.3</a></li>
			</ul>
		</li>
	</ol>
</li>
<li><a href="javascript:void(0);">Пункт 7</a>
<ul class="sub_menu_vert_test_ul">
	<li><a href="javascript:void(0);">Пункт 7.1</a></li>
	<li><a href="javascript:void(0);">Пункт 7.2</a></li>
	<li><a href="javascript:void(0);">Пункт 7.3</a></li>
	<li><a href="javascript:void(0);">Пункт 7.4</a></li>
</ul>
</li>
</ul>

</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
</body>
</html>