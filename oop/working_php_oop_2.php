<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/inc/header.php"); ?>
<h1>Домашний практикум</h1>

<p>ТЗ: создать 3й класс и проверить наследование при разных типах доступа (приватный, публичный)</p>
<hr>

<?php 

class A1 {

    public $name = " Orlando ";
    protected $age = 25;
    private $say = " hello ";

    function WhoAreU() {
        echo "Mister! ";
        echo $this->name;
        echo $this->age;
        echo $this->say;
    }
}
$A1 = new A1;
$A1->WhoAreU();
echo "<br>";
echo $A1->name;
echo "<br>";
//echo $A1->age; // Fatal error
//echo $A1->say; // Fatal error
echo "<br><hr>";
///////////////
class B1 extends A1 {
    public $sity = "New York";
    protected $sity1 = "Madrid";
    private $sity2 = "Kiev";
    function GoHome() {
        echo "I love  ";
        }
}
$B1 = new B1;
echo $B1->GoHome() . $B1->sity;
// echo $A1->age;  // Fatal error
// echo $A1->say;  // Fatal error
$B1->WhoAreU();
echo "<br>";


echo "<br><hr>";
///////////////
class C1 extends B1 {}
$C1 = new C1;

echo $C1->WhoAreU() . $C1->name . "<br>";
//echo "I'm " . $C1->age . " old<br>";
//echo $C1->GoHome() . $C1->sity . "<br>";


echo "<br><hr><hr>"; ?>

    <p>Заметки</p>
    <p>В родительском классе A1:</p>
    <ul>
        <li>если выводим свойства в методе, то все свойства работают</li>
        <li>если отдельно выводим свойства, то при "публичном" все работает, а при "защищенном" и "закрытом" - Fatal error</li>
    </ul>

    <p>В дочернем классе B1:</p>

    <ul>
        <li>если выводить свойства родителя в методе, то все свойства работают</li>
        <li>если отдельно выводим свойства родителя, то при "публичном" все работает, а при "защищенном" и "закрытом" - Fatal error</li>
    </ul>











<?php include "../template/inc/footer.php"; ?>