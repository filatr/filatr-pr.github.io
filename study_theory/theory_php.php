<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<h1>Немного PHP: теория</h1>
<ul>
<li><a href="https://www.php.net/manual/ru/" target="_blank">Мануалы по PHP</a></li>
<li><a href="http://www.php.su/" target="_blank">Мануалы по PHP, v2</a></li>
<li>Масивы
	<ul>
		<li>Масивы на <a href="https://www.php.net/manual/ru/book.array.php" target="_blank">php.net</a></li>
		<li>Масивы на <a href="http://www.php.su/learnphp/datatypes/?array" target="_blank">php.su</a></li>
	</ul>
</li>
<li><a href="http://www.php.su/learnphp/cs/?cycles" target="_blank">Немного о функциях</a></li>
<li><a href="https://developer.mozilla.org/ru/docs/Web/HTTP/Session" target="_blank">HTTP сессия</a></li>
<li><a href="https://www.php.net/manual/ru/session.examples.basic.php" target="_blank">Основы использования</a></li>
<li><a href="http://www.php.su/articles/?cat=examples&page=070" target="_blank">Сессии в PHP</a></li>
<li><a href="http://www.softtime.ru/bookphp/gl8_1.php" target="_blank">Сессии и cookie в PHP</a></li>
<li><a href="https://www.php.net/manual/ru/features.cookies.php" target="_blank">Cookies</a></li>
<li><a href="http://www.php.su/lessons/?lesson_17" target="_blank">Приложение № 3 - О регулярных выражениях.</a></li>
<li><a href="http://archive-ipq-co.narod.ru/l1/regexp.html" target="_blank">Регулярные выражения</a></li>
<li><a href="https://metanit.com/web/php/5.1.php" target="_blank">Работа с файловой системой</a></li>
<li><a href="https://php.net/manual/ru/book.filesystem.php" target="_blank">Файловая система</a></li>
<li><a href="http://www.php.su/articles/?cat=fs&page=005" target="_blank">PHP. Работа с файлами</a></li>
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
инкатонация строк<br>
типизация<br>
область видимости переменной<br>
инициализация<br>
continue<br>
формы<br>
асоциативный массив<br>

<hr>
<h2>Массивы (Array)</h2>

<p>Массивы (arrays) - это упорядоченные наборы данных, представляющие собой список однотипных элементов.</p>
<p>Существует два типа массивов, различающиеся по способу идентификации элементов.</p>
<ol>
<li>В массивах первого типа элемент определяется индексом в последовательности. Такие массивы называются простыми массивами.</li>
<li>Массивы второго типа имеют ассоциативную природу, и для обращения к элементам используются ключи, логически связанные со значениями. Такие массивы называют ассоциативными массивами.</li>
</ol>
<p>Важной особенностью PHP является то, что PHP, в отличие от других языков, позволяет создавать массивы любой сложности непосредственно в теле программы (скрипта).</p>
<p>Массивы могут быть как одномерными, так и многомерными.</p>

...
<hr>
<h2>Функции</h2>
<p>Небольшая памятка по тем функциям, которые мне встречалось видеть в коде другиъ программ</p>
<ul>
<li><a href="https://www.php.net/manual/ru/function.empty.php" target="_blank">empty</a> — Проверяет, пуста ли переменная</li>
<li><a href="https://www.php.net/manual/ru/function.isset.php" target="_blank">isset</a> — Определяет, была ли установлена переменная значением, отличным от <span class="like_b">NULL</span></li>
<li><a href="https://www.php.net/manual/ru/function.unset.php" target="_blank">unset</a> — Удаляет переменную</li>
<li><a href="https://www.php.net/manual/ru/function.strripos.php" target="_blank">strripos</a> — Возвращает позицию последнего вхождения подстроки без учета регистра</li>
<li><a href="https://www.php.net/manual/ru/function.strripos.php" target="_blank">strpos</a> — Возвращает позицию первого вхождения подстроки</li>
<li><a href="https://www.php.net/manual/ru/function.var-dump.php" target="_blank">var_dump</a> — Выводит информацию о переменной</li>
<li><a href="https://www.php.net/manual/ru/function.include.php" target="_blank">include</a> -  выражение включает и выполняет указанный файл
	<ul><li>При ошибке include выдаст предупреждение E_WARNING и продолжить выполнение скрипта;</li></ul>
</li>
<li><a href="https://www.php.net/manual/ru/function.require.php" target="_blank">require</a> -  выражение включает и выполняет указанный файл
	<ul><li>При ошибке require выдаст также и фатальную ошибку уровня E_COMPILE_ERROR и остановит выполнение скрипта.</li></ul>
</li>
</ul>


<hr>
<h2>Сессия</h2>

<ul>
<li><a href="https://www.php.net/manual/ru/session.examples.basic.php" target="_blank">Основы использования</a></li>
<li><a href="http://www.php.su/articles/?cat=examples&page=070" target="_blank">Сессии в PHP</a></li>
<li><a href="http://www.softtime.ru/bookphp/gl8_1.php" target="_blank">Сессии и cookie в PHP</a></li>
<li><a href="http://anton.shevchuk.name/php/php-for-beginners-session/" target="_blank">Сессия // PHP</a></li>
<li><a href="https://php.ru/forum/threads/avtorizacija-sessii-i-cookies.58468/" target="_blank">Авторизация, сессии и cookies</a></li>
</ul>

<p>Веб-сервер не поддерживает постоянного соединения с клиентом, и каждый запрос обрабатывается, как новый, без связи с предыдущими.</p>

<p>То есть, нельзя ни отследить запросы от одного и того же посетителя, ни сохранить для него переменные между просмотрами отдельных страниц. Вот для решения этих двух задач и были изобретены сессии.
Собственно, сессии, если в двух словах - это механизм, позволяющий однозначно идентифицировать браузер и создающий для этого браузера файл на сервере, в котором хранятся переменные сеанса.</p>

<hr>
<h2>Cookies</h2>
<p>Cookies - это механизм хранения данных браузером удаленной машины для отслеживания или идентификации возвращающихся посетителей.</p>

<p>setcookie() задает cookie, которое будет передано клиенту вместе с другими HTTP-заголовками. Как и любой другой заголовок, cookie должны передаваться до того как будут выведены какие-либо другие данные скрипта (это ограничение протокола). Это значит, что в скрипте вызовы этой функции должны располагаться до остального вывода, включая вывод тегов html и head, а также пустые строки и пробельные символы.</>
<p>После передачи клиенту cookie станут доступны через массив $_COOKIE при следующей загрузке страницы. Значения cookie также есть в $_REQUEST. </p>
<ul>
<li><a href="https://www.php.net/manual/ru/features.cookies.php" target="_blank">Cookies</a></li>
<li><a href="https://www.php.net/manual/ru/function.setcookie.php" target="_blank">setcookie</a></li>
<li><a href="http://code.mu/books/php/auth/avtorizaciya-polzovatelej-cherez-kuki-na-php.html" target="_blank">Авторизация пользователей через куки (cookie)</a></li>
</ul>
<hr>
<h2>Регулярные выражения</h2>
<p>Говорят, что рег.выражения - сила, вспоминая при этом про парсер'ы. Бум разбиратся</p>
<p>Регулярные выражения - мощный гибкий инструмент для синтаксического анализа текста в соответствии с определенным шаблоном.</p>

<ul>
<li><a href="http://www.php.su/lessons/?lesson_17" target="_blank">Приложение № 3 - О регулярных выражениях.</a></li>
<li><a href="http://archive-ipq-co.narod.ru/l1/regexp.html" target="_blank">Регулярные выражения</a></li>
<li><a href="http://www.cyberforum.ru/php-regex/thread631382.html" target="_blank">Памятка по регулярным выражениям PCRE в PHP </a></li>
<li><a href="http://forum.php.su/forums.php?forum=4" target="_blank">Форумы портала PHP.SU » PHP » Регулярные выражения</a></li>
<li><a href="http://www.php.su/articles/?cat=regexp&page=008" target="_blank">Регулярные выражения (шаблоны)</a></li>
<li><a href="https://www.internet-technologies.ru/articles/regulyarnye-vyrazheniya-php.html" target="_blank">Регулярные выражения PHP</a></li>
</ul>
<h3>Функции PCRE</h3>

<ul>
<li><a href="https://www.php.net/manual/ru/function.preg-filter.php">preg_filter</a> — Производит поиск и замену по регулярному выражению</li>
<li><a href="https://www.php.net/manual/ru/function.preg-grep.php">preg_grep</a> — Возвращает массив вхождений, которые соответствуют шаблону</li>
<li><a href="https://www.php.net/manual/ru/function.preg-last-error.php">preg_last_error</a> — Возвращает код ошибки выполнения последнего регулярного выражения PCRE</li>
<li><a href="https://www.php.net/manual/ru/function.preg-match-all.php">preg_match_all</a> — Выполняет глобальный поиск шаблона в строке</li>
<li><a href="https://www.php.net/manual/ru/function.preg-match.php">preg_match</a> — Выполняет проверку на соответствие регулярному выражению</li>
<li><a href="https://www.php.net/manual/ru/function.preg-quote.php">preg_quote</a> — Экранирует символы в регулярных выражениях</li>
<li><a href="https://www.php.net/manual/ru/function.preg-replace-callback-array.php">preg_replace_callback_array</a> — Выполняет поиск и замену по регулярному выражению с использованием функций обратного вызова</li>
<li><a href="https://www.php.net/manual/ru/function.preg-replace-callback.php">preg_replace_callback</a> — Выполняет поиск по регулярному выражению и замену с использованием callback-функции</li>
<li><a href="https://www.php.net/manual/ru/function.preg-replace.php">preg_replace</a> — Выполняет поиск и замену по регулярному выражению</li>
<li><a href="https://www.php.net/manual/ru/function.preg-split.php">preg_split</a> — Разбивает строку по регулярному выражению</li>
</ul>

<hr>
<h2>Работа с файловой системой</h2>
<ul>
<li><a href="https://metanit.com/web/php/5.1.php" target="_blank">Работа с файловой системой</a></li>
<li><a href="https://php.net/manual/ru/book.filesystem.php" target="_blank">Файловая система</a></li>
<li><a href="http://www.php.su/articles/?cat=fs&page=005" target="_blank">PHP. Работа с файлами</a></li>
</ul>
<hr>

<h2>Практика</h2>
<ul>
<li>Первое практическое знакомство с PHP <a href="/study_working/working_php_0804.php">тут</a> и <a href="/study_working/working_php_other.php">тут</a></li>
<li><a href="/study_working/working_form_examples.php">PHP в формах</a></li>
<li>PHP в при работе с БД <a href="/study_working/working_bd_homework_1.php">Домашка 1</a></li>
<li>PHP в при работе с БД <a href="/study_working/working_bd_homework_2.php">Домашка 2</a></li>
<li><a href="/study_working/working_php_cycle.php">Цыклы</a></li>
<li><a href="/study_working/working_cookies.php">Первое практическое знакомство cессиями и  cookie</a></li>
<li><a href="/study_working/working_php_regular.php">Регулярные выражения</a></li>
<li><a href="/study_working/working_php_file_system.php">Работа с файловой системой</a></li>
</ul>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
<?php //include '../template/inc/footer.php'; ?>