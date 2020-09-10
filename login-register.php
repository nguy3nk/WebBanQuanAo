<?php include'header.php'; ?>
<?php 
    if(isset($_POST['user_name'])){
        $user = $_POST['user_name'];
        $pass = $_POST['password'];
        $sign_in = $conn->query("SELECT * FROM member WHERE user_name='$user' AND password='$pass'");
        if($sign_in->rowCount()==1){
            $customer = $sign_in->fetch();
            $_SESSION['member_login'] = $customer;
            header('location:index.php');
        } else{
            echo "<script>alert('Mật khẩu không chính xác hoặc tài khoản không tồn tại')</script>";
        }
    }
?>
<!-- Page Content Wraper -->
<div class="page-content-wraper">
    <!-- Bread Crumb -->
    <section class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="breadcrumb-link">
                        <a href="#">Home</a>
                        <span>Login & Register</span>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Bread Crumb -->

    <!-- Page Content -->
    <section class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-border-box">
                        <form method="POST">
                            <h2 class="normal"><span>Đăng nhập</span></h2>
                            
                            <div class="form-field-wrapper">
                                <label>Email hoặc điện thoại <span class="required">*</span></label>
                                <input id="author-email" class="input-md form-full-width" name="user_name" placeholder="Enter Your Email Address" value="" size="30" aria-required="true" required="" type="email">
                            </div>
                            <div class="form-field-wrapper">
                                <label>Mật khẩu <span class="required">*</span></label>
                                <input id="author-pass" class="input-md form-full-width" name="password" placeholder="Enter Your Password" value="" size="30" aria-required="true" required="" type="password">
                            </div>
                            <div class="form-field-wrapper">
                                <input name="submit" id="submit" class="submit btn btn-md btn-black" value="Đăng nhập" type="submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-border-box">
                        <form>
                            <h2 class="normal"><span>New Customers</span></h2>
                            <p>Lorem ipsum dolor amet, conse adipiscing, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="form-field-wrapper">
                                <a href="register.php" title=""><input name="submit" id="submit1" class="submit btn btn-md btn-color" value="Create An Account" type="button"></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Content -->

</div>
<!-- End Page Content Wraper -->

<!-- Footer Section -------------->
<?php include'footer.php'; ?>