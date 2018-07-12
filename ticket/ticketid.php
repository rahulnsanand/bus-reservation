 <?php require '../include/sqlconn.php';
        $sql1="select * from ticketid";
        $result = mysqli_query($con,$sql1);
     while (  $row = mysqli_fetch_assoc($result))
     {
        extract($row);
        $num = $number;
     }
   $num1=(int)$num + 1;
 $sql2="update ticketid set number='$num1'";
        mysqli_query($con,$sql2);
        ?>
   