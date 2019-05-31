// miniPAN JS
// Create Folder
$(document).ready(function() {
/* Attach a submit handler to the form */
$("#makeDir").submit(function(event) {

    /* Stop form from submitting normally */
    event.preventDefault();

    /* Clear result div*/
    $("#result-fold").html('');

    /* Get some values from elements on the page: */
    var values = $(this).serialize();

    /* Send the data using post and put the results in a div */
    $.ajax({
		async: false,
        url: "xmlhttp.action.php?m=1",
        type: "post",
        data: values,
		dataType: "json",
        success: function(data){
            $("#result-fold").html(data.returned_val);
			if(data.dataP=='1'){
				$( "#refresh" ).trigger( "click" );
				$( "#createFolder" ).removeClass('fade in active');
				$( ".nav-pills li" ).removeClass('active');
				$( "#mainPan" ).addClass('fade in active');
				$("#folder_name").val();
			}
        },
        error:function(){
            $("#result-fold").html('There is error while submit');
        }
    });
});
});

function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

// Sorting Types
$(document).ready(function() {

		function resetSortIcons(){
			$('#sort-type-links a span').removeClass();
		}
		
		function clearQr(v){
			v = v.replace('&amp;sty=0&amp;stym=0', '');
			v = v.replace('&amp;sty=0&amp;stym=1', '');
			v = v.replace('&amp;sty=1&amp;stym=0', '');
			v = v.replace('&amp;sty=1&amp;stym=1', '');
			v = v.replace('&amp;sty=2&amp;stym=0', '');
			v = v.replace('&amp;sty=2&amp;stym=1', '');
			v = v.replace('&amp;sty=3&amp;stym=0', '');
			v = v.replace('&amp;sty=3&amp;stym=1', '');
			v = v.replace('&amp;sty=4&amp;stym=0', '');
			v = v.replace('&amp;sty=4&amp;stym=1', '');
			return v;
		}
		
      $('#sort-type-links a').click(function() {
		resetSortIcons();
		var u = document.getElementById('docList').contentWindow.location.href;
		if($(this).attr("data-sort-type")==0){ // ASC
			u = clearQr(u);
			$('#docList').attr('src',u+'&sty='+$(this).attr("data-sort")+'&stym=0');
			//alert(u+'&amp;sty='+$(this).attr("data-sort")+'&amp;stym=0');
			$(this).attr("data-sort-type","1");
			$(this).find('span').addClass("glyphicon glyphicon-chevron-down");
		}else{ // DESC
			u = clearQr(u);
			$('#docList').attr('src',u+'&sty='+$(this).attr("data-sort")+'&stym=1');
			$(this).attr("data-sort-type","0");
			$(this).find('span').addClass("glyphicon glyphicon-chevron-up");
		}
      });

});

// Listing Types
$(document).ready(function() {

		function resetListIcons(){
			$('.list-type span').css("color","#333");
		}
		
		function clearQr2(v){
			v = v.replace('&lty=0', '');
			v = v.replace('&lty=1', '');
			return v;
		}
		
      $('.list-type').click(function() {
		 resetListIcons();
		 var ur = document.getElementById('docList').contentWindow.location.href;
		 ur = clearQr2(ur);
		 $('#docList').attr('src',ur+'&lty='+$(this).attr("data-list-type"));
		 $(this).find('span').css("color","#006cff");
      });

});

// Cancel Action
$(document).ready(function() {

				
      $('.cancelit').click(function(e) {
				$( "#createFolder" ).removeClass('fade in active');
				$( "#upload" ).removeClass('fade in active');
				$( ".nav-pills li" ).removeClass('active');
				$( "#mainPan" ).addClass('fade in active');
      });

});

// Refresh Action
$(document).ready(function() {

				
      $('#refresh').click(function() {
		$('.list-type span').css("color","#333");
		document.getElementById('docList').contentDocument.location.reload(true);
		document.getElementById('dirList').contentDocument.location.reload(true);
      });

});

// Link Function

	function pan(f,m,l,t,p,o){

		// f - Form Field
		// m - Link Model
		// l - File Link
		// t - File Type
		// p - Platform (normal,tinymce,ckeditor)
		// o - Opener (normal,fancybox)
		
		if(m=='default' || m==''){ // Default Link & HTML Codes *************
			if(p=='normal' || p==''){ // Normal Form Field
				if(t=='img'){ // Image Link
					if(o=='normal'){ // Normal Popup
						$('#'+f,window.opener.document).val(l);
					}else{
						$('#'+f,window.parent.document).val(l);
						parent.$.fancybox.close();
					}
				}else{ // Document Link
					if(o=='normal'){ // Normal Popup
						$('#'+f,window.opener.document).val(l);
					}else{
						$('#'+f,window.parent.document).val(l);
						parent.$.fancybox.close();
					}
				}
			}else if(p=='tinymce'){ // TinyMCE
				if(t=='img'){ // Image Link
					var link_styler = '<img src="'+ l +'" alt="">';
					if(o=='normal'){ // Normal Popup
						var ed = window.opener.tinyMCE.activeEditor;
						var marker = ed.dom.get(f);
						ed.selection.select(marker, false);
						ed.selection.setContent(link_styler);
					}else{
						var ed = window.parent.tinyMCE.activeEditor;
						var marker = ed.dom.get(f);
						ed.selection.select(marker, false);
						ed.selection.setContent(link_styler);
						parent.$.fancybox.close();
					}
				}else{ // Document Link
					var link_styler = '<a href="'+ l +'">'+ l.replace(/^.*[\\\/]/, '') +'</a>';
					if(o=='normal'){ // Normal Popup
						var ed = window.opener.tinyMCE.activeEditor;
						var marker = ed.dom.get(f);
						ed.selection.select(marker, false);
						ed.selection.setContent(link_styler);
					}else{
						var ed = window.parent.tinyMCE.activeEditor;
						var marker = ed.dom.get(f);
						ed.selection.select(marker, false);
						ed.selection.setContent(link_styler);
						parent.$.fancybox.close();
					}
				}
			}else if(p=='ckeditor'){ // CKEditor (Set by CKEditor fileBrowser Function)
				if(t=='img'){ // Image Link
					var CKEditorFuncNum = 1;
					window.opener.CKEDITOR.tools.callFunction( CKEditorFuncNum, l, '' );
					self.close();
				}else{
					var CKEditorFuncNum = 1;
					window.opener.CKEDITOR.tools.callFunction( CKEditorFuncNum, l, '' );
					self.close();				
				}
			}
		}else{ // Only Links **********************
		
			if(p=='normal' || p==''){ // Normal Form Field
				if(t=='img'){ // Image Link
					if(o=='normal'){ // Normal Popup
						$('#'+f,window.opener.document).val(l);
					}else{
						$('#'+f,window.parent.document).val(l);
						parent.$.fancybox.close();
					}
				}else{ // Document Link
					if(o=='normal'){ // Normal Popup
						$('#'+f,window.opener.document).val(l);
					}else{
						$('#'+f,window.parent.document).val(l);
						parent.$.fancybox.close();
					}
				}
			}else if(p=='tinymce'){ // TinyMCE
				if(t=='img'){ // Image Link
					var link_styler = l;
					if(o=='normal'){ // Normal Popup
						var ed = window.opener.tinyMCE.activeEditor;
						var marker = ed.dom.get(f);
						ed.selection.select(marker, false);
						ed.selection.setContent(link_styler);
					}else{
						var ed = window.parent.tinyMCE.activeEditor;
						var marker = ed.dom.get(f);
						ed.selection.select(marker, false);
						ed.selection.setContent(link_styler);
						parent.$.fancybox.close();
					}
				}else{ // Document Link
					var link_styler = l;
					if(o=='normal'){ // Normal Popup
						var ed = window.opener.tinyMCE.activeEditor;
						var marker = ed.dom.get(f);
						ed.selection.select(marker, false);
						ed.selection.setContent(link_styler);
					}else{
						var ed = window.parent.tinyMCE.activeEditor;
						var marker = ed.dom.get(f);
						ed.selection.select(marker, false);
						ed.selection.setContent(link_styler);
						parent.$.fancybox.close();
					}
				}
			}else if(p=='ckeditor'){ // CKEditor (Set by CKEditor fileBrowser Function)
				if(t=='img'){ // Image Link
					var CKEditorFuncNum = 1;
					window.opener.CKEDITOR.tools.callFunction( CKEditorFuncNum, l, '' );
					self.close();
				}else{
					var CKEditorFuncNum = 1;
					window.opener.CKEDITOR.tools.callFunction( CKEditorFuncNum, l, '' );
					self.close();				
				}
			}
		
		} // end link model
	}
	
//** File Operations
function opMod(t,d){
	$('#fileOperations .modal-title').html('');
	$('#fileOperations .modal-body').html('');
	
	// Load data
	$('#fileOperations .modal-title').html(t);
	$('#fileOperations .modal-body').html($(d).html());
	}
