<?php
# +------------------------------------------------------------------------+
# | Artlantis CMS Solutions                                                |
# +------------------------------------------------------------------------+
# | miniPan - PHP File Management System                                   |
# | Copyright (c) Artlantis Design Studio 2014. All rights reserved.       |
# | Version       1.0                                                      |
# | Last modified 10.04.14                                                 |
# | Email         developer@artlantis.net                                  |
# | Web           http://www.artlantis.net                                 |
# +------------------------------------------------------------------------+
include_once('configs.php');include_once('functions.php');
if(!isset($_GET['m'])){$m=0;}else{$m=intval($_GET['m']);}
if(!isset($_GET['DEL'])){$DEL='';}else{$DEL=trim($_GET['DEL']);}
if($m==0){die('Error Occured!');}
if(!isset($_GET['sty'])){$sty=0;}else{$sty=intval($_GET['sty']);} # Sort Type
if(!isset($_GET['stym'])){$stym=0;}else{$stym=intval($_GET['stym']);} # Sort Mode ASC / DESC
if(!isset($_GET['lty'])){$lty=0;}else{$lty=intval($_GET['lty']);} # List Type
$errText = '';

if($m==1){
	if(!isset($_GET['dir'])){$openedFold = $pan_base;}else{
		$openedFold = $pan_base . '/' . $_GET['dir'];
		$realUserPath = realpath($openedFold);
		if ($realUserPath === false || strpos($realUserPath, $realBase) !== 0) {die(minipan_path_error);} # Check Traversal
	}
	session_start();
	$_SESSION["PAN"] = $openedFold;
	session_write_close(); 
}

if($m==2){
	if(!isset($_GET['dir'])){$openedFold = $pan_base;}else{
		$openedFold = $pan_base . '/' . $_GET['dir'];
		$realUserPath = realpath($openedFold);
		if ($realUserPath === false || strpos($realUserPath, $realBase) !== 0) {die(minipan_path_error);} # Check Traversal
	}
	session_start();
	$_SESSION["PAN"] = $openedFold;
	session_write_close();
}

if($DEL=='yes'){ # Folder Delete Operation
	# Demo Mode Check ****
	if(demo){$errText = '<div class="alert alert-danger">Demo Mode Active!</div>';}else{
	# Demo Mode Check ****
	$getRemFol = $openedFold;
	$getRemFol = realpath($getRemFol);
	if($getRemFol==$realBase){
		$errText = '<div class="alert alert-danger">'. minipan_you_cannot_d_elete_main_folder .'!</div>';
		}else{
			deleteAll($getRemFol);
			header('Location: ?m=2&dir=');
			}
		}
	}
	
if(isset($_POST['REN'])){ # Folder Rename Operation
	# Demo Mode Check ****
	if(demo){$errText = '<div class="alert alert-danger">Demo Mode Active!</div>';}else{
	# Demo Mode Check ****
	$getRemFol = $openedFold;
	$getRemFol = realpath($getRemFol);
	if($getRemFol==$realBase){
		$errText = '<div class="alert alert-danger">'. minipan_you_cannot_rename_main_folder .'!</div>';
		}else{
				if(!isset($_POST['fnew_name']) || empty($_POST['fnew_name'])){$errText = '* '. minipan_please_enter_a_folder_name .'<br>';}
				
				if($errText==''){
					$newName = dirname($_SESSION["PAN"]).'/'.uTagFold($_POST['fnew_name']);
						rename(realpath($_SESSION["PAN"]), $newName);
						header('Location: ?m=2&dir='.str_replace($pan_base.'/','',$newName));
					}else{
						$errText = '<div class="alert alert-danger">'. $errText .'</div>';
						}
			}
	}
	}
	
if(isset($_POST['RENFile'])){ # File Rename Operation

	# Demo Mode Check ****
	if(demo){$errText = '<div class="alert alert-danger">Demo Mode Active!</div>';}else{
	# Demo Mode Check ****

	if(!isset($_POST['fnew_name']) || empty($_POST['fnew_name'])){$errText = '* '. minipan_please_enter_a_file_name .'<br>';}
	if(!isset($_POST['fold_name']) || empty($_POST['fold_name'])){$errText = '* '. minipan_system_cannot_catch_of_your_s_elected_file_details .'!<br>';}
	
		if($errText==''){
				$getRemFilePath = $openedFold.'/'.trim($_POST['fold_name']);
				$getRemFilePath = realpath($getRemFilePath);
				$info = pathinfo($getRemFilePath);
				
				if (file_exists(realpath($openedFold.trim($_POST['fnew_name']).'.'.$info['extension']))) {$errText = '<div class="alert alert-danger">* '. minipan_file_already_exists .'!<br></div>';}
				else{
					rename($getRemFilePath, $openedFold.trim($_POST['fnew_name']).'.'.$info['extension']);
					$errText = '<div class="alert alert-success">'. minipan_file_name_successfully_changed .'!</div>';
				}
			}else{
				$errText = '<div class="alert alert-danger">'. $errText .'</div>';
				}
	}
	}
	
if(isset($_POST['MOVFile'])){ # File Move Operation

	# Demo Mode Check ****
	if(demo){$errText = '<div class="alert alert-danger">Demo Mode Active!</div>';}else{
	# Demo Mode Check ****

	if(!isset($_POST['fold_name']) || empty($_POST['fold_name'])){$errText = '* '. minipan_system_cannot_catch_of_your_s_elected_file_details .'!<br>';}
	
		if($errText==''){
				//$getRemFilePath = $pan_base.'/'.trim($_POST['fold_name']);
				$getRemFilePath = $openedFold . trim($_POST['fold_name']);
				$getRemFilePath = realpath($getRemFilePath);
				if(trim($_POST['folderList'])==$pan_stock_folder){$movDest = '';}else{$movDest = trim($_POST['folderList']) . '/';}
				$destFold = $pan_base . '/' . $movDest;
				
				if (file_exists($destFold.basename($getRemFilePath))) {$errText = '<div class="alert alert-danger">* '. minipan_file_exists_in_the_destination_folder .'!<br></div>';}
				else{
					rename($getRemFilePath, $destFold.basename($getRemFilePath));
					$errText = '<div class="alert alert-success">'. minipan_file_successfully_moved .'!</div>';
				}
			}else{
				$errText = '<div class="alert alert-danger">'. $errText .'</div>';
				}
	}
	}
	
if(isset($_POST['REMFile'])){ # File Remove Operation

	# Demo Mode Check ****
	if(demo){$errText = '<div class="alert alert-danger">Demo Mode Active!</div>';}else{
	# Demo Mode Check ****

	if(!isset($_POST['fold_name']) || empty($_POST['fold_name'])){$errText = '* '. minipan_system_cannot_catch_of_your_s_elected_file_details .'!<br>';}
	
		if($errText==''){
				$getRemFilePath = $openedFold.'/'.trim($_POST['fold_name']);
				$getRemFilePath = realpath($getRemFilePath);
				
				if (file_exists($getRemFilePath)) {
					unlink($getRemFilePath);
					$errText = '<div class="alert alert-success"><strong>'. trim($_POST['fold_name']) .'</strong> '. minipan_removed_successfully .'!</div>';
				}
			}else{
				$errText = '<div class="alert alert-danger">'. $errText .'</div>';
				}
	}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>miniPAN</title>
<link rel="stylesheet" href="bootstrap/dist/css/normalize.css">
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
<script type="text/javascript" src="Scripts/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="css/pan.css">
</head>

<body class="lister">
<?php if($m==1){ # List Folders?>
	<h2><?php echo(minipan_folders);?></h2>
	<div id="folder-list">
		<?php 
				$dirname = ( isset($_GET['dir']) ) ? $_GET['dir'] : $pan_base.'/';
				
				if($dirname!=$pan_base.'/'){
					session_start();
					$dirname = $pan_base.'/'.$dirname.'/';
					$parent = dirname($_SESSION["PAN"]);
					$parent = str_replace($pan_base.'/','',$parent);
					if($parent!=$pan_base){
						echo('<span class="glyphicon glyphicon-folder-open"></span> <a href="' . $_SERVER['PHP_SELF'] . '?m=1&dir=' . $parent . '">..</a><br>');
					}else{
						echo('<span class="glyphicon glyphicon-folder-open"></span> <a href="' . $_SERVER['PHP_SELF'] . '?m=1">..</a><br>');
					}

				}
				
				
				if( !$dir = opendir($dirname) )
				{
					die(minipan_unable_to_open.": $dirname");
				}

				$file_list = "";

				while( ($file = readdir($dir)) !== false)
				{
					if( ($file != '.') && ($file != '..') )
					{
						if( is_dir($dirname . $file) )
						{
							$dir2 = '';
							$dir2 = $dirname . $file;
							$dir2 = str_replace($pan_base.'/','',$dir2);
							$file_list .= '<span class="glyphicon glyphicon-folder-close"></span> <a href="' . $_SERVER['PHP_SELF'] . '?m=1&dir=' . $dir2 . '">' . $file . '</a><br/>';
						}
						else
						{
							//$file_list .= "<a href=\"$dirname/$file\">$file</a><br/>";
						}
					}
				}

				closedir($dir);
				echo $file_list;
				
							$dir2 = '';
							$dir2 = $dirname . $file;
							$dir2 = str_replace($pan_base.'/','',$dir2);
		?>
		<script>parent.document.getElementById('docList').contentDocument.location = 'lister.php?m=2&dir=<?php echo($dir2);?>';</script>
	</div>
<?php }elseif($m==2){ # List Files
echo($errText);
if(isset($_GET['dir'])){
	echo('
<div id="renameFolder" aria-hidden="true" class="modal fade">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">'. minipan_rename_folder .'</h4>
            </div>
            <div class="modal-body">
            <form role="form" method="POST" action="?m=2&amp;dir='. $_GET['dir'] .'"><div class="input-group"><input name="fnew_name" type="text" value="'. basename($_SESSION['PAN']) .'" class="form-control"><span class="input-group-btn"><button type="submit" name="REN" value="REN" class="btn btn-warning">'. minipan_go .'!</button></span></div></form>
            </div>
        </div>
    </div>
</div>');
	$breadcrumbs = explode("/",$_GET['dir']);
	unset($breadcrumbs[count($breadcrumbs)-1]);
	$foldTree = '<ol class="breadcrumb">';
		if($_GET['dir']==null){
			$foldTree .= '<li class="active">'. $pan_stock_folder .'</li>';
		}else{
			$foldTree .= '<li><a href="javascript:;" onclick="parent.dirList.location.href=\'?m=1\';">'. $pan_stock_folder .'</a></li>';
		}
	$foldScr = "";
	for($i = 0; $i < count($breadcrumbs); $i++){
		if(end($breadcrumbs)!=$breadcrumbs[$i]){
			$foldScr.= $breadcrumbs[$i].'/';
			//$foldScr = substr($foldScr,0,-1);
			$foldTree .= '<li><a href="javascript:;" title="'. substr($foldScr,0,-1) .'" onclick="parent.dirList.location.href=\'?m=1&dir='. substr($foldScr,0,-1) .'\';">'. $breadcrumbs[$i] .'</a></li>';
		}else{
			$foldTree .= '<li class="active">'. $breadcrumbs[$i] .'</li>';
		}
	}
	$foldTree .= '</ol>';
	session_start();
	$foldTree .= '<div id="folder-info" class="panel"><span class="label label-info">'. minipan_total_file .': 0</span> <span class="label label-warning">'. minipan_total_size .': '. bytesToSize1024(filesize_r($_SESSION['PAN'])) .'</span> ';
	$foldTree .= '
<div class="btn-group">
  <button type="button" class="btn btn-danger btn-xs">'. minipan_action .'</button>
  <button type="button" class="btn btn-danger dropdown-toggle btn-xs" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu pull-right" role="menu">
    <li><a href="javascript:;" data-toggle="modal" data-target="#renameFolder">'. minipan_rename_folder .'</a></li>
    <li><a href="javascript:;" onclick="if (confirm(\''. minipan_all_files_will_be_d_eleted .'\n'. minipan_are_you_sure_to_d_elete_this_folder .'?\')) window.location=\'?m=2&amp;DEL=yes&amp;dir='. @$_GET['dir'] .'\'; return false;">'. minipan_d_elete_folder .'</a></li>
  </ul>
</div>
	';
	$foldTree .= '</div>';
}
?>
<?php echo($foldTree);?>

<!-- List Files -->
<?php
$dirname = $_SESSION['PAN'];
				if( !$dir = opendir($dirname) )
				{
					die(minipan_unable_to_open.": $dirname");
				}
				
if($lty==0){
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped table-hover">
<thead>
  <tr>
	<th width="2%">#</th>
    <th width="20%"><?php echo(minipan_name);?></th>
    <th width="5%"><?php echo(minipan_size);?></th>
    <th width="5%"><?php echo(minipan_type);?></th>
    <th width="10%"><?php echo(minipan_date);?></th>
  </tr>
</thead>
<tbody>
<?php 
$files = array();
$fcnt = 0;
				while( ($file = readdir($dir)) !== false)
				{
					if( ($file != '.') && ($file != '..') )
					{
						if(!is_dir($dirname .'/'. $file) )
						{
						$fcnt++;
						$files[]=array('ft'=>filemtime($dirname .'/'. $file),'fn'=>$file,'fp'=>$dirname .'/'. $file,'fe'=>pathinfo($dirname .'/'. $file, PATHINFO_EXTENSION),'fs'=>filesize_r($dirname .'/'. $file));   #2-D array
						}}}
closedir($dir);

if ($files){
//print_r($files);
  # Sort by Name
  if($sty==0){$sort_array[0]['name'] = "fn";}
  # Sort by Size
  if($sty==1){$sort_array[0]['name'] = "fs";}
  # Sort by Type
  if($sty==2){$sort_array[0]['name'] = "fe";}
  # Sort by Date
  if($sty==3){$sort_array[0]['name'] = "ft";}

  # Sort Type
  if($stym==0){$sort_array[0]['sort'] = "ASC";}else{$sort_array[0]['sort'] = "DESC";}
  
  $sort_array[0]['case'] = true;

sortx($files, $sort_array);
$x = 0;
foreach($files as $file) {
	$info = pathinfo($file['fp']);
?>
  <tr>
	<td>
<div class="dropdown">
  <a data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span></a>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
	<li><a href="#" data-toggle="modal" data-target="#renameFile<?php echo($x);?>"><span class="glyphicon glyphicon-edit"></span> <?php echo(minipan_rename);?></a></li>
	<li><a href="#" data-toggle="modal" data-target="#moveFile<?php echo($x);?>"><span class="glyphicon glyphicon-share"></span> <?php echo(minipan_move);?></a></li>
	<li class="divider"></li>
	<li><a href="#" data-toggle="modal" data-target="#delFile<?php echo($x);?>"><span class="glyphicon glyphicon-trash"></span> <?php echo(minipan_remove);?></a></li>
  </ul>
</div>

	</td>
    <td><a href="javascript:void(0);" onclick="parent.pan('<?php echo($_SESSION["PANF"]);?>','<?php echo($_SESSION["PANL"]);?>','<?php echo(getFileUrl($file['fp']));?>','<?php if(isImg($file['fp'])){echo('img');}else{echo('doc');}?>','<?php echo($_SESSION["PANP"])?>','<?php echo($_SESSION["PANO"]);?>');"><?php echo($file['fn']);?></a></td>
    <td><small><?php echo(bytesToSize1024(filesize_r($file['fp'])));?></small></td>
    <td><small><?php echo($file['fe']);?></small></td>
    <td><small><?php echo(date ("d.m.Y H:i", $file['ft']));?></small>
    
    
<!-- Edit Area -->
<div id="renameFile<?php echo($x);?>" aria-hidden="true" class="modal fade">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><?php echo(minipan_rename_file);?></h4>
            </div>
            <div class="modal-body">
           		<form role="form" method="POST" action="?m=2&amp;dir=<?php echo($_GET['dir']);?>">
                <input type="hidden" name="fold_name" value="<?php echo($file['fn']);?>">
                	<div class="input-group">
                    	<input name="fnew_name" type="text" value="<?php echo(basename($file['fp'], '.'.$info['extension']));?>" class="form-control">
                        	<span class="input-group-btn"><button type="submit" name="RENFile" value="RENFile" class="btn btn-warning"><?php echo(minipan_go);?>!</button></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="moveFile<?php echo($x);?>" aria-hidden="true" class="modal fade">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><?php echo(minipan_move_file);?></h4>
            </div>
            <div class="modal-body">
           		<form role="form" method="POST" action="?m=2&amp;dir=<?php echo($_GET['dir']);?>">
                <input type="hidden" name="fold_name" value="<?php echo($file['fn']);?>">
                	<div class="input-group">
                        <select name="folderList" class="form-control"><?php echo(ListFolder($pan_base));?></select>
                        	<span class="input-group-btn"><button type="submit" name="MOVFile" value="MOVFile" class="btn btn-warning"><?php echo(minipan_go);?>!</button></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="delFile<?php echo($x);?>" aria-hidden="true" class="modal fade">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><?php echo(minipan_remove_file);?></h4>
            </div>
            <div class="modal-body" style="text-align:center;">
           		<form role="form" method="POST" action="?m=2&amp;dir=<?php echo($_GET['dir']);?>">
                <input type="hidden" name="fold_name" value="<?php echo($file['fn']);?>">
                        <?php echo(minipan_are_you_sure_to_delete);?> <strong><?php echo($file['fn']);?></strong><br><br>
                        <button type="submit" name="REMFile" value="REMFile" class="btn btn-danger"><?php echo(minipan_yes);?></button> <button type="button" data-dismiss="modal" name="ABTFile" value="ABTFile" class="btn btn-default"><?php echo(minipan_no);?></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Area End -->
    </td>
  </tr>
<?php $x++;}}?>
</tbody>
</table>
<?php echo('<script type="text/javascript">$(document).ready(function() {$("#folder-info span.label-info").html("'. minipan_total_file .': '. $fcnt .'");});</script>');}else{ # List By Icons
$files = array(); 
$fcnt = 0;
				while( ($file = readdir($dir)) !== false)
				{
					if( ($file != '.') && ($file != '..') )
					{
						if(!is_dir($dirname .'/'. $file) )
						{
						$fcnt++;
						$files[]=array('ft'=>filemtime($dirname .'/'. $file),'fn'=>$file,'fp'=>$dirname .'/'. $file,'fe'=>pathinfo($dirname .'/'. $file, PATHINFO_EXTENSION),'fs'=>filesize_r($dirname .'/'. $file));   #2-D array
						}}}
closedir($dir);

if ($files){
//print_r($files);
  # Sort by Name
  if($sty==0){$sort_array[0]['name'] = "fn";}
  # Sort by Size
  if($sty==1){$sort_array[0]['name'] = "fs";}
  # Sort by Type
  if($sty==2){$sort_array[0]['name'] = "fe";}
  # Sort by Date
  if($sty==3){$sort_array[0]['name'] = "ft";}

  # Sort Type
  if($stym==0){$sort_array[0]['sort'] = "ASC";}else{$sort_array[0]['sort'] = "DESC";}
  
  $sort_array[0]['case'] = true;

sortx($files, $sort_array);
$x = 0;
foreach($files as $file) {
$web_path = $file['fp'];
$web_path = str_replace($_SERVER['DOCUMENT_ROOT'],'',$web_path);
$info = pathinfo($file['fp']);
	?>
<div class="list-item-box">
<div class="list-item-pic"><?php if(isImg($file['fp'])){?><a href="javascript:void(0);" onclick="parent.pan('<?php echo($_SESSION["PANF"]);?>','<?php echo($_SESSION["PANL"]);?>','<?php echo(getFileUrl($file['fp']));?>','<?php if(isImg($file['fp'])){echo('img');}else{echo('doc');}?>','<?php echo($_SESSION["PANP"])?>','<?php echo($_SESSION["PANO"]);?>');"><img src="<?php echo($web_path);?>" alt=""></a><?php }else{?><a href="javascript:void(0);" onclick="parent.pan('<?php echo($_SESSION["PANF"]);?>','<?php echo($_SESSION["PANL"]);?>','<?php echo(getFileUrl($file['fp']));?>','<?php if(isImg($file['fp'])){echo('img');}else{echo('doc');}?>','<?php echo($_SESSION["PANP"])?>','<?php echo($_SESSION["PANO"]);?>');" class="file-icons file-icon-<?php echo($file['fe']);?>"></a><?php }?></div>
<div class="list-item-name"><a href="javascript:void(0);" onclick="parent.pan('<?php echo($_SESSION["PANF"]);?>','<?php echo($_SESSION["PANL"]);?>','<?php echo(getFileUrl($file['fp']));?>','<?php if(isImg($file['fp'])){echo('img');}else{echo('doc');}?>','<?php echo($_SESSION["PANP"])?>','<?php echo($_SESSION["PANO"]);?>');"><?php echo($file['fn']);?></a></div>
<div class="list-item-size"><small><?php echo(bytesToSize1024(filesize_r($file['fp'])));?></small></div>
<div class="list-item-date"><small><?php echo(date ("d.m.Y H:i", $file['ft']));?></small></div>
<div class="list-item-control">
<div class="dropdown">
  <a data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span></a>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
	<li><a href="#" data-toggle="modal" data-target="#renameFile<?php echo($x);?>"><span class="glyphicon glyphicon-edit"></span> <?php echo(minipan_rename);?></a></li>
	<li><a href="#" data-toggle="modal" data-target="#moveFile<?php echo($x);?>"><span class="glyphicon glyphicon-share"></span> <?php echo(minipan_move);?></a></li>
	<li class="divider"></li>
	<li><a href="#" data-toggle="modal" data-target="#delFile<?php echo($x);?>"><span class="glyphicon glyphicon-trash"></span> <?php echo(minipan_remove);?></a></li>
  </ul>
</div>
</div>
</div>
<!-- Edit Area -->
<div id="renameFile<?php echo($x);?>" aria-hidden="true" class="modal fade">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><?php echo(minipan_rename_file);?></h4>
            </div>
            <div class="modal-body">
           		<form role="form" method="POST" action="?m=2&amp;dir=<?php echo($_GET['dir']);?>">
                <input type="hidden" name="fold_name" value="<?php echo($file['fn']);?>">
                	<div class="input-group">
                    	<input name="fnew_name" type="text" value="<?php echo(basename($file['fp'], '.'.$info['extension']));?>" class="form-control">
                        	<span class="input-group-btn"><button type="submit" name="RENFile" value="RENFile" class="btn btn-warning"><?php echo(minipan_go);?>!</button></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="moveFile<?php echo($x);?>" aria-hidden="true" class="modal fade">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><?php echo(minipan_move_file);?></h4>
            </div>
            <div class="modal-body">
           		<form role="form" method="POST" action="?m=2&amp;dir=<?php echo($_GET['dir']);?>">
                <input type="hidden" name="fold_name" value="<?php echo($file['fn']);?>">
                	<div class="input-group">
                        <select name="folderList" class="form-control"><?php echo(ListFolder($pan_base));?></select>
                        	<span class="input-group-btn"><button type="submit" name="MOVFile" value="MOVFile" class="btn btn-warning"><?php echo(minipan_go);?>!</button></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="delFile<?php echo($x);?>" aria-hidden="true" class="modal fade">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><?php echo(minipan_remove_file);?></h4>
            </div>
            <div class="modal-body" style="text-align:center;">
           		<form role="form" method="POST" action="?m=2&amp;dir=<?php echo($_GET['dir']);?>">
                <input type="hidden" name="fold_name" value="<?php echo($file['fn']);?>">
                        <?php echo(minipan_are_you_sure_to_delete);?> <strong><?php echo($file['fn']);?></strong><br><br>
                        <button type="submit" name="REMFile" value="REMFile" class="btn btn-danger"><?php echo(minipan_yes);?></button> <button type="button" data-dismiss="modal" name="ABTFile" value="ABTFile" class="btn btn-default"><?php echo(minipan_no);?></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Area End -->
<?php $x++;}} echo('<div class="clearfix"></div><script type="text/javascript">$(document).ready(function() {$("#folder-info span.label-info").html("'. minipan_total_file .': '. $fcnt .'");});</script>'); }?>

<!-- List Files -->
<?php }?>

<!-- Page End -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="Scripts/pan.js"></script>
</body>
</html>
