<?php require '../include/sqlconn.php';
$sqlselect="select * from role";
$resultsel = mysql_query($sqlselect);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
         <script type="text/javascript" src="../script/datepicker.js"></script>

    </head>


    <body>
<fieldset><legend><b>ROLE TYPE DELETE</b></legend><form action="userupdate.php" method="POST">
<table><tr><td colspan="2">
<select class="textfield" name="right"><option value="">Pick Role Type</option><?php while ($row = mysql_fetch_assoc($resultsel)){
    extract($row); echo "<option value='$name'>$name</option>"; } ?></select></td>
</tr><tr><td><input class="formbutton" type="submit" value="Delete" name="delete" /></td><td><input class="formbutton" type="submit" value="Reset" onclick="location.href='bustypeupdate.php'" /></td></tr>
</table></form>
</fieldset>

<?php

$role_type = $_POST['right'];

if (!empty ($role_type)){
if (isset ($_POST['delete']))
{
  $sqldelete ="delete from role where name ='$name'" ;
   $msql= mysql_query($sqldelete);
   if ($msql)
   {
       echo $role_type." deleted Sucessfully";
   }
   else
   {
        echo $role_type." not deleted";
   }

}

}


?>
    </body>
</html>