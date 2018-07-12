<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
         <fieldset><legend><b>COMPANY INFO</b></legend>
        <form action="company.php" method="POST">
    <table border="0">
        
            <tr>
                <td>Name</td>
                <td><input class="textfield" type="text" name="name" value="" /></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="address" rows="4" cols="20" dir="ltr" class="textfield">
                    </textarea></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input class="textfield" type="text" name="email" value="" /></td>
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

        if (isset ($_POST['submit']))
        {
          $name =trim($_POST['name']);
          $address =trim($_POST['address']);
            $email =trim($_POST['email']);
              $phone =trim($_POST['phone']);



          if (!empty ($name) && !empty ($address) && !empty ($email) && !empty ($phone)){

 require '../include/sqlconn.php';
            $sql="insert into company_info(name, address, email, phone) value('$name', '$address', '$email', '$phone')";
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

