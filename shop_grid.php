<?php include'header.php'; ?>
<?php  
    $id =  $_GET['id'];
    $max_price = $conn->query("SELECT MAX(p.price) FROM product P")->fetch()->{'MAX(p.price)'};
    $price_range_min= isset($_GET['price_range_min']) ? $_GET['price_range_min'] : 0;
    $price_range_max= isset($_GET['price_range_max']) ? $_GET['price_range_max'] : $max_price;
    $string ='';
    $cat = $conn->query("SELECT * FROM category");
    $get_cat = [] ;
    foreach ($cat as $c) {
        $get_cat[] = $c;
    }
    function cat_get($data,$string,$parent_id){
        foreach ($data as $k => $c) {
            if($c->parent_id == $parent_id){
                unset($data[$k]);
                $string = $string.' OR p.cat_id='.$c->id;  

                cat_get($data,$string,$c->id);
            }
        }
        return $string;
    }
    $string = cat_get($get_cat,$string,$id);
    $category = $conn->query("SELECT * FROM category WHERE id = $id")->fetch(); 
    $count_pro = $conn->query("SELECT count(*) FROM product p WHERE p.cat_id = $id".$string)->fetch();
    $product1 = "SELECT p.mota,p.img,p.id,p.name,p.price,p.sale_price,r.rate,r.review FROM product p LEFT JOIN(SELECT avg(rate) as 'rate',pro_id,count(pro_id) as 'review' FROM review_pro GROUP BY pro_id) AS r ON p.id=r.pro_id WHERE p.cat_id = $id".$string;
    if ($id == 0) {
         $count_pro = $conn->query("SELECT count(*) FROM product p")->fetch();  
          $product1 = "SELECT p.mota,p.img,p.id,p.name,p.price,p.sale_price,r.rate,r.review FROM product p LEFT JOIN(SELECT avg(rate) as 'rate',pro_id,count(pro_id) as 'review' FROM review_pro GROUP BY pro_id) AS r ON p.id=r.pro_id WHERE p.price BETWEEN $price_range_min AND $price_range_max";
    }
    $limit = 6;
    $get_page = !empty($_GET['page']) ? $_GET['page'] : 1; 
    $total = isset($count_pro->{'count(*)'}) ? $count_pro->{'count(*)'}:0;
    $total_page =  ceil($total/$limit);
    $start = ($get_page-1)*$limit;
    $product1 .=" HAVING p.price BETWEEN $price_range_min AND $price_range_max";
    $product1 .=" LIMIT $start,$limit";
    $product = $conn->query($product1);
    $rate_pro = $conn->query("SELECT avg(rate) FROM review_pro GROUP BY pro_id" );

    $cate_name = $id ? $category->name : "Tất cả";
    
?>
        <!-- wrapper -->
        <!--==========================================-->
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
                                        <span><?php  echo $cate_name  ?></span>
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
                                <div class="col-md-9 push-md-3">
                                    <!-- Title -->
                                    <div class="list-page-title">
                                        <h2 class=""><?php  echo $cate_name;  ?> <small> <?php  echo $count_pro->{'count(*)'};  ?> sản phẩm</small></h2>
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
                                                <input type="hidden" name="id" value="<?php echo $id; ?>">
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
                                            <form class="product-show" method="get">
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
                                        <div class="row mlr-0">
                                            <!-- Shop Categories -->
                                            <div class="widget-sidebar col-sm-12 col-md-6 col-lg-3">
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
                                            <div class="widget-sidebar widget-filter-price col-sm-12 col-md-6 col-lg-3">
                                                <h6 class="widget-title">Chọn theo giá</h6>
                                                <ul class="widget-content">
                                                    <li>
                                                        <a href="#">Tất cả</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop_grid.php?id=<?php echo $id; ?>&price_range_min=0&price_range_max=50">
                                                            <span class="amount"><span class="currencySymbol">$</span>0.00</span>
                                                            -
                                                            <span class="amount"><span class="currencySymbol">$</span>50.00</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop_grid.php?id=<?php echo $id; ?>&price_range_min=50&price_range_max=100">
                                                            <span class="amount"><span class="currencySymbol">$</span>50.00</span>
                                                            -
                                                            <span class="amount"><span class="currencySymbol">$</span>100.00</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop_grid.php?id=<?php echo $id; ?>&price_range_min=100&price_range_max=150">
                                                            <span class="amount"><span class="currencySymbol">$</span>100.00</span>
                                                            -
                                                            <span class="amount"><span class="currencySymbol">$</span>150.00</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop_grid.php?id=<?php echo $id; ?>&price_range_min=150&price_range_max=200">
                                                            <span class="amount"><span class="currencySymbol">$</span>150.00</span>
                                                            -
                                                            <span class="amount"><span class="currencySymbol">$</span>200.00</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop_grid.php?id=<?php echo $id; ?>&price_range_min=200&price_range_max=250">
                                                            <span class="amount"><span class="currencySymbol">$</span>200.00</span>
                                                            -
                                                            <span class="amount"><span class="currencySymbol">$</span>250.00</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop_grid.php?id=<?php echo $id; ?>&price_range_min=250&price_range_max=<?php echo $max_price;?>">
                                                            <span class="amount"><span class="currencySymbol">$</span>250.00</span>
                                                            +
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- End Filter Price -->

                                            <!-- Filter Color -->
                                
                                            <!-- End Filter Color -->

                                            <!-- Filter Size -->
                                
                                            <!-- End Filter Size -->
                                        </div>
                                    </div>
                                    <!-- End Product filters Toggle-->

                                    <!-- Product Grid -->
                                    <div class="row product-list-item">
                                        <!-- item.1 -->
                                        <?php if($count_pro->{'count(*)'} == 0): ?>
                                            <p>Hiện danh mục này chưa có sản phẩm nào</p>
                                        <?php endif; ?>
                                        <?php  foreach ($product as $pro) :?>
                                        <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
                                            <!--Product Item-->
                                            <div class="product-item">
                                                <div class="product-item-inner">
                                                    <div class="product-img-wrap">
                                                        <img src="uploads/product/<?php echo $pro->img; ?>" alt="">
                                                    </div>
                                                    <div class="product-button">
                                                        <a href="process_cart.php?id=<?php echo $pro->id; ?>&action=add" class="add-cart js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <a class="tag" href="#">Men Fashion</a>
                                                    <p class="product-title"><a href="product_detail.php?id=<?php echo $pro->id; ?>"><?php echo $pro->name; ?></a></p>
                                                    <div class="product-rating">
                                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                            <span style="width: <?php echo $pro->rate*20; ?>%"></span>
                                                        </div>
                                                        <a href="#" class="product-rating-count"><span class="count"><?php echo $pro->review?$pro->review:'0' ;   ?></span> Reviews</a>
                                                    </div>
                                                    <p class="product-description">
                                                        <?php echo $pro->mota; ?>
                                                    </p>
                                                    <h5 class="item-price"><?php if ($pro->sale_price) {
                                                        echo '<del>$'.$pro->sale_price.'</del>';
                                                    } echo '$'.$pro->price; ?></h5>
                                                </div>
                                            </div>
                                            <!-- End Product Item-->
                                        </div>
                                        <?php  endforeach; ?>
                                    </div>
                                    <!-- End Product Grid -->

                                    <div class="pagination-wraper">
                                        <p>Showing 1 - 15 of 120 results</p>
                                        <div class="pagination">
                                            <ul class="pagination-numbers">
                                        <!--<li>
                                            <a href="#" class="prev page-number"><i class="fa fa-angle-double-left"></i></a>
                                        </li>-->
                                        <?php if($get_page > 1): ?>
                                            <li>
                                                <a href="shop_grid.php?id=<?php $pre_page = $get_page - 1; echo $id.'&page='.$pre_page;?>" class="prev page-number"><i class="fa fa-angle-double-left"></i></a>
                                            </li>
                                        <?php endif; ?>
                                        <?php for ($i=1; $i <=$total_page ; $i++) :
                                            $ac = $i==$get_page?'current':''; ?>
                                        <li class="active">
                                            <a href="shop_grid.php?id=<?php  echo $id.'&page='.$i;?>" class="page-number <?php echo $ac; ?>"><?php echo $i; ?></a>
                                        </li>
                                        <?php  endfor; ?>
                                        <?php if ($get_page < $total_page) :?>
                                        <li>
                                            <a href="shop_grid.php?id=<?php $next_page = $get_page + 1; echo $id.'&page='.$next_page;?>" class="next page-number"><i class="fa fa-angle-double-right"></i></a>
                                        </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!-- End Product Content -->

                        <!-- Sidebar -->
                        <div class="sidebar-container col-md-3 pull-md-9">

                            <!-- Categories -->
                            <div class="widget-sidebar">
                                <h6 class="widget-title">Danh mục sản phẩm</h6>
                                <ul class="widget-content widget-product-categories jq-accordian">
                                    <li>
                                        <a>Clothings</a>
                                        <ul class="children">
                                            <li><a href="#">All</a></li>
                                            <li><a href="#">Coats & Jackets</a></li>
                                            <li><a href="#">Shirts</a></li>
                                            <li><a href="#">Sportswear</a></li>
                                            <li><a href="#">Swimwear</a></li>
                                            <li><a href="#">Trousers</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Man</a>
                                        <ul>
                                            <li><a href="#">All</a></li>
                                            <li><a href="#">Coats & Jackets</a></li>
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

                            <!-- Filter By Price -->
                            <div class="widget-sidebar widget-price-range">
                                <h6 class="widget-title">Filter By Price</h6>
                                <form class="widget-content" method="get" action="#"><input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <div class="price-range-slider"></div>
                                    <div class="price-range-amount">
                                        <input id="price_range_min" name="price_range_min" value="" data-min="140" placeholder="Min price" style="display: none;" type="text">
                                        <input id="price_range_max" name="price_range_max" value="" data-max="1100" placeholder="Max price" style="display: none;" type="text">
                                        <div id="price-range-from-to">
                                        </div>
                                    </div>
                                    <button class="btn btn-xs btn-black pull-right" type="submit">Filter</button>
                                </form>
                            </div>

                            <!-- Filter By Color -->
              

                            <!-- Filter By Size -->
                 

                            <!-- Filter By Tag -->
                            <div class="widget-sidebar widget-filter-tag">
                                <h6 class="widget-title">Popular Tag</h6>
                                <ul class="widget-content">
                                    <li>
                                        <a href="#">Shirt</a>
                                    </li>
                                    <li>
                                        <a href="#">Bag</a>
                                    </li>
                                    <li>
                                        <a href="#">Vintage</a>
                                    </li>
                                    <li>
                                        <a href="#">Sweaters</a>
                                    </li>
                                    <li>
                                        <a href="#">t-shirt</a>
                                    </li>
                                    <li>
                                        <a href="#">white</a>
                                    </li>
                                    <li>
                                        <a href="#">Black</a>
                                    </li>
                                    <li>
                                        <a href="#">New</a>
                                    </li>
                                    <li>
                                        <a href="#">Popular</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Widget Product -->
                            <div class="widget-sidebar widget-product">
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

                            <div class="widget-sidebar widget-banner">
                                <a href="#" class="banner-image-wrap">
                                    <img src="img/banner/banner_115146.jpg" alt="" />
                                </a>
                            </div>

                        </div>
                        <!-- End Sidebar -->

                    </div>
                </div>
            </section>
            <!-- End Page Content -->

        </div>
        <!-- End Page Content Wraper -->

        <!-- Footer Section -------------->
        <?php include'footer.php'; ?>