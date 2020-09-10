<?php 

$productsql = "SELECT p.id,p.name,p.content,p.img,p.price,p.sale_price,p.created,c.name AS 'cat_name',p.mota FROM Product p JOIN Category c ON p.cat_id = c.id ORDER BY p.id asc";

$cats = $conn->query("SELECT id,name FROM Category");
  $sql = "SELECT * FROM Product p JOIN Category c on p.cat_id = c.id ";
  $sanphan = $conn->query($sql);
  $ctsp = $sanphan->fetch();

 $count_pro = $conn->query("SELECT count(*) FROM Product")->fetch();
    $limit = 6;
    $get_page = !empty($_GET['page']) ? $_GET['page'] : 1; 
    $total = isset($count_pro->{'count(*)'}) ? $count_pro->{'count(*)'}:0;
    $total_page =  ceil($total/$limit);
    $start = ($get_page-1)*$limit;

    $productsql .= " LIMIT $start,$limit";
    $product = $conn->query($productsql);

?>
<style>
  .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background: #367fa9;
    color: #367fa9;
    border-radius: 4px;
    border: 1px solid #828282;
  }
  
  .dataTables_wrapper .dataTables_paginate .paginate_button:active {
    background: #367fa9;
    color: #367fa9;
  }
</style>
<!-- content Header (Page header) -->
<section class="content-header">
  <h1>
    Quản lý
    <small>SẢN PHẨM</small>
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Danh sách sản phẩm <a href="index.php?module=product&action=them" class="">thêm
      mới</a></h3>

        </div>
      <div class="box-body">
        <div class="table-responsive">
          <table class="table table-hove table-bordered" id="myTable">
            <thead>
              <tr>
                <th>STT</th>
                <th>Mã</th>
                <th>Tên món</th>
                <th>Danh mục</th>
                <th>Ảnh</th>
                <th>Giá cũ</th>
                <th>Giá mới</th>
                <th>Ngày tạo</th>
                <th>Kiểm tra kho</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php $k =1; foreach ($product as $san) { 
                ?>
                <tr>
                  <td><?php echo $k; ?></td>
                  <td><?php echo $san->id; ?></td>
                  <td><?php echo $san->name; ?></td>
                  <td><?php echo $san->cat_name ?></td>
                  <td>
                    <img src="../uploads/product/<?php echo $san->img; ?>" style="width: 50px; height:50px;">
                   
                  </td>
                  <td><?php echo number_format($san ->price); ?> $</td>
                  <td><?php echo number_format($san->sale_price); ?> $</td>
                  <td><?php echo date('d-m-Y',strtotime($san->created)); ?></td>
                  <td>  <a class="btn btn-success"  href='index.php?module=product&action=khohang&id=<?php echo $san->id; ?>' ng-click="login()"><i class="glyphicon glyphicon-search"></i></a></td>
                  <td>
                   <a class="btn btn-primary" data-toggle="modal" id='xem' value ="xem" href='#modal-<?php echo $san->id; ?>' ng-click="login()"><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a class="btn btn-warning"  href='index.php?module=product&action=sua&id=<?php echo $san->id; ?>' ng-click="login()"><i class="glyphicon glyphicon-pencil"></i></a>
                     <a class="btn btn-danger"  href='index.php?module=product&action=xoa&id=<?php echo $san->id; ?>' ng-click="login()"><i class="glyphicon glyphicon-trash"></i></a>
                 </td>
               </tr>
               <div class="modal fade" id="modal-<?php echo $san->id; ?>">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Thông tin chi tiết</h4>
                    </div>
                    <div class="modal-body">

                      <h4>Tên món: <?php echo $san->name; ?></h4>
                      <h4>Ảnh</h4>
                      <img src="../uploads/product/<?php echo $san->img; ?>"  alt=""style="width: 100px; height: 100px;">
                       <?php  $id = $san->id;
                                    $anh = $conn->query("SELECT * FROM product_img WHERE id = $id "); ?>
                                   <?php foreach($anh as $img) { 
                                    ?>

                                    <img src="../uploads/product/<?php echo $img->name ?>" style="width: 100px; height: 100px;">
                                  <?php } ?>
                      <h4>Giá cũ : <?php echo number_format($san ->price); ?> $</h4>
                      <h4>Giá mới : <?php echo number_format($san->sale_price); ?> $</h4>
                      <h4>Thông tin:</h4>
                      <p><?php echo $san->mota; ?></p>
                      <p><?php echo $san->created; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php $k++;} ?>
          </tbody>
        </table>
      </div>
    </div>
   <div class="container">
    <ul class="pagination">
       <?php if($get_page > 1): ?>
            <li>
                <a href="index.php?module=product <?php $pre_page = $get_page - 1; echo '&page='.$pre_page;?>" >&laquo;</i></a>
            </li>
        <?php endif; ?>
        <?php for ($i=1; $i <=$total_page ; $i++) :
            $ac = $i==$get_page?'active':''; ?>
        <li class="<?php echo $ac; ?>">
            <a href="index.php?module=product <?php  echo '&page='.$i;?>" ><?php echo $i; ?></a>
        </li>
        <?php  endfor; ?>
        <?php if ($get_page < $total_page) :?>
        <li>
            <a href="index.php?module=product <?php $next_page = $get_page + 1; echo '&page='.$next_page;?>" >&raquo;</a>
        </li>
        <?php endif; ?>
  
</ul>
      </div>
    <!-- /.box-body -->
   
        <!-- /<div class="box-footer--"></div>
      </div>
      /.box -->

    </section>
    <!-- /.content -->