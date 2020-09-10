<?php 
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$sanphan = $conn->query("SELECT p.name,p.img,b.price,b.quantity FROM product p JOIN order_detail b ON p.id = b.pro_id WHERE b.ord_id=$id");
$info_cus = $conn->query("SELECT * FROM orderproduct WHERE id = $id")->fetch(); 
  //  if (isset($_GET['status'])) {
  //       $status = $_GET['status'];
  //  $chapnhansp = $conn->query("UPDATE orderproduct SET status='$status'  WHERE id=$id");
  // }
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Quản lý
    <small>đơn Hàng</small>
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Chi tiên đơn hàng</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="them">

        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table class="table table-hove table-bordered">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>tên món</th>
                  <th>Ảnh</th>
                  <th>Đơn giá </th>
                  <th>Số lượng</th>
                  <th>Thành tiền</th>
                </tr>
              </thead>
              <tbody>
                <?php $K=1; foreach ($sanphan as $san) { ?>
                  <tr>
                    <td><?php echo $K;?></td>
                    <td><?php echo $san->name; ?></td>
                    <td><img class="img-responsive" src="../uploads/product/<?php echo $san->img; ?>" style="width: 50px; height: 50px;"></td>
                    <td><?php echo ($san->price); ?> $</td>
                    <td><?php echo $san->quantity; ?></td>
                    <td><?php echo ($san->price*$san->quantity); ?> $</td>                 

                  </tr>

                  <?php $K++; } ?>
                  <tr>
                    <td colspan="4"></td>
                    <td>Tổng tiền</td>
                    <td><?php echo ($info_cus->total_money); ?> $</td>
                  </tr>
                  <tr>
                    <td colspan="6">
                      <?php 

                      if (isset($_POST['status'])) {
                        $status = $_POST['status'];
                      // var_dump($status); die();
                        $sql= "UPDATE orderproduct SET status='$status'  WHERE id=$id";
                      // echo "<pre>";
                        $chapnhansp = $conn->query($sql);
                      // print_r($sql);

                        if ($chapnhansp) {
                          header('location: index.php?module=order');
                        }
                      }
                      ?>

                      <div class="box-header with-border">
                        <form method="POST" class="form-inline" role="form">
                          <div class="form-group">
                            <select name="status" class="form-control" required="required"> 
                              <option >Trạng thái</option>

                         <option value="1" <?php if ($info_cus->status == 1) echo "selected"; ?>>Đang xử lí</option>
                        <option value="2" <?php if ($info_cus->status == 2) echo "selected"; ?>>Đang giao</option> 
                        <option value="3" <?php if ($info_cus->status == 3) echo "selected"; ?>>Đã giao</option>
                        <option value="4" <?php if ($info_cus->status == 4) echo "selected"; ?>>Đã hủy</option>
                            </select>
                          </div>                          
                          <button type="submit" class="btn btn-primary">Xác nhận đơn hảng</button>
                        </form>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <h5>Thông tin khách hàng</h5>
            <p>tên: <?php   echo $info_cus->name; ?></p>
            <p>SDT: <?php   echo $info_cus->phone; ?></p>
            <p>Địa chỉ: <?php   echo $info_cus->address; ?></p>
            <p>Email: <?php   echo $info_cus->email; ?></p>
            <p>Chú thích khách hàng: <?php   echo $info_cus->note; ?></p>
            <p>Ngày đặt hàng: <?php  echo date('d-m-Y', strtotime($info_cus->created));?>   <?php  echo date('H:i:s', strtotime($info_cus->created));?> </p>
          </div>
        <!-- /<div class="box-footer--"></div>
      </div>
      /.box -->

    </section>
    <!-- /.content -->
    <!--  -->