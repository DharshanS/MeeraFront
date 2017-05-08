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
  <link rel="stylesheet" href="css/main_sample.css" />
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
  
</head>


<body>

<div class='row'>

    <ul class="nav navbar-nav navbarone navbar-left cntbar">
        <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> MEERA1958@YAHOO.CO.IN</a></li>
        <li class='sep'></li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span> SEARCH</a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right lnkbar">
        <li class="active"><a href="#">ABOUT</a></li>        
        <li><a href="#">CONTACT US</a></li>
      </ul>

</div>
<nav class="navbar navbar-inverse navfst">
  <div class="navmain">
    <div class="navbar-header col-sm-3 col-md-4 col-lg-4 logdiv">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img class='img-responsive' src='images/logo.jpg' />
    </div>
    <div class="collapse navbar-collapse col-sm-9 col-md-8 col-lg-8" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" class='glyphicon glyphicon-home'></a></li>
        <li><a href="#">DESTINATION</a></li>
        <li><a href="#">TOURS</a></li>
        <li><a href="#">BLOG</a></li>
        <li><a href="#">PAGES</a></li>
        <li class='moreopt'><a href="#"><div class='btnbook'>BOOK NOW</div></a></li>
        <li class='moreopt'><a href="#"><div class='btncall'></div></a></li>
        <li class='moreopt'><a href="#" style='padding:0px'>(+94) 777776569</a></li>
        <li class='mrset'><a href="#">ABOUT</a></li>
        <li class='mrset'><a href="#">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</nav>


 
<div class="container-fliud slimg"> 
 <div class='row'>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>   
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
              <div class="item active">
                  <img src="images/city-walk.jpg" alt="First Slide">
              </div>
              <div class="item">
                  <img src="images/pic_top_luxury.jpg" alt="Second Slide">
              </div>
              <div class="item">
                  <img src="images/singapore.jpg" alt="Third Slide">
              </div>
          </div>
          <!-- Carousel controls -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>
      
   </div>
   <div class='row'>
     <div class='col-xs-10 col-sm-5 col-md-5 col-lg-5 ticketbox'>
        <div class='row'>
          <div class='col-sm-6 col-md-6 col-lg-6'>
            <div class='btnflight'><h4>FLIGHT</h4></div>
          </div>
          <div class='col-sm-6 col-md-6 col-lg-6'>
            <div class='btnhotel'><h4>HOTELS</h4></div>
          </div>
          <div class='row'>
          <div class='col-sm-12 col-md-12 col-lg-12' style='text-align:center;color:#081786'>
            <div><h4>FIND CHEAP TICKETS - SAVE BIG!</h4></div>
          </div>
          </div>
          <div class='row'>
          <div class='col-sm-12 col-md-12 col-lg-12' style='text-align:center;color:#081786'>
            <div style='float:left;padding: 0px 14px;'><input type='radio' name='rdselect'/> ROUND TRIP</div>
            <div style='float:left;padding: 0px 14px;'><input type='radio' name='rdselect'/> ONE WAY</div>
          </div>
          </div>

          <div class='row'>
          <div class='col-sm-12 col-md-12 col-lg-12'>
            <div style='float: left;padding: 15px 6px 0px 14px;width: 100%;'>
                <label for="frmcountry" style='width:100%'>  
                <input id="frmcountry" list="frmcountryelse" style='width:100%;height:35px'  placeholder='FROM'>
                <datalist id="frmcountryelse">
                  <option value="CMB - COLOMBO, SRI LANKA"></option>
                  <option value="IN - INDIA"></option>
                  <option value="ENG -ENGLAND"></option>
                  <option value="AUS - AUSTRELIA"></option>
                </datalist>
                 </label>
             </div>
            </div>
            </div>

            <div class='row'>
            <div class='col-sm-12 col-md-12 col-lg-12'>
             <div style='float: left;padding: 15px 6px 0px 14px;width: 100%;'>
                <label for="tocountry" style='width:100%'>  
                 <input id="tocountry" list="tocountryelse" style='width:100%;height:35px'  placeholder='TO'>
                <datalist id="tocountryelse">
                  <option value="CMB - COLOMBO, SRI LANKA"></option>
                  <option value="IN - INDIA"></option>
                  <option value="ENG -ENGLAND"></option>
                  <option value="AUS - AUSTRELIA"></option>
                </datalist>
                 </label>
             </div>
             </div>
             </div>

             <div class='row'>
             <div class='col-sm-6 col-md-6 col-lg-6'>
             <div style='float: left;padding: 15px 6px 0px 14px;width: 100%;'>
                 <label for="datepicker" style='width:100%'>
                 <input type='text' id="datepicker" style='width:100%;height:35px'  placeholder='DEPART'>
                </label>
               
             </div>
            </div>
            
             <div class='col-sm-6 col-md-6 col-lg-6'>
             <div style='float: left;padding: 15px 6px 0px 14px;width: 100%;'>
                 <label for="datepicker2" style='width:100%'>
                 <input type='text' id="datepicker2" style='width:100%;height:35px'  placeholder='DEPART'>
                </label>
             </div>
            </div>
            </div>

            <div class="row">
                <div class='col-sm-3 col-md-3 col-lg-3'> 
                    <div style='float: left;padding:15px 0px 0px 13px;width: 100%;'>
                        <label for="" style='width:100%'>  
                            <select class="selectpicker" id='sltadult' style='width:100%;height:35px' placeholder='ADULTS'>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                              </select>
                        </label>
                    </div>
                </div>
                 <div class='col-sm-3 col-md-3 col-lg-3'> 
                    <div style='float: left;padding: 15px 0px 0px 0px;width: 100%;'>
                        <label for="" style='width:100%'>  
                            <select class="selectpicker" id='sltchildren' style='width:100%;height:35px' placeholder='CHILDRAN'>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                              </select>
                        </label>
                    </div>
                </div>
                 <div class='col-sm-3 col-md-3 col-lg-3'> 
                    <div style='float: left;padding:15px 0px 0px 0px;width: 100%;'>
                        <label for="" style='width:100%'>  
                            <select class="selectpicker" id='sltinfants' style='width:100%;height:35px' placeholder='INFANTS'>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                              </select>
                        </label>
                    </div>
                </div>
                 <div class='col-sm-3 col-md-3 col-lg-3'> 
                    <div style='float: left;padding:15px 5px 0px 0px;width: 100%;'>
                        <label for="" style='width:100%'>  
                            <select class="selectpicker" id='sltcls' style='width:100%;height:35px' placeholder='CLASS'>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                              </select>
                        </label>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class='col-sm-12 col-md-12 col-lg-12'>
                    <div class="btnsearch"><h4>SEARCH</h4></div>
                </div>
            </div>
          </div>

      </div>
   </div>
    <div class='row'>
    <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 clspck'>
          <h1>POPULAR PACKAGES</h1>
    </div>
    </div>
 
      <div class='row' style='padding-bottom:10%'>  
      <div class='glimain'>
          <div class='col-xs-10 col-sm-9 col-md-9 col-lg-9 glimg'><img class='img-responsive' src="images/packgesimg1.png" width='100%'></div>
          
          <div class='col-xs-10 col-sm-3 col-md-3 col-lg-3 glimg'><img class='img-responsive' src="images/glimg2.jpg" width='100%' ></div>

         <div class='col-xs-10 col-sm-5 col-md-5 col-lg-5 glimg glimgsub'><img class='img-responsive' src="images/glimg3.jpg" width='100%' style='height:200px'></div>

         <div class='col-xs-10 col-sm-4 col-md-4 col-lg-4 glimg glimgsubs' ><img class='img-responsive' src="images/glimg4.jpg" width='100%' style='height:200px'></div>

        </div>
      </div>
        
      <div class='row'>
         <div class='col-sm-12 col-md-6 col-lg-6 traveldetails'>
           <div class='col-sm-12 col-md-2 col-lg-2'></div>
           <div class='col-sm-12 col-md-10 col-lg-10' style='padding: 0% 5%;'><h5>CUSTOMER REVIEWS  </br> LOREM IPSLIM IS SIMPLY MMY TEXT</h5></div>
           <div class='col-sm-12 col-md-2 col-lg-2'><div class='imgperson'></div></div>
           <div class='col-sm-12 col-md-10 col-lg-10' style='padding: 2% 5%;'>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat nulla turpis, ut pretium magna hendrerit nec. Suspendisse facilisis quis nulla at convallis.Suspendisse facilisis quis nulla at convallisSuspendisse facilisis quis nulla at convallis. </p>
              <p style='color: #0cb1d8;font-weight: 600;'>Mary Doe <br/> marydeo.com</p>
            </div>
         </div>
           
          <div class='col-sm-12 col-md-6 col-lg-6' style='background-color:#e0e7e8;padding: 5% 0%;'>
           
           <div class='col-sm-12 col-md-12 col-lg-12' style='padding: 0% 5%;'><h5>RECENT TRAVEL ARTICLES </br> LOREM IPSLIM IS SIMPLY MMY TEXT</h5></div>
           <div class='col-sm-3 col-md-2 col-lg-2' style='padding: 2% 0% 0% 6%;'><div class='imgperson' style='background-size:70%;height:70px;'></div></div>
           <div class='col-sm-9 col-md-10 col-lg-10' style='padding: 5% 5% 2% 5%;'>
              <p style='font-size: 13px;'> 2017 : THE YEAR YOU MAKE TRAVEL HAPPAN <br/>
                  BY SKAT - JANUARY 9, 2017 - 2 COMMENTS
                </p>
              </div>
              <div class='col-sm-3 col-md-2 col-lg-2' style='padding: 0% 0% 0% 6%;'><div class='imgperson' style='background-size: 70%;height:70px;'></div></div>
           <div class='col-sm-9 col-md-10 col-lg-10' style='padding:3% 5% 1% 5%'>
              <p style='font-size: 13px;'> 2017 : THE YEAR YOU MAKE TRAVEL HAPPAN <br/>
                  BY SKAT - JANUARY 9, 2017 - 2 COMMENTS
                </p>
              </div>
            </div>
          </div>
       
        <div class='container'>
          <div class='row'>
              <div class='col-lg-12 packagedetail'>
                <p>INTERNATIONAL PACKAGES<br/> 
                LOREM IPSUM IS SIMPLY MMY TEXT</p>
              </div>

          </div>
          <div class='row'>
            <div class='col-sm-6 col-md-3 col-lg-3 pckall' >
              <img  class='img-responsive' src='images/pack.jpg' style='width:100%'/>
              <div class='pckimg col-sm-12 col-md-12'>
              <p>MAJASTIC BANGKOK</p>
              <p class='pckimgp'>6 days</p>
              <p>Sed dapibus massa a <br/> 
              tincidunt convallis. Etiam <br/>
              eget neque vet velit porttitor</p>
              <br/>
              <p class='pckimgp2'>$1,499.00 </p><p class='pckimgp3'>$1,250.00</p>
              </div>
            </div>

            <div class='col-sm-6 col-md-3 col-lg-3 pckall'>
              <img  class='img-responsive' src='images/pack.jpg' style='width:100%'/>
              <div class='pckimg'>
              <p>MAJASTIC BANGKOK</p>
              <p class='pckimgp'>6 days</p>
              <p>Sed dapibus massa a <br/> 
              tincidunt convallis. Etiam <br/>
              eget neque vet velit porttitor</p>
              <br/>
              <p class='pckimgp2'>$1,499.00 </p><p class='pckimgp3'>$1,250.00</p>
              </div>
            </div>

            <div class='col-sm-6 col-md-3 col-lg-3 pckall'>
              <img  class='img-responsive' src='images/pack.jpg' style='width:100%'/>
              <div class='pckimg'>
              <p>MAJASTIC BANGKOK</p>
              <p class='pckimgp'>6 days</p>
              <p>Sed dapibus massa a <br/> 
              tincidunt convallis. Etiam <br/>
              eget neque vet velit porttitor</p>
              <br/>
              <p class='pckimgp2'>$1,499.00 </p><p class='pckimgp3'>$1,250.00</p>
              </div>
            </div>

            <div class='col-xs-12 col-sm-6 col-md-3 col-lg-3 pckall'>
              <img  class='img-responsive' src='images/pack.jpg' style='width:100%'/>
              <div class='pckimg'>
              <p>MAJASTIC BANGKOK</p>
              <p class='pckimgp'>6 days</p>
              <p>Sed dapibus massa a <br/> 
              tincidunt convallis. Etiam <br/>
              eget neque vet velit porttitor</p>
              <br/>
              <p class='pckimgp2'>$1,499.00 </p><p class='pckimgp3'>$1,250.00</p>
              </div>
            </div>

          </div>
          </div>

          <div class='container' style='padding:0% 6%'>
          
          <div class='row'>
            <div class='col-sm-6 col-md-3 col-lg-3' >
              <h3>Findfinder</h3>
              <p>Head office:76/A New Town, Digana, Rajawella, <br/>Kandy

              +94812375 City office :07, D.S Senanayake
              veediya, Kandy, Sri Lanka

              _9481 2203050/ 2232102 Branch office: 08, Commercial complex, Bandarawella +94 572230555</p>
            </div>

            <div class='col-sm-6 col-md-3 col-lg-3'>
            <h3>Support</h3>
            <p> Payment options <br/> Booking tips </p>
              </div>

            <div class='col-sm-6 col-md-3 col-lg-3'>
              <h3>Follow us</h3>
            </div>

            <div class='col-sm-6 col-md-3 col-lg-3'>
              <h3>Newsletter</h3>
            </div>

          </div>
          </div>



         
 </div>


</body>
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
    $( "#datepicker2" ).datepicker();
  } );
  </script>
</html>