<?php require '../include/sqlconn.php';
$sqlselect="select * from price order by route";
$sqlselect1="select * from dep_time";
$sqlselect2="select * from bus_type order by name";
$sqlselect3="select * from bus_info order by bus_number";
$resultsel = mysqli_query($con,$sqlselect);
$resultsel1 = mysqli_query($con,$sqlselect1);
$resultsel2 = mysqli_query($con,$sqlselect2);
$resultsel3 = mysqli_query($con,$sqlselect3);
?>

<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
         <script type="text/javascript" src="../script/datepicker.js"></script>

    </head>


    <body>
        <fieldset><legend><b>POSTING</b></legend>
            <form method="POST" name="posting" action="post.php">

        <table border="0">
                           <tr>
                    <td>Travelling Date</td>
                    <td><input class="textfield" class="textfield" type="text" name="travel_date" value="" READONLY onclick="show_calendar('posting.travel_date');"><a href="javascript:show_calendar('posting.travel_date');"><img src="../css/images/cal.gif" border="0"></a></td>
                </tr>
                <tr>
                        <td>Route</td>
                        <td><select class="textfield" name="route"><option value="" class="field">Pick Bus Type</option><?php while ($row = mysqli_fetch_assoc($resultsel)){
    extract($row); echo "<option value='$route'>$route</option>"; } ?></select></td>
                    </tr>

                    <tr>
                        <td>Time</td>
                        <td><select class="textfield" name="time"><option value="" class="field">Pick Time</option><?php while ($row = mysqli_fetch_assoc($resultsel1)){
    extract($row); echo "<option value='$time'>$time</option>"; } ?></select></td>
                    </tr>
                     <tr>
                        <td>Bus Type</td>
                        <td><select class="textfield" name="bus_type"><option value="" class="field">Pick Bus</option><?php while ($row = mysqli_fetch_assoc($resultsel2)){
    extract($row); echo "<option value='$name'>$name</option>"; } ?></select></td>
                    </tr>
                     <tr>
                        <td>Bus Number</td>
                        <td><select class="textfield" name="bus_number"><option value="" class="field">Pick Bus Number</option><?php while ($row = mysqli_fetch_assoc($resultsel3)){
    extract($row); echo "<option value='$bus_number'>$bus_number</option>"; } ?></select></td>
                    </tr>
                
                <tr>
                    <td colspan="2" align="center"><input class="formbutton" type="submit" value="Submit"  name="submit" class="submit"  /></td>

                </tr>


        </table>

        </form>
        </fieldset>
        <?php


        // put your code here
          if (isset ($_POST['submit']))
        {
          
          $travel_date =trim($_POST['travel_date']);
          $travel_date=explode("/", $travel_date);
          $travel_date=$travel_date[2]."-".$travel_date[0]."-".$travel_date[1];
            $route =trim($_POST['route']);
              $time =trim($_POST['time']);
              $bus_type =trim($_POST['bus_type']);
              $bus_number=trim($_POST['bus_number']);
             


        if (!empty ($travel_date) && !empty ($route) && !empty ($bus_number) && !empty ($bus_type)){
$sql ="insert into pos_bus(date,route,time,bus_type,bus_number)value('$travel_date','$route','$time','$bus_type','$bus_number')";
mysqli_query($con,$sql);

         }
            else
          {
              echo "<font color='red'>"."Fill all fields"."</font>";
           }

        }

        ?>

    </body>
</html>
