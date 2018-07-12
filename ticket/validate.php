<?php session_start();?>
<table border="1" width="100%"><thead>
<tr><td>Issue Date</td><td>Departure Date</td><td>Route</td><td>First name</td><td>Last Name</td><td>TicketID</td><td>Amount</td><td>Phone No.</td><td>Total Amount</td><td>Status</td><td>Vehicle No.</td><td>Time</td><td>Bus Type</td><td>User</td><td>Location</td></tr>
    </thead>
<?php
 $tickid=$_GET['ticketid'];
$_SESSION['ticketid']=$tickid;


include '../include/sqlconn.php';
 $sql=" select * from ticket where ticketid='$tickid'";
$result =mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($result)){
               extract($row);
        echo "<tr>";
    foreach ($row as $value)
    {
        echo "<td>$value</td>";

   }
   echo "</tr>";
   echo "<tr><center><td colspan='15'><input class='formbutton' type='submit' value='Generate Ticket and Update Status' onclick='openwin();' /></center></td></tr>";
}
?></table>
