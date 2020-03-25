<?PHP
error_reporting(0);

function lang($phrase){
    static $lang = array(
		'headersliderBehandlung' => './assets/bilder/headerBehandlung.png',
		//TITLE Pages (Seo Google Title)
		'IndexTitle' => 'Zahnarzt Fuchs Alzenau -- Ihr Zahnarzt für Alzenau und Hörstein',
        'PraxisTitle' => 'Praxis Dr. Fuchs Der Zahnarzt in Alzenau und Hörstein',
		'BehandlungTitle' => 'Behandlungen bei Dr. Fuchs dem Zahnarzt für Aschaffenburg Alzenau',
			'AEZTitle' => 'Ästhetischen Zahnheilkunde in Alzenau Ihre Zahnarztpraxis Alzenau Hörstein Dr. Fuchs',
			'PuZTitle' => 'Prophylaxe und Zahnreinigung bei Dr. Fuchs in Hörstein Bei Alzenau',
			'WFTitle' => 'Weisse Füllungen in Alzenau bei Dr. Fuchs in Hörstein Ihrer Zahnarztpraxis',
			'PuPTitle' => 'Parodontitis / Parodontose in Alzenau bei Dr. Fuchs in Hörstein Ihrer Zahnarztpraxis',
			'KBTitle' => 'Zahnärztliche Kinderbehandlungen in Alzenau bei Dr. Fuchs in Hörstein Ihrer Zahnarztpraxis',
			'VKTitle' => 'Vollkeramik in Alzenau bei Dr. Fuchs in Hörstein Ihrer Zahnarztpraxis',
			'METitle' => 'Wurzelbehandlungen in Alzenau bei Dr. Fuchs in Hörstein Ihrer Zahnarztpraxis',
			'LGTitle' => 'Lachgas / Angstpatienten Vollnarkose in Alzenau bei Dr. Fuchs in Hörstein Ihrer Zahnarztpraxis',
			'HZTitle' => 'Hochwertiger Zahnersatz in Alzenau bei Dr. Fuchs in Hörstein Ihrer Zahnarztpraxis',
			'IMTitle' => 'Implante in Alzenau bei Dr. Fuchs in Hörstein Ihrer Zahnarztpraxis',
        'TeamTitle' => 'Das Team der Zahnarztpraxis Alzenau Dr. Fuchs in Hörstein Ihrer Zahnarztpraxis',
		'OeffnungszeitenTitle' => 'Die Öffnungszeiten der Zahnarztpraxis Alzenau Dr. Fuchs in Hörstein Ihrer Zahnarztpraxis',
        'NeuTitle' => 'Neu in der Zahnarztpraxis Alzenau Dr. Fuchs in Hörstein Ihrer Zahnarztpraxis?',
		'KontaktTitle' => 'Kontakt zur Zahnarztpraxis Alzenau Dr. Fuchs in Hörstein Ihrer Zahnarztpraxis',
        'ImpressumTitle' => 'Zahnarzt Alzenau Impressum Rechtliche Informationen',



		//Meta Description (Seo Beschreibung)
		'IndexMETADescr' => 'Ihr Zahnarzt in Hörstein bei Alzenau Dr. Bernhard Fuchs begrüßt Sie herzlich.  Unsere Schwerpunkte: ästhetische Zahnmedizin hochwertiger Zahnersatz.',
        'PraxisMETADescr' => 'Praxis von Zahnarzt Fuchs in Alzenau Stadtteil Hörstein. Unser Team der Zahnarztpraxis Fuchs in Alzenau Hörstein freut sich auf Sie',
		'BehandlungMETADescr' => 'Gerne verenbaren wir, das Team der Zahnarztpraxis Fuchs in Alzenau einen Termin mit ihnen, für Ästhetische Zahnheilkunde, Parodontitis oder Implantate.',
			'AEZMETADescr' => 'Aestetische Zahnheilkunde unser Tätigkeitsschwerpunkt - Zahnarzt Fuchs Alzenbau der Zahnarzt in Alzenau Hörstein',
			'PuZMETADescr' => 'Vorbeugung ist der einfachste weg.... Zahnarzt Fuchs Alzenbau der Zahnarzt in Alzenau Hörstein',
			'WFMETADescr' => 'Weisse Füllungen von Zahnarzt Fuchs Alzenbau der Zahnarzt in Alzenau Hörstein',
			'PuPMETADescr' => 'Zahnreinigung bei Zahnarzt Fuchs Alzenbau der Zahnarzt in Alzenau Hörstein',
			'KBMETADescr' => 'Kinderbehandlung Zahnarzt Fuchs Alzenbau der Zahnarzt in Alzenau Hörstein',
			'VKMETADescr' => 'Vollkeramik von Zahnarzt Fuchs Alzenbau der Zahnarzt in Alzenau Hörstein',
			'MEMETADescr' => 'Wurzelbehandlung Zahnarzt Fuchs Alzenbau der Zahnarzt in Alzenau Hörstein',
			'LGMETADescr' => 'Lachgas Angstpatienten Vollnarkose bei Zahnarzt Fuchs Alzenbau der Zahnarzt in Alzenau Hörstein',
			'HZMETADescr' => 'Hochwertiger Zahnersatz von Zahnarzt Fuchs Alzenbau der Zahnarzt in Alzenau Hörstein',
			'IMMETADescr' => 'Implantate Zahnarzt Fuchs Alzenbau der Zahnarzt in Alzenau Hörstein',
        'TeamMETADescr' => 'Team Zahnarzt Fuchs Alzenbau der Zahnarzt in Alzenau Hörstein',
		'OeffnungszeitenMETADescr' => 'Öffnungszeiten Zahnarzt Fuchs Alzenbau der Zahnarzt in Alzenau Hörstein',
        'NeuMETADescr' => 'Neu bei Zahnarzt Fuchs Alzenbau der Zahnarzt in Alzenau Hörstein',
		'KontaktMETADescr' => 'Kontakt Zahnarzt Fuchs Alzenbau der Zahnarzt in Alzenau Hörstein',
        'ImpressumMETADescr' => 'Zahnarzt Alzenau Impressum Rechtliche Informationen',




		//Seiten Ueberschrift
		'IndexUeber' => 'Zahnarztpraxis Alzenau Herzlich Willkommen',
        'PraxisUeber' => 'Praxis',
		'BehandlungUeber' => 'Behandlung',
			'AEZUeber' => 'Tätigkeitschwerpunkt Ästhetische Zahnheilkunde',
			'PuZUeber' => 'Prophylaxe und Zahnreinigung',
			'WFUeber' => '',
			'PuPUeber' => 'Parodontose-Behandlung',
			'KBUeber' => '',
			'VKUeber' => '',
			'MEUeber' => 'Moderne Endodontie <br>(Wurzelkanalbehandlung)',
			'LGUeber' => 'Entspannte Behandlung <br>(Lachgas, Tiefschlaf, Vollnarkose)',
			'HZUeber' => 'Hochwertiger Zahnersatz <br>zu günstigen Preisen<br>mit Möglichkeit der Ratenzahlung',
			'IMUeber' => 'Implantate',
        'TeamUeber' => 'Unser Team',
		'OeffnungszeitenUeber' => 'Öffnungszeiten',
        'NeuUeber' => 'Neu bei uns?',
		'KontaktUeber' => 'Kontakt',
        'ImpressumUeber' => 'Rechtliche Informationen',


		//Seiten Menu (Header Bar)
		'IndexMenu' => 'Start',
        'PraxisMenu' => 'Praxis',
		'BehandlungMenu' => 'Behandlung',
			'BehandlungMenuUebersicht' => 'Zur Übersicht',
			'AEZMenu' => 'Tätigkeitsschwerpunkt <br>Ästhetische Zahnheilkunde',
			'PuZMenu' => 'Prophylaxe und Zahnreinigung',
			'WFMenu' => 'Weisse Füllungen',
			'PuPMenu' => 'Parodontitis-Behandlung',
			'KBMenu' => 'Kinderbehandlung',
			'VKMenu' => 'Vollkeramik',
			'MEMenu' => 'Moderne Endodontie <br>(Wurzelkanalbehandlung)',
			'LGMenu' => 'Entspannte Behandlung <br>(Lachgas, Tiefschlaf, Vollnarkose)',
			'HZMenu' => 'Hochwertiger Zahnersatz ',
			'IMMenu' => 'Implantate',
        'TeamMenu' => 'Unser Team',
		'OeffnungszeitenMenu' => 'Öffnungszeiten',
        'NeuMenu' => 'Neu bei uns?',
		'KontaktMenu' => 'Kontakt',
        'ImpressumMenu' => 'Rechtliche Informationen',


		//Seiten SideTable (verzeichnis tiefe Mit verlinkungen)
		'IndexSidebar' => '',
        'PraxisSidebare' => '',
		'BehandlungSidebar' => '',
			'AEZSidebar' => '',
			'PuZSidebar' => '',
			'WFSidebar' => '',
			'PuPSidebar' => '',
			'KBSidebar' => '',
			'VKSidebar' => '',
			'MESidebar' => '',
			'LGSidebar' => '',
			'HZSidebar' => '',
			'IMSidebar' => '',
        'TeamSidebar' => '',
		'OeffnungszeitenSidebar' => '',
        'NeuSidebar' => '',
		'KontaktSidebar' => '',
        'ImpressumSidebar' => '',




		//Open Graph Protocoll


		'OpenGraph' => '


		<meta property="og:url" content="https://zahnarzt-fuchs-alzenau.de" /><head prefix=\"my_namespace: zahnarzt-fuchs-alzenau.de"><meta property="og:type" content="my_namespace:website" /><meta property="og:title" content="Zahnarzt Fuchs in Alzenau bei Aschaffenburg Ihr Zahnarzt für die Region" /><meta property="og:description" content="Zahnarztpraxis Dr. Bernhard Fuchs. in Alzenau- Hörstein. Hier können Sie sich über unsere Praxis, unser Behandlungsspektrum und unsere Schwerpunkte " /><meta property="og:image" content="https://zahnarzt-fuchs-alzenau.de/zahnarzt-fuchs/assets/images/favicons/apple-touch-icon.png" />',





		//Facebook Pixel
		'FbPixel' => '
		<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=\'2.0\';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,\'script\',
  \'https://connect.facebook.net/en_US/fbevents.js\');
  fbq(\'init\', \'645550865856819\');
  fbq(\'track\', \'PageView\');
</script>
<noscript><img height=\"1\" width=\"1\" style=\"display:none\"
  src=\"https://www.facebook.com/tr?id=645550865856819&ev=PageView&noscript=1\"
/></noscript>
<!-- End Facebook Pixel Code -->

',

		//Twitter Cards
		'TwitterCards' => '<meta name=\"twitter:card\" content=\"summary\">
<meta name=\"twitter:site\" content=\"@zahnarztfuchs\">
<meta name=\"twitter:title\" content=\"ZahnarztFuchs Alzenau\">
<meta name=\"twitter:description\" content=\"Ihr Zahnarzt für Alzenau\">',




		//Kontakt Daten
		'Kontakt'=> 'Kontakt',
        'Name' => 'Zahnarzt Dr. Bernhard Fuchs',
		'Telefon' => 'Telefon 06023 31433',
		'TelefonLink' => 'tel:0602331433',
        'Fax' => 'Telefax 06023 - 31866',
		'Email' => '<a title=”Zahnarzt Alzenau Dr. Bernhard Fuchs Email” href="mailto:info@zahnarztalzenau.com">info@zahnarztalzenau.com</small></a>',

		//Adresse
		'Strasse' => 'Roter Rain 9,  ',
        'PLZ' => '63755',
		'Ort' => 'Alzenau',

		//Oeffnungszeiten
		'Open' => 'Öffnungszeiten',
		'und' => ' und ',
        'Uhr' => ' Uhr',
		'Mo' => 'Montag ',
        'Mo1' => '8:00 – 13:00',
		'Mo2' => '14:00 – 18:00',
		'Di' => 'Dienstag ',
		'Di1' => '8:00 – 13:00',
		'Di2' => '14:00 – 18:00',
		'Mi' => 'Mittwoch ',
        'Mi1' => '7:30 – 13:30',
		'Mi2' => '',
		'Do' => 'Donnerstag ',
		'Do1' => '9:00 – 14:00',
		'Do2' => '15:00 – 19:00 ',
		'Fr' => 'Freitag ',
		'Fr1' => '8:00 – 14:00',
		'Fr2' => '',

		'MoHeader' => 'Heute geöffnet bis <b>18:00 Uhr</b>',
		'DiHeader' => 'Heute geöffnet bis <b>18:00 Uhr</b>',
		'MiHeader' => 'Heute geöffnet bis <b>13:30 Uhr</b>',
		'DoHeader' => 'Heute geöffnet bis <b>19:00 Uhr</b>',
		'FrHeader' => 'Heute geöffnet bis <b>14:00 Uhr</b> ',
		'WEHeader' => 'Heute Geschlossen',


		// 8 Gruende
		'8GUeber' => '8 Gründe für unsere Praxis in Alzenau Hörstein',

        '1Ueber8Gr' => 'Sanfte und angstfreie Zahnheilkunde:',
		'1Text8Gr' => 'Seit über 20 Jahren behandeln wir Angstpatienten. Wenn auch Sie Angst vor der Zahnbehandlung haben, können wir Ihnen helfen.',
        '1Bild8Gr' => '',

		'2Ueber8Gr' => 'Sanfte und angstfreie Zahnheilkunde:',
		'2Text8Gr' => 'Seit über 20 Jahren behandeln wir Angstpatienten. Wenn auch Sie Angst vor der Zahnbehandlung haben, können wir Ihnen helfen.',
        '2Bild8Gr' => '',

		'3Ueber8Gr' => 'Sanfte und angstfreie Zahnheilkunde:',
		'3Text8Gr' => 'Seit über 20 Jahren behandeln wir Angstpatienten. Wenn auch Sie Angst vor der Zahnbehandlung haben, können wir Ihnen helfen.',
        '3Bild8Gr' => '',


		'4Ueber8Gr' => 'Sanfte und angstfreie Zahnheilkunde:',
		'4Text8Gr' => 'Seit über 20 Jahren behandeln wir Angstpatienten. Wenn auch Sie Angst vor der Zahnbehandlung haben, können wir Ihnen helfen.',
        '4Bild8Gr' => '',


		'4Ueber8Gr' => 'Sanfte und angstfreie Zahnheilkunde:',
		'4Text8Gr' => 'Seit über 20 Jahren behandeln wir Angstpatienten. Wenn auch Sie Angst vor der Zahnbehandlung haben, können wir Ihnen helfen.',
        '4Bild8Gr' => '',


		'5Ueber8Gr' => 'Sanfte und angstfreie Zahnheilkunde:',
		'5Text8Gr' => 'Seit über 20 Jahren behandeln wir Angstpatienten. Wenn auch Sie Angst vor der Zahnbehandlung haben, können wir Ihnen helfen.',
        '5Bild8Gr' => '',


		'6Ueber8Gr' => 'Sanfte und angstfreie Zahnheilkunde:',
		'6Text8Gr' => 'Seit über 20 Jahren behandeln wir Angstpatienten. Wenn auch Sie Angst vor der Zahnbehandlung haben, können wir Ihnen helfen.',
        '6Bild8Gr' => '',


		'7Ueber8Gr' => 'Sanfte und angstfreie Zahnheilkunde:',
		'7Text8Gr' => 'Seit über 20 Jahren behandeln wir Angstpatienten. Wenn auch Sie Angst vor der Zahnbehandlung haben, können wir Ihnen helfen.',
        '7Bild8Gr' => '',

		'8Ueber8Gr' => 'Sanfte und angstfreie Zahnheilkunde:',
		'8Text8Gr' => 'Seit über 20 Jahren behandeln wir Angstpatienten. Wenn auch Sie Angst vor der Zahnbehandlung haben, können wir Ihnen helfen.',
        '8Bild8Gr' => '',




		//Blauer Balken Startseite
		'BlauerBalkenStartZ1' => 'Rufen Sie uns an. Wir beraten Sie gerne!',
        'BlauerBalkenStartZ2' => 'Telefon 06023 31433',
		'BlauerBalkenStartBild' => './assets/bilder/icons/telefonRund.png',

		//Jetzt Termin Vereinbaren
        'TerminText' => '<h3>Jetzt Termin vereinbaren! <br> Gerne nehmen wir Ihren Anruf entgegen.</h3>',
		'TerminBtnText' => 'jetzt anrufen',


		//Footer Zeile
        'FooterL' => 'Rechtliche Infos',
		'FooterR' => '&copy; 2019 Zahnarzt Dr. Fuchs Alzenau',
        'FooterM' => 'Praxis für sanfte Zahnheilkunde, Ästhetik und Implantologie',


		//Cookie Mitteilung
		'CookieUeber' => 'Cookies auf Rezept',
        'CookieText' => 'Durch die weitere Nutzung der Seite stimmst du der Verwendung von Cookies zu.',
		'CookieInfo' => 'Weitere Infos',
        'CookieClose' => 'Schließen',





        //<p>auf den Seiten der<br><b>
        //            Zahnarztpraxis Dr. Bernhard Fuchs</b><br>
        //            in Alzenau- Hörstein.<br><br>
		//Startseite Index
		'IndexUeber1' => 'Herzlich Willkommen<small><br>auf den Seiten der <b>Zahnarztpraxis Dr. Bernhard Fuchs</b> in Alzenau- Hörstein.</small>',
		'IndexText1' => '
								<br><br>Hier können Sie sich über unsere Praxis, unser Behandlungsspektrum und unsere Schwerpunkte informieren.<br>
								Und natürlich über uns!<br><br>
								Schließlich ist die Entscheidung für einen Zahnarzt eine Frage des Vertrauens.<br>
								In unserer Praxis werden Sie von einem erfahrenen Zahnarzt und freundlichen, hilfsbereiten Mitarbeiterinnen kompetent betreut. Die Wünsche unserer Patienten liegen dem gesamten Team am Herzen, denn:<br><br>
                				<h2><small><strong>WIR LIEBEN IHR LÄCHELN!</strong> </small></h2><br>
               					<br><br></p>



						<div class="col-lg-12 px-5 py-6 my-lg-0
							 .color-9" style="background-color:#4590e7; border-radius:20px; ">

					   		<p align="center" style="color:white;">
						   		<b>Von der Prophylaxe bis zur Implantatprothetik bieten wir Ihnen das gesamte Spektrum der modernen Zahnheilkunde in unserer Praxis in Alzenau an.</b></p>
						</div>

								',

        'begruesungsbild' => 'https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau/assets/bilder/kontaktbilder//zahnarzt_fuchs_alzenau_fuchs-1000x1030-1.png',


		//Praxis
		'PraxisUeber1' => 'Praxis <small class="fs-0"><br>Zahnarzt Dr. Fuchs Alzenau</small>',
		'PraxisUeber2' => '',
		'PraxisGalerieUeber' => 'Praxis - Fotos<small class="fs-1"><br>Zahnarzt Alzenau</small>',
		'PraxisGalerieOrdner' => '',
        'PraxisText1' => 'Unsere Zahnarztpraxis in Alzenau-Hörstein besteht seit 1992. Wir decken alle Bereiche der modernen Zahnmedizin ab. Unser Tätigkeitsschwerpunkt liegt in 						  der Ästhetischen Zahnheilkunde. Wir legen stets höchsten Wert auf eine gute Beratung ,eine ruhige Atmosphäre und eine herzliche, zuvorkommende Behandlung
                                 unserer Patienten mit möglichst kurzen Wartezeiten. Regelmäßige Fortbildungen sind für das Praxispersonal ihrer Zahnarztpraxis Alzenau selbstverständlich.
	   					 <br><br></p>
						 <div class="col-lg-12 px-5 py-6 my-lg-0 radius-tr-lg-secondary  .color-9" style="background-color:#4590e7; border-radius:20px; ">

					   <p align="center" style="color:white;">
						   <b>Falls Sie große Angst vor der Zahnbehandlung haben, können wir Ihnen helfen. Seit über 20 Jahren haben wir Erfahrung in der Behandlung von Angstpatienten.</strong></p>
						</div>



						',

		'LinkunterTextPraxis' => 'Weitere Infos für Angstpatienten',
        'BildPraxis' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/190112-101138-DSC_0718-2000x1400.jpg',

		//Team //(1 ist Oben In mitte Geschaeftsleituing)
		'TeamUUeber1' => '',
		'TeamBildKopf' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_gruppenbild-2000x1126.jpeg',
		'TeamBildAn1' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_fuchs-1600x1600.png',
        'TeamBildAn2' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_rauch-1600x1600.png',
		'TeamBildAn3' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_jaxt-1600x1600.png',
        'TeamBildAn4' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_arzu-1600x1600.png',
        'TeamMitgliedUeber1' => 'Dr. med. dent. Bernhard Fuchs',
		'TeamMitgliedUeber2' => 'Erika Rauch <br>&nbsp;',
        'TeamMitgliedUeber3' => 'Anja Jaxt',
		'TeamMitgliedUeber4' => 'Arzu Kalyoncuoglu<br>&nbsp;',
        'TeamMitgliedUUeber1' => 'Mehr als 25 Jahre Berufserfahrung als Zahnarzt',
		'TeamMitgliedUUeber2' => 'Empfang, Verwaltung, Abrechnung',
        'TeamMitgliedUUeber3' => 'Behandlungsassistenz',
		'TeamMitgliedUUeber4' => 'Behandlungsassistenz',
		'TeamMitgliedText1' => '<ul data-zanim=\'{"delay":0.1}\'>
										<li>Tätigkeitsschwerpunkt Ästhetische Zahnheilkunde</li>
										<li>Curriculum Implantologie</li>
										<li>Curriculum Zahnärztliche Hypnose </li>
								</ul>',
		'TeamMitgliedText2' => 'Frau Rauch ist seit 25 Jahren in unserer Praxis tätig <br><br>Sie steht Ihnen in allen organisatorischen Dingen kompetent mit Rat und Tat zur Seite.<br><br>',
        'TeamMitgliedText3' => 'Sie ist unsere Prophylaxefee <br>Frau Jaxt hat langjährige Erfahrung in der Behandlungsassistenz, im Labor sowie vor allem auch in der Prophylaxe. 								   Durch ihre mitfühlende und ausgleichende Art ist sie bei unseren Patienten äußerst beliebt.',
		'TeamMitgliedText4' => 'Frau Kalyoncuoglu hat ihre Ausbildung bei uns absolviert und begleitet Sie sanft durch die Behandlung. Überzeugt durch ihre fröhliche, gewinnende 								  Art und ihren herzlichen Umgang mit den Patienten.<br><br>',





		//Bildergalerie
        'GalerieUeber' => 'Unser Team bei der Arbeit',
		'GaleriePfad' => '',



		//Oeffnungszeiten Seite
		'OeffnungszeitenBild' => 'https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau/assets/bilder/webbilder/daumenHoch.jpg',
        'OeffnungszeitenSubUeber' => 'Ab sofort bieten wir Ihnen eine Früh- und Abendsprechstunde an:',
		'OeffnungszeitenText' => '
					Bitte beachten Sie, dass wir donnerstags erst ab 10:00 Uhr erreichbar sind!',
		'NotdienstText' => 'Die aktuelle Ansage zum Zahnärztlichen Notdienst erhalten Sie unter der Telefonnummer: <a title=”Telefon Nr. Zahnarztpraxis Alzenau” href="tel:0602180700">06021 80700</a> oder besuchen Sie die Webseite des Zahnärztlichen Notdienstes. Auf dieser müssen Sie Ihre Postleitzahl eintragen und erhalten sofortige Hilfe. <br><br> <a title=”Weitere Infos Zahnarzt Alzenau Dr. Fuchs” href="https://www.notdienst-zahn.de">Weiter zum Notdienst</a>',



		//Oeffnungszeiten
		'NeupatientenUeber' => ' ',
		'NeupatientenUUeber' => ' ',
        'NeupatientenText' => 'Gesunde und schöne Zähne bedeuten Lebensqualität. Darum ist die Wahl des richtigen Zahnarztes so wichtig. <br><br>Auch wir wissen, dass 								   niemand gerne zum Zahnarzt geht. Deshalb wollen wir Ihnen den Besuch bei uns so angenehm wie möglich gestalten. In ruhiger Atmosphäre ohne 									  Hektik und Stress. Wir nehmen uns für Sie Zeit. <br><br>




		<a title=”Anamnesebogen Zahnarzt Alzenau Dr. Fuchs” href="./assets/bilder/downloads/Anamnesebogen.pdf">
		<div class="col-lg-12 px-5 py-6 my-lg-0 .color-9" style="background-color:#4590e7; border-radius:20px; ">

					   <p align="center" style="color:white;">
						   <b>Sie wollen zum ersten Mal zu uns in die Praxis kommen? Darüber freuen wir uns. Wir haben für Sie eine Checkliste mit den nötigen Unterlagen für ihren Erstbesuch vorbereitet :</b></p><b>
						</b></div></a>


						',
		//Neupatienten
		'NeupatientenDownloadUeber' => 'Dokumente zum Download',
        'NeupatientenDownloadUUeber1' => 'Anmelde&shy;bogen',
		'NeupatientenDownloadUText1' => 'Den Anmeldebogen können Sie ausdrucken, bequem zu Hause ausfüllen und in die Praxis mitbringen. Vielen Dank!',
        'NeupatientenDownloadUUeber2' => 'Checkliste für Neu&shy;patienten',
        'NeupatientenDownloadUText2' => 'Um Ihnen die Vorbereitung auf ihren ersten Zahnarztbesuch so einfach wie möglich zu machen, haben wir eine Checkliste vorbereitet.
											<br>Bitte schauen Sie sich diese an und nehmen Sie die Unterlagen mit in die Praxis ,soweit das für Sie zutrifft.',

		'NeupatientenChecklistePfad' => './assets/bilder/downloads/Checkliste.pdf',
        'NeupatientenAnmeldebogenPfad' => './assets/bilder/downloads/Anamnesebogen.pdf',
		'NeupatientenBild' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_empfang1-1000x666.jpg',
		'Download' => 'Laden',

		'BlauerBalkenPraxisUeber' => 'Neupatienten',
		'BlauerBalkenPraxisBild' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_empfang1-1200x1200.jpg',
		'BlauerBalkenPraxisText' => 'Sie sind neu bei uns? Wir heissen Sie herzlich willkommen. <br> Zur 											 besseren Orientierung haben wir für Sie hier ein paar Informationen zusammengestellt:
									 <br><br><a title=”Zahnarzt Fuchs Neupatienten Alzenau” href="./neupatienten.php"> Informationen für Neupatienten</a>',



		//Kontakt Seite
		'KontaktUUeber' =>'Karte',
		'KontaktBildObenMittig' => './assets/bilder/webbilder/rauchtelefon.jpg',
        'KontaktBildUntenRund' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/02/kopfplatz-388x399.png',
		'IframeGoogle' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d163640.2576121474!2d8.792915618074197!3d50.14469492572567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bd3eb603c73a45%3A0x2569a9e05cd087e!2sZahnarzt+Alzenau+Dr.+med.+dent.+Bernhard+Fuchs!5e0!3m2!1sde!2sde!4v1557487328158!5m2!1sde!2sde"  width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',

		//Unterseiten Behandlungen




		///Aestetische ZHK
        'AZUeber' => '',
		'AZText' => '    <p>Wir sind in der Lage, Farbe und Form ihrer Zähne optisch perfekt zu korrigieren. Für ein strahlendes Lächeln. Dank langjähriger Erfahrung in der Ästhetischen Zahnmedizin können Sie sich auf uns verlassen. Wir beraten Sie gerne über alle Möglichkeiten der Ästhetischen Zahnheilkunde.<br><br>Von professioneller Zahnreinigung über Bleaching, weiße Füllungen und Keramikkronen bis hin zu Zahnersatz und Implantaten bieten wir Ihnen die gesamte Bandbreite der zahnärztlichen Ästhetik. ',



  'AZText2' => '     Hier eine kurze Übersicht unserer Leistungen im Bereich der Ästhetischen Zahnheilkunde:<br>	</p>
					   <ol>
								<li>Professionelle Zahnreinigung</li>

								<li>Bleaching (Bleichen der Zähne)</li>

								<li>Kosmetische Konturierung (Formung) Ihrer Zähne</li>

								<li>Zahnfarbene Füllungen</li>


								<li>Vollkeramik-Restaurationen (Inlays, Kronen und Brücken)</li>

								<li>Implantate</li>

								<li>Voll individualisierte, natürlich aussehende Teil- und Totalprothesen</li>
						</ol>


									',


				'AZBlockquote' => 'Wir sind Experten für schöne Zähne!',
				'AZBild1' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/d007-800x800-700x700-700x700.jpg',
				'AZBild2' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_gruppenbild-1000x562.jpeg',


		//Lachgas
        'LGUeber1' => 'Lachgas- Behandlung',
		'LGText' => ' <p>Über eine kleine Nasenmaske atmen Sie ein Gemisch aus Sauerstoff und Lachgas ein. Es wird Ihnen helfen, bei der Zahnbehandlung zu entspannen und reduziert Angstgefühle.<br>In diesem Entspannungszustand sind Sie jederzeit voll ansprechbar und Herr Ihrer Sinne. Gleichzeitig nimmt mit der Angst auch die Schmerzempfindlichkeit stark ab.<br>Die Wirkung ist nach der Behandlung innerhalb von 5 Minuten komplett aufgehoben.<br><br>Sie können die Praxis ohne Begleitperson verlassen.</p>',

		'LGUeber2' => 'Tiefschlaf <br>',
		'LGBild1' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/himmel-1200x800.jpg',
		'LGUeber3' =>'Tiefschlaf <br>',
        'LGText2' => '<p>(Analgosedierung, Dämmerschlaf):Medikamentöse Schmerzausschaltung bei gleichzeitiger Beruhigung und 						  Dämpfung des Bewusstseins. Im Gegensatz zur Vollnarkose atmet der Patient selbst und reagiert (schwach) auf 						äußere Reize.</p>',
		'LGUeber3' => 'Vollnarkose',
        'LGText3' => ' <p>	Bei der Vollnarkose werden Bewusstsein und Schmerzempfindung des Patienten völlig ausgeschaltet , um  optimale Voraussetzungen für therapeutische Eingriffe zu schaffen. <br>Für Vollnarkose und Tiefschlaf kommen Narkoseärzte(Anästhesisten) zu uns in die Praxis, die Sie im Zweierteam während der gesamten Zeit betreuen und überwachen. Anschließend bleiben sie noch bei uns, bis sie sich wieder fit fühlen und werden dann von Ihrer Begleitperson nach Hause gebracht.</p>',

	'LGBild2' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/lachgas-1600x1000.jpg',
	'LGBlau' => '<b>In unserer Praxis werden nicht nur chirurgische Eingriffe in Vollnarkose durchgeführt.</b><br><br> Auch zahnerhaltende Maßnahmen, wie Füllungstherapie oder Wurzelkanalbehandlungen und Versorgungen mit Kronen und Zahnersatz können in Vollnarkose bei uns erfolgen. <br><br><strong>Darin haben wir Erfahrung seit 1997.</strong>',




		//Zahnersatz
		'ZEUeber1' => '<br>(1) Hochwertiger Zahnersatz',
		'ZEUeber2' => '<br>(2) Preisgünstiger Zahnersatz',
    'ZEUeber3' => '<br>(3) Bequeme Ratenzahlung',
        'ZEtext1' =>
			   ' <p>Wenn Füllungen und Kronen zur Wiederherstellung des Kauorgans nicht mehr ausreichen, weil schon zu viele Zähne 				   fehlen, dann müssen die Lücken durch einen Zahnersatz geschlossen werden. Wir finden die für Sie passende Lösung.
				<br>
				Durch Zahnersatz lassen sich unvorteilhafte und ungesunde Zahnlücken wieder schließen. Ein guter Zahnersatz 					verbessert die Kaufunktion, die Gesundheit und das optische Erscheinungsbild. Wir erklären Ihnen ausführlich, was 				  in Ihrem Fall sinnvoll ist – etwa eine herausnehmbare Versorgung, etwa mit Geschiebetechnik oder Teleskopkronen, 					oder ein fest eingebauter Zahnersatz auf Implantaten.',
		'ZEtext2' => ' <p>Unser Zahnersatz wird im Meister-Labor Stefan Bauer in Aschaffenburg hergestellt. <br><br>Es besteht aber 						auch die Möglichkeit einer kostengünstigen Fertigung im Ausland . Dadurch können wir Ihnen gute Qualität zu 						einem günstigen Preis anbieten . Die von uns ausgewählten Labors erfüllen höchste Qualitätsansprüche und 						 sind vom deutschen TÜV zertifiziert . Alle verwendeten Materialien sind in Deutschland zugelassen und CE-							zertifiziert. </p>',
    	'ZEtext3' => 'Zusammen mit unserer Abrechnungsgesellschaft bieten wir ihnen die Möglichkeit ihre Zahnersatz -Rechnung in bequemen Raten zu bezahlen.',



        'ZELinkAbrechnungsgesellschaft' => 'Weitere Informationen zur Ratenzahlung<br>
		<a title=”Abrechnugnsgeselschaft Zahnarzt Alzenau Hörstein Dr. Fuchs” href="https://www.dzr.de/fuer-patienten/teilzahlungsmoeglichkeit.html"
			class="btn btn-icon btn-outline-primary btn-icon-left">  <span class="icon-Tooth">
											</span> Zur Abrechnungsgesellschaft</a>',


		'ZEBild1' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_zahnersatz-1600x1000.jpeg',
        'ZEBild2' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/02/Bildschirmfoto-2019-02-26-um-09.34.24-648x393.png',



		//Implantate
		'IMUeber1' => '<br>Implantate',
        'IMText1' => ' <p>Unter Zahnimplantaten versteht man künstliche Zahnwurzeln, die im  Kieferknochen verankert werden. Implantate bestehen meist aus  Titan, das vom Körper in der Regel gut vertragen wird.<br> Selbstverständlich für uns sind eine umfangreiche Planung und Beratung, mit dem Ziel, die für Sie beste Lösung zu finden.

</p>',

      'IMText2' => '<br>Die Vorteile von implantatgetragenem Zahnersatz:
      		<ul>
      			<li>Natürliches Gefühl beim Sprechen und essen.</li>
      			<li>Größere Kaubelastbarkeit als bei herausnehmbarem Zahnersatz.</li>
      			<li>Kein Knochenabbau durch richtige physiologische Belastung.</li>
      			<li>Höhere Stabilität und lange Lebensdauer. *Sehr gute Ästhetik durch keramische  Verblendungen.</li>
      		</ul>
',

    'IMText3' => '
              Die Implantation kann in unserer Praxis durchgeführt werden. Ein Implantologe kommt regelmäßig zu uns ins Haus.
              Wir arbeiten aber auch seit Jahren erfolgreich mit kieferchirurgischen  Praxen zusammen.
              <br>Die Implantatprothetik erhalten Sie dann von uns.',


		'IMBild1' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/45541610_m-1600x1000-1600x1000.jpg',
		'IMBild2' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnimplantat-aufbau-540x349-540x348.png',


		//Kinderbehandlung
		'KBUeber1' => 'Kinder&shy;behandlung',
        'KBText1' => '<p>Die Grundlage eines angstfreien Zahnarztbesuchs im Erwachsenenalter ist eine entspannte Zahnbehandlung in der 				Kindheit.<br>Mit großem Einfühlungsvermögen, viel Geduld und Freude führen wir schon die Kleinsten an die richtige 				   Zahnpflege heran. Wir zeigen, wie eine altersgerechte Zahn- und Mundhygiene aussieht. Dafür erhalten Kinder und 				    Eltern von uns viele wertvolle Tipps.',
		'KBUeber2' => 'Individualprophylaxe',
        'KBText2' => 'Im Rahmen der Individualprophylaxe unterstützen wir Ihr Kind bei der Gesunderhaltung der Zähne. <br>In den meisten Fällen lassen sich so Zahnschäden vermeiden oder frühzeitig erkennen. <br><br><h2 class="fs-2">Gruppenprophylaxe</h2><br>Im Rahmen der Gruppenprophylaxe betreuen wir regelmäßig seit  über 20 Jahren zwei Kindergärten und eine Schule.
					</p>',

          'KBText3' => 'Liebe Eltern, um für Sie und Ihre Kinder den Zahnarztbesuch so angenehm wie möglich zu gestalten haben wir für Sie einen Infobogen mit Tips zur Kinderbehandlung vorbereitet.',
		'KBBildFuchs' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_fuchse-1000x138.png',
        'KBBild1' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/behandlung4zahnarzt_fuchs_alzenau-1600x1000.jpg',
		'KBBild2' => '',
        'KBBild3' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/kinderbehandlung-400x400.jpeg',



		//Wurzelbehandlung

		'MEUeber1' => 'Wurzelkanalbehandlung',
        'METext1' => '<p>Wenn ein Zahn immer wieder Schmerzen bereitet, ist die Ursache oft eine Entzündung des Nervs, meist ausgelöst durch tiefe Karies. Mit einer Wurzelkanalbehandlung und dichter Wurzelfüllung lässt sich der Zahn aber in den meisten Fällen doch noch erhalten. Durch moderne Behandlung mit hoch flexiblen Nickel-Titan-Instrumenten und neuartigen Maschinensysteme lassen sich heute Zähne erhalten, die man früher hätte entfernen müssen.',
		'MEUUeber1' => 'Revision einer unvollständigen Wurzelfüllung',
		'MEUeber2' => '',
        'MeText2' => '<p>Weiterhin wird in unserer Praxis mit Lupenbrille , elektronischer Längenbestimmung des Wurzelkanals  und 						speziellen Ultraschallgeräten bei der Aufbereitung gearbeitet.
				Außerdem bieten wir auch den Austausch (Revision) von alten unvollständigen Wurzelfüllungen an. Mit all diesen 					Maßnahmen schaffen wir die optimalen Voraussetzungen, dass Sie ihren eigenen Zahn noch viele Jahre behalten können 				   .</p>',
		'MEBild1' => 'https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau/assets/bilder/behandlungen/daumen.jpeg',
        'MEBild2' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_EndodontieZahn3-832x835.png',
		'MEBild3' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_EndodontieZahn3-832x835.png',
        'MEBild4' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_EndodontieZahn4-836x827.png',


		'PuPUeber1' => 'Parodontitis',
		'PuPText1' => '<p>Bei der Parodontitis (im Volksmund &bdquo;Parodontose&ldquo;) handelt es sich um eine oft schmerzlose Entzündung von Zahnfleisch und 									Kieferknochen, die langfristig zum Zahnverlust führt. Durch eine systematische Parodontalbehandlung können 						   wir  Ihnen helfen.</p>',
		'PuPUeber2' => 'Parodontitis bleibt meist lange unerkannt.',
        'PuPText2' =>  '<p>Wenn sie ausbricht, kann es zur Zahnlockerung bis hin zum Zahnverlust, Zahnfleischrückgang oder zu schmerzhaften Abszessen kommen. Bei einer Parodontitis ist eine systematische Behandlung erforderlich. Hierbei werden nach gründlicher Vorbehandlung die Zahnfleischtaschen und Wurzeloberflächen vorsichtig von Belägen und Ablagerungen gereinigt. Für den dauerhaften Behandlungserfolg sind außerdem eine gute Mundhygiene und regelmäßige professionelle Prophylaxe entscheidend.</p>',

		'PuPBild1' => './assets/bilder/parodontitis.jpg',



        'PuZUeber1' => '<br>Prophylaxe&shy;maßnahmen',
		'PuZText1' => '<p>beugen Erkrankungen durch Karies und Parodontitis bei Zähnen vor. Außerdem sorgen Sie beim Zahnersatz für eine längere Lebensdauer. Zu den Prophylaxe&shy;maßnahmen zählen Professionelle Zahnreinigung, gesunde Ernährung, kontinuierliche Mundhygiene, regelmäßige Kontrollbesuche beim Zahnarzt und Versiegelung sowie Fluoridierung. Gerade bei der Wiederherstellung der Zahngesundheit sind regelmäßige Kontrollbesuche wichtig für einen dauerhaften Erfolg. Wir unterstützen Sie dabei mit unserem Recall-System.</p>',
        'PuZUeber2' => '<br>Professionelle Zahnreinigung:',
		'PuZText2' => ' <p>Ein strahlendes Lächeln mit weißen, gepflegten Zähnen ist ein Zeichen von Gesundheit, Jugend und Vitalität. Wir bieten Ihnen Professionelle Zahnreinigung, um dieses Ziel zu erreichen. Die professionelle Zahnreinigung (PZR) ist ein Hauptbestandteil der zahnmedizinischen Prophylaxe. Man versteht darunter eine mechanische Reinigung und das Polieren der Zähne, die deutlich über das hinausgeht, was jeder Mensch selbst täglich erledigen kann. Mit der PZR werden sämtliche harten und weichen Beläge sowie Bakterien beseitigt und damit Karies und Parodontitis effektiv vorgebeugt.</p>',
        'PuZBild1' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_behandlung5-1000x666.jpg',
		'PuZBild2' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_ernaehrung-1000x666.jpg',



		//Vollkeramik
    'VKUeber1' => 'Vollkeramik',
		'VKText1' => '<p>Mit Vollkeramik lassen sich höchste ästhetische Ansprüche verwirklichen, so dass man die Kronen und Brücken kaum noch von echten Zähnen unterscheiden kann. Sie sind auch das Mittel der Wahl, sollte eine Allergie auf Metalle vorliegen. Vollkeramische Kronen und Brücken haben kein Metallgerüst. Sie bestehen komplett aus zahnfarbenem Material. Deshalb ist bei der Vollkeramik die optische Wirkung wesentlich brillanter, als bei der herkömmlichen Metallkeramik.
Mit Vollkeramik erreichen wir ein besonders natürliches Aussehen Ihrer Zähne und erfüllen höchste Ansprüche in Funktion und Ästhetik. Denn der Lichtdurchtritt ist bei Vollkeramik nahezu identisch dem bei natürlichen Zähnen. Dadurch sind vollkeramische Restaurationen auch bei genauer Betrachtung kaum von den natürlichen Zähnen zu unterscheiden.</p>',
        'VKBild1' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_Zahnersatz-1600x1000.jpg',


		'WFBildUnter' => 'Amalgam-Füllung v/s Kunststoff-Füllung',
		'WFUeber1' => '<br>Weiße Füllungen',
		'WFText1' => ' <p>Moderne Füllungen schneiden auch optisch besser ab und bleiben viele Jahre stabil. Kleine Zahnschäden werden mit einem Komposit aus Keramikpartikeln und Kunststoff behandelt. Bei größeren Defekten ist eine Keramikfüllung oder eine Teilkrone aus Keramik vorzuziehen.<br>Wir beraten Sie gerne, sollten Sie Fragen zur Zahnerhaltung haben. Nach einer gründlichen Diagnose erhalten Sie von uns die für Sie bestmögliche Empfehlung und Therapie.</p>',
		'WFBild1' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/zahnarzt_fuchs_alzenau_füllungen-502x313.png',
		'WFBild2' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/paradontologie-350x288-350x287.jpg',
		'WFBild3' => 'https://zahnarzt-fuchs-alzenau.de/wp-content/uploads/2019/01/bleaching-291x291-291x291.jpg',





		//Ende Behandlungen



		//BEHANDLUNGSSEITE
			//Bilder
	'BehandlungUUeber1' => 'Unsere Leistungen im Überblick',
	'BB1' => 'https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau/assets/bilder/behandlungen/astetik.jpeg',
    'BB2' => 'https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau/assets/bilder/behandlungen/zahnreinigung.jpeg',
	'BB3' => 'https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau/assets/bilder/behandlungen/fuellung.jpeg',
    'BB4' => 'https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau/assets/bilder/behandlungen/daumen.jpeg',
	'BB5' => 'https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau/assets/bilder/behandlungen/kinder.jpeg',
    'BB6' => 'https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau/assets/bilder/behandlungen/lachgas.jpeg',
	'BB7' => 'https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau/assets/bilder/behandlungen/wurzelbehandlung.png',
    'BB8' => 'https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau/assets/bilder/behandlungen/keramik.jpeg',
	'BB9' => 'https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau/assets/bilder/behandlungen/zahnersatz.jpeg',
    'BB10' => 'https://zahnarzt-fuchs-alzenau.de/zahnarzt-alzenau/assets/bilder/behandlungen/implantat.jpeg',
		//Ueberschriften
	'BU1' => 'Tätigkeitsschwerpunkt Ästhetische Zahnheilkunde',
    'BU2' => 'Prophylaxe und Zahnreinigung',
	'BU3' => 'Weiße Füllungen',
    'BU4' => 'Parodontose- Behandlung',
	'BU5' => 'Kinderbehandlung',
    'BU6' => 'Entspannte Behandlung (Lachgas, Tiefschlaf, Vollnarkose)',
	'BU7' => 'Moderne Endodontie (Wurzelkanalbehandlung)',
    'BU8' => 'Vollkeramik',
	'BU9' => 'Hochwertiger Zahnersatz',
    'BU10' => 'Implantate',




		'BL1' => 'aestetische-zahnheilkunde.php',
    'BL2' => 'prophylaxe-zahnreinigung.php',
		'BL3' => 'weisse-fuellungen.php',
    'BL4' => 'parodontitis-zahnfleischentzuendung.php',
		'BL5' => 'kinderbehandlung.php',
    'BL6' => 'angstpatient-lachgas-tiefschlaf-vollnarkose.php',
		'BL7' => 'moderne-endodontie-wurzelkanalbehandlung.php',
    'BL8' => 'vollkeramik.php',
		'BL9' => 'hochwertiger-zahnersatz.php',
    'BL10' => 'implantate.php',

			//Texte
		'BT1' => 'Ein schönes, strahlendes Lächeln macht jeden Menschen attraktiver. Die Zahnarztpraxis Dr. med. dent. Fuchs in Alzenau ist Ihr Ansprechpartner, wenn es um gesunde, schöne Zähne geht.',
    'BT2' => '<span style="background-color: #408eea; border-radius:20px; color:white;">&nbsp;&nbsp;Prophylaxe – das Geheimnis gesunder Zähne:&nbsp;&nbsp;</span> <br>Bei der regelmäßigen  Kontrolluntersuchung  können Karies und Parodontose frühzeitig entdeckt werden. Durch Professionelle Zahnreinigung,  Politur, Fluoridierung und Tipps für gute Mundhygiene erhalten Sie die optimale Vorsorge für Ihre Zähne.',
		'BT3' => 'Die meisten Patienten möchten keine Amalgamfüllungen mehr. Zum Glück stehen heute perfekte Alternativen zur Verfügung: Zahnfarbene Füllungen aus Kunststoff oder Keramik.',
    'BT4' => 'Bei der Parodontitis handelt es sich um eine oft schmerzlose Entzündung von Zahnfleisch und Kieferknochen, die langfristig zum Zahnverlust führt.
			   	  Durch eine systematische Parodontalbehandlung kann ihnen unsere Zahnarztpraxis Dr. Fuchs in Alzenau helfen.',
		'BT5' => 'Bereits die ersten Lebensjahre sind entscheidend für ein gesundes Gebiss und gute Zähne. Wenn hier die Weichen richtig gestellt werden, können ihre Kinder ein Leben lang gesunde Zähne behalten und unangenehme Erfahrungen mit Zahnärzten vermeiden',
    'BT6' => '<span style="background-color: #408eea; border-radius:20px; color:white;">&nbsp;&nbsp;Als Angstpatient müssen Sie sich bei uns nicht rechtfertigen! </span> <br>Wir ermitteln im Erstgespräch gemeinsam mit Ihnen Ausmaß und Gründe ihrer Angst, um dann gezielt dagegen vorzugehen. Je nach Notwendigkeit findet eine Schmerz- ausschaltung mit Lokalanästhesie, Lachgas, Tiefschlaf oder Vollnarkose 				  statt. So bringen sie die Zahnbehandlung bei uns angst- und schmerzfrei hinter sich.',
		'BT7' => 'zur Erhaltung stark zerstörter Zähne mit entzündetem Nerv. Durch eine Wurzelkanalbehandlung mit dichter Wurzelfüllung lässt sich in sehr vielen 					  Fällen ein verloren geglaubter Zahn noch erhalten.',
    'BT8' => 'Mit Vollkeramik lassen sich höchste ästhetische Ansprüche verwirklichen, so dass man die Kronen und Brücken kaum noch von echten Zähnen 							  unterscheiden kann. Sie sind auch das Mittel der Wahl, sollte eine Allergie auf Metalle vorliegen.',
		'BT9' => 'zu günstigen Preisen mit Möglichkeit der Ratenzahlung. Bei Ihren Zahnarzt in Alzenau',
		'BT10' => 'Ob Einzelzahnlücke, große Lücke oder zahnloser Kiefer – Implantate haben viele Vorteile und stellen jeweils die hochwertige und komfortable 						  Alternative zum konventionellen Zahnersatz dar.',

//



        'last' => '...',
    );
    return $lang[$phrase];
}

//<?php echo lang('NO_PHOTO'); // No photo's available would show here
?>
