<?php ob_start();
session_start();  
 include'database/connect.php';
 include'database/cart_function.php';
?>
<?php 
         $pro_cart = isset($_SESSION['cart_bag']) ? $_SESSION['cart_bag'] : [];
        if(isset($_SESSION['member_login'])){
            $customer=$_SESSION['member_login'];
        } else $customer = '';
?>
<?php 
    $get_cat = "SELECT * FROM category" ;
    $cat = $conn->query($get_cat);
    $category = [];
    foreach ($cat as $c) :
        $category[] =$c; 
    endforeach;
    function show_category($data,$parent_id=0,$string=''){
        foreach ($data as $k => $cat) :
            if($cat->parent_id == $parent_id && $parent_id == 0) :
                echo "<li>";
                    echo '<a href="shop_grid.php?id='.$cat->id.'"">'.$cat->name.'</a>';
                    echo '<ul class="nav-dropdown js-nav-dropdown">';
                        echo '<li class="container">';
                            echo '<ul class="row">';
                                echo '<li class="nav-dropdown-grid">';
                                    echo "<ul>";
                unset($data[$k]);
                show_category($data,$cat->id);
                                     echo "</ul>";
                                echo "</li>";
                            echo "</ul>";
                        echo "</li>";
                    echo "</ul>";
                echo "</li>";                                 
            endif;    
            if($cat->parent_id == $parent_id && $parent_id != 0) :
                echo '<li><a href="shop_grid.php?id='.$cat->id.'"">'.$cat->name.'</a></li>';
                unset($data[$k]);
            endif;
        endforeach;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Philos - Responsive Ecommerce Html Template</title>
    <meta name="description" content="Philos Template" />
    <meta name="keywords" content="philos, WooCommerce, bootstrap, html template, philos template">
    <meta name="author" content="philos" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="img/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">

<link href="css/blog.css" rel="stylesheet">
    <!-- CSS -->
    <link href="css/plugins/bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap css -->
    <link href="css/plugins/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- fontawesome css -->
    <link href="css/plugins/animate.css" rel="stylesheet" type="text/css" />
    <!-- sweetAlert2 css -->
    <link href="css/plugins/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <!-- animate css -->
    <link href="css/style - Copy.css" rel="stylesheet" type="text/css" />
    <!-- template css -->
    <link href="plugins/rev_slider/css/settings-ver.5.3.1.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/my_acc.css">           
    <!-- Slider Revolution Css Setting -->

<!-- ORDER -->
<link href="css/acc_order.css" rel="stylesheet">
<!-- bar-info -->
<link rel="stylesheet" type="text/css" href="css/acc_info_bar.css">
<!-- ORDER -->
<link rel="stylesheet" type="text/css" href="css/acc_order2.css"> 
<!-- bar-info -->
<link rel="stylesheet" type="text/css" href="css/acc_info_bar2.css">
</head>
<body>

    <!-- Newsletter Popup ---------------------------------------------------->
    <section id="nlpopup" data-expires="30" data-delay="10">
        <!--Close Button-->
        <a href="javascript:void(0)" class="nlpopup_close nlpopup_close_icon">
            <img src="img/close-icon-white.png" alt="Newsletter Close" /></a>
            <!--End Close Button-->

            <h3 class="mb-40">Join Our Mailing List </h3>
            <p class="black mb-20">
                But I must explain to you how all this mistaken<br />
                idea of denouncing pleasure pain.
            </p>
            <form>  
                <input class="input-md" name="footeremail" title="Enter Email Address.." placeholder="example@domain.com" type="email">
                <button class="btn btn-md btn-color">Subscribe</button>
            </form>
            <label class="mt-20">
                Sign up For Exclusive Updates, New Arrivals<br />
            And Insider-Only Discount.</label>
            <a class="nlpopup_close nlpopup_close_link mt-40">&#10006; Close</a>
        </section>
        <!-- Overlay -->
        <div id="nlpopup_overlay"></div>
        <!-- End Newsletter Popup ------------------------------------------------>

        <!-- Sidebar Menu (Cart Menu) ------------------------------------------------>
        <section id="sidebar-right" class="sidebar-menu sidebar-right">
            <div class="cart-sidebar-wrap">

                <!-- Cart Headiing -->
                <div class="cart-widget-heading">
                    <h4>Shopping Cart</h4>
                    <!-- Close Icon -->
                    <a href="javascript:void(0)" id="sidebar_close_icon" class="close-icon-white"></a>
                    <!-- End Close Icon -->
                </div>
                <!-- End Cart Headiing -->

                <!-- Cart Product Content -->
                <div class="cart-widget-content">
                    <div class="cart-widget-product ">

                        <!-- Empty Cart -->
                        <?php if (quantity()==0) : ?>
                        <div class="">
                            <p>You have no items in your shopping cart.</p>
                        </div>
                        <!-- EndEmpty Cart -->

                        <!-- Cart Products -->
                        <?php else: ?>
                        <ul class="cart-product-item">

                            <!-- Item -->
                            <?php  foreach ($pro_cart as $pro) :?>
                            <li>
                                <!--Item Image-->
                                <a href="#" class="product-image">
                                    <img src="uploads/product/<?php echo $pro['img']; ?>" alt="" /></a>

                                    <!--Item Content-->
                                    <div class="product-content">
                                        <!-- Item Linkcollateral -->
                                        <a class="product-link" href="#"><?php echo $pro['name']; ?></a>

                                        <!-- Item Cart Totle -->
                                        <div class="cart-collateral">
                                            <span class="qty-cart">1</span>&nbsp;<span>&#215;</span>&nbsp;<span class="product-price-amount"><span class="currency-sign">$</span><?php echo $pro['price'];?></span>
                                        </div>

                                        <!-- Item Remove Icon -->
                                        <a class="product-remove" href="javascript:void(0)"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                    </div>
                                </li>
                            <?php  endforeach; ?>
                               
                                </ul>
                            
                                <!-- End Cart Products -->

                            </div>
                        </div>
                        <!-- End Cart Product Content -->

                        <!-- Cart Footer -->
                        <div class="cart-widget-footer">
                            <div class="cart-footer-inner">

                                <!-- Cart Total -->
                                <h4 class="cart-total-hedding normal"><span>Total :</span><span class="cart-total-price">$<?php  echo money(); ?></span></h4>
                                <!-- Cart Total -->

                                <!-- Cart Buttons -->
                                <div class="cart-action-buttons">
                                    <a href="cart.php" class="view-cart btn btn-md btn-gray">View Cart</a>
                                    <a href="checkout.php" class="checkout btn btn-md btn-color">Checkout</a>
                                </div>
                                <!-- End Cart Buttons -->

                            </div>
                        </div><?php endif; ?>
                        <!-- Cart Footer -->
                    </div>
                </section>
                <!--Overlay-->
                <div class="sidebar_overlay"></div>
                <!-- End Sidebar Menu (Cart Menu) -------------------------------------------->

                <!-- Search Overlay Menu ----------------------------------------------------->
                <section class="search-overlay-menu">
                    <!-- Close Icon -->
                    <a href="javascript:void(0)" class="search-overlay-close"></a>
                    <!-- End Close Icon -->
                    <div class="container">
                        <!-- Search Form -->
                        <form role="search" id="searchform" action="https://theme.nileforest.com/search" method="get">
                            <div class="search-icon-lg">
                                <img src="img/search-icon-lg.png" alt="" />
                            </div>
                            <label class="h6 normal search-input-label" for="search-query">Enter keywords to Search Product</label>
                            <input value="" name="q" type="search" placeholder="Search..." />
                            <button type="submit">
                                <img src="img/search-lg-go-icon.png" alt="" />
                            </button>
                        </form>                  <!-- End Search Form -->

                    </div>
                </section>
                <!-- End Search Overlay Menu ------------------------------------------------>

                <!--==========================================-->
                <!-- wrapper -->
                <!--==========================================-->
                <div class="wraper">
                        <!-- Header -->
                    <header class="header">
                        <!--Topbar-->
                        <div class="header-topbar">
                            <div class="header-topbar-inner">
                                <!--Topbar Left-->
                                <div class="topbar-left hidden-sm-down">
                                    <div class="phone"><i class="fa fa-phone left" aria-hidden="true"></i>Customer Support : <b>+77 7565 348 576</b></div>
                                </div>
                                <!--End Topbar Left-->

                                <!--Topbar Right-->
                                <div class="topbar-right">
                                    <ul class="list-none">
                                        <?php if(!$customer): ?>
                                        <li>
                                            <a href="login-register.php"><i class="fa fa-lock left" aria-hidden="true"></i><span class="hidden-sm-down">Đăng nhập | Đăng kí</span></a>
                                        </li>
                                    <?php else: ?>
                                        <li class="dropdown-nav">
                                            <a href="my_acc.php"><i class="fa fa-user left" aria-hidden="true"></i><span class="hidden-sm-down"><?php echo $customer->full_name; ?></span><i class="fa fa-angle-down right" aria-hidden="true"></i></a>
                                            <!--Dropdown-->
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="my_acc.php">Tài khoản của tôi</a></li>
                                                    <li><a href="my_acc.php?module=orders">Lịch sử mua hàng</a></li>
                                                    <li><a href="#">D</a></li>
                                                    <li><a href="checkout.php">Checkout</a></li>
                                                </ul>
                                                <span class="divider"></span>
                                                <ul>
                                                    <li><a href="modules/account/logout.php"><i class="fa fa-lock left" aria-hidden="true"></i>Logout</a></li>
                                                </ul>
                                            </div>
                                            <!--End Dropdown-->
                                        </li>
                                    <?php endif; ?>
                                        <li class="dropdown-nav">
                                            <a href="#">USD<i class="fa fa-angle-down right" aria-hidden="true"></i></a>
                                            <!--Dropdown-->
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="#">USD</a></li>
                                                    <li><a href="#">EUR</a></li>
                                                    <li><a href="#">GBP</a></li>
                                                    <li><a href="#">AUD</a></li>
                                                </ul>
                                            </div>
                                            <!--End Dropdown-->
                                        </li>
                                        <li>
                                            <a href="about.php">Giới thiệu</a>
                                        </li>
                                        <li>
                                            <a href="contact.php">Liên hệ</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Topbar Right -->
                            </div>
                        </div>
                        <!--End Topbart-->

                        <!-- Header Container -->
                        <div id="header-sticky" class="header-main">
                            <div class="header-main-inner">
                                <!-- Logo -->
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/logo_black.png" alt="Philos" />
                                    </a>
                                </div>
                                <!-- End Logo -->


                                <!-- Right Sidebar Nav -->
                                <div class="header-rightside-nav">
                                    <!-- Login-ăn Link -->
                                    <div class="header-btn-link hidden-lg-down"><a href="#" class="btn btn-sm btn-color">Mua ngay</a></div>
                                    <!-- End Login-Register Link -->

                                    <!-- Sidebar Icon -->
                                    <div class="sidebar-icon-nav">
                                        <ul class="list-none-ib">
                                            <!-- Search-->
                                            <li><a id="search-overlay-menu-btn"><i aria-hidden="true" class="fa fa-search"></i></a></li>

                                            <!-- Whishlist-->
                                            <li><a href="wish_list.php" class="js_whishlist-btn"><i aria-hidden="true" class="fa fa-heart"></i><span class="countTip">10</span></a></li>

                                            <!-- Cart-->
                                            <li id="qty"><a id="sidebar_toggle_btn">
                                                <div class="cart-icon">
                                                    <i aria-hidden="true" class="fa fa-shopping-bag"></i>
                                                </div>

                                                <div class="cart-title">
                                                    <span class="cart-count"><?php echo quantity(); ?></span>
                                                    /
                                                    <span class="cart-price strong">$<?php echo money(); ?></span>
                                                </div>
                                            </a></li>
                                        </ul>
                                    </div>
                                    <!-- End Sidebar Icon -->
                                </div>
                                <!-- End Right Sidebar Nav -->


                                <!-- Navigation Menu -->
                                <nav class="navigation-menu">
                                    <ul>
                                        <li>
                                            <a href="index.php">Home</a>
                                        </li>
                                        <?php show_category($category); ?>
                                        <li>
                                            <a href="blog.php">Blog</a>
                                        </li>
                                        </ul>
                                    </nav>
                                    <!-- End Navigation Menu -->

                                </div>
                            </div>
                            <!-- End Header Container -->
                        </header>
                        <!-- End Header -->