<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/favicon.png" type="image/png">
  <title>Aladins Hub</title>

    <!--Begin  Page Level  CSS -->
    <link href="assets/plugins/morris-chart/morris.css" rel="stylesheet">
    <link href="assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"/>
     <!--End  Page Level  CSS -->
    <link href="<?php echo base_url('assets/css') ?>/icons.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css') ?>/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css') ?>/style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css') ?>/responsive.css" rel="stylesheet">

     <link href="<?php echo base_url('assets/plugins/summernote-master') ?>/summernote.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/plugins/summernote-master') ?>/summernote-bs2.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/plugins/bootstrap-wysihtml5') ?>/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />


    <link href="<?php echo base_url('assets/plugins/datatables/css') ?>/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets/plugins/datatables/css') ?>/jquery.dataTables-custom.css" rel="stylesheet" type="text/css"/>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      .overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  width: 60%;
  position: relative;
  transition: all 2s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow-x: hidden;
  overflow-y: all;
  color: #000; 
}

@media screen and (max-width: 700px){
  .popup{
    width: 70%;
  }
}
    </style>

</head>

<body class="sticky-header">
	<div class="left-side sticky-left-side">
	 <!--logo-->
        <div class="logo">
            <!-- <a href="index.html"><img src="<?php //echo site_url('assets/images')?>/logo.png" alt=""></a> -->
            <h2 style="color: #fff">Aladdins Hub</h2>
        </div>

        <div class="logo-icon text-center">
            <!-- <a href="index.html"><img src="<?php //echo site_url('assets/images')?>/logo-icon.png" alt=""></a> -->
            <h3 style="color: #fff">AH</h3>
        </div>
        <!--logo-->
        <div class="left-side-inner">
            <!--Sidebar nav-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li ><a href="<?php echo site_url('Dashboard') ?>"><i class="icon-home"></i> <span>Dashboard</span></a></li>

                <li class="menu-list"><a href="#"><i class="icon-people"></i> <span>Users and Customers</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="<?php echo site_url('dashboard/menu/1')?>"> Users</a></li>
                        <li><a href="<?php echo site_url('dashboard/menu/2')?>"> Customers</a></li>
                        <li><a href="<?php echo site_url('dashboard/menu/3')?>"> Per day User</a></li>
                        <li><a href="<?php echo site_url('dashboard/menu/4')?>"> Staff User</a></li>
                    </ul>
                </li>
                
                <li class="menu-list"><a href="#"><i class="icon-grid"></i> <span>Category</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="<?php echo site_url('dashboard/menu/5')?>"> Suppliers & Products</a></li>
                        <li><a href="<?php echo site_url('dashboard/menu/6')?>"> Classified</a></li>
                        <li><a href="<?php echo site_url('dashboard/menu/7')?>"> Trade Lead</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="icon-basket-loaded"></i> <span>Products</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="<?php echo site_url('dashboard/menu/8')?>"> Products</a></li>
                        <li><a href="<?php echo site_url('dashboard/menu/9')?>"> Classified Products</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="icon-docs"></i> <span>Trade Lead Management</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="<?php echo site_url('dashboard/menu/10')?>"> Sell List</a></li>
                        <li><a href="<?php echo site_url('dashboard/menu/11')?>"> Buy List</a></li>
                    </ul>
                </li>
                
                
                <li><a href="<?php echo site_url('dashboard/menu/12')?>"><i class="icon-tag"></i> <span>Ads & Banners</span></a> </li>

                <li class="menu-list"><a href="#"><i class="icon-note"></i> <span>Approval Center</span></a>
                    <ul class="sub-menu-list">
                    <li><a href="<?php echo site_url('dashboard/menu/13')?>"> Product Approval</a></li>
                    <li><a href="<?php echo site_url('dashboard/menu/14')?>"> Trade Buy</a></li>
                    <li><a href="<?php echo site_url('dashboard/menu/15')?>"> Trade Sell</a></li>
                    <li><a href="<?php echo site_url('dashboard/menu/16')?>"> Customer</a></li>
                    </ul>
                </li>
                
                
                <li><a href="<?php echo site_url('dashboard/menu/17')?>"><i class="icon-credit-card"></i> <span>Buy Requirement</span></a></li>
                <li><a href="<?php echo site_url('dashboard/menu/18')?>"><i class="ti-stamp"></i> <span>SEO</span></a></li>

                <li class="menu-list"><a href="#"><i class="icon-phone"></i> <span>Inquiry Box</span></a>
                    <ul class="sub-menu-list">
                    <li><a href="<?php echo site_url('dashboard/menu/19')?>"> Inquiry Box</a></li>
                    <li><a href="<?php echo site_url('dashboard/menu/20')?>"> Admin Inquiry Box</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo site_url('dashboard/menu/21')?>"><i class="icon-location-pin"></i> <span>Location Management</span></a></li>


                
                <!-- <li class="menu-list"><a href="#"><i class="ti-share"></i> <span>Import & Export</span></a>
                    <ul class="sub-menu-list">
                    <li><a href="<?php //echo site_url('dashboard/menu/22')?>"> Import Customer</a></li>
                    <li><a href="<?php //echo site_url('dashboard/menu/23')?>"> Export Customer</a></li>
                    <li><a href="<?php //echo site_url('dashboard/menu/24')?>"> Export User</a></li>
                    </ul>
                </li> -->

                <li><a href="<?php echo site_url('dashboard/menu/25')?>"><i class="fa fa-usd"></i> <span>Currency Management</span></a></li>
                <li><a href="<?php echo site_url('dashboard/menu/26')?>"><i class="fa fa-envelope-o"></i> <span>Email Template</span></a></li>


                <li class="menu-list"><a href="#"><i class="fa fa-wrench"></i> <span>Settings</span></a>
                    <ul class="sub-menu-list">
                    <li><a href="<?php echo site_url('dashboard/menu/27')?>"> Site Details</a></li>
                    <li><a href="<?php echo site_url('dashboard/menu/28')?>"> Payment Option</a></li>
                    <li><a href="<?php echo site_url('dashboard/menu/29')?>"> Social Link Setting</a></li>
                    <li><a href="<?php echo site_url('dashboard/menu/30')?>"> SMTP Mail Configuration</a></li>
                    <li><a href="<?php echo site_url('dashboard/menu/32')?>"> Site Status</a></li>
                    <li><a href="<?php echo site_url('dashboard/menu/33')?>"> Logo Change Details</a></li>
                    <li><a href="<?php echo site_url('dashboard/menu/34')?>"> Member Package</a></li>
                    </ul>
                </li>
                
                <li class="menu-list"><a href="#"><i class="ti-layout-grid3"></i> <span>Home Page Management</span></a>
                    <ul class="sub-menu-list">
                    <li><a href="<?php echo site_url('dashboard/menu/35')?>"> Home Page Banner</a></li>
                    <li><a href="<?php echo site_url('dashboard/menu/36')?>"> Sliding Images</a></li>
                    <li><a href="<?php echo site_url('dashboard/menu/37')?>"> RFQ & Featured Brands Panel</a></li>
                    </ul>
                </li>

                


            </ul>
            <!--End sidebar nav-->

        </div>
    </div>
    <div class="main-content" >
    	<div class="header-section">

            <a class="toggle-btn"><i class="fa fa-bars"></i></a>


            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-tasks"></i>
                            <span class="badge">8</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">You have 8 pending task</h5>
                            <ul class="dropdown-list">
                            <li class="notification-scroll-list notification-list ">
                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa  fa-shopping-cart noti-primary"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">A new order has been placed.</h5>
                                        <p class="m-0">
                                            <small>29 min ago</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                    
                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-check noti-success"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">Databse backup is complete</h5>
                                        <p class="m-0">
                                            <small>12 min ago</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                    
                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-user-plus noti-info"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">New user registered</h5>
                                        <p class="m-0">
                                             <small>17 min ago</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                    
                                <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-diamond noti-danger"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">Database error.</h5>
                                        <p class="m-0">
                                             <small>11 min ago</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                    
                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-cog noti-warning"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">New settings</h5>
                                        <p class="m-0">
                                             <small>18 min ago</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                             </li>
                             <li class="last"> <a href="#">View all notifications</a> </li>
							</ul>
                        </div>
                    </li>
                    
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                         <h5 class="title">Notifications</h5>
                        <ul class="dropdown-list normal-list">
						 <li class="message-list message-scroll-list">
                          <a href="#">
                              <span class="photo"> <img src="assets/images/users/avatar-8.jpg" class="img-circle" alt="img"></span>
                              <span class="subject">John Doe</span>
                              <span class="message"> New tasks needs to be done</span>
                               <span class="time">15 minutes ago</span>
                          </a>
                          
                          <a href="#">
                              <span class="photo"> <img src="assets/images/users/avatar-7.jpg" class="img-circle" alt="img"></span>
                              <span class="subject">John Doe</span>
                              <span class="message"> New tasks needs to be done</span>
                               <span class="time">10 minutes ago</span>
                          </a>
                        
                          <a href="#">
                              <span class="photo"> <img src="assets/images/users/avatar-6.jpg" class="img-circle" alt="img"></span>
                               <span class="subject">John Doe</span>
                               <span class="message"> New tasks needs to be done</span>
                              <span class="time">20 minutes ago</span>
                          </a>
                         
                          <a href="#">
                              <span class="photo"> <img src="assets/images/users/avatar-6.jpg" class="img-circle" alt="img"></span>
                               <span class="subject">John Doe</span>
                               <span class="message"> New tasks needs to be done</span>
                              <span class="time">20 minutes ago</span>
                          </a>
                        
                          <a href="#">
                              <span class="photo"> <img src="assets/images/users/avatar-6.jpg" class="img-circle" alt="img"></span>
                               <span class="subject">John Doe</span>
                               <span class="message"> New tasks needs to be done</span>
                              <span class="time">20 minutes ago</span>
                          </a>
                          
                          <a href="#">
                              <span class="photo"> <img src="assets/images/users/avatar-6.jpg" class="img-circle" alt="img"></span>
                               <span class="subject">John Doe</span>
                               <span class="message"> New tasks needs to be done</span>
                              <span class="time">20 minutes ago</span>
                          </a>
						</li>
						<li class="last"> <a  href="#">All Messages</a> </li>
					</ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo site_url('assets/images') ?>/profile-cover.jpg" alt="" />
                            Administrator
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                          <li> <a href="#profile"> <i class="fa fa-user"></i> Profile </a> </li>
                          <li> <a href="#"> <i class="fa fa-lock"></i> Logout </a> </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>

        <!--body wrapper start-->






        <div class="wrapper">
              <?php

        				if($change == 0){
        					$this->load->view('dashboard');
        				}else if($change == 1){
        					$this->load->view('user');
        				}else if($change == 2){
        					$this->load->view('customer');
        				}else if($change == 3){
        					$this->load->view('per_day_user');
        				}else if($change == 4){
                  $this->load->view('staff_users');
                }else if($change == 5){
                  $this->load->view('suppliers_and_products');
                }else if($change == 6){
                  $this->load->view('classified');
                }else if($change == 7){
                  $this->load->view('trade_lead');
                }else if($change == 8){
                  $this->load->view('products');
                }else if($change == 9){
                  $this->load->view('classified_products');
                }else if($change == 10){
                  $this->load->view('sell_list');
                }else if($change == 11){
                  $this->load->view('buy_list');
                }else if($change == 12){
                  $this->load->view('ads_and_banners');
                }





                else if($change == 13){
                  $this->load->view('product_approval');
                }else if($change == 14){
                  $this->load->view('trade_buy');
                }else if($change == 15){
                  $this->load->view('trade_sell');
                }else if($change == 16){
                  $this->load->view('customers');
                }else if($change == 17){
                  $this->load->view('buy_req');
                }else if($change == 18){
                  $this->load->view('seo');
                }else if($change == 19){
                  $this->load->view('inquiry_box');
                }else if($change == 20){
                  $this->load->view('inquiry_box_admin');
                }else if($change == 21){
                  $this->load->view('location_mgt');
                }else if($change == 22){
                  $this->load->view('ads_and_banners');
                }


                else if($change == 23){
                  $this->load->view('ads_and_banners');
                }else if($change == 24){
                  $this->load->view('ads_and_banners');
                }


                else if($change == 25){
                  $this->load->view('currency_mgt');
                }else if($change == 26){
                  $this->load->view('email_temp');
                }else if($change == 27){
                  $this->load->view('site_details');
                }else if($change == 28){
                  $this->load->view('payment_opt');
                }else if($change == 29){
                  $this->load->view('social_link');
                }else if($change == 30){
                  $this->load->view('mail_config');
                }

                else if($change == 31){
                  $this->load->view('site_details');
                }else if($change == 32){
                  $this->load->view('site_status');
                }else if($change == 33){
                  $this->load->view('logo_change');
                }else if($change == 34){
                  $this->load->view('member_package');
                }else if($change == 35){
                  $this->load->view('home_page_banner');
                }else if($change == 36){
                  $this->load->view('sliding');
                }else if($change == 37){
                  $this->load->view('rfq_and_f');
                }
                
                


                





                else if($change == 50){
                  $this->load->view('classified_type');
                }



                

            	?>   
        <!--Start  Footer -->
        
         <!--End footer -->
		</div>
    <footer class="footer-main"> <?=date('Y')?> &copy; Aladins Hub. </footer> 
        <!-- End Wrapper-->
	
	  

       </div>
      <!--End main content -->
    


    <!--Begin core plugin -->
    <script src="<?php echo base_url('assets/js') ?>/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/js') ?>/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/plugins/moment') ?>/moment.js"></script>
    <script  src="<?php echo base_url('assets/js') ?>/jquery.slimscroll.js "></script>
    <script src="<?php echo base_url('assets/js') ?>/jquery.nicescroll.js"></script>
    <script src="<?php echo base_url('assets/js') ?>/functions.js"></script>
    <!-- End core plugin -->

    
    <!--Begin Page Level Plugin-->
	 <script src="<?php echo base_url('assets/plugins/morris-chart') ?>/morris.js"></script>
    <script src="<?php echo base_url('assets/plugins/morris-chart') ?>/raphael-min.js"></script>
    <script src="<?php echo base_url('assets/plugins/jquery-sparkline') ?>/jquery.sparkline.min.js"></script>
    <script src="<?php //echo base_url('assets/pages') ?>/dashboard.js"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5') ?>/wysihtml5-0.3.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5') ?>/bootstrap-wysihtml5.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/summernote-master') ?>/summernote.min.js"></script>

    <script src="<?php echo base_url('assets/plugins/datatables/js') ?>/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/pages') ?>/table-data.js"></script>

 
    
    
    <script>
      $('.textarea').wysihtml5(); 
      $(document).ready(function() {
      $('#summernote').summernote();
    });
    </script>

    


    
    <!--End Page Level Plugin-->



    <!-- PopUp screens -->
<div id="profile" class="overlay">
  <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">

      <div class="white-box">
        <div class="post-header">
          <div class="post-author-media">
              <img src="<?php echo site_url('assets/images') ?>/profile-picture.png"  alt="">
          </div>
        
        <div class="post-author">
          <h4>Administrator</h4>
        </div>
        </div> <!-- /.post-header-->
        
    </div><!-- /.white-box-->
    <div class="white-box">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-9">
                              <input class="form-control" id="inputEmail3" placeholder="Username" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                              <input class="form-control" id="inputPassword3" placeholder="Password" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Re Password</label>
                            <div class="col-sm-9">
                              <input class="form-control" placeholder="Retype Password" type="password">
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-offset-3 col-sm-9">
                              <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                     </form>
                    </div>
    </div>
  </div>
</div>


















</body>

</html>

