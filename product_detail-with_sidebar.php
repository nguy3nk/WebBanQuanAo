<?php include'header.php'; ?>
<?php $pro = $conn->query("SELECT * FROM img"); ?>
        <!-- wrapper -->
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
                    <section id="product-ID_XXXX" class="content-page single-product-content">

                        <!-- Product -->
                        <div id="product-detail" class="container">
                            <div class="row">
                                <div class="col-lg-9 col-md-12 product-content sidebar-position-right">
                                    <div class="row">
                                        <!-- Product Image -->
                                           <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                    <div class="product-page-image ">
                        <div class="product-image-slider " id="product-image-gallery">
                         <!-- Slick Image Slider -->
                         <?php foreach ($pro as $value) { ?>
                            <div class=" woocommerce-product-gallery">
                                <div class="item woocommerce-product-gallery__image">
                                 <a class="product-gallery-item" href="<?php echo $value->img_link; ?>" data-med="<?php echo $value->img_link; ?>">
                                     <img src="<?php echo $value->img_link; ?>" alt="<?php echo 'image '.$value->id; ?>" data-src="<?php echo $value->img_link; ?>" data-large_image_width="2025" data-large_image_height="1400"/>
                                 </a>
                             </div>
                         </div>
                     <?php }; ?>
                 </div>
                 <!-- End Slick Image Slider -->
             </div>

             <!-- Slick Thumb Slider -->
             <div class="product-image-slider-thumbnails">
                <?php $pro = $conn->query("SELECT * FROM img"); ?>
                <?php foreach ($pro as $value) { ?>
                    <div class="item">
                        <img src="<?php echo $value->img_link; ?>" alt="<?php echo 'image '.$value->id; ?>" />
                    </div>
                <?php }; ?>
            </div>
            <!-- End Slick Thumb Slider -->
        </div>
                                        <!-- End Product Image -->

                                        <!-- Product Content -->
                                        <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                                            <div class="product-page-content">
                                                <h2 class="product-title">LP - Black Solid Polo T-Shirt</h2>
                                                <div class="product-rating">
                                                    <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                        <span style="width: 60%"></span>
                                                    </div>
                                                    <div class="product-rating-count">( <span class="count">3</span> Reviews )</div>
                                                </div>
                                                <div class="product-price">
                                                    <del>$499.00</del><span><span class="product-price-sign">$</span><span class="product-price-text">399.00</span></span>
                                                </div>
                                                <p class="product-description">
                                                    When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                                </p>
                                                <div class="row product-filters">
                                                    <form class="col-md-12 filters-color">
                                                        <label for="select-color">Select Color</label>

                                                <!--<select name="select-color" id="select-color" class="nice-select-box select-color">
                                            <option value="" selected="selected">Choose an option</option>
                                            <option value="#f00">Red</option>
                                            <option value="blue">Blue</option>
                                            <option value="orange">Orange</option>
                                            <option value="green">Green</option>
                                            <option value="black">Black</option>
                                            <option value="gray">Gray</option>
                                        </select>-->

                                        <div class="color-selector">
                                            <div class="entry active" style="background: #000;">&nbsp;</div>
                                            <div class="entry" style="background: #7eabe9;">&nbsp;</div>
                                            <div class="entry" style="background: #f27123;">&nbsp;</div>
                                            <div class="entry" style="background: #d1d1d1;">&nbsp;</div>
                                        </div>
                                    </form>
                                    <form class="col-md-12 filters-size">
                                        <label for="select-size">Select Size</label>
                                                <!--<select name="select-size" id="select-size" class="nice-select-box">
                                            <option value="" selected="selected">Choose an option</option>
                                            <option value="l">L</option>
                                            <option value="m">M</option>
                                            <option value="s">S</option>
                                            <option value="x">X</option>
                                            <option value="xl">XL</option>
                                            <option value="xs">XS</option>
                                            <option value="xxl">XXL</option>
                                        </select>-->
                                        <div class="size-selector">
                                            <div class="entry active">S</div>
                                            <div class="entry">M</div>
                                            <div class="entry">L</div>
                                            <div class="entry">X</div>
                                            <div class="entry">XL</div>
                                        </div>
                                    </form>
                                </div>
                                <form class="single-variation-wrap">
                                    <div class="product-quantity">
                                        <span data-value="+" class="quantity-btn quantityPlus"></span>
                                        <input class="quantity input-lg" step="1" min="1" max="9" name="quantity" value="1" title="Quantity" type="number" />
                                        <span data-value="-" class="quantity-btn quantityMinus"></span>
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-black"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Add to cart</button>
                                </form>
                                <div class="single-add-to-wrap">
                                    <a class="single-add-to-wishlist"><i class="fa fa-heart left" aria-hidden="true"></i><span>Add to Wishlist</span></a>
                                    <a class="single-add-to-compare "><i class="fa fa-refresh left" aria-hidden="true"></i><span>Add to Compare</span></a>
                                </div>
                                <div class="product-meta">
                                    <span>SKU : <span class="sku" itemprop="sku">005687</span></span>
                                    <span>Category : <span class="category" itemprop="category">Shoes</span></span>
                                </div>
                                <div class="product-share">
                                    <span>Share :</span>
                                    <ul>
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://nileforest.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="http://twitter.com/share?url=http://nileforest.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="http://plus.google.com/share?url=http://nileforest.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="mailto:?subject=Check this http://nileforest.com/" target="_blank"><i class="fa fa-envelope"></i></a></li>
                                        <li><a href="../../../pinterest.com/pin/create/button/index68d2.php?url=http://nileforest.com/exampleImage.jpg" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 product-sidebar">
                    <div class="sidebar-widget-outline product-brand">
                        <a href="#brand_name" class="image-link">
                            <img src="img/logo/07.png" alt="brand" /></a>
                            <a href="#View_all_brand" class="text-link">View All Product</a>
                        </div>
                        <div class="sidebar-widget-outline product-list widget-product">
                            <h6 class="widget-title">Popular Product</h6>

                            <ul class="widget-content">

                                <!--Item-->
                                <li>
                                    <a class="product-img" href="#">
                                        <img src="img/product-img/big/product_125470007.jpg" alt="">
                                    </a>
                                    <div class="product-content">
                                        <a class="product-link" href="#">Alpha Block Black Polo Sleem T-Shirt</a>
                                        <div class="star-rating">
                                            <span style="width: 80%;"></span>
                                        </div>
                                        <span class="product-amount">$399.00</span>
                                    </div>
                                </li>

                                <!--Item-->
                                <li>
                                    <a class="product-img" href="#">
                                        <img src="img/product-img/big/product_125470006.jpg" alt="">
                                    </a>
                                    <div class="product-content">
                                        <a class="product-link" href="#">Red Printed Round Neck T-Shirt</a>
                                        <div class="star-rating">
                                            <span style="width: 100%;"></span>
                                        </div>
                                        <span class="product-amount">$399.00</span>
                                    </div>
                                </li>

                                <!--Item-->
                                <li>
                                    <a class="product-img" href="#">
                                        <img src="img/product-img/big/product_125470005.jpg" alt="">
                                    </a>
                                    <div class="product-content">
                                        <a class="product-link" href="#">Maroon Solid Henley T-Shirts</a>
                                        <div class="star-rating">
                                            <span style="width: 100%;"></span>
                                        </div>
                                        <span class="product-amount">$399.00</span>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="sidebar-widget-outline product-banner-icon-text promo-box">
                            <div class="promo-item">
                                <div class="icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                                <div class="info">
                                    <a href="#">
                                        <h6 class="normal">Free Shipping</h6>
                                    </a>
                                    <p>On Order Over $150</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Product -->

            <!-- Product Content Tab -->
            <div class="product-tabs-wrapper container">
                <ul class="product-content-tabs nav nav-tabs" role="tablist">

                    <li class="nav-item">
                        <a class="active" href="#tab_description" role="tab" data-toggle="tab">Descriptiont</a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="#tab_additional_information" role="tab" data-toggle="tab">Additional Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="#tab_reviews" role="tab" data-toggle="tab">Reviews (<span>3</span>)</a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="#tab_custom" role="tab" data-toggle="tab">Custom Tab</a>
                    </li>

                </ul>
                <div class="product-content-Tabs_wraper tab-content container">
                    <div id="tab_description" role="tabpanel" class="tab-pane fade in active">
                        <!-- Accordian Title -->
                        <h6 class="product-collapse-title" data-toggle="collapse" data-target="#tab_description-coll">Description</h6>
                        <!-- End Accordian Title -->
                        <!-- Accordian Content -->
                        <div id="tab_description-coll" class="shop_description product-collapse collapse container">
                            <div class="row">
                                <div class=" col-md-6">
                                    <p>
                                        Etiam molestie sit amet arcu vel dictum. Integer mattis est nec porta porttitor. Maecenas condimentum sapien eget urna condimentum, non sagittis ante dapibus. Donec congue libero ut ex malesuada auctor. Vivamus at urna et erat aliquam pharetra. Nulla facilisi. Morbi feugiat tortor finibus elit aliquet tempor.
                                        Generated 5 paragraphs, 453 words, 3065 bytes of Lorem Ipsum
                                    </p>
                                    <h4>Vivamus at urna</h4>
                                    <ul>
                                        <li>Etiam molestie sit amet arcu vel dictum</li>
                                        <li>Integer mattis est nec porta porttitor</li>
                                        <li>Maecenas condimentum sapien eget urna condimentum</li>
                                        <li>Donec congue libero ut ex malesuada auctor</li>
                                        <li>Generated 5 paragraphs, 453 words</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        Etiam molestie sit amet arcu vel dictum. Integer mattis est nec porta porttitor. Maecenas condimentum sapien eget urna condimentum, non sagittis ante dapibus. Donec congue libero ut ex malesuada auctor. Vivamus at urna et erat aliquam pharetra. Nulla facilisi. Morbi feugiat tortor finibus elit aliquet tempor.
                                        Generated 5 paragraphs, 453 words, 3065 bytes of Lorem Ipsum
                                    </p>
                                    <h4>hadding four</h4>
                                    <h5>hadding five</h5>
                                    <h6>hadding six</h6>
                                </div>
                            </div>
                        </div>
                        <!-- End Accordian Content -->
                    </div>

                    <div id="tab_additional_information" role="tabpanel" class="tab-pane fade">
                        <!-- Accordian Title -->
                        <h6 class="product-collapse-title" data-toggle="collapse" data-target="#tab_additional_information-coll">Additional Information</h6>
                        <!-- End Accordian Title -->
                        <!-- Accordian Content -->
                        <div id="tab_additional_information-coll" class="container product-collapse collapse">

                            <table class="shop_attributes">
                                <tbody>
                                    <tr>
                                        <th>Color</th>
                                        <td>Black, Gray, White</td>
                                    </tr>
                                    <tr>
                                        <th>Weight</th>
                                        <td>5 kg</td>
                                    </tr>
                                    <tr>
                                        <th>Dimensions</th>
                                        <td>60 x 40 x 60 cm</td>
                                    </tr>
                                    <tr>
                                        <th>Washcare</th>
                                        <td>Dry Clean</td>
                                    </tr>
                                    <tr>
                                        <th>Composition</th>
                                        <td>100% Polyester</td>
                                    </tr>
                                    <tr>
                                        <th>Lining composition</th>
                                        <td>100% Polyester</td>
                                    </tr>
                                    <tr>
                                        <th>Other info</th>
                                        <td>Ullamcorper nisl mus integer mollis vestibulu</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <!-- End Accordian Content -->
                    </div>
                    <div id="tab_reviews" role="tabpanel" class="tab-pane fade">
                        <!-- Accordian Title -->
                        <h6 class="product-collapse-title" data-toggle="collapse" data-target="#tab_reviews-coll">Reviews (0)</h6>
                        <!-- End Accordian Title -->
                        <!-- Accordian Content -->
                        <div id="tab_reviews-coll" class=" product-collapse collapse container">
                            <div class="row">
                                <div class="review-form-wrapper col-md-6">
                                    <h6 class="review-title">Add a Review </h6>
                                    <form class="comment-form">
                                        <div class="form-field-wrapper">
                                            <label>Your Rating</label>
                                            <p class="stars">
                                                <span>
                                                    <a class="star-1" href="#">1</a>
                                                    <a class="star-2" href="#">2</a>
                                                    <a class="star-3" href="#">3</a>
                                                    <a class="star-4 active" href="#">4</a>
                                                    <a class="star-5" href="#">5</a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="form-field-wrapper">
                                            <label>Your Review <span class="required">*</span></label>
                                            <textarea id="comment" class="form-full-width" name="comment" cols="45" rows="8" aria-required="true" required=""></textarea>
                                        </div>
                                        <div class="form-field-wrapper">
                                            <label>Name <span class="required">*</span></label>
                                            <input id="author" class="input-md form-full-width" name="author" value="" size="30" aria-required="true" required="" type="text">
                                        </div>
                                        <div class="form-field-wrapper">
                                            <label>Email <span class="required">*</span></label>
                                            <input id="email" class="input-md form-full-width" name="email" value="" size="30" aria-required="true" required="" type="email">
                                        </div>
                                        <div class="form-field-wrapper">
                                            <input name="submit" id="submit" class="submit btn btn-md btn-color" value="Submit" type="submit">
                                        </div>
                                    </form>
                                </div>
                                <div class="comments col-md-6">
                                    <h6 class="review-title">Customer Reviews</h6>
                                    <!--<p class="review-blank">There are no reviews yet.</p>-->
                                    <ul class="commentlist">
                                        <li id="comment-101" class="comment-101">
                                            <img src="img/avatar.jpg" class="avatar" alt="author" />
                                            <div class="comment-text">
                                                <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                    <span style="width: 100%"></span>
                                                </div>
                                                <p class="meta">
                                                    <strong itemprop="author">James Koster</strong>
                                                    &nbsp;&mdash;&nbsp;
                                                    <time itemprop="datePublished" datetime="">April 25, 2016</time>
                                                </p>
                                                <div class="description" itemprop="description">
                                                    <p>Wow Amazing!</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li id="102" class="comment-102">
                                            <img src="img/avatar.jpg" class="avatar" alt="author" />
                                            <div class="comment-text">
                                                <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                    <span style="width: 80%"></span>
                                                </div>
                                                <p class="meta">
                                                    <strong itemprop="author">Michel</strong>
                                                    &nbsp;&mdash;&nbsp;
                                                    <time itemprop="datePublished" datetime="">April 14, 2016</time>
                                                </p>
                                                <div class="description" itemprop="description">
                                                    <p>Wow Special!</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li id="comment-103" class="comment-103">
                                            <img src="img/avatar.jpg" class="avatar" alt="author" />
                                            <div class="comment-text">
                                                <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                    <span style="width: 60%"></span>
                                                </div>
                                                <p class="meta">
                                                    <em>Your comment is awaiting approval</em>
                                                        <!-- <strong itemprop="author">Kerry</strong>
                                                    &nbsp;&mdash;&nbsp;
                                                    <time itemprop="datePublished" datetime="">march 19, 2016</time>-->
                                                </p>
                                                <div class="description" itemprop="description">
                                                    <p>When an unknown printer took a galley!</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Accordian Content -->
                    </div>
                    <div id="tab_custom" role="tabpanel" class="tab-pane fade">
                        <!-- Accordian Title -->
                        <h6 class="product-collapse-title" data-toggle="collapse" data-target="#tab_custom-coll">Custom</h6>
                        <!-- End Accordian Title -->
                        <!-- Accordian Content -->
                        <div id="tab_custom-coll" class="product-collapse collapse container">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="img/blog/blog_02.jpg" alt="shipping delivery" />
                                </div>
                                <div class="col-md-8">
                                    <h3 class="normal"><span>When an unknown printer took a galley of type.</span></h3>
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged. </p>
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged. </p>
                                    <a href="#" class="btn btn-sm btn-black mt-20">More Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Accordian Content -->
                    </div>
                </div>
            </div>
            <!-- End Product Content Tab -->

            <!-- Product Carousel -->
            <div class="container product-carousel">
                <h2 class="page-title">Related Products</h2>
                <div id="new-tranding" class="product-item-4 owl-carousel owl-theme nf-carousel-theme1">
                    <!-- item.1 -->
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
                    <!-- item.2 -->
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
                    <!-- item.3 -->
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
                    <!-- item.4 -->
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
                    <!-- item.5 -->
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
                            <h5 class="item-price">$39.00</h5>
                        </div>
                    </div>
                    <!-- item.6 -->
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
                            <h5 class="item-price">$39.00</h5>
                        </div>
                    </div>
                    <!-- item.7 -->
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

                </div>
            </div>
            <!-- End Product Carousel -->

        </section>
        <!-- End Page Content -->

    </div>
    <!-- End Page Content Wraper -->
<script type='text/javascript' src='js/jquery.js'></script>

            <script type='text/javascript' src='js/plugins/jquery.zoom.min.js'></script>


            <script type='text/javascript'>
                /* <![CDATA[ */
                var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","review_rating_required":"yes","flexslider":{"rtl":false,"animation":"slide","smoothHeight":true,"directionNav":false,"controlNav":"thumbnails","slideshow":false,"animationSpeed":500,"animationLoop":false,"allowOneSlide":false},"zoom_enabled":"1","zoom_options":[],"photoswipe_enabled":"1","photoswipe_options":{"shareEl":false,"closeOnScroll":false,"history":false,"hideAnimationDuration":0,"showAnimationDuration":0},"flexslider_enabled":"1"};
                /* ]]> */
            </script>
            <script type='text/javascript' src='js/single-product.min.js'></script>


    <!-- Footer Section -------------->
    <?php include'footer.php'; ?>