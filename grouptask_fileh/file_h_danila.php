<?php
#by Danila Karpov

echo "<h1>Create/read a text file by using approprite php functions</h1>";
$filename = 'danila.txt';
if (file_exists($filename)) {
    $res = "The file $filename exists";
} else {
    $res = "The file $filename does not exist";
    $filename = fopen("danila.txt", "w") or die("Unable to open file!");
    $txt = "Hi\n";
    fwrite($filename, $txt);
    fclose($filename);
}
echo $res;
?>
<br>
<br>
<br>
<h1>Image Upload didnt work</h1>
</form>