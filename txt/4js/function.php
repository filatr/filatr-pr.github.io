<html>
    <head>
		<title>Юзаем function</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description"  content="Простейший калькулятор" />
		<meta name="robots" content="index, follow">
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/scripts.php"); ?>
</head>
<body>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<div class="contet">
<h1>Юзаем function</h1>

<h2><a href="http://mathhelpplanet.com/static.php?p=javascript-algoritmy-sortirovki">Алгоритмы сортировок на JavaScript</a></h2>

<h3>Пузырьковая сортировка на JavaScript</h3>
<p>
<script>
/*function calc(a,b){

return(a+b);


}
c = parseInt(prompt());
d = parseInt(prompt());

var result = calc(c, d);
document.write(result);
*/

/* ************ */

/*function pobeda(arr) {

for(i=0; i<arr.length-1;i++) {

  console.log(arr[i])
}


}
var result = [13,45,777,75,46,967];
pobeda(result);

//pobeda([13,52,36]);*/

/* ************ */

// var beda = [13,52,36,16,78,6766];
// console.log(beda.pop());
// console.log(beda.shift());
// console.log(beda.push(12,14,22));
// console.log(beda.unshift(3,4,5));

/* ************ */


//var BubbleSort = [45,16,28,35,78,17,89,21,29,6,45,14,88,99,667,647,123]ж

//sortingMassive.sort();



function BubbleSort(A)
{
    var n = A.length;
    for (var i = 0; i < n-1; i++)
     { for (var j = 0; j < n-1-i; j++)
        { if (A[j+1] < A[j])
           { var t = A[j+1]; A[j+1] = A[j]; A[j] = t; }
        }
     }                     
    return A;
}

var result = BubbleSort([45,16,28,35,78,17,89,21,29,6,45,14,88,99,667,647,123]);
document.write(result);
</script>
</p>

<h3>Сортировка Шелла на JavaScript</h3>

<p>
<script>
function ShellSort(A)
{
    var n = A.length, i = Math.floor(n/2);
    while (i > 0)
     { for (var j = 0; j < n; j++)
        { var k = j, t = A[j];
          while (k >= i && A[k-i] > t)
           { A[k] = A[k-i]; k -= i; }
          A[k] = t;
        }
      i = (i==2) ? 1 : Math.floor(i*5/11);
     }
    return A;
}
var result = ShellSort([17,96,88,175,128,137,149,51,983,778,9,6,45,14,88,99,667,647,123,666]);
document.write(result);

</script>
</p>




</div>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/footer.php"); ?>
</body>
</html>