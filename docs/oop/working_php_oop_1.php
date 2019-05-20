<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<h1>Практикум на занятии за 2 мая</h1>
<!-- 
Возмодный вопрос на собеседованиие: можем ли менять мод.доступа при наcледовании?
-->

<p>Этот же практикум в файле <a href="abc.php" target="_blank">abc.php</a></p>
<pre><code>
Class abc {
	public $a = 1;
	public $b = 2;
public function __construct($c, $d){
	$this->c = $c;
	$this->d = $d;
	}
public function plusP () {
	echo "Hello, World!";
		}
	function qwerty() {
	echo $this->c;
	echo $this->d;
		}
}
$c = new abc(7,6);
$c->plusP();
$c->qwerty();
Class bbb extends abc {}
$cc = new bbb(1,2);
$cc->plusP();
</code></pre>

<?php include "../template/inc/footer.php"; ?>