<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <fieldset><legend><b>ROUTE INFO</b></legend>
        <form action="route.php" method="POST">
            <table border="0">

                    <tr>
                        <td>Name of Route</td>
                        <td><input class="textfield" type="text" name="name_route" value="" /></td>
                    </tr>
                    <tr>
                        <td>Route Code</td>
                        <td><input class="textfield" type="text" name="code_route" value="" /></td>
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

          $route=trim($_POST['name_route']);
          $code=trim($_POST['code_route']);

            require '../include/sqlconn.php';
            if (!empty ($route) && !empty ($code)){

            
            $sql="insert into route(code, route_name) value('$code', '$route')";
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

