<link rel="icon" href="/template/favico.ico" type="image/x-icon" />  
<link rel="shortcut icon" href="/template/favico.ico" type="image/x-icon">

<link href="/template/css/site.css" media="screen" rel="stylesheet" type="text/css" />
<link href="/template/inc/lightbox/css/lightbox.css" rel="stylesheet" />
<link href="/template/inc/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="/template/inc/lightbox/js/lightbox.min.js"></script>
<script src="/template/inc/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
  $('.bxslider').bxSlider({

  slideWidth: 400,	// ширина слайда; при 500 ширина 510, высота 452, при 300, ширина 310, высота 210
  
  //	автопрокрутка
  //auto: true,
  //autoControls: true,

  // эти два параметра отменяют бесконечный цикл просмотра слайдов
  //  infiniteLoop: false,
//  hideControlOnEnd: true

// автонастройка высоты
//adaptiveHeight: true,
//mode: 'fade',

// статичное количество слайдов, также не забыть добавить значение ширины
	minSlides: 3,
	maxSlides: 3,
	slideMargin: 15,	// растояние между слайдами, срабатывает, когда показываются несколько слайдов
  });
			$('.spoiler_links').click(function(){
			$(this).next('.spoiler_body').toggle('normal');
			return false;
		});
    });
</script>


