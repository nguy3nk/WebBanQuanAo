<?php 
	echo $cus_id = $customer->id;
	$action1 = isset($_GET['action']) ? $_GET['action'] : 'dangxuli'; 
	$trangthai;
	switch ($action1) {
		case 'dangxuli':
			$action = 1;
			$trangthai="Đang xử lí";
			break;
		case 'danggiao':
			$action = 2;
			$trangthai="Đang giao";
			break;
		case 'dagiao':
			$action = 3;
			$trangthai="Đã giao";
			break;
		case 'dahuy':
			$action = 4;
			$trangthai="Đã hủy";
			break;
	}
	$bill = $conn->query("SELECT * FROM  orderproduct WHERE member_id = $cus_id AND status =$action ORDER BY created desc");
?>
<div class="purchase-list-page__order-list-card-container">
			<?php foreach ($bill as $bi) :?>
			<div class="purchase-list-page__order-card-wrapper">
				<div class="order-card__container">
					<div class="order-card__content-wrapper">
						<div class="order-card__content">
							<div class="order-content__container">
								<div class="order-content__header">
									<div class="order-content__header__seller">
										<div class="shopee-avatar">
											<div class="shopee-avatar__placeholder">
											</div>
											<img class="shopee-avatar__img" src="https://cf.shopee.vn/file/875e8c4277baaa2de8b64df694edd1bf_tn">
										</div>
										<span class="order-content__header__seller__name">homiessaigon</span>
										<div class="order-content__header__seller__chat-btn">
											<button class="shopee-button-solid shopee-button-solid--complement "> chat</button>
										</div>
										<a class="order-content__header__seller__view-shop-btn-wrapper" href="/shop/149670512/">
											<div class="order-content__header__seller__view-shop-btn">
												<button class="shopee-button-outline shopee-button-outline--normal ">xem shop</button>
											</div>
										</a>	
									</div>
									<div class="order-content__header__flex-placeholder">
									</div>
									<div class="order-delivery-status__wrapper">
									</div>
									<div class="order-content-status"><?php echo $trangthai; ?>
									</div>
								</div>
								<?php 
									$bill_detail = $conn->query("SELECT * FROM order_detail WHERE ord_id = $bi->id;");
									foreach ($bill_detail as $b) : 
									$pro_dt = $conn->query("SELECT * FROM product WHERE id = $b->pro_id")->fetch();
								?>
								<div class="order-content__item-list">
									<a class="order-content__item-wrapper" href="/user/purchase/order/1484838464/?shopid=149670512">
										<div class="order-content__item order-content__item--last">
											<div class="order-content__item__col order-content__item__detail">
												<div class="order-content__item__product">
													<div class="order-content__item__image">
														<div class="shopee-image__wrapper">
															<div class="shopee-image__place-holder">
															</div>
															
															<div class="shopee-image__content" ><img style="width: 80px;height: 80px;" class="img-responsive" src="uploads/product/<?php echo $pro_dt->img; ?>">
																<div class="shopee-image__content--blur"> 
																</div>
															</div>
														</div>
													</div>
													<div class="order-content__item__detail-content">
														<div class="order-content__item__name"><?php echo $pro_dt->name; ?></div>
														<div class="order-content__item__variation">Phân loại hàng: Đen,Freesz dưới 65kg
														</div>
														<div class="order-content__item__quantity">x <?php echo $b->quantity; ?>
														</div>
													</div>
												</div>
											</div>
											<div class="order-content__item__price order-content__item__col order-content__item__col--small order-content__item__col--last">
												<div class="order-content__item__price-text">
													<div class="">$<?php echo $b->price; ?>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
							<?php endforeach; ?>
							</div>
						</div>
						<div class="shopee-border-bottom-dotted-circle__container">
							<div class="shopee-border-bottom-dotted-circle__circle shopee-border-bottom-dotted-circle__circle--left"> 
							</div>
							<div class="shopee-border-bottom-dotted-circle__circle shopee-border-bottom-dotted-circle__circle--right"> 
							</div>
						</div>
					</div>
					<div class="order-card__buttons-container">
						<div class="purchase-card-buttons__wrapper">
							<div class="purchase-card-buttons__total-payment">
								<div class="shopee-guarantee-icon purchase-card-buttons__shopee-guarantee-icon">
								</div>
								<span class="purchase-card-buttons__label-price"> Tổng số tiền: </span>
								<span class="purchase-card-buttons__total-price"> $<?php echo $bi->total_money; ?></span>
							</div>
							<div class="purchase-card-buttons__container">
								<?php if($action == 4): ?>
								<div class="purchase-card-buttons__text-info">
									<span class="purchase-text-info">
									<span>Bạn đã hủy</span></span>
								</div>
							<?php endif; ?>
								<div class="purchase-card-buttons__show-button-wrapper"><button class="shopee-button-solid shopee-button-solid--fill shopee-button-solid--primary ">
									<span class="purchase-card-buttons__button-content"> Chi tiết </span></button>
								</div>
								<?php if($action == 4): ?>
								<div class="purchase-card-buttons__show-button-wrapper"><button class="shopee-button-outline shopee-button-outline--fill shopee-button-outline--primary ">
									<span class="purchase-card-buttons__button-content"> Mua lần nữa </span></button>
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		</div>