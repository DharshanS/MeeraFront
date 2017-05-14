<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>hotel</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/jquery-ui.css" />
  <link rel="stylesheet" href="css/main.css" />
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
  
</head>


<body>
    <div class="container-fluid flight_main">
        
             <div class="navbar">
                 <div class="col-lg-4"><a href="#" class="brand"><img src="images/bookinglog.png"/></a></div>
        
                 <div class="col-lg-8">
                     <div class="navbar-inner" >
                         <nav class="pull-right">
                             <ul class="nav fstsub">
                                 <li><a href="" class="phonecls">Hotline :+94777776569</a></li>
                             </ul>
                         </nav>    
                     </div>
                 </div>        
             </div>                 
      <!--end navbar --> 
    </div>

    <div class="container flight_con">
        <div class="row fstrow">
            <div class="col-lg-12 fstmainrow">                
                <div class="col-lg-2 fstcol1">Colombo (CMB)</div>
                <div class="col-lg-2 fstcol1">Kuala Lumpur (KUL)</div>
                <div class="col-lg-2 fstcol1" >DEPART <br/>
                        18/04/2017</div>
                <div class="col-lg-2 fstcol1">RETURN <br/>
                        21/04/2017</div>
                <div class="col-lg-2 fstcol1">1 Adult 0 Infant 0 Child <br/>
                        Economy</div>
                <div  class="col-lg-2 fstcol1"><button class="btnsearch">Edit Search</button></div>
            </div>
        </div>
                
        <div class="row secrow">
            <form action="" method="" id="frmflight">
            <div class="col-lg-12 secrowmain">                
                <div class="col-lg-2 secrowcol1" >
                    <input type="radio" class='txtradio' name="tripval" id="roundtripval"/> Round Trip <br/>
                    <input type="radio" class='txtradio' name="tripval" id="onewayval"/> One Way
                </div>
                <div class="col-lg-2 secrowcol2">
                     <input type="text" class='lbltxtarea' style="width: 200px;" value="DEPART FORM"/>
                     <input type="text" name="depfrom" id="departfromid" value="CMB, COLOMBO" style="width: 200px;border:none;"/>                    
                </div>
                <div class="col-lg-2">
                    <input type="text" class='lbltxtarea' style="width: 200px;" value="DESTINATION"/>
                    <input type="text" name="depdestination" id="depdestinationid" value='KUL,Kuala Lumpur (KUL)' style="width: 200px;border:none;"/>
                </div>
                <div class="col-lg-2 secrowcol3">
                    <input type="text" class='lbltxtarea' style="width: 50%;" value="ADULTS:" />
                    <input type="text" name="depadult"  id="depadultid" style="width: 50%;border:none;" id="adultcol" />
                </div>
                <div class="col-lg-2 secrowcol4">
                    <input type="text" class='lbltxtarea' style="width: 50%;float:left;margin: 0px 0px 0px -23px;" value="CHILDREN:"/>                   
                    <input type="text" class='lbltxtarea' style="width: 50%;float:left;margin: 0px 0px 0px 9px;" value="INFANTS:"/>
                     <input type="text" name="depchild"  id='depchildid'/>
                    <input type="text" name="depinfant" id='depinfantid'/> 
                </div>
                <div  class="col-lg-1 secrowcol5"><button class='flightbtn'></button></div>
            </div>
        
            <div class="col-lg-12 thdrowmain">                
                <div class="col-lg-2 thdrowcol1">
                    
                </div>
                <div class="col-lg-2">
                    <input type="text" class='lbltxtarea' style="width:200px;" value="DEPART DATE"/>
                     <input type="text" name="depdate" id="depdateid" style="width:200px;border:none;"/>                    
                </div>
                <div class="col-lg-2 thdrowcol2">
                    <input type="text" class='lbltxtarea' style="width:200px;" value="ARRIVAL DATE"/>
                    <input type="text" name="deparrive" id="deparriveid" style="width:200px;border:none;"/>
                </div>
                <div class="col-lg-3 thdrowcol3">
                    <input type="text" class='lbltxtarea' style="width: 110px;margin: 0px 0px 0px 6px;" value="CLASS:"/>
                    <input type="text" name="depclass" id="depclassid"/>
                </div>
                <div class="col-lg-3 thdrowcol4">
                     <input type="text" class='lbltxtarea'  style="margin: 0px 82px;float: left;width: 120px;" value="SELECT AIRLINE:"/>
                    <input type="text" name="depairln" id="depairlnid"/> 
                </div>
                
            </div>
            </form>    
        </div>  
          
        <div class="row frthrowmain">
            
            <div class="col-lg-12 frthrowsub">                
            </div>
            <table>
                <tbody>
                    <tr class="tblfst">
                        <td><textarea id='departfromid' name='departfrom' value=''></textarea> </td>
                        <td><textarea id='departtoid' name='departto' value=''></textarea> </td>
                        <td><textarea id='departairlineid' name='departairline' value=''></textarea> </td>
                        <td><textarea id='departrootid' name='departroot' value='' ></textarea> </td>
                        <td><textarea id='departmid' name='departm' value=''></textarea> </td>
                    </tr>
                    <tr class="tblscd">
                        <td><textarea id='arrivefromid' name='arrivefrom' value=''></textarea> </td>
                        <td><textarea id='arrivetoid' name='arriveto' value=''></textarea> </td>
                        <td><textarea id='arriveairlineid' name='arriveairline' value=''></textarea> </td>
                        <td><textarea id='arriverootid' name='arriveroot' value=''></textarea> </td>
                        <td><textarea id='arrivetmid' name='arrivetm' value=''></textarea> </td>
                    </tr>
                </tbody>
            </table> 
            <div class='ticketright'></div>
            
        </div>
    </div>
<?php

include "footer.php";
?>

</body>

</html>