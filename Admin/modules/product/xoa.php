<?php 
$id = isset($_GET['id']) ? $_GET['id'] : 0;

// if (isset($_GET['id'])) {
// 	$id = $_GET['id'];
// }else{
// 	$id = 0;
// }

$sql = "DELETE FROM product WHERE id=$id ";
$anh =  "DELETE FROM product_img WHERE pro_id=$id";
	$conn->query($anh);
if($conn->query($sql)){
	// chuyển hướng

	header('location: index.php?module=product');
}else{
	echo 'Không xóa được';
}
?>