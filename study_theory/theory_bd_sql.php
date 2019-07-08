﻿<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<h1>БД и SQL запросы</h1>
<p><a href="/phpmyadmin/" target="_blank">phpmyadmin</a></p>
    <h2>MySQL и SQL</h2>
    <p><span class="like_b">MySQL</span> это система управления реляционными базами данных. База данных — это просто набор структурированных данных. Слово “реляционный” означает, что данные, хранящиеся в наборе данных, организованы в виде таблиц. Каждая таблица связана в некотором роде.</p>
    <p><span class="like_b">SQL</span> сообщает серверу, что делать с данными</p>
    <p>Операторы SQL могут указать серверу выполнить определённые операции:</p>
    <ul>
        <li>Запрос данных: запрос конкретной информации из существующей базы данных.</li>
        <li>Обработка данных: добавление, удаление, изменение, сортировка и другие операции для изменения данных, значений или визуальных элементов.</li>
        <li>Идентификация данных: определение типов данных, например, изменение числовых данных в целые числа. Это также включает определение схемы или взаимосвязи каждой таблицы в базе данных.</li>
        <li>Контроль доступа к данным: обеспечение методов безопасности для защиты данных, в том числе принятие решения о том, кто может просматривать или использовать любую информацию, хранящуюся в базе данных.</li>
    </ul>
<h2>MyISAM vs InnoDB</h2>
    <p><span class="like_b">MyISAM</span>: механизм хранения MySQL по умолчанию и тот, который больше всего используется в Web, хранилищах данных и других средах приложений. MyISAM поддерживается во всех конфигурациях MySQL и является механизмом хранения по умолчанию, если вы не настроили MySQL на использование по-другому.</p>
    <p><span class="like_b">InnoDB</span>: механизм безопасности, совместимый с транзакциями (ACID) для MySQL, который имеет возможности фиксации, отката и восстановления после сбоя для защиты пользовательских данных. Блокировка на уровне строк в InnoDB (без повышения до более крупных блокировок) и последовательных неблокирующих чтения в Oracle-стиле увеличивает многопользовательский concurrency и производительность. InnoDB хранит пользовательские данные в кластерных индексах для уменьшения ввода-вывода для общих запросов на основе первичных ключей. Для поддержания целостности данных InnoDB также поддерживает ограничения ссылочной целостности FOREIGN KEY.</p>
    <p>Наличие возможности указывать определенный механизм хранения для каждой таблицы является одной из ключевых сильных сторон MySQL (помимо простой в использовании и хорошей производительности без каких-либо настроек). Для всех операций, где необходимы транзакции, просто придерживайтесь InnoDB. Тем не менее, MyISAM может реально ускорить работу, когда транзакции не нужны в определенных ситуациях - и требует меньше дискового пространства и оперативной памяти по сравнению с InnoDB.</p>
    <p>Тем не менее, InnoDB становится все лучше</p>
    <div class="spoiler_v2">
    <p href="#" class="spoiler-trigger"><span>Различия. Сводная таблица</span></p>
    <div class="spoiler-block">
    <table class="tbl_2">
        <tr>
            <th width="65%">Описание</th>
            <th width="15%">MyISAM</th>
            <th width="20%">InnoDB</th>
        </tr>
        <tr>
            <td><span class="like_b">Транзакционный движек<br>
</span>Транзакция (Transaction) — блок операторов SQL , который в случае ошибки в одном запросе, возвращается к предыдущему состоянию (Rollback), и только в случае выполнения всех запросов подтверждается (Commit)</td>
            <td>Нет</td>
            <td>Да</td>
        </tr>
        <tr>
            <td><span class="like_b">Поддержка внешних ключей<br>
</span>Внешние ключи — это способ связать записи в двух таблицах по определенным полям так, что при обновлении поля в родительской автоматически происходит определенное изменение поля в дочерней (дочернюю и родительскую выбираешь при создании ключа; точнее, создаешь ключ в дочерней, который ссылается на родительскую).</td>
            <td>Нет</td>
            <td>Да</td>
        </tr>
        <tr>
            <td><span class="like_b">Блокировка.<br>
</span>Блокировка на уровне строк, т.е. если процессу нужно обновить строку в таблице, то он блокирует только эту строку, позволяя другим обновлять другие строки параллельно</td>
            <td>Блокировка на уровне таблиц</td>
            <td>Блокировка на уровне строк</td>
        </tr>
        <tr>
            <td>Одновременные запросы к разным частям таблицы.</td>
            <td>Медленнее</td>
            <td>Быстрее</td>
        </tr>
        <tr>
            <td>При смешанной нагрузке в таблице (select/update/delete/insert)</td>
            <td>Медленнее</td>
            <td>Быстрее</td>
        </tr>
        <tr>
            <td>Операция Insert</td>
            <td>Быстрее</td>
            <td>Медленнее, ибо есть оверхед на транзакцию, но это цена надежности</td>
        </tr>
        <tr>
            <td>Если преобладают операции чтения (SELECT)</td>
            <td>Работает быстрее</td>
            <td>Работает медленнее</td>
        </tr>
        <tr>
            <td><span class="like_b">Deadlock<br>
</span>Deadlock — ситуация в многозадачной среде или СУБД, при которой несколько процессов находятся в состоянии бесконечного ожидания ресурсов, захваченных самими этими процессами.</td>
            <td>Не возникают</td>
            <td>Возможны.</td>
        </tr>
        <tr>
            <td>Поддержка полнотекстового поиска</td>
            <td>Да</td>
            <td>Нет (доступен начиная с версии MySQL 5.6.4)</td>
        </tr>
        <tr>
            <td>Запрос Count(*)</td>
            <td>Быстрее</td>
            <td>Медленнее</td>
        </tr>
        <tr>
            <td><span class="like_b">Поддержка mysqlhotcopy<br>
</span>Утилита mysqlhotcopy представляет собой Perl-сценарий, использующий SQL-команды LOCK TABLES, FLUSH TABLES и Unix-утилиты cp или scp для быстрого получения резервной копии базы данных.</td>
            <td>Да</td>
            <td>Нет</td>
        </tr>
        <tr>
            <td>Файловое хранение таблиц</td>
            <td>Каждой таблице отдельный файл</td>
            <td>Данные при настройках по умолчанию хранятся в больших совместно используемых файлах</td>
        </tr>
        <tr>
            <td><span class="like_b">Бинарное копировании таблиц?<br>
</span>Табличные файлы можно перемещать между компьютерами разных архитектур и разными операционными системами без всякого преобразования.</td>
            <td>Да</td>
            <td>Нет</td>
        </tr>
        <tr>
            <td>Размер таблиц в БД</td>
            <td>Меньше</td>
            <td>Больше</td>
        </tr>
        <tr>
            <td>Поведение в случае сбоя</td>
            <td>Крашится вся таблица</td>
            <td>По логам можно все восстановить</td>
        </tr>
        <tr>
            <td>В случае хранения «логов» и подобного</td>
            <td>Лучше</td>
            <td>Хуже</td>
        </tr>
    </table>
    <p>В случае MyISAM таблица "крашится", а в случае innodb "можно восстановить". Так вот, в случае MyISAM, все так же восстанавливается, причем легче чем в InnoDB, для этого используется утилита из стандартной поставки myisamchk.</p>
    <p>Так же, при выборе MyISAM, бэкап/восстановление больших баз (1 TB и больше), делается намного проще чем в InnoDB, из-за возможности бинарного копирования.</p>
   <p>За исключением этих особенностей, в таблице собраны практически все параметры, которые могут влиять на выбор движка.</p>
    </div></div>
<h2>Подключение к БД</h2>
<pre>
<code>
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new_bd";

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
</code>
</pre>

<p>Подключение к БД: mysqli_connect(хост, пользователь, пароль, название БД)</p>
<p>После выполенения скрыпта закрыть соединение к БД: mysqli_close();</p>
<p>mysqli_query() - что-то запрашиваем в БД, синтаксис: SELECT "выборка таблицы или всех" FROM "название ячейки"</p>
<p>Чтобы <span class="like_b">создать</span> таблицу, нам надо использовать выражение SQL "CREATE TABLE 'название таблицы'"</p>
<p>Чтобы <span class="like_b">удалить</span> таблицу, нам надо использовать выражение SQL "DROP TABLE 'название таблицы'"</p>
<p>Чтобы <span class="like_b">добавить данные</span> в таблицу, нам надо использовать SQL "INSERT" (<span class="like_i">INSERT INTO tovars VALUES(NULL, 'Samsung Galaxy III','Samsumg')</span>)</p>
<p>mysqli_real_escape_string() - защита со стороны скрипта (SQL-инъекции)</p>
<p>Чтобы <span class="like_b">получить данные</span> из таблици, нам надо использовать SQL "SELECT" (<span class="like_i">SELECT * FROM tovars)</span>)</p>
<p>mysqli_num_rows() - узнаем количество строк</p>
<p>mysqli_fetch_row() - извлечь отдельную строку</p>
<p>mysqli_free_result() - очистить память от ненужных данных</p>
<p>Чтобы <span class="like_b">редактировать данные</span> в таблице, нам надо использовать SQL "UPDATE" (<span class="like_i">UPDATE tovars SET name='Samsung ACE II', company='Samsung' WHERE id='1')</span>), при редактировании юзать GET</p>
<p>Чтобы <span class="like_b">удалить данные</span> из таблици, нам надо использовать SQL "DELETE" (<span class="like_i">DELETE FROM tovars WHERE id = '5'</span>)</p>
<h2>что такое index sql</h2>
<p>Одним из важнейших путей достижения высокой производительности SQL Server является использование индексов. Индекс ускоряет процесс запроса, предоставляя быстрый доступ к строкам данных в таблице, аналогично тому, как указатель в книге помогает вам быстро найти необходимую информацию.</p>
<div class="spoiler_v2">
<p href="#" class="spoiler-trigger"><span>Далее</span></p>
<div class="spoiler-block">
<h4>Структура индекса</h4>
<p>Индексы создаются для столбцов таблиц и представлений. Индексы предоставляют путь для быстрого поиска данных на основе значений в этих столбцах. Например, если вы создадите индекс по первичному ключу, а затем будете искать строку с данными, используя значения первичного ключа, то SQL Server сначала найдет значение индекса, а затем использует индекс для быстрого нахождения всей строки с данными. Без индекса будет выполнен полный просмотр (сканирование) всех строк таблицы, что может оказать значительное влияние на производительность.</p>
<p>Вы можете создать индекс на большинстве столбцов таблицы или представления. Исключением, преимущественно, являются столбцы с типами данных для хранения больших объектов (LOB), таких как image, text или varchar(max). Вы также можете создать индексы на столбцах, предназначенных для хранения данных в формате XML, но эти индексы устроены немного иначе, чем стандартные и их рассмотрение выходит за рамки данной статьи. Также в статье не рассматриваются columnstore индексы. Вместо этого я фокусируюсь на тех индексах, которые наиболее часто применяются в базах данных SQL Server.</p>
<p>Индекс состоит из набора страниц, узлов индекса, которые организованы в виде древовидной структуры — сбалансированного дерева. Эта структура является иерархической по своей природе и начинается с корневого узла на вершине иерархии и конечных узлов, листьев, в нижней части, как показано на рисунке:</p>
<img src="/images/balanced-tree.jpg" class="alone_img" alt="сбалансированое дерева" >
<p>Когда вы формируете запрос на индексированный столбец, подсистема запросов начинает идти сверху от корневого узла и постепенно двигается вниз через промежуточные узлы, при этом каждый слой промежуточного уровня содержит более детальную информацию о данных. Подсистема запросов продолжает двигаться по узлам индекса до тех пор, пока не достигнет нижнего уровня с листьями индекса. К примеру, если вы ищете значение 123 в индексированном столбе, то подсистема запросов сначала на корневом уровне определит страницу на первом промежуточном (intermediate) уровне. В данном случае первой страница указывает на значение от 1 до 100, а вторая от 101 до 200, таким образом подсистема запросов обратится ко второй странице этого промежуточного уровня. Далее будет выяснено, что следует обратиться к третьей странице следующего промежуточного уровня. Отсюда подсистема запросов прочитает на нижнем уровне значение самого индекса. Листья индекса могут содержать как сами данные таблицы, так и просто указатель на строки с данными в таблице, в зависимости от типа индекса: кластеризованный индекс или некластеризованный.</p>
<h4>Кластеризованный индекс</h4>
<p>Кластеризованный индекс хранит реальные строки данных в листьях индекса. Возвращаясь к предыдущему примеру, это означает что строка данных, связанная со значение ключа, равного 123 будет храниться в самом индексе. Важной характеристикой кластеризованного индекса является то, что все значения отсортированы в определенном порядке либо возрастания, либо убывания. Таким образом, таблица или представление может иметь только один кластеризованный индекс. В дополнение следует отметить, что данные в таблице хранятся в отсортированном виде только в случае если создан кластеризованный индекс у этой таблицы.</p>
<p>Таблица не имеющая кластеризованного индекса называется кучей.</p>
<h4>Некластеризованный индекс</h4>
<p>В отличие от кластеризованного индекса, листья некластеризованного индекса содержат только те столбцы (ключевые), по которым определен данный индекс, а также содержит указатель на строки с реальными данными в таблице. Это означает, что системе подзапросов необходима дополнительная операция для обнаружения и получения требуемых данных. Содержание указателя на данные зависит от способа хранения данных: кластеризованная таблица или куча. Если указатель ссылается на кластеризованную таблицу, то он ведет к кластеризованному индексу, используя который можно найти реальные данные. Если указатель ссылается на кучу, то он ведет к конкретному идентификатору строки с данными. Некластеризованные индексы не могут быть отсортированы в отличие от кластеризованных, однако вы можете создать более одного некластеризованного индекса на таблице или представлении, вплоть до 999. Это не означает, что вы должны создавать как можно больше индексов. Индексы могут как улучшить, так и ухудшить производительность системы. В дополнение к возможности создать несколько некластеризованных индексов, вы можете также включить дополнительные столбцы (included column) в свой индекс: на листьях индекса будет храниться не только значение самих индексированных столбцов, но и значения этих не индексированных дополнительных столбцов. Этот подход позволит вам обойти некоторые ограничения, наложенные на индекс. К примеру, вы можете включить неидексируемый столбец или обойти ограничение на длину индекса (900 байт в большинстве случаев).</p>
<h4>Типы индексов</h4>
<p>В дополнение к тому, что индекс может быть либо кластеризованным, либо некластеризованным, возможно его дополнительно сконфигурировать как составной индекс, уникальный индекс или покрывающий индекс.</p>
<h5>Составной индекс</h5>
<p>Такой индекс может содержать более одного столбца. Вы можете включить до 16 столбцов в индекс, но их общая длина ограничена 900 байтами. Как кластеризованный, так и некластеризованный индексы могут быть составными.</p>
<h5>Уникальный индекс</h5>
<p>Такой индекс обеспечивает уникальность каждого значения в индексируемом столбце. Если индекс составной, то уникальность распространяется на все столбцы индекса, но не на каждый отдельный столбец. К примеру, если вы создадите уникальных индекс на столбцах ИМЯ и ФАМИЛИЯ, то полное имя должно быть уникально, но отдельно возможны дубли в имени или фамилии.</p>
Уникальный индекс автоматически создается когда вы определяете ограничения столбца: первичный ключ или ограничение на уникальность значений:
<ul>
    <li><p class="like_i">Первичный ключ</p>
    <p>Когда вы определяете ограничение первичного ключа на один или несколько столбцов, тогда SQL Server автоматически создаёт уникальный кластеризованный индекс, если кластеризованный индекс не был создан ранее (в этом случае создается уникальный некластеризованный индекс по первичному ключу)</p></li>
    <li><p class="like_i">Уникальность значений</p>
    <p>Когда вы определяете ограничение на уникальность значений, тогда SQL Server автоматически создает уникальный некластеризованный индекс. Вы можете указать, чтобы был создан уникальный кластеризованный индекс, если кластеризованного индекса до сих пор не было создано на таблице</p></li>
</ul>
<h5>Покрывающий индекс</h5>
<p>Такой индекс позволяет конкретному запросу сразу получить все необходимые данные с листьев индекса без дополнительных обращений к записям самой таблицы.</p>
<h4>Проектирование индексов</h4>
<p>Насколько полезны индексы могут быть, настолько аккуратно они должны быть спроектированы. Поскольку индексы могут занимать значительное дисковое пространство, вы не захотите создавать индексов больше, чем необходимо. В дополнение, индексы автоматически обновляются когда сама строка с данными обновляется, что может привести к дополнительным накладным расходам ресурсов и падению производительности. При проектирование индексов должно приниматься во внимание несколько соображений относительно базы данных и запросов к ней.</p>
<h4>База данных</h4>
<p>Как было отмечено ранее индексы могут улучить производительность системы, т.к. они обеспечивают подсистему запросов быстрым путем для нахождения данных. Однако, вы должны также принять во внимание то, как часто вы собираетесь вставлять, обновлять или удалять данные. Когда вы изменяете данные, то индексы должны также быть изменены, чтобы отразить соответствующие действия над данными, что может значительно снизить производительность системы. Рассмотрим следующие рекомендации при планировании стратегии индексирования:</p>
<ul>
    <li>Для таблиц которые часто обновляются используйте как можно меньше индексов.</li>
    <li>Если таблица содержит большое количество данных, но их изменения незначительны, тогда используйте столько индексов, сколько необходимо для улучшение производительности ваших запросов. Однако хорошо подумайте перед использованием индексов на небольших таблицах, т.к. возможно использование поиска по индексу может занять больше времени, нежели простое сканирование всех строк.</li>
    <li>Для кластеризованных индексов старайтесь использовать настолько короткие поля насколько это возможно. Наилучшим образом будет применение кластеризованного индекса на столбцах с уникальными значениями и не позволяющими использовать NULL. Вот почему первичный ключ часто используется как кластеризованный индекс.</li>
    <li>Уникальность значений в столбце влияет на производительность индекса. В общем случае, чем больше у вас дубликатов в столбце, тем хуже работает индекс. С другой стороны, чем больше уникальных значения, тем выше работоспособность индекса. Когда возможно используйте уникальный индекс.</li>
    <li>Для составного индекса возьмите во внимание порядок столбцов в индексе. Столбцы, которые используются в выражениях WHERE (к примеру, WHERE FirstName = 'Charlie') должны быть в индексе первыми. Последующие столбцы должны быть перечислены с учетом уникальности их значений (столбцы с самым высоким количеством уникальных значений идут первыми).</li>
    <li>Также можно указать индекс на вычисляемых столбцах, если они соответствуют некоторым требованиям. К примеру, выражение которые используются для получения значения столбца, должны быть детерминистическими (всегда возвращать один и тот же результат для заданного набора входных параметров).</li>
</ul>
<h4>Запросы к базе данных</h4>
<p>Другое соображение которое следует учитывать при проектировании индексов это какие запросы выполняются к базе данных. Как было указано ранее, вы должны учитывать как часто изменяются данные. Дополнительно следует использовать следующие принципы:</p>
<ul>
    <li>Старайтесь вставлять или модифицировать в одном запросе как можно больше строк, а не делать это в несколько одиночных запросов.</li>
    <li>Создайте некластеризованный индекс на столбцах которые часто используются в ваших запросах в качестве условий поиска в WHERE и соединения в JOIN.</li>
    <li>Рассмотрите возможность индексирования столбцов, использующихся в запросах поиска строк на точное соответствие значений.</li>
</ul>
</div>
</div>
<h2>Связи sql</h2>
<p>При проектировании базы данных, здравый смысл подсказывает нам, что мы должны использовать различные таблицы для разных данных. Пример: клиенты, заказы, записи, сообщения и т.д. Так же мы должны иметь взаимосвязи между этими таблицами. Например, клиент имеет заказы, а у заказа есть позиции (товары). Эти взаимосвязи должны быть отражены в базе данных. А также, когда мы получаем данные с помощью SQL, мы должны использовать определенные типы запросов JOIN, чтобы получить нужный результат.</p>
<p>Вот несколько типов отношений в базе данных. Сегодня мы рассмотрим следующие:</p>
<ul>
    <li>Отношения один к одному</li>
    <li>Один ко многим и многие к одному</li>
    <li>Многие ко многим</li>
    <li>Связь с самим собой</li>
</ul>

<div class="spoiler_v2">
<a href="#" class="spoiler-trigger"><span>Пример</span></a>
<div class="spoiler-block">
<p>Допустим создаем БД описывающее работу какой-то школы</p>
	<ol>
		<li>Каждая школа гарантированно имеет 1-го директора. Это связь 1 к 1. 1 школа -> 1 директор</li>
		<li>В каждой школе есть несколько классов это связь 1 ко многим. 1 школа -> много классов</li>
		<li>Теперь учителя предметники. Если попробовать составить таблицу отношений учителей с классами то получим довольно сложную картину: 1 учитель может преподавать в нескольких классах, в то же самое время в одном классе может преподавать несколько учителей. Это и есть классическое отношение многие ко многим. Несколько учителей <-> Несколько классов.</li>
	</ol>
<p>Как уже было верно сказано выше такие связи принято описывать промежуточной таблицей связи </p>
</div>
</div>
<p>Когда данные выбираются из нескольких связанных таблиц, мы будем использовать запрос JOIN. Есть несколько типов присоединения, мы познакомимся с этими:</p>
<ul>
    <li>Cross Joins (Перекрестное соединение)</li>
    <li>Natural Joins (Естественное соединений)</li>
    <li>Inner Joins (Внутреннее соединений)</li>
    <li>Left (Outer) Joins (Левое (внешнее) соединение)</li>
    <li>Right (Outer) Joins (Правое (внешнее) соединение)</li>
</ul>
<p class="like_i">обратить внимание на ON и USING, а так же на JOIN.</p>
<h2>JOIN</h2>
<p>Оператор JOIN используется для соединения двух или нескольких таблиц. Соединение таблиц может быть внутренним (INNER) или внешним (OUTER), причем внешнее соединение может быть левым (LEFT), правым (RIGHT) или полным (FULL). Далее на примере двух таблиц рассмотрим различные варианты их соединения.</p>
<p><span class="like_b">Предикат</span> определяет условие соединения строк из разных таблиц.</p>
<pre>
<code>
SELECT user.name, user_datail_info.detail
FROM user
INNER JOIN user_datail_info ON user.id = user_datail_info.user_id
</code>
</pre>
<h2>EXPLAIN</h2>
<div class="spoiler_v2">
<p href="#" class="spoiler-trigger"><span>Далее</span></p>
<div class="spoiler-block">
<p>EXPLAIN имя_таблицы является синонимом операторов DESCRIBE имя_таблицы и SHOW COLUMNS FROM имя_таблицы.</p>
<p>Если оператор SELECT предваряется ключевым словом EXPLAIN, MySQL сообщит о том, как будет производиться обработка SELECT, и предоставит информацию о порядке и методе связывания таблиц.</p>
<p class="like_b">При помощи EXPLAIN можно выяснить, когда стоит снабдить таблицы индексами, чтобы получить более быструю выборку, использующую индексы для поиска записей. Кроме того, можно проверить, насколько удачный порядок связывания таблиц был выбран оптимизатором. Заставить оптимизатор связывать таблицы в заданном порядке можно при помощи указания STRAIGHT_JOIN.</p>
<p>Для непростых соединений EXPLAIN возвращает строку информации о каждой из использованных в работе оператора SELECT таблиц. Таблицы перечисляются в том порядке, в котором они будут считываться. MySQL выполняет все связывания за один проход (метод называется "single-sweep multi-join"). Делается это так: MySQL читает строку из первой таблицы, находит совпадающую строку во второй таблице, затем - в третьей, и так далее. Когда обработка всех таблиц завершается, MySQL выдает выбранные столбцы и обходит в обратном порядке список таблиц до тех пор, пока не будет найдена таблица с наибольшим совпадением строк. Следующая строка считывается из этой таблицы и процесс продолжается в следующей таблице.</p>

<pre><code class="php hljs">EXPLAIN SELECT * FROM categories</code></pre>
<pre><code class="php hljs">********************** <span class="hljs-number"><span class="hljs-number">1.</span></span> row **********************
id: <span class="hljs-number"><span class="hljs-number">1</span></span>
select_type: SIMPLE
table: categories
type: ALL
possible_keys: <span class="hljs-keyword"><span class="hljs-keyword">NULL</span></span>
key: <span class="hljs-keyword"><span class="hljs-keyword">NULL</span></span>
key_len: <span class="hljs-keyword"><span class="hljs-keyword">NULL</span></span>
ref: <span class="hljs-keyword"><span class="hljs-keyword">NULL</span></span>
rows: <span class="hljs-number"><span class="hljs-number">4</span></span>
Extra: 
<span class="hljs-number"><span class="hljs-number">1</span></span> row in set (<span class="hljs-number"><span class="hljs-number">0.00</span></span> sec)
</code></pre>
<p>Вывод команды EXPLAIN включает следующие столбцы: </p>

<ul>
    <li>id – порядковый номер для каждого SELECT’а внутри запроса (когда имеется несколько подзапросов)</li>
    <li>select_type – тип запроса SELECT.
		<ul>
			<li>SIMPLE — Простой запрос SELECT без подзапросов или UNION’ов</li>
			<li>PRIMARY – данный SELECT – самый внешний запрос в JOIN’е</li>
			<li>DERIVED – данный SELECT является частью подзапроса внутри FROM</li>
			<li>SUBQUERY – первый SELECT в подзапросе</li>
			<li>DEPENDENT SUBQUERY – подзапрос, который зависит от внешнего запроса</li>
			<li>UNCACHABLE SUBQUERY – не кешируемый подзапрос (существуют определенные условия для того, чтобы запрос кешировался)</li>
			<li>UNION – второй или последующий SELECT в UNION’е</li>
			<li>DEPENDENT UNION – второй или последующий SELECT в UNION’е, зависимый от внешнего запроса</li>
			<li>UNION RESULT – результат UNION’а</li>
		</ul>
	</li>
    <li>Table – таблица, к которой относится выводимая строка</li>
    <li>Type — указывает на то, как MySQL связывает используемые таблицы. Это одно из наиболее полезных полей в выводе потому, что может сообщать об отсутствующих индексах или почему написанный запрос должен быть пересмотрен и переписан.<br>
	Возможные значения:
		<ul>
			<li>System – таблица имеет только одну строку</li>
			<li>Const – таблица имеет только одну соответствующую строку, которая проиндексирована. Это наиболее быстрый тип соединения потому, что таблица читается только один раз и значение строки может восприниматься при дальнейших соединениях как константа.</li>
			<li>Eq_ref – все части индекса используются для связывания. Используемые индексы: PRIMARY KEY или UNIQUE NOT NULL. Это еще один наилучший возможный тип связывания.</li>
			<li>Ref – все соответствующие строки индексного столбца считываются для каждой комбинации строк из предыдущей таблицы. Этот тип соединения для индексированных столбцов выглядит как использование операторов = или < = ></li>
			<li>Fulltext – соединение использует полнотекстовый индекс таблицы</li>
			<li>Ref_or_null – то же самое, что и ref, но также содержит строки со значением null для столбца</li>
			<li>Index_merge – соединение использует список индексов для получения результирующего набора. Столбец key вывода команды EXPLAIN будет содержать список использованных индексов.</li>
			<li>Unique_subquery – подзапрос IN возвращает только один результат из таблицы и использует первичный ключ.</li>
			<li>Index_subquery – тоже, что и предыдущий, но возвращает более одного результата.</li>
			<li>Range – индекс, использованный для нахождения соответствующей строки в определенном диапазоне, обычно, когда ключевой столбец сравнивается с константой, используя операторы вроде: BETWEEN, IN, >, >=, etc.</li>
			<li>Index – сканируется все дерево индексов для нахождения соответствующих строк.</li>
			<li>All – Для нахождения соответствующих строк используются сканирование всей таблицы. Это наихудший тип соединения и обычно указывает на отсутствие подходящих индексов в таблице.</li>
		</ul>
	</li>
    <li>Possible_keys – показывает индексы, которые могут быть использованы для нахождения строк в таблице. На практике они могут использоваться, а могут и не использоваться. Фактически, этот столбец может сослужить добрую службу в деле оптимизации запросов, т.к значение NULL указывает на то, что не найдено ни одного подходящего индекса.</li>
    <li>Key– указывает на использованный индекс. Этот столбец может содержать индекс, не указанный в столбце possible_keys. В процессе соединения таблиц оптимизатор ищет наилучшие варианты и может найти ключи, которые не отображены в possible_keys, но являются более оптимальными для использования.</li>
    <li>Key_len – длина индекса, которую оптимизатор MySQL выбрал для использования. Например, значение key_len, равное 4, означает, что памяти требуется для хранения 4 знаков. На эту тему вот cсылка</li>
    <li>Ref – указываются столбцы или константы, которые сравниваются с индексом, указанным в поле key. MySQL выберет либо значение константы для сравнения, либо само поле, основываясь на плане выполнения запроса.</li>
    <li>Rows – отображает число записей, обработанных для получения выходных данных. Это еще одно очень важное поле, которое дает повод оптимизировать запросы, особенно те, которые используют JOIN’ы и подзапросы.</li>
    <li>Extra – содержит дополнительную информацию, относящуюся к плану выполнения запроса. Такие значения как “Using temporary”, “Using filesort” и т.д могут быть индикатором проблемного запроса. С полным списком возможных значений вы можете ознакомиться <a href="http://dev.mysql.com/doc/refman/5.6/en/explain-output.html#explain-extra-information" target="_blank">здесь</a></li>
</ul>
</div>
</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>