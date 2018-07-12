<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <fieldset><legend><b>DEPARTURE TIME INFO</b></legend>
        <form action="departure.php" method="POST">
            <table border="0">

                    <tr>
                        <td>Departure Time</td>
                        <td><input class="textfield" type="text" name="departure" value="" /><select class="textfield" name="ampm"><option value="">Pick</option><option value="a.m">a.m</option><option value="p.m">p.m</option></select></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input class="formbutton" type="submit" value="Submit" name="submit" /></td>

                    </tr>

            </table>

        </form>
        </fieldset>
    </body>

   <?php
        // put your code here
        if (isset ($_POST['submit']))
        {

          $departure=trim($_POST['departure']);
           $ampm=trim($_POST['ampm']);
           $dep_time=$departure.$ampm;


            require '../include/sqlconn.php';
            if (!empty ($departure) && !empty ($ampm)){


            $sql="insert into dep_time(time) value('$dep_time')";
            mysql_query($sql);
            }
            else
            {
                echo "<font color='red'>"."Fill all fields"."</font>";
            }
        }

        ?>