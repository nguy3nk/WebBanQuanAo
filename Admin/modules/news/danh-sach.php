<?php 
$tintucsql = 'SELECT * FROM news';

$count_new = $conn->query("SELECT count(*) FROM news")->fetch();
    $limit = 6;
    $get_page = !empty($_GET['page']) ? $_GET['page'] : 1; 
    $total = isset($count_new->{'count(*)'}) ? $count_new->{'count(*)'}:0;
    $total_page =  ceil($total/$limit);
    $start = ($get_page-1)*$limit;

    $tintucsql .= " LIMIT $start,$limit";
    $tintuc = $conn->query($tintucsql);
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Quản lý
    <small>TIN TỨC</small>
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Danh sách tin tức <a href="index.php?module=news&action=them" class="">thêm
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
                  <th>Tiêu đề</th>
                  <th>Ảnh</th>
                  <th>Ngày tạo</th>
                  <th>Nguồn</th>
                  <th>Tác giả</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($tintuc as $new) { ?>
                  <tr>
                    <td><?php echo $new->id; ?></td>
                    <td><?php echo $new->name; ?></td>
                    <td><img src="../uploads/news/<?php echo $new->image; ?>" class="img_news"></td>
                    <td><?php echo $new->dayup; ?></td>
                    <td><?php echo $new->resources; ?></td>
                    <td><?php echo $new->author; ?></td>
                    <td>
                      <a data-toggle="modal" href='#modal-<?php echo $new->id; ?>'><button class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i></button></a>
                      <a href="index.php?module=news&action=sua&id=<?php echo $new->id; ?>" title=""><button class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></button></a>
                      <a  data-toggle="modal" href="#modal-delete-<?php echo $new->id; ?>" >
                        <button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button></a>
                    </td>
                  </tr>
                  <!-- Modal xem -->
                  <div class="modal fade" id="modal-<?php echo $new->id; ?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header bg-primary">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h3 class="text_modal_hd">Thông tin chi tiết</h3>
                        </div>
                        <div class="modal-body" id="body-center">
                          <h4><?php echo $new->name; ?></h4>
                          <p class="modal-ct-img"><?php echo $new->content; ?></p> 
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Đóng Modal xem -->

                  <!-- Modal xóa -->
                  <div class="modal fade" id="modal-delete-<?php echo $new->IdNews; ?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-body">
                          <h2 class="text-center"><strong>Bạn muốn xóa</strong><p class="text-info"><?php echo $new->name; ?>?</p></h2>
                        </div>
                        <div class="modal-footer">
                          <div class="text-center">
                            <a href="index.php?module=news&action=xoa&id=<?php echo $new->id; ?>"><button class="btn btn-danger">Xóa</button></a>
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
<div class="container">
    <ul class="pagination">
       <?php if($get_page > 1): ?>
            <li>
                <a href="index.php?module=news<?php $pre_page = $get_page - 1; echo '&page='.$pre_page;?>" >&laquo;</i></a>
            </li>
        <?php endif; ?>
        <?php for ($i=1; $i <=$total_page ; $i++) :
            $ac = $i==$get_page?'active':''; ?>
        <li class="<?php echo $ac; ?>">
            <a href="index.php?module=news<?php  echo '&page='.$i;?>" ><?php echo $i; ?></a>
        </li>
        <?php  endfor; ?>
        <?php if ($get_page < $total_page) :?>
        <li>
            <a href="index.php?module=news<?php $next_page = $get_page + 1; echo '&page='.$next_page;?>" >&raquo;</a>
        </li>
        <?php endif; ?>
  
</ul>
      </div>  
        
        <!-- /.box-body -->
        <div class="box-footer">

        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
 
    </section>
    <!-- /.content -->