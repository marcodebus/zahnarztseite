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
include_once('configs.php');include_once('functions.php');include_once('class.upload.php');
$errText = '{"status":"error"}';
if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){
	
	# Demo Mode Check ****
	if(demo){$errText = '<div class="alert alert-danger">Demo Mode Active!</div>';}else{
	# Demo Mode Check ****

			# *************** Uploading Start *******************
			$file_name = null; # If you wanna use custom file name change this value
			//$dest = $pan_base; # Upload in base directory
			session_start();
			$dest = $_SESSION["PAN"];
			
			#Image Upload
			if($_FILES["upl"]["error"]==0){
				$handle = new upload($_FILES['upl'],'en_EN');
				
			if ($handle->uploaded) {
				$handle->file_new_name_body   = $file_name;
				$handle->file_safe_name = pan_set_safename;
				$handle->mime_check = pan_set_mimecheck;
				$handle->file_overwrite = pan_set_overwrite;
				$handle->file_auto_rename = pan_set_autorename;
				$handle->allowed = $upl_allow_files; //*
				$handle->file_max_size = pan_set_max_file_size;
										
						
			//** Processing
			$handle->process($dest);
			if ($handle->processed) { # Uploaded
					$errText = '<div class="alert alert-success">'. minipan_uploaded_success .'</div>';
					$handle->clean();
				}
			else{ # Uploading Error
					$errText = '<div class="alert alert-danger">'. $handle->error .'</div>';
				}
			# Uploading Finished
		
				}
										
			
			}else{
				$errText = '<div class="alert alert-danger">'. minipan_error_occured .'</div>';
				}
			
}
}
echo $errText;
exit;
?>