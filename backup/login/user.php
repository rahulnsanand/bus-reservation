<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <fieldset><legend><b>ROLE TYPE</b></legend>
        <form action="user.php" method="POST">
            <table border="0">

                    <tr>
                        <td>Type of Role</td>
                        <td><input class="textfield" type="text" name="role_type" value="" /></td>
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

          $name=trim($_POST['role_type']);


            require '../include/sqlconn.php';
            if (!empty ($name)){


            $sql="insert into role(name) value('$name')";
            mysql_query($sql);
            }
            else
            {
                echo "<font color='red'>"."Fill all fields"."</font>";
            }
        }

        ?>