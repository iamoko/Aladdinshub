<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Supplier</title>
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
                                    color: #ff5214;
                                }
                                .top_bar, .main_nav{display: none;}
                                .nestedsidemenu {
    font: bold 16px 'Bitter', sans-serif;
        position: relative;
    width: 220px;
}







/* Top Level Menu */
.nestedsidemenu ul {
    /*z-index: 100;*/
    margin: 0;
    padding: 0;
    position: relative;
    list-style: none;
}

/* Top level list items */
.nestedsidemenu ul li {
    position: relative;
}

/* Top level menu items link style */
.nestedsidemenu ul li a, .nestedsidemenu ul li span {
    display: block;
    position: relative;
    /* background of menu items (default state) */
    background: #fff;
    color: black;
    padding: 14px 10px;
    color: #000;
    text-decoration: none;
}


.nestedsidemenu ul li a:link, .nestedsidemenu ul li a:visited {
    color: #000;
}

/* Top level menu items link style on hover and when active */
.nestedsidemenu ul li:hover > a {
    background: #ff5214;
    color: white
}
.inbox-img img{
    width: 60px;
    height: 60px;
    border-radius: 50%
}
.inbox-item-info{
    margin:-50px 0 0 70px;
}
.profs a:hover{
    text-decoration:none;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.1);
}
.author{
    color: #000;
    font-weight: bold;
    font-size: 16px
}
.inbox-message{
    margin-top: -15px;
    margin-bottom:5px;
}

/* Sub ULs style */
.nestedsidemenu ul li ul {
    position: absolute;
    left: -5000px;
        top: 0;
    opacity: 0;
    width: 230px;
    visibility: hidden;
    box-shadow: 2px 2px 5px gray;
    -webkit-transition: opacity .3s, visibility 0s .3s, left 0s .3s;
    transition: opacity .3s, visibility 0s .3s, left 0s .3s;
}

/* First Sub Levels UL style on hover */
.nestedsidemenu ul li:hover > ul {
    visibility: visible;
    left: 100%;
    opacity: 1;
    -webkit-transition: opacity .5s;
    transition: opacity .5s;
}

/* Sub level Menu list items (alters style from Top level List Items) */
.nestedsidemenu ul li ul li {
    display: list-item;
    float: none;
}

/* 2nd and beyond Sub Levels vertical offset after 1st level sub menu */
.nestedsidemenu ul li ul li ul {
    top: 0;
    left: 100%;
}

/* Sub Levels link style on hover and when active */
.nestedsidemenu ul ul li:hover > a {
    background: #ff5214;
}

/* Sub Levels UL style on hover */
.nestedsidemenu ul ul li:hover > ul {
    left: 100%;
}

/* Sub level menu links style */
.nestedsidemenu ul li ul li a {
    font: normal 14px 'Bitter', sans-serif;
    padding: 10px;
    margin: 0;
    background: #fff;
    border-right: none;
    border-top-width: 0;
}

/* LIs with a sub UL style */
.nestedsidemenu ul li > a {
    /* add padding to accomodate arrow inside LIs */
    padding-right: 25px;
}

/* LIs with NO sub UL style */
.nestedsidemenu ul li > a:only-child {
    /* undo padding for non submenu LIs */
    padding-right: 10px;
}

/* LIs with a sub UL pseudo class */
.nestedsidemenu ul li > a:after {
    /* add arrow inside LIs */
    content: "";
    position: absolute;
    height: 0;
    width: 0;
    border: 5px solid transparent;
    border-left-color: #FFFFFF;
    top: 40%;
    right: 8px;
}

/* LIs with NO sub UL pseudo class */
.nestedsidemenu ul li > a:only-child:after {
    /* undo arrow for non submenu LIs */
    display: none;
}
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
  margin: 90px auto;
  padding: 20px;
  background: #fff;
  width: 70%;
  position: relative;
  transition: all 2s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-size: 15px;
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
  /*overflow: auto;*/
  overflow-y: auto;
}
.info-stats p{
    font-size: 20px;margin-bottom: 0
}
.info-icon i{
    font-size: 20px;
    margin-bottom: 10px;
    margin-top: 10px
}
.unread{
    background-color: #f2f3f7
}
.msg{
    padding-top: 10px;
}

/* ####### responsive layout CSS ####### */

@media (max-width: 923px) {
    /* FIRST breaking point
            Last top menu items' sub ULs should drop to the left (instead of right)
            Change 1 to a different number to exclude/include more top menu items based on menu and max-width setting above
        */

        .nestedsidemenu ul li:nth-last-of-type(-n+1) ul li:hover > ul {
        left: -100%;
    }
    .tab-content{
        border-top: 2px solid #ff5214;
        padding-top: 20px
    }
    .popup{
        width: 90%;
    }
}

@media (max-width: 500px) {
    /* SECOND breaking point 
            For mobile and screen browser windows
            Get Sub ULs to expand entire width of document and drop down
            Changes menu reveal type from "visibility" to "display" to overcome bug. See comments below
        */
    .nestedsidemenu{
        width: 100%;
    }
    
    .nestedsidemenu ul li > a:after {
        /* add arrow inside LIs */
        content: "";
        position: absolute;
        height: 0;
        width: 0;
        border: 5px solid transparent;
        border-left-color: transparent;
        border-top-color: #fff;
        top: 40%;
        right: 8px;
    }

    .nestedsidemenu ul li {
        position: static;
    }

    .nestedsidemenu ul li ul {
        width: 100%;
        border-top: 2px solid rgba(0,0,0,.6);
        /* change menu reveal type from "visibility" to "display". Former seems to cause browser to jump to top of page sometimes when menu header is tapped on */
        display: none;
    }

    .nestedsidemenu ul li:hover > ul {
        display: block;
        left: 0 !important;
        top: auto;
        box-shadow: 0 0 12px gray;
    }

    


}
label{
    font-size: 14px
}
.table{
        font-size: 14px
    }
.table thead tr th{
    vertical-align: top;
}
.profile_body{
  background-image: url('images/a.jpg');
  width: 100%;
  height: 280px;
  background-repeat: no-repeat;
  background-position: center;
}
.profile_picture{
  width: 100px;
  height: 100px;
  border-radius: 50%;
}
.profile_name{
  color: #fff;
  font-weight: 500;
  font-size: 25px;
}
.profile_locaton{
  color: #fff;
  font-weight: 500;
  font-size: 16px;
}
.photolia{
  width: 100px;height: 100px;margin:0 10px 10px 0 ;border-radius: 5px;
}
                            </style>
<div class="super_container"  style="background: #f2f3f7">
    <?php include 'header.php'; ?>
    <div class="content"> 
        <div>
            <div class="container">









                





                <!-- Product  -->
                 <div class="row" style="background-color: #fff; border-radius: 10px;margin: 30px 15px 20px 15px;padding:20px;">
                    <button class="open-button"  style="visibility: hidden;"></button>
                     <div class="nestedsidemenu col-md-2" style="border-right: 1px solid rgba(100,100,100,0.3)">
                        <ul id="myTab" class="nav nav-pills" style="display: block;">
                            <li><a href="#menu1" class="nav-link active">Dashboard</a></li>
                            <li><a href="#menu2" class="nav-link">Customer Requests</a></li>
                            <li><a href="#menu3" class="nav-link">Products</a></li>
                            <li><a href="#menu4" class="nav-link">Inbox</a></li>
                            <li><a href="#menu5" class="nav-link">Profile</a></li>
                        </ul>
                        <br style="clear: left" />
                        </div>




                    <div class="bs-example col-md-10" style="width: 100%">
                        <div class="tab-content" >
                            <div class="tab-pane fade show active" id="menu1" style="">
                                <p class="desc_head"><b>Dashboard</b></p>
                                 <!--Start row-->
                  <div class="row">
                   <!--Start info box-->
                   <div class="col-md-4 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p>1250</p>
                              <span>Products </span>
                          </div>
                          <div class="info-icon text-primary ">
                              <i class="fa fa-shopping-cart"></i>
                          </div>
                          <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                             </div>
                          </div>
                          </div>
                       </div>
                   </div>
                   <!--End info box-->
                   
                   <!--Start info box-->
                   <div class="col-md-4 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p>2300</p>
                              <span>Pending Requests</span>
                          </div>
                          <div class="info-icon text-info">
                             <i class="fa fa-bell-o"></i>   
                          </div>
                          <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                             </div>
                          </div>
                          </div>
                       </div>
                   </div>
                   <!--End info box-->
                
                   <!--Start info box-->
                   <div class="col-md-4 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p>5320</p>
                              <span>Messages</span>
                          </div>
                          <div class="info-icon text-warning">
                              <i class="fa fa-envelope"></i>
                          </div>
                          <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                              </div>
                          </div>
                          </div>
                       </div>
                   </div>
                   <!--End info box-->
                
                
                  </div>
                  <!--End row-->
                               
                            </div>


                            <div class="tab-pane fade" id="menu2">
                                <p class="desc_head"><b>Customer Requests</b></p>



                                <div class="col-md-12" style="padding: 0">
                                     <div class="white-box">
                                         <div class="table-responsive">
                                             <table class="table table-bordered">
                                              <thead>
                                                <tr>
                                                  <th>#</th>
                                                  <th>Product Name</th>
                                                  <th>Category</th>
                                                  <th>Sorcing Type</th>
                                                  <th>Sourcing Purpose</th>
                                                  <th>Quantity</th>
                                                  <th>Trade Terms</th>
                                                  <th>Prepared Unit Price</th>
                                                  <th>Details</th>
                                                  <th>Shipping Method</th>
                                                  <th>Destination</th>
                                                  <th>Payment Term</th>
                                                  <th>Pending / Approved</th>
                                                  <th>Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>1</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td><input type="checkbox" name=""></td>
                                                  <td>
                                                    <button class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></button>
                                                    <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-remove"></i></button>
                                                </td>
                                                </tr>
                                                <tr>
                                                  <td>2</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>

                                                  <td><input type="checkbox" name=""></td>
                                                  <td>
                                                    <button class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></button>
                                                    <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-remove"></i></button>
                                                </td>
                                                </tr>
                                               </tbody>
                                            </table>
                        
                                         </div>
                                     </div>
                                     </div>

                                
                            </div>





                           <div class="tab-pane fade" id="menu3">
                                <a href="#popup1">
                                    <button class="btn btn-info"><i class="fa fa-plus"></i> <span> Add Product</span></button>
                                </a>
                                <div class="col-md-12" style="padding: 0;margin-top: 10px">
                                     <div class="white-box">
                                        
                                         <div class="table-responsive">
                                             <table class="table table-bordered">
                                              <thead>
                                                <tr>
                                                  <th>#</th>
                                                  <th>Product Name</th>
                                                  <th>Category</th>
                                                  <th>Quantity</th>
                                                  <th>Unit Price</th>
                                                  <th>Details</th>
                                                  <th>Image</th>
                                                  <th>Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>1</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>
                                                    <button class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></button>
                                                    <button class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button>
                                                    <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-remove"></i></button>
                                                </td>
                                                </tr>
                                                <tr>
                                                  <td>2</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>Table cell</td>
                                                  <td>
                                                    <button class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></button>
                                                    <button class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button>
                                                    <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-remove"></i></button>
                                                </td>
                                                </tr>
                                               </tbody>
                                            </table>
                        
                                         </div>
                                     </div>
                                     </div>




                                
                            </div>

                             <div class="tab-pane fade" id="menu4">
                                <p class="desc_head"><b>Inbox</b></p>

                                <div class="row" style="height: 100vh;overflow-y: auto;">
                                    <div class="col-md-12 profs" style="">
                                        <a href="#" onclick="openForm()" class="row unread msg">
                                            <div class="col-md-1 inbox-img">
                                                <img src="images/aa.jpg" alt="" />
                                            </div>
                                            <div class="col-md-8">
                                                 <p class="author">John Doe</p>
                                               <p class="inbox-message">Integrating forecasts in other languages (language dropdown at the top) Integrating forecasts in other languages (language dropdown at the top)</p>
                                            </div>
                                            <div class="col-md-2">
                                                <p class="inbox-date">2020-04-03 13:24</p>
                                            </div>
                                        </a>
                                        <?php  for ($i=0; $i < 10; $i++) { ?>
                                             <a href="#" onclick="openForm()" class="row msg">
                                                <div class="col-md-1 inbox-img">
                                                    <img src="images/aa.jpg" alt="" />
                                                </div>
                                                <div class="col-md-8">
                                                     <p class="author">John Doe</p>
                                                   <p class="inbox-message">Lorem Ipsum which looks.... Lorem Ipsum which looks.... Lorem Ipsum which looks.... Lorem Ipsum which looks....</p>
                                                </div>
                                                <div class="col-md-2">
                                                    <p class="inbox-date">2020-04-03 13:24</p>
                                                </div>
                                            </a>
                                        <?php } ?>
                                       

                                    </div>


                                </div>



                            </div>






                            <div class="tab-pane fade" id="menu5">
                                <div class="col-md-12">
                                  <div class="profile_body col-md-12">
                                    <div class="col-md-12" style="display: flex;justify-content: center;top: 20px">
                                      <img src="images/aa.jpg" class="profile_picture"><br>
                                    </div>
                                    <div class="col-md-12" style="display: flex;justify-content: center;top: 30px">
                                      <h5 class="profile_name">Anything True</h5>
                                    </div>
                                    <div class="col-md-12" style="display: flex;justify-content: center;top: 25px">
                                      <h5 class="profile_locaton"><i class="fa fa-map"></i> Uganda</h5>
                                    </div>
                                    <div class="col-md-12" style="display: flex;justify-content: center;top: 25px">
                                      <h5 class="profile_locaton"><i class="fa fa-envelope"></i> Uganda@gmail.com</h5>
                                    </div>
                                    <div class="col-md-12" style="top: 30px">
                                      <a href="#editprofile">
                                        <button class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button>
                                      </a> 
                                    </div>
                                    

                                    
                                  </div>
                                  <div class="row" style="padding: 15px">
                                    <div class="col-md-8" style="margin: 10px 0;padding: 0">
                                      <div style="border: 1px solid rgba(100,100,100,0.2);border-radius: 10px;padding: 15px">
                                        <h4><b>Images</b></h4>
                                        <?php  for ($i=0; $i < 10; $i++) { ?>
                                          <img src="images/aaa.jpg" class="photolia">
                                        <?php } ?>
                                      </div>
                                    </div>
                                    <div class="col-md-4" style="margin-top: 10px;padding: 0; padding-left: 20px">
                                      <div style="border: 1px solid rgba(100,100,100,0.2);border-radius: 10px;padding: 15px">
                                        <h4><b>About</b></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae neque incidunt cumque, dolore eveniet porro asperiores itaque! Eligendi minus cupiditate molestiae praesentium, facilis, neque saepe, soluta sapiente aliquid modi sunt</p>
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
        
    </div>
    
</div>
<?php  include 'footer.php' ?>





<div id="popup1" class="overlay">
    <div class="popup">
        <h2></h2>
        <a class="close" href="#">&times;</a>
        <div class="content">
             <form action="" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <label>Category</label>
                        <select class="form-control">
                          <option>Select Option</option>
                        </select>
                        
                    </div>
                    <div class="col-md-6">
                        <label>Name <span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="">

                      
                    </div>

                    <div class="col-md-6">
                        <label>Image <span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="">

                      
                    </div>
                    <div class="col-md-6">
                        <label>Quantity <span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="">

                      
                    </div>

                    <div class="col-md-6">
                        <label>Unit Price <span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="">

                      
                    </div>


                    <div class="col-md-12">
                        <label>Details <span style="color: red">*</span></label>
                        <textarea class="form-control"></textarea> <br>
                        <button type="submit" class="btn btn-info"><span>Submit</span> </button> 
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>



<div id="editprofile" class="overlay">
    <div class="popup">
        <h2>Edit Profile</h2>
        <a class="close" href="#">&times;</a>
        <div class="content">
             <form action="" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <label>Title <span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="">

                      
                    </div>



                    <div class="col-md-6">
                        <label>Profile Picture <span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="">
                    </div>

                    <div class="col-md-6">
                        <label>Company Photos <span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="">
                    </div>


                    <div class="col-md-6">
                        <label>Location <span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="">

                      
                    </div>

                    <div class="col-md-6">
                        <label>Email <span style="color: red">*</span></label>
                        <input type="email" class="form-control" name="">

                      
                    </div>
                    <div class="col-md-6">
                        <label>Password <span style="color: red">*</span></label>
                        <input type="password" class="form-control" name="">

                      
                    </div>

                    <div class="col-md-12">
                        <label>About <span style="color: red">*</span></label>
                        <textarea class="form-control"></textarea> <br>
                        <button type="submit" class="btn btn-info"><span>Submit</span> </button> 
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>





                            </body>
                        </html>

                        <!-- Amoko Ivan -->