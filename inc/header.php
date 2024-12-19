<?php


//$subVerzeichnis =  "../zahnarzt-alzenau/behandlungen-zahnartz-alzenau/";	


	
	$Mo = lang('MoHeader');
	$Di = lang('DiHeader');
	$Mi = lang('MiHeader');
	$Do = lang('DoHeader');
	$Fr = lang('FrHeader');
	$Sa = lang('WEHeader');
	$So = lang('WEHeader');

$date = date("Y/m/d");
$nameOfDay = date('l', strtotime($date)); //L für komplett ausgeschriebenen Tag

switch ($nameOfDay) {
		
    case "Monday":
        $offenBis = $Mo;
        break;
    case "Tuesday":
        $offenBis = $Di;
        break;
    case "Wednesday":
       $offenBis = $Mi;
        break;
	case "Thursday":
       $offenBis = $Do;
        break;
    case "Friday":
       $offenBis = $Fr;
        break;
	case "Saturday":
       $offenBis = $Sa;
        break;
    case "Sunday":
       $offenBis = $So;
        break;
		
}




?>

<body data-spy="scroll" data-target=".inner-link" data-offset="60">
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N533B22"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <main>
        <div class="loading" id="preloader">
            <div class="loader h-100 d-flex align-items-center justify-content-center">
                <img src="./assets/bilder/webbilder/zahn.gif" width="5%">
				<!--<div class="line-scale">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>-->
            </div>
        </div>
        <header class="background-primary py-2 d-none d-sm-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-auto d-none d-lg-block">
                        <span class="fa fa-map-marker color-warning fw-800 icon-position-fix"></span>
                        <p class="ml-2 mb-0 fs--1 d-inline color-white fw-700">
							<?php 
								echo lang('Strasse'); 
								echo " , ";
								echo lang('PLZ');
								echo " ";
								echo lang('Ort');
							?>
						</p>
                    </div>
                    <div class="col-auto ml-md-auto order-md-2 d-none d-sm-block">
                        <span class="fa fa-clock-o color-warning fw-800 icon-position-fix"></span>
                        <p class="ml-2 mb-0 fs--1 d-inline color-white fw-700"> <?php  echo $offenBis; ?></p>
                    </div>
                    <div class="col-auto">
                        <span class="fa fa-phone color-warning fw-800 icon-position-fix"></span>
                        
						<a class="ml-2 mb-0 fs--1 d-inline  btn-outline-warning color-white fw-700" 
						   			href="tel:<?php echo lang('Telefon');?>">
							<?php 
								echo lang('TerminBtnText'); 
								echo " "; 
								echo lang('Telefon');
							?> 
						</a>
                    </div>
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </header>
        <div class="znav-white znav-container sticky-top navbar-elixir" id="znav-container">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-expand-md">
                    <a class="navbar-brand overflow-hidden pr-3" href="index.php">
                        <img src="./assets/bilder/logo.png"  title="Zahnarzt Alzenau Fuchs Zahnarztpraxis Alzenau" alt="zahnarzt fuchs Alzenau Logo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="hamburger hamburger--emphatic">
                            <div class="hamburger-box">
								
                                <div class="hamburger-inner"></div>
								
                            </div>
							
                        </div>
                    </button>
					<!-- Buttons in Mobilen Version-->
					
					<div class="navbar-toggler" aria-controls="navbarNavDropdown"  >
					<p align="right">
						<?php echo $offenBis . "&nbsp; &nbsp; &nbsp;";?>
							<a href="<?php echo lang('TelefonLink');?>"class="btn btn-icon btn-outline-primary btn-icon-left"><span class="icon-Old-Telephone"></span> <?php  echo lang('Telefon');?> </a>	</p>
					</div>
					
					
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav fs-0 fw-700">
                            <li>
                                <a href="index.php"><?php echo lang('IndexMenu');?></a>
                            </li>
                            <li>
                               <a href="praxis.php"><?php echo lang('PraxisMenu');?></a>
                            </li>
                            <li>
                                <a href="behandlung.php"><?php echo lang('BehandlungMenu');?></a>
                             <?php /*  <div class="fs--1 megamenu" class="my_mega">  
                                    <div class="row">
                                        <div class="col-lg-2" align="center">
                                           <a href="./behandlung.php" class="mb-none">
											  
											   
											   <img class="optionalstuff" align="center" src="https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_fuchs-1600x1600.png" width="100%"alt="">
											   <!--<div id="HeaderBild"></div>
-->
												
											</a> <a class="fs-0" href="./behandlung.php" ><?php echo lang('BehandlungMenuUebersicht');?> </a>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="icon_list">
                                                <ul class="fs-0">
                                                    <li><span class="icon-Tooth"></span> <a href="<?php echo "aestetische-zahnheilkunde.php";?>" ><?php echo lang('AEZMenu');?> </a></li>
                                                    <li><span class="icon-Tooth"></span> <a href="<?php echo "prophylaxe-zahnreinigung.php";?>"><?php echo lang('PuZMenu');?></a><br></li>
                                                    <li><span class="icon-Tooth"></span> <a href="<?php echo "weisse-fuellungen.php";?>"><?php echo lang('WFMenu');?><br></a></li>
                                                    <li><span class="icon-Tooth"></span> <a href="<?php echo "parodontitis-zahnfleischentzuendung.php";?>"><?php echo lang('PuPMenu');?><br></a></li>
                                                    <li><span class="icon-Tooth"></span> <a href="<?php echo "kinderbehandlung.php";?>"><?php echo lang('KBMenu');?></a></li>
                                                </ul>
                                            </div>
                                        </div>
										

	
										
                                        <div class="col-lg-5">
                                            <div class="icon_list">
                                                <ul class="fs-0">
                                                    <li><span class="icon-Tooth"></span> <a href="<?php echo "vollkeramik.php";?>"> <?php echo lang('VKMenu');?><br></a></li>
                                                    <li><span class="icon-Tooth"></span> <a href="<?php echo "moderne-endodontie-wurzelkanalbehandlung.php";?>"><?php echo lang('MEMenu');?><br></a></li>
                                                    <li><span class="icon-Tooth"></span> <a href="<?php echo "angstpatient-lachgas-tiefschlaf-vollnarkose.php";?>"><?php echo lang('LGMenu');?></a></li>
                                                    <li><span class="icon-Tooth"></span> <a href="<?php echo "hochwertiger-zahnersatz.php";?>"><?php echo lang('HZMenu');?></a></li>
                                                    <li><span class="icon-Tooth"></span> <a href="<?php echo "implantate.php";?>"><?php echo lang('IMMenu');?></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>  */ ?>
                            </li>
                          
  

                           <!-- <li>
                                <a class="d-block" href="team.php"><?php echo lang('TeamMenu')?></a>
                            </li>
-->

                            <li>
                                <a class="d-block" href="oeffnungszeiten.php"><?php echo lang('OeffnungszeitenMenu')?></a>
                            </li>

                            <li>
                                <a class="d-block" href="neu-bei-uns.php"><?php echo lang('NeuMenu')?></a>
                            </li>

                            <li>
                                <a class="d-block" href="kontakt.php"><?php echo lang('KontaktMenu')?></a>
                            </li>
							
							<p id="y"></p>
							
							
							
					
							
							
							
							
							
							
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        
		
		

<script>
	window.onload = function(){
	
	if(screen.width < 800){
    	var x = "<img id=\"slide\"  style=\" position:absolute; left:0%; bottom:0;\" height=\"60%\"src=\"./assets/bilder/GRUPENBILD.png">";

  document.getElementById("SliderBild").innerHTML = x;
    }else{
    
   		var x = "<img id=\"slide\"  style=\" position:absolute; left:40%; bottom:0;\" height=\"400px\"src=\"./assets/bilder/GRUPENBILD.png\">";
  document.getElementById("SliderBild").innerHTML = x;
    }
  
}
</script>

		
		
		
		                         <!--Sub Menue with two Flors-->
							<!--<li>
                                <a href="JavaScript:void(0)">Muster</a>
                                <ul class="dropdown fs--1">
                                    <li>
                                        <a href="behandlung1.php">Behandlung1</a>
                                    </li>
                                    <li>
                                        <a href="behandlungo.php">Behandlung2</a>
                                    </li>
                                    <li>
                                        <a href="components-googlemap.html">Google Map</a>
                                    </li>
                                    <li>
                                        <a href="components-grid.html">Grid</a>
                                    </li>
                                    <li>
                                        <a href="JavaScript:void(0)">sub Menu 2</a>
                                        <ul class="dropdown fs--1">
                                            <li>
                                                <a href="components-layouthelpers.html">Layout Helpers</a>
                                            </li>
                                            <li>
                                                <a href="components-modal-video.html">Modal Video</a>
                                            </li>
                                            <li>
                                                <a href="components-owlcarousal.html">Owl Carousal</a>
                                            </li>
                                            <li>
                                                <a href="components-slider.html">Slider</a>
                                            </li>
                                            <li>
                                                <a href="components-typography.html">Typography</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>-->
		
			
			