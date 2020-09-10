<?php 
	 echo '<pre>';
    print_r($_POST); 
    echo '</pre>';

    if(isset($_POST['bill_name'])){
    	$mem_id = $_POST['mem_id'];
    	$status = 'Chờ xác nhận';
    	$bill_note = isset($_POST['bill_note']) ? $_POST['bill_note'] : '';
    	$bill_delivery = $_POST['bill_delivery'];
    	$bill_payment = $_POST['bill_payment'];
    	$bill_name = $_POST['bill_name'];
    	$bill_phone = $_POST['bill_phone'];
    	$bill_email = $_POST['bill_email'];
    	$bill_address = $_POST['bill_address'];
    	$bill_total = $_POST['bill_total'];

    	$bill_sql = "INSERT INTO orderproduct(mem_id,note,status,deli_id,pay_id,name,phone,email,address,total_money) VALUES('$mem_id','$bill_note','$status','$bill_delivery','$bill_payment','$bill_name','$bill_phone','$bill_email','$bill_address','$bill_total') "; 
    	if($conn->query($bill_sql)){
    		$bill_id = $conn->insert_id;
    	}
    }
?>