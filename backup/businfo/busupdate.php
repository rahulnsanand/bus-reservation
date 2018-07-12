<?php require '../include/sqlconn.php';
$sqlselect="select * from bus_info";
$resultsel = mysql_query($sqlselect);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
         <script type="text/javascript" src="../script/datepicker.js"></script>

    </head>


    <body>
<fieldset><legend><b>BUS INFO DELETE</b></legend><form action="busupdate.php" method="POST">
<table><tr><td colspan="2">
<select class="textfield" name="bus"><option value="">Pick Bus Number</option><?php while ($row = mysql_fetch_assoc($resultsel)){
    extract($row); echo "<option value='$bus_number'>$bus_number</option>"; } ?></select></td>
</tr><tr><td><input class="formbutton" type="submit" value="Delete" name="delete" /></td><td><input class="formbutton" type="submit" value="Reset" onclick="location.href='busupdate.php'" /></td></tr>
</table></form>
</fieldset>

<?php

$bus_num = $_POST['bus'];

if (!empty ($bus)){
if (isset ($_POST['delete']))
{
  $sqldelete ="delete from bus_info where bus_number ='$bus_num'" ;
   $msql= mysql_query($sqldelete);
   if ($msql)
   {
       echo $bus_num." deleted Sucessfully";
   }
   else
   {
        echo $bus_num." not deleted";
   }

}

}


?>
    </body>
</html>