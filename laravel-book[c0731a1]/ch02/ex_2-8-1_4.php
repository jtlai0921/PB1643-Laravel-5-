<?php
	session_start();
	$_SESSION['memberID'] = '001';
	echo $_SESSION['memberID'];
	
	unset($_SESSION['memberID']);
	session_unset();