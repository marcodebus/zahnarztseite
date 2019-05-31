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
include_once('configs.php');include_once('functions.php');
if(!isset($_GET['m'])){$m=0;}else{$m=intval($_GET['m']);}
if($m==0){die(minipan_error_occured);}
$errText = '';

if($m==1){ # Create Folder
	# Demo Mode Check ****
	if(demo){echo json_encode(array('returned_val' => '<div class="alert alert-danger">Demo Mode Active!</div>','dataP'=>'0'));}else{
	# Demo Mode Check ****
	$dest_dir = "";
	session_start();
	$dest_dir = $_SESSION['PAN'];
	if(!isset($_POST['folder_name']) || empty($_POST['folder_name'])){$errText = '* '. minipan_please_enter_a_folder_name .'<br>';}
		else{
				# Checking Existed Folders
				$newFolder = uTagFold($_POST['folder_name']);
				if(file_exists($dest_dir.'/'.$newFolder)){$errText .= '* '. minipan_folder_already_exists .'<br>';} # Create Folder If not Exists
				}
	
	if($errText == ''){	
		mkdir($dest_dir.'/'.$newFolder, 0755);
		echo json_encode(array('returned_val' => '<div class="alert alert-success">'. minipan_folder_created_success .'!</div>','dataP'=>'1'));
	}else{
		echo json_encode(array('returned_val' => '<div class="alert alert-danger">'. $errText .'</div>','dataP'=>'0'));
	}
	}
}
?>