<?php
	for($i = 1; $i <= 10; $i++){
	    switch ($i){
	            case 1:
	                echo '變數$i為'.$i."　";
	                break;
				case 2:
	                echo '變數$i為'.$i."　";
	                break 1;
				case 3:
				   echo "<br>";
	                break 2;
	    }
	}
	echo '迴圈已跳出，變數$i最後為'.$i;
