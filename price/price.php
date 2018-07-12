<?php require '../include/sqlconn.php';
$sqlselect="select * from route order by code";
$sqlselect1="select * from route order by code";
$sqlselect2="select * from bus_type order by name";
$resultsel = mysqli_query($con,$sqlselect);
$resultsel1 = mysqli_query($con,$sqlselect1);

$resultsel2 = mysqli_query($con,$sqlselect2);

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <fieldset><legend><b>PRICE INFO</b></legend>
        <form action="price.php" method="POST">
            <table border="0">

                    <tr>
                        <td>From:-</td>
                        <td><select class="textfield" name="fro"><option value="">Pick Route</option><?php while ($row = mysqli_fetch_assoc($resultsel)){
    extract($row); echo "<option value='$code'>$code</option>"; } ?></select></td>
                    </tr><tr>
                        <td>TO:-</td>
                        <td><select class="textfield" name="to"><option value="">Pick Route</option><?php while ($row = mysqli_fetch_assoc($resultsel1)){
    extract($row); echo "<option value='$code'>$code</option>"; } ?></select></td>
                    </tr>
                      <tr>
                        <td>Amount:-</td>
                        <td><input class="textfield" type="text" name="amount" value="" /></td>
                    </tr>
                    <tr>
                        <td>Bus Type:-</td>
                        <td><select class="textfield" name="bus"><option value="">Pick Bus Type</option><?php while ($row = mysqli_fetch_assoc($resultsel2)){
    extract($row); echo "<option value='$name'>$name</option>"; } ?></select></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input class="formbutton" type="submit" value="Submit" name="submit" /></td>

                    </tr>

            </table>

        </form>
        </fieldset>
        <?php
        // put your code here

        if (isset ($_POST['submit']))
        {
          $fro =trim($_POST['fro']);
          $to =trim($_POST['to']);
            $bus =trim($_POST['bus']);
              $amount =trim($_POST['amount']);
          
            $route =$fro."-".$to;
           

          if (!empty ($fro) && !empty ($to) && !empty ($amount) && !empty ($bus)){


            $sql="insert into price(bus_type, route, amount) value('$bus', '$route', '$amount')";
            mysqli_query($con,$sql);
            }
            else
            {
                echo "<font color='red'>"."Fill all fields"."</font>";
            }
            
        }

        ?>
    </body>
</html>

