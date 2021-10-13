<?php
session_start();
//Database Connect 
require_once "connect.php";
if (isset($_POST['sub'])) {
    $code=$_POST['code'];
    //Select One Time Password.
   $query = "SELECT * FROM account WHERE code=?";
   //getting Email verfication 
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i',$code);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
  }
  if($num_rows > 0){
    
    // Updating the account status to "Verified" where Email matches the selected one.

      $query = "UPDATE account SET status='Verified' WHERE email=? ";
  $stmti = $conn->prepare($query);
$stmti->bind_param('s',$email);
$stmti->execute();
$stmti->close();
 //After Updating the status, back to Index page to allow user to login 
header('location:index.php');
    }
  else{
      // Otherwise its refer to Wrong Activation Code.
    echo "Wrong Activation";
  }
  }

?>



