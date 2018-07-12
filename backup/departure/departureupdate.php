<?php require '../include/sqlconn.php';
$sqlselect="select * from dep_time";
$resultsel = mysql_query($sqlselect);
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
         <script type="text/javascript" src="../script/datepicker.js"></script>

    </head>


    <body>
<fieldset><legend><b>DEPARTURE TIME DELETE</b></legend><form action="departureupdate.php" method="POST">
<table><tr><td colspan="2">
<select class="textfield" name="time"><option value="">Pick Time</option><?php while ($row = mysql_fetch_assoc($resultsel)){
    extract($row); echo "<option value='$time'>$time</option>"; } ?></select></td>
</tr><tr><td><input class="formbutton" type="submit" value="Delete" name="delete" /></td><td><input class="formbutton" type="submit" value="Reset" onclick="location.href='bustypeupdate.php'" /></td></tr>
</table></form>
</fieldset>

<?php

$time = $_POST['time'];

if (!empty ($time)){
if (isset ($_POST['delete']))
{
  $sqldelete ="delete from dep_time where time ='$time'" ;
   $msql= mysql_query($sqldelete);
   if ($msql)
   {
       echo $time." deleted Sucessfully";
   }
   else
   {
        echo $time." not deleted";
   }

}

}


?>
    </body>
</html>