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
error_reporting(E_ALL);
ob_start();
header('Content-Type: text/html; charset=utf-8');
define('demo',0); # If you working on live project mark it to "0"
$pan_stock_folder = "resources"; # Main storage folder, if its not in root, folder name must be 'parent_folder/resources'
$pan_base = $_SERVER['DOCUMENT_ROOT'] . '/' . $pan_stock_folder;
if(!file_exists($pan_base)){mkdir($pan_base, 0755);} # Create Folder If not Exists
$realBase = realpath($pan_base);


# ** Language
include_once('lang/pan-en.php'); # Language variables

# ** Settings
define('pan_set_file_print',10); # number of the one page file list
define('pan_set_safename',1); # formats the filename (spaces changed to _) 
define('pan_set_mimecheck',1); # sets if the class check the MIME against the allowed list 
define('pan_set_overwrite',0); # 0 - Overwrite Off // 1 - Overwrite On
define('pan_set_autorename',0); # 0 - Auto Rename Off // 1 - Auto Rename On
define('pan_set_max_file_size','16097152'); # Maximum Uploaded File Size Default (2097152 byte = 2 MB)
$upl_allow_files = array('image/gif','image/jpeg','image/jpeg','image/png'); # Allowed file mime types (Full List: http://www.iana.org/assignments/media-types/media-types.xhtml)
?>