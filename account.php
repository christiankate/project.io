<?php 
session_start();
include "connect.php";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
 $user=$_POST['user'];
 $email=$_POST['email'];
 //$hashed_pass = sha1($_POST['pwd']);
 $otp = mt_rand(100000, 999999);
 $status="Not verfied";
 $sql="insert into account values(null,?,?,?,?,?,?,?)";

$st=mysqli_stmt_init($conn);
if(mysqli_stmt_prepare($st,$sql))
{
//Salting with Hashing the entered password
////////////////////////////////
$salt="bhgjhasuew211sad".$_POST['pwd'];
$salthash=hash('sha1',$salt);

mysqli_stmt_bind_param($st,"sssssss",$fname,$lname,$user,$email,$salthash,$otp,$status);
mysqli_stmt_execute($st);

$to=$email;
$from="From: nsanzimanaofficial@gmail.com";
$subject="Verification Code ";
$message =$otp;
$mailing = mail($to,$subject,$message,$from);
header('location: otp.php');
}
else{
    echo "<script>alert('Failed to create an account!... Try again please!')</script>";
    include "createaccount.php"; 
echo "error:".$sql."<br>".$conn->error;
}
