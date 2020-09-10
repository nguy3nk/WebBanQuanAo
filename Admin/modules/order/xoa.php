<?php 
$id = isset($_GET['id']) ? $_GET['id'] : 0;

// if (isset($_GET['id'])) {
// 	$id = $_GET['id'];
// }else{
// 	$id = 0;
// }

$sql = "DELETE FROM bill WHERE Bill_id=$id ";
$anh =  "DELETE FROM billdetail WHERE Bill_id=$id";
	mysqli_query($conn,$anh);
if(mysqli_query($conn,$sql)){
	// chuyển hướng

	header('location: index.php?module=order');
}else{
	echo 'Không xóa được';
}
?>