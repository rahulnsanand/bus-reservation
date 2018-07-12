<?php require '../include/sqlconn.php';
$sqlselect="select * from price";
$sqlselect1="select * from price";
$sqlselect2="select * from bus_type";
$resultsel = mysqli_query($con,$sqlselect);
$resultsel1 = mysqli_query($con,$sqlselect1);
$resultsel2 = mysqli_query($con,$sqlselect2);
?>
<fieldset><legend><b>PRICE EDIT INFO</b></legend>
<table border="1"><tr><th>Route</th><th>Bus type</th><th>Amount</th></tr>
<?
while ($row=mysqli_fetch_assoc($resultsel))
{
    extract($row);
    echo "<tr><td>$route</td><td>$bus_type</td><td>$amount</td></tr>";
}

?>
</table>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    
        <form action="priceupdate.php" method="POST">
            <table border="0">

                    <tr>
                        <td>Route</td>
                        <td><select class="textfield" name="route"><option value="">Pick Bus Type</option><?php while ($row = mysqli_fetch_assoc($resultsel1)){
    extract($row); echo "<option value='$route'>$route</option>"; } ?></select></td>
                    </tr>
                    <tr>
                        <td>Bus Type</td>
                        <td><select class="textfield" name="bus"><option value="">Pick Bus Type</option><?php while ($row = mysqli_fetch_assoc($resultsel2)){
    extract($row); echo "<option value='$name'>$name</option>"; } ?></select></td>
                    </tr>
                      <tr>
                        <td>Amount</td>
                        <td><input class="textfield" type="text" name="amount" value="" /></td>
                    </tr>
                    <tr>
                        <td><input class="formbutton" type="submit" value="Submit" name="submit" /></td><td><input class="formbutton" type="button" value="Reset" onclick="location.href='priceupdate.php'" /></td>

                    </tr>

            </table>

        </form>
        </fieldset>
        <?php
        // put your code here

        
          $amount = trim($_POST['amount']);
          $route = trim($_POST['route']);
          $bus = trim($_POST['bus']);
         $sqlupdate ="update price set amount='$amount' where bus_type='$bus' and route='$route' "  ;
         mysqli_query($con,$sqlupdate);
        

        ?>
    </body>
</html>

