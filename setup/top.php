<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title>   
    <body bgcolor="#F2EBDD" topmargin="0">
    <table width="100%"><tr><td>
    <?php
    require '../include/sqlconn.php';
$sqlselect="select * from company_info";
$resultsel = mysqli_query($con,$sqlselect);

while ($row =mysqli_fetch_assoc($resultsel))
   {
     extract($row)  ;

     echo "<font><center><big><b>$name</b></big></center></font>";
      echo "<font><center>$address</center></font>";
       echo "<font><center>$email"." , ".$phone."</center></font>";
   }
    ?></td><td>
       <center> <img src="../image/head2.gif" width="900" height="100" alt=""/></center>
           </td>
            </tr></table>
        <?php
        // put your code here
        ?>
    </body>
</html>
