<?php include'header.php'; ?>
<?php 
    $news = $conn->query("SELECT id,image,name,tomtat,author,dayup FROM news ORDER BY dayup DESC");
?>
<!-- Page Content Wraper -->
<div class="page-content-wraper">
    <!-- Bread Crumb -->
    <section class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="breadcrumb-link">
                        <a href="#">Home</a>
                        <span>Blog Page</span>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Bread Crumb -->

    <!-- Page Content -->
<div id="container" class="container push-content">
<div class="posts-container">
    <div class="section-wrapper">
        <div class="row sticky-ad-container">
            <div class="col-hb-left">
                <div class="row posts">
                    <div class="col-md-12 small-box">
                        <?php foreach ($news as $n) : ?>
                        <div class="post-box">
                            <div class="row">
                                <div class="col-hb-post-image teaser">
                                    <a href="blog-single.php?id=<?php echo $n->id; ?>" title="Cơ hội ngàn năm có một: cầm 99k, mua áo BOO x Marvel" class="thumbnail">
                                        <img width="694" height="465" src="uploads/news/<?php echo $n->image; ?>" class="attachment-normal-size size-normal-size wp-post-image" sizes="(max-width: 694px) 100vw, 694px"> 
                                    </a>
                                </div>
                                <div class="col-hb-post-meta meta">
                                    <div class="title-wrapper">
                                        <a href="blog-single.php?id=<?php echo $n->id; ?>" title="Cơ hội ngàn năm có một: cầm 99k, mua áo BOO x Marvel" class="title">
                                            <h2>
                                                <span><?php echo $n->name; ?></span>
                                            </h2>
                                        </a>
                                    </div>
                                    <div class="counters">
                                        <span style="display: inline;" class="comment-count">
                                            <i class="fa fa-comment-o"></i>
                                            <a href="blog-single.php?id=<?php echo $n->id; ?>"> Comments</a>
                                        </span>
                                        <span style="display: inline;" class="divider">·</span>
                                        <span style="display: inline;" class="author">By <strong><a class="article-author" rel="author" href="https://hnbmg.com/author/baole1410"><?php echo $n->author; ?></a></strong></span><span style="display: inline;" class="divider">·</span>
                                        <span style="display: inline;" class="time"><time class="timeago">2 tháng trước</time></span>
                                    </div>
                                    <div class="post-box-excerpt hidden-sm hidden-xs">
                                    <p><?php echo $n->tomtat; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
                <div id="more-posts"></div>
                <div class="row load-more-wrapper">
                    <div class="col-xs-12">
                        <a class="btn btn-block btn-lg load-more-btn btn-manual-load">Load More <i class="fa fa-angle-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div> 
    <!-- End Page Content -->
<!-- End Page Content Wraper -->

<!-- Footer Section -------------->
<?php include'footer.php'; ?>