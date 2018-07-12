<?php
 $route=$_GET['routeid'];
 $bus_type=$_GET['busid'];
  include '../include/sqlconn.php';
 $sql=" select * from price where route='$route'and bus_type ='$bus_type'";
$result =mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
        extract($row);
        echo $amount;
}
?>
