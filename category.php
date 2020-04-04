<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Aladdins Hub</title>
                                <link rel="stylesheet" type="text/css" href="css/nav.css"> 
                                <link rel="stylesheet" type="text/css" href="css/css/font-awesome.min.css">
                                <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
                                <script type="text/javascript" src="js/jquery.min.js"></script>
                                <script type="text/javascript" src="js/bootstrap.min.js"></script>
                                
                            </head>
                            <body>
                                <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
                            <script src="js/TweenMax.min.js"></script>
<div class="super_container"  style="background: #f2f3f7">
    <?php include 'header.php'; ?>
    <div class="content"> 

        <div>
            <div class="container">

                <div class="row row4">
                     <div class="col-md-12">
                         <div >
                             <!-- <p>Home > Laptop > Lenovo > <span style="color: #000">CPU</span></p> -->
                             

                            <div class="row" style="padding: 0 30px 0 30px">
                                <div class="col-md-2 filter" style="background: #fff;border-radius: 10px">
                                    <div class="vertical-menu" style="">
                                        <?php for($i=0;$i<8;$i++){ ?>
                                        <div class="dropdown"  style="width: 100%;">
                                          <button class="dropbtn"><img src="images/a.jpg" style="width: 30px;height: 30px"> Menu <?=$i+1?></button><i class="fa fa-angle-right" style="float: right;margin-top: 10px;"></i>
                                          <div class="dropdown-content" style="margin-left: -100px">
                                            <a href="#">Link 1</a>
                                            <a href="#">Link 2</a>
                                            <a href="#">Link 3</a>
                                          </div>
                                        </div>
                                    <?php } ?>
                                    </div>
                                </div>

                                <div class="col-md-10" style="margin: 0;padding: 0">

                                    <div class="col-md-12">
                                         <div class="row" style="padding: 0 15px 0 15px">
                                            <div class="slideshow-container col-md-12" style="margin:0;padding: 0">

                                            <div class="mySlides fadedd">
                                              <img src="images/a.jpg" style="width:100%;height: 235px;border-radius: 10px">
                                            </div>

                                            <div class="mySlides fadedd">
                                              <img src="images/aa.jpg" style="width:100%;height: 235px;border-radius: 10px">
                                            </div>

                                            <div class="mySlides fadedd">
                                              <img src="images/aaa.jpg" style="width:100%;height: 235px;border-radius: 10px">
                                            </div>
                                            <div style="text-align:center;margin-top: -30px">
                                              <span class="dot"></span> 
                                              <span class="dot"></span> 
                                              <span class="dot"></span> 
                                            </div>
                                            </div>

                                         </div>
                                         <div class="col-md-12">
                                          <div class="row" style="padding: 10px 20px 0 20px;background-color: #fff;margin-top: 25px;border-radius: 10px" >
                                             <?php for ($i=0; $i < 12; $i++) { ?>
                                             <div class="col-md-2" style="padding: 0 10px 0 0">
                                               <div class="col-md-12" style="padding: 0">
                                                 <img src="images/a.jpg" style="width: 100%;height: 100%">
                                               </div>
                                               <div class="col-md-12" style="padding: 0">
                                                 <p style=";height: 35px;overflow: hidden;font-size: 12px">Namedsfgnhjkjhdfghjggf of prod</p>
                                               </div>
                                               
                                            </div>
                                          <?php } ?>
                                          </div>
                                         </div>
                                    </div>
                                </div>
                                
                            </div>







                            <div class="row" style="margin:20px 10px 0 10px;color: #fff">
                                <div class="col-md-12">

                                    <div class="row">
                                         <div class="col-md-4">
                                             <h2 class="rfq" style="margin-left: -10px">New Arrivals</h2>
                                         </div>
                                    </div>
                                    <div class="row" style=" border-radius: 10px;background-color: #fff">
                                        <div class="col-md-4" style="background-image: url('images/aaa.jpg');background-repeat: no-repeat;background-size: cover;width: 100%;height: 250px;border-top-left-radius: 10px;border-bottom-left-radius: 10px">
                                          <div>
                                            <h4><b>Premium</b></h4>
                                          </div>
                                        </div>
                                        <div class="col-md-8">
                                         <div class="row" style="padding:0">
                                          <?php for ($i=0; $i < 3; $i++) { ?>
                                             <div class="col-md-4" style="border-right: 1px solid rgba(100,100,100,0.1);padding: 0" >
                                              <a href="">
                                                <div class="col-md-12" style="padding-top: 15px" >
                                                <img src="images/aaa.jpg" style="width: 100%;height: 150px">
                                                
                                              </div>
                                              <div class="col-md-12" style="padding-top: 0px;margin-bottom: 10px" >
                                                <div style="width: 100%;height: 60px;overflow: hidden; font-size: 14px;color: grey">Prod title <br>
                                                  <span style="color: #000; font-size: 15px"><b>$2.55 - $3.6</b></span><br>
                                                  <span style="color: #000; font-size: 15px">1 Piece <span style="color: grey">(MOQ)</span></span>
                                                </div>
                                                
                                              </div>
                                              </a>
                                            </div>
                                          <?php } ?>
                                           
                                         </div>

                                        </div>
                                    </div>
                                </div>
                                
                            </div>







                            <div class="row" style="margin:20px 10px 0 10px;color: #fff">
                                <div class="col-md-12">

                                    <div class="row">
                                         <div class="col-md-4">
                                             <h2 class="rfq" style="margin-left: -10px">New Arrivals</h2>
                                         </div>
                                    </div>
                                    <div class="row" style=" border-radius: 10px;background-color: #fff">
                                        <div class="col-md-4" style="background-image: url('images/aaa.jpg');background-repeat: no-repeat;background-size: cover;width: 100%;height: 250px;border-top-left-radius: 10px;border-bottom-left-radius: 10px">
                                          <div>
                                            <h4><b>New Arrivals</b></h4>
                                          </div>
                                        </div>
                                        <div class="col-md-8">
                                         <div class="row" style="padding:0">
                                          <?php for ($i=0; $i < 4; $i++) { ?>
                                             <div class="col-md-3" style="border-right: 1px solid rgba(100,100,100,0.1);padding: 0" >
                                              <a href="">
                                                <div class="col-md-12" style="padding-top: 15px" >
                                                <img src="images/aaa.jpg" style="width: 100%;height: 150px">
                                                
                                              </div>
                                              <div class="col-md-12" style="padding-top: 0px;margin-bottom: 10px" >
                                                <div style="width: 100%;height: 60px;overflow: hidden; font-size: 14px;color: grey">Prod title <br>
                                                  <span style="color: #000; font-size: 15px"><b>$2.55 - $3.6</b></span><br>
                                                  <span style="color: #000; font-size: 15px">1 Piece <span style="color: grey">(MOQ)</span></span>
                                                </div>
                                                
                                              </div>
                                              </a>
                                            </div>
                                          <?php } ?>
                                           
                                         </div>

                                        </div>
                                    </div>
                                </div>
                                
                            </div>






                            <div class="row" style="margin: 20px 0 0 0">
                                <div class="col-md-12">

                                    <div class="row">
                                         <div class="col-md-4">
                                             <h2 class="rfq">Recommended for you</h2>
                                         </div>
                                    </div>
                                    <div class="row" style="margin-top: 10px;">
                                        <?php for($i=0;$i<12;$i++){ ?>
                                        <a href="what" class="col-md-38 recoms" style="border-radius: 10px;margin-left: 15px;padding: ">
                                           <div class="col-md-12" style="padding: 0">
                                               <img src="images/aa.jpg" style="width: 100%;border-top-left-radius: 10px; border-top-right-radius: 10px; height: 190px;">
                                           </div>
                                           <div style="height: 50px;overflow: hidden;">
                                               <p class="recoms_title">Lenovo Ideapad 300 500gb Harddisk</p>
                                           </div>
                                           <div style="height: 30px;overflow: hidden;">
                                               <p class="recoms_price"><b><span style="color: red">USD </span>499.99</b></p><b><span style="color: red">USD </span>499.99</b>
                                           </div>
                                           <div style="height: 30px;overflow: hidden;padding-left: 15px">
                                               <p><b>20 Pieces</b></b>
                                           </div>
                                        </a>

                                    <?php } ?>
                                    </div>
                                </div>
                                
                            </div>




                             
















                         </div>
                     </div>

                </div>

            </div>
        </div>
        
    </div>
    
</div>
<?php  include 'footer.php' ?>

                            </body>
                        </html>

                        <!-- Amoko Ivan -->