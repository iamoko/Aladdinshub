<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Side Menu</title>
                                <link rel="stylesheet" type="text/css" href="css/nav.css"> 
                                <link rel="stylesheet" type="text/css" href="css/css/font-awesome.min.css">
                                <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
                                <script type="text/javascript" src="js/jquery.min.js"></script>
                                <script type="text/javascript" src="js/bootstrap.min.js"></script>
                                
                            </head>
                            <body>
                                <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
                            <script src="js/TweenMax.min.js"></script>

                            <style type="text/css">
                                .top_bar, .main_nav{
                                    display: none;
                                }
                                .conts{
                                    font-size: 16px;
                                    padding: 0;
                                    margin:10px 80px 0 80px;
                                    color: #fff;
                                }
                                .bars{
                                    padding: 0;
                                    background-color: #3d4b76;
                                    color: #fff;
                                    height: 50px;
                                    line-height: 50px;
                                    border-right: 1px solid #fff;
                                }
                                .bars:last-child{
                                    border: none;
                                }
                                .conts a:hover{
                                    background-color: #FE6902;
                                    color:#fff;
                                    text-decoration:none;
                                }
                                .cont_head{
                                    font-weight: 700;
                                    font-size: 20px;
                                    color: #fff;
                                    margin-top: 10px;
                                    letter-spacing: 1px;
                                }
                                .every{ 
                                    padding: 10px ;
                                    height: 350px;
                                    background-color: #fff;
                                    margin-right: 12px;
                                    margin-top: 10px;
                                    width: 285px;
                                    color: #000


                                }
                                .every1{padding: 0}
                                .ext_conts{
                                    margin:10px 0 0 0;
                                    width: 100%
                                }
                                .ext_conts a:hover{
                                    text-decoration: none;
                                    color: #ff5214
                                }
                                .stickies {
                                  position: fixed;
                                  top: 80px;
                                  width: 90%;
                                  z-index: 1
                                }
                                .stickiess {
                                  position: fixed;
                                  top: 60px;
                                  width: 87%;
                                  z-index: 1
                                }

                                .stickies + .content {
                                  /*padding-top: 102px;*/
                                }
                                 .every img{
                                    width: 100%;
                                    height: 250px
                                }
                                .revd{
                                    visibility: hidden;
                                }
                                .dets{
                                    margin: 5px 0 0 0;padding: 0;
                                }
                                .data{
                                    color: red
                                }
                                .unique{
                                    z-index: 1
                                }
                                .revd{
                                    background-color: red;margin:0px;width: 100%;height: 35px
                                }
                                .revd a{
                                    line-height: 35px;width: 16.667%;background-color: #3d4b76;overflow: hidden;height: 35px;
                                    border-right: 1px solid #fff
                                }
                                .revd .active{
                                    background-color: #FE6902;color: #fff
                                }
                                .revd a:hover{
                                    background-color: #FE6902;color: #fff;text-decoration: none;
                                }
                                @media only screen and (max-width: 1200px){
                                    .conts{
                                        margin:10px 30px 0 30px;
                                    }
                                    .revd{
                                        visibility: visible;
                                    }
                                    .more{
                                        font-size: 30px
                                    }
                                    .unique{
                                        display: none;
                                    }
                                }
                                .nav-pills{
                                    background-color: #3d4b76;

                                }
                                .nav-pills li a{
                                    padding: 15px;
                                    color: #fff
                                } 
                                .nav-pills li a:hover{
                                    background-color: #ff5214;
                                }  
                                .body_background{
                                    background-color: #2f323c
                                }                            
                            </style>



                            <style type="text/css">
                                
                            </style>


<div class="super_container"  style="background: #f2f3f7">
    <?php include 'header.php'; ?>
    <div class="content"> 
        <div class="body_background">
            <div class="row">
                <img src="img/bg.jpg" style="width: 100%;height: 300px">
           </div>
            <div class="row revd nav" id="myTab">
                    <a href="#home" class="active">
                        <center>Selected Suppliers</center>
                    </a>
                    <a href="#wood" >
                        <center>Woodworking Machinery</center>
                    </a>
                    <a href="#plastic" >
                        <center>Plastic & Rubber Machinery</center>
                    </a>
                    <a href="#equip" >
                        <center>Machinery Tool Equipment</center>
                    </a>
                    <a href="#industry" >
                        <center>Industry Laser Equipment</center>
                    </a>
                    <a href="#may" >
                        <center>More</center>
                    </a>

           </div>

            <div class="bs-example" style="width: 90%;margin: 20px 80px 20px 70px;">
                <div class="unique">
                    <ul id="myTablet" class="nav nav-pills" >
                    <li >
                        <a href="#home" class="nav-link active">Selected Suppliers</a>
                    </li>
                    <li >
                        <a href="#wood" class="nav-link">Woodworking Machinery</a>
                    </li>
                    <li >
                        <a href="#plastic" class="nav-link">Plastic & Rubber Machinery</a>
                    </li>
                    <li >
                        <a href="#equip" class="nav-link">Machinery Tool Equipment</a>
                    </li>
                    <li >
                        <a href="#industry" class="nav-link">Industry Laser Equipment</a>
                    </li>
                    <li >
                        <a href="#may" class="nav-link">You May Also Like</a>
                    </li>

                    
                </ul>
                </div>
                
                <div class="tab-content" >
                    <div class="tab-pane fade show active body_background" id="home">
                         <div class="row ext_conts">
                            <div class="col-md-12 every1">
                                <h5 class="cont_head"  id="selected">Selected Suppliers</h5>
                            </div>
                            <?php  for ($i=0; $i < 8; $i++) { ?>
                                <a href="" class="every">
                                    <img src="images/aa.jpg">
                                    <div class="col-md-12 dets">
                                        <h6><b>US $36000.00-3900.00</b><span style="color: grey"> /piece</span></h6>
                                        <h6><b>1 Piece</b><span style="color: grey"> (min order)</span></h6>
                                        <div class="row" style="overflow: hidden;height: 25px">
                                            <div class="col-md-6 data">
                                                1 Year warranty
                                            </div>
                                            <div class="col-md-6 data">
                                                1 Year warranty
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php } ?>

                        </div>

                    </div>



                    <div class="tab-pane fade body_background" id="wood">
                         <div class="row ext_conts">
                            <div class="col-md-12 every1">
                                <h5 class="cont_head"  id="selected">Woodworking Machinery</h5>
                            </div>
                            <?php  for ($i=0; $i < 8; $i++) { ?>
                                <a href="" class="every">
                                    <img src="images/aa.jpg">
                                    <div class="col-md-12 dets">
                                        <h6><b>US $36000.00-3900.00</b><span style="color: grey"> /piece</span></h6>
                                        <h6><b>1 Piece</b><span style="color: grey"> (min order)</span></h6>
                                        <div class="row" style="overflow: hidden;height: 25px">
                                            <div class="col-md-6 data">
                                                1 Year warranty
                                            </div>
                                            <div class="col-md-6 data">
                                                1 Year warranty
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php } ?>

                        </div>

                    </div>



                    <div class="tab-pane fade body_background" id="plastic">
                         <div class="row ext_conts">
                            <div class="col-md-12 every1">
                                <h5 class="cont_head"  id="selected">Plastic & Rubber Machinery</h5>
                            </div>
                            <?php  for ($i=0; $i < 8; $i++) { ?>
                                <a href="" class="every">
                                    <img src="images/aa.jpg">
                                    <div class="col-md-12 dets">
                                        <h6><b>US $36000.00-3900.00</b><span style="color: grey"> /piece</span></h6>
                                        <h6><b>1 Piece</b><span style="color: grey"> (min order)</span></h6>
                                        <div class="row" style="overflow: hidden;height: 25px">
                                            <div class="col-md-6 data">
                                                1 Year warranty
                                            </div>
                                            <div class="col-md-6 data">
                                                1 Year warranty
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php } ?>

                        </div>

                    </div>


                    <div class="tab-pane fade body_background" id="equip">
                         <div class="row ext_conts">
                            <div class="col-md-12 every1">
                                <h5 class="cont_head"  id="selected">Machinery Tool Equipment</h5>
                            </div>
                            <?php  for ($i=0; $i < 8; $i++) { ?>
                                <a href="" class="every">
                                    <img src="images/aa.jpg">
                                    <div class="col-md-12 dets">
                                        <h6><b>US $36000.00-3900.00</b><span style="color: grey"> /piece</span></h6>
                                        <h6><b>1 Piece</b><span style="color: grey"> (min order)</span></h6>
                                        <div class="row" style="overflow: hidden;height: 25px">
                                            <div class="col-md-6 data">
                                                1 Year warranty
                                            </div>
                                            <div class="col-md-6 data">
                                                1 Year warranty
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php } ?>

                        </div>

                    </div>


                    <div class="tab-pane fade body_background" id="industry">
                         <div class="row ext_conts">
                            <div class="col-md-12 every1">
                                <h5 class="cont_head"  id="selected">Industry Laser Equipment</h5>
                            </div>
                            <?php  for ($i=0; $i < 8; $i++) { ?>
                                <a href="" class="every">
                                    <img src="images/aa.jpg">
                                    <div class="col-md-12 dets">
                                        <h6><b>US $36000.00-3900.00</b><span style="color: grey"> /piece</span></h6>
                                        <h6><b>1 Piece</b><span style="color: grey"> (min order)</span></h6>
                                        <div class="row" style="overflow: hidden;height: 25px">
                                            <div class="col-md-6 data">
                                                1 Year warranty
                                            </div>
                                            <div class="col-md-6 data">
                                                1 Year warranty
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php } ?>

                        </div>

                    </div>



                    <div class="tab-pane fade body_background" id="may">
                         <div class="row ext_conts">
                            <div class="col-md-12 every1">
                                <h5 class="cont_head"  id="selected">You May Also Like</h5>
                            </div>
                            <?php  for ($i=0; $i < 8; $i++) { ?>
                                <a href="" class="every">
                                    <img src="images/aa.jpg">
                                    <div class="col-md-12 dets">
                                        <h6><b>US $36000.00-3900.00</b><span style="color: grey"> /piece</span></h6>
                                        <h6><b>1 Piece</b><span style="color: grey"> (min order)</span></h6>
                                        <div class="row" style="overflow: hidden;height: 25px">
                                            <div class="col-md-6 data">
                                                1 Year warranty
                                            </div>
                                            <div class="col-md-6 data">
                                                1 Year warranty
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php } ?>

                        </div>

                    </div>



                </div>
            </div>


           <!-- <div class="row conts unique"  >
                <a href="#selected" class="col-md-2 bars active">
                    <center class="more">Selected Suppliers</center>
                </a>
                <a href="#wood" class="col-md-2 bars">
                    <center>Woodworking Machinery</center>
                </a>
                <a href="#plastic" class="col-md-2 bars">
                    <center>Plastic & Rubber Machinery</center>
                </a>
                <a href="#machinery" class="col-md-2 bars">
                    <center>Machinery Tool Equipment</center>
                </a>
                <a href="#industry" class="col-md-2 bars">
                    <center>Industry Laser Equipment</center>
                </a>
                <a href="#may" class="col-md-2 bars">
                    <center>You May Also Like</center>
                </a>
           </div> -->

           
           <div class="row conts contents">

            </div>


        </div>
        
    </div>
    
</div>
<?php  include 'footer.php' ?>

                            </body>
                        </html>

                        <!-- Amoko Ivan -->

