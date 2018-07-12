<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <fieldset><legend><b>BUS INFO</b></legend>
        <form action="businfo.php" method="POST">
            <table border="0">

                    <tr>
                        <td>Name of Bus</td>
                        <td><input class="textfield" type="text" name="name_bus" value="" /></td>
                    </tr>
                    <tr>
                        <td>Bus Number</td>
                        <td><input class="textfield" type="text" name="number_bus" value="" /></td>
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

          $name=trim($_POST['name_bus']);
          $number=trim($_POST['number_bus']);

            require '../include/sqlconn.php';
            if (!empty ($name) && !empty ($number)){


            $sql="insert into bus_info(bus_name, bus_number) value('$name', '$number')";
            mysql_query($sql);
            }
            else
            {
                echo "<font color='red'>"."Fill all fields"."</font>";
            }
        }
      
        ?>
        <br>
        <?php    include '../bustype/bustype.php';
        ?>
    </body>
</html>

