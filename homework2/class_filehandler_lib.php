<?php
/*
 *PHP Library used for the handling of files
*/

class FileHandler{
  
  protected $fileName;
  protected $directoryName;
  protected $fullFileLocation;
  protected $errorMessage;
  protected $errorLog;

  /*Creates the directory and log file for error handling*/
  public function __construct($log){

    $directory = "log";
    $logFileName = "log.txt";

    $this->create_directory($log."/".$directory);

//    if(!($this->directory_found($log."/".$directory))){
//      //$this->create_directory("log");
//    }
    
    $this->fileName = $logFileName;
    $this->directoryName = $log."/".$directory;
    $this->fullFileLocation = $log."/".$directory."/".$logFileName;    
 
    $this->errorLog = new ErrorFileHandler($this->directoryName);

  } 
  

public function myfile_exists($filename) {
    // check if file exists
    if (file_exists($filename))
      return true;
    else {
      $this->errorMessage = "Error (myfile_exists): File (".$filename.") does not exist.";
      $this->errorLog->add_to_error_log($this->errorMessage);
      return false;
    }
}

public function directory_exists($dirname) {
    // check if directory exists
    if (is_dir($dirname))
      return true;
    else {
      $this->errorMessage = "Error (directory_exists): Directory (".$dirname.") does not exist.";
      $this->errorLog->add_to_error_log($this->errorMessage);
      return false;
    }
}
    
public function file_writable() {
    // check if file is writable
    if (!file_exists($this->fullFileLocation)) {
      $this->errorMessage = "Error (file_writable): File (".$this->fullFileLocation.") does not exist.";
      $this->errorLog->add_to_error_log($this->errorMessage);
      return false;
    } elseif (!is_writable($this->fullFileLocation)) {
      $this->errorMessage = "Error (file_writable): File (".$this->fullFileLocation.") is not writable.";
      $this->errorLog->add_to_error_log($this->errorMessage);
      return false;
    } else
      return true;
}
    
public function file_readable() {
    // check if file is readable
    if (!file_exists($this->fullFileLocation)) {
      $this->errorMessage = "Error (file_readable): File (".$this->fullFileLocation.") does not exist.";
      $this->errorLog->add_to_error_log($this->errorMessage);
      return false;
    } elseif (!is_readable($this->fullFileLocation)) {
      $this->errorMessage = "Error (file_readable): File (".$this->fullFileLocation.") is not readable.";
      $this->errorLog->add_to_error_log($this->errorMessage);
      return false;
    } else
      return true;
}
    
public function directory_writable() {
    // check if directory exists and is writable
    if (!is_dir($this->directoryName)) {
      $this->errorMessage = "Error (directory_writable): Directory (".$this->directoryName.") does not exist.";
      $this->errorLog->add_to_error_log($this->errorMessage);
      return false;
    } elseif (!is_writable($this->directoryName)) {
      $this->errorMessage = "Error (directory_writable): Directory (".$this->directoryName.") is not writable.";
      $this->errorLog->add_to_error_log($this->errorMessage);
      return false;
    } else
      return true;
}

public function directory_readable() {
    // check if directory exists and is readable
    if (!is_dir($this->directoryName)) {
      $this->errorMessage = "Error (directory_readable): Directory (".$this->directoryName.") does not exist.";
      $this->errorLog->add_to_error_log($this->errorMessage);
      return false;
    } elseif (!is_readable($this->directoryName)) {
      $this->errorMessage = "Error (directory_readable): Directory (".$this->directoryName.") is not readable.";
      $this->errorLog->add_to_error_log($this->errorMessage);
      return false;
    } else
      return true;
}

public function delete_file() {
    // check if file exists and is writable
    if (!file_exists($this->fullFileLocation)) {
      $this->errorMessage = "Error (delete_file): Directory (".$this->fullFileLocation.") does not exist.";
      $this->errorLog->add_to_error_log($this->errorMessage);
      return false;
    } elseif (!is_writable($this->fullFileLocation)) {
      $this->errorMessage = "Error (delete_file): Directory (".$this->fullFileLocation.") is not writable.";
      $this->errorLog->add_to_error_log($this->errorMessage);
      return false;
    } else {
      echo "Deleting $this->fullFileLocation.\r\n";
      unlink($this->fullFileLocation);
    }
}
    
public function create_directory($directoryName) {
    // create directory if it does not exist
    if(!file_exists($directoryName))
       mkdir($directoryName);
}
    
public function write_array_to_csv($filename, $fields_array) {
    $fileparts = explode(".", $filename);
    $fext = $fileparts[1];
    if ($fext != "csv") {
       $this->errorMessage = "Error (write_array_to_csv): Incorrect file extension - should be .csv";
       $this->errorLog->add_to_error_log($this->errorMessage);
    // check if file exists and is not writable
    } elseif (file_exists($filename) && !is_writable($filename))  {
       $this->errorMessage = "Error (write_array_to_csv): File (".$filename.") is not writable.";
       $this->errorLog->add_to_error_log($this->errorMessage);
    } else {
       echo "Writing array to $filename";
       $fh = fopen($filename, 'w');
       fputcsv($fh, $fields_array);
       fclose($fh);
    }
}
    
public function write_csv_to_array($filename) {
    $fileparts = explode(".", $filename);
    $fext = $fileparts[1];
    if ($fext != "csv") {
       $this->errorMessage = "Error (write_csv_to_array): Incorrect file extension - should be .csv";
       $this->errorLog->add_to_error_log($this->errorMessage);
    // check if file exists and is not readable
    } elseif (file_exists($filename) && !is_readable($filename)) {
       $this->errorMessage = "Error (write_csv_to_array): File (".$filename.") is not readable.";
       $this->errorLog->add_to_error_log($this->errorMessage);
    } else {
       $fh = fopen($filename, 'r');
       $fields_array = array();
       $fields_array = fgetcsv($fh, filesize($filename));
       fclose($fh);
       return $fields_array;
    }
}
    
public function list_files($dirname) {
    // check if directory exists and is readable
    if (!is_dir($dirname)) {
      $this->errorMessage = "Error (list_files): Directory (".$dirname.") does not exist.";
      $this->errorLog->add_to_error_log($this->errorMessage);
    } elseif (!is_readable($dirname)) {
      $this->errorMessage = "Error (list_files): Directory (".$dirname.") is not readable.";
      $this->errorLog->add_to_error_log($this->errorMessage);
    } else {
       if ($dh = opendir($dirname)) {
          if (($filename = readdir($dh)) === false) {
             $this->errorMessage = "Error (list_files): There are no files in (".$dirname.")";
             $this->errorLog->add_to_error_log($this->errorMessage);
          } else {
             echo "The files in $dirname are: \n";
             echo "filename: $filename " . "\n";
          }
          while (($filename = readdir($dh)) !== false) {
             if(filetype($dirname . "/" . $filename) !== "dir")
                echo "filename: $filename " . "\n";
          }
          closedir($dh);
       }
    }
}
    
public function append_to_file($filename, $mytext) {
    // check if file exists and is not writable
    if (file_exists($filename) && !is_writable($filename)) {
       $this->errorMessage = "Error (append_to_file): File (".$filename.") is not writable.";
       $this->errorLog->add_to_error_log($this->errorMessage);
    } else {
       echo "Appending to file $filename.\r\n";
       $fh = fopen($filename, 'a');
       fwrite($fh, $mytext);
       fclose($fh);
    }
}
    
public function write_array_to_file($filename, $myarray) {
    // check if file exists and is not writable
    if (file_exists($filename) && !is_writable($filename)) {
       $this->errorMessage = "Error (write_array_to_file): File (".$filename.") is not writable.";
       $this->errorLog->add_to_error_log($this->errorMessage);
    } else {
       echo "Writing $myarray to $filename.\r\n";
       $fh = fopen($filename, 'w');
       foreach ($myarray as $element) {
          fwrite($fh, "$element\n");
       }
       fclose($fh);
    }
}
    
public function write_data_to_file() {
    $numArgs = func_num_args(); 
    $args = func_get_args();
    $filename = $args[0];
    // check if file exists and is not writable
    if (file_exists($filename) && !is_writable($filename)) {
       $this->errorMessage = "Error (write_data_to_file): File (".$filename.") is not writable.";
       $this->errorLog->add_to_error_log($this->errorMessage);
    } else if ($numArgs < 2) {
       $this->errorMessage = "Error (write_data_to_file): Function call requires more than 1 argument to write data.";
       $this->errorLog->add_to_error_log($this->errorMessage);
    } else {
       echo "Writing data to $filename.\r\n";
       $fh = fopen($filename, 'w');
       for ($i = 1; $i < $numArgs; $i++) { 
          fwrite($fh, "$args[$i]\n");
       }
       fclose($fh);
    }
}
    
//function write_array_to_csv_json(string $filename, array $fields_array)
public function write_array_to_csv_json($filename, $fields_array) {
    $fileparts = explode(".", $filename);
    $fext = $fileparts[1];
    if (($fext != "csv") && ($fext  != "json")) {
       $this->errorMessage = "Error (write_array_to_csv_json): Incorrect file extension - should be .csv or json";
       $this->errorLog->add_to_error_log($this->errorMessage);
       // check if file exists and is not writable
    } elseif (!file_exists($filename)) { //confirms that file exists
       $this->errorMessage = "Error (write_array_to_csv_json): File (".$filename.") does not exist.";
       $this->errorLog->add_to_error_log($this->errorMessage);
    } elseif (is_writable($filename)) { //confirms that file is writable
       $this->errorMessage = "Error (write_array_to_csv_json): File (".$filename.") is not writable.";
       $this->errorLog->add_to_error_log($this->errorMessage);
    } else {
       if ($fext == "csv") { //csv file processing
          $fh = fopen(($filename), 'w');
          fputcsv($fh, $fields_array);
          fclose($fh);
       } else { //json file processing
          $fh = fopen(($filename), 'w');
          $jsonArray = json_encode($fields_array);
          fwrite($fh, $jsonArray);
          fclose($fh);
       }
    }
}
 
  /*A list of getter functions*/
  public function get_file_name(){
    return $this->fileName;
  }
  
  public function get_directory(){
    return $this->directoryName;
  }
  
  public function get_full_path(){
    return $this->fullFileLocation;
  }


  /*End line of entire class*/
}

/*A class that is used specifically for error handling*/
class ErrorFileHandler extends FileHandler{

 /*Creates the directory and log file for error handling*/
  public function __construct($errorLog){
    
    $errorDirectory = "errors";
    $errorFileName = "errorLog.txt";
    
    
    $this->create_directory($errorLog."/".$errorDirectory);

//    if(!($this->directory_found($errorLog."/".$errorDirectory))){
//      $this->create_directory("errors");
//    }
    
    $this->fileName = $errorFileName;
    $this->directoryName = $errorDirectory;
    $this->fullFileLocation = $errorLog."/".$errorDirectory."/".$errorFileName;    
}
  
  public function add_to_error_log($errorMessage) {
    $timeStamp = date("d/m/y  H:i:s", time());
    $file = fopen($this->fullFileLocation ,"a+");
    fwrite($file, $timeStamp." ".$errorMessage."\n");
    fclose($file); 
  }

  public function print_error_log() {
    // check to see if file exixts, if so, print error log
    if (file_exists($this->fullFileLocation)) {
       $file = file_get_contents($this->fullFileLocation);
       echo($file);
    }
  }

} 


?>
