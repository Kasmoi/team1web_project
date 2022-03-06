<?php
//first check if the form was filled
if (empty($_POST['fname']) OR empty($_POST['lname']) OR empty($_POST['email']) OR empty($_POST['subject'])) {
    header("location:contact.php?error=All fields are required");
}

else {
  $fname= $_POST['fname'];
  $lname= $_POST['lname'];
  $email= $_POST['email'];
  $content= $_POST['subject'];

  // the message
  $msg=$fname." ".$lname." is trying to contact you from ".$email.". Here is the message: ".$content;
  // use wordwrap() if lines are longer than 70 characters
  $msg = wordwrap($msg,70);

  // send email
  mail($email,$email."sent a contact request",$msg);
  header("location:../contact.php?msg=message sent successfully")
}

?>
