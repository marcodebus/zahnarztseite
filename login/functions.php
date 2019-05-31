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
# File Name Filter
function uTagFold($gelen){
			$search  = array('ş', 'Ş', 'ç', 'Ç', 'ü','Ü','ğ','Ğ','ö','Ö','İ','ı');
			$replace  = array('s', 's', 'c', 'c', 'u','u','g','g','o','o','i','i');
			$gelen = str_replace($search, $replace, $gelen);
			$gelen = preg_replace('/[^a-zA-Z0-9]/s', '_', $gelen);
			$gelen = strtolower($gelen);			
			return $gelen;
	}
	
# Folder Deleting with sub entries
function deleteAll($directory, $empty = false) {
    if(substr($directory,-1) == "/") {
        $directory = substr($directory,0,-1);
    }

    if(!file_exists($directory) || !is_dir($directory)) {
        return false;
    } elseif(!is_readable($directory)) {
        return false;
    } else {
        $directoryHandle = opendir($directory);
       
        while ($contents = readdir($directoryHandle)) {
            if($contents != '.' && $contents != '..') {
                $path = $directory . "/" . $contents;
               
                if(is_dir($path)) {
                    deleteAll($path);
                } else {
                    unlink($path);
                }
            }
        }
       
        closedir($directoryHandle);

        if($empty == false) {
            if(!rmdir($directory)) {
                return false;
            }
        }
       
        return true;
    }
}

# Folder Size
 function filesize_r($path){
  if(!file_exists($path)) return 0;
  if(is_file($path)) return filesize($path);
  $ret = 0;
  foreach(glob($path."/*") as $fn)
    $ret += filesize_r($fn);
  return $ret;
}

# ** Get File Size
function bytesToSize1024($size, $unit = null, $decemals = 2) {
    $byteUnits = array('B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
    if (!is_null($unit) && !in_array($unit, $byteUnits)) {
        $unit = null;
    }
    $extent = 1;
    foreach ($byteUnits as $rank) {
        if ((is_null($unit) && ($size < $extent <<= 10)) || ($rank == $unit)) {
            break;
        }
    }
    return number_format($size / ($extent >> 10), $decemals) . $rank;
}

function bytesToSize1024_old($bytes, $precision = 2)
{
    // human readable format -- powers of 1024

    $unit = array('B','KB','MB','GB','TB','PB','EB');

    return @round(
        $bytes / pow(1024, ($i = floor(log($bytes, 1024)))), $precision
    ).' '.$unit[$i];
}

# ** Clear Directory Request
function clearDir($v){
	global $pan_stock_folder;
	$v = str_replace('..','',$v);
	$v = str_replace('.','',$v);
	$v = str_replace(':/','',$v);
	$v = str_replace(':\\','',$v);
	return $v;
}

# ** Array Sorting
  function sortx(&$array, $sort = array()) {
    $function = '';
    while (list($key) = each($sort)) {
      if (isset($sort[$key]['case'])&&($sort[$key]['case'] == TRUE)) {
        $function .= 'if (strtolower($a["' . $sort[$key]['name'] . '"])<>strtolower($b["' . $sort[$key]['name'] . '"])) { return (strtolower($a["' . $sort[$key]['name'] . '"]) ';
      } else {
        $function .= 'if ($a["' . $sort[$key]['name'] . '"]<>$b["' . $sort[$key]['name'] . '"]) { return ($a["' . $sort[$key]['name'] . '"] ';
      }
      if (isset($sort[$key]['sort'])&&($sort[$key]['sort'] == "DESC")) {
        $function .= '<';
      } else {
        $function .= '>';
      }
      if (isset($sort[$key]['case'])&&($sort[$key]['case'] == TRUE)) {
        $function .= ' strtolower($b["' . $sort[$key]['name'] . '"])) ? 1 : -1; } else';
      } else {
        $function .= ' $b["' . $sort[$key]['name'] . '"]) ? 1 : -1; } else';
      }
    }
    $function .= ' { return 0; }';
    usort($array, create_function('$a, $b', $function));
  }
  
# ** Check If Image File
function isImg($v){
	
	if (exif_imagetype($v) != IMAGETYPE_GIF && exif_imagetype($v) != IMAGETYPE_JPEG && exif_imagetype($v) != IMAGETYPE_PNG && exif_imagetype($v) != IMAGETYPE_BMP) {return false;}
	else{return true;}
	
	}
	
# ** Directory Chooicer
function ListFolder($path,$dot='',$sel='')
{
	global $pan_base;
    //using the opendir function
    $dir_handle = @opendir($path) or die("Unable to open $path");
   
    //Leave only the lastest folder name
    $dirname = end(explode("/", $path));
   
    //display the target folder.
	$path_info = realpath($path);
	$path_info = str_replace(realpath($pan_base).'\\','',$path_info);
	$path_info = str_replace('\\','/',$path_info);
	if($path_info==$pan_base){$path_info=basename($path_info);}
    echo ('<option value="'. $path_info .'">'. $dot .' '. basename($path) .'</option>');

    while (false !== ($file = readdir($dir_handle)))
    {
        if($file!="." && $file!="..")
        {
            if (is_dir($path."/".$file))
            {
                //Display a list of sub folders.
                ListFolder($path."/".$file,$dot.='..');
				$dot = '';
            }
            else
            {
                //Display a list of files.
                //echo "<option>$file</option>";
            }
        }
    }   
    //closing the directory
    closedir($dir_handle);
}

function url(){
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'];
}

# ** URL Function
function getFileUrl($v){
	$v = str_replace($_SERVER['DOCUMENT_ROOT'],'',$v);
	$v = str_replace('//','/',$v);
	$v = url() . $v;
	return $v;
	}
?>