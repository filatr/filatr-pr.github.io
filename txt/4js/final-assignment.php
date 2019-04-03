<html>
    <head>
		<title>Итог изучения JS</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description"  content="JS. Просто JS. Проходи дальше" />
		<meta name="robots" content="index, follow">
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/scripts.php"); ?>
</head>
<body>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<div class="contet">
<h1>Делаем финал.дз по JS</h1>

<h2>Пишим програмку на JS</h2>
<div class="dz">
<p><a href="/img/product.jpg" data-lightbox="image-1">Вот задание</a></p>
<ol>
<li>Создать объект <span class="like_b">Product</span> и назначить ему свойства <span class="like_i">name</span>, <span class="like_i">price</span>, <span class="like_i">quantity</span>, <span class="like_i">manufacturer</span> и <span class="like_i">rating</span>. При этом <span class="like_b">rating</span> является специальным свойством которое содержит массив оценок товара пользователями под нулевым ключом количество оценок с рейтингом 1, под единичным с рейтингом 2 и т.д.<br>
Пример массива: <span class="color_1">Product.</span><span class="color_2">rating</span> = [1, 4, 30, 15, 5]</li>
<li>Написать метод объекта <span class="like_b">Product</span> который будет принимать значение скидки в процентах и возвращать цену со скидкой. Если скидка не указана то возвращает просто цену продукта.</li>
<li>Написать метод который вернет количество свойств объекта <span class="like_b">Product</span>.</li>
<li>Написать метод который вернет среднее количество голосов данного товара.</li>
<li>Написать метод который вернет рейтинг с наибольшим количеством голосов.</li>
<li>Написать метод который будет принимать первым параметром номер рейтинга от 1-5 и вторым параметром значение которое надо добавить к текущему рейтингу.</li>
</ol>
<p class="like_b">* Результаты работы методов можно выводить в консоль.</p>
</div>

<p>Выполнение</p>

<script>

var product = {
	name: 'prodd', // название товара
	price: '118', // цена товара
	quantity: '16', // количество/остаток
	manufacturer: 'asia', // производитель
	rating: [1, 4, 30, 15, 5], // рейтинг
	/// Сим закончили пункт 1
	sale: parseInt(prompt('Да пусть твой выбор скидки будет розумен!', Number('4')))

//document.write(Object.keys(product))
//console.log(product)
};
product.userSale = function() {
	if (product.sale <= 10) {
		document.write('<p>Результат выполнения 2го пункта: цена с учетом скидки - ' + product.price*(100-product.sale)/100 + '</p>');
		}
	else {
		document.write('<p>Результат выполнения 2го пункта: цена без скидки - ' + product.price + '</p>');
		}
};
product.userSale();
/// Сим закончили пункт 2


var counter = 0;
for (var key in product) {counter++;}
document.write('<p>Результат выполнения 3го пункта: всего свойств - ' + counter + '</p>');
// А в чем подвох? при первом же запросе гугл'я выдало результат, который Мы тут же смогли применить.

/// Сим закончили пункт 3

Array.prototype.sum = function() {
    return this.reduce(function(a,b){return a+b;});
};
var arr = product.rating
document.write('<p>Результат выполнения 4го пункта: среднее количество голосов - ' + arr.sum() / arr.length + '</p>');

// решение пункта 3 заимствовано тут http://qaru.site/questions/415213/finding-the-average-of-an-array-using-js


/// Сим закончили пункт 4


var maxRating = Math.max.apply(null, product.rating);
var positionRating = product.rating.indexOf(maxRating);

//document.write(maxRating);
//document.write(positionRating);
document.write('<p>Результат выполнения 5го пункта: </p>');





/// Сим закончили пункт 5


document.write('<p>Результат выполнения 6го пункта: </p>');

/// Сим закончили пункт 6



</script>  
</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
</body>
</html>