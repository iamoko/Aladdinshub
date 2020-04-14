<style type="text/css">
                                    #myBtn {
                                      display: none;
                                      position: fixed;
                                      bottom: 20px;
                                      right: 30px;
                                      z-index: 99;
                                      font-size: 18px;
                                      border: none;
                                      outline: none;
                                      background-color: red;
                                      color: white;
                                      cursor: pointer;
                                      padding: 15px;
                                      border-radius: 4px;
                                    }

                                    #myBtn:hover {
                                      background-color: #555;
                                    }
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
                                    .panel3{
                                        background: #00bcc6 !important;
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

        $("#myTablet a").click(function(e){
            e.preventDefault();
            $(this).tab('show');
        });

        $("#myTabletss a").click(function(e){
            e.preventDefault();
            $(this).tab('show');
        });
    });
</script>
<style type="text/css">
    .sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}
</style>

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
        <div class="header_main"  id="myHeader" style="background: #fff">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="col-lg-2 col-sm-3 col-3 order-1">
                        <div class="logo_container">
                            <div class="logo"><a href="#"><img src="images/logo.jpg"></a></div>
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
                            <a href="" class="wishlist_icon" style="width: 90px;height: 40px;border: 1px solid #128607;text-align: center;padding-top: 8px;margin-right: 10px; background: #128607;color: white;font-size: 14px"><span>Get Quote</span></a>
                            <a href="" class="wishlist_icon" style="width: 90px;height: 40px;border: 1px solid #ff5212;text-align: center;padding-top: 8px;background: #ff5212;color: #fff;font-size: 14px"><span>SourcePro</span></a>

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
                                            <li class="hassubs"> <a href="#">Lenovo Lenovo <i class="fa fa-angle-right"></i></a>
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
                                            <li class="hassubs"> <a href="#">APPLE <i class="fa fa-angle-right"></i></a>
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