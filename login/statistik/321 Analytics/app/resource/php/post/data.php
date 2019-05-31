<?php

	if (isset($_GET["subsubcontent"]) && file_exists("app/resource/php/post/data/" . trim($_GET["subsubcontent"]) . ".php"))
	{
		try 
    	{ 
    		$analytics_data = array();
    		include("app/resource/php/post/data/blocks/filter.php"); 
			include("app/resource/php/post/data/" . trim($_GET["subsubcontent"]) . ".php");
		} 
		catch (Exception $exeption) { echo "error"; }
	}
	else
	{
		echo "error";
	}
	
?>