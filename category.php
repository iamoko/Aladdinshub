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
                             <p>Home > Laptop > Lenovo > <span style="color: #000">CPU</span></p>
                             

                            <div class="row">
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
                                             <h2 class="rfq">Recommended for you</h2>
                                         </div>
                                    </div>
                                    <div class="row" style="margin-top: 10px;">
                                        <?php for($i=0;$i<12;$i++){ ?>
                                        <a href="what" class="col-md-38 recoms" style="border-radius: 10px;margin-left: 15px">
                                           <div class="col-md-12">
                                               <img src="images/aa.jpg" style="width: 100%;height: 170px;margin-top: 15px;">
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