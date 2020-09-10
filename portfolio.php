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
                                        <span>Portfolio Page</span>
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
                                <div class="col">
                                    <h2 class="page-title">Work &amp; Portfolio</h2>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Portfolio Content -->

                                <!-- Portfolio Box 1 -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="portfolio-box">
                                        <a class="portfolio-thumb" href="portfolio-single.php">
                                            <img src="img/bg/bg_2.jpg" />
                                        </a>
                                        <div class="portfolio-content">
                                            <h6><a href="portfolio-single.php">Music Unvest Capital</a></h6>
                                            <p>Music Design</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Portfolio Box 2 -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="portfolio-box">
                                        <a class="portfolio-thumb" href="portfolio-single.php">
                                            <img src="img/bg/bg_4.jpg" />
                                        </a>
                                        <div class="portfolio-content">
                                            <h6><a href="portfolio-single.php">Music Unvest Capital</a></h6>
                                            <p>Music Design</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Portfolio Box 3 -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="portfolio-box">
                                        <a class="portfolio-thumb" href="portfolio-single.php">
                                            <img src="img/bg/bg_7.jpg" />
                                        </a>
                                        <div class="portfolio-content">
                                            <h6><a href="portfolio-single.php">Music Unvest Capital</a></h6>
                                            <p>Music Design</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Portfolio Box 4 -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="portfolio-box">
                                        <a class="portfolio-thumb" href="portfolio-single.php">
                                            <img src="img/blog/blog_01.jpg" />
                                        </a>
                                        <div class="portfolio-content">
                                            <h6><a href="portfolio-single.php">Music Unvest Capital</a></h6>
                                            <p>Music Design</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Portfolio Box 5 -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="portfolio-box">
                                        <a class="portfolio-thumb" href="portfolio-single.php">
                                            <img src="img/blog/blog_02.jpg" />
                                        </a>
                                        <div class="portfolio-content">
                                            <h6><a href="portfolio-single.php">Music Unvest Capital</a></h6>
                                            <p>Music Design</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Portfolio Box 6 -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="portfolio-box">
                                        <a class="portfolio-thumb" href="portfolio-single.php">
                                            <img src="img/blog/blog_03.jpg" />
                                        </a>
                                        <div class="portfolio-content">
                                            <h6><a href="portfolio-single.php">Music Unvest Capital</a></h6>
                                            <p>Music Design</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Portfolio Content -->
                            </div>
                        </div>
                        <div class="container mt-45">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 offset-md-3 text-center">
                                    <h2><span>Ready to start your project?</span></h2>
                                    <p class="large">You can remember what your childhood bedroom is like,you  walk across right? That is your imagination doing that.</p>
                                    <a href="#" class="btn btn-md btn-color mt-15">Start Project</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Page Content -->

                </div>
                <!-- End Page Content Wraper -->

                <!-- Footer Section -------------->
                <?php include'footer.php'; ?>