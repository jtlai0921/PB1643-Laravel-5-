<?php
	function bigger($x, $y){
	   if($x > $y){
		   $z = $x.">".$y."<br>";
	   }else{
		   $z = $x."<".$y."<br>";
		   function newFunc(){
			   echo "新函數誕生";
		   }
	   }
	   return $z;
	}
	
	echo bigger(10, 15);
	echo bigger(20, 10);
	echo newFunc();
