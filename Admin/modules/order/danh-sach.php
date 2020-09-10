<?php 
  // $sp = mysqli_connect('localhost','root','','group_01');
  // mysqli_set_charset($sp,'utf8');
  // $san = $conn->query("SELECT * FROM product p JOIN billdetail b ON p.ProductId = b.ProductId join bill bi on b.id = bi.id ORDER BY created DESC");
  $sql = "SELECT * FROM orderproduct b JOIN (SELECT ord_id, COUNT(*) as 'dem' FROM order_detail group by ord_id) s on b.id = s.ord_id ORDER BY b.created DESC
";  
 if (!empty($_POST['status'])) {
  $status = $_POST['status'];

  $sql = "SELECT * FROM orderproduct b JOIN (SELECT ord_id, COUNT(*) as 'dem' FROM order_detail group by ord_id) s on b.id = s.ord_id WHERE b.status = '$status'";
}
 

    $count_ord = $conn->query("SELECT count(*) FROM orderproduct")->fetch();
    $limit = 6;
    $get_page = !empty($_GET['page']) ? $_GET['page'] : 1; 
    $total = isset($count_ord->{'count(*)'}) ? $count_ord->{'count(*)'}:0;
    $total_page =  ceil($total/$limit);
    $start = ($get_page-1)*$limit;

    $sql .= " LIMIT $start,$limit";
    $sanphan = $conn->query($sql);
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý
        <small>Đơn Hàng</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Danh sách đơn hàng</h3>

       
        </div>
       <div class="them">
          
       </div>
        <div class="box-header with-border">
          <form method="POST"  class="form-inline" role="form">
            <div class="form-group">
              <select name="status" class="form-control" > 
                        <option value="">Tất cả</option>
                        <option value="1">Đang xử lí</option>
                        <option value="2">Đang giao</option> 
                        <option value="3">Đã giao</option>
                        <option value="4">Đã hủy</option>
                        </select>          
            </div>
          <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>
      </div>
        <div class="box-body">
          <div class="table-responsive">
            <table class="table table-hove table-bordered">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Họ và tên</th>
                  <th>Số diện thoại</th>
                  <th>Địa chỉ</th>
                  <th>Email</th>
                  <th>Số sản phẩm</th>
                  <th>Ngày mua </th>
                  <th>Thành tiền</th>
                  <th>Trạng thái</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php $K=1; foreach ($sanphan as $san) { ?>
                <tr>
                  <td><?php echo $K ?></td>
                  <td><?php echo $san->name; ?></td>
                  <td><?php echo $san->phone; ?></td>
                  <td><?php echo $san->address; ?></td>
                  <td><?php echo $san->email; ?></td>
                  <td><?php echo $san->dem; ?> sản phẩm</td>
                  <td><?php echo date('d-m-Y', strtotime($san->created)); ?></td>
                  <td><?php echo number_format($san->total_money); ?> $</td>
                  <td><?php 
                      if ($san->status ==1 ) {
                          echo "Đang xử lý";
                      }else if ($san->status ==2) {
                          echo "Đang giao";
                      }else if ($san->status ==3){
                        echo "Đã giao"; 
                      }else if ($san->status ==4){
                        echo "Đã hủy"; 
                      }
                  ?>
                    
                  </td>

                  <td>
                     <a class="btn btn-info" data-toggle="modal" id='xem' value ="xem" href='index.php?module=order&action=xem&id=<?php echo $san->id; ?>' ng-click="login()"><i class="glyphicon glyphicon-eye-open"></i></a>
                     <a class="btn btn-danger"  href='index.php?module=order&action=xoa&id=<?php echo $san->id; ?>' ng-click="login()"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
                </tr>
                    <div class="modal fade" id="modal-<?php echo $san->id; ?>">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Thông tin chi tiết</h4>
                              
                            </div>
                            
                          </div>
                        </div>
                      </div>
              <?php $K++; } ?>
              </tbody>
            </table>
          </div>
                <div class="container">
    <ul class="pagination">
       <?php if($get_page > 1): ?>
            <li>
                <a href="index.php?module=order<?php $pre_page = $get_page - 1; echo '&page='.$pre_page;?>" >&laquo;</i></a>
            </li>
        <?php endif; ?>
        <?php for ($i=1; $i <=$total_page ; $i++) :
            $ac = $i==$get_page?'active':''; ?>
        <li class="<?php echo $ac; ?>">
            <a href="index.php?module=order<?php  echo '&page='.$i;?>" ><?php echo $i; ?></a>
        </li>
        <?php  endfor; ?>
        <?php if ($get_page < $total_page) :?>
        <li>
            <a href="index.php?module=order<?php $next_page = $get_page + 1; echo '&page='.$next_page;?>" >&raquo;</a>
        </li>
        <?php endif; ?>
  
</ul>
      </div>
        </div>
        <!-- /.box-body -->
        <!-- <div class="box-footer"> -->
          <!-- Footer -->
        <!-- </div> -->
        <!-- /<div class="box-footer--"></div>
      </div>
       /.box -->

    </section>
    <!-- /.content -->
    <!-- <img src="../uploads/<?php echo $san->Images1; ?>" style="width: 30px; height: 30px;"> -->