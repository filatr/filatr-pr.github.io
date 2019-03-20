<html>
    <head>
		<title>Простейший калькулятор, юзаем function</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description"  content="Простейший калькулятор" />
		<meta name="robots" content="index, follow">
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/scripts.php"); ?>
</head>
<body>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<div class="contet">
<h1>юзаем function</h1>


<script>
function Calc(a,b){

return(a+b);


}
c = parseInt(prompt());
d = parseInt(prompt());

var result = Calc(c, d);
alert(result);



</script>
</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
</body>
</html>