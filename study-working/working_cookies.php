<?php
//session_start();
//$_SESSION['username'] = "maksim";
//setcookie('counter', 1);
//header('location: /practice/index.php');
//echo 'Вы посетили эту страницу '.$_COOKIE['counter'].' раз';


// Работает, если сессионная cookie принята
//echo '<br /><a href="/practice/">page 1</a>';
//echo '<br /><a href="/practice/tabs">page 2</a>';


include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<h1>Cookies</h1>


<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
<?php //include '../template/inc/footer.php'; ?>