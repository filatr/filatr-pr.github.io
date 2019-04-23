	$(document).ready(function(){
  $('.bxslider').bxSlider({

  slideWidth: 400,
  
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
$(document).on('click','.spoiler-trigger',function(e){e.preventDefault();$(this).toggleClass('active');$(this).parent().find('.spoiler-block').first().slideToggle(300);})

// let a=1;
// let b=4;
// a+b;
// a-b;
// a*b;
// b/a;

// //alert (a+b);
// console.log (a+b);
// console.log (b-a);
// console.log (a*b);
// console.log (b/a);

// let c="hello";
// let d="basic"

// console.log (c+d);
// console.log (c-d);
// console.log (c*d);
// console.log (c/d);
// //alert (a%b);
// let f=1;
// f++;
// f--;
// ++f;
// --f;
// f;

//let a=prompt("введите имя");


// var a=prompt();
// var b=prompt();
// if (a>b) {
	// alert ("a");
// alert ("b");
// }
// else if (b>a) {
// alert (b);}
// else {alert (b=a)}

