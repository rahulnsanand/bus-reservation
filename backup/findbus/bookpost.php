<?php session_start();


          if (isset ($_POST['submit1']))
        {
            header("location:response.php");
             $date= $_SESSION['date'];
           $route = $_SESSION['route'];
           $dep_time =$_SESSION['dep_time'];
           $bus =$_SESSION['bus'];
            $vehicle_number=$_SESSION['vehicle_number'];
           $amount =$_SESSION['amount'];
             $format=y."-".m."-".d;
        $dated= date($format);

           include '../ticket/ticketid.php';


              $lastname =trim($_POST['lastname']);
              $firstname =trim($_POST['firstname']);
              $phone_number =trim($_POST['phone']);
               $_SESSION['lastname']=$lastname;
               $_SESSION['firstname']=$firstname;
              $total_amount =$amount;
              $ticketid=$route."00".$num;
              $payment_status ="Pending";

              $vechile_number =trim($_POST['vechile_number']);

              $_SESSION['ticketid']=$ticketid;

$sql ="insert into ticket(date_issue,date_travel,route,firstname,lastname,ticketid,fare_amount,phone_number,total_amount,payment_status,vehicle_number,dep_time,bus_type)value('$dated','$date','$route','$firstname','$lastname','$ticketid','$amount','$phone_number','$total_amount','$payment_status','$vehicle_number',' $dep_time','$bus')";
mysql_query($sql);


        }


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
         <script type="text/javascript" src="../script/datepicker.js"></script>


    </head>


    <body>


        <fieldset><legend align="center">Ticket</legend>
            <form method="POST" name="ticket" action="bookpost.php">

        <table border="1">

                    <tr>
                    <td>Lastname</td>
                    <td><input class="textfield" type="text" name="lastname" value="" class="field"/></td>
                </tr>

               <tr>
                    <td>Firstname</td>
                    <td><input class="textfield" type="text" name="firstname" value="" class="field"/></td>
                </tr>

                <tr>
                    <td>Phone Number</td>
                    <td><input class="textfield" type="text" name="phone" value="" /></td>
                </tr>

                <tr>
                    <td colspan="2" align="center"><input class="formbutton" type="submit" value="Submit"  name="submit1" class="submit"  /></td>

                </tr>


        </table>
 <?php
       

        ?>



        </form>
        </fieldset>

    </body>
</html>
