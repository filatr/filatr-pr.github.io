<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
		<title>Формы</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description"  content="Песочница. Просто песочница. Проходи дальше" />
		<meta name="robots" content="index, follow">
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/scripts.php"); ?>
</head>
<body>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<div class="contet txt">

<h1>Работа с формой</h1>

<p>Тег <span class="tag">&lt;form&gt;</span> устанавливает форму на веб-странице. Форма предназначена для обмена данными между пользователем и сервером. Область применения форм не ограничена отправкой данных на сервер, с помощью клиентских скриптов можно получить доступ к любому элементу формы, изменять его и применять по своему усмотрению.</p>
<p>Документ может содержать любое количество форм, но одновременно на сервер может быть отправлена только одна форма. По этой причине данные форм должны быть независимы друг от друга.</p>
<p>Для отправки формы на сервер используется кнопка Submit, того же можно добиться, если нажать клавишу <span class="button_enter">Enter</span> в пределах формы. Если кнопка Submit отсутствует в форме, клавиша <span class="button_enter">Enter</span> имитирует ее использование.</p>
<p>Когда форма отправляется на сервер, управление данными передается программе, заданной атрибутом <span class="attribute">action</span> тега <span class="tag">&lt;form&gt;</span>. Предварительно браузер подготавливает информацию в виде пары «имя=значение», где имя определяется атрибутом <span class="attribute">name</span> тега <span class="tag">&lt;input&gt;</span>, а значение введено пользователем или установлено в поле формы по умолчанию. Если для отправки данных используется метод <span class="value">GET</span>, то адресная строка может принимать следующий вид.</p>
<p class="example">/txt/page_6/URL?answer=a3</p>
<p>Параметры перечисляются после вопросительного знака, указанного после адреса CGI-программы и разделяются между собой символом амперсанда (&). Нелатинские символы преобразуются в шестнадцатеричное представление (в форме %HH, где HH — шестнадцатеричный код для значения ASCII-символа), пробел заменяется на плюс (+).</p>
<p>Допускается внутрь контейнера <span class="tag">&lt;form&gt;</span> помещать другие теги, при этом сама форма никак не отображается на веб-странице, видны только ее элементы и результаты вложенных тегов.</p>

<h2>Сама форма</h2>
<h3>Пример 1</h3>

<form action="URL">
<p>От куда Вы</p>
<p><input type="radio" name="answer" value="a1">Киев</p>
<p><input type="radio" name="answer" value="a2">Одесса</p>
<p><input type="radio" name="answer" value="a3">Львов</p>
<p><input type="radio" name="answer" value="a4">Харьков</p>
<p><input type="radio" name="answer" value="a5">Др. город</p>
<p><input type="submit"></p>
</form>
</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
</body>
</html>