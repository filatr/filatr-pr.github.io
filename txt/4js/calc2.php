<html>
    <head>
		<title>Юзаем function</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description"  content="Простейший калькулятор" />
		<meta name="robots" content="index, follow">
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/scripts.php"); ?>
</head>
<body>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<div class="contet">
<h1>юзаем function</h1>

<p>
<script>
/*function calc(a,b){

return(a+b);


}
c = parseInt(prompt());
d = parseInt(prompt());

var result = calc(c, d);
document.write(result);
*/
/*function pobeda(arr) {

for(i=0; i<arr.length-1;i++) {

  console.log(arr[i])
}


}
var result = [13,45,777,75,46,967];
pobeda(result);

//pobeda([13,52,36]);*/


var beda = [13,52,36,16,78,6766];
console.log(beda.pop());
console.log(beda.shift());
console.log(beda.push(12,14,22));
console.log(beda.unshift(3,4,5));
</script>
</p>




</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
</body>
</html>