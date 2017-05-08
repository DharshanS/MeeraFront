<!doctype html>
<?php
include "head.php";
include "header.php";
?>



<div class="container">
    
    <div class="row"><!--start slider & Form -->
        <div class="col-lg-6 col-md-6 col-sm-6 bkform">
            <form action="" method="" id="frmticket">
            <div class="col-lg-6 col-md-6 col-sm-6 flgparent">
                <button class="flightbtn"></button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 hotlparent">
                <button  class="hotelbtn"></button>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 ticktparent">
                <h5>FIND CHEAP TICKETS - SAVE BIG !</h5>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div>
                    <input type="radio" class='clsradio' id="radiotrip" name='rtic' value=""> ROUND TRIP
                    <input type="radio" class='clsradio' id="radioway" name='rtic' value=""> ONE WAY
                </div>
                <div>
                    <input type="text" class='col-lg-12 col-md-12 col-sm-12 frmcon' id="frmcountry" list="frmcountryelse" value="" placeholder="CMB - COLOMBO, SRI LANKA">
                        <datalist id="frmcountryelse">
                          <option value="CMB - COLOMBO, SRI LANKA"></option>
                          <option value="IN - INDIA"></option>
                          <option value="ENG -ENGLAND"></option>
                          <option value="AUS - AUSTRELIA"></option>
                        </datalist>
                </div>
                <div>
                    <input type="text" class='col-lg-12 col-md-12 col-sm-12 frmcon' id="tocountry" list="tocountryelse"  value="" placeholder="KUL - KUALA LUMPUR, MALAYSIA">
                        <datalist id="tocountryelse">
                          <option value="CMB - COLOMBO, SRI LANKA"></option>
                          <option value="IN - INDIA"></option>
                          <option value="ENG -ENGLAND"></option>
                          <option value="AUS - AUSTRELIA"></option>
                        </datalist>
                </div>
                <div>
                    <input type="text" class='col-lg-5 col-md-5 col-sm-5 datepickerdepcls' id="datepickerdep" value="" placeholder='DEPART'>
                    <input type="text" class='col-lg-5 col-md-5 col-sm-5 datepickertrncls' id="datepickertrn" value="" placeholder='RETURN'>
                </div>
                <div>
                    <div>
                        <select id='sltadult' class='selectpicker col-lg-3 col-md-3 col-sm-3 sladult' value="" placeholder='ADULTS'>
                            <option>ADULTS</option>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>    
                   
                    <div>
                        <select id='sltchildren' class='selectpicker col-lg-3 col-md-3 col-sm-3 slchildren' placeholder='CHILDRAN'>
                            <option>CHILDRAN</option>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                         </select>
                        
                    </div>
                    
                    <div>
                       <select id='sltinfants' class='selectpicker col-lg-3 col-md-3 col-sm-3 slinfants' value="" placeholder='INFANTS'>
                                <option>INFANTS</option>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                              </select>
                    </div>
                    
                    <div>
                      <select id='sltcls'  class='selectpicker col-lg-3 col-md-3 col-sm-3 slcls' value="" placeholder='CLASS'>
                                <option>CLASS</option>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                              </select>
                    </div>
                </div>
            </div>
            <div class='col-lg-12'>
                <button type="submit" form="frmticket" value="Submit" class='searchbtn' ></button>
            </div>
            </form>
        </div>  
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
                  <img src="images/sliderimg1.png" alt="First Slide">
              </div>
              <div class="item">
                  <img src="images/sliderimg1.png" alt="Second Slide">
              </div>
              <div class="item">
                  <img src="images/sliderimg1.png" alt="Third Slide">
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
    </div><!--End slider & Form -->    
    
    <div class='row'><!--Start POPULAR PACKAGES -->
        <div class='col-lg-12 pckcol'>
            <h3>POPULAR PACKAGES</h3>
        </div>        
    </div><!--End POPULAR PACKAGES -->
    
    <div class='row'><!--Start images country -->
        <div class="col-lg-12 councol">
           <img class='img-responsive' src="images/countryimg.png" >
        </div>
    </div><!--End images country -->
    
    <div class="row"><!--Start customer review -->
        <div class="col-lg-6 custcol">
            <div class='custcolfirst'><img class='img-responsive' src="images/customer1.png"></div>
        
            <div class='custcolsecond'>
                <p><strong>CUSTOMER REVIEWS </strong><br/>
                  RON RIVEST
                </p><br/>
            
            <p>MANY TRAVEL BOOKING SITES HAVE SPECIAL SECTIONS OF THEIR WEBSITES DEVOTED TO HELPING TREVELERS WHO HAVEN'T PLANNED FAR IN ADVANCED</p>
            </div>
        </div>
        <div class="col-lg-6 custcol custcolleft">
            <div class='custcolfirst'><img class='img-responsive' src="images/customer1.png"></div>
        
            <div class='custcolsecond'>
                <p><strong>CUSTOMER REVIEWS </strong><br/>
                  RON RIVEST
                </p><br/>
            
            <p>MANY TRAVEL BOOKING SITES HAVE SPECIAL SECTIONS OF THEIR WEBSITES DEVOTED TO HELPING TREVELERS WHO HAVEN'T PLANNED FAR IN ADVANCED</p>
            </div>        
            
        </div>
    </div><!--End customer review -->
    
    <div class='row'><!--Start INTERNATIONAL PACKAGES -->
        <div class='col-lg-12 interpckcol'>
            <h3 style='display:inline-block '>INTERNATIONAL PACKAGES</h3>
        </div>        
    </div>
    
    <div class='row intercolfirst'>
        <div class='col-lg-3'>
            <div class='colfirst'>
                <img class='img-responsive' src='images/packageimg.png'>
            </div>
            <div class='colsecond'>
                <p class='colp1'>MAJESTIC BANGKOK</p>
                <p class='colp2'> 6 days </p>                
                <p class='colp3'>Sed dapibus massa a <br/> tincidunt convallis. Etiam <br/> eget neque vel velit porttitor</p>                
                <p class='colp4'>$1,499.00</p> 
                <p class='colp5'>$1250.00</p>                
            </div>
        </div>
        <div class='col-lg-3'>
            <div class='colfirst'>
                <img class='img-responsive' src='images/packageimg.png'>
            </div>
            <div class='colsecond'>
                <p class='colp1'>MAJESTIC BANGKOK</p>
                <p class='colp2'> 6 days </p>                
                <p class='colp3'>Sed dapibus massa a <br/> tincidunt convallis. Etiam <br/> eget neque vel velit porttitor</p>                
                <p class='colp4'>$1,499.00</p> 
                <p class='colp5'>$1250.00</p>                
            </div>
        </div>
        <div class='col-lg-3'>
            <div class='colfirst'>
                <img class='img-responsive' src='images/packageimg.png'>
            </div>
            <div class='colsecond'>
                <p class='colp1'>MAJESTIC BANGKOK</p>
                <p class='colp2'> 6 days </p>                
                <p class='colp3'>Sed dapibus massa a <br/> tincidunt convallis. Etiam <br/> eget neque vel velit porttitor</p>                
                <p class='colp4'>$1,499.00</p> 
                <p class='colp5'>$1250.00</p>                
            </div>
        </div>
        <div class='col-lg-3'>
            <div class='colfirst'>
                <img class='img-responsive' src='images/packageimg.png'>
            </div>
            <div class='colsecond'>
                <p class='colp1'>MAJESTIC BANGKOK</p>
                <p class='colp2'> 6 days </p>                
                <p class='colp3'>Sed dapibus massa a <br/> tincidunt convallis. Etiam <br/> eget neque vel velit porttitor</p>                
                <p class='colp4'>$1,499.00</p> 
                <p class='colp5'>$1250.00</p>                
            </div>
        </div>
    </div><!--End INTERNATIONAL PACKAGES -->
    
</div>   
<?php
include "footer.php";
?>