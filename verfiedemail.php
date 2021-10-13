<?php
session_start();
require_once('connect.php');
// REGISTER USER
if (isset($_POST['sub'])) {
  $email = $conn->real_escape_string($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid Email format";
    }
    $result ="SELECT count(*) FROM account  WHERE Email=?";
$stmt = $conn->prepare($result);
$stmt->bind_param('s',$email);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
  if ($count==1) { 
      echo "No account with the Email provided";
    }
  else  {
$otp= mt_rand(100000, 999999);
    $query = "UPDATE account SET code=? WHERE Email=? ";
  $stmti = $conn->prepare($query);
$stmti->bind_param('is',$otp,$email);
$stmti->execute();
$stmti->close();
    $_SESSION['username'] = $username;
    $_SESSION['pwd'] = $password;
    $_SESSION['em'] = $email;
    $_SESSION['code'] = $otp;
    $to=$email;
    $from="From: nsanzimanaofficial@gmail.com";
    $subject="Verification Code ";
    $message =$otp;
    $mailing = mail($to,$subject,$message,$from);
    header('location: otp.php'); 
  }
}
?>