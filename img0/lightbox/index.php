<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
		<title>Об картинках. Лайтбокс</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow">
		<meta name="description" content="Картинки, просто картинки" />
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/scripts.php"); ?>
</head>
<body>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<div class="contet img">

<h2>Лайтбокс</h2>

<p>Ниже мы видим пример использования <a href="/template/f/lightbox-2.7.1.zip" title="скачать lightbox">лайтбокс</a>а</p>

<div class="img_blc_5f">
		<a href="/img/0165.jpg" data-lightbox="image-1" data-title="Подпись к картинке номер раз"><img src="/img/0165.jpg" alt="" /></a>
		<a href="/img/0166.jpg" data-lightbox="image-1" data-title="Подпись к картинке номер два"><img src="/img/0166.jpg" alt="" /></a>
		<a href="/img/0167.jpg" data-lightbox="image-1" data-title="Подпись к картинке номер три"><img src="/img/0167.jpg" alt="" /></a>
		<a href="/img/0168.jpg" data-lightbox="image-1" data-title="Подпись к картинке номер четыре"><img src="/img/0168.jpg" alt="" /></a>
		<a href="/img/0169.jpg" data-lightbox="image-1" data-title="Подпись к картинке номер пять"><img src="/img/0169.jpg" alt="" /></a>
		<a href="/img/0170.jpg" data-lightbox="image-1" data-title="Подпись к картинке номер шесь"><img src="/img/0170.jpg" alt="" /></a>
		<a href="/img/0171.jpg" data-lightbox="image-1" data-title="Подпись к картинке номер семь"><img src="/img/0171.jpg" alt="" /></a>
		<a href="/img/0172.jpg" data-lightbox="image-1" data-title="Подпись к картинке номер восемь"><img src="/img/0172.jpg" alt="" /></a>
</div>

<h3>Как использовать</h3>
<p>Качаем скрипты лайтбокса <a href="http://lokeshdhakar.com/projects/lightbox2/" target="_blank">со стр разработчика</a> (анг.page) или же <a href="/template/f/lightbox-2.7.1.zip" title="скачать lightbox">тут</a>а</p>
<p>Загружаем файлы<sup>[1]</sup> и подключаем<sup>[2]</sup> скрипты и стили</p>

<textarea readonly class="first_area">
<script src="/lightbox/js/jquery-1.11.0.min.js"></script>
<script src="/lightbox/js/lightbox.min.js"></script>
<link href="/lightbox/css/lightbox.css" rel="stylesheet" />
</textarea>

<p>Добавьте атрибут <textarea readonly class="second_area">data-lightbox="image-1"</textarea> к любой ссылке, которая должна активировать Lightbox. К примеру:</p>

<textarea readonly class="third_area">
<a href="/img/0172.jpg" data-lightbox="image-1" data-title="My caption">
<img src="/img/0172.jpg" alt="" />
</a>
</textarea>
<ol>
<li>Можем загрузить как и в корень сайта, так и в любую другую папку на ФТП. При этом корректно указываем пути к скриптам и стилям</li>
<li>Перед подключением библиотеки jquery, смотрим на то, установлена какя-нибудь библиотека. Если <b>не установлена</b> - подключаем</li>
</ol>

</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
</body>
</html>