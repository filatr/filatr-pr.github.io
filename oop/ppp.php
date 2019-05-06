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





