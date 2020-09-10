<?php 
session_start(); 
include '../database/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<!--===============================================================================================-->

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/login.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-26">
						Đăng nhập
					</span>
					<span class="login100-form-title p-b-48">

					</span>
					<?php 
							// xử lý đăng nhập
							//1 lấy dữ liệu trên form

							//2 kiểm tra dữ liệu nhập vào trên form có trùng với dữ liệu trong bảng admin

							// nếu đúng thì lưu vào $_SESSION và chuyển hướng tới trang index của admin

							// nếu sai thì thông báo

							if (isset($_POST['email'])) {
								$email = $_POST['email'];
								$pass = md5($_POST['pass']);
								// echo $pass;

								$sql = "SELECT * FROM admin WHERE email = '$email' AND password='$pass'";
								$res = $conn->query($sql); // trả về đối tượng hoặc là false
								// echo '<pre>';
								print_r($res->rowCount());
								// var_dump($res);
								if ($res->rowCount() == 1) {
									//$admin = mysqli_fetch_assoc($res);
									$admin = $res->fetch();
									$_SESSION['admin_login1'] = $admin;
									header('location: index.php');
									// var_dump($admin);
								}else{
									echo "<script>alert('Tài khoản không tồn tại')</script>";
								}
								// echo '</pre>';
							}
							?>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c"><h4>Email</h4>
						<input class="input100" type="text" name="email">
						
						<span class="focus-input100" ></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<h4>Mật khẩu</h4>
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" ></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Đăng nhập
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Bạn chưa có tài khoản?
						</span>

						<a class="txt2" href="#">
						Đăng ký

						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

</body>
</html>