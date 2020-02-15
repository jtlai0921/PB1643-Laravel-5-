<?php
class Bird
{
    function fly()
	{
		print "birds can fly.<br/>";
	}
}


class Parrot extends Bird
{
	function talk(){
		print "模訪人類說話";
	}
    function fly()
	{
		print "parrots can fly.<br/>";
	}
}

$mybird = new Parrot();
$mybird->fly();