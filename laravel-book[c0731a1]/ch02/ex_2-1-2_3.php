<?php
	$x = 1;
	function multiply($x){
		$sum = $x*2;
		echo '函數呼叫結束<br />';
	}
?>

<?php
	multiply($x);
	echo "x=$x<br />";
	echo "sum=$sum<br />";
?>