<?php

function myfile_exists($filename) {
    // check if file exists
    if (file_exists($filename))
      echo "File $filename exists.\r\n";
    else
      echo "File $filename does not exist.\r\n";
}

function directory_exists($dirname) {
    // check if directory exists
    if (is_dir($dirname))
      echo "Directory $dirname exists.\r\n";
    else
      echo "Directory $dirname does not exist.\r\n";
}
    
function file_readable($filename) {
    // check if file is readable
    if (!file_exists($filename))
      echo "File $filename does not exist.\r\n";
    elseif (is_readable($filename))
      echo "File $filename is readable.\r\n";
    else
      echo "File $filename is not readable.\r\n";
}

function file_writable($filename) {
    // check if file is writable
    if (!file_exists($filename))
      echo "File $filename does not exist.\r\n";
    elseif (is_writable($filename))
      echo "File $filename is writable.\r\n";
    else
      echo "File $filename is not writable.\r\n";
}
    
function directory_readable($dirname) {
    // check if directory exists and is readable
    if (!is_dir($dirname))
      echo "Directory $dirname does not exist.\r\n";
    elseif (!is_readable($dirname))
      echo "Directory $dirname is not readable.\r\n";
    else
      echo "Directory $dirname is readable.\r\n";
}

function delete_file($filename) {
    // check if file exists and is writable
    if (!file_exists($filename)) 
      echo "File $filename does not exist.\r\n";
    elseif (!is_writable($filename))
      echo "File $filename is not writable.\r\n";
    else
      unlink($filename);
}
    
function write_array_to_csv($filename, $fields_array) {
    $fileparts = explode(".", $filename);
    $fext = $fileparts[1];
    if ($fext != "csv")
       echo "Incorrect file extension - should be .csv\r\n";
    // check if file exists and is not writable
    elseif (file_exists($filename) && !is_writable($filename)) 
      echo "File $filename is not writable.\r\n";
    else {
       $fh = fopen($filename, 'w');
       fputcsv($fh, $fields_array);
       fclose($fh);
    }
}
    
function write_csv_to_array($filename) {
    $fileparts = explode(".", $filename);
    $fext = $fileparts[1];
    if ($fext != "csv")
       echo "Incorrect file extension - should be .csv\r\n";
    // check if file exists and is not readable
    elseif (file_exists($filename) && !is_readable($filename)) 
      echo "File $filename is not readable.\r\n";
    else {
       $fh = fopen($filename, 'r');
       $fields_array = array();
       $fields_array = fgetcsv($fh, filesize($filename));
       fclose($fh);
       return $fields_array;
    }
}
    
function list_files($dirname) {
    // check if directory exists and is readable
    $fields_array = array();
    if (!is_dir($dirname))
      echo "Directory $dirname does not exists.\r\n";
    elseif (!is_readable($dirname))
      echo "Directory $dirname is not readable.\r\n";
    else {
       $i = 0;
       foreach (glob("$dirname/*.*") as $filename) {
          $fields_array[$i] = basename($filename);
          $i++;
       }
    }
    return $fields_array;
}
    
function append_to_file($filename, $mytext) {
    // check if file exists and is not writable
    if (file_exists($filename) && !is_writable($filename))
      echo "File $filename is not writable.\r\n";
    else {
       $fh = fopen($filename, 'a');
       fwrite($fh, $mytext);
       fclose($fh);
    }
}
    
function write_array_to_file($filename, $myarray) {
    // check if file exists and is not writable
    if (file_exists($filename) && !is_writable($filename))
      echo "File $filename is not writable.\r\n";
    else {
       $fh = fopen($filename, 'w');
       foreach ($myarray as $element) {
          fwrite($fh, "$element\n");
       }
       fclose($fh);
    }
}
    
function write_data_to_file() {
    $numArgs = func_num_args(); 
    $args = func_get_args();
    $filename = $args[0];
    // check if file exists and is not writable
    if (file_exists($filename) && !is_writable($filename)) 
      echo "File $filename is not writable.\r\n";
    else {
       $fh = fopen($filename, 'w');
       for ($i = 1; $i < $numArgs; $i++) { 
          fwrite($fh, "$args[$i]\n");
       }
       fclose($fh);
    }
}
    
function create_directory($dirname) {
    mkdir($dirname);
}
    

?>

