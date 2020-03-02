
					

	

				<?php

			if(!($_COOKIE['datenschutz'] === "yes")) {

				$cookieText = 
				"<div id=\"cookiedingsbums\">
					<div id=\"cookiedingsbums_vintage\">
						<div>
							<div id=\"cookieinhalt\">
								<span><b>". lang('CookieUeber') ."</b> <br></span> 
										 ".lang('CookieText')."	<a  class=\"btn btn-outline-primary btn-xs\"  href=\"impressum.php\">".lang('CookieInfo')."
								</a>
								<a class=\"btn btn-outline-primary btn-xs\" href=\"./cookie.php?cookie=true\">
									".lang('CookieClose')." </a>
							</div>
							<a href=\"./cookie.php?cookie=true\" <span id=\"cookiedingsbumsCloser\">&#10006;</span></a>
						</div>
					</div>
				</div>
						";
					
						} else {

					}
				?>

		
           


				<?php echo $cookieText; ?>
           
              <footer class="background-primary text-center py-4">
                <div class="container">
                    <div class="row align-items-center" style="opacity: 0.85;">
                        <div class="col-sm-3 fs--1 text-sm-left">
                           <a class="color-white" href="impressum.php" target="_blank">
                                <?php echo lang('FooterL');?>  
                            </a>
                        </div>
                        <div class="col-sm-6 mt-3 mt-sm-0">
                            <p class="color-white lh-4 fs--1 mb-0 fw-600"> <?php echo lang('FooterM');?> </p>
                        </div>
                        <div class="col text-sm-right mt-3 fs--1 mt-sm-0">
                            <a class="color-white" href="https://debus-software.de/" target="_blank">  <?php echo lang('FooterR');?> </a>
                        </div>
                    </div>
                    <!--/.row-->
                </div>
                <!--/.container-->
            </footer>
        </main>
        <!--  -->
        <!--    JavaScripts-->

<!--<script>

	

var readValue = sessionStorage['myvariable'];
console.log(readValue);
	if (readValue != "C"){
console.log(readValue);
 if(document.cookie.indexOf('hidecookiedingsbums=1') != -1){
	 
 jQuery('#cookiedingsbums').hide();
 }
 else{
 jQuery('#cookiedingsbums').prependTo('body');
 jQuery('#cookiedingsbumsCloser').show();
 }
	}
	
var myVariable = "C";
sessionStorage['myvariable'] = myVariable;
</script>-->
	
		
        <!--    =============================================-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="assets/lib/jquery/dist/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/lib/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="assets/lib/gsap/src/minified/TweenMax.min.js"></script>
        <script src="assets/lib/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>
        <script src="assets/lib/CustomEase.min.js"></script>
        <script src="assets/js/config.js"></script>
        <script src="assets/js/zanimation.js"></script>
        <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
        <script src="assets/lib/remodal/dist/remodal.js"></script>
        <script src="assets/lib/lightbox2/dist/js/lightbox.js"></script>
        <script src="assets/lib/flexslider/jquery.flexslider-min.js"></script>
        <script src="assets/js/core.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>