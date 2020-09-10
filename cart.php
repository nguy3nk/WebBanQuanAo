<?php include'header.php'; ?>
<?php 
   
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
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
                        <span>Cart</span>
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
    <article class="post-8">
        <form class="cart-form" action="process_cart.php?&action=update_all" method="post">
            <div class="cart-product-table-wrap responsive-table">
                <table>
                    <thead>
                        <tr>
                            <th class="product-remove"></th>
                            <th class="product-thumbnail"></th>
                            <th class="product-name">Product</th>
                            <th class="product-price">Price</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-subtotal">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pro_cart as $pro):?>
                        <tr>
                            <td class="product-remove">
                                <a href="process_cart.php?id=<?php echo $pro['id'];?>&action=delete" onclick="return confirm('Bạn có chắc muốn xóa không ?')"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                            </td>
                            <td class="product-thumbnail">
                                <a>
                                    <img src="uploads/product/<?php echo $pro['img']; ?>" alt="" /></a>
                                </td>
                                <td class="product-name">
                                    <a><?php echo $pro['name']; ?></a>
                                </td>
                                <td class="product-price">
                                    <span class="product-price-amount amount"><span class="currency-sign">$</span><?php echo $pro['price']; ?></span>
                                </td>
                                <td>
                                    <div class="product-quantity" id="quantity">
                                        <span data-value="+" class="quantity-btn quantityPlus"></span>
                                        <input class="quantity input-lg" step="1" min="1" max="99" name="quantity[]" value="<?php echo $pro['quantity']; ?>" title="Quantity" type="number" />
                                        <input name="id[]" value="<?php echo $pro['id']; ?>" type="hidden" />
                                        <span data-value="-" class="quantity-btn quantityMinus"></span>
                                    </div>
                                </td>
                                <td class="product-subtotal">
                                    <span class="product-price-sub_totle amount"><span class="currency-sign">$</span><?php echo number_format(($pro['price'])*($pro['quantity'])); ?></span>
                                </td>
                            </tr>
                           <?php endforeach; ?> 
                            </tbody>
                        </table>
                    </div>
                    <div class="row cart-actions">
                        <div class="col-md-6">
                            <div class="coupon">
                                <input class="input-md" id="coupon_code" name="coupon_code" title="Coupon Code" value="" placeholder="Enter Coupon Code" type="text">
                                <input class="btn btn-md btn-black" name="coupon_code" value="Apply Coupon" type="submit" />
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <input class="btn btn-md btn-gray update-cart" name="update_cart" value="Update cart" type="submit">
                        </div>
                    </div>
                </form>
                <div class="cart-collateral">
                    <div class="cart_totals">
                        <h3>Cart totals</h3>
                        <div class="responsive-table">
                            <table>
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td><span class="product-price-amount amount"><span class="currency-sign">$</span><?php  echo money(); ?></span></td>
                                    </tr>
                                    <tr class="shipping">
                                        <th>Shipping</th>
                                        <td>
                                            <ul id="shipping_method">
                                                <li>
                                                    <input name="shipping_method[0]" data-index="0" id="shipping_method_0_legacy_flat_rate" value="legacy_flat_rate" class="shipping_method" checked="checked" type="radio">
                                                    <label for="shipping_method_0_legacy_flat_rate">Flat Rate: <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>12.00</span></label>
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
                                            <form>
                                                <p>
                                                    <a href="#">Calculate shipping</a>
                                                </p>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td><span class="product-price-amount amount"><span class="currency-sign">$</span>1009.00</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="product-proceed-to-checkout">
                            <a class="btn btn-lg btn-color form-full-width" href="checkout.php">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </article>
                        </div>
                    </div>
                </div>

            </section>
            <!-- End Page Content -->

        </div>
        <!-- End Page Content Wraper -->

        <!-- Footer Section -------------->

<script type="text/javascript">
    $(document).ready(function() {
    $('.update-cart').click(function(e) {
         e.preventDefault();
        var url = $(this).attr('href');
        // alert('Bạn thêm sản phẩn vào giỏ hàng thành công');
        $.ajax({
            url:url,
            type:'POST',
            // dataType:'json',
            success:function(res) {
        });
    });
    
    
});
</script>
        <?php include'footer.php'; ?>