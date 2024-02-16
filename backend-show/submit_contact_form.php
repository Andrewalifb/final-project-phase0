<?php
  error_reporting(E_ALL);
  ini_set("display_error",1);

  include("koneksi.php");


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message_subject = $_POST['message_subject'];
$message = $_POST['message'];


$stmt = $conn->prepare("INSERT INTO contact_form (firstname, lastname, email, phone, message_subject, message) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $firstname, $lastname, $email, $phone, $message_subject, $message);



$executionResult = $stmt->execute();



if ($executionResult) {
  header("Location: index.php?contact_form=success");
} else {
  header("Location: index.php?contact_form=failed");
}


$stmt->close();
$conn->close();
?>
