<?php

$file = "example.txt";

if($handle = fopen($file, 'r')) {
  echo $content = fread($handle, filesize($file)); //Each bite equals a character.
  // echo $content = fread($handle, 10); //Each bite equals a character.

  fclose($handle);
} else {
  echo "The applications was not able to write on the file.";
}



//I had to give permission to the file to be able to write to the directory.
//in the cli i used: sudo chmod 0777 /Applications/XAMPP/xamppfiles/htdocs/demo
// and I was able to write to the demo directory.

?>
