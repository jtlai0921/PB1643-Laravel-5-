<?php
interface Count1
{
   Public function add($x , $y);
}

Interface Count2
{
   Public function sub($x, $y);
}
	
Interface Count3 extends Count1
{
   Public function mult($x, $y);
}

Class MyMath implements Count2, Count3
{
    Public function add($x, $y){
       Return $x + $y;
    }
    Public function sub($x, $y){
       Return $x - $y;
    }
    Public function mult($x, $y){
       Return $x * $y;
    }
}

$mymath = new MyMath();
echo "7 + 5= " . $mymath -> add (7, 5) . "<br/>";
echo "7 – 5= " . $mymath -> sub (7, 5) . "<br/>";
echo "7 * 5= " . $mymath -> mult (7, 5) . "<br/>";