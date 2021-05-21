<?php

 if(isset($_POST['register-submit'])) {

require 'dbh.inc.php';

$username = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pwd'];
$passwordRepeat = $_POST['confirm_password'];

if (empty($username) ||  empty($email) || empty($password) || empty($passwordRepeat)) {
 header("Location:../signupp.php?error=emptyfields&name=".$username."&uemail=".$email);
 exit(); 
  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[A-Za-Z ][A-Za-z0-9 ]*/", $username)){
    header("Location:../signupp.php?error=invalidemailname");
    exit();

  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location:../signupp.php?error=invaliduemail&name=".$username );
    exit();
  }
  else if (!preg_match("/[a-zA-Z0-9]*$/", $username)) {
    header("Location:../signupp.php?error=invalidname&uemail=".$email);
    exit();
  }
  else if ($password !== $passwordRepeat) {
    header("Location:../signupp.php?error=passwordcheck&name=".$username."&uemail=".$email);
    exit();
  }

  else{

    $sql = "SELECT name FROM users WHERE name=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location:../signupp.php?error=sqlerror");
      exit();
    }
    else {
 mysqli_stmt_bind_param($stmt, "s", $username);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_store_result($stmt);
 $resultCheck = mysqli_stmt_num_rows($stmt);
 if ($resultCheck > 0) {
   header("Location:../signupp.php?error=usertaken&emmail=".$email);
   exit();
 }
 else {

  $sql = "INSERT INTO users (name, uemail, password) VALUES (?, ?, ?)";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location:../signupp.php?error=sqlerror");
    exit();


 }
 else {
   $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
  mysqli_stmt_execute($stmt);
  header("Location:../signupp.php?signuo=success");
  exit();
 }
    }
  }

  }
   mysqli_stmt_close($stmt);
   mysqli_close($conn);

 }

 else {
  header("Location:../signupp.php");
  exit();
 }

