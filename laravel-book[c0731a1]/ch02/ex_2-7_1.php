<?php 
function check($num){
	if($num == 0)
	{
		throw new Exception('num can not be 0',100); //拋出例外
	}
	return $num;
}

try{	        //欲偵錯的程式碼
	echo check(0);
}
catch(exception $e){   //抓取例外並執行下面處理
	echo "Error Message: ".$e->getMessage()."<br/>";
	echo "Error Code: ".$e->getCode()."<br/>";
}