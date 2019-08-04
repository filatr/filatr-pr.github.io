<?php
session_start();

include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/meta.php");

?>
<!DOCTYPE html>
<html>
    <head>
		<title><?php echo $title; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description"  content="<?php echo $description ?>" />
		<meta name="keywords" content="<?php echo $keywords ?>" />
		<meta name="robots" content="<?php echo $robots ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="/template/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/template/favicon.ico" type="image/x-icon">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<script src="/template/inc/js/js.js" type="text/javascript"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link href="/template/css/site.css" media="screen" rel="stylesheet" type="text/css" />
	</head>
<body>
<div class="header container">
	<ul class="nav justify-content-center">
        <li class="nav-item"><a class="nav-link" href="/">Главная / main</a></li>
        <li class="nav-item"><a class="nav-link" href="/study_theory/">Теория</a></li>
        <li class="nav-item"><a class="nav-link" href="/study_working/">Практика</a></li>
        <li class="nav-item"><a class="nav-link" href="/oop/">ООП</a></li>
        <li class="nav-item"><a class="nav-link" href="/framework/">Laravel</a></li>
        <li class="nav-item"><a class="nav-link" href="/links/">Полезные ссылки</a></li>
	</ul>
<div class="clear"></div>
	<div class="spin">
<?php

?>
	</div>
</div>
<div class="contet container">