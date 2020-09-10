<?php 
  // $sp = mysqli_connect('localhost','root','','group_01');
  // mysqli_set_charset($sp,'utf8');
  $admin = $conn->query("SELECT * FROM admin");
  $level =
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thông tin
        <small>Admin</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Admin</h3>

        
        </div>
       <div class="them">
          
       </div>
        <div class="box-body">
          <div class="table-responsive">
            <table class="table table-hove table-bordered">
              <thead>
               <tr>
                  
                  <th>Họ và tên</th>
                  
                  <th>Email</th>
                  <th>Ảnh</th>
                  
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($admin as $ad) { ?>
                <tr>
                  <td><?php echo $ad->full_name; ?></td>
                  <td><?php echo $ad->email; ?></td>
                  <td><img src="../uploads/<?php echo $ad->Admin_img; ?>" style="width: 50px; height:50px;"></td>
                  
                <td>
                    
                  <a class="btn btn-warning"  href='index.php?module=admin&action=sua&id=<?php echo $ad->id; ?>' ng-click="login()"><i class="glyphicon glyphicon-pencil"></i></a> 
                  <?php if($admin->level) ?>
                    <a class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa không ?')" href='index.php?module=admin&action=xoa&id=<?php echo $san->id; ?>' ng-click="login()"><i class="glyphicon glyphicon-trash"></i></a>
                  <?php  ?>
                  </td>
                </tr>
                  
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- /.box-body -->
       
        <!-- /<div class="box-footer--"></div>
      </div>
       /.box -->

    </section>
    <!-- /.content -->