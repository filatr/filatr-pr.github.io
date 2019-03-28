<html>
    <head>
		<title>next</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description"  content="Простейший калькулятор" />
		<meta name="robots" content="index, follow">
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/scripts.php"); ?>
</head>
<body>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<div class="contet">
<h1>Занятие от 27 03</h1>
<p>это важно!!</p>
<p>
<script>
/*
http://qaru.site/questions/718978/angularjs-splice-vs-slice
https://developer.mozilla.org/uk/docs/Web/JavaScript/Reference/Global_Objects/Array/forEach
https://learn.javascript.ru/array-iteration
это важно!
*/
/*massEff.forEach (function (el, i, arr){
  console.log('element' + el, i, arr);
//  document.write('element' + el, i, arr);
})
*/

</script>
</p>
<h2>Далее обекты</h2>

<!--
https://learn.javascript.ru/prototype
https://learn.javascript.ru/global-object

-->
<script>
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


</script>
</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
</body>
</html>