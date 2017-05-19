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
  <link rel="stylesheet" href="css/form.css" />
  
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
  
</head>


<body class='pagepg'>
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

    <div class="container">
        <div class="row confrmtic">
              
            <div class="col-lg-9 confrmcol">
            
            <div class="col-lg-10 confrmcols">
                <div class="col-lg-2 clspad"><label class="flicon"></label></div>
                <div class="col-lg-3"><label class="lblcls">Colombo (CMB) <br/> 07 May 10.45</label></div>
                <div class="col-lg-2 clspad"><label class="arricon"></label></div>
                <div class="col-lg-3 "><label class="lblcls">Kuala Lumpur (KUL) <br/>07 May 17.05</label></div>
                <div class="col-lg-2 clspad"><label class="lblcls">1 Stop 3hr 50min</label></div>                
            </div>
            <div class="col-lg-1 flticbar">
                <a href=''>Flight Details</a>
            </div>
            </div>
            
            <div class="col-lg-9 confrmcol1">            
            <div class="col-lg-10">
                <div class="col-lg-2"><label class="flicon"></label></div>
                <div class="col-lg-3 "><label class="lblcls">Kuala Lumpur (KUL) <br/> 08 May 08.45</label></div>
                <div class="col-lg-2 clspad"><label class="arricon"></label></div>
                <div class="col-lg-3 "><label class="lblcls">Colombo (CMB) <br/>08 May 09.45</label></div>
                <div class="col-lg-2 clspad"><label class="lblcls">1 Stop 3hr 50min</label></div>                
            </div>
            <div class="col-lg-1"></div>
            </div>
       
            <div class="col-lg-3 ticbck">
                <div class='ticfront'>
                    <label>Trevellers :1</label><br/>
                    <label class='lbltfront'>Total Amount</label>
                    <label class='lblsec'>LKR 26,000</label>
                    
                    
                </div>
                <div class='ticsec'><a>BASE FARE</a></div>
            </div>

        </div>
        
        
        <div class="row">
            <div class='col-lg-4 ticthr'>
                <table class="table table-bordered tblgrand">
                <tbody>
                    <tr>
                        <td><label id='lblfare'>Base Fare :</label></td>
                        <td><label id='lblfaresub'></label></td>
                    </tr>
                    <tr>
                        <td><label id='lblinfor'>1 Adult(1* 26,000)</label></td>
                        <td><label id='lblinforsub'>LKR 26,000</label></td>
                    </tr>
                    <tr>
                        <td><label id='lbltax'>Taxes :</label></td>
                        <td><label id='lbltaxsub'></label></td>
                    </tr>
                    <tr>
                        <td><label id='lblfarenfo'>1 Adult(1* 10,577)</label></td>
                        <td><label id='lblfarenfosub'>LKR 10,577</label></td>
                    </tr>
                    <tr>
                        <td><label id='lbltot'>Total AirFare</label></td>
                        <td><label id='lbltotsub'>LKR 36,577</label></td>
                    </tr>
                    <tr>
                        <td><label id='lbldisc'>web fare discount</label></td>
                        <td><label id='lbldiscsub'>0</label></td>
                    </tr>
                    <tr>
                        <td><label id='lblprice'>Total Price</label></td>
                        <td><label id='lblpricesub'>LKR 36,577</label></td>
                    </tr>
                </tbody>
            </table>
                
            </div> 
        </div>        
        <div class='row clshead'>
            <div class='col-lg-12'>
                <div class='col-lg-11' ><h5 class='headersty'>TRAVELLER DETAILS</h5></div>
            </div>
        </div>
        <form action="" method="" id="frmflighttic">
        <div class='row clshead1'>
            <div class='col-lg-12'>
                <div class='col-lg-11'><h5 class='headersty'>TRAVELLER - 1 (ADULT)</h5></div>
            </div>
            <div class='col-lg-12'>
                <div class='col-lg-2'>
                    <label class='lblin'>TITLE</label><br/>
                    <input class='infrm1' type='text' id='trvtitle' name='nbtrvtitle'>
                </div>
                <div class='col-lg-3'>
                    <label class='lblin'>OTHER NAMES (FIRST NAME)</label><br/>
                    <input type='text' class='infrm' id='trvother' name='nbtrvother'>
                </div>
                <div class='col-lg-3'>
                    <label class='lblin'>SURNAME (LAST NAME)</label><br/>
                    <input type='text' class='infrm' id='trvsurname' name='nbtrvsurname'>
                </div>
            </div>
        
            <div class='col-lg-12'>
                <div class='col-lg-11'>
                    <label class='lblnote'>ADD OPTIONAL (PASSPORT AND FREQUENT FLYER NUMBER)</label>
                </div>    
            </div>
        </div>
        <div class='row ticfour ticfoursub'>
            <div class='col-lg-12'>
                <div class='col-lg-2'>
                    <label class='lblin'>PASSPORT NUMBER</label><br/>
                    <input type='text' class='infrm2' id='trvpass' name='nbtrvpass'>
                </div>
                <div class='col-lg-2'>
                    <label class='lblin'>EXPIARATION DATE</label><br/>
                    <input type='text' class='infrm2' id='trvexpdate' name='nbtrvexpdate'>
                </div>
                <div class='col-lg-2'>
                    <label class='lblin'>ISSUING COUNTRY</label><br/>
                    <input type='text' class='infrm2' id='trvcountry' name='nbtrvcountry'>
                </div>
                <div class='col-lg-2'>
                    <label class='lblin'>DATE OF BIRTH</label><br/>
                    <input type='text' class='infrm2' id='trvdbdate' name='nbtrvdbdate'>
                </div>
            </div>
        </div>    
       
        <div class='row ticfour subcontact'>
            <div class='col-lg-12'>
                <div class='col-lg-11 lblcontact'>
                    <label class='lblborder headersty'>CONTACT INFORMATION</label><br/>
                    <p>Your mobile Number will be used only for sending flight related communication</p>
                </div>
            </div>    
            <div class='col-lg-12 areacontact'>
                <div class='col-lg-2'>
                    <label class='lblin'>MOBILE NUMBER</label><br/>
                    <input type='text' class='infrm2' id='trvmobile' name='nbtrvmobile'>
                </div>
                <div class='col-lg-2'>
                    <label class='lblin'>PASSPORT DATE</label><br/>
                    <input type='text' class='infrm2' id='trvpdate' name='nbtrvpdate'>
                </div>
            </div>
        </div>
        </form>
        <div class='row ticfour subcontact'>
            <div class='col-lg-12'>
                <div class='col-lg-11'>
                    <input type='radio' id='trvradio' name='nbtrvradio'>
                    By clicking the "Continue Booking" button below, below, I understand and agree with the Rules and Restrictions of this fare. 
                    I agree to the Privacy Policy and the Terms and Conditions of Meera(pvt) ltd
                </div>
            </div> 
        </div>
        
        <div class='row ticfour clshead'>
            <div class='col-lg-12'>
                <div class='col-lg-11'><h5 class='headersty'>PAYMENT OPTION</h5></div>
            </div>
        </div>    
        <div class='row ticfour'>
            <div class='col-lg-12 ticfv'>
                <label class='ticfvsub'>Total to be paid is LKR 36,577</label>
            </div>
            <div class='col-lg-12'>                
                <div class='col-lg-4 btncls1'><button class='btnpaylate'></button></div>                
                <div class='col-lg-4 btncls'><button class='btnpaynow'></button></div>                
                <div class='col-lg-4 btncls1'><button class='btnembassy'></button></div>                
            </div>
        </div>
        
        
        <form action="" method="" id="frmempassy">
        <div class='row'>
            <div class='col-lg-12 clshead'>
                <div class='col-lg-11'><h5 class='headersty'>EMBASSY PURPOSE</h5></div>
            </div>
        </div>
        <div class='row efrmcls'>
                <div class="col-lg-12 empcls" >
                    <label class="lblin">EMBASSY PURPOSE</label><br/>
                    <input type="text" class="emppurpose" id="embassyid" name="embassynm"/>
                </div>
                <button class="btncontinue">continue</button>
                <div class="col-lg-4 empcls">
                    <label class="lblin">SURNAME</label><br/>
                    <input type="text" class="empsurname" id="emsureid" name="emsurenm"/>
                </div>
                <div class="col-lg-4 empcls">
                    <label class="lblin">OTHER NAME</label><br/>
                    <input type="text" class="empother" id="emotherid" name="emothernm"/>
                </div>
                <div class="col-lg-4 empcls">
                    <label class="lblin">PASSPORT NUMBER</label><br/>
                    <input type="text" class="empsurname" id="emppassportid" name="emppasspornm"/>
                </div>
        </div>
        </form>    
    </div>
    <script>
      
       $('.btnembassy').click(function(){
            $("#frmempassy").fadeToggle( "slow", "linear" );
       });
    
    
    </script>
<?php

include "footer.php";
?>

</body>

</html>