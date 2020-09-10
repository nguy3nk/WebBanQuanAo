<?php 
	$action1 = isset($_GET['action']) ? $_GET['action'] : 'dangxuli'; 
	$tthai = array(
	 	 array('name' => 'Đang xử lí' ,
	 	 		'action' => 'dangxuli',
	 	 ),
	 	 array('name' => 'Đang giao' ,
	 	 		'action' => 'danggiao',
	 	 ),
	 	 array('name' => 'Đã giao' ,
	 	 		'action' => 'dagiao',
	 	 ),
	 	 array('name' => 'Đã hủy' ,
	 	 		'action' => 'dahuy',
	 	 ),	
	);
?>
<style type="text/css">.orders{width: 100% !important; height: 100% !important; box-sizing: border-box !important;}</style>
<div class="user-page__content orders">
	<div role="main" >
		<div class="purchase-list-page__tabs-container">	
			<?php foreach ($tthai as $key => $aaa) : ?>
			<div class="purchase-list-page__tab <?php if ($action1 == $aaa['action']) echo 'purchase-list-page__tab--selected';?> purchase-list-page__tab--has-count">	
				<a href="my_acc.php?module=orders&action=<?php echo $aaa['action']; ?>">
					<span class="purchase-list-page__tab-label"><?php echo $aaa['name']; ?></span>
					<span class="purchase-list-page__tab-count">
						<?php $k =$key+1; $count1 = $conn->query("SELECT count(*) FROM orderproduct WHERE status = $k")->fetch()->{"count(*)"};
							if($count1) echo '('.$count1.')';
						?>		
					</span>
				</a>
			</div>
		<?php endforeach; ?>
		</div>
		<?php include 'xuli_order.php'; ?>
		<div>
			<div class="spinner-container">
				<div class="stardust-spinner">
					<div class="stardust-spinner__background stardust-spinner__background--no-overlay">
						<div class="stardust-spinner__main">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
