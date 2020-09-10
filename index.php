<?php include'header.php'; ?>
<?php $banner_top = $conn->query("SELECT * FROM banner WHERE locate = 'top' AND Status = 'Hiện'");?>
<?php 
    $banner_bot1 = $conn->query("SELECT * FROM banner WHERE locate = 'bot' AND Status = 'Hiện' LIMIT 4");
    $banner_bot2 = $conn->query("SELECT * FROM banner WHERE locate = 'bot_2' AND Status = 'Hiện' LIMIT 3");
    $top_buy = $conn->query("SELECT p.id,p.name,p.img,p.price,p.sale_price,count(b.pro_id) FROM product as p JOIN order_detail as b ON p.id = b.pro_id GROUP BY p.id,p.name,p.img,p.price,p.sale_price ORDER BY count(b.pro_id) DESC LIMIT 7");
    $top_rate = $conn->query("SELECT p.id,p.name,p.img,p.price,p.sale_price,r.rate FROM product p LEFT JOIN(SELECT avg(rate) as 'rate',pro_id FROM review_pro GROUP BY pro_id) AS r ON p.id=r.pro_id ORDER BY r.rate DESC LIMIT 7");  
    $top_new = $conn->query("SELECT id,name,img,price,sale_price FROM product ORDER BY updated DESC LIMIT 7");

?>
        <!-- Page Content Wraper -->
        <div class="page-content-wraper">
            <!-- Intro -->
            <section id="intro" class="intro">
                <!-- Revolution Slider -->
                <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="background-color: transparent; padding: 0px;">
                    <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
                    <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display: none;" data-version="5.3.0.2">
                        <ul>
                            <?php foreach ($banner_top as $bn) : ?>
                                <li  class="dark-bg" data-index="rs-<?php echo $bn->id; ?>" data-transition="random" data-slotamount="7" data-masterspeed="500" data-thumb="" data-saveperformance="off" data-title="<?php echo '0'.$bn->id; ?>">
                                   <img src="<?php echo 'uploads/banner/'.$bn->image; ?>" alt="h" title="<?php echo $bn->name; ?>" width="1920" height="1100" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina />
                                    <?php echo $bn->effect; ?>
                                </li>                         
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <!-- End Revolution Slider -->
            </section>
            <!-- End Intro -->

            <!-- Promo Box -->
            <section id="promo" class="section-padding-sm promo ">
                <div class="container">
                    <div class="promo-box row">
                        <div class="col-md-4 mtb-sm-30 promo-item">
                            <div class="icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                            <div class="info">
                                <a href="#">
                                    <h6 class="normal">Delivery Free</h6>
                                </a>
                                <p>On Order Over $150</p>
                            </div>
                        </div>
                        <div class="col-md-4 mtb-sm-30 promo-item">
                            <div class="icon"><i class="fa fa-repeat" aria-hidden="true"></i></div>
                            <div class="info">
                                <a href="#">
                                    <h6 class="normal">Exchange or Return</h6>
                                </a>
                                <p>30 Day Money Back Guarantee</p>
                            </div>
                        </div>
                        <div class="col-md-4 mtb-sm-30 promo-item">
                            <div class="icon"><i class="fa fa-headphones" aria-hidden="true"></i></div>
                            <div class="info">
                                <a href="#">
                                    <h6 class="normal">Support</h6>
                                </a>
                                <p>24/7 Online Support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Promo Box -->

            <!-- Promo Banner -->
            <section id="promo-banner" class="section-padding-b">
                <div class="container">
                    <div class="row">
                        <!--Left Side-->
                        <?php for ($i=0; $i <2 ; $i++) : ?>
                           <div class="col-md-6">
                            <div class="row">
                                <?php for ($i=0; $i <2 ; $i++) : 
                                    $banner_bot = $banner_bot1->fetch();?>
                                <div class="col-12 mb-30">
                                    <!-- banner No.1 -->
                                    <div class="">
                                        <a href="shop_grid.php?id=<?php echo $banner_bot->cat_id; ?>" class="promo-image-wrap">
                                            <img src="<?php echo 'uploads/banner/'.$banner_bot->image; ?>" alt="Accesories" />
                                        </a>
                                    </div>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                        <?php endfor; ?>
                        
                        <!--Right Side-->
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-12 mb-30">
                                    <!-- banner No.3 -->
                                    <div class="promo-banner-wrap">
                                        <a href="#" class="promo-image-wrap">
                                            <img src="img/banner/promo-banner2.jpg" alt="Accesories" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 mb-sm-30">
                                    <!-- banner No.4 -->
                                    <div class="promo-banner-wrap">
                                        <a href="#" class="promo-image-wrap">
                                            <img src="img/banner/promo-banner5.jpg" alt="Accesories" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Promo Banner -->

            <!-- Product (Tab with Slider) -->
            <section class="section-padding-b">
                <div class="container">
                    <h2 class="page-title">Gợi ý sản phẩm</h2>
                </div>  
                <div class="container">
                    <ul class="product-filter nav" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#latest" role="tab" data-toggle="tab">Sản phẩm mới</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#best-sellar" role="tab" data-toggle="tab">Nhiều người mua</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features" role="tab" data-toggle="tab">Đánh giá cao</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- Tab1 - Latest Product -->
                        <div id="latest" role="tabpanel" class="tab-pane fade in active">
                            <div id="new-product" class="product-item-4 owl-carousel owl-theme nf-carousel-theme1">
                                <!-- item.1 -->
                                <?php foreach ($top_new as $proo) : ?>
                                <div class="product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <img src="uploads/product/<?php echo $proo->img; ?>" alt="">
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="product_detail.php"><?php echo $proo->name; ?></a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                        </p>
                                        <h5 class="item-price"><?php if ($proo->sale_price) {
                                                        echo '<del>$'.$proo->sale_price.'</del>';
                                                    } echo '$'.$proo->price; ?></h5>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                                <!-- item.2 -->
                                
                                <!-- item.7 -->
                       
                            </div>
                        </div>

                        <!-- Tab2 - Best Sellar -->
                        <div id="best-sellar" role="tabpanel" class="tab-pane fade">
                            <div id="popular-product" class="product-item-4 owl-carousel owl-theme nf-carousel-theme1">
                                <!-- item.1 -->
                              <?php foreach ($top_buy as $proo) : ?>
                                <div class="product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <img src="uploads/product/<?php echo $proo->img; ?>" alt="">
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="product_detail.php"><?php echo $proo->name; ?></a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                        </p>
                                        <h5 class="item-price"><?php if ($proo->sale_price) {
                                                        echo '<del>$'.$proo->sale_price.'</del>';
                                                    } echo '$'.$proo->price; ?></h5>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Tab3 - Features -->
                        <div id="features" role="tabpanel" class="tab-pane fade">
                            <div id="features-product" class="product-item-4 owl-carousel owl-theme nf-carousel-theme1">
                                <!-- item.1 -->
                                <?php foreach ($top_rate as $proo) : ?>
                                <div class="product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <img src="uploads/product/<?php echo $proo->img; ?>" alt="">
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="product_detail.php"><?php echo $proo->name; ?></a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                        </p>
                                        <h5 class="item-price"><?php if ($proo->sale_price) {
                                                        echo '<del>$'.$proo->sale_price.'</del>';
                                                    } echo '$'.$proo->price; ?></h5>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Product (Tab with Slider) -->

            <!-- Categories -->
            <section class="">
                <div class="section-padding container-fluid bg-image text-center overlay-light90" data-background-img="img/bg/bg_5.jpg" data-bg-position-x="center center">
                    <div class="container">
                        <h2 class="page-title">Mua theo danh mục</h2>
                    </div>
                </div>
                <div class="container container-margin-minus-t">
                    <div class="row">
                        <?php foreach ($banner_bot2 as $bn2) :?>
                        <div class="col-md-4">
                            <div class="categories-box">
                                <div class="categories-image-wrap">
                                    <img src="uploads/banner/<?php echo $bn2->image; ?>" alt="" />
                                </div>
                                <div class="categories-content">
                                    <a href="shop_grid.php?id=<?php $bn2->cat_id; ?>">
                                        <div class="categories-caption">
                                            <h6 class="normal"><?php echo $bn2->name; ?></h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                   <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!-- End Categories -->

            <!-- New Product -->
   
            <!-- End New Product -->

            <!-- Like & Share Banner -->
            <section id="like-share" class="like-share">
                <div class="container">
                    <div class="like-share-inner overlay-black40">
                        <h3>Like And Share Our Page for one time <span class="color">10%</span> Off</h3>
                        <ul class="social-icon">
                            <li><a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://pinterest.com/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- End Like & Share Banner -->

            <!-- Blog & News -->
            <section class="section-padding">
                <div class="container">
                    <h2 class="page-title">Blog & News</h2>
                </div>
                <div class="container">
                    <div id="blog-carousel" class="blog-carousel owl-carousel owl-theme nf-carousel-theme1">
                        <!-- item.1 -->
                        <div class="product-item">
                            <div class="blog-box">
                                <div class="blog-img-wrap">
                                    <img src="img/blog/blog_01.jpg" alt="philos" />
                                </div>
                                <div class="blog-box-content">
                                    <div class="blog-box-content-inner">
                                        <h4 class="blog-title"><a href="#">Huge Saving Limited Offer period</a></h4>
                                        <p class="info"><span>by <a href="#">Philos Team</a></span><span>29 Jan 2017</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item.2 -->
                        <div class="product-item">
                            <div class="blog-box">
                                <div class="blog-img-wrap">
                                    <img src="img/blog/blog_02.jpg" alt="theme" />
                                </div>
                                <div class="blog-box-content">
                                    <div class="blog-box-content-inner">
                                        <h4 class="blog-title"><a href="#">Summer Collection Launched</a></h4>
                                        <p class="info"><span>by <a href="#">Admin</a></span><span>15 Jan 2017</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item.3 -->
                        <div class="product-item">
                            <div class="blog-box">
                                <div class="blog-img-wrap">
                                    <img src="img/blog/blog_03.jpg" alt="template" />
                                </div>
                                <div class="blog-box-content">
                                    <div class="blog-box-content-inner">
                                        <h4 class="blog-title"><a href="#">New Lunched Vintage Collaction</a></h4>
                                        <p class="info"><span>by <a href="#">People</a></span><span>19 Jan 2017</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- End Blog & News -->

            <!-- Newsletter -->

            <section class="section-padding dark-bg container-fluid bg-image text-center overlay-black40" data-background-img="img/bg/bg_7.jpg" data-bg-position-x="center top">
                <div class="container newsletter section-padding-b">
                    <h2 class="page-title">Subscribe To Newsletter</h2>
                    <form name="form-newsletter" class="newsletter-from" id="form-newsletter" method="post">
                        <div class="form-input">
                            <input class="input-lg" name="frmemail" id="frmemail" placeholder="Enter Email Address..." title="Enter Email Address..." type="text">
                        </div>
                        <button class="btn btn-lg btn-color">Sing Up</button>
                    </form>
                    <p class="italic">Sign up For Exclusive Updates, New Arrivals And Insider-Only Discount.</p>
                </div>
            </section>

            <!-- Newsletter -->

            <!-- About blocks -->
            <section class="">
                <div class="container container-margin-minus-t">
                    <div class="home-about-blocks">
                        <div class="col-12 about-blocks-wrap">
                            <div class="row">
                                <!--Customer Say-->
                                <div class="col-sm-6 col-md-6 customer-say">
                                    <div class="about-box-inner">
                                        <h4 class="mb-25">Customer Say</h4>

                                        <!--Customer Carousel-->
                                        <div class="testimonials-carousel owl-carousel owl-theme nf-carousel-theme1">
                                            <div class="product-item">
                                                <p class="large quotes">I think when we use 'stress', we are often using a kind of dummy word to try to fit many different things into one big category</p>
                                                <h6 class="quotes-people">- Jeff Dunham (Apple)</h6>
                                            </div>
                                            <div class="product-item">
                                                <p class="large quotes">It's true, you can never eat a pet you name. And anyway, it would be like a ventriloquist eating his dummy</p>
                                                <h6 class="quotes-people">- George Lois (microsoft)</h6>
                                            </div>
                                        </div>
                                        <!--End Customer Carousel-->
                                    </div>
                                </div>

                                <!--About Shop-->
                                <div class="col-sm-6 col-md-6 about-shop">
                                    <div class="about-box-inner">
                                        <h4 class="mb-25">About Philos</h4>
                                        <p class="mb-20">Welcome to <b class="black">Philos</b> - RandomText is a tool designers and developers can use to quickly grab dummy text in either Lorem Ipsum or Gibberish format.</p>
                                        <a href="#" class="btn btn-xs btn-black">More <i class="fa fa-angle-right right"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About blocks -->

            <!-- Brnad Logo -->
            <section id="brand-logo" class="section-padding brand-logo">
                <div class="container">
                    <ul class="list-none-ib brand-logo-carousel owl-carousel owl-theme">
                        <li class="brand-item"><a href="#">
                            <img src="img/logo/01.png" alt="nileforest" />
                        </a>
                        </li>
                        <li class="brand-item">
                            <a href="#">
                                <img src="img/logo/02.png" alt="niletheme" />
                            </a>
                        </li>
                        <li class="brand-item">
                            <a href="#">
                                <img src="img/logo/03.png" alt="nile" />
                            </a>
                        </li>
                        <li class="brand-item">
                            <a href="#">
                                <img src="img/logo/04.png" alt="forest" />
                            </a>
                        </li>
                        <li class="brand-item">
                            <a href="#">
                                <img src="img/logo/05.png" alt="themeforest" />
                            </a>
                        </li>
                        <li class="brand-item">
                            <a href="#">
                                <img src="img/logo/06.png" alt="woocommerce" />
                            </a>
                        </li>
                        <li class="brand-item">
                            <a href="#">
                                <img src="img/logo/07.png" alt="ecommerce" />
                            </a>
                        </li>
                        <li class="brand-item">
                            <a href="#">
                                <img src="img/logo/08.png" alt="html" />
                            </a>
                        </li>
                        <li class="brand-item">
                            <a href="#">
                                <img src="img/logo/09.png" alt="multiprapose" />
                            </a>
                        </li>

                    </ul>

                </div>
            </section>
            <!-- End Brnad Logo -->

            <!-- Instagram -->
            <section class="section-padding instagram bg-gray">
                <div class="container text-center">
                    <h2 class="page-title">Philos on Instagram</h2>
                    <p class="">Follow Us <a class="strong" href="#">@MayShop</a></p>
                </div>
                <div class="container">
                    <ul class="intagram-feed">
                        <li>
                            <a href="#">
                                <img src="img/instagram/insta-1.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/instagram/insta-2.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/instagram/insta-3.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/instagram/insta-4.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/instagram/insta-5.jpg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- End Instagram -->
        </div>
        <!-- End Page Content Wraper -->

        <!-- Footer Section -------------->
<?php include'footer.php'; ?>
