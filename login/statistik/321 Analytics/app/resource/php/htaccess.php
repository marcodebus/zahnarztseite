<?php 

	if (!file_exists(".htaccess"))
	{
		$htaccess = fopen(".htaccess","w");

		fwrite($htaccess,"RewriteEngine On\n\nRewriteBase " . $application_path . "\n\nRewriteCond %{REQUEST_FILENAME} -f\nRewriteRule \.([^/]*)$ - [L]\n\nRewriteCond %{REQUEST_FILENAME} !-f\nRewriteCond %{REQUEST_FILENAME} !-d\n\nRewriteRule \"^([^/]*)$\" \"index.php?lang=$1&content=index\" [NC,QSA]\nRewriteRule \"^([^/]*)/$\" \"index.php?lang=$1&content=index\" [NC,QSA]\n\nRewriteRule \"^([^/]*)/([^/]*)$\" \"index.php?lang=$1&content=$2\" [NC,QSA]\nRewriteRule \"^([^/]*)/([^/]*)/$\" \"index.php?lang=$1&content=$2\" [NC,QSA]\n\nRewriteRule \"^([^/]*)/([^/]*)/([^/]*)$\" \"index.php?lang=$1&content=$2&subcontent=$3\" [NC,QSA]\nRewriteRule \"^([^/]*)/([^/]*)/([^/]*)/$\" \"index.php?lang=$1&content=$2&subcontent=$3\" [NC,QSA]\n\nRewriteRule \"^([^/]*)/([^/]*)/([^/]*)/([^/]*)$\" \"index.php?lang=$1&content=$2&subcontent=$3&subsubcontent=$4\" [NC,QSA]\nRewriteRule \"^([^/]*)/([^/]*)/([^/]*)/([^/]*)/$\" \"index.php?lang=$1&content=$2&subcontent=$3&subsubcontent=$4\" [NC,QSA]\n\nRewriteRule \"^([^/]*)/([^/]*)/([^/]*)/([^/]*)/([^/]*)$\" \"index.php?lang=$1&content=$2&subcontent=$3&subsubcontent=$4&subsubsubcontent=$5\" [NC,QSA]\nRewriteRule \"^([^/]*)/([^/]*)/([^/]*)/([^/]*)/([^/]*)/$\" \"index.php?lang=$1&content=$2&subcontent=$3&subsubcontent=$4&subsubsubcontent=$5\" [NC,QSA]\n\nRewriteRule \"^([^/]*)/([^/]*)/([^/]*)/([^/]*)/([^/]*)/([^/]*)$\" \"index.php?lang=$1&content=$2&subcontent=$3&subsubcontent=$4&subsubsubcontent=$5&subsubsubsubcontent=$6\" [NC,QSA]\nRewriteRule \"^([^/]*)/([^/]*)/([^/]*)/([^/]*)/([^/]*)/([^/]*)/$\" \"index.php?lang=$1&content=$2&subcontent=$3&subsubcontent=$4&subsubsubcontent=$5&subsubsubsubcontent=$6\" [NC,QSA]");

		fclose($htaccess);
	} 

?>