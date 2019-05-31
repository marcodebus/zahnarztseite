$(document).ready(function() {

	$('.minipan').click(function() {
	
		// model - opener style fancybox or normal popup window
		// link field - form field id for file link
		// link model 1 - default: Images will insert to form field by html code, documents inserted by downloadable link
		// link model 2 - links: All items will insert to form field by direct url
		// pan_platform - normal form field, tinyMCE, CKEditor

		var model = $(this).attr("data-pan-model");
		var link_field = $(this).attr("data-pan-field");
		var link_model = $(this).attr("data-pan-link");
		var pan_platform = $(this).attr("data-pan-platform");
		
		if(link_model=='' || link_model=='default'){
				link_model = 'default';
			}else{
				link_model = 'links';
			}
		
		if(model=='fancybox'){ // Fancybox
				$('.minipan').fancybox({
					autoSize : true,
					type     : 'iframe',
					href     : '../index.php?pf=' + link_field + '&pm=' + link_model + '&pp=' + pan_platform + '&o=fancybox'
				});
		}else{ // Normal Popup
			window.open('../index.php?pf=' + link_field + '&pm=' + link_model + '&pp=' + pan_platform + '&o=normal','miniPAN','width=800,height=520,toolbar=0,menubar=0,location=0,status=0,scrollbars=1,resizable=1,left=0,top=0');return false;
		}
		
	});
	
});

