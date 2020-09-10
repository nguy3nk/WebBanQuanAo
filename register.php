<?php include'header.php'; ?>
<?php 
    $check = false;
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    if(isset($_POST['full_name'])){
        $full_name = $_POST['full_name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $birth_day = $_POST['birth_day'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $taikhoan = $conn->query("SELECT * FROM member WHERE user_name = '$user_name'");
        //$dienthoai = $conn->query("SELECT * FROM member WHERE phone = '$phone'");
        if($taikhoan->rowCount() != 0){
            $thongbao = "Tên đăng nhập";
           // if($dienthoai->rowCount() != 0) $thongbao = "Số điện thoại";
                echo '<script>
        alert("'.$thongbao.' này đã có người dùng. Vui lòng chọn tên đăng nhập khác"); </script>'; 
        } else
        $reg_user = "INSERT INTO member(full_name,address,phone,birth_day,gender,email,user_name,password) VALUES('$full_name','$address','$phone','$birth_day','$gender','$email','$user_name','$password')";
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
                                        <span>Register</span>
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
            <div class="col-md-12">
                <div class="register">
                    <h4>Đăng kí</h4>
            
                    <form  action="" method="post" role="form" name="formdangky"  enctype="multipart/form-data">
                        <div class="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Họ và tên</h5>
                                        <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Họ và tên" required="required">
                                    </div>
                                    <div class="form-group">
                                        <h5>Địa chỉ</h5>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Địa chỉ" required="required">
                                    </div>
                                    <div class="form-group">
                                        <h5>Điện thoại</h5>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Điện thoại" required="required">
                                    </div>
                                        <div class="form-group">
                                    <div class="row">
                                            <div class="col-md-6" >
                                            <h5>Ngày sinh</h5>
                                            <input type="date" class="form-control" id="birth_day" name="birth_day" placeholder="Ngày sinh" required="required">
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Giới tính </h5>
                                             <select name="gender" id="gender" class="form-control" required="required"> 
                                                <option value="0">Nam</option>
                                                <option value="1">Nữ</option> 
                                            </select>
                                        </div>
                                    </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Email</h5>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required">
                                    </div>
                                    <div class="form-group">
                                        <h5>Tên đăng nhập</h5>
                                        <input type="text" class="form-control users" id="user_name" name="user_name" placeholder="Tên đăng Nhập" required="required">
                                    </div>
                                    <div class="form-group">
                                        <h5>Mật khẩu</h5>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="*****" required="required">
                                    </div>
                                    <div class="form-group">
                                        <h5>Nhập lại Mật khẩu</h5>
                                        <input type="password" class="form-control" id="password2" name="password2" placeholder="*****" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="form-group text-center form-field-wrapper">
                             <!-- <button >Đăng kí</button>  -->                      
                            <input type="submit" name="Submit" class="submit btn btn-md btn-color" value="Đăng kí "  onclick="return dangky()"/> 
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
<script type="text/javascript">  

    var today = new Date().toISOString().split('T')[0];
    console.log(today);
        document.getElementsByName("birth_day")[0].setAttribute('max', today);
    var reg_phone = /^(01[2689]|02[0-9]|09|08)[0-9]{8}/;
    var reg_name = /^[áàảạãăắằẳẵặâấầẩẫậéèẻẽẹêếềểễệiíìỉĩịóòỏõọôốồổỗộơớờởỡợúùủũụưứừửữựýỳỷỹđĐA-Za-z _]{3,24}$/;
    var reg_password = /^[a-z0-9A-Z]{6,20}/;
    var reg_address = /^[áàảạãăắằẳẵặâấầẩẫậéèẻẽẹêếềểễệiíìỉĩịóòỏõọôốồổỗộơớờởỡợúùủũụưứừửữựýỳỷỹđĐa-z0-9A-Z -]{5,50}/;
    var reg_user_name = /^[a-z0-9A-Z@._]{6,50}/;
    var reg_email =  /[a-z0-9A-Z._-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
    function dangky(){
        var f = document.forms['formdangky'];
        var full_name = f.full_name;
        var email = f.email;
        var phone = f.phone;
        var address = f.address;
        var password = f.password;
        var pa = f.password.value;
        var pa1 = f.password1.value;
        var user_name =  f.user_name.value;
        var date = f.date;
        
        if(!reg_name.test (f.full_name.value)){
            alert("bạn Nhập sai tên");
            return false;
        }
        if (!reg_address.test (f.address.value)) {
            alert("bạn Nhập sai địa chỉ");
            return false;
        }
        if (!reg_phone.test (f.phone.value)) {
            alert("bạn Nhập sai số điện thoại");
            return false;
        }
        if (!reg_email.test (f.email.value)) {
            alert("bạn Nhập sai email");
            return false;
        }
        if (!reg_user_name.test (f.user_name.value)) {
            alert("Nhập sai định dạng tài khoản. Vui lòng nhập lại.");
            return false;
        }
        if (!reg_password.test (f.password.value)) {
            alert("yêu cầu bạn Nhập mật khẩu");
            return false;
        }
        if (pa != pa1) {
            alert("bạn xác nhận sai mật khẩu");
            return false;

        // }else{
                    
                        
        //                 $.ajax({
        //                     url:'handle_register.php',
        //                     type:'POST',
        //                     dataType:'json',
        //                     data:{
        //                         name:$('#full_name').val(),
        //                         phone:$('#phone').val(),
        //                         address:$('#address').val(),
        //                         date:$('#date').val(),
        //                         gender:$('#gender').val(),
        //                         email:$('#email').val(),
        //                         user_name:$('#user_name').val(),
        //                         password:$('#password').val()
        //                     },
        //                     success:function(res) {
        //                         console.log(res);
        //                         alert (res.mesg);
        //                     }
        //                 });
                    

            
        //     // 
        // }
    }


      
</script> 
<?php
     if(isset($_POST['full_name'])){ 
    if($conn->query($reg_user)){
         echo '<script>
                Swal.fire("Đăng kí thành công!","Tài khoản: '.$user_name.'","success");
            </script>;'; 
          $check =true;
        }else{
           echo '<script>
                Swal.fire("Đăng kí không thành công!","Tài khoản: '.$user_name.'","warning");
                setTimeout(function(){
                    location.assign("http://localhost/Philos/register.php");
                },1000)
            </script>;';
        }
    }
    if ($check) {
        header('location: register.php');
    }
 ?>
          