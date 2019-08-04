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

<hr>
<fieldset>
    <legend>Пример 2</legend>
    <form action="action.php" enctype="multipart/form-data" method="post">
        <p>Ваше имя <span class="red">*</span>:</p>
        <input type="text" name="name" pattern="[А-Яа-я]{4,}" required/>
        <p>Ваш телефон <span class="red">*</span>:</p>
        <input type="tel" name="tel" pattern="\+380[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}" required placeholder="+38099-999-66-99">
        <p>Дополнительная информация</p>
        <input type="text" name="info" maxlength="25" size="40" />
        <p>Фото</p>
        <input type="hidden" name="MAX_FILE_SIZE" value="5242880" />
        <input type="file" accept="image/*" name="img" />
        <p><input type="submit" value="Отправить"/></p>
    </form>
    <p class="like_b"><span class="red">*</span> - обязательное поле</p>
    <p><a href="working_bd_4.php">Вывод данных</a>, добавленных в этой форме</p>
</fieldset>
<hr>


<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>