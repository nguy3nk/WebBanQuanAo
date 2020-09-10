<?php 
session_start();


// hủy  session
session_destroy();

// chuyển hướng

header('location: login.php');
 ?>