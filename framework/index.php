<?php include "../template/inc/header.php"; ?>

<h1>Laravel</h1>

<ul>
    <li><a href="https://laravel.com/" target="_blank">Laravel - The PHP Framework For Web Artisans</a></li>
    <li><a href="https://laravel.ru/" target="_blank">Статьи | Laravel по-русски</a></li>
    <li><a href="http://laravel.su/" target="_blank">Laravel - русскоязычное комьюнити</a>
        <ul><li><a href="http://laravel.su/docs/5.4/installation" target="_blank">Документация Laravel 5.x</a></li></ul>
    </li>
</ul>

<h2>Установка</h2>

<p>Создаем директорию laravel\poligon.local. В ней будет рабочая (для самого сайта) директория public</p>
<p>В phpStorm создаем проект и в "терминале" Шторм'а прописываем очередно:</p>

<pre><code>
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
</code></pre>
<p>Сим установили "composer"</p>
<p>Далее ставим сам Laravel</p>
<pre><code>
composer create-project --prefer-dist laravel/laravel blog "5.4.*"
</code></pre>
<p>Попутно настраиваем XAMPP на новый локальный сервак</p>
<hr>
<h2>Миграция</h2>
<p>Создание файла миграции</p>
<pre><code>
php artisan make:migration test
</code></pre>

<p>А потом сама миграция</p>

<pre><code>
php artisan migrate
</code></pre>
<hr>
<?php include "../template/inc/footer.php"; ?>
