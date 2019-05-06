<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<h1>Формы: теория</h1>

<p>Источнии</p>


<ul>
	<li>Форма с точки зрения html
		<ul>
			<li><a href="http://htmlbook.ru/html/form" target="_blank">Тег &lt;form&gt;</a></li>
			<li><a href="http://htmlbook.ru/samhtml5/formy" target="_blank">Формы</a></li>
		</ul>
	</li>
	<li>Форма и PHP
		<ul>
			<li><a href="https://www.php.net/manual/ru/tutorial.forms.php" target="_blank">Работа с формами</a></li>
			<li><a href="http://www.php.su/articles/?cat=examples&page=069" target="_blank">HTML-формы</a></li>
			<li><a href="http://www.php.su/phphttp/forms/" target="_blank">Работа с HTML формами</a></li>
			<li><a href="http://www.php.su/phphttp/forms/?send" target="_blank">Передача параметров с помощью HTML-форм</a></li>
			<li><a href="https://htmlweb.ru/php/php_form.php" target="_blank">Работа с формами</a></li>
		</ul>
	</li>
	<li>БД и форма
		
	</li>
</ul>

<p>Тег <span class="tag">&lt;form&gt;</span> устанавливает форму на веб-странице. Форма предназначена для обмена данными между пользователем и сервером. Область применения форм не ограничена отправкой данных на сервер, с помощью клиентских скриптов можно получить доступ к любому элементу формы, изменять его и применять по своему усмотрению.</p>
<p>Документ может содержать любое количество форм, но одновременно на сервер может быть отправлена только одна форма. По этой причине данные форм должны быть независимы друг от друга.</p>
<p>Для отправки формы на сервер используется кнопка Submit, того же можно добиться, если нажать клавишу <span class="button_enter">Enter</span> в пределах формы. Если кнопка Submit отсутствует в форме, клавиша <span class="button_enter">Enter</span> имитирует ее использование.</p>
<p>Когда форма отправляется на сервер, управление данными передается программе, заданной атрибутом <span class="attribute">action</span> тега <span class="tag">&lt;form&gt;</span>. Предварительно браузер подготавливает информацию в виде пары «имя=значение», где имя определяется атрибутом <span class="attribute">name</span> тега <span class="tag">&lt;input&gt;</span>, а значение введено пользователем или установлено в поле формы по умолчанию. Если для отправки данных используется метод <span class="value">GET</span>, то адресная строка может принимать следующий вид.</p>
<p class="example">/practice/forms/action.php?answer=a5</p>
<p>Параметры перечисляются после вопросительного знака, указанного после адреса CGI-программы и разделяются между собой символом амперсанда (&). Нелатинские символы преобразуются в шестнадцатеричное представление (в форме %HH, где HH — шестнадцатеричный код для значения ASCII-символа), пробел заменяется на плюс (+).</p>
<p>Допускается внутрь контейнера <span class="tag">&lt;form&gt;</span> помещать другие теги, при этом сама форма никак не отображается на веб-странице, видны только ее элементы и результаты вложенных тегов.</p>


<h2>Практика</h2>
<ul>
	<li><a href="/study_working/working_form_examples.php">Примеры форм</a></li>
	<li><a href="/study_working/working_bd_homework_1.php">Домашка 1</a></li>
	<li><a href="/study_working/working_bd_homework_2.php">Домашка 2</a></li>
</ul>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
<?php //include '../template/inc/footer.php'; ?>