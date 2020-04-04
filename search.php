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
                         <div>
                            <div class="row" style="width: 108%">
                                <div class="col-md-2 filter" style="background: #fff;">
                                    <div class="vertical-menu" style="">
                                        <?php for($i=0;$i<8;$i++){ ?>
                                        <div class="dropdown"  style="width: 100%;">
                                          <button class="dropbtn"><img src="images/a.jpg" style="width: 30px;height: 30px"> Menu <?=$i+1?></button><i class="fa fa-angle-right" style="float: right;margin-top: 10px;"></i>
                                          <div class="dropdown-content" style="margin-left: -90px">
                                            <a href="#">Link 1</a>
                                            <a href="#">Link 2</a>
                                            <a href="#">Link 3</a>
                                          </div>
                                        </div>
                                    <?php } ?>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="row">
                                         <div class="col-md-4">
                                            <p style="color: #000;font-style: 16px;"><b>30</b> results for "Laptop"</p>
                                         </div>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 10px;">
                                        <?php for($i=0;$i<5;$i++){ ?>


                                        <div class="row" style="background: #fff;border-bottom: 1px solid rgba(100,100,100,0.3) ">
                                          <div class="col-md-3" style="padding: 15px 20px 15px 15px">
                                            <img src="images/aa.jpg" style="width: 100%;height: 215px;">
                                          </div>
                                          <div class="col-md-9">
                                            <div class="row" style="overflow: hidden;margin-top: 10px;">
                                                <div class="col-md-8">
                                                  <h5 style="margin-left: 15px;height: 20px;overflow: hidden;">more</h5>
                                                </div>
                                                <div class="col-md-2" style="overflow: none;height: 20px">
                                                  <a href="" style="font-size: 14px;color: grey">Company name</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-4">
                                                <div class="row">
                                                  <h6 style="margin-left: 15px;margin-top: 10px"><b>$100,000 - $120,000</b></h6>

                                                </div>
                                                <div class="row">
                                                  <p style="margin-left: 15px;font-size: 15px;color: #000;margin-top: -5px"><b>5 Sets </b><span style="font-size: 14px; color: grey"> (Min Order)</span></p>
                                                </div>
                                                <div class="row">
                                                  <p style="margin-left: 15px;font-size: 13px;color: #000"><b>5 days </b><span style="font-size: 13px; color: grey"> (Lead time)</span></p>
                                                </div>

                                                
                                              </div>
                                              <div class="col-md-4">
                                                 <div class="row">
                                                   <p style="margin-left: 15px;font-size: 13px;margin-top: 10px">Model: <span style="color: #000" >Whatever</span></p>
                                                </div>
                                                <div class="row">
                                                  <p style="margin-left: 15px;font-size: 13px;margin-top: -15px">Warranty: <span style="color: #000">2 months</span></p>
                                                </div>
                                                <div class="row">
                                                  <p style="margin-left: 15px;font-size: 13px;margin-top: -15px">Year: <span style="color: #000">2020</span></p>
                                                </div>
                                                <div class="row" style="position: absolute; right:0;bottom: 0;margin-right: 20px">
                                                  <p style="margin-left: 15px;font-size: 13px;color: #000"><input type="checkbox" name=""> Compare </p>
                                                </div>
                                              </div>
                                              <div class="col-md-4" style="text-align: right;">
                                                1
                                              </div>
                                            </div>
                                            
                                          </div>

                                          
                                        </div>

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