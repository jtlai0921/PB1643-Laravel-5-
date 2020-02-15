<?php
class MyClass
{
    public $x = "123";
    protected $y = "45.6";
    private $z = "seven";
    
    function place()
    {
		echo "$this->x <br/>";
		echo "$this->y <br/>";
		echo "$this->z <br/>";
    }
}

$myclass = new MyClass();
echo $myclass ->place();
echo $myclass ->x;
echo $myclass ->y;
echo $myclass ->z;