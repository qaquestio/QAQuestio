<?php

if (isset($_POST["reset-requets-submit"])) {


  $selector = bin2hex(random_bytes(8));
  $token = random_bytes(32);


  $url = "https://qaquest.io/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);


  $expires = date("U") + 600;

  require 'conn/conn.php';

  $userEmail = $_POST["email"];

  $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "There was an error!";
    exit();
  } else {
    mysqli_stmt_bind_param($stmt, "s", $userEmail);
    mysqli_stmt_execute($stmt);
  }

  $sql = "INSERT INTO pwdreset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "There was an error!";
    exit();
  } else {
    $hashedToken = password_hash($token, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
    mysqli_stmt_execute($stmt);
  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);

  $to = $userEmail;

  $subject = 'Reset your password for QAQuestio';

  $message = '<p>We received a password request...</p>';
  $message .= '<p>Here is your password reset link: </br>';
  $message .= '<a href="' . $url . '">' . $url . '</a></p>';

  $headers = "From: office@qaquest.io\r\n";
  $headers .= "Reply-To: office@qaquest.io\r\n";
  $headers .= "Content-type: text/html\r\n";

  mail($to, $subject, $message, $headers);

  header("Location: reset-password.php?reset=success");



} else {
  header("Location: qaquest.php");
}


?>
