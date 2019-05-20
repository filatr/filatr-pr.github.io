<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<h1>Делаем финал.дз по JS</h1>

<h2>Пишим програмку на JS</h2>
<div class="dz">
<p><a href="/images/product.jpg" data-lightbox="image-1">Вот задание</a></p>
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
	if (0 < product.sale <= 10) {
		document.write('<p><span class="like_i">Результат выполнения 2го пункта:</span> цена с учетом скидки - ' + product.price*(100-product.sale)/100 + '</p>');
		}
	else {
		document.write('<p><span class="like_i">Результат выполнения 2го пункта:</span> цена без скидки - ' + product.price + '</p>');
		}
};
product.userSale();
/// Сим закончили пункт 2


var counter = 0;
for (var key in product) {counter++;}
document.write('<p><span class="like_i">Результат выполнения 3го пункта:</span> всего свойств - ' + counter + '</p>');

/// Сим закончили пункт 3

Array.prototype.sum = function() {
    return this.reduce(function(a,b){return a+b;});
};
var arr = product.rating


document.write('<p><span class="like_i">Результат выполнения 4го пункта</span>: среднее количество голосов - ' + arr.sum() / arr.length + '</p>');

// решение пункта 3 заимствовано тут http://qaru.site/questions/415213/finding-the-average-of-an-array-using-js

/// Сим закончили пункт 4


var maxRating = Math.max.apply(null, product.rating);//  как варант, сделать перебором
var positionRating = product.rating.indexOf(maxRating);

//document.write(maxRating);
//document.write();
document.write('<p><span class="like_i">Результат выполнения 5го пункта</span>: чаще всего ставили оценку - ' + ++positionRating + '</p>');

/// Сим закончили пункт 5
document.write('<p><span class="like_i">Результат выполнения 6го пункта</span>: </p><ul>');

var paragraph = product.rating

//function six(i,k) {

//}
paragraph.forEach(function(item, i) {
  document.write('<li>Оценку ' + ++i + ' поставили ' + item + ' раз;</li>');
    // document.write('<li>Оценку ' + arr  + '</li>');

});
document.write('</ul>');

// читали тут https://learn.javascript.ru/array-iteration
/// Сим закончили пункт 6



</script>  

<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>