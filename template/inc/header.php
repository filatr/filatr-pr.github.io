<?php
session_start();


include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/meta.php");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
		<title><?php echo $title; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description"  content="<?php echo $description ?>" />
		<meta name="keywords" content="<?php echo $keywords ?>" />
		<meta name="robots" content="<?php echo $robots ?>">
        <link rel="icon" href="../template/favicon.ico" type="image/x-icon" />  
		<link rel="shortcut icon" href="../template/favicon.ico" type="image/x-icon">
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="/template/inc/js/js.js" type="text/javascript"></script>
		<link href="/template/css/site.css" media="screen" rel="stylesheet" type="text/css" />
	</head>
<body>
<div class="header">
	<ul id="main_menu">
		<li><a href="/">Главная / main</a></li>
		<li><a href="/study_theory/">Теория</a></li>
		<li><a href="/study_working/">Практика</a></li>
		<li><a href="/oop/">ООП</a></li>
		<li><a href="/links/">Полезные ссылки</a></li>
	</ul>
<div class="clear"></div>
	<div class="spin">
<?php

?>
	</div>
</div>
<div class="contet">