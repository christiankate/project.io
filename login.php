<?php
session_start();
$name=$_POST['usern'];
$pwd=$_POST['pass'];
 $pass = sha1($_POST['pass']);
$x=0;
$y=0;
//Mysql Database Connect
include("connect.php");
//Mysql selection from Account table the credentials to be used to aunthecate user.
$select=mysqli_query($conn,"select* from account");
while($user=mysqli_fetch_array($select))
{
   //Choosing Username or Email with the corresponding. 
if(($name==$user['Email'])&&($pass==$user['Password']) || ($name==$user['Username'])&&($pass==$user['Password']))
{
 $fst=$user['Username'];
  $eml=$user['Email'];
  $x=1;
  $_SESSION['name']=$name;
  $_SESSION['Password']=$pwd;
}
}
if($x)
{
  //Authenticate the user whose account is verified.
  $query = "SELECT * FROM account WHERE status='Verified' ";
    $stmt = $conn->prepare($query);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
}
if($num_rows > 0){

// Keeping/Holding the cookies to keep loged user credentials .

  if (!empty($_POST['remember'])) {
$check=$_POST['remember'];
   setcookie("name",$name,time()+3600*24*7);
   setcookie("password",$pwd,time()+3600*24*7);
   setcookie("check",$check,time()+3600*24*7);
  }
  else{
$check=0;
     setcookie("name",$name,7);
       setcookie("password",$pwd,7);
         setcookie("check",$check,7);
  }
header("location:dashboard.php");
}
else{
  header("location:vrfnow.php");
}
}
else{
  echo "incorect username or password";
}
?>
