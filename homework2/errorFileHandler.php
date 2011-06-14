<?php

include ("class_filehandler_lib.php");

$directory = getcwd();
$errorLog = new ErrorFileHandler($directory);
$errorLog->add_to_error_log("Error Testing");


/*Used For Testing Purposes
echo "File name: ".$errorLog->get_file_name()."\n";
echo "Directory name: ".$errorLog->get_directory()."\n";
echo "Full path: ".$errorLog->get_full_path()."\n";
*/

?>
