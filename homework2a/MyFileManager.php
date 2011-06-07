<?php

include ("ExceptionHandler.php");

class FileManager
{
   private $logFile; //location of error log
   
   public function __construct($path, $file) //constructor method
   {
      $this->logFile = $path . $file; //sets error log location
      if (!file_exists($this->logFile)) //confirms nonexistance of error log file
      {
      fopen($handle = $path . $file, 'w+'); //creates error log file if nonexistant
      //fopen($handle = $this->logFile, 'w+'); //creates error log file if nonexistant
      fclose($handle); //closes newly created error log file
      }
   }
   
   public function getLogFile()
   {
      return $this->logFile; //returns error log location
   }
   
   public function createFile($path, $file)
   {
      try
      {
         if (!file_exists($path . $file)) //confirms nonexistance of file
         {
            fopen($path . $file, 'w+'); //creates file
         }
         else
         {
            throw new FileExistsException("File already exists!\r\n"); //throws exception if file already exists
         }
      }
      catch(Exception $e)
      {
         echo 'Message: ' . $error = $e->getMessage(); //writes error message to screen
         $this->logError($error); //writes error to error log
      }
   }
   
   //public function readFile(string $path, string $file)
   public function readFile($path, $file)
   {
      try
      {
         if (file_exists($path . $file)) //confirms existance of file
         {
            if (is_readable($path . $file)) //confirms that file is readable
            {
               fopen($handle = $path . $file, 'r'); //opens file
               $content = fread($handle, filesize($path . $file)); //reads contents of file
               return $content; //returns contents of file
               fclose($handle); //closes file
            }
            else
            {
               throw new FileNotReadException("File is not readable!\r\n"); //throws exception if file is not readable
            }
         }
         else
         {
            throw new FileNotExistException("File does not exist!\r\n"); //throws exception if file does not exist
         }
      }
      catch(Exception $e)
      {
         echo 'Message: ' . $error = $e->getMessage(); //writes error message to screen
         $this->logError($error); //writes error to error log
      }
   }
   
   //public function updateFile(string $path, string $file, string $content, $mode) //Valid Modes: (a) Append (w) Write
   public function updateFile($path, $file, $content, $mode) //Valid Modes: (a) Append (w) Write
   {
      try
      {
         if (($mode == 'a') || ($mode == 'w')) //confirms validity of write mode selection
         {
            if (file_exists($path . $file)) //confirms that file exists
            {
               if (is_writable($path . $file)) //confirms that file is writable
               {
                  fopen($handle = $path . $file, $mode); //opens file in appropriate mode
                  fwrite($handle, $content); //writes to file (apped or write)
                  fclose($handle); //closes file
               }
               else
               {
                  throw new FileNotWriteException("File is not writable!\r\n"); //throws exception if file is not writable
               }
            }
            else
            {
               throw new FileNotExistException("File does not exist!\r\n"); //throws exception if file does not exist
            }
         }
         else
         {
            throw new FileModeException("Invalid write mode selection!\r\n"); //throws exception if invalid write mode is selected
         }
      }
      catch(Exception $e)
      {
         echo 'Message: ' . $error = $e->getMessage(); //writes error message to screen
         $this->logError($error); //writes error to error log
      }
   }
   
   //function write_array_to_csv(string $path, string $file, array $fields_array) {
   function write_array_to_csv($path, $file, $fields_array) {
       $fileparts = explode(".", $file);
       $fext = $fileparts[1];
       try
       {
          if (($fext == "csv") || ($fext  == "json")) {
             //echo "Incorrect file extension - should be .csv";
             // check if file exists and is not writable
            if (file_exists($path . $file)) //confirms that file exists
            {
               if (is_writable($path . $file)) //confirms that file is writable
               {
                  if ($fext == "csv") { //csv file processing
                     $fh = fopen(($path . $file), 'w');
                     fputcsv($fh, $fields_array);
                     fclose($fh);
		  } else { //json file processing
                     $fh = fopen(($path . $file), 'w');
                     $jsonArray = json_encode($fields_array);
                     fwrite($fh, $jsonArray);
                     fclose($fh);
		  }
	       } else {
                  throw new FileNotWriteException("File is not writable!\r\n"); //throws exception if file is not writable
               }
	    } else {
               throw new FileNotExistException("File does not exist!\r\n"); //throws exception if file does not exist
            }
	  } else {
                  throw new WrongExtException("File does not have correct extension - try .csv or .json\r\n"); //throws exception if file has incorrect extension
          }
       }
       catch(Exception $e)
       {
          echo 'Message: ' . $error = $e->getMessage(); //writes error message to screen
          $this->logError($error); //writes error to error log
       }
   }
    
   public function deleteFile()
   {
      try
      {
         if (file_exists($path . $file)) //confirms that file exists
         {
            unlink($path . $file); //deletes file
         }
         else
         {
            throw new FileNotExistException("File does not exist!\r\n"); //throws exception if files does not exist
         }
      }
      catch(Exception $e)
      {
         echo 'Message: ' . $error = $e->getMessage(); //writes error message to screen
         $this->logError($error); //writes error to error log
      }
   }
   
   //public function logError(string $error)
   public function logError($error)
   {
      if (file_exists($this->getLogFile()) && is_writable($this->getLogFile())) //confirms that log file exists & is writable
      {
         fopen($handle = $this->getLogFile(), 'a'); //opens error log
         fwrite($handle, date(DATE_RFC822) . ' ' . $error . '\n'); //writes date & error to error log
         fclose($handle); //closes error log
      }
      else
      {
         echo "Error creating error log entry!\r\n"; //writes error message to screen
      }
   }
   
}

?>

