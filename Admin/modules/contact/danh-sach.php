  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý
        <small>liên hệ</small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
    <?php 
      $query = $conn->query("SELECT * FROM contact ORDER BY created DESC");
    ?>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Danh sách liên hệ</h3>

       
        </div>
       <div class="them">
          
       </div>
        <div class="box-body">
          <table class="table table-hove table-bordered">
          	<thead>
          		<tr>
          			<th>ID</th>
          			<th>Họ và tên</th>
                <th>Email</th>
                <th>Điện thoại</th>
                <th>Địa chỉ</th>
                <th>Ngày</th>
          			<th></th>
          		</tr>
          	</thead>
          	<tbody>
            <?php foreach($query as $bn) : ?>
              <tr>
                <td><?php echo $bn->id; ?></td>
                <td><?php echo $bn->full_name; ?></td>
                <td><?php echo $bn->email; ?></td>
                <td><?php echo $bn->phone; ?></td>
                <td><?php echo $bn->address; ?></td>
                <td><?php echo date('d-m-Y',strtotime($bn->created)); ?></td>


                <td class="text-right">
                  <a class="btn btn-info" data-toggle="modal" id='xem' value ="xem" href='#modal-<?php echo $bn->id; ?>' ng-click="login()"><i class="glyphicon glyphicon-eye-open"></i></a>
                   <!-- <a class="btn btn-warning"  href='index.php?module=customer&action=sua&id=<?php echo $san->Userid; ?>' ng-click="login()"><i class="glyphicon glyphicon-pencil"></i></a> -->
                     <a class="btn btn-danger"  href='index.php?module=contact&action=xoa&id=<?php echo $bn->id; ?>' ng-click="login()"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
              </tr>
              <div class="modal fade" id="modal-<?php echo $bn->id; ?>">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Thông tin chi tiết</h4>
                    </div>
                    <div class="modal-body">

                      <h4>Họ và tên: <?php echo $bn->full_name; ?></h4>
                      
                      <h4>email : <?php echo $bn->email; ?></h4>
                      <h4>Điện thoại : <?php echo $bn->phone; ?></h4>
                      <h4>Thông tin:</h4>
                      <p><?php echo $bn->info; ?></p>
                      <p><?php echo $bn->created; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          	</tbody>
          </table>
        </div>
        <!-- /.box-body -->
      
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>