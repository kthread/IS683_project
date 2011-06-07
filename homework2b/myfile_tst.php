<?php

include ("myfile_func.php");

create_directory("test_dir");

directory_exists("test_dir");
directory_exists("fake_dir");

directory_readable("test_dir");
directory_readable("fake_dir");

write_data_to_file("test_dir/file1", "line 1", "line 2", "line 3");
write_data_to_file("test_dir/file2", "line 1", "line 2", "line 3", "line 4");
write_data_to_file("test_dir/file3", "line 1", "line 2");

myfile_exists("test_dir/file2");
myfile_exists("test_dir/file4");

file_readable("test_dir/file1");
file_readable("test_dir/file4");

file_writable("test_dir/file3");
file_writable("test_dir/file4");

$myfiles_list = array();
$myfiles_list = list_files("test_dir");
echo "The files in test_dir are ".$myfiles_list." \r\n";
delete_file("test_dir/file2");
$myfiles_list = list_files("test_dir");
echo "The files in test_dir are ".$myfiles_list." \r\n";
$myfiles_list = list_files("fake_dir");

append_to_file("test_dir/file1", "first additional line");

$myarray = array("item1", "item2", "item3", "item4", "item5");
write_array_to_csv("test_dir/myfile.csv", $myarray);

write_csv_to_array("test_dir/myfile.csv");

$myarray = array("item6", "item7", "item8", "item9", "item10");
write_array_to_file("test_dir/myfile_array", $myarray);

?>

