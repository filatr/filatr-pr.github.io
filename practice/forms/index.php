<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
		<title>Формы</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description"  content="Песочница. Просто песочница. Проходи дальше" />
		<meta name="robots" content="index, follow">
<?php include ("{$_SERVER['DOCUMENT_ROOT']}template/inc/scripts.php"); ?>
</head>
<body>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}template/inc/header.php"); ?>
<div class="contet txt">

<h1>Работа с формой</h1>

<p>Источнии</p>
<ul>
	<li><a href="https://www.php.net/manual/ru/tutorial.forms.php" target="_blank">Работа с формами</a></li>
	<li><a href="http://www.php.su/articles/?cat=examples&page=069" target="_blank">HTML-формы</a></li>
	<li>Об формах на htmlbook
		<ul>
		<li><a href="http://htmlbook.ru/html/form" target="_blank">Тег &lt;form&gt;</a></li>
		<li><a href="http://htmlbook.ru/samhtml5/formy" target="_blank">Формы</a></li>
		</ul>
	</li>
	<li><a href="http://www.php.su/phphttp/forms/?send" target="_blank">Передача параметров с помощью HTML-форм</a></li>
	<li><a href="https://htmlweb.ru/php/php_form.php" target="_blank">Работа с формами</a></li>
</ul>
<p>Тег <span class="tag">&lt;form&gt;</span> устанавливает форму на веб-странице. Форма предназначена для обмена данными между пользователем и сервером. Область применения форм не ограничена отправкой данных на сервер, с помощью клиентских скриптов можно получить доступ к любому элементу формы, изменять его и применять по своему усмотрению.</p>
<p>Документ может содержать любое количество форм, но одновременно на сервер может быть отправлена только одна форма. По этой причине данные форм должны быть независимы друг от друга.</p>
<p>Для отправки формы на сервер используется кнопка Submit, того же можно добиться, если нажать клавишу <span class="button_enter">Enter</span> в пределах формы. Если кнопка Submit отсутствует в форме, клавиша <span class="button_enter">Enter</span> имитирует ее использование.</p>
<p>Когда форма отправляется на сервер, управление данными передается программе, заданной атрибутом <span class="attribute">action</span> тега <span class="tag">&lt;form&gt;</span>. Предварительно браузер подготавливает информацию в виде пары «имя=значение», где имя определяется атрибутом <span class="attribute">name</span> тега <span class="tag">&lt;input&gt;</span>, а значение введено пользователем или установлено в поле формы по умолчанию. Если для отправки данных используется метод <span class="value">GET</span>, то адресная строка может принимать следующий вид.</p>
<p class="example">/practice/forms/action.php?answer=a5</p>
<p>Параметры перечисляются после вопросительного знака, указанного после адреса CGI-программы и разделяются между собой символом амперсанда (&). Нелатинские символы преобразуются в шестнадцатеричное представление (в форме %HH, где HH — шестнадцатеричный код для значения ASCII-символа), пробел заменяется на плюс (+).</p>
<p>Допускается внутрь контейнера <span class="tag">&lt;form&gt;</span> помещать другие теги, при этом сама форма никак не отображается на веб-странице, видны только ее элементы и результаты вложенных тегов.</p>

<h2>Сама форма</h2>
<fieldset>
    <legend>Пример 1</legend>
<form action="action.php" method="post">
<p>От куда Вы</p>
<p><input type="radio" name="answer" value="a1">Киев</p>
<p><input type="radio" name="answer" value="a2">Одесса</p>
<p><input type="radio" name="answer" value="a3">Львов</p>
<p><input type="radio" name="answer" value="a4">Харьков</p>
<p><input type="radio" name="answer" value="a5">Полтава</p>
<p><input type="radio" name="answer" value="a6">Др. город</p>
<p><input type="submit"></p>
</form>
</fieldset>

<fieldset>
    <legend>Пример 2</legend>
<form action="action.php" method="post">
 <p>Ваше имя: <input type="text" name="name" /></p>
 <p>Ваш возраст: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form>
</fieldset>

<fieldset>
    <legend>Пример 3</legend>
<form action="" method="post">
    Имя:  <input type="text" name="personal[name]" /><br />
    Email: <input type="text" name="personal[email]" /><br />
    Пиво: <br />
    <select multiple name="beer[]">
        <option value="warthog">Warthog</option>
        <option value="guinness">Guinness</option>
        <option value="stuttgarter">Stuttgarter Schwabenbräu</option>
    </select><br />
    <input type="submit" value="Отправь меня!" />
</form>
</fieldset>

<?php
if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}
?>


<fieldset>
    <legend>Тестовая форма, пример 4</legend>

<form name="form1" method="post" action="script.php">
<p><span>Текстовое поле: </span>
<input type="text" name="textfield">
</p>
<p>Поле ввода пароля:
<input type="password" name="pswfield">
</p>
<p>Скрытое поле hidden
<input name="hidden" type="hidden" id="hidden" value="Скрытое_значение">
</p>
<hr size="1">
<p>Независимые переключатели (checkbox):</p>
<p>
<input type="checkbox" name="checkbox1" value="1">
Вариант первый
<input type="checkbox" name="checkbox2" value="1">
Вариант второй
<input type="checkbox" name="checkbox3" value="1" checked>
Вариант третий (по умолчанию)</p>
<hr size="1">
<p>Зависимые переключатели (radio):</p>
<p>
<input name="radiobutton" type="radio" value="yes">
Да
<input name="radiobutton" type="radio" value="no">
Нет</p>
<hr size="1">
<p>Многострочное текстовое поле (textarea):</p>
<p>
<textarea name="textarea" cols="40" rows="10">Текст по умолчанию</textarea>
</p>
<hr size="1">
<p>Список с единственным выбором:</p>
<p>
<select name=day_s size=1>
<option value=1>Понедельник</option>
<option value=2>Вторник</option>
<option value=3 selected>Среда</option>
<option value=4>Четверг</option>
<option value=5>Пятница</option>
<option value=6>Суббота</option>
<option value=7>Воскресенье</option>
</select>
</p>
<p>Список с множественным выбором (multiple):</p>
<p>
<select name=day_m[] size=7 multiple>
<option value=1 selected>Понедельник</option>
<option value=2>Вторник</option>
<option value=3>Среда</option>
<option value=4>Четверг</option>
<option value=5>Пятница</option>
<option value=6>Суббота</option>
<option value=7>Воскресенье</option>
</select>
</p>
<hr size="1">
<p>
<input type="submit" value="Отослать форму">
&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Очистить форму">
</p>
</form>
</fieldset>
111
</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}template/inc/footer.php"); ?>
</body>
</html>