<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include("koneksi.php"); 

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM registration WHERE email = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
      header("Location: index.php"); 
    } else {
      header("Location: login.php?error=invalidcredentials");
    }
  

    $stmt->close();
    $conn->close();

?>
