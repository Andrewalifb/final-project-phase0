<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include("koneksi.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO registration (nama, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

$stmt->bind_param("sss", $name, $email, $hashedPassword);


$executionResult = $stmt->execute();


if ($executionResult) {
  header("Location: index.php?registration=success");
} else {
  header("Location: index.php?registration=failed");
}


$stmt->close();
$conn->close();
?>
