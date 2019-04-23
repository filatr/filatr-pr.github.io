<?php include ("{$_SERVER['DOCUMENT_ROOT']}template/inc/header.php"); ?>
<h1>Админка</h1>

<p><a href="/phpmyadmin/" target="_blank">phpmyadmin</a></p>
<fieldset>
    <legend>Регистрация</legend>
<form action="act.php" method="post">
 <p>Ваше имя: <input type="text" name="name" /></p>
 <p>Возраст: <input type="number" name="age" min="0" max="100" step="1" value="" /></p>
 <p>Укажите логин: <input type="text" name="login" /></p>
 <p>Укажите пароль: <input type="password" maxlength="25" name="password"/></p>
 <p>Укажите e-mail: <input type="email" name="email" /></p>
 <p><input type="submit" value="Регистрация" /></p>
</form>
</fieldset>
<fieldset>
    <legend>Вход</legend>
<form action="act.php" method="post">
 <p>Укажите логин: <input type="text" name="login" /></p>
 <p>Укажите пароль: <input type="password" maxlength="25" name="password"/></p>
 <p><input type="submit" value="Вход" /></p>
</form>
</fieldset>




<?php include ("{$_SERVER['DOCUMENT_ROOT']}template/inc/footer.php"); ?>