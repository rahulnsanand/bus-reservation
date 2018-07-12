<?php session_start();
  require '../include/sqlconn.php';
$sqllocation="select * from location";
$sqluser="select * from user";
$resultuser = mysqli_query($con,$sqluser);
$resultlocation = mysqli_query($con,$sqllocation);
$sqlbus = "select * from bus_info";
$resultbus=mysqli_query($con,$sqlbus);
$user =$_SESSION['user'];
$location =$_SESSION['location'];
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
         <script type="text/javascript" src="../script/datepicker.js"></script>

    </head>

    <body>

<fieldset><legend><b>QUERY</b></legend>
  <script type="text/javascript" src="../script/datepicker.js"></script>
<form method="post" action="datequery_user.php" name="query" >
<table border="1" width="100%">
    <thead>
        <tr>
            <td colspan="10">Search Criteria</td>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Start Date</td>
            <td><input class="textfield" type="text" name="travel_date" value="" id="c" READONLY onclick="show_calendar('query.travel_date');"><a href="javascript:show_calendar('query.travel_date');"><img src="../css/images/cal.gif" border="0"></a></td>
            <td>End Date </td>
            <td><input class="textfield" type="text" name="travel_date1" value="" id="c" READONLY onclick="show_calendar('query.travel_date1');"><a href="javascript:show_calendar('query.travel_date1');"><img src="../css/images/cal.gif" border="0"></a></td>
            </tr>
        <tr>
            <td colspan="10"><input class="formbutton" type="submit" name="submit" value="Search" /></td>
            
        </tr>
    </tbody>
</table>

</form>

<?php
require '../include/sqlconn.php';
$travel_dater =trim($_POST['travel_date']);

$vehicle_number =trim($_POST['vehicle_number']);
$travel_date=explode("/", $travel_dater);
$travel_date=$travel_date[2]."-".$travel_date[0]."-".$travel_date[1];

$travel_date1r =trim($_POST['travel_date1']);
          $travel_date1=explode("/", $travel_date1r);
          $travel_date1=$travel_date1[2]."-".$travel_date1[0]."-".$travel_date1[1];
          
if(isset ($_POST['submit']))
{ ?>

  <table border="1" width="100%"><thead>
<tr><td>Issue Date</td><td>Departure Date</td><td>Route</td><td>First name</td><td>Last Name</td><td>TicketID</td><td>Amount</td><td>Phone No.</td><td>Total Amount</td><td>Status</td><td>Vehicle No.</td><td>Time</td><td>Bus Type</td><td>User</td><td>Location</td></tr>
      </thead>
    <?php
if (empty ($travel_dater) || empty ($travel_dater) || !empty ($location) &&  !empty ($user))
    {
     $sqlgendateuser="select * from ticket where  location='$location'  and user ='$user' order by date_issue ";
              $result =mysqli_query($con,$sqlgendateuser);
              $sqlgenuseramount="select SUM(fare_amount) from ticket where location='$location'  and user ='$user' order by date_issue ";
              $result2 =mysqli_query($con,$sqlgenuseramount);
               echo "<font color='red'>Display All in $location for user $user</font>";
              }


 if (!empty ($travel_dater) && !empty ($travel_dater) && !empty ($location) &&  !empty ($user))
    {
     $sqlgendateuser="select * from ticket where date_issue between '$travel_date' and '$travel_date1' and location='$location'  and user ='$user' order by date_issue ";
              $result =mysqli_query($con,$sqlgendateuser);
              $sqlgenuseramount="select SUM(fare_amount) from ticket where date_issue between '$travel_date' and '$travel_date1' and location='$location'  and user ='$user' order by date_issue ";
              $result2 =mysqli_query($con,$sqlgenuseramount);
               echo "<font color='red'> between date $travel_date and $travel_date1 </font>";
              }





        while ($row=mysqli_fetch_assoc($result))
        {
             echo "<tbody>";
                   echo "<tr>";
    foreach ($row as $value)
    {
        echo "<td>$value</td>";

   }
   echo "</tr>";
    echo "</tbody>";
   
}
        
while ($row1=mysqli_fetch_assoc($result2))
        {
                   echo "<tfoot><tr><td colspan='6' align='right'><b>TOTAL SUM</b></td>";
    foreach ($row1 as $value)
    {
        echo "<td colspan='3' align='right'><b>N$value.00</b></td>";

   }
   echo "<td colspan='6'></td></tr></tfoot>";


}

    
    
  

}


?>

</table>
</fieldset>
</body>
</html>
