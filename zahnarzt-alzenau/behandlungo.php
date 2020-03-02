











<?php
	include('./inc/head.php');
	include('./inc/header.php');
?>

	
   
				

			
		
			
            <section class="background-11">
                <div class="container">
					
					<table width="100%"> 
						<tr>
							<td style="width: 50%"><h2>Behandlung</h2></td>
							<td class="text-right" style="width: 50% ">Startseite / Behandlung</td>
						</tr>
					</table>
					
                    <div class="row">
                       
                      
                      
                       
						
						
									
			
			<?php
						
						
						
						
			$bild=array("",);
			$ueberschrift =	array("",);
			$text =	array("",);
				$i =1;		
				while ($i < 10){	
					$bildNr = "BB".$i;
					$textNr = "BT".$i;
					$ueberNr = "BU".$i;
					
					array_push($bild,lang($bildNr));
					array_push($ueberschrift,lang($ueberNr));
					array_push($text,lang($textNr));
					$i = $i +1	;
				}
			print_r($a);	
			
			/*$bild = array(
			"https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/d007-800x800-700x700-700x700.jpg",
			"https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_behandlung5-1000x666.jpg",
			"https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_füllungen-502x313.png",
			"https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/fuellungstherapie-289x289-289x180.jpg",
			"https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/behandlung4zahnarzt_fuchs_alzenau-1600x1000.jpg",
			"https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_KundeNeu-500x500.png",
			"https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_behandlung_abgeschlossen-500x500.jpg",
			"https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_Zahnersatz-500x500.jpg",
			"https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_zahnersatz-500x500.jpeg",
			"https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_behandlung3-500x500.jpg",
			);
			
			$ueberschrift =	array(
				"Tätigkeitsschwerpunkt Ästhetische Zahnheilkunde",
				"Prophylaxe / Zahnreinigung",
				"Weiße Füllungen",
				"Parodontitis (Zahnfleischentzündung)",
				"Kinderbehandlung",
				"Entspannte Behandlung (Lachgas, Tiefschlaf, Vollnarkose)",
				"Moderne Endodontie (Wurzelkanalbehandlung)",
				"Vollkeramik",
				"Hochwertiger Zahnersatz",
				"Implantate",
);

			$text =	array(
				
				"Ein schönes, strahlendes Lächeln macht jeden Menschen attraktiver. Wir sind Ihr Ansprechpartner, wenn es um gesunde, schöne Zähne geht.",
				
				"Prophylaxe – das Geheimnis gesunder Zähne: Bei der regelmäßigen  Kontrolluntersuchung  können Karies und Parodontose frühzeitig entdeckt werden. Durch Professionelle Zahnreinigung,  Politur, Fluoridierung und Tipps für gute Mundhygiene erhalten Sie die optimale Vorsorge für Ihre Zähne.",
				
				"Die meisten Patienten möchten keine Amalgamfüllungen mehr. Zum Glück stehen heute perfekte Alternativen zur Verfügung: Zahnfarbene Füllungen aus Kunststoff oder Keramik.",
				
				"Bei der Parodontitis handelt es sich um eine oft schmerzlose Entzündung von Zahnfleisch und Kieferknochen, die langfristig zum Zahnverlust führt.

Durch eine systematische Parodontalbehandlung können wir  Ihnen helfen.",
				
				"Bereits die ersten Lebensjahre sind entscheidend für ein gesundes Gebiss und gute Zähne. Wenn hier die Weichen richtig gestellt werden, können ihre Kinder ein Leben lang gesunde Zähne behalten und unangenehme Erfahrungen mit Zahnärzten vermeiden",
				
				
				"Als Angstpatient müssen Sie sich bei uns nicht rechtfertigen! Wir ermitteln im Erstgespräch gemeinsam mit Ihnen Ausmaß und Gründe ihrer Angst, um dann gezielt dagegen vorzugehen. Je nach Notwendigkeit findet eine Schmerz-ausschaltung mit Lokalanästhesie, Lachgas, Tiefschlaf oder Vollnarkose statt .
So bringen sie die Zahnbehandlung bei uns angst- und schmerzfrei hinter sich.",
				
				"zur Erhaltung stark zerstörter Zähne mit entzündetem Nerv. Durch eine Wurzelkanalbehandlung mit dichter Wurzelfüllung lässt sich in sehr vielen Fällen ein verloren geglaubter Zahn noch erhalten.",
				
				"Mit Vollkeramik lassen sich höchste ästhetische Ansprüche verwirklichen, so dass man die Kronen und Brücken kaum noch von echten Zähnen unterscheiden kann. Sie sind auch das Mittel der Wahl, sollte eine Allergie auf Metalle vorliegen.",
				
				"zu günstigen Preisen mit Möglichkeit der Ratenzahlung.",
				
				"Ob Einzelzahnlücke, große Lücke oder zahnloser Kiefer – Implantate haben viele Vorteile und stellen jeweils die hochwertige und komfortable Alternative zum konventionellen Zahnersatz dar.",
			);
			
			
			*/
						
						
						
						
				$i= 1;	// Da Erster Wert "" Ist!!	
			while ($i < count($bild)){
			
			    echo  "<div class=\"col-md-6 col-lg-4 py-0 mt-4\">
                            <div class=\"background-white pb-4 h-100 radius-secondary\">
                                <img class=\"w-100 radius-tr-secondary radius-tl-secondary\" height=\"250px\" src=\"".$bild[$i]."\" alt=\"Featured Image\" />
                                <div class=\"px-4 pt-4\" data-zanim-timeline=\"{}\" data-zanim-trigger=\"scroll\">
                                    <div class=\"overflow-hidden\">
                                        <a href=\"news.html\">
                                            <h5 data-zanim='{\"delay\":0}'>".$ueberschrift[$i]."</h5>
                                        </a>
                                    </div>
                                 
                                    <div class=\"overflow-hidden\">
                                        <p class=\"mt-3\" data-zanim='{\"delay\":0.2}'>".$text[$i]."</p>
                                    </div>
                                    <div class=\"overflow-hidden\">
                                        <div class=\"d-inline-block\" data-zanim='{\"delay\":0.3}'>
                                            <a class=\"d-flex align-items-center\" href=\"#\">Mehr Erfahren
                                                <div class=\"overflow-hidden ml-2\" data-zanim='{\"from\":{\"opacity\":0,\"x\":-30},\"to\":{\"opacity\":1,\"x\":0},\"delay\":0.8}'>
                                                    <span class=\"d-inline-block\">&xrarr;</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>";
			
			$i = $i +1;
			}
			
			?>
						
						
                        
                       
						
						
						
						   
						
						
						
						    
						
						
						    
						
						
						    
						
				
                    </div>
                    <!--/.row-->
                </div>
                <!--/.container-->
            </section>
         
<?php
include('./inc/footer.php');
?>


