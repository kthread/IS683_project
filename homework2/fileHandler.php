<?php

include("class_filehandler_lib.php");

$content = array("a","b","c","d");

$directory = getcwd();
$log = new FileHandler($directory);
$log->myfile_exists("dummy");
$myfile = "array_content";
$log->write_array_to_file($myfile, $content);


/*Used For Testing Purposes
echo "File name: ".$errorLog->get_file_name()."\n";
echo "Directory name: ".$errorLog->get_directory()."\n";
echo "Full path: ".$errorLog->get_full_path()."\n";
*/

?>
