<?php include'header.php'; ?>

<?php 

    $payment = $conn->query("SELECT * FROM payment");
    $delivery = $conn->query("SELECT * FROM delivery");
?>
<?php 

    if(isset($_POST['bill_name'])){
        $mem_id = $_POST['mem_id'];
        $status = '1';
        $bill_note = isset($_POST['bill_note']) ? $_POST['bill_note'] : '';
        $bill_delivery = $_POST['bill_delivery'];
        $bill_payment = $_POST['bill_payment'];
        $bill_name = $_POST['bill_name'];
        $bill_phone = $_POST['bill_phone'];
        $bill_email = $_POST['bill_email'];
        $bill_address = $_POST['bill_address'];
        $bill_total = $_POST['bill_total'];


        $bill_sql = "INSERT INTO orderproduct(member_id,note,status,deli_id,pay_id,name,phone,email,address,total_money) VALUES('$mem_id','$bill_note','$status','$bill_delivery','$bill_payment','$bill_name','$bill_phone','$bill_email','$bill_address','$bill_total')"; 
        echo $bill_sql;
        $add_bill = $conn->query($bill_sql);
        $bill_id = $conn->lastInsertId();
        foreach ($pro_cart as $pro) {
            $pro_id = $pro['id'];
            $pro_quantity = $pro['quantity'];
            $pro_price = $pro['price'];
            $bill_detail = "INSERT INTO order_detail(pro_id,quantity,price,ord_id) VALUES('$pro_id','$pro_quantity','$pro_price','$bill_id')";
            echo '<br>';
            echo $bill_detail;
            $add_bill_detail= $conn->query($bill_detail);
        }
        session_destroy();
        header('location:index.php');
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
                                <span>Checkout</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Bread Crumb -->

            <!-- Page Content -->
            <section class="content-page">
                <div class="container mb-80">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php  if(!$customer): ?>
                            <article class="post-8">
                                <p class="checkout-info">
                                    Đã có tài khoản? <strong><a href="login-register.php">Đăng nhập</a></strong>
                                </p>
                                <p class="checkout-info">
                                    Chưa có tài khoản? <strong><a href="register.php">Đăng kí</a></strong>
                                </p>
                            <?php  else: ?>
                 <form class="product-checkout mt-45" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Thông tin người nhận hàng</h3>
                            <div class="row">
                                    <div class="form-field-wrapper form-center col-sm-12">
                                    <label for="full_name" class="left">Họ và tên
                                    </label>
                                        <input id="full_name" class="input-md form-full-width" name="bill_name" title="Full Name" value="<?php echo $customer->full_name; ?>" placeholder="Nhập họ và tên" type="text">
                                         <input name="mem_id" value="<?php echo $customer->id; ?>" type="hidden" />
                                    </div> 
                                    <div class="form-field-wrapper form-center col-sm-12">
                                    <label for="bill_address" class="left">Địa chỉ giao hàng<abbr class="form-required" title="required">*</abbr>
                                    </label>
                                        <input id="bill_address" class="input-md form-full-width mb-20" name="bill_address" title="Address" value="<?php echo $customer->address; ?>" placeholder="Nhập địa chỉ" type="text" required="" aria-required="true">
                                    </div>
                                  <div class="form-field-wrapper form-center col-sm-6">
                                        <label for="bill_phone" class="left">Điện thoại<abbr class="form-required" title="required">*</abbr></label>
                                      <input class="input-md form-full-width" name="bill_phone" title="phone" value="<?php echo $customer->phone; ?>" placeholder="Nhập số điện thoại" type="tel" required="" aria-required="true">
                                 </div>
                                 <div class="form-field-wrapper form-center col-sm-6">
                                      <label for="bill_email" class="left">Email<abbr class="form-required" title="required">*</abbr></label>
                                    <input class="input-md form-full-width" name="bill_email" title="Enter Email" value="<?php echo $customer->email; ?>" placeholder="Nhập địa chỉ email" type="email" required="" aria-required="true">
                                </div>
                                <div class="form-field-wrapper form-center col-sm-12">
                                    <label for="bill_delivery" class="left">Hình thức vận chuyển<abbr class="form-required" title="">*</abbr>
                                    </label>
                                    <select name="bill_delivery" id="bill_delivery" class="input-md form-full-width" autocomplete="country" tabindex="-1" aria-hidden="true" aria-required="true" required="">
                                        <option value="">Chọn cách vận chuyển…</option>
                                        <?php foreach ($delivery as $deli) : ?>
                                            <option value="<?php echo $deli->id;?>"><?php echo $deli->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-field-wrapper form-center col-sm-12">
                                    <label for="bill_payment" class="left">Phương thức thanh toán<abbr class="form-required" title="required">*</abbr>
                                    </label>
                                    <select name="bill_payment" id="bill_payment" class="input-md form-full-width" autocomplete="country" tabindex="-1" aria-hidden="true" aria-required="true" required="">
                                        <option value="">Chọn cách thanh toán…</option>
                                        <?php foreach ($payment as $pay) : ?>
                                            <option value="<?php echo $pay->id;?>"><?php echo $pay->name;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                 <div class="form-field-wrapper form-center col-sm-12">
                                    <label for="bill_note" class="left">Ghi chú<abbr class="form-required" title="required">*</abbr>
                                    </label>
                                        <textarea  id="bill_note" class="input-md form-full-width mb-20" name="bill_note" title="Address" value="" placeholder="Nhập ghi chú..." type="textarea"></textarea>
                                </div>
                            </div>
                            <!--  <div class="form-field-wrapper form-center col-sm-12">
                                    <label for="bill_email" class="left">
                                    <input class="" id="createaccount" name="createaccount" value="1" type="checkbox" />
                                    <span>Create an account?</span></label>
                            </div> -->
                        </div>
                                <div class="col-md-6">
                                    <div class="checkout-order-review">
                                        <h3>Đơn hàng</h3>
                                        <div id="order_review" class="woocommerce-checkout-review-order product-checkout-review-order" style="font-size: 18px">
        <table class="shop_table woocommerce-checkout-review-order-table" >
                                                <table class="">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-name">Sản phẩm</th>
                                                            <th class="product-total">Thành tiền</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($pro_cart as $pro) :?>
                                                        <tr class="cart_item">
                                                            <td class="product-name">
                                                                <div class="col-md-10"><?php echo $pro['name']; ?><strong></div> x <?php echo $pro['quantity']; ?></strong></td>
                                                            <td class="product-total">
                                                                <span class="product-price-amount amount"><span class="currency-sign">$</span><?php echo $pro['quantity']*$pro['price']; ?></span>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr class="cart-subtotal">
                                                            <th>Tổng giá sản phẩm</th>
                                                            <td>
                                                                <strong><span class="product-price-amount amount"><span class="currency-sign">$</span><?php echo money(); ?></span></strong>
                                                            </td>
                                                        </tr>
                                                        <tr class="shipping">
                                                            <th>Phí ship</th>
                                                            <td>
                                                                <ul id="shipping_method">
                                                                    <li>
                                                                        <input name="shipping_method[0]" data-index="0" id="shipping_method_0_legacy_flat_rate" value="legacy_flat_rate" class="shipping_method" checked="checked" type="radio">
                                                                        <label for="shipping_method_0_legacy_flat_rate">Flat Rate: <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>0</span></label>
                                                                    </li>
                                                                    <li>
                                                                        <input name="shipping_method[0]" data-index="0" id="shipping_method_0_legacy_free_shipping" value="legacy_free_shipping" class="shipping_method" type="radio">
                                                                        <label for="shipping_method_0_legacy_free_shipping">Free Shipping</label>
                                                                    </li>
                                                                    <li>
                                                                        <input name="shipping_method[0]" data-index="0" id="shipping_method_0_legacy_local_delivery" value="legacy_local_delivery" class="shipping_method" type="radio">
                                                                        <label for="shipping_method_0_legacy_local_delivery">Local Delivery</label>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <th>Total</th>
                                                            <td>
                                                                <span class="product-price-amount amount"><span class="currency-sign">$</span><?php echo money(); ?></span>
                                                                 <input name="bill_total" value="<?php echo money(); ?>" type="hidden" />
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>


                                            <div class="product-checkout-payment">
                                                <ul>
                                                  
                                                </ul>
                                                <div class="place-order">
                                                    <button class="btn btn-lg btn-color form-full-width" type="submit"><a href="#">Place Order</a></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    <?php  endif; ?>
                    </article>
                </div>
            </div>
        </div>

    </section>
<!-- End Page Content -->
<?php
// $querys = "SELECT * FROM product p JOIN billdetail b ON p.ProductId = b.ProductId join bill bi on b.Bill_id = bi.Bill_id";
// $sanphan = mysqli_query($conn,$querys);
// $san = mysqli_fetch_assoc($sanphan);

$t = 0;
if (isset($_POST['bill_name'])) {
    $tieude = 'Cửa hàng thời trang Philos';
    $name = $_POST['bill_name'];
    $phone = $_POST['bill_phone'];
    $Address = $_POST['bill_address'];
    $email = $_POST['email'];
    $noidung = $_POST['bill_note'];
    $t = number_format($_POST['bill_total']);
                        

    $noidung01 = '<p><strong>Quý khách đã đặt hàng thành công</stong></p>
    <p><strong>Thông tin liên hệ</stong></p>
    <p>Họ tên: '.$name.'</p>
    <p>email: '.$email.'</p>
    <p>số điện thoại: '.$phone.'</p>
    <p>địa chỉ: '.$Address.'</p>
    <p>Nội dung: '.$noidung.'</p>
    <p><strong>Đơn hàng</stong></p>
    <p><table border="1" >
    <tr>
        <th style="width: 5%;">STT</th>
        <th style="width: 25%;">Tên sản phẩm</th>
        <th style="width: 15%;">Đơn giá</th>
        <th style="width: 10%;">Số lượng</th>
        <th style="width: 15%;">Thành tiền</th></tr>';
    $stt = 1;
     foreach ($pro_cart as $bill) {

        $tensp =  $bill['name'];
        $dongia = number_format($bill['price']);
        $sl = $bill['quantity'];
        $tt = number_format(($bill['price'])*($bill['quantity']));
        
        $noidung01 .='<tr>
            <td>'.$stt.'</td>
            <td>'.$tensp.'</td>
            <td>'.$dongia.'<sup><u>đ</u></sup></td>
            <td>'.$sl.'</td>
            <td>'.$tt.'<sup><u>đ</u></sup></td>
            </tr>';
        $stt ++;
    }

    $noidung01 .='<tr>
        
        <td colspan="3"></td>
        <td >Tổng cộng:</td>
        <td colspan="2" >
            '.$t.'<sup><u>đ</u></sup>
        </td>
        
    </tr>
</table></p>';
    
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'smtpmail/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debuggingh
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
$mail->CharSet  = "utf-8";
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "nguy4nk@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "khanhdaica";

//Set who the message is to be sent from
$mail->setFrom('nguy4nk@gmail.com', 'Khanh');

//Set an alternative reply-to address
$mail->addReplyTo('nguy4nk@gmail.com', 'Khanh');

//Set who the message is to be sent to
$mail->addAddress($email, $name);

//Set the subject line
$mail->Subject = $tieude;

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
 $mail->msgHTML($noidung01);

//Replace the plain text body with one created manually
// $mail->AltBody = 'This is a plain-text message body';

//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo '<p style="margin-left: 800px;font-size: 16px;color: red;">Bạn đặt hàng không thành công !</p>';
} else {
    echo "Bạn đã đặt hàng thành công";
    unset($_SESSION['cart']);
    header('location: bill.php');
}
}
?>
</div>
<!-- End Page Content Wraper -->

<!-- Footer Section -------------->
<?php include'footer.php'; ?>