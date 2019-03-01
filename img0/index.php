<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Об картинках</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow">
<meta name="description" content="Картинки, просто картинки" />
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/scripts.php"); ?>
</head>
<body>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<div class="contet img">

<h1>Картинки</h1>


<h2>Тег картинки</h2>

<p>Лень. Лень каждый раз набирать ручками тег картинки. Посему <b>воть</b> заготовка</p>


<textarea readonly><img src="URL" alt=""></textarea>
<hr>

<h2>Обтекание картинки текстом по левому или правому боку</h2>

<textarea readonly class="css_flaot_img">
img.img_1_l {
    float: left;
    width: 200px;
    margin: 0 15px 0 0;
}
img.img_2_r {
    float: right;
    width: 200px;
    margin: 0 0 0 15px;
}
</textarea>
<br>
<textarea readonly class="second_area"> class="img_1_l"</textarea> или <textarea readonly class="second_area"> class="img_2_r"</textarea>
<hr>

<h2>Блок картинок</h2>


<p>Ну а если же надо вставить блок картинок, к примеру</p>

	<div class="img_blc_3f">
		<img src="/img/0165.jpg" alt="" />
		<img src="/img/0166.jpg" alt="" />
		<img src="/img/0167.jpg" alt="" />
	</div>
<textarea readonly class="area_4_img_blc">
<div class="img_blc_3f">
<img src="url" alt="" />
</div>
</textarea>

<p>А стили для этого блока с картинками</p>
<textarea readonly class="area_4_css_img_blc">
.img_blc_3f {
    display: table;
    margin: 0 auto;
}
.img_blc_3f img {
    height: 250px;
    padding: 5px;
}
</textarea>

<p>Или жн такой вариант реализации</p>

<div class="img_blc_3f_pro">
		<img src="/img/0165.jpg" alt="" />
		<img src="/img/0166.jpg" alt="" />
		<img src="/img/0167.jpg" alt="" />
</div>

<textarea readonly class="area_4_css_img_blc v2">
.img_blc_3f_pro {
	height: 250px;
    display: -webkit-inline-flex;
	display: inline-flex;
	width: 100%;
	-webkit-align-content: space-between;
	align-content: space-between;
	justify-content: center;
	-webkit-justify-content: center;
}
.img_blc_3f_pro img {
    height: auto;
    padding: 1%;
	object-fit: cover;
    max-width: 32%;
}
</textarea>

<p>При этом, в зависимости от ТЗ и используемого шаблона, эти стили, как и количество изображений и прочих атрибутов, придется поправить.</p>


</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
</body>
</html>