<?php session_start(); 
$ticketid = $_SESSION['ticketid'];
require '../include/sqlconn.php';
$sqlselect="select * from company_info";
$sqlselect1="select * from ticket where ticketid ='$ticketid' ";
$resultsel = mysqli_query($con,$sqlselect);
$resultsel1 = mysqli_query($con,$sqlselect1);
$sqlupdate ="update ticket set payment_status='Paid' where ticketid='$ticketid'  ";
 mysqli_query($con,$sqlupdate);
?>

<fieldset><legend></legend>

<?php
while ($row =mysqli_fetch_assoc($resultsel))
   {
     extract($row)  ;

     echo "<font><center><big><big>$name</big></big></center></font>";
      echo "<font><center><big>$address</big></center></font>";
       echo "<font><center><big>$email"." , ".$phone."</big></center></font>";
   }
while ($row1 =mysqli_fetch_assoc($resultsel1))
   {
     extract($row1)  ;
     
   echo "<font><small>$date_issue</small></font>". " <div align='right'><small><b>NO: $ticketid</b></small></div>";

   }
?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Print Ticket</title>
                <script language="javascript" type="text/javascript">
function printhide(d)
{
    document.getElementById(d).style.visibility="hidden";
}
</script>
    </head>
    <body bgcolor="#F2EBDD">
       
        <table border="0" width="60%" >
            <thead>
                <tr>
                    <th colspan="2">Ticket Info</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="50%">Name</td>
                    <td width="50%"><?php echo$firstname."   ".$lastname ;?></td>
                </tr>
                
                    
                
                <tr>
                    <td>Departure</td>
                    <td><?php echo $date_travel ;?></td>
                </tr>
                <tr>
                    <td>Route</td>
                    <td><?php echo$route; ?></td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td><?php echo "N". $fare_amount;?></td>
                </tr>
                <tr>
                    <td>Bus number</td>
                    <td><?php echo $vehicle_number;?></td>
                </tr>

            </tbody>

        </table>

                </body>
</fieldset>
<input class="formbutton" type="button" value="Print" onclick="printhide('print'); print();window.close()" id="print" />
</html>
