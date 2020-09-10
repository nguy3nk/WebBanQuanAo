<?php 
session_start();


// hủy  session
session_destroy();

// chuyển hướng

header('location: ../../index.php');
 ?>