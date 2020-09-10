<?php 
$id = isset($_GET['id']) ? $_GET['id'] : 0;

// if (isset($_GET['id'])) {
// 	$id = $_GET['id'];
// }else{
// 	$id = 0;
// }

$sql =  "DELETE FROM banner WHERE id=$id";
if($conn->query($sql)){
	// chuyển hướng

	header('location: index.php?module=banner');
}else{
	echo 'Không xóa được';
}
?>