<?php session_start();
$combine=$_POST['ken'];

            $t= explode(",", $combine);
           $date1= $t[0];
           $route1 = $t[1];
           $dep_time1 =$t[2];
           $bus1 =$t[3];
           $vehicle_number1=$t[4];
           $amount1 =$t[5];

           $_SESSION['date']=$date1;
           $_SESSION['route']=$route1;
           $_SESSION['dep_time']=$dep_time1;
           $_SESSION['bus']=$bus1;
           $_SESSION['vehicle_number']=$vehicle_number1;
           $_SESSION['amount']=$amount1;
       header("location:bookpost.php")
?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->


