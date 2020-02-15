<?php
class Animal
{
	function calling($temp)
	{
		$temp->call();
	}
	function call()
	{
		//空白內容
	}
}

class Cat extends Animal
{
	function call()
	{
		echo 'Cat'.'<br/>';
	}
}

class Dog extends Animal
{
	function call()
	{
		echo 'Dog'.'<br/>';
	}
}

$myanimal = new Animal();
$animal1 = new Cat();
$animal2 = new Dog();
$myanimal->calling($animal1); 
$myanimal->calling($animal2); 