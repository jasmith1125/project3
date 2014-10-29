<?php
// to open a local file use this
$file_handler = fopen("muttlem.txt", "r"); 


// read the contents 
$contents = fread($file_handler, filesize($file)); 

// close the file 
fclose($file_handler); 

// print the contents on your page 
echo $doggerel;  

?>