<?php session_start(); 
require '../include/sqlconn.php';
$sqlselect="select * from route";
$sqlselect1="select * from dep_time";
$sqlselect2="select * from route";
$sqlselect3="select * from bus_info";
$resultsel = mysql_query($sqlselect);
$resultsel1 = mysql_query($sqlselect1);
$resultsel2 = mysql_query($sqlselect2);
$resultsel3 = mysql_query($sqlselect3);
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
         <script language="javascript" type="text/javascript">
 function display_alert(){
     var a = document.getElementById("a").value
     var b = document.getElementById("b").value
     var c = document.getElementById("c").value
     if(a=="" || b=="" || c==""){
    alert("All fields required!")
     }
 }

 </script>
    </head>


    <body>
        <fieldset><legend align="center">Find Bus</legend>
            <form method="POST" name="findbus" action="findpage.php">

        <table border="0">
                           <tr>
                    <td>From</td>
                    <td><select class="textfield" name="frombus" id="a"><option value="" class="field">Pick Bus Type</option><?php while ($row = mysql_fetch_assoc($resultsel)){
    extract($row); echo "<option value='$code'>$route_name</option>"; } ?></select></td>
                    
                
                        <td>To</td>
                        <td><select class="textfield" name="tobus" id="b"><option value="" class="field">Pick Bus Type</option><?php while ($row = mysql_fetch_assoc($resultsel2)){
    extract($row); echo "<option value='$code'>$route_name</option>"; } ?></select></td>
                    </tr>

                    <tr>
                      
                    <td> Date</td>
                    <td><input class="textfield" type="text" name="travel_date" value="" id="c" READONLY onclick="show_calendar('findbus.travel_date');"><a href="javascript:show_calendar('findbus.travel_date');"><img src="../css/images/cal.gif" border="0"></a></td>
                </tr>
                  
                       
                <tr>
                    <td colspan="2" align="center"><input class="formbutton" type="submit" value="Search"  name="submit" onclick="display_alert()" /></td>

                </tr>


        </table>

        </form>
        </fieldset>
       
    </body>
</html>
