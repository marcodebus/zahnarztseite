<?php 
if(!isset($_GET['pos'])){$pos=1;}else{$pos=intval($_GET['pos']);}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>miniPAN Examples</title>
<script type="text/javascript" src="Scripts/jquery-1.8.1.min.js"></script>
<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="Scripts/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="../bootstrap/dist/js/bootstrap.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>miniPAN<span>Simple File Management System</span></h1>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="demo-links"><a href="?pos=1">Basic Linkage</a><a href="?pos=2">tinyMCE</a><a href="?pos=3">CKEditor</a><a href="?pos=4">Normal Pop-up</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
<?php if($pos==1){?>
  <tr>
    <td><div class="contents"><div class="panel"><div class="panel-body"><form name="form1" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="40"><strong>Product Name</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40"><span class="input-group">
            <input name="text_field2" class="form-control" type="text" id="text_field2" size="40" placeholder="example">
          </span></td>
        </tr>
        <tr>
          <td height="40"><strong>Product ID</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40"><span class="input-group">
            <input name="text_field3" class="form-control" type="text" id="text_field3" size="40" placeholder="example">
          </span></td>
        </tr>
        <tr>
          <td height="40"><strong>Description</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40"><span class="input-group">
            <input name="text_field4" class="form-control" type="text" id="text_field4" size="40" placeholder="example">
          </span></td>
        </tr>
        <tr>
          <td height="40"><strong>Price</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40"><span class="input-group">
            <input name="text_field5" class="form-control" type="text" id="text_field5" size="40" placeholder="example">
          </span></td>
        </tr>
        <tr>
          <td height="40"><strong>Product Image</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40">
            <div class="input-group">
              <input name="text_field" class="form-control" type="text" id="text_field" size="40">
              <span class="input-group-btn">
                <button data-pan-model="fancybox" data-pan-field="text_field" data-pan-link="default" data-pan-platform="normal" class="btn btn-default minipan" type="button">miniPan</button>
                </span>
              </div>      
            </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form></div></div></div></td>
  </tr>
<?php }elseif($pos==2){?>
  <tr>
    <td>
    
<div class="contents"><div class="panel"><div class="panel-body"><form name="form1" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="40"><strong>Product Name</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40"><span class="input-group">
            <input name="text_field2" class="form-control" type="text" id="text_field2" size="40" placeholder="example">
          </span></td>
        </tr>
        <tr>
          <td height="40"><strong>Product ID</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40"><span class="input-group">
            <input name="text_field3" class="form-control" type="text" id="text_field3" size="40" placeholder="example">
          </span></td>
        </tr>
        <tr>
          <td height="40"><strong>Description</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40"><span class="input-group">
            <input name="text_field4" class="form-control" type="text" id="text_field4" size="40" placeholder="example">
          </span></td>
        </tr>
        <tr>
          <td height="40"><strong>Price</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40"><span class="input-group">
            <input name="text_field5" class="form-control" type="text" id="text_field5" size="40" placeholder="example">
          </span></td>
        </tr>
        <tr>
          <td height="40"><strong>Product Image</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40">
            <div class="input-group">
              <input name="text_field" class="form-control" type="text" id="text_field" size="40">
              <span class="input-group-btn">
                <button data-pan-model="fancybox" data-pan-field="text_field" data-pan-link="default" data-pan-platform="normal" class="btn btn-default minipan" type="button">miniPan</button>
                </span>
              </div>      
            </td>
        </tr>
        <tr>
          <td height="40"><strong>Product Details</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40">
            <textarea name="text_area" id="text_area"></textarea>
            <!-- CALL TINYMCE CONFIGS -->
            <script src="tinymce/js/tinymce/tinymce.min.js"></script>
			<script>
                    tinymce.init({
							selector:'#text_area',
							height : 500,
							menubar:false,
							relative_urls: false,
							remove_script_host: false,
							plugins: 'textcolor,link,image,charmap,code,table,emoticons',
							toolbar1: 'formatselect fontselect fontsizeselect forecolor backcolor',
							toolbar2: 'bold italic underline strikethrough alignleft aligncenter alignright alignjustify bullist numlist outdent indent blockquote',
							toolbar3: 'link unlink image charmap | table | code | minipan',
							setup: function(editor) {
								editor.addButton('minipan', {
									addClass: 'minipan',
									text: 'miniPAN',
									icon: false,
									onclick: function(e) {
										// Fancybox Example
										$.fancybox({
											autoSize : true,
											type     : 'iframe',
											href     : '../index.php?pf=' + editor.id + '&pm=default&pp=tinymce&o=fancybox'
										});
										// ******
									}
								});
							}						
						});
            </script>
            <!-- CALL TINYMCE CONFIGS -->

            </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form></div></div></div>
    
    </td>
  </tr>
<?php }elseif($pos==3){?>
  <tr>
    <td>
<div class="contents"><div class="panel"><div class="panel-body"><form name="form1" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="40"><strong>Product Name</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40"><span class="input-group">
            <input name="text_field2" class="form-control" type="text" id="text_field2" size="40" placeholder="example">
          </span></td>
        </tr>
        <tr>
          <td height="40"><strong>Product ID</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40"><span class="input-group">
            <input name="text_field3" class="form-control" type="text" id="text_field3" size="40" placeholder="example">
          </span></td>
        </tr>
        <tr>
          <td height="40"><strong>Description</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40"><span class="input-group">
            <input name="text_field4" class="form-control" type="text" id="text_field4" size="40" placeholder="example">
          </span></td>
        </tr>
        <tr>
          <td height="40"><strong>Price</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40"><span class="input-group">
            <input name="text_field5" class="form-control" type="text" id="text_field5" size="40" placeholder="example">
          </span></td>
        </tr>
        <tr>
          <td height="40"><strong>Product Image</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40">
            <div class="input-group">
              <input name="text_field" class="form-control" type="text" id="text_field" size="40">
              <span class="input-group-btn">
                <button data-pan-model="fancybox" data-pan-field="text_field" data-pan-link="default" data-pan-platform="normal" class="btn btn-default minipan" type="button">miniPan</button>
                </span>
              </div>      
            </td>
        </tr>
        <tr>
          <td height="40"><strong>Product Details</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40">
            <textarea name="text_area" id="text_area"></textarea>
            <!-- CALL CKEDITOR CONFIGS -->
            <script src="ckeditor/ckeditor.js"></script>
			<script>
				CKEDITOR.replace( 'text_area' ,{
					filebrowserBrowseUrl: '../index.php?pf=text_area&pm=default&pp=ckeditor&o=normal',
					filebrowserImageBrowseUrl: '../index.php?pf=text_area&pm=default&pp=ckeditor&o=normal&type=Images',
					filebrowserWindowWidth: '820',
					filebrowserWindowHeight: '590'
					});
            </script>
			<!-- CALL CKEDITOR CONFIGS -->
            </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form></div></div></div>
    
    </td>
  </tr>
<?php }elseif($pos==4){?>
<tr>
	<td>
<div class="contents"><div class="panel"><div class="panel-body"><form name="form1" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="40"><strong>Product Name</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40"><span class="input-group">
            <input name="text_field2" class="form-control" type="text" id="text_field2" size="40" placeholder="example">
          </span></td>
        </tr>
        <tr>
          <td height="40"><strong>Product ID</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40"><span class="input-group">
            <input name="text_field3" class="form-control" type="text" id="text_field3" size="40" placeholder="example">
          </span></td>
        </tr>
        <tr>
          <td height="40"><strong>Description</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40"><span class="input-group">
            <input name="text_field4" class="form-control" type="text" id="text_field4" size="40" placeholder="example">
          </span></td>
        </tr>
        <tr>
          <td height="40"><strong>Price</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40"><span class="input-group">
            <input name="text_field5" class="form-control" type="text" id="text_field5" size="40" placeholder="example">
          </span></td>
        </tr>
        <tr>
          <td height="40"><strong>Product Image</strong></td>
          <td height="40"><strong>:</strong></td>
          <td height="40">
            <div class="input-group">
              <input name="text_field" class="form-control" type="text" id="text_field" size="40">
              <span class="input-group-btn">
                <button data-pan-model="normal" data-pan-field="text_field" data-pan-link="link" data-pan-platform="normal" class="btn btn-default minipan" type="button">miniPan</button>
                </span>
              </div>      
            </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form></div></div></div>
    </td>
</tr>
<?php }?>
</table>
<script type="text/javascript" src="Scripts/pan.js"></script>
</body>
</html>
