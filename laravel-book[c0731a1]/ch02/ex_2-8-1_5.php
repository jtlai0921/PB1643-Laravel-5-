<?php
	setcookie("member", "David", time()+3600);
	echo $_COOKIE["member"];
	setcookie("member", " David", time()-3600);