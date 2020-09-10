<?php include'header.php'; ?>
<?php 
    $id = $_GET['id']; 
    $new = $conn->query("SELECT * FROM news WHERE id = $id")->fetch();
  	$mem_id = $customer->id;

 
 $comment_new = $conn->query("SELECT * FROM comment WHERE new_id = $id");
 $comment = [];
    foreach ($comment_new as $c) :
        $comment[] =$c; 
    endforeach;
 function show_comment($data,$parent_id=0){
   
foreach ($data as $k => $com) :
	$mem = $conn->query("SELECT full_name,img FROM member WHERE id = $com->member_id")->fetch(); 
        $yrdata= strtotime($com->created);
    if($com->parent_id == $parent_id && $parent_id == 0 ) :
    echo '<li id="comment-101" class="comment-101">';
        echo '<img src="img/avatar.jpg" class="avatar" alt="author" />';
        echo '<div class="comment-text">"' ;
            echo '<div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">"';
                echo '<span style="width:10%></span>';
            echo '</div>';
            echo '<p class="meta">';
                echo '<strong itemprop="author">'.$mem->full_name.'</strong>';
               
                echo '<time itemprop="datePublished" datetime="">'.date('M d, Y',$yrdata).'</time>';
            echo '</p>';
            echo '<div class="description" itemprop="description">';
                echo '<p>'.$com->messenger.'</p>';
            echo '</div>';
         if($customer): 
            echo '<div class="row">';
            	echo '<a href="#" onclick="like_cmt('.$com->parent_id.')">Thích</a>';
            	echo '<a href="#" onclick="par_cmt('.$com->parent_id.')">Trả lời</a>';
            echo '</div>';
        endif; 
        	echo '<ul class="commentlist">';
        	 	unset($data[$k]);
                show_category($data,$com->id);
        	echo '</ul>';
        echo '</div>';
    echo '</li>';
    endif; 
     if($com->parent_id == $parent_id && $parent_id != 0) :
                 echo '<li><a href="shop_grid.php?id='.$com->id.'"">'.$com->name.'</a></li>';
                 unset($data[$k]);
     endif;   
    endforeach;
}


  	if(isset($_POST['comment'])){
  		$cmt = $_POST['comment'];
  		$parent = isset($_POST['parent_id']) ? $_POST['parent_id'] : 0;

  		$sql_cmt = "INSERT INTO comment(member_id,messenger,new_id,parent_id) VALUES('$mem_id','$cmt','$id','$parent')";
  		if($conn->query($sql_cmt)){
  			header('location:blog-single.php?id='.$id);
  		}

  	}
?>
<!-- Page Content Wraper -->
<body class="   post-page env-prod locale-en page-1">
	<div id="body-wrapper">	
		<div id="container" class="container push-content">
			<div class="post-wrapper clearfix" data-permalink="https://hnbmg.com/co-hoi-ngan-nam-co-mot-cam-99k-mua-ao-boo-x-marvel-57942.html">
				<div class="post row single-gallery-spaces sticky-ad-container">
					<div class="gallery-container wide col-xs-12">
						<div class="gallery wide">
							<img src="uploads/news/<?php echo $new->image; ?>" class="img-responsive wp-post-image" > 
						</div>
					</div>
					<div id="post-1243516" class="col-hb-left">
						<h1 class="title header-color-change-point"><span><?php echo $new->name; ?></span></h1>
						<div class="post-meta-social-shares-container clearfix">
							<div class="author-avatar-timestamp-container">
								<div class="author-name-avatar-container">
									<span class="author">By
										<strong>
											<a class="article-author" rel="author" href="https://hnbmg.com/author/baole1410">
											Bảo Lê </a>
										</strong> ·
									</span>
									<span class="timestamp">
										<time>2 tháng trước</time>
										<span>&nbsp;·</span>
										<span class="comment-count">
											<i class="fa fa-comment-o"></i>&nbsp;
											<a href="https://hnbmg.com/co-hoi-ngan-nam-co-mot-cam-99k-mua-ao-boo-x-marvel-57942.html#comment"> Comments</a>
										</span>
									</span>
								</div>
							</div>
						</div>
						<div class="content-wrapper ">
							<div class="content">
								<?php echo $new->content; ?>
							</div>
						</div>
						
						<div class="row">
						   	<div class="comments">
		                        <h6 class="review-title">Customer Reviews</h6>
		                        <!--<p class="review-blank">There are no reviews yet.</p>-->
		                        <ul class="commentlist">
		                          <?php  if(!$customer): ?>
		                                <p class="checkout-info">
		                                    Đã có tài khoản? <strong><a href="login-register.php">Đăng nhập</a></strong>
		                                </p>
		                                <p class="checkout-info">
		                                    Chưa có tài khoản? <strong><a href="register.php">Đăng kí</a></strong>
		                                </p>
		                            <?php  else: ?>
		                          <?php foreach ($comment as $com) : ?>
		                            <?php $mem = $conn->query("SELECT full_name,img FROM member WHERE id = $com->member_id")->fetch(); 
		                                $yrdata= strtotime($com->created);
		                            ?>
		                            <li id="comment-101" class="comment-101">
		                                <img src="img/avatar.jpg" class="avatar" alt="author" />
		                                <div class="comment-text">
		                                    <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
		                                        <!-- <span style="width: <?php echo $com->rate*20; ?>%"></span> -->
		                                    </div>
		                                    <p class="meta">
		                                        <strong itemprop="author"><?php echo $mem->full_name; ?></strong>
		                                        &nbsp;&mdash;&nbsp;
		                                        <time itemprop="datePublished" datetime=""><?php echo date('M d, Y', $yrdata); ?></time>
		                                    </p>
		                                    <div class="description" itemprop="description">
		                                        <p><?php echo $com->messenger; ?></p>
		                                    </div>
		                                    <?php if($customer): ?>
		                                    <div class="row">
		                                    	<a href="#" onclick="like_cmt(<?php echo $com->parent_id; ?>)">Thích</a>
		                                    	<a href="#" onclick="par_cmt(<?php echo $com->parent_id; ?>)">Trả lời</a>
		                                    </div>
		                                <?php endif; ?>
		                                </div>
		                            </li>
		                            <?php endforeach; endif; ?>    
                                </ul>
                            </div>
		                    <div class="review-form-wrapper">
		                        <h6 class="review-title">Add a Review </h6>
		                        <form class="comment-form" method="post">
		                        	 <input name="parent_id" id="parent_cmt" style="display: none">
		                            <div class="form-field-wrapper">
		                                <label>Your Review <span class="required">*</span></label>
		                                <textarea id="comment" class="form-full-width" name="comment" cols="45" rows="8" aria-required="true" required=""></textarea>
		                            </div>
		                            <div class="form-field-wrapper">
		                                <input name="submit" id="submit" class="submit btn btn-md btn-color" value="Bình luận" type="submit">
		                            </div>
		                        </form>
		                    </div>
				                   
						</div>
						<div class="related-posts">
							<h2>You May Also Like</h2>
							<div class="row">
								<div class="col-md-4">
									<div class="post-box">
										<div class="teaser">
											<a href="https://hnbmg.com/muc-gia-resell-ngat-troi-cua-air-jordan-11-premium-blue-suede-derek-jeter-p-e-41344.html" title="Mức giá resell ngất trời của Air Jordan 11 Premium Blue Suede Derek Jeter P.E." class="thumbnail">
											<img width="465" height="465" src="https://hnbmg.com/wp-content/uploads/jeter-air-jordan-11-blue-suede-351792-147.jpg" class="attachment-normal-size size-normal-size wp-post-image" > </a>
										</div>
										<div class="title">
											<a href="https://hnbmg.com/muc-gia-resell-ngat-troi-cua-air-jordan-11-premium-blue-suede-derek-jeter-p-e-41344.html" title="Mức giá resell ngất trời của Air Jordan 11 Premium Blue Suede Derek Jeter P.E.">
											<h3>Mức giá resell ngất trời của Air Jordan 11 Premium Blue Suede Derek Jeter P.E.</h3>
											</a>
										</div>
									</div>
								</div>
								<div id="more-posts"></div>
							</div>
							<div class="row load-more-wrapper">
								<div class="col-xs-12">
									<a class="btn btn-block btn-lg load-more-btn btn-manual-load">Load More <i class="fa fa-angle-down"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-hb-right sidebar hidden-xs hidden-sm">
						<div class="widget popular sidebar-posts hidden-sm hidden-xs" data-category="popular">
							<div class="widget-title">
								<h4>Popular</h4>
								<ul class="nav">
									<li class="dropdown active">
										<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><span class="text">Latest</span> <span class="fa fa-angle-down"></span></a>
									<ul class="dropdown-menu dropdown-menu-right" role="menu">
										<li class="active">
											<a data-toggle="tab" href="#recent_popular_posts">Latest</a>
										</li>
										<li>
											<a data-toggle="tab" href="#weekly_popular_posts">This Week</a>
										</li>
										<li>
											<a data-toggle="tab" href="#monthly_popular_posts">This Month</a>
										</li>
									</ul>
									</li>
								</ul>
						</div>
						<div class="tab-content">
							<div id="recent_popular_posts" class="tab-pane active">
								<ul class="list-unstyled posts">
									<li class="sidebar-post">
									<div class="post-teaser">
										<a href="https://hnbmg.com/converse-dua-cau-tra-loi-ve-van-de-vo-chai-nhua-se-di-ve-dau-59677.html" title="Converse Đưa Câu Trả Lời Về Vấn Đề “Vỏ Chai Nhựa Sẽ Đi Về Đâu?”" class="thumbnail">
										<img src="https://hnbmg.com/wp-content/uploads/01-thumb-14.jpg" class="attachment-normal-size size-normal-size wp-post-image"> </a>
									</div>
									<div class="post-meta">
										<a class="title" title="Converse Đưa Câu Trả Lời Về Vấn Đề “Vỏ Chai Nhựa Sẽ Đi Về Đâu?”" href="https://hnbmg.com/converse-dua-cau-tra-loi-ve-van-de-vo-chai-nhua-se-di-ve-dau-59677.html">
											<h2>Converse Đưa Câu Trả Lời Về Vấn Đề “Vỏ Chai Nhựa Sẽ Đi Về Đâu?”</h2>
										</a>
										<div class="timestamp">
											<time>13 giờ trước</time>
										</div>
									</div>
									</li>
									<li class="sidebar-post">
										<div class="post-teaser">
											<a href="https://hnbmg.com/vans-sport-su-troi-day-cua-phong-cach-the-thao-co-dien-59627.html" title="Vans Sport – Sự Trỗi Dậy Của Phong Cách Thể Thao Cổ Điển" class="thumbnail">
											<img src="https://hnbmg.com/wp-content/uploads/1-98.jpg" class="attachment-normal-size size-normal-size wp-post-image"> </a>
										</div>
										<div class="post-meta">
											<a class="title" title="Vans Sport – Sự Trỗi Dậy Của Phong Cách Thể Thao Cổ Điển" href="https://hnbmg.com/vans-sport-su-troi-day-cua-phong-cach-the-thao-co-dien-59627.html">
											<h2>Vans Sport – Sự Trỗi Dậy Của Phong Cách Thể Thao Cổ Điển</h2>
											</a>
											<div class="timestamp">
												<time>2 ngày trước</time>
											</div>
										</div>
									</li>
									<li class="sidebar-post">
										<div class="post-teaser">
											<a href="https://hnbmg.com/sneaker-store-saigon-27794.html" title="Top 9 cửa hàng sneaker tại Sài Gòn" class="thumbnail">
											<img src="https://hnbmg.com/wp-content/uploads/nike-hyperdunk-2017-low-city-pack-chicago.jpg" class="attachment-normal-size size-normal-size wp-post-image"> </a>
										</div>
										<div class="post-meta">
											<a class="title" title="Top 9 cửa hàng sneaker tại Sài Gòn" href="https://hnbmg.com/sneaker-store-saigon-27794.html">
											<h2>Top 9 cửa hàng sneaker tại Sài Gòn</h2>
											</a>
											<div class="timestamp">
												<time>3 năm trước</time>
											</div>
										</div>
									</li>
									<li class="sidebar-post">
										<div class="post-teaser">
											<a href="https://hnbmg.com/cam-nang-cho-nguoi-nhap-mon-tu-dien-giay-sneakerhead-dictionary-953.html" title="Cẩm nang cho người nhập môn: Từ điển đầu giày – Sneakerhead Dictionary" class="thumbnail">
											<img src="https://hnbmg.com/wp-content/uploads/1450969_735014676554016_7625911919705371685_n.jpg" class="attachment-normal-size size-normal-size wp-post-image" > </a>
										</div>
										<div class="post-meta">
											<a class="title" title="Cẩm nang cho người nhập môn: Từ điển đầu giày – Sneakerhead Dictionary" href="https://hnbmg.com/cam-nang-cho-nguoi-nhap-mon-tu-dien-giay-sneakerhead-dictionary-953.html">
												<h2>Cẩm nang cho người nhập môn: Từ điển đầu giày – Sneakerhead Dictionary</h2>
											</a>
											<div class="timestamp">
												<time>4 năm trước</time>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div id="weekly_popular_posts" class="tab-pane ">
								<ul class="list-unstyled posts">
									<li class="sidebar-post">
									<div class="post-teaser">
										<a href="https://hnbmg.com/converse-dua-cau-tra-loi-ve-van-de-vo-chai-nhua-se-di-ve-dau-59677.html" title="Converse Đưa Câu Trả Lời Về Vấn Đề “Vỏ Chai Nhựa Sẽ Đi Về Đâu?”" class="thumbnail">
										<img src="https://hnbmg.com/wp-content/uploads/01-thumb-14.jpg" class="attachment-normal-size size-normal-size wp-post-image"> </a>
									</div>
									<div class="post-meta">
										<a class="title" title="Converse Đưa Câu Trả Lời Về Vấn Đề “Vỏ Chai Nhựa Sẽ Đi Về Đâu?”" href="https://hnbmg.com/converse-dua-cau-tra-loi-ve-van-de-vo-chai-nhua-se-di-ve-dau-59677.html">
										<h2>Converse Đưa Câu Trả Lời Về Vấn Đề “Vỏ Chai Nhựa Sẽ Đi Về Đâu?”</h2>
										</a>
										<div class="timestamp">
											<time>13 giờ trước</time>
										</div>
									</div>
									</li>
									<li class="sidebar-post">
										<div class="post-teaser">
										<a href="https://hnbmg.com/vans-sport-su-troi-day-cua-phong-cach-the-thao-co-dien-59627.html" title="Vans Sport – Sự Trỗi Dậy Của Phong Cách Thể Thao Cổ Điển" class="thumbnail">
											<img  src="https://hnbmg.com/wp-content/uploads/1-98.jpg" class="attachment-normal-size size-normal-size wp-post-image" > 
										</a>
										</div>
										<div class="post-meta">
											<a class="title" title="Vans Sport – Sự Trỗi Dậy Của Phong Cách Thể Thao Cổ Điển" href="https://hnbmg.com/vans-sport-su-troi-day-cua-phong-cach-the-thao-co-dien-59627.html">
											<h2>Vans Sport – Sự Trỗi Dậy Của Phong Cách Thể Thao Cổ Điển</h2>
											</a>
											<div class="timestamp">
												<time>2 ngày trước</time>
											</div>
										</div>
									</li>
									<li class="sidebar-post">
										<div class="post-teaser">
											<a href="https://hnbmg.com/hinh-anh-chi-tiet-cua-air-jordan-6-travis-scott-59602.html" title="Hình ảnh chi tiết của Air Jordan 6 “Travis Scott”" class="thumbnail">
											<img width="663" height="465" src="https://hnbmg.com/wp-content/uploads/travis-scott-air-jordan-6-CN1084-200-4.jpg" class="attachment-normal-size size-normal-size wp-post-image" alt="" srcset="https://hnbmg.com/wp-content/uploads/travis-scott-air-jordan-6-CN1084-200-4.jpg 1140w, https://hnbmg.com/wp-content/uploads/travis-scott-air-jordan-6-CN1084-200-4-150x105.jpg 150w, https://hnbmg.com/wp-content/uploads/travis-scott-air-jordan-6-CN1084-200-4-1024x719.jpg 1024w" sizes="(max-width: 663px) 100vw, 663px" data-attachment-id="59607" data-permalink="https://hnbmg.com/hinh-anh-chi-tiet-cua-air-jordan-6-travis-scott-59602.html/travis-scott-air-jordan-6-cn1084-200-4" data-orig-file="https://hnbmg.com/wp-content/uploads/travis-scott-air-jordan-6-CN1084-200-4.jpg" data-orig-size="1140,800" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="travis-scott-air-jordan-6-CN1084-200-4" data-image-description="" data-medium-file="https://hnbmg.com/wp-content/uploads/travis-scott-air-jordan-6-CN1084-200-4.jpg" data-large-file="https://hnbmg.com/wp-content/uploads/travis-scott-air-jordan-6-CN1084-200-4-1024x719.jpg"> 
											</a>
										</div>
										<div class="post-meta">
											<a class="title" title="Hình ảnh chi tiết của Air Jordan 6 “Travis Scott”" href="https://hnbmg.com/hinh-anh-chi-tiet-cua-air-jordan-6-travis-scott-59602.html">
											<h2>Hình ảnh chi tiết của Air Jordan 6 “Travis Scott”</h2>
											</a>
											<div class="timestamp">
												<time>2 ngày trước</time>
											</div>
										</div>
									</li>
									<li class="sidebar-post">
										<div class="post-teaser">
											<a href="https://hnbmg.com/kyrie-irving-se-co-mau-giay-cuoi-cung-danh-cho-nguoi-ham-mo-tai-boston-59594.html" title="Kyrie Irving sẽ có mẫu giày cuối cùng dành cho người hâm mộ tại Boston" class="thumbnail">
											<img width="663" height="465" src="https://hnbmg.com/wp-content/uploads/nike-zoom-vapor-x-kyrie-5-clover-bq5952-101-5.jpg" class="attachment-normal-size size-normal-size wp-post-image" alt="" srcset="https://hnbmg.com/wp-content/uploads/nike-zoom-vapor-x-kyrie-5-clover-bq5952-101-5.jpg 1140w, https://hnbmg.com/wp-content/uploads/nike-zoom-vapor-x-kyrie-5-clover-bq5952-101-5-150x105.jpg 150w, https://hnbmg.com/wp-content/uploads/nike-zoom-vapor-x-kyrie-5-clover-bq5952-101-5-1024x719.jpg 1024w" sizes="(max-width: 663px) 100vw, 663px" data-attachment-id="59595" data-permalink="https://hnbmg.com/kyrie-irving-se-co-mau-giay-cuoi-cung-danh-cho-nguoi-ham-mo-tai-boston-59594.html/nike-zoom-vapor-x-kyrie-5-clover-bq5952-101-5" data-orig-file="https://hnbmg.com/wp-content/uploads/nike-zoom-vapor-x-kyrie-5-clover-bq5952-101-5.jpg" data-orig-size="1140,800" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="nike-zoom-vapor-x-kyrie-5-clover-bq5952-101-5" data-image-description="" data-medium-file="https://hnbmg.com/wp-content/uploads/nike-zoom-vapor-x-kyrie-5-clover-bq5952-101-5.jpg" data-large-file="https://hnbmg.com/wp-content/uploads/nike-zoom-vapor-x-kyrie-5-clover-bq5952-101-5-1024x719.jpg"> </a>
										</div>
										<div class="post-meta">
											<a class="title" title="Kyrie Irving sẽ có mẫu giày cuối cùng dành cho người hâm mộ tại Boston" href="https://hnbmg.com/kyrie-irving-se-co-mau-giay-cuoi-cung-danh-cho-nguoi-ham-mo-tai-boston-59594.html">
											<h2>Kyrie Irving sẽ có mẫu giày cuối cùng dành cho người hâm mộ tại Boston</h2>
											</a>
											<div class="timestamp">
												<time>2 ngày trước</time>
											</div>
										</div>
									</li>
									<li class="sidebar-post">
										<div class="post-teaser">
											<a href="https://hnbmg.com/truot-toi-mua-he-tai-quan-moi-vol-42-ha-noi-59640.html" title="Trượt tới mùa hè tại Quận Mới Vol.42 – Hà Nội" class="thumbnail">
											<img width="697" height="465" src="https://hnbmg.com/wp-content/uploads/222-1.jpg" class="attachment-normal-size size-normal-size wp-post-image" alt="" srcset="https://hnbmg.com/wp-content/uploads/222-1.jpg 842w, https://hnbmg.com/wp-content/uploads/222-1-150x100.jpg 150w" sizes="(max-width: 697px) 100vw, 697px" data-attachment-id="59651" data-permalink="https://hnbmg.com/truot-toi-mua-he-tai-quan-moi-vol-42-ha-noi-59640.html/222-2" data-orig-file="https://hnbmg.com/wp-content/uploads/222-1.jpg" data-orig-size="842,561" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="222" data-image-description="" data-medium-file="https://hnbmg.com/wp-content/uploads/222-1.jpg" data-large-file="https://hnbmg.com/wp-content/uploads/222-1.jpg"> </a>
										</div>
										<div class="post-meta">
											<a class="title" title="Trượt tới mùa hè tại Quận Mới Vol.42 – Hà Nội" href="https://hnbmg.com/truot-toi-mua-he-tai-quan-moi-vol-42-ha-noi-59640.html">
											<h2>Trượt tới mùa hè tại Quận Mới Vol.42 – Hà Nội</h2>
											</a>
											<div class="timestamp">
												<time>1 ngày trước</time>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div id="monthly_popular_posts" class="tab-pane ">
								<ul class="list-unstyled posts">
									<li class="sidebar-post">
									</li>
								</ul>
							</div>
						</div>
						</div>
					</div> 
				</div>
			</div>
		</div>
	</div>
	<div id="back-to-top" class="hidden-sm hidden-xs">
		<i class="fa fa-chevron-up"></i>
	</div>
</body>
<!-- End Page Content -->
<!-- Footer Section -------------->
<script type="text/javascript">
    var star_stat = 0;
    function par_cmt(data) {
        var temp = '.star-' + data;
        var x = $(".stars").find(temp);
        x.addClass("active");
        if(star_stat){
        temp = '.star-' + star_stat;
        x = $(".stars").find(temp);
            if(x.hasClass("active")) x.removeClass("active");
        }
        star_stat = data;
        $('#val_par').val(data);
    }
    function like_cmt(data){
    	<?php 
    		$stts = 
    		$sql_like = "INSERT INTO like_comment(member_id,comment_id,status) VALUES($mem_id,data,$stts)";
    	?>
    }
</script>
<?php include'footer.php'; ?>