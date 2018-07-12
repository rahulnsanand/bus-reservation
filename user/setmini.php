<?php session_start();
echo "<b>".$_SESSION['location']."</b><br>".$_SESSION['user'];
?><!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> ETICKETING</title>
        <link href="../css/login.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <center><h1>USER</h1></center>

<br>
<fieldset style="width:80%"><legend><b>Main</b></legend>
<ul type="square">

    <li><a href="../ticket/ticket.php" target="main2">Ticket Booking</a></li>

    <li><a href="../login/password_user.php" target="main2">Change password</a></li>
    <li><a href="../query/datequery_user.php" target="main2"  >Reports</a></li>

</ul>
</fieldset>
<br/>
        <?php
        // put your code here
        ?>
        <a href="../login/logout.php" target=_top> Logout</a>
    </body>
</html>
