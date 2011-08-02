<?php
/*A class that is used specifically for error handling*/
class ErrorFileHandler extends FileHandler{

 /*Creates the directory and log file specifically for error handling*/
  function __construct($errorLog){
    
    $errorDirectory = "errors";
    $errorFileName = "errorLog.txt";
    
    
    //if(!($this->directory_found($errorLog."/".$errorDirectory))){
      //$this->create_directory($errorDirectory);
    if(!($this->directory_found($errorDirectory))){
      $this->create_directory($errorDirectory);
    }
    
    //$this->fileName = $errorFileName;
    //$this->directoryName = $errorDirectory;
    //$this->fullFileLocation = $errorLog."/".$errorDirectory."/".$errorFileName;    
    $this->fileName = $errorLog;
    $this->directoryName = $errorDirectory;
    $this->fullFileLocation = $errorDirectory."/".$errorLog;    
}
  
  /*End line of entire ErrorFileHandler Class*/
} 


?>
