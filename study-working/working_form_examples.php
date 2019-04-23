<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<h1>Формы</h1>


<fieldset>
    <legend><a name="forma1"></a>Пример 1</legend>
<form action="act.php" method="post">
 <p>Ваше имя: <input type="text" name="name" /></p>
 <p>Ваш возраст: <input type="number" name="age" min="0" max="100" step="1" value="" /></p>
 <p>Укажите e-mail: <input type="email" name="email" /></p>
 <p><input type="submit" /></p>
</form>
</fieldset>


<?php
require_once ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/connection.php");

 
if(isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year'])){
 
    // подключаемся к серверу
    $link = mysqli_connect($servername, $username, $password, $dbname) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $day = htmlentities(mysqli_real_escape_string($link, $_POST['day']));
    $month = htmlentities(mysqli_real_escape_string($link, $_POST['month']));
    $year = htmlentities(mysqli_real_escape_string($link, $_POST['year']));

     
    // создание строки запроса
    $query ="INSERT INTO favouriteday VALUES(NULL, '$day','$month','$year')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
    // закрываем подключение
    mysqli_close($link);
}
?>
<hr>
<fieldset>
    <legend>Пример 2</legend>
<form method="post" action="action.php">
<p>Введите день:<br> 
<input type="text" name="name" /></p>
<p>Введите месяц:<br> 
<input type="password" name="password" /></p>
<p>Введите год:<br> 
<input type="email" name="email" /></p>
<input type="submit" value="Добавить">
</form>
</fieldset>
<hr>
<!--
<p>Нобелевская премия</p>



<fieldset>
    <legend>Награды</legend>
<form action="nobel_prize_forms.php" method="post">
<p>Введите день:<br> 
<input type="text" name="day" /></p>
<p>Введите месяц:<br> 
<input type="text" name="month" /></p>
<p>Введите год:<br> 
<input type="text" name="year" /></p>
<input type="submit" value="Добавить">
</form>
</fieldset>

<hr>-->
<br>
<div class="spoiler_v2">
<a href="#" class="spoiler-trigger"><span>Пример n</span></a>
<div class="spoiler-block">
<form action="action.php" method="post">
<p>От куда Вы</p>
<p><input type="radio" name="answer" value="a1">Киев</p>
<p><input type="radio" name="answer" value="a2">Одесса</p>
<p><input type="radio" name="answer" value="a3">Львов</p>
<p><input type="radio" name="answer" value="a4">Харьков</p>
<p><input type="radio" name="answer" value="a5">Полтава</p>
<p><input type="radio" name="answer" value="a6">Др. город</p>
<p><input type="submit"></p>
</form>
</div>
</div>

<div class="spoiler_v2">
<a href="#" class="spoiler-trigger"><span>Пример n</span></a>
<div class="spoiler-block">
<form action="action.php" method="post">
 <p>Ваше имя: <input type="text" name="name" /></p>
 <p>Ваш возраст: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form>
</div>
</div>

<div class="spoiler_v2">
<a href="#" class="spoiler-trigger"><span>Пример n</span></a>
<div class="spoiler-block">
<form action="" method="post">
    Имя:  <input type="text" name="personal[name]" /><br />
    Email: <input type="text" name="personal[email]" /><br />
    Пиво: <br />
    <select multiple name="beer[]">
        <option value="warthog">Warthog</option>
        <option value="guinness">Guinness</option>
        <option value="stuttgarter">Stuttgarter Schwabenbräu</option>
    </select><br />
    <input type="submit" value="Отправь меня!" />
</form>
</div>
</div>

<div class="spoiler_v2">
<a href="#" class="spoiler-trigger"><span>Тестовая форма, пример n</span></a>
<div class="spoiler-block">
<form name="form1" method="post" action="script.php">
<p><span>Текстовое поле: </span>
<input type="text" name="textfield">
</p>
<p>Поле ввода пароля:
<input type="password" name="pswfield">
</p>
<p>Скрытое поле hidden
<input name="hidden" type="hidden" id="hidden" value="Скрытое_значение">
</p>
<hr size="1">
<p>Независимые переключатели (checkbox):</p>
<p>
<input type="checkbox" name="checkbox1" value="1">
Вариант первый
<input type="checkbox" name="checkbox2" value="1">
Вариант второй
<input type="checkbox" name="checkbox3" value="1" checked>
Вариант третий (по умолчанию)</p>
<hr size="1">
<p>Зависимые переключатели (radio):</p>
<p>
<input name="radiobutton" type="radio" value="yes">
Да
<input name="radiobutton" type="radio" value="no">
Нет</p>
<hr size="1">
<p>Многострочное текстовое поле (textarea):</p>
<p>
<textarea name="textarea" cols="40" rows="10">Текст по умолчанию</textarea>
</p>
<hr size="1">
<p>Список с единственным выбором:</p>
<p>
<select name=day_s size=1>
<option value=1>Понедельник</option>
<option value=2>Вторник</option>
<option value=3 selected>Среда</option>
<option value=4>Четверг</option>
<option value=5>Пятница</option>
<option value=6>Суббота</option>
<option value=7>Воскресенье</option>
</select>
</p>
<p>Список с множественным выбором (multiple):</p>
<p>
<select name=day_m[] size=7 multiple>
<option value=1 selected>Понедельник</option>
<option value=2>Вторник</option>
<option value=3>Среда</option>
<option value=4>Четверг</option>
<option value=5>Пятница</option>
<option value=6>Суббота</option>
<option value=7>Воскресенье</option>
</select>
</p>
<hr size="1">
<p>
<input type="submit" value="Отослать форму">
&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Очистить форму">
</p>
</form>
</div>
</div>

<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
<?php //include '../template/inc/footer.php'; ?>