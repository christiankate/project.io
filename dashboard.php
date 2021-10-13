<?php
session_start();
//create csrf token for Validating Cross-site Request Fogery
if(isset($_POST) & !empty($_POST)){
  if(isset($_POST['csrf_token'])){
    if($_POST['csrf_token'] == $_SESSION['csrf_token']){
      //echo "CSRF Validation Success";
    }
    else {
      //echo"CSRF Validation Failed.";
    }
  }
}
$token = md5(uniqid(rand(), true));
$_SESSION['csrf_token'] = $token;
$_SESSION['csrf_token_time'] = time();
///////////////////////////////////
?>

<?php 
// Session Management.
if(!isset($_SESSION['Password'],$_SESSION['name'])){
	header("location:index.php");
}
$name=$_SESSION['name'];
$pwd=$_SESSION['Password'];
?>
<!--HTML-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
</head>
<!--CSS to be used-->
<style>
body {
  background-image: url('images/945996.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
h1 {
  color: yellow;
}
</style>
<body>
<form method="post" action="logout.php"> <!--Logout page form-->
<input type ="hidden" name="csrf_token" value="<?php echo $token; ?>">
<h1>Welcome Sir!!!</h1>  <!--Message to display after Login successfull-->
<input type="submit" name="logout" value="logout"> <!--Logout Button-->
</form>
</body>
</html>
