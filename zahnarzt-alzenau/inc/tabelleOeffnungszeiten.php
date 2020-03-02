<div style="overflow-x:auto;">
								
									
									
									<table>
									
									
									
										<?php 
											$array =  array('Mo','Di','Mi','Do','Fr');
											$i =0;
											while ($i <5){

											     echo"<tr><td>";
												 echo lang($array[$i]);
												echo"</td><td>";
												 echo lang($array[$i].'1');
												echo"</td><td>";
												 echo lang('und');
												echo"</td><td>";
												 echo lang($array[$i].'2');
												echo"</td><td>";
												 echo lang('Uhr');
												echo"</td><td>";
												 echo"</td></tr>";
											

											$i = $i+1;	
											}

										?>
										
									
									
							
								</table>
								</div>