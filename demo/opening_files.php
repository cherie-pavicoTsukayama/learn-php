<?php

$file = "example.txt";

$handle = fopen($file, 'w');

fclose($handle);

//I had to give permission to the file to be able to write to the directory.
//in the cli i used: sudo chmod 0777 /Applications/XAMPP/xamppfiles/htdocs/demo
// and I was able to write to the demo directory. 

?>
