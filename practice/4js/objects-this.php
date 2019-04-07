<html>
    <head>
		<title>this</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description"  content="JS. Просто JS. Проходи дальше" />
		<meta name="robots" content="index, follow">
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/scripts.php"); ?>
</head>
<body>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<div class="contet">
<h1>Расматриваем this</h1>

<script>
/*var user = {name: 'vano', age:'19'};
let user2 = user;
user2.name = 'kollu';
user2.tell = '555-55-55';
document.write(user.name);
document.write(user.tell);
*/
/*
function User(data = null) {
	var name = data;
	this.email = '';
	this.showData = function() {
	alert(name + ' ' + this.email)
	};
	this.getName = function() {
		return name;
	}
	
}
var user1 = new User('valet');
var user2 = new User();

document.write(user1.getName());
document.write(user2.getName());


var vass = {name: 'ddd', age:'23', city: 'hall'};
var vass2233 = {name: 'aaa', age:'54', city: 'kiev'};

var vass = vass2233;



alert()

*/

function dred(x){
	this.name = x;
	this.surname = obj1.surname;
	this.age = obj1.age;
}

var obj1 = {
	name: 1,
	surname: 2,
	age: 3
}

var obj2 = obj1;
console.log(obj2);
obj2 = new dred(4);
console.log(obj2);
console.log(obj1);


</script>

</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
</body>
</html>