<?php

if (isset($_POST['submit'])) {
  $firstName = $_POST['firstname'];
  $lastName = $_POST['lastname'];
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "hello@robertbender.net";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an e-mail from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsent");
}

 ?>
