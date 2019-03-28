<html>
    <head>
		<title>Обекты</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description"  content="Обекты" />
		<meta name="robots" content="index, follow">
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/scripts.php"); ?>
</head>
<body>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<div class="contet">
<h1>Занятие от 27 03</h1>

<h2>Обекты</h2>

<h3>Материал, теория</h3>
<p><a href="https://developer.mozilla.org/uk/docs/Learn/JavaScript/Objects/Basics" target="_blank">Основи об'єктів</a></p>
<p><a href="http://javascript.ru/tutorial/object/intro" target="_blank">Объекты Javascript в примерах</a></p>
<h3>Скрипты, практика</h3>
<!--
https://learn.javascript.ru/prototype
https://learn.javascript.ru/global-object

-->
<!--script>
var user = {name:'vc', age:17, lastName:'ffff', eMail:'eee@ddd'};
console.log(user.lastName);
user.phone = '555 55 55';
console.log(user.phone);
delete user.phone;
console.log(user.phone);


function userWrite(obj) {
return 'my name is ' + obj.name + 'my age ' + obj.age + 'my last name ' + obj.lastName + 'my eMail is ' + obj.eMail;
}

var result = userWrite(user);
document.write(result);


</script-->

<hr>


<script>
var user = {};
user.name = 'Иван'
user.lastName = 'Иванов'
user.age = '18'
user.eMail = 'mail@mail.com'
user.phone = '555 55 55';
user.city = 'Киев'

function userWrite(obj) {
return 'Меня зовут: ' + obj.name + ' ' + obj.lastName + ',\n' + 'мне ' + obj.age + 'лет' + ',  я живу в городе ' + obj.city + ';<br>Мои контакты: ' + 'эл.почта: ' + obj.eMail + ' и номер телефона: ' + obj.phone;

}

var result = userWrite(user);
document.write(result);


</script>
</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
</body>
</html>