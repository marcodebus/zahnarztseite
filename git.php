<?php
function execPrint($command) {
    $result = array();
    exec($command, $result);
    foreach ($result as $line) {
        print($line . "\n");
    }
}
// Print the exec output inside of a pre element
print("<pre>" . execPrint("git pull https://marcodebus:Marcokite2@github.com/marcodebus/zahnarztseite.git master") . "</pre>");


//testcode....
?>