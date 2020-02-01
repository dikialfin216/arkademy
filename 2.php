<?php 


	function username($username)
	{
		if (preg_match("/[a-z]+[A-Z]{4,7}+[a-z]/", $username) == 1) {
			return true;
		} else {
			return false;
		}
	}

	function password($password)
	{
		if (preg_match("/[A-Z{3$}0-9a-z]+[!@#$%^&*()=]/", $password)) {
			return true;
		} else {
			return false;
		}
	}
	
	if (username('xFATHURx')) {
			echo "true";
		}	else {
			echo "false";
		}
		echo "<br>";
	if (password('kick2XXX!')) {
		echo "true";
	} else {
		echo "false";
	}
 ?>