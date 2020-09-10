<?php 
	session_start();
	include 'database/connect.php';
	$id = isset($_GET['id']) ? $_GET['id'] : 0;	
	$action = isset($_GET['action']) ? $_GET['action'] : 'add';	
	$size = isset($_GET['size']) ? $_GET['size'] : '';
	$color = isset($_GET['color']) ? $_GET['color'] : '';
	$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : 1;
	$quantity = is_numeric($quantity) ? $quantity :1;
	$quantity = $quantity> 0 ? $quantity :1;
	$quantity = ceil($quantity);
	$pro = $conn->query("SELECT * FROM product WHERE id = $id")->fetch();
	if($id)
	$price = ($pro->sale_price>0) ? $pro->sale_price : $pro->price;
	
	switch ($action) {
		case 'add':
			if($pro){
				if(isset($_SESSION['cart_bag'][$id])){
					$_SESSION['cart_bag'][$id]['quantity'] +=$quantity;
				} else{
					$_SESSION['cart_bag'][$id] = [
						'id' => $pro->id,
						'name' => $pro->name,
						'img' => $pro->img,
						'price' => $price,
						'quantity' => $quantity
					];
				}
			}
			echo "<pre>";
			print_r($_SESSION);
			echo "</pre>";
			break;
		case 'delete':
			if (isset($_SESSION['cart_bag'][$id])) {
				unset($_SESSION['cart_bag'][$id]);
			}
			break;
		case 'update_id':
			if (isset($_SESSION['cart_bag'][$id])) {
				$_SESSION['cart_bag'][$id]['quantity'] += $quantity;
			} else{
				$_SESSION['cart_bag'][$id] = [
					'id' => $pro->id,
					'name' => $pro->name,
					'img' => $pro->img,
					'price' => $price,
					'quantity' => $quantity
				];
			}
			break;				
		case 'update_all':
			foreach ($_POST['id'] as $key => $id) {
				if(isset($_SESSION['cart_bag'][$id])){
					$_SESSION['cart_bag'][$id]['quantity'] = $_POST['quantity'][$key];
				}
			}
			break;
		case 'delete_all':
			session_destroy();
			break;
			default:
				# code...
				break;
		}
	 header('location: cart.php');

?>