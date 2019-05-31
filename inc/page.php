<?php

	switch ($Seite) {
	
    case "index":
        $title = lang('IndexTitle');
		$MetaDescr = lang('IndexMetaDescr');
		$Ueberschrift = lang('IndexUeber');
		$Sidebar = lang('IndexSideTable');
        break;
    case "praxis":
        $title = lang('PraxisTitle');
		$MetaDescr = lang('PraxisMetaDescr');
		$Ueberschrift = lang('PraxisUeber');
		$Sidebar = lang('PraxisSideTable');
        break;
    case "behandlung":
        $title =lang('BehandlungTitle');
		$MetaDescr = lang('BehandlungMetaDescr');
		$Ueberschrift =lang('BehandlungUeber');
		$Sidebar = lang('BehandlungSideTable');
        break;
	case "team":
        $title = lang('TeamTitle');
		$MetaDescr =lang('TeamMetaDescr');
		$Ueberschrift = lang('TeamUeber');
		$Sidebar = lang('TeamSideTable');
        break;
    case "oeffnungszeiten":
        $title = lang('OeffnungszeitenTitle');
		$MetaDescr = lang('OeffnungszeitenMetaDescr');
		$Ueberschrift = lang('OeffnungszeitenUeber');
		$Sidebar = lang('OeffnungszeitenSideTable');
        break;
    case "neu":
        $title = lang('NeuTitle');
		$MetaDescr = lang('NeuMetaDescr');
		$Ueberschrift = lang('NeuUeber');
		$Sidebar = lang('NeuSideTable');
        break;
	case "kontakt":
        $title = lang('KontaktTitle');
		$MetaDescr = lang('KontaktMetaDescr');
		$Ueberschrift = lang('KontaktUeber');
		$Sidebar = lang('KontaktSideTable');
        break;
    case "impressum":
        $title = lang('ImpressumTitle');
		$MetaDescr = lang('ImpressumMetaDescr');
		$Ueberschrift = lang('ImpressumUeber');
		$Sidebar = lang('ImpressumSideTable');
        break;
    case "AEZ":
        $title = lang('AEZTitle');
		$MetaDescr = lang('AEZMetaDescr');
		$Ueberschrift = lang('AEZUeber');
		$Sidebar =lang('AEZSideTable');
        break;
	case "PuZ":
        $title = lang('PuZTitle');
		$MetaDescr = lang('PuZMetaDescr');
		$Ueberschrift = lang('PuZUeber');
		$Sidebar = lang('PuZSideTable');
        break;
    case "PuP":
        $title = lang('PuPTitle');
		$MetaDescr = lang('PuPMetaDescr');
		$Ueberschrift = lang('PuPUeber');
		$Sidebar = lang('PuPSideTable');
        break;
    case "KB":
        $title = lang('KBTitle');
		$MetaDescr = lang('KBMetaDescr');
		$Ueberschrift = lang('KBUeber');
		$Sidebar = lang('KBSideTable');
        break;
	case "VK":
        $title = lang('VKTitle');
		$MetaDescr = lang('VKMetaDescr');
		$Ueberschrift = lang('VKUeber');
		$Sidebar = lang('VKSideTable');
        break;
	case "ME":
        $title = lang('METitle');
		$MetaDescr = lang('MEMetaDescr');
		$Ueberschrift = lang('MEUeber');
		$Sidebar = lang('MESideTable');
        break;
    case "HZ":
        $title = lang('HZTitle');
		$MetaDescr = lang('HZMetaDescr');
		$Ueberschrift = lang('HZUeber');
		$Sidebar = lang('HZSideTable');
        break;
    case "IM":
        $title = lang('IMTitle');
		$MetaDescr = lang('IMMetaDescr');
		$Ueberschrift = lang('IMUeber');
		$Sidebar = lang('IMSideTable');
        break;	
			
    default:
		$title =lang('indexTitle');
		$MetaDescr = lang('indexMetaDescr');
		$Ueberschrift = lang('indexUeber');
		$Sidebar = lang('indexSideTable');
}
?>