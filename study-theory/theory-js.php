<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<h1>JS: теория</h1>

<h2>Полезные сайты</h2>
<ul>
<li><a href="https://plnkr.co/edit/?p=preview" target="_blank"><b>Helping developers make the web</b></a></li>
<li><a href="https://learn.javascript.ru/" target="_blank">Современный учебник Javascript</a></li>
<li><a href="http://qaru.site/questions/12331/what-is-event-bubbling-and-capturing" target="_blank">Что такое пузырь и захват событий?</a></li>
<li><a href="http://www.linkex.ru/java/inc-dec.php" target="_blank">Инкремент и декремент</a></li>
<li><a href="https://learn.javascript.ru/types-intro" target="_blank">Шесть типов данных, typeof</a></li>
<li><a href="https://learn.javascript.ru/object" target="_blank">Объекты как ассоциативные <span class="like_b">массивы</span></a></li>
<li><a href="http://qaru.site/questions/718978/angularjs-splice-vs-slice" target="_blank">JavaScript Массив сплайс против ломтика</a></li>
<li><a href="https://learn.javascript.ru/array-methods" target="_blank">Массивы: методы</a></li>
<li><a href="https://developer.mozilla.org/uk/docs/Learn/JavaScript/Objects/Basics" target="_blank">Основи об'єктів</a></li>
<li><a href="https://developer.mozilla.org/uk/docs/Web/JavaScript/Reference/Global_Objects/Array/forEach" target="_blank">Array.prototype.forEach()</a></li>
<li><a href="https://learn.javascript.ru/array-iteration" target="_blank">Массив: перебирающие методы</a></li>
<li><a href="http://javascript.ru/tutorial/object/intro" target="_blank">Объекты Javascript в примерах</a></li>
<li><a href="http://mathhelpplanet.com/static.php?p=javascript-algoritmy-sortirovki" target="_blank">Алгоритмы сортировок на JavaScript</a></li>
<li><a href="http://javascript.ru/tutorial/object/intro" target="_blank">Объекты Javascript в примерах</a></li>
</ul>

<h2>Теория</h2>

<h3>Шесть типов данных, typeof</h3>
<ol>
<li>Число «number»</li>
<li>Строка «string»</li>
<li>Булевый (логический) тип «boolean»</li>
<li>Специальное значение «null»</li>
<li>Специальное значение «undefined»</li>
<li>Объекты «object»</li>
</ol>
<hr>
<h3>Оператор typeof</h3>

<p>Оператор typeof возвращает тип аргумента.</p>
<p>У него есть два синтаксиса: со скобками и без:</p>
<ul>
    <li>Синтаксис оператора: typeof x.</li>
    <li>Синтаксис функции: typeof(x).</li>
</ul>
<p>Работают они одинаково, но первый синтаксис короче.</p>


<hr>

<h3>Splice and Slice</h3>
<p><b>Важно знать</b></p>
<p>Splice and Slice - это функции Javascript Array.</p>
<p>Splice vs Slice</p>
<p>Метод splice() возвращает удаленные элементы в массиве, а метод slice() возвращает выбранный элемент в массиве как новый объект массива.</p>
<p>Метод splice() изменяет исходный массив, а метод slice() не изменяет исходный массив.</p>
<p>Метод splice() может принимать n количество аргументов, а метод slice() принимает 2 аргумента.</p>
<p>Сплав с примером</p>
<p>Аргумент 1: Индекс, обязательно. Целое число, указывающее, в какую позицию добавлять/удалять элементы. Используйте отрицательные значения для указания позиции из конца массива.</p>
<p>Аргумент 2: Необязательно. Количество элементов для удаления. Если установлено значение 0 (ноль), никакие элементы не будут удалены. И если не будет передано, все элементы из предоставленного индекса будут удалены.</p>
<p>Аргумент 3... n: Необязательно. Новый элемент (ы), который нужно добавить в массив.</p>
<p><a href="http://qaru.site/questions/718978/angularjs-splice-vs-slice" target="_blank">Источник 1</a></p>
<p><a href="https://learn.javascript.ru/array-methods" target="_blank">Источник 2</a></p>

<hr>

<h3>Массив: перебирающие методы (forEach)</h3>

<script>
/*massEff.forEach (function (el, i, arr){
  console.log('element' + el, i, arr);
//  document.write('element' + el, i, arr);
})
*/
</script>
<p>Метод forEach() виконує надану функцію один раз для кожного елемента масиву.</p>
<p>Метод forEach() перебирає всі елементи масиву за зростанням індексу та викликає для кожного функцію callback. Оминає властивості, які було видалено або не було започатковано — в розріджених масивах.</p>
<p>Функція callback викликається з трьома аргументами:</p>
<ul>
<li>значення елемента;</li>
<li>індекс елемента;</li>
<li>масив, що перебирається.</li>
</ul>
<p>Якщо для forEach() вказано параметр thisArg, його буде використано як this для функції callback. Якщо ж не вказано, то буде використано значення undefined. Зрештою значення this для функції callback визначатиметься відповідно до загальних правил.</p>
<p>Множина індексів елементів, що їх перебиратиме forEach() з'ясовується ще до першого виклику callback. Елементи, додані після здійснення виклику forEach(), буде знехтувано (callback для жодного з них не викликатиметься). Якщо змінити значення котрогось зі ще не відвіданих елементів масиву, зміни буде враховано — до функції callback потрапить те значення елемента, яке він мав безпосередньо перед відповідним викликом callback. Якщо елемент видалено до відвідування, його відвідано не буде. Якщо вже відвіданий елемент видалено упродовж перебирання (наприклад, за допомогою shift()), індекси подальших елементів зменшаться на одиницю, а отже певний елемент буде пропущено — дивіться приклади нижче у статті.</p>
<p>На відміну від map() чи reduce(), метод forEach() завжди вертає значення undefined, тож продовжити ланцюжок викликів після нього неможливо. Досить типовим є виклик forEach() наприкінці ланцюжка методів з метою виконання додаткових дій.</p>
<p>Сам метод forEach() не змінює масив, на якому його викликано, втім усередині функції callback це можливо.</p>
<p><b>Заувага:</b> Зупинити чи перервати цикл forEach() неможливо без викидання винятку. Якщо вам це потрібно, метод forEach() — не ліпший вибір. Скористайтеся натомість звичайним циклом. Якщо ви перевіряєте елементи масиву на відповідність певній умові та маєте потребу повернути значення типу Boolean, зверніть увагу на методи every() та some(). Також можна скористатись новими методами find() та findIndex(), якщо вони доступні, — в цих методах перебір елементів переривається, якщо чергове значення відповідає умові.</p>

<p><a href="https://developer.mozilla.org/uk/docs/Learn/JavaScript/Objects/Basics" target="_blank">Источник 1</a></p>
<p><a href="https://developer.mozilla.org/uk/docs/Web/JavaScript/Reference/Global_Objects/Array/forEach" target="_blank">Источник 2</a></p>
<p><a href="https://learn.javascript.ru/array-iteration" target="_blank">Источник 3</a></p>
<p><a href="http://javascript.ru/tutorial/object/intro" target="_blank">Объекты Javascript в примерах</a></p>

<hr>
<h2>Практика</h2>

<ol>
<li><a href="/study-working/working_js_calc.php" target="_blank">Простейший калькулятор</a>, запукскается при заходе на стр</li>
<li><a href="/study-working/working_js_function.php" target="_blank">Юзаем function</a></li>
<li><a href="/study-working/working_js_objects.php" target="_blank">Юзаем objects</a>, запукскается при заходе на стр
<ul><li><a href="/study-working/working_js_objects_this.php" target="_blank">Юзаем this</a></li></ul>
</li>
</ol>
<p>Финальное домашнее <a href="/study-working/working_js_final_assignment.php" target="_blank">задание по JS</a></p>

<hr>



<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
<?php //include '../template/inc/footer.php'; ?>