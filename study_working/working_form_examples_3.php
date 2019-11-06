<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
    <h1>Формы, v3</h1>


        <form action="act3.php" method="post">
            <p>Число по горизонтали: <input type="number" name="horizontal" min="1" max="5" step="1" value="" /></p>
            <p>Число по вертикали: <input type="number" name="vertical" min="1" max="5" step="1" value="" /></p>
            <p><input type="submit" /></p>
        </form>

<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>