<?php
//first check if the form was filled
if (empty($_POST['fname'])) {
    echo "Please input first name";
    echo "<a href=\"./contact.php\">back to contact page</a>";
}
if (empty($_POST['lname'])) {
    echo "Please input last name<br>";
    echo "<a href=\"./contact.php\">back to contact page</a>";
}
if (empty($_POST['email'])) {
    echo "Please input email<br>";
    echo "<a href=\"./contact.php\">back to contact page</a>";
}
if (empty($_POST['subject'])) {
    echo "Please input a message<br>";
    echo "<a href=\"./contact.php\">back to contact page</a>";
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
