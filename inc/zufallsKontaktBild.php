
<?php
 
  function rotate($folder) {
    $list = scandir($folder);
    $fileList = array();
    $img = '';
    foreach ($list as $file) {
      if (is_file($folder . '/' . $file)) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if ($ext == 'gif' || $ext == 'jpeg' || $ext == 'jpg' || $ext == 'png') {
          $fileList[] = $file;
        }
      }
    }
    if (count($fileList) > 0) {
      $imageNumber = time() % count($fileList);
      $img = $folder . '/' . $fileList[$imageNumber];
    }
	  
	  
	  
    return $img;
	  
  }
?>









