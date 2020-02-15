<?php 
class MyException extends Exception
{
	function printMessage(){
		echo "例外訊息：" . $this->getMessage() . "<br/>";
	}
}

function checkEmail($email)
{
	if(!strpos($email,"@"))
		throw new MyException("E-mail需要包含'@'");
}

try{
	checkEmail('david.com');
}
catch(MyException $e){
	$e->printMessage();
}