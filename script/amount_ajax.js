 function do_amount(amount)
   {
    var ajaxreq =null;
    if (window.ActiveXObject)
     {
            ajaxreq = new ActiveXObject("Microsoft.XMLHTTP");
      }

    if (window.XMLHttpRequest)
    {
    ajaxreq = new XMLHttpRequest();
    }
     if (ajaxreq)
         {

             var route = document.getElementById("route").value;
             var bus_type = document.getElementById("bus_type").value;
            // var amount = document.getElementById("amount").value;
             if ( route != "" && bus_type != ""){
             ajaxreq.open("get", "ticketscript.php?routeid=" + route + "&" + "busid="+ bus_type, true);
             ajaxreq.onreadystatechange = function()
             {
                 if (ajaxreq.status == 200 && ajaxreq.readyState == 4)
                     {
                      document.getElementById(amount).value= ajaxreq.responseText
                     }
             }
             ajaxreq.send(null);
                          }
             else
                {
document.getElementById(g1).innerHTML = "Require Username Or Password";
                 }
         }
     else
    {
        document.write("Microsoft System Only")
    }
     }


 function do_space(space)
   {
    var ajaxreq =null;
    if (window.ActiveXObject)
     {
            ajaxreq = new ActiveXObject("Microsoft.XMLHTTP");
      }

    if (window.XMLHttpRequest)
    {
    ajaxreq = new XMLHttpRequest();
    }
     if (ajaxreq)
         {

             var dat = document.getElementById("dated").value;
             var num = document.getElementById("numb").value;
            // var amount = document.getElementById("amount").value;
             if ( dat != "" && num != ""){
             ajaxreq.open("get", "space.php?dateid=" + dat + "&" + "numberid="+ num, true);
             ajaxreq.onreadystatechange = function()
             {
                 if (ajaxreq.status == 200 && ajaxreq.readyState == 4)
                     {
                      document.getElementById(space).innerHTML= ajaxreq.responseText;
                     }
             }
             ajaxreq.send(null);
                          }
             else
                {
document.getElementById(g1).innerHTML = "Require Username Or Password";
                 }
         }
     else
    {
        document.write("Microsoft System Only")
    }
     }


    function do_validate(validate)
   {
    var ajaxreq =null;
    if (window.ActiveXObject)
     {
            ajaxreq = new ActiveXObject("Microsoft.XMLHTTP");
      }

    if (window.XMLHttpRequest)
    {
    ajaxreq = new XMLHttpRequest();
    }
     if (ajaxreq)
         {

             var val = document.getElementById("validate").value;
           //  var num = document.getElementById("numb").value;
            // var amount = document.getElementById("amount").value;
             if ( val != "" ){
             ajaxreq.open("get", "validate.php?ticketid=" + val, true);
             ajaxreq.onreadystatechange = function()
             {
                 if (ajaxreq.status == 200 && ajaxreq.readyState == 4)
                     {
                      document.getElementById(validate).innerHTML= ajaxreq.responseText;
                     }
             }
             ajaxreq.send(null);
                          }
             else
                {
document.getElementById(g1).innerHTML = "Require Username Or Password";
                 }
         }
     else
    {
        document.write("Microsoft System Only")
    }
     }

