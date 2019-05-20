<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>

<h1>Обекты</h1>

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
user.name = prompt('Введите имя', '');
user.lastName = prompt('Введите фамилию или отчество', '');
user.age = parseInt(prompt('Ваш возраст', ''));
user.eMail = prompt('Ваш е-мейл', '');
user.phone = prompt('Ваш номер телефона', '');
user.city = prompt('От куда Вы', '');

function userWrite(obj) {
return 'Меня зовут: ' + obj.name + ' ' + obj.lastName + ',\n' + 'мне ' + obj.age + 'лет' + ',  я живу в городе ' + obj.city + ';<br>Мои контакты: ' + 'эл.почта: ' + obj.eMail + ' и номер телефона: ' + obj.phone;

}

var result = userWrite(user);
document.write(result);


</script>

<p>Код скрипта</p>

<pre>
<code>

var user = {};
user.name = prompt('Введите имя', '');
user.lastName = prompt('Введите фамилию или отчество', '');
user.age = parseInt(prompt('Ваш возраст', ''));
user.eMail = prompt('Ваш е-мейл', '');
user.phone = prompt('Ваш номер телефона', '');
user.city = prompt('От куда Вы', '');

function userWrite(obj) {
return 'Меня зовут: ' + obj.name + ' ' + obj.lastName + ',\n' + 'мне ' + obj.age + 'лет' + ',  я живу в городе ' + obj.city + ';<br>Мои контакты: ' + 'эл.почта: ' + obj.eMail + ' и номер телефона: ' + obj.phone;

}

var result = userWrite(user);
document.write(result);

</code>
</pre>



<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
<?php //include '../template/inc/footer.php'; ?>