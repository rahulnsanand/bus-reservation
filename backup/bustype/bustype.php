<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" /> <link href="../css/default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <fieldset><legend><b>BUS CLASS</b></legend>
        <form action="../businfo/businfo.php" method="POST">
            <table border="0">

                    <tr>
                        <td>Type of Bus</td>
                        <td><input class="textfield" type="text" name="bus_type" value="" /></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input class="formbutton" type="submit" value="Submit" name="submit1" /></td>

                    </tr>

            </table>

        </form>
        </fieldset>
    </body>

   <?php
        // put your code here
        if (isset ($_POST['submit1']))
        {

          $name=trim($_POST['bus_type']);


            require '../include/sqlconn.php';
            if (!empty ($name)){


            $sql="insert into bus_type(name) value('$name')";
            mysql_query($sql);
            }
            else
            {
                echo "<font color='red'>"."Fill all fields"."</font>";
            }
        }

        ?>