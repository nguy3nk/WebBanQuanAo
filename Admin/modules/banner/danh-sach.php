<?php 
$bannersql = "SELECT * FROM Banner";

  $count_ban = $conn->query("SELECT count(*) FROM Banner")->fetch();
    $limit = 6;
    $get_page = !empty($_GET['page']) ? $_GET['page'] : 1; 
    $total = isset($count_ban->{'count(*)'}) ? $count_ban->{'count(*)'}:0;
    $total_page =  ceil($total/$limit);
    $start = ($get_page-1)*$limit;

    $bannersql .= " LIMIT $start,$limit";
    $banner = $conn->query($bannersql);
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Quản lý
    <small>BANNER</small>
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Danh sách tin tức <a href="index.php?module=banner&action=them" class="">thêm
      mới</a></h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table class="table table-hove table-bordered">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên banner</th>
                  <th>Ảnh</th>
                  <th class="text-center">Danh mục</th>
                  <th class="text-center">Vị trí</th>
                  <th class="text-center">Trạng thái</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($banner as $ban) { ?>
                  <tr>
                    <td><?php echo $ban->id; ?></td>
                    <td><?php echo $ban->name; ?></td>
                   
                    <td><img src="../uploads/banner/<?php echo $ban->image; ?>" width = "20%"></td>
                     <td><?php if ($ban->cat_id) {
                      $dm = $conn->query("SELECT name FROM Category WHERE id = $ban->cat_id")->fetch();
                      echo $dm->name;
                    } else echo "Quảng cáo"; ?></td>
                    <td class="text-center">
                      
                        <button class="btn btn-success" style="background-color: green"><?php echo $ban->locate; ?></button></a>
                      </td>
                       <td class="text-center">
                      <?php if ($ban->Status == 'Hiện') { ?>
                        <button class="btn btn-success" style="background-color: green">Hiện</button></a>
                      <?php } else { ?>
                        <button class="btn btn-danger" style="background-color: red">Ẩn</button></a>
                      <?php } ?>
                    </td>
                    <td>
                      <a href="index.php?module=banner&action=sua&id=<?php echo $ban->id; ?>" title=""><button class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></button></a>
                      <a  data-toggle="modal" href="#modal-delete-<?php echo $ban->id; ?>" >
                        <button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button></a>
                      </td>
                    </tr>


                    <!-- Modal xóa -->
                    <div class="modal fade" id="modal-delete-<?php echo $ban->id; ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            <h2 class="text-center"><strong>Bạn muốn xóa <?php echo $ban->name; ?> ?</strong></h2>
                          </div>
                          <div class="modal-footer">
                            <div class="text-center">
                              <a href="index.php?module=banner&action=xoa&id=<?php echo $ban->id; ?>"><button class="btn btn-danger">Xóa</button></a>
                              <button type="button" class="btn btn-primary" data-dismiss="modal">Thoát</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Đóng Modal xóa -->
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>


          <!-- /.box-body -->
          <div class="box-footer">

          </div>
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->
      <div class="container">
    <ul class="pagination">
       <?php if($get_page > 1): ?>
            <li>
                <a href="index.php?module=banner<?php $pre_page = $get_page - 1; echo '&page='.$pre_page;?>" >&laquo;</i></a>
            </li>
        <?php endif; ?>
        <?php for ($i=1; $i <=$total_page ; $i++) :
            $ac = $i==$get_page?'active':''; ?>
        <li class="<?php echo $ac; ?>">
            <a href="index.php?module=banner<?php  echo '&page='.$i;?>" ><?php echo $i; ?></a>
        </li>
        <?php  endfor; ?>
        <?php if ($get_page < $total_page) :?>
        <li>
            <a href="index.php?module=banner<?php $next_page = $get_page + 1; echo '&page='.$next_page;?>" >&raquo;</a>
        </li>
        <?php endif; ?>
  
</ul>
      </div>
      </section>
    <!-- /.content -->