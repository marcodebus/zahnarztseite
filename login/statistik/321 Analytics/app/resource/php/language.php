<?php

	if (!isset($_GET["lang"])) 
	{
    	header("Location: " . $application_url . "/" . substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
    	exit;
	} 
	else 
	{
    	include("app/language/en.php");

   		if ($_GET["lang"] != "en" && file_exists("app/language/" . $_GET["lang"] . ".php")) 
   		{
        	include("app/language/" . $_GET["lang"] . ".php");
    	}
	}
	 
?> 