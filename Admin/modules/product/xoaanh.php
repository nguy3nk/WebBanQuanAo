<?php 
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$pro_id = isset($_GET['pro_id']) ? $_GET['pro_id'] : 0;

// if (isset($_GET['id'])) {
// 	$id = $_GET['id'];
// }else{
// 	$id = 0;
// }
$sql = $conn->query("SELECT * FROM product WHERE id = $id ");



$anh =  "DELETE FROM product_img WHERE id=$id";
 $a = $sql->fetch();
 $b =$a->id;
 
if($conn->query($anh)){
	// chuyển hướng

	  header('location: index.php?module=product&action=sua&id='.$pro_id);
 }

?>