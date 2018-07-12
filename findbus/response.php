<?php session_start();?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
        $ticketid=$_SESSION['ticketid'];
        $firstname=$_SESSION['firstname'];
        $lastname=$_SESSION['lastname'];

        echo "<div>$firstname"." ".$lastname.", Your ticket Number is $ticketid</div>";

        ?>
    </body>
</html>
