<?php

	if(isset($_GET['cookie'])) {
		$cookie_name = "datenschutz";
		$cookie_value = "yes";
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	}
	header('Location: index.php');
?>