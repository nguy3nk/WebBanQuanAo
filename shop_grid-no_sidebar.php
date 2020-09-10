<?php include'header.php'; ?>
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
                                <li>
                                    <a href="login-register.php"><i class="fa fa-lock left" aria-hidden="true"></i><span class="hidden-sm-down">Login</span></a>
                                </li>
                                <li class="dropdown-nav">
                                    <a href="login-register.php"><i class="fa fa-user left" aria-hidden="true"></i><span class="hidden-sm-down">My Account</span><i class="fa fa-angle-down right" aria-hidden="true"></i></a>
                                    <!--Dropdown-->
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a href="login-register.php">My Account</a></li>
                                            <li><a href="#">Order History</a></li>
                                            <li><a href="#">Returns</a></li>
                                            <li><a href="#">My Wishlist</a></li>
                                            <li><a href="checkout.php">Checkout</a></li>
                                        </ul>
                                        <span class="divider"></span>
                                        <ul>
                                            <li><a href="login-register.php"><i class="fa fa-lock left" aria-hidden="true"></i>Login</a></li>
                                            <li><a href="login-register.php"><i class="fa fa-user left" aria-hidden="true"></i>Create an Account</a></li>
                                        </ul>
                                    </div>
                                    <!--End Dropdown-->
                                </li>
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
                                    <a href="about.php">About</a>
                                </li>
                                <li>
                                    <a href="contact.php">Contact</a>
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
                            <!-- Login-Register Link -->
                            <div class="header-btn-link hidden-lg-down"><a href="#" class="btn btn-sm btn-color">Buy Now</a></div>
                            <!-- End Login-Register Link -->

                            <!-- Sidebar Icon -->
                            <div class="sidebar-icon-nav">
                                <ul class="list-none-ib">
                                    <!-- Search-->
                                    <li><a id="search-overlay-menu-btn"><i aria-hidden="true" class="fa fa-search"></i></a></li>

                                    <!-- Whishlist-->
                                    <li><a class="js_whishlist-btn"><i aria-hidden="true" class="fa fa-heart"></i><span class="countTip">10</span></a></li>

                                    <!-- Cart-->
                                    <li><a id="sidebar_toggle_btn">
                                        <div class="cart-icon">
                                            <i aria-hidden="true" class="fa fa-shopping-bag"></i>
                                        </div>

                                        <div class="cart-title">
                                            <span class="cart-count">2</span>
                                            /
                                            <span class="cart-price strong">$698.00</span>
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
                                <li>
                                    <a href="shop_grid.php">Man</a>
                                    <!-- Drodown Menu ------->
                                    <ul class="nav-dropdown js-nav-dropdown">
                                        <li class="container">
                                            <ul class="row">
                                                <!--Grid 1-->
                                                <li class="nav-dropdown-grid">
                                                    <h6>New In</h6>
                                                    <ul>
                                                        <li><a href="#">New In Clothing</a></li>
                                                        <li><a href="#">New In Shoes<span class="new-label">New</span></a></li>
                                                        <li><a href="#">New In Bags</a></li>
                                                        <li><a href="#">New In Watches</a></li>
                                                        <li><a href="#">New In Accesories</a></li>
                                                    </ul>
                                                </li>
                                                <!--Grid 2-->
                                                <li class="nav-dropdown-grid">
                                                    <h6>Clothing</h6>
                                                    <ul>
                                                        <li><a href="#">Polos & Tees</a></li>
                                                        <li><a href="#">Casual Shirts</a></li>
                                                        <li><a href="#">Jeans</a></li>
                                                        <li><a href="#">Casual Trousers</a></li>
                                                        <li><a href="#">Formal Shirts<span class="sale-label">Sale</span></a></li>
                                                        <li><a href="#">Formal Trousers</a></li>
                                                        <li><a href="#">Suits & Blazers</a></li>
                                                        <li><a href="#">Winter Jackets</a></li>
                                                        <li><a href="#">Track wear</a></li>
                                                    </ul>
                                                </li>
                                                <!--Grid 3-->
                                                <li class="nav-dropdown-grid">
                                                    <h6>ACCESSORIES</h6>
                                                    <ul>
                                                        <li><a href="#">Mens Jewellery</a></li>
                                                        <li><a href="#">Bag</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Watches</a></li>
                                                        <li><a href="#">Hair Care</a></li>
                                                        <li><a href="#">Ties & Cufflinks</a></li>
                                                        <li><a href="#">Perfume</a></li>
                                                        <li><a href="#">Belt</a></li>
                                                    </ul>
                                                </li>
                                                <!--Grid 4-->
                                                <li class="nav-dropdown-grid">
                                                    <h6>Brand</h6>
                                                    <ul>
                                                        <li><a href="#">Analog</a></li>
                                                        <li><a href="#">Chronograph</a></li>
                                                        <li><a href="#">Digital</a></li>
                                                        <li><a href="#">Watch Cases</a></li>
                                                        <li><a href="#">Samsung</a></li>
                                                        <li><a href="#">Apple</a></li>
                                                        <li><a href="#">Hitachi</a></li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- End Drodown Menu -->
                                </li>
                                <li>
                                    <a href="shop_grid.php">Women</a>
                                    <!-- Drodown Menu ------->
                                    <ul class="nav-dropdown js-nav-dropdown">
                                        <li class="container">
                                            <ul class="row">
                                                <!--Grid 1-->
                                                <li class="nav-dropdown-grid">
                                                    <h6>New In</h6>
                                                    <ul>
                                                        <li><a href="#">New In Clothing</a></li>
                                                        <li><a href="#">New In Shoes</a></li>
                                                        <li><a href="#">New In Bags</a></li>
                                                        <li><a href="#">New In Watches</a></li>
                                                        <li><a href="#">Sweaters</a></li>
                                                        <li><a href="#">Winter Shrugs</a></li>
                                                    </ul>
                                                </li>
                                                <!--Grid 2-->
                                                <li class="nav-dropdown-grid">
                                                    <h6>Clothing</h6>
                                                    <ul>
                                                        <li><a href="#">Tops , tees & shirts</a></li>
                                                        <li><a href="#">Dresses & Jumpsuits</a></li>
                                                        <li><a href="#">Trousers & Jeans</a></li>
                                                        <li><a href="#">Leggings & Jeggings</a></li>
                                                        <li><a href="#">Capris,Shorts & Skirts</a></li>
                                                        <li><a href="#">Winter Jackets</a></li>
                                                        <li><a href="#">Clothing Accessories</a></li>
                                                        <li><a href="#">Sweaters</a></li>
                                                        <li><a href="#">Winter Shrugs</a></li>
                                                    </ul>
                                                </li>
                                                <!--Grid 3-->
                                                <li class="nav-dropdown-grid">
                                                    <h6>Brand</h6>
                                                    <ul>
                                                        <li><a href="#">A&C Signature</a></li>
                                                        <li><a href="#">Angry Birds</a></li>
                                                        <li><a href="#">Macadamia</a></li>
                                                        <li><a href="#">Miller & Schweizer</a></li>
                                                        <li><a href="#">Stylet</a></li>
                                                        <li><a href="#">Van Heusen</a></li>
                                                        <li><a href="#">Wrangler</a></li>
                                                        <li><a href="#">Wills Lifestyle</a></li>
                                                        <li><a href="#">X'Pose</a></li>
                                                    </ul>
                                                </li>
                                                <li class="nav-dropdown-grid">
                                                    <a href="#" class="sub-banner">
                                                        <img src="img/banner/banner_115145.jpg" alt="" /></a>
                                                    </li>

                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- End Drodown Menu -->
                                    </li>
                                    <li>
                                        <a href="shop_grid.php">Kids</a>
                                        <!-- Drodown Menu ------->
                                        <ul class="nav-dropdown js-nav-dropdown">
                                            <li class="container">
                                                <ul class="row">
                                                    <!--Grid 1-->
                                                    <li class="nav-dropdown-grid">
                                                        <h6>Kid's</h6>
                                                        <ul>
                                                            <li><a href="#">Tops & Tunics</a></li>
                                                            <li><a href="#">Shorts & Capris</a></li>
                                                            <li><a href="#">Twin Sets</a></li>
                                                            <li><a href="#">Jeans & Trousers</a></li>
                                                            <li><a href="#">Leggings & Jeggings</a></li>
                                                            <li><a href="#">Skirts</a></li>
                                                            <li><a href="#">Jumpsuits</a></li>
                                                            <li><a href="#">Casual Dresses</a></li>
                                                            <li><a href="#">Ethnic Wear</a></li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- End Drodown Menu -->
                                    </li>
                                    <li>
                                        <a href="shop_grid.php">Brand</a>
                                        <!-- Drodown Menu ------->
                                        <ul class="nav-dropdown js-nav-dropdown">
                                            <li class="container">
                                                <ul class="row">
                                                    <!--Grid 1-->
                                                    <li class="nav-dropdown-grid">
                                                        <ul>
                                                            <li><a href="#">A&C Signature</a></li>
                                                            <li><a href="#">Angry Birds</a></li>
                                                            <li><a href="#">Macadamia</a></li>
                                                            <li><a href="#">Miller & Schweizer</a></li>
                                                            <li><a href="#">Stylet</a></li>
                                                            <li><a href="#">Van Heusen</a></li>
                                                            <li><a href="#">Wrangler</a></li>
                                                            <li><a href="#">Wills Lifestyle</a></li>
                                                            <li><a href="#">X'Pose</a></li>
                                                        </ul>
                                                    </li>
                                                    <!--Grid 2-->
                                                    <li class="nav-dropdown-grid">
                                                        <ul>
                                                            <li><a href="#">Apple</a></li>
                                                            <li><a href="#">United State</a></li>
                                                            <li><a href="#">Google</a></li>
                                                            <li><a href="#">Coca-Cola</a></li>
                                                            <li><a href="#">Microsoft</a></li>
                                                            <li><a href="#">Samsung</a></li>
                                                            <li><a href="#">Apple</a></li>
                                                            <li><a href="#">Facebook</a></li>
                                                            <li><a href="#">Twitter</a></li>
                                                            <li><a href="#">Instagram</a></li>

                                                        </ul>
                                                    </li>

                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- End Drodown Menu -->
                                    </li>
                                    <li>
                                        <a href="shop_grid.php">Accessories<span class="nav-label-sale"></span></a>
                                    </li>
                                    <li>
                                        <a href="#">Pages</a>
                                        <!-- Drodown Menu ------->
                                        <ul class="nav-dropdown js-nav-dropdown">
                                            <li class="container">
                                                <ul class="row">

                                                    <!--Grid 1-->
                                                    <li class="nav-dropdown-grid">
                                                        <h6>Shop Page</h6>
                                                        <ul>
                                                            <li><a href="shop_grid.php">Shop Grid - Sidebar Left</a></li>
                                                            <li><a href="shop_grid-sidebar_right.php">Shop Grid - Sidebar Right</a></li>
                                                            <li><a href="shop_grid-no_sidebar.php">Shop Grid - No Sidebar</a></li>
                                                            <li><a href="shop_list.php">Shop List - Sidebar Left</a></li>
                                                            <li><a href="shop_list-sidebar_right.php">Shop List - Sidebar Right</a></li>
                                                        </ul>
                                                    </li>
                                                    <!--Grid 2-->
                                                    <li class="nav-dropdown-grid">
                                                        <h6>Product Page</h6>
                                                        <ul>
                                                            <li><a href="product_detail.php">Product Page - Default</a></li>
                                                            <li><a href="product_detail-with_sidebar.php">Product Page - With Sidebar</a></li>
                                                            <li><a href="cart.php">Cart Page</a></li>
                                                            <li><a href="checkout.php">Checkout Page</a></li>
                                                        </ul>
                                                    </li>
                                                    <!--Grid 3-->
                                                    <li class="nav-dropdown-grid">
                                                        <h6>Extra Page</h6>
                                                        <ul>
                                                            <li><a href="index.php">Home</a></li>
                                                            <li><a href="about.php">About Us</a></li>
                                                            <li><a href="contact.php">Contact Us</a></li>
                                                            <li><a href="portfolio.php">Portfolio</a></li>
                                                            <li><a href="portfolio-single.php">Portfolio Detail</a></li>

                                                        </ul>
                                                    </li>

                                                    <!--Grid 1-->
                                                    <li class="nav-dropdown-grid">
                                                        <h6 class="white">Extra Page</h6>
                                                        <ul>
                                                            <li><a href="blog.php">Blog</a></li>
                                                            <li><a href="blog-with_sidebar.php">Blog - With sidebar</a></li>
                                                            <li><a href="blog-single.php">Blog Detail</a></li>
                                                            <li><a href="login-register.php">Login & Register</a></li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- End Drodown Menu -->
                                    </li>
                                </ul>
                            </nav>
                            <!-- End Navigation Menu -->

                        </div>
                    </div>
                    <!-- End Header Container -->
                </header>
                <!-- End Header -->

                <!-- Page Content Wraper -->
                <div class="page-content-wraper">
                    <!-- Bread Crumb -->
                    <section class="breadcrumb">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <nav class="breadcrumb-link">
                                        <a href="#">Home</a>
                                        <a href="#">Categories</a>
                                        <span>Men Polos & Tees</span>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Bread Crumb -->

                    <!-- Page Content -->
                    <section class="content-page">
                        <div class="container">
                            <div class="row">

                                <!-- Product Content -->
                                <div class="col-12">
                                    <!-- Title -->
                                    <div class="list-page-title">
                                        <h2 class="">Men Polos & Tees <small>120 Products</small></h2>
                                    </div>
                                    <!-- End Title -->

                                    <!-- Product Filter -->
                                    <div class="product-filter-content">
                                        <div class="product-filter-content-inner">

                                            <!--Product Filter Button-->
                                            <div class="product-filter-dropdown-btn "><a href="javascript:void(0)" data-toggle-target="filter-slide-toggle" class="btn btn-sm btn-gray slide-toggle-btn"><i class="fa fa-bars left" aria-hidden="true"></i>Filter</a></div>

                                            <!--Product Sort By-->
                                            <form class="product-sort-by">
                                                <label for="short-by">Short By</label>
                                                <select name="short-by" id="short-by" class="nice-select-box">
                                                    <option value="default_sorting" selected="selected">Default sorting</option>
                                                    <option value="sort_by_popularity">Popularity</option>
                                                    <option value="sort_by_average_rating">Average rating</option>
                                                    <option value="sort_by_newness">New product</option>
                                                    <option value="price_low_to_high">Price: low to high</option>
                                                    <option value="price_high_to_low">Price: high to low</option>
                                                </select>
                                            </form>
                                            <script>
                                                
                                            </script>
                                            <!--Product Show-->
                                            <form class="product-show">
                                                <label for="product-show">Show</label>
                                                <select name="product-show" id="product-show" class="nice-select-box">
                                                    <option value="15" selected="selected">15</option>
                                                    <option value="18">18</option>
                                                    <option value="21">21</option>
                                                    <option value="24">24</option>
                                                    <option value="all">Show All</option>
                                                </select>
                                            </form>



                                            <!--Product List/Grid Icon-->
                                            <div class="product-view-switcher">
                                                <label>View</label>
                                                <div class="product-view-icon product-grid-switcher product-view-icon-active">
                                                    <a class="" href="#"><i class="fa fa-th" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="product-view-icon product-list-switcher">
                                                    <a class="" href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Filter -->

                                    <!-- Product filters Toggle-->
                                    <div class="container product-filter-dropdown toggle-content" id="filter-slide-toggle">
                                        <div class="row col mlr-0">
                                            <!-- Shop Categories -->
                                            <div class="widget-sidebar col-sm-6 col-md-6 col-lg-3">
                                                <h6 class="widget-title">Categories</h6>
                                                <ul class="widget-content widget-product-categories jq-accordian">
                                                    <li>
                                                        <a href="#">Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a class="javascript:void(0)">Clothings<span class="jq-accordionIcon"></span></a>
                                                        <ul class="children" style="display: none;">
                                                            <li><a href="#">All</a></li>
                                                            <li><a href="#">Coats &amp; Jackets</a></li>
                                                            <li><a href="#">Shirts</a></li>
                                                            <li><a href="#">Sportswear</a></li>
                                                            <li><a href="#">Swimwear</a></li>
                                                            <li><a href="#">Trousers</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">Man<span class="jq-accordionIcon"></span></a>
                                                        <ul style="display: none;">
                                                            <li><a href="#">All</a></li>
                                                            <li><a href="#">Coats &amp; Jackets</a></li>
                                                            <li><a href="#">Shirts</a></li>
                                                            <li><a href="#">Sportswear</a></li>
                                                            <li><a href="#">Swimwear</a></li>
                                                            <li><a href="#">Trousers</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Jacket</a></li>
                                                    <li><a href="#">New arrivals</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="sdsd">Socks</a></li>
                                                </ul>
                                            </div>
                                            <!-- End Shop Categories -->

                                            <!-- Filter Price -->
                                            <div class="widget-sidebar widget-filter-price col-sm-6 col-md-6 col-lg-3">
                                                <h6 class="widget-title">Select Price</h6>
                                                <ul class="widget-content">
                                                    <li>
                                                        <a href="#">All</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="amount"><span class="currencySymbol">$</span>0.00</span>
                                                            -
                                                            <span class="amount"><span class="currencySymbol">$</span>500.00</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="amount"><span class="currencySymbol">$</span>500.00</span>
                                                            -
                                                            <span class="amount"><span class="currencySymbol">$</span>1100.00</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="amount"><span class="currencySymbol">$</span>1100.00</span>
                                                            -
                                                            <span class="amount"><span class="currencySymbol">$</span>1600.00</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="amount"><span class="currencySymbol">$</span>1600.00</span>
                                                            -
                                                            <span class="amount"><span class="currencySymbol">$</span>2100.00</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="amount"><span class="currencySymbol">$</span>2100.00</span>
                                                            -
                                                            <span class="amount"><span class="currencySymbol">$</span>2600.00</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="amount"><span class="currencySymbol">$</span>2600.00</span>
                                                            +
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- End Filter Price -->

                                            <!-- Filter Color -->
                                            <div class="widget-sidebar widget-filter-color col-sm-6 col-md-6 col-lg-3">
                                                <h6 class="widget-title">Select Color</h6>
                                                <ul class="widget-content">
                                                    <li>
                                                        <a href="#">
                                                            <div class="filter-color-switcher"><span style="background-color: #ff4040"></span></div>
                                                        Red</a>
                                                        <span class="color-count">(9)</span>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="filter-color-switcher"><span style="background-color: #000"></span></div>
                                                        Black</a>
                                                        <span class="color-count">(112)</span>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="filter-color-switcher"><span style="background-color: #ff9000"></span></div>
                                                        Orange</a>
                                                        <span class="color-count">(56)</span>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="filter-color-switcher"><span style="background-color: #ffcf3d"></span></div>
                                                        Yellow</a>
                                                        <span class="color-count">(24)</span>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="filter-color-switcher"><span style="background-color: #55b0da"></span></div>
                                                        Blue</a>
                                                        <span class="color-count">(18)</span>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="filter-color-switcher"><span style="background-color: #9ada55"></span></div>
                                                        Green</a>
                                                        <span class="color-count">(72)</span>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="filter-color-switcher"><span style="background-color: #7a463b"></span></div>
                                                        Brown</a>
                                                        <span class="color-count">(5)</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- End Filter Color -->

                                            <!-- Filter Size -->
                                            <div class="widget-sidebar widget-filter-size col-sm-6 col-md-6 col-lg-3">
                                                <h6 class="widget-title">Select Size</h6>
                                                <ul class="widget-content ">
                                                    <li>
                                                        <a href="#">L</a>
                                                        <span>(24)</span>
                                                    </li>
                                                    <li>
                                                        <a href="#">M</a>
                                                        <span>(34)</span>
                                                    </li>
                                                    <li>
                                                        <a href="#">S</a>
                                                        <span>(45)</span>
                                                    </li>
                                                    <li>
                                                        <a href="#">X</a>
                                                        <span>(102)</span>
                                                    </li>
                                                    <li>
                                                        <a href="#">XL</a>
                                                        <span>(60)</span>
                                                    </li>
                                                    <li>
                                                        <a href="#">XS</a>
                                                        <span>(78)</span>
                                                    </li>
                                                    <li>
                                                        <a href="#">XXL</a>
                                                        <span>(35)</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- End Filter Size -->
                                        </div>
                                    </div>
                                    <!-- End Product filters Toggle-->

                                    <!-- Product Grid -->
                                    <div class="row product-list-item">
                                        <!-- item.1 -->
                                        <div class="product-item-element col-sm-6 col-md-4 col-lg-3">
                                            <!--Product Item-->
                                            <div class="product-item">
                                                <div class="product-item-inner">
                                                    <div class="product-img-wrap">
                                                        <img src="img/product-img/big/product_125470001.jpg" alt="">
                                                    </div>
                                                    <div class="product-button">
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <a class="tag" href="#">Men Fashion</a>
                                                    <p class="product-title"><a href="product_detail.php">United Colors of Benetton</a></p>
                                                    <div class="product-rating">
                                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                            <span style="width: 60%"></span>
                                                        </div>
                                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                                    </div>
                                                    <p class="product-description">
                                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                                    </p>
                                                    <h5 class="item-price">$39.00</h5>
                                                </div>
                                            </div>
                                            <!-- End Product Item-->
                                        </div>

                                        <!-- item.2 -->
                                        <div class="product-item-element col-sm-6 col-md-4 col-lg-3">
                                            <!--Product Item-->
                                            <div class="product-item">
                                                <div class="product-item-inner">
                                                    <div class="product-img-wrap">
                                                        <img src="img/product-img/big/product_125470002.jpg" alt="">
                                                    </div>
                                                    <div class="product-button">
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <a class="tag" href="#">Men Fashion</a>
                                                    <p class="product-title"><a href="product_detail.php">United Colors of Benetton</a></p>
                                                    <div class="product-rating">
                                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                            <span style="width: 60%"></span>
                                                        </div>
                                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                                    </div>
                                                    <p class="product-description">
                                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                                    </p>
                                                    <h5 class="item-price"><del>$79.00</del>$39.00</h5>
                                                </div>
                                            </div>
                                            <!-- End Product Item-->
                                        </div>

                                        <!-- item.3 -->
                                        <div class="product-item-element col-sm-6 col-md-4 col-lg-3">
                                            <!--Product Item-->
                                            <div class="product-item">
                                                <div class="product-item-inner">
                                                    <div class="product-img-wrap">
                                                        <img src="img/product-img/big/product_125470003.jpg" alt="">
                                                    </div>
                                                    <div class="product-button">
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <a class="tag" href="#">Men Fashion</a>
                                                    <p class="product-title"><a href="product_detail.php">United Colors of Benetton</a></p>
                                                    <div class="product-rating">
                                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                            <span style="width: 60%"></span>
                                                        </div>
                                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                                    </div>
                                                    <p class="product-description">
                                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                                    </p>
                                                    <h5 class="item-price">$39.00</h5>
                                                </div>
                                            </div>
                                            <!-- End Product Item-->
                                        </div>

                                        <!-- item.4 -->
                                        <div class="product-item-element col-sm-6 col-md-4 col-lg-3">
                                            <!--Product Item-->
                                            <div class="product-item">
                                                <div class="product-item-inner">
                                                    <div class="product-img-wrap">
                                                        <img src="img/product-img/big/product_125470004.jpg" alt="">
                                                    </div>
                                                    <div class="product-button">
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <a class="tag" href="#">Men Fashion</a>
                                                    <p class="product-title"><a href="product_detail.php">United Colors of Benetton</a></p>
                                                    <div class="product-rating">
                                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                            <span style="width: 60%"></span>
                                                        </div>
                                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                                    </div>
                                                    <p class="product-description">
                                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                                    </p>
                                                    <h5 class="item-price"><del>$79.00</del>$39.00</h5>
                                                </div>
                                            </div>
                                            <!-- End Product Item-->
                                        </div>

                                        <!-- item.5 -->
                                        <div class="product-item-element col-sm-6 col-md-4 col-lg-3">
                                            <!--Product Item-->
                                            <div class="product-item">
                                                <div class="product-item-inner">
                                                    <div class="product-img-wrap">
                                                        <img src="img/product-img/big/product_125470005.jpg" alt="">
                                                    </div>
                                                    <div class="product-button">
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <a class="tag" href="#">Men Fashion</a>
                                                    <p class="product-title"><a href="product_detail.php">United Colors of Benetton</a></p>
                                                    <div class="product-rating">
                                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                            <span style="width: 60%"></span>
                                                        </div>
                                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                                    </div>
                                                    <p class="product-description">
                                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                                    </p>
                                                    <h5 class="item-price"><del>$79.00</del>$39.00</h5>
                                                </div>
                                            </div>
                                            <!-- End Product Item-->
                                        </div>

                                        <!-- item.6 -->
                                        <div class="product-item-element col-sm-6 col-md-4 col-lg-3">
                                            <!--Product Item-->
                                            <div class="product-item">
                                                <div class="product-item-inner">
                                                    <div class="product-img-wrap">
                                                        <img src="img/product-img/big/product_125470006.jpg" alt="">
                                                    </div>
                                                    <div class="product-button">
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <a class="tag" href="#">Men Fashion</a>
                                                    <p class="product-title"><a href="product_detail.php">United Colors of Benetton</a></p>
                                                    <div class="product-rating">
                                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                            <span style="width: 60%"></span>
                                                        </div>
                                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                                    </div>
                                                    <p class="product-description">
                                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                                    </p>
                                                    <h5 class="item-price"><del>$79.00</del>$39.00</h5>
                                                </div>
                                            </div>
                                            <!-- End Product Item-->
                                        </div>

                                        <!-- item.7 -->
                                        <div class="product-item-element col-sm-6 col-md-4 col-lg-3">
                                            <!--Product Item-->
                                            <div class="product-item">
                                                <div class="product-item-inner">
                                                    <div class="product-img-wrap">
                                                        <img src="img/product-img/big/product_125470007.jpg" alt="">
                                                    </div>
                                                    <div class="product-button">
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <a class="tag" href="#">Men Fashion</a>
                                                    <p class="product-title"><a href="product_detail.php">United Colors of Benetton</a></p>
                                                    <div class="product-rating">
                                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                            <span style="width: 60%"></span>
                                                        </div>
                                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                                    </div>
                                                    <p class="product-description">
                                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                                    </p>
                                                    <h5 class="item-price">$39.00</h5>
                                                </div>
                                            </div>
                                            <!-- End Product Item-->
                                        </div>

                                        <!-- item.8 -->
                                        <div class="product-item-element col-sm-6 col-md-4 col-lg-3">
                                            <!--Product Item-->
                                            <div class="product-item">
                                                <div class="product-item-inner">
                                                    <div class="product-img-wrap">
                                                        <img src="img/product-img/big/product_125470001.jpg" alt="">
                                                    </div>
                                                    <div class="product-button">
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <a class="tag" href="#">Men Fashion</a>
                                                    <p class="product-title"><a href="product_detail.php">United Colors of Benetton</a></p>
                                                    <div class="product-rating">
                                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                            <span style="width: 60%"></span>
                                                        </div>
                                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                                    </div>
                                                    <p class="product-description">
                                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                                    </p>
                                                    <h5 class="item-price">$39.00</h5>
                                                </div>
                                            </div>
                                            <!-- End Product Item-->
                                        </div>

                                        <!-- item.9 -->
                                        <div class="product-item-element col-sm-6 col-md-4 col-lg-3">
                                            <!--Product Item-->
                                            <div class="product-item">
                                                <div class="product-item-inner">
                                                    <div class="product-img-wrap">
                                                        <img src="img/product-img/big/product_125470002.jpg" alt="">
                                                    </div>
                                                    <div class="product-button">
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <a class="tag" href="#">Men Fashion</a>
                                                    <p class="product-title"><a href="product_detail.php">United Colors of Benetton</a></p>
                                                    <div class="product-rating">
                                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                            <span style="width: 60%"></span>
                                                        </div>
                                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                                    </div>
                                                    <p class="product-description">
                                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                                    </p>
                                                    <h5 class="item-price">$39.00</h5>
                                                </div>
                                            </div>
                                            <!-- End Product Item-->
                                        </div>

                                        <!-- item.10 -->
                                        <div class="product-item-element col-sm-6 col-md-4 col-lg-3">
                                            <!--Product Item-->
                                            <div class="product-item">
                                                <div class="product-item-inner">
                                                    <div class="product-img-wrap">
                                                        <img src="img/product-img/big/product_125470003.jpg" alt="">
                                                    </div>
                                                    <div class="product-button">
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <a class="tag" href="#">Men Fashion</a>
                                                    <p class="product-title"><a href="product_detail.php">United Colors of Benetton</a></p>
                                                    <div class="product-rating">
                                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                            <span style="width: 60%"></span>
                                                        </div>
                                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                                    </div>
                                                    <p class="product-description">
                                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                                    </p>
                                                    <h5 class="item-price"><del>$79.00</del>$39.00</h5>
                                                </div>
                                            </div>
                                            <!-- End Product Item-->
                                        </div>

                                        <!-- item.11 -->
                                        <div class="product-item-element col-sm-6 col-md-4 col-lg-3">
                                            <!--Product Item-->
                                            <div class="product-item">
                                                <div class="product-item-inner">
                                                    <div class="product-img-wrap">
                                                        <img src="img/product-img/big/product_125470004.jpg" alt="">
                                                    </div>
                                                    <div class="product-button">
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <a class="tag" href="#">Men Fashion</a>
                                                    <p class="product-title"><a href="product_detail.php">United Colors of Benetton</a></p>
                                                    <div class="product-rating">
                                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                            <span style="width: 60%"></span>
                                                        </div>
                                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                                    </div>
                                                    <p class="product-description">
                                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                                    </p>
                                                    <h5 class="item-price">$39.00</h5>
                                                </div>
                                            </div>
                                            <!-- End Product Item-->
                                        </div>

                                        <!-- item.12 -->
                                        <div class="product-item-element col-sm-6 col-md-4 col-lg-3">
                                            <!--Product Item-->
                                            <div class="product-item">
                                                <div class="product-item-inner">
                                                    <div class="product-img-wrap">
                                                        <img src="img/product-img/big/product_125470005.jpg" alt="">
                                                    </div>
                                                    <div class="product-button">
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <a class="tag" href="#">Men Fashion</a>
                                                    <p class="product-title"><a href="product_detail.php">United Colors of Benetton</a></p>
                                                    <div class="product-rating">
                                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                            <span style="width: 60%"></span>
                                                        </div>
                                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                                    </div>
                                                    <p class="product-description">
                                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                                    </p>
                                                    <h5 class="item-price"><del>$79.00</del>$39.00</h5>
                                                </div>
                                            </div>
                                            <!-- End Product Item-->
                                        </div>

                                        <!-- item.13 -->
                                        <div class="product-item-element col-sm-6 col-md-4 col-lg-3">
                                            <!--Product Item-->
                                            <div class="product-item">
                                                <div class="product-item-inner">
                                                    <div class="product-img-wrap">
                                                        <img src="img/product-img/big/product_125470006.jpg" alt="">
                                                    </div>
                                                    <div class="product-button">
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <a class="tag" href="#">Men Fashion</a>
                                                    <p class="product-title"><a href="product_detail.php">United Colors of Benetton</a></p>
                                                    <div class="product-rating">
                                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                            <span style="width: 60%"></span>
                                                        </div>
                                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                                    </div>
                                                    <p class="product-description">
                                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                                    </p>
                                                    <h5 class="item-price"><del>$79.00</del>$39.00</h5>
                                                </div>
                                            </div>
                                            <!-- End Product Item-->
                                        </div>

                                        <!-- item.14 -->
                                        <div class="product-item-element col-sm-6 col-md-4 col-lg-3">
                                            <!--Product Item-->
                                            <div class="product-item">
                                                <div class="product-item-inner">
                                                    <div class="product-img-wrap">
                                                        <img src="img/product-img/big/product_125470007.jpg" alt="">
                                                    </div>
                                                    <div class="product-button">
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <a class="tag" href="#">Men Fashion</a>
                                                    <p class="product-title"><a href="product_detail.php">United Colors of Benetton</a></p>
                                                    <div class="product-rating">
                                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                            <span style="width: 60%"></span>
                                                        </div>
                                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                                    </div>
                                                    <p class="product-description">
                                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                                    </p>
                                                    <h5 class="item-price"><del>$79.00</del>$39.00</h5>
                                                </div>
                                            </div>
                                            <!-- End Product Item-->
                                        </div>

                                        <!-- item.15 -->
                                        <div class="product-item-element col-sm-6 col-md-4 col-lg-3">
                                            <!--Product Item-->
                                            <div class="product-item">
                                                <div class="product-item-inner">
                                                    <div class="product-img-wrap">
                                                        <img src="img/product-img/big/product_125470001.jpg" alt="">
                                                    </div>
                                                    <div class="product-button">
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <a class="tag" href="#">Men Fashion</a>
                                                    <p class="product-title"><a href="product_detail.php">United Colors of Benetton</a></p>
                                                    <div class="product-rating">
                                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                            <span style="width: 60%"></span>
                                                        </div>
                                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                                    </div>
                                                    <p class="product-description">
                                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                                    </p>
                                                    <h5 class="item-price"><del>$79.00</del>$39.00</h5>
                                                </div>
                                            </div>
                                            <!-- End Product Item-->
                                        </div>

                                    </div>
                                    <!-- End Product Grid -->

                                    <div class="pagination-wraper">
                                        <p>Showing 1 - 15 of 120 results</p>
                                        <div class="pagination">
                                            <ul class="pagination-numbers">
                                        <!--<li>
                                            <a href="#" class="prev page-number"><i class="fa fa-angle-double-left"></i></a>
                                        </li>-->
                                        <li>
                                            <a href="#" class="page-number current">1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="page-number">2</a>
                                        </li>
                                        <li>
                                            <a href="#" class="page-number">3</a>
                                        </li>
                                        <li>
                                            <span class="page-number dots">...</span>
                                        </li>
                                        <li>
                                            <a href="#" class="page-number">29</a>
                                        </li>
                                        <li>
                                            <a href="#" class="next page-number"><i class="fa fa-angle-double-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!-- End Product Content -->

                    </div>
                </div>
            </section>
            <!-- End Page Content -->

        </div>
        <!-- End Page Content Wraper -->

        <!-- Footer Section -------------->
        <?php include'footer.php'; ?>