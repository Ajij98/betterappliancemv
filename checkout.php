
<?php
    session_start();

    include "include/Config.php";
    include "include/Database.php";

?>

<?php

    $db = new Database();

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST['confirm_order']))
        {
            $first_name     = $_POST['first_name'];
            $email_address  = $_POST['email_address'];
            $district       = $_POST['district'];
            $thana          = $_POST['thana'];
            $phone          = $_POST['phone'];
            $street_address = $_POST['street_address'];
            $order_notes    = $_POST['order_notes'];

            $sql1 = "INSERT INTO user(first_name,email_address,district,thana,phone,street_address,order_notes) VALUES ('$first_name', '$email_address', '$district', '$thana', '$phone', '$street_address', '$order_notes')";

            $insert_row = $db->insert($sql1);

            if($insert_row)
            {
                ?>

               <script type="text/javascript">
                 window.alert("Order placed successfully.");
                 window.location='checkout.php';
               </script>

              <?php
            }
            else 
            {
               $msg = '<div class="alert alert-danger alert-dismissable w-75 m-auto" id="flash-msg"><strong>Error!</strong> Something went wrong! Data not added.</div><br/>';
               echo $msg;
               return false;
            }

        }
    }
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Grocy - Online Super Market</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Bazar Lagbe">
    <meta name="author" content="p-themes">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.9/dist/css/uikit.min.css" />
    <!-- Bootstrap v5.3.3 CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- Font-awesome-4.7.0 -->
    <link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">

</head>
<body>


    <div class="top-call uk-text-center py-2 py-sm-2 py-lg-1" style="background-color: #FFC310; color: #fff;">
        <span class="mb-0"><i class="fa fa-phone fa-fw"></i><i class="fa fa-whatsapp fa-fw"></i> Call Us: <a href="tel:+880 1831-144838" style="text-decoration: none; color: #fff;">01831-144838</a> <small><span class="uk-label" style="background-color: #FFE7D9; color: #FF6000; text-transform: capitalize; font-weight: normal; font-size: 12px; margin-bottom: 4px;">8am-10pm</span></small></span>
    </div>

    <!-- start top nav -->
    <section id="top-navbar">
        <div class="uk-container-large">
            <div class="row">
                <div class="col-12">
                    <nav uk-dropnav class="uk-navbar-container" style="background-color: #fff;">
                        <div class="uk-container">
                            <div uk-navbar>

                                <div class="uk-navbar-left">
                                    <a class="uk-navbar-item uk-logo mt-1" href="#" aria-label="Back to Home"><img src="assets/img/logo.PNG" width="180"></a>
                                </div>
                                <div class="uk-navbar-center">
                                     <div class="uk-navbar-item">
                                        <div class="uk-margin">
                                            <form class="uk-search uk-search-default" style="width: 350px;">
                                                <span class="uk-search-icon" uk-search-icon></span>
                                                <input class="uk-search-input" type="search" placeholder="Search for products..." aria-label="Search" style="border-radius: 30px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-navbar-right">
                                    <ul class="uk-navbar-nav">
                                        <li><a href="#" style="text-transform: capitalize;"><span uk-icon="cart"></span> Our Outlet</a></li>
                                        <li><a href="#" style="text-transform: capitalize;"><span uk-icon="tag"></span> Offers<span class="uk-badge" style="background-color: #0FCD5B;">3</span></a></li>
                                        <li><a href="#" style="text-transform: capitalize;"><span uk-icon="question"></span> FAQ</a></li>
                                        <li><a href="#" style="text-transform: capitalize;"><span uk-icon="user"></span> Login</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- end top nav -->


    <!-- Start top-nav section -->
    <section id="bottom-navbar">
        <div class="uk-container-large">
            <div class="row">
                <div class="col-12">
                     <nav class="uk-navbar-container shadow-sm" style="background-color: #fcfcfc; color: #2B2F4C; border-top: 1px solid #E9ECEF;">
                        <div class="uk-container">
                            <div uk-navbar>

                                <div class="uk-navbar-left" style="">
                                    <ul class="uk-navbar-nav">
                                        <li>
                                            <div class="uk-inline" style="margin-top: 5px; color: #fff; color: #FFF; background-color: #0FCD5B; padding-top: 10px; padding-bottom: 10px; border-radius: 3px;">
                                                <a href="#" style=" text-decoration: none; color: #fff;"><span uk-icon="menu" style="margin-left: 15px; margin-right: 5px;"></span> Select Category<span uk-drop-parent-icon style="margin-right: 15px; margin-left: 45px; color: #fff;"></span></a>
                                                <div class="uk-navbar-dropdown" uk-drop="mode: click; animation: slide-top; animate-out: true; duration: 500" delay-hide="100" style="width: 280px; border-radius: 3px;">
                                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                                        

                                                        <div>
    <ul class="uk-nav-default" uk-nav="multiple: true">
        <li class="uk-parent">
            <a href="#" style="font-size: 13px; margin-bottom: 10px;"><img src="assets/img/nav_icon/m64.png" width="22" style="margin-right: 12px;">MEAT <span uk-nav-parent-icon></span></a>
            <ul class="uk-nav-sub" style="margin-bottom: 15px; margin-top: 0px; padding-top: 10px; border-radius: 3px; background-color: #f9f9f9;">
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;">Beef</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;">Chicken</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;">Mutton</a></li>
            </ul>
        </li>
        
        <li class="uk-parent">
            <a href="#" style="font-size: 13px; margin-bottom: 10px;"><img src="assets/img/nav_icon/fh64i.png" width="22" style="margin-right: 12px;">FISH <span uk-nav-parent-icon></span></a>
            <ul class="uk-nav-sub" style="margin-bottom: 10px; margin-top: 0px; padding-top: 10px; border-radius: 3px; background-color: #F7F7F7;">
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Pond Fish (পুকুরের মাছ)</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Sea Fish (সাগরের মাছ)</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Dry Fish (শুঁটকি মাছ)</a></li>
            </ul>
        </li>
        
        <li class="uk-parent">
            <a href="#" style="font-size: 13px; margin-bottom: 10px;"><img src="assets/img/nav_icon/vvvv.png" width="22" style="margin-right: 12px;">VEGETABLES <span uk-nav-parent-icon></span></a>
            <ul class="uk-nav-sub" style="margin-bottom: 10px; margin-top: 0px; padding-top: 10px; border-radius: 3px; background-color: #F7F7F7;">
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Beef</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Chicken</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Mutton</a></li>
            </ul>
        </li>
    
        <li class="uk-parent">
            <a href="#" style="font-size: 13px; margin-bottom: 10px;"><img src="assets/img/nav_icon/f64i.png" width="22" style="margin-right: 12px;">FRUITS <span uk-nav-parent-icon></span></a>
            <ul class="uk-nav-sub" style="margin-bottom: 10px; margin-top: 0px; padding-top: 10px; border-radius: 3px; background-color: #F7F7F7;">
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Beef</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Chicken</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Mutton</a></li>
            </ul>
        </li>

        <li class="uk-parent">
            <a href="#" style="font-size: 13px; margin-bottom: 10px;"><img src="assets/img/nav_icon/eee.png" width="22" style="margin-right: 12px;">EGG <span uk-nav-parent-icon></span></a>
            <ul class="uk-nav-sub" style="margin-bottom: 10px; margin-top: 0px; padding-top: 10px; border-radius: 3px; background-color: #F7F7F7;">
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Beef</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Chicken</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Mutton</a></li>
            </ul>
        </li>

        <li class="uk-parent">
            <a href="#" style="font-size: 13px; margin-bottom: 10px;"><img src="assets/img/nav_icon/sss.png" width="22" style="margin-right: 12px;">SNACKS <span uk-nav-parent-icon></span></a>
            <ul class="uk-nav-sub" style="margin-bottom: 10px; margin-top: 0px; padding-top: 10px; border-radius: 3px; background-color: #F7F7F7;">
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Beef</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Chicken</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Mutton</a></li>
            </ul>
        </li>

        <li class="uk-parent">
            <a href="#" style="font-size: 13px; margin-bottom: 10px;"><img src="assets/img/nav_icon/bbb.png" width="22" style="margin-right: 12px;">BEVERAGES <span uk-nav-parent-icon></span></a>
            <ul class="uk-nav-sub" style="margin-bottom: 10px; margin-top: 0px; padding-top: 10px; border-radius: 3px; background-color: #F7F7F7;">
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Beef</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Chicken</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Mutton</a></li>
            </ul>
        </li>

        <li class="uk-parent">
            <a href="#" style="font-size: 13px; margin-bottom: 10px;"><img src="assets/img/nav_icon/v3212.png" width="22" style="margin-right: 12px;">VEGETABLES <span uk-nav-parent-icon></span></a>
            <ul class="uk-nav-sub" style="margin-bottom: 10px; margin-top: 0px; padding-top: 10px; border-radius: 3px; background-color: #F7F7F7;">
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Beef</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Chicken</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Mutton</a></li>
            </ul>
        </li>
    
        <li class="uk-parent">
            <a href="#" style="font-size: 13px; margin-bottom: 10px;"><img src="assets/img/nav_icon/fr322.png" width="22" style="margin-right: 12px;">FRUITS <span uk-nav-parent-icon></span></a>
            <ul class="uk-nav-sub" style="margin-bottom: 10px; margin-top: 0px; padding-top: 10px; border-radius: 3px; background-color: #F7F7F7;">
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Beef</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Chicken</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Mutton</a></li>
            </ul>
        </li>

        <li class="uk-parent">
            <a href="#" style="font-size: 13px; margin-bottom: 10px;"><img src="assets/img/nav_icon/e321.png" width="22" style="margin-right: 12px;">EGG <span uk-nav-parent-icon></span></a>
            <ul class="uk-nav-sub" style="margin-bottom: 10px; margin-top: 0px; padding-top: 10px; border-radius: 3px; background-color: #F7F7F7;">
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Beef</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Chicken</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Mutton</a></li>
            </ul>
        </li>

        <li class="uk-parent">
            <a href="#" style="font-size: 13px; margin-bottom: 10px;"><img src="assets/img/nav_icon/s321.png" width="22" style="margin-right: 12px;">SNACKS <span uk-nav-parent-icon></span></a>
            <ul class="uk-nav-sub" style="margin-bottom: 10px; margin-top: 0px; padding-top: 10px; border-radius: 3px; background-color: #F7F7F7;">
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Beef</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Chicken</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Mutton</a></li>
            </ul>
        </li>

        <li class="uk-parent">
            <a href="#" style="font-size: 13px; margin-bottom: 10px;"><img src="assets/img/nav_icon/b3232.png" width="22" style="margin-right: 12px;">BEVERAGES <span uk-nav-parent-icon></span></a>
            <ul class="uk-nav-sub" style="margin-bottom: 10px; margin-top: 0px; padding-top: 10px; border-radius: 3px; background-color: #F7F7F7;">
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Beef</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Chicken</a></li>
                <li><a href="#" style="font-size: 15px; margin-left: 20px; margin-bottom: 10px;"><i class="fa fa-dot-circle-o fa-fw"></i> Mutton</a></li>
            </ul>
        </li>
        
    </ul>
</div>


                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="uk-navbar-center">
                                    <ul class="uk-navbar-nav nav-middle" style="margin-top: 25px;">
                                        <li><a href="#">HOME</a></li>
                                        <li><a href="#">ALL PRODUCTS</a></li>
                                        <li><a href="#">NEW PRODUCTS</a></li>
                                        <li><a href="#">OUR BRANDS</a></li>
                                        <li><a href="#">CONTACT US</a></li>
                                    </ul>
                                </div>

                                <div class="uk-navbar-right">
                                    <ul class="uk-navbar-nav">
                                        <li style="">
                                            <a href="#" uk-toggle="target: #offcanvas-flip"><img src="assets/img/basket-7.png" uk-tooltip="title: Cart; pos: bottom" width="32"><sup><span class="uk-badge" style="background-color: #F99B0C;">3</span></sup></a>
                                            <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
                                                <div class="uk-offcanvas-bar"  style="background-color: #fff; color: #000;">
                                                    <button class="uk-offcanvas-close" type="button" uk-close style="color: #000;"></button>
                                                    <p class="shadow-sm" style="color: #000; background-color: #fff; padding: 10px 15px 10px; border-radius: 3px; margin-top: 20px; box-shadow: 5px;"><img src="assets/img/nav_icon/shopping-bag.png">Your Cart (3 Items)</p>
                                                    <div>
                                                        <table class="uk-table uk-table-small uk-table-divider">
    <tbody>
        <tr>
            <td>Table Data</td>
            <td>Table Data</td>
            <td>Table Data</td>
        </tr>
        <tr>
            <td>Table Data</td>
            <td>Table Data</td>
            <td>Table Data</td>
        </tr>
        <tr>
            <td>Table Data</td>
            <td>Table Data</td>
            <td>Table Data</td>
        </tr>


    </tbody>
</table>
                                                    </div>

                                                    <div class="uk-text-center">
                                                        <p style="color: #000; border: 1px solid #000; padding: 10px 15px 10px; border-radius: 3px; margin-top: 20px;">Subtotal: <b>1350 Tk.</b></p>
                                                    </div>


                                                            <a class="uk-button uk-width-1-1 uk-margin-small-bottom" href="#" style="background-color: #0FCD5B; color: #fff; border-radius: 3px; text-transform: capitalize;">View Cart</a>
                                                            <a class="uk-button uk-width-1-1 uk-margin-small-bottom" href="#" style="background-color: #FFA012; color: #fff; border-radius: 3px; text-transform: capitalize;">Proceed to Checkout <i class="fa fa-long-arrow-right fa-fw"></i></a>


                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End bottom-nav section -->





    <!-- Start breadcrumb section -->
    <section id="breadcrumb-section" class="mt-3">
        <div class="uk-container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="Breadcrumb">
                        <ul class="uk-breadcrumb">
                            <li><a href="index.html" style="text-decoration: none;">Home</a></li>
                            <li><a href="cart.html" style="text-decoration: none;">Cart</a></li>
                            <li class="uk-disabled"><a>Checkout</a></li>
                        </ul>
                    </nav>

                    
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->






    <!-- Start category section -->
    <section id="shoppingcart-section" class="mt-1">
        <div class="uk-container">

            <div class="row">
                <div class="mb-3">
                    <div style="border-left: 3px solid #FFC310;">
                        <h5 style="margin-left: 10px;">Checkout Details</h5>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 mb-3">
                    <div class="uk-card uk-card-default uk-card-body shadow-sm py-3 px-4" style="border-radius: 3px;">
                        <h6 class="mt-3" style="color: #000;">BILLING & SHIPPING</h6>
                        <hr>

                            <?php 
                                if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                                {
                             ?>

                            <form class="uk-grid-small" uk-grid action="checkout.php" method="POST">
                                <div class="uk-width-1-2@s">
                                    <label for="" class="mb-2">First name <span class="text-danger">*</span></label>
                                    <input class="uk-input" type="text" name="first_name" required>
                                </div>
                                <div class="uk-width-1-2@s">
                                    <label for="" class="mb-2">Email address (optional)</label>
                                    <input class="uk-input" type="text" name="email_address">
                                </div>
                                <div class="uk-width-1-1@s">
                                    <label for="" class="mb-2">Division / District <span class="text-danger">*</span></label>
                                    <select class="uk-select" name="district" required>
                                        <option selected disabled>Select an option...</option>
                                        <option>Dhaka</option>
                                        <option>Chattogram</option>
                                        <option>Rajshahi</option>
                                    </select>
                                </div>
                                <div class="uk-width-1-1@s">
                                    <label for="" class="mb-2">City / Thana <span class="text-danger">*</span></label>
                                    <select class="uk-select" name="thana" required>
                                        <option selected disabled>Select an option...</option>
                                        <option>Anwara</option>
                                        <option>Chawkbazar</option>
                                        <option>Kotwali Chattogram</option>
                                    </select>
                                </div>
                                <div class="uk-width-1-2@s">
                                    <label for="" class="mb-2">Phone <span class="text-danger">*</span></label>
                                    <input class="uk-input" type="text" name="phone" required>
                                </div>
                                <div class="uk-width-1-2@s">
                                    <label for="" class="mb-2">Street address <span class="text-danger">*</span></label>
                                    <input class="uk-input" type="text" name="street_address" placeholder="House number and street name" required>
                                </div>
                                <div class="uk-width-1-1@s mb-3">
                                    <label for="" class="mb-2">Order notes (optional)</label>
                                    <textarea class="uk-textarea" name="order_notes" rows="4" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            

                        </div>

                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                    <div class="uk-card uk-card-default uk-card-body shadow-sm py-4" style="border-radius: 3px;">
                        <div class="uk-card-title mt-2" href style="font-weight: 500; text-decoration: none; font-size: 16px; color: #F99B0C;">YOUR ORDER</div>

                        <table class="uk-table uk-table-divider uk-table-hover uk-table-small" style="background-color: #F8F8F8;">
                            <thead>
                                <tr>
                                    <th style="font-weight: 500; color: #000;">Product</th>
                                    <th class="uk-float-right" style="font-weight: 500; color: #000;">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    $sub_total = 0;
                                    $total = 0;

                                    if(isset($_SESSION['cart']))
                                    {
                                        foreach($_SESSION['cart'] as $key => $value)
                                        {
                                            $sub_total = $sub_total + ($value['price'] * $value['quantity']);
                                            ?>
                                                <tr> 
                                                    <td style="text-transform: capitalize; font-size: 14px;"><?php echo $value['product_name'] ?> <br> <?php echo $value['quantity']; ?> × <?php echo $value['price'] ?> TK</td>
                                                    <td class="uk-text-right product_subtotal" style="font-size: 14px; font-weight: 500;"></td>

                                                    <input type="hidden" class="product_price" value="<?php echo $value['price']; ?>">
                                                    <input type="hidden" class="product_quantity" value="<?php echo $value['quantity']; ?>">

                                                </tr>
                                            <?php
                                        }

                                        $total = $sub_total + 60;
                                    }
                                ?>
                            </tbody>
                        </table>

                        <table class="uk-table uk-table-divider uk-table-small">
                            <tbody>
                                <tr>
                                    <th style="text-transform: capitalize; font-size: 15px;">Subtotal</th>
                                    <td class="uk-text-right" style="font-weight: 500; color: #282626; font-size: 15px;"><?php echo $sub_total." TK"; ?></td>
                                </tr>
                                <tr>
                                    <th style="text-transform: capitalize; font-size: 15px;">Shipping</th>
                                    <td class="uk-text-right" style="font-size: 13px;">Inside Chattogram: 60.00 TK</td>
                                </tr>
                                <tr>
                                    <th style="text-transform: capitalize; font-size: 15px;">Total</th>
                                    <td class="uk-text-right" style="font-weight: 500; font-size: 18px; color: #28A745;"><?php echo $total." TK"; ?>
                                        <input type="hidden" name="grand_total" value="<?php echo $grand_total; ?>">
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <h6 class="mt-4 mb-3">Payment Options</h6>

                            <div class="uk-form-controls mb-4 pb-2">
                                <label class="mb-2" style="font-weight: 500; color: #000;"><input class="uk-radio" type="radio" name="radio1" checked> Cash On Delivery <img src="assets/img/social/cod-2.png" width="50" style="background-color: #fff; border-radius: 2px; padding: 3px 5px;"></label>
                                <br>
                                <label style="font-weight: 500; color: #000;"><input class="uk-radio" type="radio" name="radio1"> Bkash <img src="https://freepnglogo.com/images/all_img/1701541855%E0%A6%AC%E0%A6%BF%E0%A6%95%E0%A6%BE%E0%A6%B6-%E0%A6%B2%E0%A6%97%E0%A7%8B.png" width="65" style="background-color: #fff; border-radius: 2px; padding: 3px 5px;"></label>
                            </div>

                            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                <label><input class="uk-checkbox" type="checkbox" checked>  I have read and agree to the website <a href="#" style="text-decoration: none;">Terms and conditions</a> <span class="text-danger">*</span></label>
                            </div>

                        <button type="submit" name="confirm_order" class="uk-button uk-width-1-1 uk-margin-small-bottom" style="background-color: #000; color: #fff; border-radius: 2px; text-transform: capitalize; font-size: 15px; font-weight: 500;">CONFIRM ORDER</button>

                        </form>

                            <?php 
                                }
                             ?>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End category section -->




    <!-- Start footer section -->
    <footer id="footer-section" class="mt-4" style="background-color: #3a3939; color: #fff;">
        <div class="uk-container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5 mt-4">
                        <div><h5><img src="assets/img/logo.PNG" width="180" style="border-radius: 3px;"></h5></div>
                        <br>
                        <p class="mb-1 pb-0">CONTACT US</p>
                        <div style="border-bottom: 2px solid #F99B0C; width: 10%; margin-bottom: 20px;"></div>
                        <div>
                            <p><span uk-icon="location"></span> <span> Al Falah Goli, 2 No. Gate, Chittagong, Bangladesh</span></p>
                            <p><span uk-icon="receiver"></span> <span> +880 1831-144838</span></p>
                            <p><span uk-icon="mail"></span> <span> bazarlagbectg@gmail.com</span></p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-4">
                        <p class="mb-1 pb-0">COMPANY</p>
                        <div style="border-bottom: 2px solid #F99B0C; width: 10%; margin-bottom: 20px;"></div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-4">
                        <div>
                            <p class="mb-1 pb-0">PAYMENT METHOD</p>
                            <div style="border-bottom: 2px solid #F99B0C; width: 10%; margin-bottom: 20px;"></div>
                            <div class="mt-3">
                                <span><img src="https://static.vecteezy.com/system/resources/previews/030/740/487/non_2x/cash-on-delivery-logo-free-png.png" width="55" style="background-color: #fff; border-radius: 2px; padding: 3px 5px;"></span>
                                <span><img src="https://freepnglogo.com/images/all_img/1701541855%E0%A6%AC%E0%A6%BF%E0%A6%95%E0%A6%BE%E0%A6%B6-%E0%A6%B2%E0%A6%97%E0%A7%8B.png" width="60" style="background-color: #fff; border-radius: 2px; padding: 5px 5px;"></span>
                                <span><img src="https://download.logo.wine/logo/Nagad/Nagad-Logo.wine.png" width="60" style="background-color: #fff; border-radius: 2px; padding: 0px 5px;"></span>
                            </div>
                        </div>
                        <div>
                            <p class="mb-1 pb-0 mt-4">FOLLOW US</p>
                            <div style="border-bottom: 2px solid #F99B0C; width: 10%; margin-bottom: 20px;"></div>
                            <div class="mt-3">
                                <a href="#"><img src="assets/img/social/facebook.png" width="32" alt="facebook"></a>
                                <a href="#"><img src="assets/img/social/youtube.png" width="32" alt="youtube"></a>
                                <a href="#"><img src="assets/img/social/instagram.png" width="32" alt="instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="footer-bottom mt-4 py-2 uk-text-center" style="background-color: #28A745; color: #fff;">
            <div><span>Copyright © 2024 | GROCERY All Rights Reserved.</span></div>
        </div>
    </footer>
    <!-- End footer section -->







    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.9/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.9/dist/js/uikit-icons.min.js"></script>
    <!-- Bootstrap v5.3.3 JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- input field with inc/dec button js -->
    <script src="assets/js/quantityfield.js"></script>




    <script>
        
        var gst = 0;
        var product_price    = document.getElementsByClassName('product_price');
        var product_quantity = document.getElementsByClassName('product_quantity');
        var product_subtotal = document.getElementsByClassName('product_subtotal');
        var grand_subtotal   = document.getElementById('grand_subtotal');

        function subTotal()
        {
            gst = 0;
            for (i=0; i<product_price.length; i++) 
            {
                product_subtotal[i].innerText = (product_price[i].value)*(product_quantity[i].value)+" TK";

                gst = gst+(product_price[i].value)*(product_quantity[i].value);
            }
            grand_subtotal.innerText = gst+" TK";
        }

        subTotal();

    </script>


</body>
</html>
