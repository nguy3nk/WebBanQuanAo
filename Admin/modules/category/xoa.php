<?php 
$id = isset($_GET['id']) ? $_GET['id'] : 0;

$sql = "DELETE FROM category WHERE id=$id";

if($conn->query($sql)){
	header('location: index.php?module=category');
}
else{
	echo "Xóa không thành công";
}
?>