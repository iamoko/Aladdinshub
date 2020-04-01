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
                                <style type="text/css">
                                    .product_btn{
                                        color: rgb(131, 176, 220);;
                                        background-color: #fff;
                                        font-size: 14px;
                                        border-radius: 20px;
                                        padding: 0 16px;
                                        margin-top: 80px;
                                        line-height: 30px;
                                        height: 33px;
                                        max-width: 200px;
                                        overflow: hidden;
                                        margin-left: 30px;
                                        text-overflow: ellipsis;
                                        display: -webkit-box;
                                        -webkit-line-clamp: 1;
                                        -webkit-box-orient: vertical;
                                    }
                                </style>
                                <script type='text/javascript'>$(document).ready(function()
{
"use strict";

var menuActive = false;
var header = $('.header');
setHeader();
initCustomDropdown();
initPageMenu();

function setHeader()
{

if(window.innerWidth > 991 && menuActive)
{
closeMenu();
}
}

function initCustomDropdown()
{
if($('.custom_dropdown_placeholder').length && $('.custom_list').length)
{
var placeholder = $('.custom_dropdown_placeholder');
var list = $('.custom_list');
}

placeholder.on('click', function (ev)
{
if(list.hasClass('active'))
{
list.removeClass('active');
}
else
{
list.addClass('active');
}

$(document).one('click', function closeForm(e)
{
if($(e.target).hasClass('clc'))
{
$(document).one('click', closeForm);
}
else
{
list.removeClass('active');
}
});

});

$('.custom_list a').on('click', function (ev)
{
ev.preventDefault();
var index = $(this).parent().index();

placeholder.text( $(this).text() ).css('opacity', '1');

if(list.hasClass('active'))
{
list.removeClass('active');
}
else
{
list.addClass('active');
}
});


$('select').on('change', function (e)
{
placeholder.text(this.value);

$(this).animate({width: placeholder.width() + 'px' });
});
}

/*

4. Init Page Menu

*/

function initPageMenu()
{
if($('.page_menu').length && $('.page_menu_content').length)
{
var menu = $('.page_menu');
var menuContent = $('.page_menu_content');
var menuTrigger = $('.menu_trigger');

//Open / close page menu
menuTrigger.on('click', function()
{
if(!menuActive)
{
openMenu();
}
else
{
closeMenu();
}
});

//Handle page menu
if($('.page_menu_item').length)
{
var items = $('.page_menu_item');
items.each(function()
{
var item = $(this);
if(item.hasClass("has-children"))
{
item.on('click', function(evt)
{
evt.preventDefault();
evt.stopPropagation();
var subItem = item.find('> ul');
if(subItem.hasClass('active'))
{
subItem.toggleClass('active');
TweenMax.to(subItem, 0.3, {height:0});
}
else
{
subItem.toggleClass('active');
TweenMax.set(subItem, {height:"auto"});
TweenMax.from(subItem, 0.3, {height:0});
}
});
}
});
}
}
}

function openMenu()
{
var menu = $('.page_menu');
var menuContent = $('.page_menu_content');
TweenMax.set(menuContent, {height:"auto"});
TweenMax.from(menuContent, 0.3, {height:0});
menuActive = true;
}

function closeMenu()
{
var menu = $('.page_menu');
var menuContent = $('.page_menu_content');
TweenMax.to(menuContent, 0.3, {height:0});
menuActive = false;
}


});</script>

<script>
    $(document).ready(function(){ 
        $("#myTab a").click(function(e){
            e.preventDefault();
            $(this).tab('show');
        });
    });
</script>
                            </head>
                            <body>
                            <script src="js/TweenMax.min.js"></script>
<div class="super_container"  style="background: #f2f3f7">
    <!-- Header -->
    <header class="header" style="background: #fff">
        <!-- Top Bar -->
        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="top_bar_contact_item">
                            <div class="top_bar_icon"><img src="icons/phone.png" alt=""></div>+256 7055 318 98
                        </div>
                        <div class="top_bar_contact_item">
                            <div class="top_bar_icon"><img src="icons/mail.png" alt=""></div><a href="mailto:fatsales@gmail.com">aniything@gmail.com</a>
                        </div>
                        <div class="top_bar_content ml-auto">
                            <div class="top_bar_menu">
                                <ul class="standard_dropdown top_bar_dropdown">
                                    <li> <a href="#">English<i class="fa fa-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="#">Italian</a></li>
                                            <li><a href="#">Spanish</a></li>
                                            <li><a href="#">Japanese</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="#">$ US dollar<i class="fa fa-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="#">EUR Euro</a></li>
                                            <li><a href="#">GBP British Pound</a></li>
                                            <li><a href="#">JPY Japanese Yen</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Header Main -->
        <div class="header_main">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="col-lg-2 col-sm-3 col-3 order-1">
                        <div class="logo_container">
                            <div class="logo"><a href="#">Aladdinshub</a></div>
                        </div>
                    </div> <!-- Search -->
                    <div class="col-lg-7 col-12 order-2 text-lg-left text-right">
                        <div class="header_search" style="height: 80px">
                            <div class="header_search_content" >
                                <div class="header_search_form_container">
                                    <form action="#" class="header_search_form clearfix" > 
                                         <div class="custom_dropdown" style="width: 20%;" >
                                            <div class=""> <span class="custom_dropdown_placeholder clc">All Categories <i class="fa fa-angle-down" style="margin-right: 10px"></i></span> 
                                                <ul class="custom_list clc">
                                                    <li><a class="clc" href="#">All Categories</a></li>
                                                    <li><a class="clc" href="#">Computers</a></li>
                                                    <li><a class="clc" href="#">Laptops</a></li>
                                                    <li><a class="clc" href="#">Cameras</a></li>
                                                    <li><a class="clc" href="#">Hardware</a></li>
                                                    <li><a class="clc" href="#">Smartphones</a></li>
                                                </ul>
                                            </div>
                                        </div> 
                                        <input type="search" required="required" style="width: 62%" class="header_search_input" placeholder="What are you looking for...">
                                       
                                        <button type="submit" class="header_search_button trans_300"  value="Submit"><img src="icons/search.png" alt=""> Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Wishlist -->
                    <div class="col-lg-3 col-9 order-lg-3 order-2 text-lg-left text-right">
                        <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                            <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                                <div class="wishlist_icon"><img src="icons/user.svg" alt=""></div>
                                <div class="wishlist_content">
                                    <div class="wishlist_text"><a href="#">Sign in<br>Join Free</a></div>
                                </div>
                            </div>
                            <div class="wishlist_icon" style="width: 90px;height: 40px;border: 1px solid #128607;text-align: center;padding-top: 8px;margin-right: 10px; background: #128607;color: white;font-size: 14px"><span>Get Quote</span></div>
                            <div class="wishlist_icon" style="width: 90px;height: 40px;border: 1px solid #ff5212;text-align: center;padding-top: 8px;background: #ff5212;color: #fff;font-size: 14px"><span>SourcePro</span></div>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Main Navigation -->

        <nav class="main_nav">
            <div class="container">
                <div class="row" >
                    <div class="col" >
                        <div class="main_nav_content d-flex flex-row">
                            <!-- Categories Menu -->
                            <!-- Main Nav Menu -->
                            <div class="main_nav_menu" style="width: 100%" >
                                <ul class="standard_dropdown main_nav_dropdown">
                                    <li class="hassubs"><a href="#"><i class="fa fa-bars"></i> Categories<i class="fa fa-chevron-down"></i></a>
                                        <ul>
                                            <li class="hassubs"> <a href="#">Lenovo Lenovo <i class="fa fa-chevron-down"></i></a>
                                                <ul>
                                                    <li><a href="#">Lenovo 1<i class="fa fa-chevron-down"></i></a></li>
                                                    <li><a href="#">Lenovo 3<i class="fa fa-chevron-down"></i></a></li>
                                                    <li><a href="#">Lenovo 2<i class="fa fa-chevron-down"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">DELL<i class="fa fa-chevron-down"></i></a></li>
                                            <li><a href="#">APPLE<i class="fa fa-chevron-down"></i></a></li>
                                            <li><a href="#">HP<i class="fa fa-chevron-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Home</a></li>
                                    
                                    <li class="hassubs"> <a href="#">Suppliers<i class="fa fa-chevron-down"></i></a>
                                        <ul>
                                            <li> <a href="#">APPLE<i class="fa fa-chevron-down"></i></a>
                                                <ul>
                                                    <li><a href="#">Laptop<i class="fa fa-chevron-down"></i></a></li>
                                                    <li><a href="#">Mobiles<i class="fa fa-chevron-down"></i></a></li>
                                                    <li><a href="#">Ipads<i class="fa fa-chevron-down"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Samsung<i class="fa fa-chevron-down"></i></a></li>
                                            <li><a href="#">Lenovo<i class="fa fa-chevron-down"></i></a></li>
                                            <li><a href="#">DELL<i class="fa fa-chevron-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Products</a></li>
                                    <li><a href="#">Classifieds</a></li>
                                    
                                    <li style="float: right;"><a href="contact.html">Contact<i class="fa fa-chevron-down"></i></a></li>
                                </ul>
                            </div> <!-- Menu Trigger -->
                            <div class="menu_trigger_container ml-auto">
                                <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                    <div class="menu_burger">
                                        <div class="menu_trigger_text">Aladins Hub</div>
                                        <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav> <!-- Menu -->


        <!-- Menu when window is small -->
        <div class="page_menu">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page_menu_content">
                            <div class="page_menu_search">
                                <form action="#"> <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products..."> </form>
                            </div>
                            <ul class="page_menu_nav">
                                <li class="page_menu_item has-children"> <a href="#">Categories<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Laptop<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Desktop<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Samsung<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Apple<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                               
                                <li class="page_menu_item"> <a href="#">Home<i class="fa fa-angle-down"></i></a> </li>
                                <li class="page_menu_item has-children"> <a href="#">Suppliers<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li class="page_menu_item has-children"> <a href="#">Electronics<i class="fa fa-angle-down"></i></a>
                                            <ul class="page_menu_selection">
                                                 <li><a href="#">Laptop<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="#">Desktop<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="#">Samsung<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="#">Apple<i class="fa fa-angle-down"></i></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Home Supllies<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Cookers<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item"> <a href="#">Products<i class="fa fa-angle-down"></i></a> </li>
                                <li class="page_menu_item"> <a href="#">Classifieds<i class="fa fa-angle-down"></i></a> </li>
                                 <li class="page_menu_item has-children"> <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="menu_contact">
                                <div class="menu_contact_item">
                                    <div class="menu_contact_icon"><img src="icons/phone.png" alt=""></div>65326 6131 65 
                                </div>
                                <div class="menu_contact_item">
                                    <div class="menu_contact_icon"><img src="icons/mail.png" alt=""></div><a href="mailto:fatsales@gmail.com">fatsales@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div> 
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
                            <a href=""  style="text-decoration: none;"><div class="col-md-12" style="background: #00bcc6 !important;text-align: center;font-weight: bold; height: 30px;color: #fff">
                               Selected Machinery
                            </div></a>
                            <a href="1" style="text-decoration: none;">
                                <div class="col-md-12 side_menu_ext">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p>Woodworking Machinery</p>
                                            <div>Source Now</div>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="images/a.jpg">
                                        </div>
                                    </div>
                                    
                                </div>
                            </a>
                            <a href="2" style="text-decoration: none;">
                                <div class="col-md-12 side_menu_ext">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p>Woodworking Machinery</p>
                                            <div>Source Now</div>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="images/a.jpg">
                                        </div>
                                    </div>
                                    
                                </div>
                            </a>
                            <a href="3" style="text-decoration: none;">
                                <div class="col-md-12 side_menu_ext">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p>Woodworking Machinery</p>
                                            <div>Source Now</div>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="images/a.jpg">
                                        </div>
                                    </div>
                                    
                                </div>
                            </a>
                           
                    </div>
                </div>    
                </div>
            </div>
        </div>


        <div>
            <div class="container">




                <!-- Product Catery Laptop -->
                 <div class="row row4">
                     <div class="col-md-12">
                         <a href="" style="text-decoration: none;">
                            <div class="row" style="margin-bottom: 10px;">
                                 <div class="col-md-2">
                                     <h2 class="rfq">Laptop</h2>
                                 </div>
                                 <div class="col-md-10 sliding"></div>
                            </div>

                             <div class="row" style="margin: 0">
                               <a href="" class="col-md-36 product_img" style="background-image: url('images/aa.jpg');">
                                   <h3 class="product_title">Shopping Guide for trending styles</h3>
                                   <button class="btn product_btn">Source Now</button>
                               </a>
                               <div class="col-md-37 row5" style="background: #fff;">
                                <div class="row specific_bot" style="margin: 0">
                                    <a href="" class="col-md-3" style="border-right:1px solid rgba(100,100,100,0.2);height: 300px;">
                                     <h4 class="specific_title">Top-ranking products in US</h4>

                                                <?php if($i==0){ ?>
                                                <p class="specific_label"><i class="fa fa-bar-chart"></i> Samsung</p>
                                                 <?php } ?>

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







                














            </div>
        </div>
        
    </div>
    
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
                            </body>
                        </html>