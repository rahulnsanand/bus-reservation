<? session_start();
if (empty ($_POST['tobus']) || empty ($_POST['frombus']) || empty ( $_POST['travel_date']))
{
    header("location:findbus.php");
}
else
{

?><fieldset><legend></legend>
<form action="book.php" method="post">
    <table border="1"><tr><th>Date</th><th>Route</th><th>Time</th><th>Bus Type</th><th>Bus Number</th><th colspan="2">Amount</th><th></th></tr>
<?php
$fro=$_POST['frombus'] ;
$to=$_POST['tobus'] ;
$dated=$_POST['travel_date'] ;
$dated=explode("/", $dated);
          $dated=$dated[2]."-".$dated[0]."-".$dated[1];
  $route=$fro."-".$to;

require '../include/sqlconn.php';
$sql="select pb.date, pb.route, pb.time, pb.bus_type, pb.bus_number, p.amount from pos_bus pb, price p where
pb.date='$dated' and pb.route='$route' and pb.bus_type = p.bus_type ";
    $result=mysql_query($sql);
    while ($row=mysql_fetch_assoc($result))
     {
         extract($row);

  $combine=$date.",".$route.",".$time.",".$bus_type.",".$bus_number.",".$amount;
  echo "<tr><td>$date</td><td>$route</td><td>$time</td><td>$bus_type</td><td>$bus_number</td><td>"."N".$amount."</td><td><input class='textfield' type='radio' name='ken' value='$combine' /></td>";$f= $_POST['ken'];
          
     }
    
}



?></table>
  <input class="textfield" type="submit" value="Book" name="submit" />
  </form>
</fieldset>