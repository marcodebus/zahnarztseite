<?php 
					



?>


	<div class="row">
              
						
						 <div class="col-lg-6 px-lg-5 mt-6 mt-lg-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    
							 <img class="radius-secondary" src="
								 									<?php 
								 										include("./inc/zufallsKontaktBild.php");
																	if($bild === "./assets/bilder/webbilder/zahnarzt_fuchs_alzenau_gruppenbild.jpeg"){
								 									    echo  $bild;
																	}else{
																		echo rotate("./assets/bilder/kontaktbilder/"); 
																	}
								 									?>">
						
							 
                        </div>
						
                        
						 <div class="col-lg-6 pr-0 pr-lg-3">
                           <br><br>

								<!-<h3 class="text-center "><?php echo lang('TerminText');?></h3>
								<div style=" text-align: center;">
									<object data="./assets/bilder/icons/unterstrich.svg" type="image/svg+xml">
									 <img src="./assets/bilder/icons/blankPNG.png" />
									</object>
										<span class='icon-Telephone'></span>

									<object data="./assets/bilder/icons/unterstrich.svg" type="image/svg+xml">
										 <img src="./assets/bilder/icons/blankPNG.png" />
									</object>
									<div style="padding-top: 50px">
										
									<a class="btn btn-icon btn-outline-primary btn-icon-left " href="<?php echo lang('TelefonLink');?>">
												<span class="icon-Tooth "></span><?php echo lang('TerminBtnText');?></a>
									</div>
								</div>
							 
							 
                        </div>

						
						
                    </div>