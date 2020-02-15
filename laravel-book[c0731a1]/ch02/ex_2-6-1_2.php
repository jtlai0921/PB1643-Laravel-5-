<?php
class Dog{
    public $age;
	public function getAge(){
			echo "My age is $this->age";
	}
}
	
$mydog= new Dog();
$mydog->age = 3;
$mydog->getAge();