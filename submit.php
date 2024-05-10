<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $address = $_POST['address'];
  $number = $_POST['number'];
  $email = $_POST['email'];

  $to = "sumedhghodke731@gmail.com";
  $subject = "New Booking";
  $message = "Name: $name\nAddress: $address\nPhone Number: $number\nEmail: $email";

  mail($to, $subject, $message);

  header("Location: thankyou.html");
  exit();
}
?>

  