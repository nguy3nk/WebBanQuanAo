<?php 
$id = isset($_GET['id']) ? $_GET['id'] : 0;

$sql = "DELETE FROM news WHERE id = $id";

if(mysqli_query($conn,$sql)){
	header('location: index.php?module=news');
}
else{
	echo "Xóa không thành công";
}
?>