<?php  session_start();
require '../include/sqlconn.php';
$pass1 = trim($_POST['pass1']);
  $use = $_SESSION['use']  ;

         $sqlupdate ="update user set password='$pass1' where user_name='$use'"  ;
         mysqli_query($con,$sqlupdate);
         header("location:password.php");

?>