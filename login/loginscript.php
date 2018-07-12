<?php session_start();
require '../include/sqlconn.php';
$user = $_POST['user_name'];
$password = $_POST['password'];
$_SESSION['user'] =$user;
$sqlsel ="select * from user where user_name='$user' and password='$password'";

$result=mysqli_query($con,$sqlsel);
$n= mysqli_num_rows($result);
if ($n >0)
{
    $auth = 1;
    $_SESSION['auth'] = $auth;
    while ($row =mysqli_fetch_assoc($result))
{
    extract($row);
    $_SESSION['right'] =$right;
    $_SESSION['location'] =$location;

    if ($_SESSION['right'] == "Administrator")
    {
        header("location:../setup/main.php");
    }
    if ($_SESSION['right'] == "User")
    {
      header("location:../user/main.php");
    }

}
}
else
{
    header("location:logout.php");
}

?>
