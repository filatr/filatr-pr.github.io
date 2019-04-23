<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<h1>Немного PHP: теория</h1>
<ul>
	<li><a href="https://www.php.net/manual/ru/" target="_blank">Мануалы по PHP</a></li>
	<li><a href="http://www.php.su/" target="_blank">Мануалы по PHP, v2</a></li>
	<li><a href="http://www.php.su/learnphp/cs/?cycles" target="_blank">Немного о функциях</a></li>
	<li><a href="https://developer.mozilla.org/ru/docs/Web/HTTP/Session" target="_blank">HTTP сессия</a></li>
    <li><a href="https://www.php.net/manual/ru/session.examples.basic.php" target="_blank">Основы использования</a></li>
    <li><a href="http://www.php.su/articles/?cat=examples&page=070" target="_blank">Сессии в PHP</a></li>
    <li><a href="http://www.softtime.ru/bookphp/gl8_1.php" target="_blank">Сессии и cookie в PHP</a></li>
    <li><a href="https://www.php.net/manual/ru/features.cookies.php" target="_blank">Cookies</a></li>
	<li><a href="http://www.php.su/lessons/?lesson_17" target="_blank">Приложение № 3 - О регулярных выражениях.</a></li>
	<li><a href="http://archive-ipq-co.narod.ru/l1/regexp.html" target="_blank">Регулярные выражения</a></li>
</ul>
<p class="like_i"><a href="/phpinfo.php" target="_blank">phpinfo</a></p>
<hr>
<h2>Типы данных</h2>
<div class="php_type">
<p>PHP поддерживает восемь простых типов данных (переменных):</p>
<p>Четыре скалярных типа:</p>
<ol>
    <li>boolean (двоичные данные)</li>
    <li>integer (целые числа)</li>
    <li>float (числа с плавающей точкой или 'double')</li>
    <li>string (строки)</li>
</ol>
<p>Два смешанных типа:</p>
<ol start="5">
    <li>array (массивы)</li>
    <li>object (объекты)</li>
</ol>
<p>И два специальных типа:</p>
<ol start="7">
    <li>resource (ресурсы)</li>
    <li>NULL ("пустой" тип)</li>
</ol>
<p>Существуют также несколько псевдотипов:</p>
<ul>
    <li>mixed (смешанный)</li>
    <li>number (числовой)</li>
    <li>callback (обратного вызова)</li>
</ul>
<p class="like_i"><a href="http://www.php.su/learnphp/vars/?types" target="_blank">Источник 1</a></p>
</div>

<hr>

<p>Разобрать/добавить/выяснить</p>

функция и метод - чем отличаются<br>
	https://puzzleweb.ru/php/23_function.php<br>
	https://puzzleweb.ru/php/23_function2.php#a2<br>
	http://php720.com/lesson/42<br>
var_dump<br>
инкатонация строк<br>
типизация<br>
область видимости переменной<br>
масивы, инициализация, unset<br>
continue<br>
формы<br>
асоциативный массив<br>
strripos<br>
strpos<br>

<hr>

<h2>include и require</h2>
<ul>
<li><a href="https://www.php.net/manual/ru/function.include.php" target="_blank">include</a></li>
<li><a href="https://www.php.net/manual/ru/function.require.php" target="_blank">require</a></li>
</ul>

<h3>Различие между include и require</h3>
<p>При ошибке:</p>
<ul>
<li>include выдаст предупреждение E_WARNING и продолжить выполнение скрипта;</li>
<li>require выдаст также и фатальную ошибку уровня E_COMPILE_ERROR и остановит выполнение скрипта.</li>
</ul>

<hr>
<h2>Сессия</h2>

    <ul>
<li><a href="https://www.php.net/manual/ru/session.examples.basic.php" target="_blank">Основы использования</a></li>
<li><a href="http://www.php.su/articles/?cat=examples&page=070" target="_blank">Сессии в PHP</a></li>
    <li><a href="http://www.softtime.ru/bookphp/gl8_1.php" target="_blank">Сессии и cookie в PHP</a></li>
    </ul>

    <p>Веб-сервер не поддерживает постоянного соединения с клиентом, и каждый запрос обрабатывается, как новый, без связи с предыдущими.</p>

    <p>То есть, нельзя ни отследить запросы от одного и того же посетителя, ни сохранить для него переменные между просмотрами отдельных страниц. Вот для решения этих двух задач и были изобретены сессии.
        Собственно, сессии, если в двух словах - это механизм, позволяющий однозначно идентифицировать браузер и создающий для этого браузера файл на сервере, в котором хранятся переменные сеанса.</p>

<hr>
    <h2>Cookies</h2>
    <p>Cookies - это механизм хранения данных браузером удаленной машины для отслеживания или идентификации возвращающихся посетителей.</p>
    <ul>
		<li><a href="https://www.php.net/manual/ru/features.cookies.php" target="_blank">Cookies</a></li>
		<li><a href="https://www.softtime.ru/bookphp/gl8_2.php" target="_blank">Сессии и cookie в PHP</a></li>
	</ul>
<hr>
<h2>Регулярные выражения</h2>
<p>Говорят, что рег.выражения - сила, вспоминая при этом про парсер'ы. Бум разбиратся</p>

<ul>
<li><a href="http://www.php.su/lessons/?lesson_17" target="_blank">Приложение № 3 - О регулярных выражениях.</a></li>
<li><a href="http://archive-ipq-co.narod.ru/l1/regexp.html" target="_blank">Регулярные выражения</a></li>
</ul>
<hr>

<h2>Практика</h2>
<ul>
<li>Первое практическое знакомство с PHP <a href="/study-working/working_php_0804.php">тут</a> и <a href="/study-working/working_php_other.php">тут</a></li>
<li><a href="/study-working/working_form_examples.php">PHP в формах</a></li>
<li>PHP в при работе с БД <a href="/study-working/working_bd_homework_1.php">Домашка 1</a></li>
<li>PHP в при работе с БД <a href="/study-working/working_bd_homework_2.php">Домашка 2</a></li>
<li><a href="/study-working/working_cookies.php">Первое практическое знакомство cессиями и  cookie</a></li>
</ul>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
<?php //include '../template/inc/footer.php'; ?>