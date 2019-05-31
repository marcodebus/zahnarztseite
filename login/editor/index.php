<?php 
# +------------------------------------------------------------------------+
# | Artlantis CMS Solutions                                                |
# +------------------------------------------------------------------------+
# | miniPan - PHP File Management System                                   |
# | Copyright (c) Artlantis Design Studio 2014. All rights reserved.       |
# | Version       1.0.1                                                    |
# | Last modified 16.03.14                                                 |
# | Email         developer@artlantis.net                                  |
# | Web           http://www.artlantis.net                                 |
# +------------------------------------------------------------------------+
include_once('configs.php');
if(!isset($_GET['pf'])){$pf='';}else{$pf = trim($_GET['pf']);}
if(!isset($_GET['pm'])){$pl='default';}else{$pl = trim($_GET['pm']);}
if(!isset($_GET['pp'])){$pp='normal';}else{$pp = trim($_GET['pp']);}
if(!isset($_GET['o'])){$o='fancybox';}else{$o = trim($_GET['o']);}
session_start();
session_name('miniPAN');
$_SESSION["PAN"] = $pan_base;
$_SESSION["PANF"] = $pf; # Form Field Name
$_SESSION["PANL"] = $pl; # Link Type
$_SESSION["PANP"] = $pp; # Platform (normal,tinymce,ckeditor)
$_SESSION["PANO"] = $o; # Opener (normal,fancybox)
session_write_close(); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>miniPAN</title>
<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet'>
<link rel="stylesheet" href="bootstrap/dist/css/normalize.css">
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
<script type="text/javascript" src="Scripts/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="css/pan.css">
</head>

<body>

<div id="masterBox">
<h1>miniPAN</h1>
<nav class="navbar navbar-default" role="navigation">
<div class="container-fluid">
	<ul class="nav nav-pills">
	<li class="main-controllers"><a href="#createFolder" data-toggle="tab"><span class="glyphicon glyphicon-folder-close"></span> <?php echo(minipan_create_folder);?></a></li>
    <li class="main-controllers"><a href="#upload" data-toggle="tab"><span class="glyphicon glyphicon-upload"></span> <?php echo(minipan_upload);?></a></li>
    <li class="pull-right">
<span >
	<button type="button" id="refresh" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-refresh"></span></button>
    <button type="button" class="btn btn-default navbar-btn list-type" data-list-type="0"><span class="glyphicon glyphicon-list"></span></button>
    <button type="button" class="btn btn-default navbar-btn list-type" data-list-type="1"><span class="glyphicon glyphicon-th-large"></span></button>
<div class="btn-group">
  <button type="button" class="btn btn-default"><?php echo(minipan_sort);?></button>
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul id="sort-type-links" class="dropdown-menu" role="menu">
    <li><a href="javascript:;" data-sort-type="0" data-sort="0"><?php echo(minipan_name);?> <span class="glyphicon glyphicon-chevron-down"></span></a></li>
    <li><a href="javascript:;" data-sort-type="0" data-sort="1"><?php echo(minipan_size);?> <span></span></a></li>
    <li><a href="javascript:;" data-sort-type="0" data-sort="2"><?php echo(minipan_type);?> <span></span></a></li>
    <li><a href="javascript:;" data-sort-type="0" data-sort="3"><?php echo(minipan_date);?> <span></span></a></li>
  </ul>
</div>
    </span>
    </li>
    </ul>
</div>
</nav>
<div id="pan" class="tab-content">
    <div id="mainPan" class="tab-pane fade in active">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="26%" height="345" valign="top"><iframe src="lister.php?m=1" id="dirList" name="dirList"></iframe></td>
        <td width="74%" height="345" valign="top"><iframe src="lister.php?m=2&dir=" id="docList" name="docList"></iframe></td>
      </tr>
    </table>
    </div>
    <div id="createFolder" class="tab-pane fade">
        <form role="form" name="makeDir" id="makeDir">
            <table width="300" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div id="result-fold"></div></td>
              </tr>
              <tr>
                <td align="center"><input type="text" class="form-control" placeholder="<?php echo(minipan_folder_name);?>" name="folder_name" id="folder_name"></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
              	<td align="center"><button type="button" class="btn btn-danger cancelit"><?php echo(minipan_cancel);?></button> <button type="submit" class="btn btn-primary" name="addFolder" value="addFolder"><span class="glyphicon glyphicon-plus"></span> <?php echo(minipan_create_folder);?></button></td>
              </tr>
            </table>        
        </form>
    </div>
    <div id="upload" class="tab-pane fade">
	    <div id="upload-box">
            <form id="uploadf" method="post" action="upload.php" enctype="multipart/form-data">
                <div id="drop">
                    <span><large><span class="glyphicon glyphicon-cloud-upload"></span></large><br><?php echo(minipan_d_rop_here);?></span>
    
                    <a class="fileChoose"><?php echo(minipan_browse);?></a>
                    <a class="cancelit"><?php echo(minipan_cancel);?></a>
                    <input type="file" name="upl">
                </div>
    			
                <div id="upload-list">
                	<div id="upl-res"></div>
                    <ul>
                        <!-- The file uploads will be shown here -->
                    </ul>
                </div><div class="clearfix"></div>
    
            </form>
        </div>
    </div>
</div>
<span id="powered" class="pull-right">miniPAN File Management. 2014</span>
</div>


<!-- Page End -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="Scripts/pan.min.js"></script>
		<script src="Scripts/jquery.knob.js"></script>
		<script src="Scripts/jquery.ui.widget.js"></script>
		<script src="Scripts/jquery.iframe-transport.js"></script>
		<script src="Scripts/jquery.fileupload.js"></script>
<script type="text/javascript" src="Scripts/pan.upload.js"></script>

</body>
</html>