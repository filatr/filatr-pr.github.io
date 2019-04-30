<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<h1>Работаем в комендной строке с текстовым редактором nano</h1>
<p>Последовательность моих действий при создании нового проекта и заливка его на Git</p>
<ul>
<li>cd [выбираем директорию]</li>
<li>mkdir [создаем директорию]</li>
<li>cd [перехожу в ранее созданую директорию]</li>
<li>cp [копирую индексный файл и переношу в созданную директорию (../new1/)]</li>
<li>cd [перехожу в директорию C:\xampp\apache\conf\extra]</li>
<li>nano httpd-vhosts.conf [открываю файл в редакторе]</li>
<li>ctrl+^ [выделяю нужный участок текста, используя стреллки для перехода между строками и в конец стр]</li>
<li>alt+^ [копирую выделеный текст и ставлю курсор в нужном месте файла (в конце)]</li>
<li>ctrl+u [вставляю текст]</li>
<li>ctrl+x [выхожу из редактора, подтверждая сохранение и имя файла]</li>
<li>[аналдогично с файлом hosts]</li>
<li>[возвращаюсь к редактированию файла index.php, убираю ненужній текст и сохраняюсь ctrl+o]</li>
<li>[на Git созджаю новый репозиторий, после возвращаюсь к командной строке]</li>
<li>git init</li>
<li>git add .</li>
<li>git commit -m "first commit"</li>
<li>git remote add origin https://github.com/filatr/new1.git</li>
<li>git push -u origin master</li>
</ul>
<p><a href="https://losst.ru/tekstovyj-redaktor-nano-v-linux-dlya-novichkov" target="_blank">Материал</a> в помощь</p>
<hr>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
<?php //include '../template/inc/footer.php'; ?>