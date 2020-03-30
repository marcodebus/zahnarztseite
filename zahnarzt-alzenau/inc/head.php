<?php
// Turn off all error reporting
error_reporting(0);



	if ($Behandlung == true){
		//include('./inc/config.php');
		include('./inc/page.php');
	}else{
		//include('./inc/config.php');
		include('./inc/page.php');
	}

	if ($Title === ""){
		$Title = lang('IndexTitle');
	}

	if ($Meta === ""){
		$Meta = lang('IndexMETADescr');
	}

	if ($Side === ""){
		$Side = lang('IndexSidebar');
	}

	if ($Ueber === ""){
		$Title = lang('IndexUeber');
	}

?>


<!DOCTYPE html>
<html lang="de">
<head  class="no-js">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <meta name="viewport" content="width=device-width, initial-scale=1">



	<!--<base href="https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau/">-->
    <!--  -->
    <!--    Document Title-->
    <!-- =============================================-->
    <link rel="alternate" hreflang="de-DE" href="zahnarzt-fuchs-alzenau.de/zahnarztalzenau"/>

	<link rel="canonical" href="https://zahn.debus-software.de/zahnarzt-alzenau">
	<!--<link rel="canonical" href="https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau">-->
<script src="https://zahnarzt-fuchs-alzenau.de/login/statistik/321%20Analytics/en/get/analytics"></script>
	<!--SEO STuff-->
	<title><?php echo $Title;?></title>
	<meta name="description" content="<?php echo $Meta;?>">
	<link rel="sitemap" type="application/xml" title="Sitemap" href="./sitemap.xml" />

	<!--Seo und Tracking Tags-->
	<?php echo lang('OpenGraph');?>
	<?php echo lang('FbPixel');?>
	<?php echo lang('TwitterCards');?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140160580-1"></script>-->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-140160580-1');
</script>


	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N533B22');</script>
<!-- End Google Tag Manager -->





	<!--Debus Software Statistik-->


	<!--    Favicons-->
    <!--    =============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicons/favicon.ico">
    <link rel="manifest" href="assets/images/favicons/manifest.json">
    <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileImage" content="assets/images/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <!--  -->
	<?php

		if ($galerie == true && $Behandlung == true){
			include('../inc/galerieCSS.php');
		}else if ($galerie == true && $Behandlung == false){
			include('./inc/galerieCSS.php');
		}else{
			echo"";
		}

	?>

	<style>


.hero-image {
  background: url(https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/revslider/the7-dental/190112-100419-DSC_0690-Pano-2.jpg) no-repeat center;
  background-size: cover;
  height: 500px;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
	bottom: 0;
  transform: translate(-50%, -50%);
  color: white;
}
</style>



    <!--  -->

    <!--    Stylesheets-->
    <!--    =============================================-->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="assets/lib/loaders.css/loaders.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:300,400,600,700,800"
        rel="stylesheet">
    <link href="assets/lib/iconsmind/iconsmind.css" rel="stylesheet">
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/lib/hamburgers/dist/hamburgers.min.css" rel="stylesheet">
    <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/remodal/dist/remodal.css" rel="stylesheet">
    <link href="assets/lib/remodal/dist/remodal-default-theme.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/lightbox2/dist/css/lightbox.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">






	<style>

	#content-desktop {display: block;}
#content-mobile {display: none;}

@media screen and (max-width: 768px) {

#content-desktop {display: none;}
#content-mobile {display: block;}

		.row {
		  display: -ms-flexbox; /* IE 10 */
		  display: flex;
		  -ms-flex-wrap: wrap; /* IE 10 */
		  flex-wrap: wrap;
		  padding: 0 4px;
		}

		/* Create two equal columns that sits next to each other */
		.column {
		  -ms-flex: 33%; /* IE 10 */
		  flex: 33%;
		  padding: 0 4px;
		}

		.column img {
		  margin-top: 8px;
		  vertical-align: middle;
		}


	</style>






		<style>
	#cookiedingsbums_vintage {
background-image: url(data:image/png;base64,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);
padding-top:42px;
background-repeat:repeat-x;
background-position:top}

#cookiedingsbums a {color:#000; text-decoration:none;}
#cookiedingsbums a:hover {text-decoration:underline;}
#cookiedingsbums #cookieinhalt {
padding:10px;
padding-top:5px;
padding-right:40px;
background-image: url(data:image/png;base64,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);
padding-bottom:25px;
}

#cookiedingsbums {
text-align:center;
position:fixed;
bottom:0px;
z-index:10000;
max-width:300px;
font-size:12px;
line-height:28px;
}

#cookiedingsbumsCloser {
color: #777;
font: 14px/100% arial, sans-serif;
position: absolute;
right: 5px;
text-decoration: none;
text-shadow: 0 1px 0 #fff;
top: 50px;
cursor:pointer;
padding:4px;
}

#cookiedingsbumsCloser:hover {
font: 18px/100% arial, sans-serif;
right:3px;
top:48px;
 position: absolute;
}




@font-face {
    font-family: kinder;
    src: url("./assets/fonts/kinder.otf") format("opentype");
}

@font-face {
    font-family: lachgas;
    src: url("./assets/fonts/BALLONEY.TTF") format("truetype");
}

img.behandlung {
  background-color:#fffff;
  border-style: solid;
  border-width: 1px 1px 1px 1px;
  border-color: #b5b5b5;
  padding:4px;

			}


	</style>

	<!--STYLE Führ Header Slider-->
	<style>


  #slide{
  position :relative;
  -webkit-animation: mymove 1s; /* Safari 4.0 - 8.0 */
  animation: mymove 1s ;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes mymove {
  from {left: 0px;}
  to {right: 200px;}
}

/* Standard syntax */
@keyframes mymove {
  from {left: 0px;}
  to {right: 200px;}
}
</style>



<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;

}
th, td {
  text-align: left;
  padding: 1px;
}


</style>

<style>
@media (max-width:629px) {
  img#optionalstuff {
    display: none;
  }
}
</style>


	<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Review",
  "itemReviewed": {
    "@type": "Thing",
    "name": "Zahnarzt Fuchs Alzenau"
  },
  "author": {
    "@type": "Person",
    "name": "Marc Schimdt"
  },
  "datePublished": "2019-05-01",
  "reviewRating": {
    "@type": "Rating",
    "description": "Zahnarzt Fuchs Alzenau Der Familienzahnarzt !",
    "ratingValue": "5"
  }
}
</script>



<?php
//if($Seite ==="index.php"): ?>

<script type="text/javascript">
$(document).ready(function() {
		console.log( "document loaded" );
});

$(window).on( "load", function() {
		console.log( "window loaded" );
});

</script>


<?php //endif ?>
</head>
