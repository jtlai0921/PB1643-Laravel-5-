<?php
function fib($n){
	if($n<=1) return 1;
	else return fib($n-1)+fib($n-2);
}
for($i=0; $i<=9; $i++){
	echo fib($i)."　";
}
?>