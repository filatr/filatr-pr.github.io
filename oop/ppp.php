<?php

interface iTemplate
{
    public function setVariable();
    public function getHtml();
}

// Реализуем интерфейс
// Это сработает нормально
class Template implements iTemplate
{
  
    public function setVariable()
    {
    	echo 1;
    }
  
    public function getHtml()
    {
    	echo 2;
    }
}
$a = new Template();
$a->setVariable();
$a->getHtml();

echo "<br>";

//// https://php.net/manual/ru/language.oop5.abstract.php

abstract class AbstractClass
{
   /* Данный метод должен быть определён в дочернем классе */
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

   /* Общий метод */
    public function printOut() {
        print $this->getValue() . "\n";
    }
}

class ConcreteClass1 extends AbstractClass
{
    protected function getValue() {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
}

class ConcreteClass2 extends AbstractClass
{
    public function getValue() {
        return "ConcreteClass2";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass2";
    }
}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') ."\n";

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') ."\n";
?>


