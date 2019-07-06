<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<h1>Немного PHP: теория</h1>
<ul>
<li><a href="https://www.php.net/manual/ru/" target="_blank">Мануалы по PHP</a> на php.net</li>
<li><a href="http://www.php.su/" target="_blank">Мануалы по PHP</a> на php.su</li>
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
<h2>Что такое PHP?</h2>
    <p>PHP (Hypertext Preprocessor) - это язык программирования общего назначения с открытым исходным кодом. PHP специально сконструирован для веб-разработок.</p>


    <h2>Типы данных</h2>

    <p>Тип данных – это описание, определяющее свойства и порядок обработки данных. Например, фраза “переменная $str имеет тип данных “строка” означает, что в этой переменной может содержаться любое число символов, а операция сложения строк представляет собой последовательное соединение слагаемых строк в одну.</p>
    <p>PHP является языком программирования с динамической типизацией, не требующим указания типа при объявлении переменных, равно как и самого объявления переменных. Преобразования между скалярными типами зачастую осуществляются неявно без дополнительных усилий. Впрочем, PHP предоставляет широкие возможности и для явного преобразования типов.</p>


    <div class="php_type">
        <p>PHP поддерживает восемь простых типов данных (переменных):</p>
        <p>Четыре скалярных типа:</p>
        <ol>
            <li>
                <div class="spoiler_v2">
                    <a class="spoiler-trigger" href="#"><span>boolean (двоичные данные)</span></a>
                    <div class="spoiler-block">
                        <p>Выражает истинность значения - это может быть либо <span class="like_b">TRUE</span>, либо <span class="like_b">FALSE</span></p>
                    </div>
                </div>
            </li>
            <li>
                <div class="spoiler_v2">
                    <a class="spoiler-trigger" href="#"><span>integer (целые числа)</span></a>
                    <div class="spoiler-block"><p>Целое это число из множества Z = {..., -2, -1, 0, 1, 2, ...}, обычно длиной 32 бита (от –2 147 483 648 до 2 147 483 647).</p></div>
                </div>
            </li>
            <li>
                <div class="spoiler_v2">
                    <a class="spoiler-trigger" href="#"><span>float (числа с плавающей точкой или 'double')</span></a>
                    <div class="spoiler-block">
                        <p>Вещественное число довольно большой точности</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="spoiler_v2">
                    <a class="spoiler-trigger" href="#"><span>string (строки)</span></a>
                    <div class="spoiler-block">
                        <p>Набор символов любой длины. Длина строки ограничена только размером свободой оперативной памяти.</p>
                    </div>
                </div>
            </li>
        </ol>
        <p>Два смешанных типа:</p>
        <ol start="5">
            <li>
                <div class="spoiler_v2">
                    <a class="spoiler-trigger" href="#"><span>array (массивы)</span></a>
                    <div class="spoiler-block">
                        <p>Это упорядоченный набор данных, в котором устанавлено соответствие между значением и ключом.</p>
                        <p>Индекс (ключ) служит для однозначной идентификации элемента внутри массива. В одном массиве не может быть двух элементов с одинаковыми индексами.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="spoiler_v2">
                    <a class="spoiler-trigger" href="#"><span>object (объекты)</span></a>
                    <div class="spoiler-block"><p></p></div>
                </div>
            </li>
        </ol>
        <p>И два специальных типа:</p>
        <ol start="7">
            <li>
                <div class="spoiler_v2">
                    <a class="spoiler-trigger" href="#"><span>resource (ресурсы)</span></a>
                    <div class="spoiler-block">
                        Специальная переменная, содержащая ссылку на внешний ресурс.
                    </div>
                </div>
            </li>
            <li>
                <div class="spoiler_v2">
                    <a class="spoiler-trigger" href="#"><span>NULL ("пустой" тип)</span></a>
                    <div class="spoiler-block">
                        <p>Специальное значение <span class="like_b">NULL</span> говорит о том, что эта переменная не имеет значения. <span class="like_b">NULL</span> - это единственно возможное значение типа <span class="like_b">NULL</span> (пустой тип).</p>
                        <p>Переменная считается <span class="like_b">NULL</span> если:</p>
                        <ul>
                            <li>ей была присвоена константа <span class="like_b">NULL</span>;</li>
                            <li>ей еще не было присвоено какое-либо значение;</li>
                            <li>она была удалена с помощью unset().</li>
                        </ul>
                    </div>
                </div>
            </li>
        </ol>
        <p>Существуют также несколько псевдотипов:</p>
        <ul>
            <li>mixed (смешанный)</li>
            <li>number (числовой)</li>
            <li>callback (обратного вызова)</li>
        </ul>
    </div>
    <h3>Конкатенация</h3>
    <p>Конкатенация — это объединение двух или более строк в одну большую. Объединение происходит с помощью оператора конкатенации — . (точка). При конкатенации каждая последующая строка добавляется в конец предыдущей. Значение любого типа, которое объединяется со строкой, будет неявно преобразовано в строку и далее будет произведена конкатенация.</p>
    <h3>Область видимости переменной</h3>
    <p><span class="like_b">Область видимости переменных</span> - это контекст, в рамках которого переменная была определена и где к ней можно получить доступ. В PHP имеется две области видимости переменных:</p>
<ul>
    <li><span class="like_b">Глобальная</span> - к переменным можно получить доступ в любом месте скрипта;</li>
    <li><span class="like_b">Локальная</span> - к переменным можно получить доступ только внутри функции, в которой они были определены;</li>
</ul>
    <p>Область видимости переменной, а особенно, локальная, существенно облегчает управление кодом. Если бы все переменные были глобальными, то их можно было бы менять в любом месте скрипта. Это привело бы к хаосу и больших скриптах, так как очень часто разные части скрипта используют переменные с одинаковыми именами. Ограничивая область видимости локальным контекстом вы определяете границы кода, который может получить доступ к переменной, что делает код  более устойчивым, модульным и простым в отладке.</p>
    <p>Переменные с глобальной областью видимости называются глобальными, а с локальной областью видимости - локальными.</p>
<!-- https://ruseller.com/lessons.php?rub=37&id=751 -->
    <h3>Рекурсия</h3>
    <p><span class="like_b">Рекурсия</span> – это вызов функции из неё же самой, непосредственно (простая рекурсия) или через другие функции (сложная или косвенная рекурсия), например, функция A вызывает функцию B, а функция B – функцию A. Количество вложенных вызовов функции или процедуры называется глубиной рекурсии.</p>
    <h3>Разница между одинарными и двойными кавычками</h3>
    <p>В двойных кавычках данные “парсятся”, а в одинарных – нет.</p>
    <p>Разница между ' и " заключается в том, что вы можете вставлять переменные внутри строки с двойными кавычками.</p>
    <p>Например:</>
    <pre><code>$name = 'John';
$sentence = "$name just left"; // John just left
</code></pre>
    <p>Если вы будете использовать одинарные кавычки, то вам придется объединить:</p>
    <pre><code>$name = 'John';
$sentence = $name.' just left'; // John just left
</code></pre>
    <hr>
    <h2>Функции</h2>
    <p><span class="like_b">Функция</span> - это фрагмент кода, который вызывается по имени. Это может быть передано данных для работы (то есть параметров) и может при необходимости возвращать данные (возвращаемое значение). Все данные, переданные функции, явно передаются.</p>

    <p>A <span class="like_b">метод</span> - это фрагмент кода, вызываемый именем, связанным с объектом. В большинстве случаев он идентичен функции, за исключением двух ключевых отличий:</p>
<ul>
    <li>Метод неявно передает объект, на который он был вызван.</li>
    <li>Метод способен работать с данными, содержащимися в классе (помня, что объект является экземпляром класса - класс является определением, объект является экземпляром этих данных).</li>
</ul>

<p>Памятка по некоторым функциям</p>
    <div class="blc_function">
        <div>
            <p>Строки</p>
            <ul>
                <li><a href="https://www.php.net/manual/ru/function.echo.php" target="_blank">echo</a> – выводит одну или более строк.</li>
                <li><a href="https://www.php.net/manual/ru/function.explode.php" target="_blank">explode</a> – разбивает строку на подстроки.</li>
                <li><a href="https://www.php.net/manual/ru/function.htmlentities.php" target="_blank">htmlentities</a> – преобразует символы в соответствующие HTML сущности.</li>
                <li><a href="https://www.php.net/manual/ru/function.htmlspecialchars.php" target="_blank">htmlspecialchars</a> – преобразует специальные символы в HTML сущности.</li>
                <li><a href="https://www.php.net/manual/ru/function.implode.php" target="_blank">implode</a> – объединяет элементы массива в строку.</li>
                <li><a href="https://www.php.net/manual/ru/function.ltrim.php" target="_blank">ltrim</a> – удаляет пробелы из начала строки.</li>
                <li><a href="https://www.php.net/manual/ru/function.rtrim.php" target="_blank">rtrim</a> – удаляет пробелы из конца строки.</li>
                <li><a href="https://www.php.net/manual/ru/function.trim.php" target="_blank">trim</a> – удаляет пробелы из начала и конца строки.</li>
                <li><a href="https://www.php.net/manual/ru/function.md5.php" target="_blank">md5</a> – возвращает MD5 хэш строки.</li>
                <li><a href="https://www.php.net/manual/ru/function.str-repeat.php" target="_blank">str_repeat</a> – возвращает повторяющуюся строку.</li>
                <li><a href="https://www.php.net/manual/ru/function.str-replace.php" target="_blank">str_replace</a> – заменяет строку поиска на строку замены.</li>
                <li><a href="https://www.php.net/manual/ru/function.str-split.php" target="_blank">str_split</a> – преобразует строку в массив.</li>
                <li><a href="https://www.php.net/manual/ru/function.strlen.php" target="_blank">strlen</a> – возвращает длину строки.</li>
                <li><a href="https://www.php.net/manual/ru/function.strrev.php" target="_blank">strrev</a> – переворачивает строку задом наперед.</li>
                <li><a href="https://www.php.net/manual/ru/function.strripos.php" target="_blank">strripos</a> — Возвращает позицию последнего вхождения подстроки без учета регистра</li>
                <li><a href="https://www.php.net/manual/ru/function.strpos.php" target="_blank">strpos</a> — Возвращает позицию первого вхождения подстроки</li>
            </ul>
        </div>
        <div>
            <p>Массивы</p>
            <ul>
                <li>Сортировка
                    <ul>
                        <li><a href="https://www.php.net/manual/ru/function.rsort.php" target="_blank">rsort</a> – Сортирует массив в обратном порядке</li>
                        <li><a href="https://www.php.net/manual/ru/function.arsort.php" target="_blank">arsort</a> – Сортирует массив в обратном порядке, сохраняя ключи</li>
                        <li><a href="https://www.php.net/manual/ru/function.asort.php" target="_blank">asort</a> – Сортирует массив, сохраняя ключи</li>
                        <li><a href="https://www.php.net/manual/ru/function.sort.php" target="_blank">sort</a> – Сортирует массив</li>
                        <li><a href="https://www.php.net/manual/ru/function.ksort.php" target="_blank">ksort</a> – отсортировать массив по ключам</li>
                        <li><a href="https://www.php.net/manual/ru/function.krsort.php" target="_blank">krsort</a> – отсортировать массив по ключам в обратном порядке</li>
                    </ul>
                </li>
                <li><a href="https://www.php.net/manual/ru/function.array-flip.php" target="_blank">array_flip</a> – меняет местами ключи с их значениями в массиве</li>
                <li><a href="https://www.php.net/manual/ru/function.shuffle.php" target="_blank">shuffle</a> – перемешать массив</li>
                <li><a href="https://www.php.net/manual/ru/function.array-unique.php" target="_blank">array_unique</a> – убрать повторяющиеся значения из массива</li>
                <li><a href="https://www.php.net/manual/ru/function.array-unshift.php" target="_blank">array_unshift</a> – добавить один или несколько элементов в начало массива</li>
                <li><a href="https://www.php.net/manual/ru/function.array-sum.php" target="_blank">array_sum</a> – вычислить сумму значений массива</li>
                <li><a href="https://www.php.net/manual/ru/function.array-shift.php" target="_blank">array_shift</a> – извлечь первый элемент массива</li>
                <li><a href="https://www.php.net/manual/ru/function.array-reverse.php" target="_blank">array_reverse</a> – возвращает массив с элементами в обратном порядке</li>
                <li><a href="https://www.php.net/manual/ru/function.array-pop.php" target="_blank">array_pop</a> – извлечь последний элемент массива</li>
                <li><a href="https://www.php.net/manual/ru/function.array-push.php" target="_blank">array_push</a> – добавить один или несколько элеметов в конец массива</li>
                <li><a href="https://www.php.net/manual/ru/function.array-keys.php" target="_blank">array_keys</a> – выбрать все ключи массива</li>
                <li><a href="https://www.php.net/manual/ru/function.array-count-values.php" target="_blank">array_count_values</a> – подсчитать количество всех значений массива</li>
                <li><a href="https://www.php.net/manual/ru/function.count.php" target="_blank">count</a> – Подсчитывает количество элементов массива или чего-либо в объекте</li>
                <li><a href="https://www.php.net/manual/ru/function.sizeof.php" target="_blank">sizeof</a> – Псевдоним count()</li>
            </ul>
        </div>
        <div>
            <p>Файлы</p>
            <ul>
                <li><a href="https://www.php.net/manual/ru/function.filesize.php" target="_blank">filesize</a> – получить размер файла</li>
                <li><a href="https://www.php.net/manual/ru/function.filetype.php" target="_blank">filetype</a> – получить тип файла</li>
                <li><a href="https://www.php.net/manual/ru/function.fopen.php" target="_blank">fopen</a> – открывает файл или URL</li>
                <li><a href="https://www.php.net/manual/ru/function.fwrite.php" target="_blank">fwrite</a> – бинарно-безопасная запись в файл</li>
                <li><a href="https://www.php.net/manual/ru/function.is-executable.php" target="_blank">is_executable</a> – определяет, является ли файл исполняемым</li>
                <li><a href="https://www.php.net/manual/ru/function.is-file.php" target="_blank">is_file</a> – определяет, является ли файл обычным файлом</li>
                <li><a href="https://www.php.net/manual/ru/function.is-readable.php" target="_blank">is_readable</a> – определяет, доступен ли файл для чтения</li>
                <li><a href="https://www.php.net/manual/ru/function.is-uploaded-file.php" target="_blank">is_uploaded_file</a> – определяет, был ли файл загружен при помощи HTTP POST</li>
                <li><a href="https://www.php.net/manual/ru/function.is-writable.php" target="_blank">is_writable</a> – определяет, доступен ли файл для записи</li>
                <li><a href="https://www.php.net/manual/ru/function.mkdir.php" target="_blank">mkdir</a> – создаёт директорию</li>
                <li><a href="https://www.php.net/manual/ru/function.move-uploaded-file.php" target="_blank">move_uploaded_file</a> – перемещает загруженный файл в новое место</li>
                <li><a href="https://www.php.net/manual/ru/function.pathinfo.php" target="_blank">pathinfo</a> – возвращает информацию о пути к файлу</li>
                <li><a href="https://www.php.net/manual/ru/function.readfile.php" target="_blank">readfile</a> – выводит файл</li>
                <li><a href="https://www.php.net/manual/ru/function.rename.php" target="_blank">rename</a> – переименовывает файл или директорию</li>
                <li><a href="https://www.php.net/manual/ru/function.unlink.php" target="_blank">unlink</a> – удаляет файл</li>
            </ul>
        </div>
        <div>
            <p>Другое</p>
            <ul>
                <li><a href="https://www.php.net/manual/ru/function.empty.php" target="_blank">empty</a> — Проверяет, пуста ли переменная</li>
                <li><a href="https://www.php.net/manual/ru/function.isset.php" target="_blank">isset</a> — Определяет, была ли установлена переменная значением, отличным от NULL</li>
                <li><a href="https://www.php.net/manual/ru/function.unset.php" target="_blank">unset</a> — Удаляет переменную</li>
                <li><a href="https://www.php.net/manual/ru/function.var-dump.php" target="_blank">var_dump</a> — Выводит информацию о переменной</li>
                <li><a href="https://www.php.net/manual/ru/function.include.php" target="_blank">include</a> -  выражение включает и выполняет указанный файл
                    <ul><li>При ошибке include выдаст предупреждение E_WARNING и продолжить выполнение скрипта;</li></ul>
                </li>
                <li><a href="https://www.php.net/manual/ru/function.require.php" target="_blank">require</a> -  выражение включает и выполняет указанный файл
                    <ul><li>При ошибке require выдаст также и фатальную ошибку уровня E_COMPILE_ERROR и остановит выполнение скрипта.</li></ul>
                </li>
                <li><a href="https://www.php.net/manual/ru/function.eval.php" target="_blank">eval</a> - Выполняет код PHP, содержащейся в строке</li>Функции
            </ul>
        </div>
    </div>
    <p>Функция <span class="like_b">count()</span> выполняет ту же операцию, что и <span class="like_b">sizeof()</span> – возвращает количество значений, содержащихся в массиве. Единственное различие между ними заключается в том, что в некоторых ситуациях count() возвращает дополнительную информацию:</p>
    <ul>
        <li>Если переменная существует и является массивом, count() возвращает количество элементов в массиве;</li>
        <li>Если переменная существует, но не является массивом, функция возвращает значение 1;</li>
        <li>Если переменная не существует, возвращается значение 0.</li>
    </ul>
    <h3>Передача параметра по значению и передача по ссылке.</h3>
    <p>Параметры в процедуры и функции можно передавать 2 способами – по значению и по ссылке. Отличия между этими двумя способами следующие: при передаче параметра по значению в процедуру (функцию) передается копия переменной, а при передаче по ссылке – оригинал (сама переменная).</p>
    <p>Наглядный пример</p>
    <img src="/images/parameter-pass.gif" alt="Передача параметра по значению и передача по ссылке">
    <hr>
    <h2>Ошибки в php</h2>
    <table class="tbl_2 errorfunc">
        <thead>
        <tr>
            <th>Значение</th>
            <th>Константа</th>
            <th>Описание</th>
            <th>Класс ошибки</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td><span class="like_b">E_ERROR</span></td>
            <td>Фатальные ошибки времени выполнения. Это неустранимые средствами самого скрипта ошибки, такие как ошибка распределения памяти и т.п. Выполнение скрипта в таком случае прекращается.</td>
            <td class="red">Фатальная</td>
        </tr>
        <tr>
            <td>2</td>
            <td><span class="like_b">E_WARNING</span></td>
            <td>Предупреждения времени выполнения (не фатальные ошибки). Выполнение скрипта в таком случае не прекращается.</td>
            <td class="yellow">Не фатальная</td>
        </tr>
        <tr>
            <td>4</td>
            <td><span class="like_b">E_PARSE</span></td>
            <td>Ошибки на этапе компиляции. Должны генерироваться только парсером.</td>
            <td class="red">Фатальная</td>
        </tr>
        <tr>
            <td>8</td>
            <td><span class="like_b">E_NOTICE</span></td>
            <td>Уведомления времени выполнения. Указывают на то, что во время выполнения скрипта произошло что-то, что может указывать на ошибку, хотя это может происходить и при обычном выполнении программы.</td>
            <td class="yellow">Не фатальная</td>
        </tr>
        <tr>
            <td>16</td>
            <td><span class="like_b">E_CORE_ERROR</span></td>
            <td>Фатальные ошибки, которые происходят во время запуска РНР. Такие ошибки схожи с <span class="like_b">E_ERROR</span>, за исключением того, что они генерируются ядром PHP.</td>
            <td class="red">Фатальная</td>
        </tr>
        <tr>
            <td>32</td>
            <td><span class="like_b">E_CORE_WARNING</span></td>
            <td>Предупреждения (не фатальные ошибки), которые происходят во время начального запуска РНР. Такие предупреждения схожи с <span class="like_b">E_WARNING</span>, за исключением того, что они генерируются ядром PHP.</td>
            <td class="yellow">Не фатальная</td>
        </tr>
        <tr>
            <td>64</td>
            <td><span class="like_b">E_COMPILE_ERROR</span></td>
            <td>Фатальные ошибки на этапе компиляции. Такие ошибки схожи с <span class="like_b">E_ERROR</span>, за исключением того, что они генерируются скриптовым движком Zend.</td>
            <td class="red">Фатальная</td>
        </tr>
        <tr>
            <td>128</td>
            <td><span class="like_b">E_COMPILE_WARNING</span></td>
            <td>Предупреждения на этапе компиляции (не фатальные ошибки). Такие предупреждения схожи с <span class="like_b">E_WARNING</span>, за исключением того, что они генерируются скриптовым движком Zend.</td>
            <td class="yellow">Не фатальная</td>
        </tr>
        <tr>
            <td>256</td>
            <td><span class="like_b">E_USER_ERROR</span></td>
            <td>Сообщения об ошибках, сгенерированные пользователем. Такие ошибки схожи с <span class="like_b">E_ERROR</span>, за исключением того, что они генерируются в коде скрипта средствами функции PHP <span class="function"><a class="function" href="https://www.php.net/manual/ru/function.trigger-error.php" target="_blank">trigger_error()</a></span>.</td>
            <td class="other">Смешанная</td>
        </tr>
        <tr>
            <td>512</td>
            <td><span class="like_b">E_USER_WARNING</span></td>
            <td>Предупреждения, сгенерированные пользователем. Такие предупреждения схожи с <span class="like_b">E_WARNING</span>, за исключением того, что они генерируются в коде скрипта средствами функции PHP <span class="function"><a class="function" href="https://www.php.net/manual/ru/function.trigger-error.php" target="_blank">trigger_error()</a></span>.</td>
            <td class="yellow">Не фатальная</td>
        </tr>
        <tr>
            <td>1024</td>
            <td><span class="like_b">E_USER_NOTICE</span></td>
            <td>Уведомления, сгенерированные пользователем. Такие уведомления схожи с <span class="like_b">E_NOTICE</span>, за исключением того, что они генерируются в коде скрипта, средствами функции PHP <span class="function"><a class="function" href="https://www.php.net/manual/ru/function.trigger-error.php" target="_blank">trigger_error()</a></span>.</td>
            <td class="yellow">Не фатальная</td>
        </tr>
        <tr>
            <td>2048</td>
            <td><span class="like_b">E_STRICT</span></td>
            <td>Включаются для того, чтобы PHP предлагал изменения в коде, которые обеспечат лучшее взаимодействие и совместимость кода.</td>
            <td class="yellow">Не фатальная</td>
        </tr>
        <tr>
            <td>4096</td>
            <td><span class="like_b">E_RECOVERABLE_ERROR</span></td>
            <td>Фатальные ошибки с возможностью обработки. Такие ошибки указывают, что, вероятно, возникла опасная ситуация, но при этом, скриптовый движок остается в стабильном состоянии. Если такая ошибка не обрабатывается функцией, определенной пользователем для обработки ошибок (см. <span class="function"><a class="function" href="https://www.php.net/manual/ru/function.set-error-handler.php" target="_blank">set_error_handler()</a></span>), выполнение приложения прерывается, как происходит при ошибках <span class="like_b">E_ERROR</span>.</td>
            <td class="other">Смешанная</td>
        </tr>
        <tr>
            <td>8192</td>
            <td><span class="like_b">E_DEPRECATED</span></td>
            <td>Уведомления времени выполнения об использовании устаревших конструкций. Включаются для того, чтобы получать предупреждения о коде, который не будет работать в следующих версиях PHP.</td>
            <td class="yellow">Не фатальная</td>
        </tr>
        <tr>
            <td>16384</td>
            <td><span class="like_b">E_USER_DEPRECATED</span></td>
            <td>Уведомления времени выполнения об использовании устаревших конструкций, сгенерированные пользователем. Такие уведомления схожи с <span class="like_b">E_DEPRECATED</span> за исключением того, что они генерируются в коде скрипта, с помощью функции PHP <span class="function"><a class="function" href="https://www.php.net/manual/ru/function.trigger-error.php" target="_blank">trigger_error()</a></span>.</td>
            <td class="yellow">Не фатальная</td>
        </tr>
        <tr>
            <td>32767</td>
            <td><span class="like_b">E_ALL</span></td>
            <td>Все поддерживаемые ошибки и предупреждения, за исключением ошибок <span class="like_b">E_STRICT</span> до PHP 5.4.0.</td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <p>Источники</p>
<ul>
    <li><a href="https://www.php.net/manual/ru/errorfunc.constants.php" target="_blank">Предопределенные константы</a></li>
    <li><a href="https://habr.com/ru/post/161483/" target="_blank"> Ошибки PHP: классификация, примеры, обработка</a></li>
</ul>
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
<h2>Сессии и Cookies</h2>

<ul>
<li><a href="http://www.php.su/articles/?cat=examples&page=070" target="_blank">Сессии в PHP</a></li>
<li><a href="http://www.softtime.ru/bookphp/gl8_1.php" target="_blank">Сессии и cookie в PHP</a></li>
<li><a href="http://anton.shevchuk.name/php/php-for-beginners-session/" target="_blank">Сессия // PHP</a></li>
<li><a href="https://php.ru/forum/threads/avtorizacija-sessii-i-cookies.58468/" target="_blank">Авторизация, сессии и cookies</a></li>
<li>php.net
	<ul>
		<li><a href="https://www.php.net/manual/ru/session.examples.basic.php" target="_blank">Основы использования</a></li>
		<li><a href="https://www.php.net/manual/ru/features.cookies.php" target="_blank">Cookies</a></li>
		<li><a href="https://www.php.net/manual/ru/function.setcookie.php" target="_blank">setcookie</a></li>
	</ul>
</li>
<li>code.mu
    <ul>
        <li><a href="http://code.mu/books/php/auth/avtorizaciya-polzovatelej-cherez-kuki-na-php.html" target="_blank">Авторизация пользователей через куки (cookie)</a></li>
        <li><a href="http://code.mu/books/php/auth/rabota-s-cookie-na-php.html" target="_blank">Работа с cookie на PHP</a></li>
        <li><a href="http://code.mu/books/php/auth/rabota-s-sessiyami-php.html" target="_blank">Работа с сессиями PHP</a></li>
        <li><a href="http://code.mu/books/php/auth/registraciya-i-avtorizaciya-polzovatelej-na-php.html" target="_blank">Регистрация и авторизация вместе</a></li>
        <li><a href="http://code.mu/books/php/auth/avtorizaciya-cherez-fajly-na-php.html" target="_blank">Авторизация через файлы</a></li>
        <li><a href="http://new.code.mu/ru/php/book/auth/session/" target="_blank">Добавляем сессию</a></li>
        <li><a href="http://new.code.mu/ru/php/book/auth/authorization/" target="_blank">Простая авторизация через базу данных</a></li>
    </ul>
</li>
</ul>

<p>Веб-сервер не поддерживает постоянного соединения с клиентом, и каждый запрос обрабатывается, как новый, без связи с предыдущими.</p>

<p>То есть, нельзя ни отследить запросы от одного и того же посетителя, ни сохранить для него переменные между просмотрами отдельных страниц. Вот для решения этих двух задач и были изобретены сессии. Собственно, <span class="like_b">сессии, если в двух словах - это механизм, позволяющий однозначно идентифицировать браузер и создающий для этого браузера файл на сервере, в котором хранятся переменные сеанса</span>.</p>

<p class="like_b">Cookies - это механизм хранения данных браузером удаленной машины для отслеживания или идентификации возвращающихся посетителей.</p>

<p>setcookie() задает cookie, которое будет передано клиенту вместе с другими HTTP-заголовками. Как и любой другой заголовок, cookie должны передаваться до того как будут выведены какие-либо другие данные скрипта (это ограничение протокола). Это значит, что в скрипте вызовы этой функции должны располагаться до остального вывода, включая вывод тегов html и head, а также пустые строки и пробельные символы.</>
<p>После передачи клиенту cookie станут доступны через массив $_COOKIE при следующей загрузке страницы. Значения cookie также есть в $_REQUEST. </p>
<ul>

</ul>
<hr>
<h2>Регулярные выражения</h2>
<p>Говорят, что рег.выражения - сила, вспоминая при этом про парсер'ы. Бум разбиратся</p>
<p>Регулярные выражения - мощный гибкий инструмент для синтаксического анализа текста в соответствии с определенным шаблоном.</p>

<ul>
<li><a href="http://www.php.su/lessons/?lesson_17" target="_blank">Приложение № 3 - О регулярных выражениях.</a></li>
<li><a href="http://www.php.su/articles/?cat=regexp&page=008" target="_blank">Регулярные выражения (шаблоны)</a></li>
<li><a href="http://forum.php.su/forums.php?forum=4" target="_blank">Форумы портала PHP.SU » PHP » Регулярные выражения</a></li>
<li><a href="http://archive-ipq-co.narod.ru/l1/regexp.html" target="_blank">Регулярные выражения</a></li>
<li><a href="http://www.cyberforum.ru/php-regex/thread631382.html" target="_blank">Памятка по регулярным выражениям PCRE в PHP </a></li>
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

<hr>

<h2>Практика</h2>
<ul>
<li>Первое практическое знакомство с PHP <a href="/study_working/working_php_0804.php">тут</a> и <a href="/study_working/working_php_other.php">тут</a></li>
<li><a href="/study_working/working_form_examples.php">PHP в формах</a></li>
<li>PHP в при работе с БД <a href="/study_working/working_bd_homework_1.php">Домашка 1</a> и <a href="/study_working/working_bd_homework_2.php">Домашка 2</a></li>
<li><a href="/study_working/working_php_cycle.php">Цыклы</a></li>
<li><a href="/study_working/working_cookies.php">Сессии и cookie</a></li>
<li><a href="/study_working/working_php_regular.php">Регулярные выражения</a></li>
<li><a href="/study_working/working_php_file_system.php">Работа с файловой системой</a></li>
</ul>
<?php //include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
<?php include '../template/inc/footer.php'; ?>