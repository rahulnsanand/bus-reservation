<?php require '../include/sqlconn.php';
$sqlselect="select * from bus_type";
$resultsel = mysql_query($sqlselect);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
         <script type="text/javascript" src="../script/datepicker.js"></script>

    </head>


    <body>
<fieldset><legend><b>BUS TYPE DELETE</b></legend><form action="bustypeupdate.php" method="POST">
<table><tr><td colspan="2">
<select class="textfield" name="bus"><option value="">Pick Bus Type</option><?php while ($row = mysql_fetch_assoc($resultsel)){
    extract($row); echo "<option value='$name'>$name</option>"; } ?></select></td>
</tr><tr><td><input class="formbutton" type="submit" value="Delete" name="delete" /></td><td><input class="formbutton" type="submit" value="Reset" onclick="location.href='bustypeupdate.php'" /></td></tr>
</table></form>
</fieldset>

<?php

$bus = $_POST['bus'];

if (!empty ($bus)){
if (isset ($_POST['delete']))
{
  $sqldelete ="delete from bus_type where name ='$name'" ;
   $msql= mysql_query($sqldelete);
   if ($msql)
   {
       echo $bus." deleted Sucessfully";
   }
   else
   {
        echo $bus." not deleted";
   }

}

}


?>
    </body>
</html>