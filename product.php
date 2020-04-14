<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Product</title>
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
                                .contact_suppier{
                                    display: block;
                                    width: 200px;
                                    height: 32px;
                                    border-radius: 18px;
                                    border: 0;
                                    margin-top: 12px;
                                    margin-bottom: 14px;
                                    background: #f60;
                                    color: #fff;
                                    font-size: 14px;
                                    text-align: center;
                                    line-height: 30px;
                                }
                                .contact_suppier:hover{
                                    text-decoration: none;
                                    color: #fff;background-color: #ff3000;
                                }
                                .detail{
                                    color: grey
                                }
                                .descrip p{
                                    color: #000
                                }
                                .prod_else{
                                    background-color: #fff;margin: 5px;width: 180px;border-radius: 10px
                                }
                                .sides p{
                                    font-size: 12px;
                                    margin-top: -10px
                                }
                                .extended {
                                    color: #000
                                }.desc_head {
                                    color: #000;
                                    margin-top: 20px
                                }

                            </style>
<div class="super_container"  style="background: #f2f3f7">
    <?php include 'header.php'; ?>
    <div class="content"> 
        <div>
            <div class="container">



                <!-- Product  -->
                 <div class="row" style="background-color: #fff; border-radius: 10px;margin: 30px 15px 20px 15px;padding:20px;">
                    <p> Home > All Industries > Kitchen & Tabletop > Cookware > Cookware Sets Subscribe to Trade Alert </p>
                     <div class="row">
                         <div class="col-md-9" style="border-right: 1px solid rgba(100,100,100,0.2)">
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="images/aa.jpg" alt="image" style="width: 100%;height: 300px; border:1px solid">
                                </div>
                                <div class="col-md-7 descrip">
                                    10pcs rachael ray cookware set<br>
                                    FOB Reference Price: <a href=""> Get Latest Price</a>

                                    <p style="margin-top: 20px"><b>US$19.99 - US$30.99 </b>/ <span class="detail">Set </span>| 1000 Set/Sets 10pcs rachael ray cookware set <span class="detail">(Min. Order)</span> </p>


                                    <p ><span class="detail">Shipping:</span>  Support Sea freight </p>
                                </div>
                            </div>
                         </div>
                         <div class="col-md-3">
                             <p style="color: #000">For product pricing, customization, or other inquiries:</p>
                             <a href="#" class="contact_suppier">Contact Supplier</a>
                             <a href="#" onclick="openForm()" >Leave Message</a>
                         </div>
                     </div>


                </div>


                <div class="row" style="padding: 15px 30px 15px 30px">
                    <div class="col-md-12">
                        <div class="row" >
                            <h5>You May also Like</h5>
                        </div>
                        <div class="row">
                           <div class="col-md-9" style="padding: 0 0 0 5px">
                               <div class="row">
                                   <?php  for ($i=0; $i < 5; $i++) { ?>
                                       <div class="prod_else">
                                            <div class="col-md-12">
                                               <img src="images/aa.jpg" style="width: 100%;height: 170px;margin-top: 15px;">
                                           </div>
                                           <div style="height: 60px;overflow: hidden;">
                                               <p class="recoms_title">Lenovo Ideapad 300 500gb Harddisk</p>
                                           </div>
                                           <div style="height: 40px;overflow: hidden;">
                                               <p class="recoms_price"><b><span style="color: red">USD </span>499.99</b></p><b><span style="color: red">USD </span>499.99</b>
                                           </div>
                                       </div>
                                  <?php }  ?>
                               </div>
                           </div>
                        </div>
                    </div>
                </div>






                <div class="row" style="padding: 20px;background-color: #fff;margin: 10px">
                    <div class="bs-example" style="width: 100%">
                        <ul id="myTab" class="nav nav-pills">
                            <li >
                                <a href="#home" class="nav-link active">Product Description</a>
                            </li>
                            <li >
                                <a href="#packaging" class="nav-link">Packaging & Shipping</a>
                            </li>
                            <li >
                                <a href="#services" class="nav-link">Our Services</a>
                            </li>
                            <li >
                                <a href="#profile" class="nav-link">Company Profile</a>
                            </li>
                            <li >
                                <a href="#faq" class="nav-link">FAQ</a>
                            </li>

                            
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="home" style="">
                                <h5 class="mt-2"><b>Overview</b></h5>
                                <p class="desc_head"><b>Quick Details</b></p>
                                <div class="row" style="margin: 30px 0 0 10px">
                                    <div class="col-md-6">
                                        <table>
                                            <tbody>
                                                <tr class="sides">
                                                    <td style="width: 200px"><p>Type:</p></td>
                                                    <td><p class="extended">Type</p></td>
                                                </tr>
                                                <tr class="sides">
                                                    <td style="width: 200px"><p>Type:</p></td>
                                                    <td><p class="extended">Type</p></td>
                                                </tr>
                                                <tr class="sides">
                                                    <td style="width: 200px"><p>Type:</p></td>
                                                    <td><p class="extended">Type</p></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="col-md-6">
                                        <table>
                                            <tbody>
                                                <tr class="sides">
                                                    <td style="width: 200px"><p>Type:</p></td>
                                                    <td><p class="extended">Type</p></td>
                                                </tr>
                                                <tr class="sides">
                                                    <td style="width: 200px"><p>Type:</p></td>
                                                    <td><p class="extended">Type</p></td>
                                                </tr>
                                                <tr class="sides">
                                                    <td style="width: 200px"><p>Type:</p></td>
                                                    <td><p class="extended">Type</p></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                                <p class="desc_head"><b>Supply Ability</b></p>
                                <table>
                                    <tbody>
                                        <tr class="sides">
                                            <td style="width: 200px"><p>Supply Ability: </p></td>
                                            <td><p class="extended">200000 Set/Sets per Month 10pcs rachael ray cookware set</p></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>

                                <p class="desc_head"><b>Packaging & Delivery</b></p>
                                <table>
                                    <tbody>
                                        <tr class="sides">
                                            <td style="width: 200px"><p>Packaging Details: </p></td>
                                            <td><p class="extended">bubble bag for each pans ,then one set into 5 layer giftbox , 2 sets/master carton</p></td>
                                        </tr> 
                                        <tr class="sides">
                                            <td style="width: 200px"><p>Port: </p></td>
                                            <td><p class="extended">Ningbo / Shanghai</p></td>
                                        </tr>
                                        <tr class="sides">
                                            <td style="width: 200px"><p>Lead Time: </p></td>
                                            <td><p class="extended">30 days</p></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>

                                
                               
                            </div>


                            <div class="tab-pane fade" id="packaging">
                                <p class="desc_head"><b>Packaging & Shipping</b></p>
                                <table>
                                    <tbody>
                                        <tr class="sides">
                                            <td style="width: 200px"><p>SECTION A : </p></td>
                                            <td><p class="extended">colour sleeve with polybag packing then to master carton</p></td>
                                        </tr> 
                                        <tr class="sides">
                                            <td style="width: 200px"><p>SECTION B : </p></td>
                                            <td><p class="extended">3 layers colour box packing  then to master carton</p></td>
                                        </tr>
                                        <tr class="sides">
                                            <td style="width: 200px"><p>SECTION C : </p></td>
                                            <td><p class="extended">Dispaly box packing with master carton </p></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                           <div class="tab-pane fade" id="services">
                                <p class="desc_head"><b>Our Services</b></p>
                               <p class="desc_head">-Other size and color available. </p>
                               <p class="desc_head">-Sample available, sample time 7-15 days . </p>
                               <p class="desc_head">-Sample charge discuss with each other.</p>
                               <p class="desc_head">-Terms of shipment: Fob Ningbo </p>
                            </div>


                            <div class="tab-pane fade" id="profile">
                                <p class="desc_head"><b>Comapny Profile</b></p>
                               
                            </div>
                            <div class="tab-pane fade" id="faq">
                                <p class="desc_head"><b>FAQ</b></p>
                                
                            </div>
                           
                        </div>
                    </div>
                </div>
                




                <div class="row" style="padding: 15px 30px 15px 30px">
                    <div class="col-md-12">
                        <div class="row" >
                            <h5><b>Frequently bought together</b></h5>
                        </div>
                        <div class="row">
                           <div class="col-md-9" style="padding: 0 0 0 5px">
                               <div class="row">
                                   <?php  for ($i=0; $i < 5; $i++) { ?>
                                       <div class="prod_else">
                                            <div class="col-md-12">
                                               <img src="images/aa.jpg" style="width: 100%;height: 170px;margin-top: 15px;">
                                           </div>
                                           <div style="height: 60px;overflow: hidden;">
                                               <p class="recoms_title">Lenovo Ideapad 300 500gb Harddisk</p>
                                           </div>
                                           <div style="height: 40px;overflow: hidden;">
                                               <p class="recoms_price"><b><span style="color: red">USD </span>499.99</b></p><b><span style="color: red">USD </span>499.99</b>
                                           </div>
                                       </div>
                                  <?php }  ?>
                               </div>
                           </div>
                        </div>
                    </div>
                </div>








                <div class="row" style="padding: 15px 30px 15px 30px">
                    <div class="col-md-12">
                        <div class="row" >
                            <h5><b>Supplier's popular products</b></h5>
                        </div>
                        <div class="row">
                           <div class="col-md-9" style="padding: 0 0 0 5px">
                               <div class="row">
                                   <?php  for ($i=0; $i < 5; $i++) { ?>
                                       <div class="prod_else">
                                            <div class="col-md-12">
                                               <img src="images/aa.jpg" style="width: 100%;height: 170px;margin-top: 15px;">
                                           </div>
                                           <div style="height: 60px;overflow: hidden;">
                                               <p class="recoms_title">Lenovo Ideapad 300 500gb Harddisk</p>
                                           </div>
                                           <div style="height: 40px;overflow: hidden;">
                                               <p class="recoms_price"><b><span style="color: red">USD </span>499.99</b></p><b><span style="color: red">USD </span>499.99</b>
                                           </div>
                                       </div>
                                  <?php }  ?>
                               </div>
                           </div>
                        </div>
                    </div>
                </div>




               <div class="col-md-9" style="padding: 15px 10px 15px 10px">
                   <p>Not exactly what you want? 1 request, multiple quotations <a href="">Get Quotations Now >></a></p>
                   <h5><b>Related Searches :</b></h5>
                   <div class="row">
                       <?php for ($i=0; $i < 8; $i++) { ?>
                          <div class="col-md-4">
                               <a href="">Whatever i wanted</a>
                           </div>
                      <?php  } ?>
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