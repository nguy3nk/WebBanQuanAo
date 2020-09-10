<?php include'header.php'; ?>

<div id="content" class="page-content-wraper">
	<section class="breadcrumb" itemprop="breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-7"><nav class="breadcrumb-link"><span><span><a href="http://theme.nileforest.com/woo/philos/">Home</a> » <span class="breadcrumb_last" aria-current="page">My account</span></span></span></nav></div>
				<div class="col-md-5"><h3 class="text-right mb-0">My account</h3></div>
			</div>
		</div>
	</section>
	<div class="content-page ">
		<div class="container ">
			<div class="row">
				<div class="col-md-12 ">
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">			

							<article id="post-9" class="post-9 page type-page status-publish hentry">	
								<div class="entry-content">
									<div class="woocommerce row">
										<div class="col-md-2">
											<div class="userpage-sidebar">
												<div class="user-page-brief">
													<a class="user-page-brief__avatar" href="/user/account/profile/">
														<div class="shopee-avatar">
															<div class="shopee-avatar__placeholder">
													
															</div>
														</div>
													</a>
													<div class="user-page-brief__right">
														<div class="user-page-brief__username">nguy3nk</div>
														<div>
															<a class="user-page-brief__edit" href="/user/account/profile/">Sửa hồ sơ</a>
														</div>
													</div>
												</div>
												<div class="userpage-sidebar-menu">
													<div class="stardust-dropdown">
														<div class="stardust-dropdown__item-header">
															<a class="userpage-sidebar-menu-entry" href="#">
																<div class="userpage-sidebar-menu-entry__icon" style="background-color: rgb(255, 193, 7);"></div>
																<div data-toggle-target="info_bar" class="slide-toggle-btn">Tài khoản của tôi</div>
															</a>	
														</div>
														<div class="toggle-content" id="info_bar">
															<div class="userpage-sidebar-menu__subsection">
																<a class="_17BcjA" href="my_acc.php"><span class="_2ilxaJ">Hồ sơ</span></a>
																<!-- <a class="_17BcjA" href="/user/account/payment"><span class="_2ilxaJ">Ngân hàng</span></a>
																<a class="_17BcjA" href="/user/account/address"><span class="_2ilxaJ">Địa chỉ</span></a>
																<a class="_17BcjA" href="/user/account/password"><span class="_2ilxaJ">Đổi mật khẩu</span></a> -->
															</div>
														</div>
													</div>
													<a class="userpage-sidebar-menu-entry userpage-sidebar-menu-entry--highlight" href="my_acc.php?module=orders">
														<div class="userpage-sidebar-menu-entry__icon" style="background-color: rgb(68, 181, 255);"></div>
														<div class="userpage-sidebar-menu-entry__text">Đơn Mua</div>
													</a>
											<!-- 		<div class="stardust-dropdown">
														<div class="stardust-dropdown__item-header">
															<a class="userpage-sidebar-menu-entry" href="/user/notifications/orders">
																<div class="userpage-sidebar-menu-entry__icon" style="background-color: rgb(238, 77, 45);"></div>
																<div class="userpage-sidebar-menu-entry__text">Thông báo</div>
															</a>
														</div>
														<div class="stardust-dropdown__item-body">
															<div class="userpage-sidebar-menu__subsection">
																<a class="_17BcjA" href="/user/notifications/orders"><span class="_2ilxaJ">Cập nhật đơn hàng</span></a>
																<a class="_17BcjA" href="/user/notifications/promotions"><span class="_2ilxaJ">Khuyến mãi</span></a>
																<a class="_17BcjA" href="/user/notifications/updates"><span class="_2ilxaJ">Cập nhật sản phẩm</span></a>
																<a class="_17BcjA" href="/user/notifications/activity"><span class="_2ilxaJ">Hoạt động</span></a>
																<a class="_17BcjA" href="/user/notifications/paid-ads"><span class="_2ilxaJ">Đấu Thầu Từ Khóa</span></a>
																<a class="_17BcjA" href="/user/notifications/rating-updates"><span class="_2ilxaJ">Cập nhật đánh giá</span></a>
																<a class="_17BcjA" href="/user/notifications/wallet"><span class="_2ilxaJ">Cập nhật Ví</span></a>
																<a class="_17BcjA" href="/user/notifications/shopee-updates"><span class="_2ilxaJ">Cập nhật Shopee</span></a>
															</div>
														</div>
													</div> -->
													<a class="userpage-sidebar-menu-entry" href="/user/voucher-wallet/">
														<div class="userpage-sidebar-menu-entry__icon" style="background-color: rgb(255, 119, 97);"></div>
														<div class="userpage-sidebar-menu-entry__text">Ví Voucher</div>
													</a>
													<!-- <a class="userpage-sidebar-menu-entry" href="/user/coin/">
														<div class="userpage-sidebar-menu-entry__icon" style="background-color: rgb(255, 174, 4);"></div>
														<div class="userpage-sidebar-menu-entry__text">Shopee Xu</div>
													</a> -->
												</div>
											</div>

										</div>

										<div class="col-md-10 woocommerce-MyAccount-content">
											<div class="woocommerce-notices-wrapper">
												<?php $module = isset($_GET['module']) ? $_GET['module'] : 'info';
												include'modules/account/'.$module.'.php';
												?>
											</div>
											

										</div>
									</div>
								</div><!-- .entry-content -->
							</article><!-- #post-## -->
							<div class="row">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
										</div>
									</div>
								</div>
							</div>
						</main><!-- #main -->
					</div><!-- #primary -->
				</div><!-- .col-sm-12 -->

			</div><!-- .row -->
		</div><!-- .container -->
	</div>	<!-- .content-page -->


</div>
<?php include'footer.php'; ?>