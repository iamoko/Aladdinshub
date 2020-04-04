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
        <div class="wrapping">
            <div class="container">
                <div class="row row3">
                    <!-- Logo -->
                    <div class="row" style="width: 100%;border: 1px solid rgba(100,100,100,0.1)">
                         <div class="col-md-3 cates">
                            <div>
                                <p style="font-weight: bold;color: #000;border-bottom: 1px solid rgba(100,100,100,0.3)">MY MARKETS</p>
                            </div>
                            <div class="vertical-menu">
                                <?php for($i=0;$i<8;$i++){ ?>
                                <div class="dropdown">
                                  <button class="dropbtn"><img src="images/a.jpg" style="width: 30px;height: 30px"> Menu <?=$i+1?></button><i class="fa fa-angle-right" style="float: right;margin-top: 10px;"></i>
                                  <div class="dropdown-content">
                                    <a href="#">Link 1</a>
                                    <a href="#">Link 2</a>
                                    <a href="#">Link 3</a>
                                  </div>
                                </div>
                            <?php } ?>
                                
                            </div>
                        </div>
                        <div class="col-md-6" style="background: #fff;padding: 0px;">
                            <div class="slideshow-container" style="margin:20px 0px 0px 0px;">

                                <div class="mySlides fadedd">
                                  <img src="images/a.jpg" style="width:100%;height: 400px;">
                                </div>

                                <div class="mySlides fadedd">
                                  <img src="images/aa.jpg" style="width:100%;height: 400px;">
                                </div>

                                <div class="mySlides fadedd">
                                  <img src="images/aaa.jpg" style="width:100%;height: 400px;">
                                </div>
                                <div style="text-align:center">
                                  <span class="dot"></span> 
                                  <span class="dot"></span> 
                                  <span class="dot"></span> 
                                </div>
                                </div>

                                
                        </div>
                        <div class="col-md-3 otherz">
                            <a href=""  style="text-decoration: none;"><div class="col-md-12 panel3" style="text-align: center;font-weight: bold; height: 30px;color: #fff">
                               Selected Machinery
                            </div></a>
                            <?php for($i=0;$i<3;$i++){ ?>
                                <a href="1" style="text-decoration: none;">
                                    <div class="col-md-12 side_menu_ext">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <p>Woodworking Machinery</p>
                                                <div class="panel3">Source Now</div>
                                            </div>
                                            <div class="col-md-4">
                                                <img src="images/a.jpg">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </a>
                            <?php } ?>
                            
                           
                    </div>
                </div>    
                </div>
            </div>
        </div>


        <div>
            <div class="container">






                <div class="row" style="padding: 40px">
                     <div class="col-md-12">
                         
                            <div class="row" style="margin-bottom: 10px;">
                                 <div class="custss"  style="background: #fff;width: 49%; height: 185px; border-radius: 10px;margin-right: 20px;">
                                 	<div class="row" style="padding: 10px;padding-left: 30px">
                                     	<div>
                                     		<img src="icons/new.png" style="width: 18px;">
                                     	</div>
                                     	<div style="margin-left: 5px"><span> Expectations</span></div>
                                     </div>
                                     <div class="row" style="padding-left: 20px;padding-right: 20px">
                                     	<?php for($i=0;$i<=3;$i++){ ?>
                                     	<div class="col-md-3" style="overflow: hidden;height: 135px;">
                                     		<img src="images/a.jpg" style="width: 100%;height: 90px;">
                                     		<p style="font-size: 13px;text-align: center;font-weight: 700;color: #000">$ 5.66<br><span style="color: grey">New configuration New configuration</span></p>

                                     	</div>
                                     	<?php } ?>
                                     </div>
                                 </div>

                                 <div class="custss" style="background: #fff;width: 49%; height: 185px; border-radius: 10px;">
                                 	<div class="row" style="padding: 10px;padding-left: 30px">
                                     	<div>
                                     		<img src="icons/new.png" style="width: 18px;">
                                     	</div>
                                     	<div style="margin-left: 5px"><span> Expectations</span></div>
                                     </div>
                                     <div class="row" style="padding-left: 20px;padding-right: 20px">
                                     	<?php for($i=0;$i<=3;$i++){ ?>
                                     	<div class="col-md-3" style="overflow: hidden;height: 135px;">
                                     		<img src="images/a.jpg" style="width: 100%;height: 90px;">
                                     		<p style="font-size: 13px;text-align: center;font-weight: 700;color: #000">$ 5.66<br><span style="color: grey">New configuration New configuration</span></p>

                                     	</div>
                                     	<?php } ?>
                                     </div>
                                 </div>


                            </div>
                    </div>
                </div>













                <div class="row" style="padding: 40px;margin-top: -70px;">
                     <div class="col-md-12">
                         
                            <div class="row" style="margin-bottom: 10px;">
                                 <div class="custss" style="background: #fff;width: 49%; height: 300px; border-radius: 10px;margin-right: 20px;padding-right: 30px;padding-left: 30px">
                                     <div class="row" style="margin-top: 20px; padding-right: 20px;height: 125px;">
                                     	<div class="col-md-8">
                                     		<h3 class="cust_title">Customised products</h3>
                                     		<span class="cust_desc col-md-12" >feweegrhtyukyjhfdgsfg fdghjuhg dfghjgf dfghjyhgfv</span>
                                     	</div>
                                     	<div class="col-md-4">
                                     		<img src="images/aa.jpg" style="width: 185px;height: 120px">
                                     	</div>

                                     </div>
                                     <div class="row" style="height: 125px;">
                                     	<div class="cust_det" style="margin-right: 20px;">
                                     		<h4 class="headr">Header</h4>
                                     		<div class="row" style="padding-left: 30px">
                                     			<img src="images/aaa.jpg" style="width: 70px;height: 80px;margin-right: 15px">
                                     			<img src="images/aaa.jpg" style="width: 70px;height: 80px;margin-right: 15px">
                                     			<img src="images/aaa.jpg" style="width: 70px;height: 80px">
                                     		</div>
                                     	</div>
                                     	<div class="cust_det">
                                     		<h4 class="headr">Header</h4>
                                     		<div class="row" style="padding-left: 30px">
                                     			<img src="images/aaa.jpg" style="width: 70px;height: 80px;margin-right: 15px">
                                     			<img src="images/aaa.jpg" style="width: 70px;height: 80px;margin-right: 15px">
                                     			<img src="images/aaa.jpg" style="width: 70px;height: 80px">
                                     		</div>
                                     		
                                     	</div>

                                     </div>

                                 </div>

                                  <div class="custss" style="background: #fff;width: 49%; height: 300px; border-radius: 10px;padding-right: 30px;padding-left: 30px">
                                     <div class="row" style="margin-top: 20px; padding-right: 20px;height: 125px;">
                                     	<div class="col-md-8">
                                     		<h3 class="cust_title">Customised products</h3>
                                     		<span class="cust_desc col-md-12" >feweegrhtyukyjhfdgsfg fdghjuhg dfghjgf dfghjyhgfv</span>
                                     	</div>
                                     	<div class="col-md-4">
                                     		<img src="images/aa.jpg" style="width: 185px;height: 120px">
                                     	</div>

                                     </div>
                                     <div class="row" style="height: 125px;">
                                     	<div class="cust_det" style="margin-right: 20px;">
                                     		<h4 class="headr">Header</h4>
                                     		<div class="row" style="padding-left: 30px">
                                     			<img src="images/aaa.jpg" style="width: 70px;height: 80px;margin-right: 15px">
                                     			<img src="images/aaa.jpg" style="width: 70px;height: 80px;margin-right: 15px">
                                     			<img src="images/aaa.jpg" style="width: 70px;height: 80px">
                                     		</div>
                                     	</div>
                                     	<div class="cust_det">
                                     		<h4 class="headr">Header</h4>
                                     		<div class="row" style="padding-left: 30px">
                                     			<img src="images/aaa.jpg" style="width: 70px;height: 80px;margin-right: 15px">
                                     			<img src="images/aaa.jpg" style="width: 70px;height: 80px;margin-right: 15px">
                                     			<img src="images/aaa.jpg" style="width: 70px;height: 80px">
                                     		</div>
                                     		
                                     	</div>

                                     </div>

                                 </div>



                            </div>
                    </div>
                </div>









                <!-- Product Catery Laptop -->
                 <div class="row row4">
                     <div class="col-md-12">
                         <a href="" style="text-decoration: none;">
                            <div class="row" style="margin-bottom: 10px;">
                                 <div class="col-md-2">
                                     <h2 class="rfq">Classifieds</h2>
                                 </div>
                                 <div class="col-md-10 sliding"></div>
                            </div>

                             <div class="row" style="margin: 0;margin-right: -15px;" >
                               <a href="" class="col-md-36 product_img" style="background-image: url('images/aa.jpg');">
                                   <h3 class="product_title">Shopping Guide for trending styles</h3>
                                   <button class="btn product_btn">View More</button>
                               </a>
                               <div class="col-md-37 row5" style="background: #fff;">
                                <div class="row specific_bot" style="margin: 0">
                                    <a href="" class="col-md-3" style="border-right:1px solid rgba(100,100,100,0.2);height: 300px;">
                                     <h4 class="specific_title">Top-ranking products in US</h4>

                                                <p class="specific_label"><i class="fa fa-bar-chart"></i>Latest Computer supplies all over </p>

                                                <img src="images/aaa.jpg" style="width: 150px;height: 150px;position: absolute;bottom: 0;right: 0;margin-right: 10px;margin-bottom: 10px;">
                                  </a> 
                                  <?php for($i=0;$i<3;$i++){ ?>
                                    <div class="col-md-3 specific_box" style="height: 300px;padding: 0;border-right:1px solid rgba(100,100,100,0.2);">
                                        <a href="" class="col-md-12" style="padding: 0">
                                            <div style="height: 50%; border-bottom: 1px solid rgba(100,100,100,0.2);overflow: hidden;">
                                                <h4 class="specific_title">Top-ranking products in US</h4>
                                               <?php if($i==0){ ?>
                                                    <p class="specific_label"><i class="fa fa-bar-chart"></i> Samsung</p>
                                                 <?php } ?>
                                                
                                                <img src="images/aaa.jpg">
                                            </div>
                                        </a>
                                        <a href="" class="col-md-12" style="padding: 0">
                                            <div style="height: 50%; border-bottom: 1px solid rgba(100,100,100,0.2);overflow: hidden;">
                                                <h4 class="specific_title">Top-ranking products in US</h4>

                                                <?php if($i==0){ ?>
                                                <p class="specific_label"><i class="fa fa-bar-chart"></i> Samsung</p>
                                                 <?php } ?>

                                                <img src="images/aaa.jpg">
                                            </div>
                                        </a>
                                       <!--  <a href="" class="col-md-3">
                                            mine
                                        </a> -->
                                  </div> 

                               <?php  } ?>
                                </div>
                               </div>
                            </div>
                         </a>
                     </div>

                </div>






                <!-- Requoest for quotation -->
                <div class="row row4">
                     <div class="col-md-12">
                         <a href="" style="text-decoration: none;">
                             <div class="row">
                                 <div class="col-md-4">
                                     <h2 class="rfq"><img src="icons/RFQ.png" width="50"> REQUEST FOR QUOTATION</h2>
                                 </div>
                                 <div class="col-md-2" style="color: #999;margin-top: 3px;">
                                     <p style="font-size: 16px;">Customization Service</p>
                                 </div>
                                 <div class="col-md-6 sliding"></div>
                            </div>

                             <div class="row">
                                 <div class="col-md-5">
                                    <a href="" class="rfq-banner" style="background-image: url('images/aaa.jpg');width: 100%;height: 350px;background-size: cover; background-repeat: no-repeat;">
                                    <div class="rfq-banned">
                                         
                                            <h3>Global Sourcing Marketplace</h3>
                                            <p>Learn More</p>
                                        
                                    </div>
                                    </a>


                                    <!-- <img src="images/aaa.jpg" style=""> -->
                                   
                                 </div>
                                 <div class="col-md-7" style="border: 8px solid #dcdee3;background: #fff">
                                    <form action=" " method="POST" class="rfq-form">
                                        <h3>One Request, Multiple Quotes</h3>
                                        <div class="form-group" style="padding-left:20px;padding-right:20px;padding-top: 40px">
                                            <input type="text" class="form-control" name="" placeholder="What are you looking for...">
                                        </div>
                                        <div class="row" style="padding-left:20px;padding-right:20px;">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="" placeholder="Quantity">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="" placeholder="Pieace(s)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-left:35px;padding-right:20px;">
                                            <button type="submit" class="btn btn-primary" style="border-radius: 50px;background: #ff5212; border:1px solid #ff5212;margin-bottom: 40px;">Request For Quotation</button>
                                        </div>
                                    </form>
                         
                                </div>
                            </div>


                         </a>
                     </div>

                </div>




                <div class="row row4">
                     <div class="col-md-12">
                         <a href="" style="text-decoration: none;">
                             <div class="row">
                                 <div class="col-md-4">
                                     <h2 class="rfq">RECOMMENDATIONS FOR YOU</h2>
                                 </div>
                                 <div class="col-md-8 sliding"></div>
                            </div>

                             <div class="row" style="margin-top: 20px">
                                <?php for($i=0;$i<12;$i++){ ?>
                                <a href="" class="col-md-35 recoms">
                                   <div class="col-md-12">
                                       <img src="images/aa.jpg" style="width: 100%;height: 170px;margin-top: 15px;">
                                   </div>
                                   <div style="height: 60px;overflow: hidden;">
                                       <p class="recoms_title">Lenovo Ideapad 300 500gb Harddisk</p>
                                   </div>
                                   <div style="height: 40px;overflow: hidden;">
                                       <p class="recoms_price"><b><span style="color: red">USD </span>499.99</b></p><b><span style="color: red">USD </span>499.99</b>
                                   </div>
                                </a>

                            <?php } ?>
                            </div>
                         </a>
                     </div>

                </div>



                <div class="row row4">
                     <div class="col-md-12">
                         <a href="" style="text-decoration: none;">
                             <div class="row">
                                 <div class="col-md-5">
                                     <h2 class="rfq">CHOOSE YOUR SUPPLIERS BY REGION</h2>
                                 </div>
                                 <div class="col-md-7 sliding"></div>
                            </div>

                             <div class="row" style="margin-top: 20px">
                                <?php for($i=0;$i<7;$i++){ ?>
	                                <a href="" class="col-md-2 row">
	                                   <div class="col-md-12">
	                                       <img src="images/aa.jpg" style="width: 70px;height: 40px;margin-top: 15px;"><span> Italy</span>
	                                   </div>
	                                   <div class="col-md-1">
	                                      
	                                   </div>
	                                </a>

	                            <?php } ?>
	                            </div>
	                         </a>
	                     </div>

                `	</div>







                














            </div>
        </div>
        
    </div>
    
</div>
<?php  include 'footer.php' ?>

                            </body>
                        </html>

                        <!-- Amoko Ivan -->