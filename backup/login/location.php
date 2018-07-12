<?php require '../include/sqlconn.php';?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <fieldset><legend><b>LOCATION INFO</b></legend>
        <form action="location.php" method="POST">
            <table border="0">

                    <tr>
                        <td>Name</td>
                        <td><input class="textfield" type="text" name="names" value="" /></td>
                     </tr>
                      <tr>
                        <td>Contact</td>
                        <td><input class="textfield" type="text" name="contact" value="" /></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><input class="textfield" type="text" name="phone" value="" /></td>
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
          $names =trim($_POST['names']);
          $contact =trim($_POST['contact']);
            $phone =trim($_POST['phone']);
             
          
          
           

             if (!empty ($names) && !empty ($contact) && !empty ($phone)){



            $sql="insert into location(name, contact, phone) value('$names', '$contact', '$phone')";
            mysql_query($sql);
            }
            else
            {
                echo "<font color='red'>"."Fill all fields"."</font>";
            }
            
        }

        ?>
    </body>
</html>

