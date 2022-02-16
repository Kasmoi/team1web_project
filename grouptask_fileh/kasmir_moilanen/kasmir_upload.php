<?php
$target_dir = "./";
$target_file = $target_dir . basename($_FILES["file_img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
#check if the img is an img
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["file_img"]["tmp_name"]);
  if($check !== false) {
    #file is an image
    $uploadOk = 1;
  } else {
    #file is not an image
    $uploadOk = 0;
  }
}
#is there already a file with the same name
if (file_exists($target_file)) {
  echo "there is already a file called that";
  $uploadOk = 0;
}
// see if the filesize is too big
if ($_FILES["file_img"]["size"] > 2097152) {
  echo "img size is too big. please use 2mb or less";
  $uploadOk = 0;
}


// Check if $uploadOk is set to 0
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
#if everyhing is fine try to upload
} else {
  #user input file is loaded
  if (move_uploaded_file($_FILES["file_img"]["tmp_name"], $target_file))
  {echo "file has been loaded to the same directory";
    echo "<a href='./'> open the load folder directory </a>";
  }
  #if it doenst load
  else {
    echo "it did not upload correctly";
  }
}
?>
