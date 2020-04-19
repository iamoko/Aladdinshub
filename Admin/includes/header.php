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
    <link href="assets/css/icons.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

     <link href="assets/plugins/summernote-master/summernote.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/summernote-master/summernote-bs2.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />


    <link href="assets/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/css/jquery.dataTables-custom.css" rel="stylesheet" type="text/css"/>
    
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
                <li ><a href="index.php"><i class="icon-home"></i> <span>Dashboard</span></a></li>

                <li class="menu-list"><a href="#"><i class="icon-people"></i> <span>Users and Customers</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="user.php"> Users</a></li>
                        <li><a href="customer.php"> Customers</a></li>
                        <li><a href="per_day_user.php"> Per day User</a></li>
                        <li><a href="staff_users.php"> Staff User</a></li>
                    </ul>
                </li>
                
                <li class="menu-list"><a href="#"><i class="icon-grid"></i> <span>Category</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="suppliers_and_products.php"> Suppliers & Products</a></li>
                        <li><a href="classified.php"> Classified</a></li>
                        <li><a href="trade_lead.php"> Trade Lead</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="icon-basket-loaded"></i> <span>Products</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="products.php"> Products</a></li>
                        <li><a href="classified_products.php"> Classified Products</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="icon-docs"></i> <span>Trade Lead Management</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="sell_list.php"> Sell List</a></li>
                        <li><a href="buy_list.php"> Buy List</a></li>
                    </ul>
                </li>
                
                
                <li><a href="ads_and_banners.php"><i class="icon-tag"></i> <span>Ads & Banners</span></a> </li>

                <li class="menu-list"><a href="#"><i class="icon-note"></i> <span>Approval Center</span></a>
                    <ul class="sub-menu-list">
                    <li><a href="product_approval.php"> Product Approval</a></li>
                    <li><a href="trade_buy.php"> Trade Buy</a></li>
                    <li><a href="trade_sell.php"> Trade Sell</a></li>
                    <li><a href="customers.php"> Customer</a></li>
                    </ul>
                </li>
                
                
                <li><a href="buy_req.php"><i class="icon-credit-card"></i> <span>Buy Requirement</span></a></li>
                <li><a href="seo.php"><i class="ti-stamp"></i> <span>SEO</span></a></li>

                <li class="menu-list"><a href="#"><i class="icon-phone"></i> <span>Inquiry Box</span></a>
                    <ul class="sub-menu-list">
                    <li><a href="inquiry_box.php"> Inquiry Box</a></li>
                    <li><a href="inquiry_box_admin.php"> Admin Inquiry Box</a></li>
                    </ul>
                </li>
                <li><a href="location_mgt.php"><i class="icon-location-pin"></i> <span>Location Management</span></a></li>


                
                

                <li><a href="currency_mgt.php"><i class="fa fa-usd"></i> <span>Currency Management</span></a></li>
                <li><a href="email_temp.php"><i class="fa fa-envelope-o"></i> <span>Email Template</span></a></li>


                <li class="menu-list"><a href="#"><i class="fa fa-wrench"></i> <span>Settings</span></a>
                    <ul class="sub-menu-list">
                    <li><a href="site_details.php"> Site Details</a></li>
                    <li><a href="payment_opt.php"> Payment Option</a></li>
                    <li><a href="social_link.php"> Social Link Setting</a></li>
                    <li><a href="mail_config.php"> SMTP Mail Configuration</a></li>
                    <li><a href="site_status.php"> Site Status</a></li>
                    <li><a href="logo_change.php"> Logo Change Details</a></li>
                    <li><a href="member_package.php"> Member Package</a></li>
                    </ul>
                </li>
                
                <li class="menu-list"><a href="#"><i class="ti-layout-grid3"></i> <span>Home Page Management</span></a>
                    <ul class="sub-menu-list">
                    <li><a href="home_page_banner.php"> Home Page Banner</a></li>
                    <li><a href="sliding.php"> Sliding Images</a></li>
                    <li><a href="rfq_and_f.php"> RFQ & Featured Brands Panel</a></li>
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
                            <img src="assets/images/profile-cover.jpg" alt="" />
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
             



