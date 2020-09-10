<?php

if (isset($_POST['name'])){
	$user_name = $customer->user_name;
	$full_name = $_POST['name'];
	$phone = $_POST['phone'];
	$diachi = $_POST['diachi'];
	$email = $_POST['email'];
	$password = $_POST['pw'];
	$pass_new = $_POST['pw1'];
	$check_pass = $_POST['pw_new'];
	if(($pass_new == $check_pass) && isset($password) && ($password == $customer->password)){
		$sql = "UPDATE member SET full_name = '$full_name',phone = '$phone',address = '$diachi',email = '$email',password = '$pass_new' WHERE user_name = '$user_name'";

				echo "$sql";
		if($conn->query($sql)){
			header('location: my_acc.php?module=info');
		}
	}
}

?>	
<?php if(isset($_SESSION['member_login'])) : ?>
	<section id="login">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="register">
						<h4>Cài đặt người dùng</h4>
						<?php if($customer) { ?>
							<form  action="" method="POST" role="form" name="formdangky"  enctype="multipart/form-data">
								<div class="">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<h5>Họ và tên</h5>
												<input type="text" class="form-control" id="names" name="name" value="<?php echo $customer->full_name; ?>" required="required">
											</div>
											<div class="form-group">
												<h5>Địa chỉ</h5>
												<input type="text" class="form-control" id="dichinh" name="diachi" value="<?php echo $customer->address; ?>" required="required">
											</div>
											<div class="form-group">
												<h5>Điện thoại</h5>
												<input type="text" class="form-control" id="phome" name="phone" value="<?php echo $customer->phone; ?>" required="required">
											</div>
											<div class="form-group">
												<h5>email</h5>
												<input type="email" class="form-control" name="email" value="<?php echo $customer->email; ?>" required="required">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<h5>Tên đăng nhập</h5>
												<input type="text" class="form-control users" id="user" name="user" value="<?php echo $customer->user_name; ?>" disabled="true">
											</div>
											<div class="form-group">
												<h5>Nhập lại mật khẩu</h5>
												<input type="password" class="form-control" id="pw" name="pw" placeholder="*****" required="required">
												<?php if(isset($password) && ($password != $customer->password)) {
													echo '<p class="text-danger">Mật khẩu không trùng khớp</p>';
												}?>											

											</div>
											<div class="form-group">
												<h5>Mật khẩu mới</h5>
												<input type="password" class="form-control" id="pw1" name="pw1" placeholder="*****" required="required">
											</div>
											<div class="form-group">
												<h5>Xác nhận mật khẩu mới</h5>
												<input type="password" class="form-control" id="pw_new" name="pw_new" placeholder="*****" required="required">
												<?php if(isset($pass_new) && $pass_new != $check_pass) {?>											     		<p class="text-danger">Mật khẩu xác nhận không trùng khớp</p>
											<?php } ?> 
										</div>
									</div>
								</div>
							</div>
							<div class="form-group text-center">
								<input type="submit" name="Submit" class="btn btn-button add_users" value="Cập nhật"  onclick="return thaydoi()"/> 
							</div>

						</form>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
<script type="text/javascript">  

	var reg_phome = /^(01[2689]|02[0-9]|09|08)[0-9]{8}/;
	var reg_mane = /^[áàảạãăắằẳẵặâấầẩẫậéèẻẽẹêếềểễệiíìỉĩịóòỏõọôốồổỗộơớờởỡợúùủũụưứừửữựýỳỷỹđĐA-Za-z _]{3,24}$/;
	var reg_password = /^[a-z0-9A-Z]{6,20}/;
	var reg_dichinh = /^[áàảạãăắằẳẵặâấầẩẫậéèẻẽẹêếềểễệiíìỉĩịóòỏõọôốồổỗộơớờởỡợúùủũụưứừửữựýỳỷỹđĐa-z0-9A-Z -]{5,50}/;
	var reg_user = /^[a-z0-9A-Z@._]{6,50}/;
	var reg_email =  /[a-z0-9A-Z._-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
	function thaydoi(){
		var f = document.forms['formdangky'];
		var names = f.names;
		var email = f.email;
		var phome = f.phome;
		var dichinh = f.dichinh;
		var pw1 = f.pw1;
		var pa = f.pw1.value;
		var pa_new = f.pw_new.value;
		var user =  f.user.value;
		var date = f.date;
		
		if(!reg_mane.test (f.names.value)){
			alert("Bạn nhập sai tên");
		}
		if (!reg_dichinh.test (f.dichinh.value)) {
			alert("Bạn nhập sai địa chỉ");
		}
		if (!reg_phome.test (f.phome.value)) {
			alert("Bạn nhập sai số điện thoại");
		}
		if (!reg_email.test (f.email.value)) {
			alert("Bạn nhập sai email");
		}
		if (!reg_password.test (f.pw.value)) {
			alert("Mật khẩu phải có tối thiểu 6 kí tự");
		}
		if (!reg_password.test (f.pw1.value)) {
			alert("Mật khẩu mới phải có tối thiểu 6 kí tự");
		}
	}
</script> 