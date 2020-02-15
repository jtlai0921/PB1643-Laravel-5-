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
	function talk()
	{
		print "模仿人類說話";
	}
}

$mybird = new Parrot();
$mybird->fly();