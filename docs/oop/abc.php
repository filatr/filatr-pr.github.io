<?php

Class abc {
	//$this->
	// модификатор доступа
	public $a = 1;
	public $b = 2;

public function __construct($c, $d){// магические функции

	$this->c = $c;
	$this->d = $d;
	
}



public function plusP () {
		echo "Hello, World!";
	}
function qwerty() {
echo $this->c;
echo $this->d;  // ?

	}
}

$c = new abc(7,6);
$c->plusP();

$c->qwerty();

Class bbb extends abc {}

$cc = new bbb(1,2);

$cc->plusP();
