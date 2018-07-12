<?php require '../include/sqlconn.php';
$sqlselect="select * from user";
$resultsel = mysqli_query($con,$sqlselect);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
         <script type="text/javascript" src="../script/datepicker.js"></script>

    </head>


    <body>
<fieldset><legend><b>USER DELETE</b></legend><form action="create_userupdate.php" method="POST">
<table><tr><td colspan="2">
<select class="textfield" name="route"><option value="">Pick user</option><?php while ($row = mysqli_fetch_assoc($resultsel)){
    extract($row); echo "<option value='$user_name'>$user_name</option>"; } ?></select></td>
</tr><tr><td><input class="formbutton" type="submit" value="Delete" name="delete" /></td><td><input class="formbutton" type="submit" value="Reset" onclick="location.href='routeupdate.php'" /></td></tr>
</table></form>
</fieldset>

<?php

$route = $_POST['route'];

if (!empty ($route)){
if (isset ($_POST['delete']))
{
  $sqldelete ="delete from user where user_name ='$user_name'" ;
   $msql= mysqli_query($con,$sqldelete);
   if ($msql)
   {
       echo $route." deleted Sucessfully";
   }
   else
   {
        echo $route." not deleted";
   }

}

}


?>
    </body>
</html>