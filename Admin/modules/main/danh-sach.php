  <!-- Content Header (Page header) -->
  <?php 
  $sp = "SELECT COUNT(*) as 'dem' FROM Product";
  $dem = $conn->query($sp);
  $khachhang = $conn->query("SELECT COUNT(*) as 'dem' FROM Member");
  $donhang = $conn->query("SELECT COUNT(*) as 'dem' FROM OrderProduct");
  $tintuc = $conn->query("SELECT COUNT(*) as 'dem' FROM News");
  $banner = $conn->query("SELECT COUNT(*) as 'dem' FROM Banner");
  $contact = $conn->query("SELECT COUNT(*) as 'dem' FROM Contact");
  

  ?>
  <section class="content-header">
    <h1>
      Trang chủ quản trị
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">

        <div class="box-tools pull-right">
           <!--  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fa fa-minus"></i></button> -->
            <!-- <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button> -->
            </div>
          </div>
          <div class="box-body">
            <div class="jumbotron">
              <div class="container text-center">
                <h2>Chào mừng bạn đến với trang quản trị</h2>
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h2 class="panel-title">Thống kê</h2>
                  </div>
                  <div class="panel-body">
                    <div class="col-md-6 item">
                      <div class="thumbnail ">
                        <div class="caption text-center btn-success">
                          <h3>Tổng số đơn hàng</h3>
                          <?php foreach ($donhang as $d) { ?>
                            <h4><?php echo $d->dem; ?></h4>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 item">
                      <div class="thumbnail">
                        <div class="caption text-center btn-danger">
                          <h3>Tổng số sản phẩm</h3>
                          <?php foreach ($dem as $d) { ?>
                            <h4><?php echo $d->dem; ?></h4>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 item">
                      <div class="thumbnail">
                        <div class="caption text-center btn-warning">
                          <h3>Tổng số tin tức</h3>
                          <?php foreach ($tintuc as $d) { ?>
                            <h4><?php echo $d->dem; ?></h4>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 item">
                      <div class="thumbnail">
                        <div class="caption text-center" style="background-color:#c98ba0">
                          <h3>Tổng số banner</h3>
                          <?php foreach ($banner as $d) { ?>
                            <h4><?php echo $d->dem; ?></h4>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                     <div class="col-md-6 item">
                      <div class="thumbnail">
                        <div class="caption text-center btn-warning">
                          <h3>Tổng số khách hàng</h3>
                          <?php foreach ($khachhang as $d) { ?>
                            <h4><?php echo $d->dem; ?></h4>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                     <div class="col-md-6 item">
                      <div class="thumbnail">
                        <div class="caption text-center btn-">
                          <h3>Tổng số ý khiến Khách hàng</h3>
                          <?php foreach ($contact as $d) { ?>
                            <h4><?php echo $d->dem; ?></h4>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- /.box-body -->

          <!-- /.box-footer-->
        </div>
        <!-- /.box -->
      </section>