<?php


	// Install

	if (!file_exists("config.php")) { include("app/resource/php/install.php"); exit; }


	// Allow Access

	if (isset($_GET["content"]))	
	{	
		if ($_GET["content"] == "get" || $_GET["content"] == "post")
		{
			$origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : $_SERVER['HTTP_HOST'];
			header("Access-Control-Allow-Origin:" . $origin);		
			header('Access-Control-Allow-Methods: POST, OPTIONS, GET, PUT');
			header('Access-Control-Allow-Credentials: true');
			header('Access-Control-Allow-Headers: Authorization, X-Requested-With');
			header('P3P: CP="NON DSP LAW CUR ADM DEV TAI PSA PSD HIS OUR DEL IND UNI PUR COM NAV INT DEM CNT STA POL HEA PRE LOC IVD SAM IVA OTC"');
			header('Access-Control-Max-Age: 1');
		}
	}

 
	// Turn Off Error Reporting
	
	ob_start(); error_reporting(0); ini_set("display_errors", 0); session_start();


	// Include 

	include("config.php"); $application_url = $application_domain . $application_path; include("app/resource/php/htaccess.php"); include("app/resource/php/language.php"); include("app/resource/php/database.php");


	// Get And Post Requests

	if (isset($_GET["content"]))	
	{	
		if ($_GET["content"] == "get")
		{
			if (file_exists("app/resource/php/get/" . trim($_GET["subcontent"]) . ".php")) { include("app/resource/php/get/" . trim($_GET["subcontent"]) . ".php"); }
			ob_end_flush(); $database = null; exit;
		}

		if ($_GET["content"] == "post")
		{
			if (file_exists("app/resource/php/post/" . trim($_GET["subcontent"]) . ".php")) { include("app/resource/php/post/" . trim($_GET["subcontent"]) . ".php"); }
			ob_end_flush(); $database = null; exit;
		}
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

		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="white" />

		<link rel="icon" href="<?php echo $application_url; ?>/app/resource/img/logo.png">
		<link rel="apple-touch-icon" href="<?php echo $application_url; ?>/app/resource/img/icon.png"">
		<link href="<?php echo $application_url; ?>/<?php echo $_GET["lang"]; ?>/get/manifest" rel="manifest" />

		<title>321 Analytics</title>
		<meta name="description" content="321 Analytics">
		<meta name="apple-mobile-web-app-title" content="321 Analytics">


		<!-- jQuery -->

		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script>!function(a){function f(a,b){if(!(a.originalEvent.touches.length>1)){a.preventDefault();var c=a.originalEvent.changedTouches[0],d=document.createEvent("MouseEvents");d.initMouseEvent(b,!0,!0,window,1,c.screenX,c.screenY,c.clientX,c.clientY,!1,!1,!1,!1,0,null),a.target.dispatchEvent(d)}}if(a.support.touch="ontouchend"in document,a.support.touch){var e,b=a.ui.mouse.prototype,c=b._mouseInit,d=b._mouseDestroy;b._touchStart=function(a){var b=this;!e&&b._mouseCapture(a.originalEvent.changedTouches[0])&&(e=!0,b._touchMoved=!1,f(a,"mouseover"),f(a,"mousemove"),f(a,"mousedown"))},b._touchMove=function(a){e&&(this._touchMoved=!0,f(a,"mousemove"))},b._touchEnd=function(a){e&&(f(a,"mouseup"),f(a,"mouseout"),this._touchMoved||f(a,"click"),e=!1)},b._mouseInit=function(){var b=this;b.element.bind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),c.call(b)},b._mouseDestroy=function(){var b=this;b.element.unbind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),d.call(b)}}}(jQuery);</script>


		<!-- Fonts -->

		<link href="https://fonts.googleapis.com/css?family=Ubuntu:700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">


		<!-- Core and App CSS Files -->

		<?php foreach (glob("app/resource/style/*.css") as $file) { echo "<link href=\"" . $application_url . "/" . $file . "?version=" . date('YmdHis') . "\" rel=\"stylesheet\" type=\"text/css\" />"; } ?><script>var chart_labels = {}; var chart_data = {}; var map_countries = {}; var map_markers = {}; var heatmap_data = {}; var heatmap_max = {};</script>

	</head>


	<!-- Body -->
	
	<body>


		<!-- Background -->

		<div class="content_background"></div> 


		<!-- Content -->
	
		<div class="content content_width center_horizontal">
			<div id="analytics_data">

			</div>
		</div> 


		<!-- Loader -->
	
		<div class="loader" id="loader">
			<div class="animation center_total">
			    <div class="bar bar_1"><div class="background"></div><div class="dot"></div></div>
			    <div class="bar bar_2"><div class="background"></div><div class="dot"></div></div>
			    <div class="bar bar_3"><div class="background"></div><div class="dot"></div></div>
			</div>
		</div> 


		<!-- Header -->

		<div class="header" id="header">
			<div class="logo center_horizontal">Analytics</div>
			<div class="menubutton" id="show_menu">Menu</div>
		</div> 


		<!-- Menu -->

		<div class="menu" id="menu">
			<div class="scroll center_vertical">
				<?php include("app/resource/php/menu.php"); ?>
			</div>
		</div>

 
		<!-- Core and App JS Files -->
 
		<script>var application_url = "<?php echo $application_url; ?>";</script>
		<?php foreach (glob("app/resource/script/*.js") as $file) { echo "<script src=\"" . $application_url . "/" . $file . "?version=" . date('YmdHis') . "\" type=\"text/javascript\"></script>"; } ?>	

		
	</body>
</html>


<?php ob_end_flush(); $database = null; ?>