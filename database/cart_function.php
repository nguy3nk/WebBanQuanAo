<?php 
	function quantity()
	{
		$total = 0;
			$cart = isset($_SESSION['cart_bag']) ? $_SESSION['cart_bag'] : [];
			foreach ($cart as $ca) {
				$total = $total + $ca['quantity'];
			}

		return $total;
	}
	function money() 
	{
		$money = 0;
			$cart = isset($_SESSION['cart_bag']) ? $_SESSION['cart_bag'] : [];
			foreach ($cart as $ca) {
				$money = $money + ($ca['price'])*($ca['quantity']);
			}

		return $money;
	}
 ?>