    <?php 
    $catsql = "SELECT * FROM Category";
     
    $count_cate = $conn->query("SELECT count(*) FROM Category")->fetch();
    $limit = 6;
    $get_page = !empty($_GET['page']) ? $_GET['page'] : 1; 
    $total = isset($count_cate->{'count(*)'}) ? $count_cate->{'count(*)'}:0;
    $total_page =  ceil($total/$limit);
    $start = ($get_page-1)*$limit;

    $catsql .= " LIMIT $start,$limit";
    $cats = $conn->query($catsql);

    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý
        <small>Danh mục</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Danh sách danh mục <a href="index.php?module=category&action=them" class="">thêm
          mới</a></h3>

         <!--  <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
            title="Collapse">
            <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
            </div> -->
          </div>
          <div class="box-body">
            <table class="table table-hover">
             <thead>
              <tr>
               <th>ID</th>
               <th>Tên sản phẩm</th>
               <th>Loại</th>
               <th>Danh mục cha</th>
             </tr>
           </thead>
           <tbody>
            <?php foreach($cats as $cat) : ?>
              <tr>
                <td><?php echo $cat->id; ?></td>
                <td><?php echo $cat->name; ?></td>
                <td><?php echo $cat->style; ?></td>
                <td><?php echo $cat->parent_id; ?></td>
                <td class="text-right">
                  <a href="index.php?module=category&action=sua&id=<?php echo $cat->id; ?>"><button class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></button></a>
                  <a href='#modal-<?php echo $sanProductId; ?>' data-toggle="modal" data-target="#modal-delete-<?php echo $cat->id; ?>" ><button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button></a>
                </td>
              </tr>

              <!-- Modal xóa -->
              <div class="modal fade" id="modal-delete-<?php echo $cat->id; ?>">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <h2 class="text-center"><strong>Bạn muốn xóa <?php echo $cat->name; ?> ?</strong></h2>
                    </div>
                    <div class="modal-footer">
                      <div class="text-center">
                        <a href="index.php?module=category&action=xoa&id=<?php echo $cat->id; ?>"><button class="btn btn-primary">Xóa</button></a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Thoát</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Kết thúc modal xóa -->
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="container">
    <ul class="pagination">
       <?php if($get_page > 1): ?>
            <li>
                <a href="index.php?module=category<?php $pre_page = $get_page - 1; echo '&page='.$pre_page;?>" >&laquo;</i></a>
            </li>
        <?php endif; ?>
        <?php for ($i=1; $i <=$total_page ; $i++) :
            $ac = $i==$get_page?'active':''; ?>
        <li class="<?php echo $ac; ?>">
            <a href="index.php?module=category<?php  echo '&page='.$i;?>" ><?php echo $i; ?></a>
        </li>
        <?php  endfor; ?>
        <?php if ($get_page < $total_page) :?>
        <li>
            <a href="index.php?module=category<?php $next_page = $get_page + 1; echo '&page='.$next_page;?>" >&raquo;</a>
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