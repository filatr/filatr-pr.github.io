<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
		<title>Разное</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description"  content="Песочница. Просто песочница. Проходи дальше" />
		<meta name="robots" content="index, follow">
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/scripts.php"); ?>
</head>
<body>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<div class="contet txt">
<h1>Разное</h1>
<p>Источники</p>
<ul>
	<li><a href="https://uk.wikipedia.org/wiki/CURL" target="_blank">cURL [wikipedia ua]</a>
		<ul>
			<li><a href="https://curl.haxx.se/" target="_blank">"Родной сайт"</a></li>
			<li><a href="https://github.com/curl/curl" target="_blank">GIThub</a></li>
		</ul>
	</li>
	<li><a href="https://losst.ru/kak-polzovatsya-curl" target="_blank">Как пользоваться curl</a></li>
	<li><a href="https://developer.mozilla.org/ru/docs/Web/HTTP/Session" target="_blank">HTTP сессия</a></li>
    <li><a href="https://www.php.net/manual/ru/session.examples.basic.php" target="_blank">Основы использования</a></li>
    <li><a href="http://www.php.su/articles/?cat=examples&page=070" target="_blank">Сессии в PHP</a></li>
    <li><a href="http://www.softtime.ru/bookphp/gl8_1.php" target="_blank">Сессии и cookie в PHP</a></li>
    <li><a href="https://www.php.net/manual/ru/features.cookies.php" target="_blank">Cookies</a></li>
</ul>
<hr>
<h2>cURL</h2>

<p>Нам часто приходится загружать различные файлы из интернета, например, исполняемые файлы программ, файлы скриптов, архивы с исходниками. Но не всегда это нужно делать через браузер. Во многих ситуациях гораздо проще выполнить все действия через терминал. Поскольку таким образом вы можете автоматизировать процесс. С другой стороны, веб-мастерам время от времени приходится тестировать доступность веб-сайтов, проверять отправляемые и получаемые заголовки и многое другое.</p>
<p>Для решения таких задач и задач подобного круга можно воспользоваться утилитой curl. Она позволяет решить намного более широкий круг задач, среди которых даже имитация действий пользователя на сайте. В этой статье мы рассмотрим как пользоваться curl, что это такое и зачем нужна эта программа.</p>
<h3>Что такое curl?</h3>
<p>Кроссплатформенная служебная программа командной строки, позволяющая взаимодействовать с множеством различных серверов по множеству различных протоколов с синтаксисом URL.</p>
<p>Программа cURL может автоматизировать передачу файлов или последовательность таких операций. Например, это хорошее средство для моделирования действий пользователя в веб-обозревателе.</p>
<p>Программа поддерживает протоколы: FTP, FTPS, HTTP, HTTPS, TFTP, SCP, SFTP, Telnet, DICT, LDAP, а также POP3, IMAP и SMTP. Также cURL поддерживает сертификаты HTTPS, методы HTTP POST, HTTP PUT, загрузку на FTP, загрузку через формы HTTP.</p>
<p>Поддерживаемые методы аутентификации: базовая, дайджест, NTLM и Negotiate для HTTP, а также Kerberos для FTP.</p>
<p>Возможно возобновление передачи файла с места обрыва (при поддержке протоколом), туннелирование через HTTP-прокси, поддержка HTTP-Cookie.</p>
<p>cURL — это не офлайн-браузер типа HTTrack и не может целиком загрузить содержимое сайта.</p>
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
    <ul><li><a href="https://www.php.net/manual/ru/features.cookies.php" target="_blank">Cookies</a></li></ul>
</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}template/inc/footer.php"); ?>
</body>
</html>