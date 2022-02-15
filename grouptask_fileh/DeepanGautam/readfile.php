<?php
// checks the existence of the file
if(!file_exists("file/hello.txt")){
echo "File Not Found!";
}
else{
// opens the file in read-only mode
$file = fopen("file/hello.txt","r");
// iterates through the file till the end of file
while(!feof($file)){
$line = fgets($file);
// prints each line
echo $line."<br>";
}
// closes the file
fclose($file);
}
?>