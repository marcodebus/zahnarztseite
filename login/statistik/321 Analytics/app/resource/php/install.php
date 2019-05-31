<?php 

	
	// Run installation

	if (isset($_POST["application_domain"]) && isset($_POST["application_path"]))
	{
		// Create config file

		$domain = trim($_POST["application_domain"]);
		if(substr($domain, -1) == "/") { $domain = substr($domain,0,-1); }

		$path = trim($_POST["application_path"]);
		if(substr($path, -1) == "/") { $path = substr($path,0,-1); }
		$path = str_replace("//","/",$path);

		$config_content = "<?php\n\n";

		$config_content .= '$' . "application_domain = \"" . $domain . "\";\n"; 
		$config_content .= '$' . "application_path = \"" . $path . "\";\n\n"; 

		$config_content .= "?>";

		$config = fopen("config.php","w");
		fwrite($config,$config_content);
		fclose($config);

		if (!file_exists(".htaccess"))
		{	
			unlink(".htaccess");
		}

		echo "success";
		exit;
	}
 
 ?>


<!DOCTYPE html>
<html lang="<?php echo $_GET["lang"]; ?>">


	<!-- Header -->

	<head style="display:none !important">

 
		<!-- Main meta tags -->

		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui"/>

		<title>321 Analytics</title>
		<meta name="description" content="321 Analytics">


		<!-- jQuery -->

		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script>!function(a){function f(a,b){if(!(a.originalEvent.touches.length>1)){a.preventDefault();var c=a.originalEvent.changedTouches[0],d=document.createEvent("MouseEvents");d.initMouseEvent(b,!0,!0,window,1,c.screenX,c.screenY,c.clientX,c.clientY,!1,!1,!1,!1,0,null),a.target.dispatchEvent(d)}}if(a.support.touch="ontouchend"in document,a.support.touch){var e,b=a.ui.mouse.prototype,c=b._mouseInit,d=b._mouseDestroy;b._touchStart=function(a){var b=this;!e&&b._mouseCapture(a.originalEvent.changedTouches[0])&&(e=!0,b._touchMoved=!1,f(a,"mouseover"),f(a,"mousemove"),f(a,"mousedown"))},b._touchMove=function(a){e&&(this._touchMoved=!0,f(a,"mousemove"))},b._touchEnd=function(a){e&&(f(a,"mouseup"),f(a,"mouseout"),this._touchMoved||f(a,"click"),e=!1)},b._mouseInit=function(){var b=this;b.element.bind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),c.call(b)},b._mouseDestroy=function(){var b=this;b.element.unbind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),d.call(b)}}}(jQuery);</script>


		<!-- Fonts -->

		<link href="https://fonts.googleapis.com/css?family=Roboto:300,500,700" rel="stylesheet">

	</head>


	<!-- Body -->
	
	<body>


		<!-- Background -->

		<div style="position:absolute; left:0; top:0; width:100vw; height:100vh; background:#fff;"></div> 

			
		<!-- Installation frame -->

		<iframe src="#" style="display:none;" id="installation_frame"></iframe>

		<div style="position:absolute; left:50%; top:50%; width:200px; height:20px; margin:-10px 0 0 -100px; font-family:'Roboto',sans-serif; line-height:20px; font-size:12px; font-weight:700; text-align:center; text-transform:uppercase; color:#3D415F;">Installation</div>


		<!-- Installation script -->

		<script style="display:none;">

			$(document).on("ready",function()
			{
				var domain = window.location.origin;
				var path = window.location.pathname.replace(/[^/]*$/,"");
				if (path == "" || path == "//") { path = "/"; }

				$.post((domain + path + "/index.php"),{application_domain:domain,application_path:path},function(data){ if (data.includes("success")) { $("#installation_frame").attr("src",domain + path + "/index.php"); $("#installation_frame").load(function() {window.location.replace(domain + path + "/index.php");}); }});
			});

		</script>	
		
	</body>
</html>