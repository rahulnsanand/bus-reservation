<?php session_start();

session_destroy();
header("location:../login/login.php");
?><!--
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
        <?php/*
        if ($_SESSION['auth'] !=1)
        {
       header("location:../login/login.php");
        }
        if ($_SESSION['auth']==1 && $_SESSION['right']=="Administrator")
        {
          header("location:../setup/main.php");
        }
        if ($_SESSION['auth']==1 && $_SESSION['right']=="user")
        {
          header("location:../setup/main.php");
        }*/
        ?>
    </body>
</html>
