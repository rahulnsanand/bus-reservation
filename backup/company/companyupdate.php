<?php require '../include/sqlconn.php';
$sqlselect="select * from company_info";
$resultsel = mysql_query($sqlselect);
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
         <script type="text/javascript" src="../script/datepicker.js"></script>

    </head>


    <body>
<fieldset><legend><b>COMPANY DELETE</b></legend><form action="companyupdate.php" method="POST">
<table><tr><td colspan="2">
<select class="textfield" name="name"><option value="">Pick Name</option><?php while ($row = mysql_fetch_assoc($resultsel)){
    extract($row); echo "<option value='$name'>$name</option>"; } ?></select></td>
</tr><tr><td><input class="formbutton" type="submit" value="Delete" name="delete" /></td><td><input class="formbutton" type="submit" value="Reset" onclick="location.href='bustypeupdate.php'" /></td></tr>
</table></form>
</fieldset>

<?php

$name = $_POST['name'];

if (!empty ($name)){
if (isset ($_POST['delete']))
{
  $sqldelete ="delete from company_info where name ='$name'" ;
   $msql= mysql_query($sqldelete);
   if ($msql)
   {
       echo $name." deleted Sucessfully";
   }
   else
   {
        echo $name." not deleted";
   }

}

}


?>
    </body>
</html>