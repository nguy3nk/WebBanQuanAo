<?php 
  // $sp = mysqli_connect('localhost','root','','group_01');
  // mysqli_set_charset($sp,'utf8');
  $membersql = "SELECT * FROM member ORDER BY id DESC";
  $md_sp = $conn->query("SELECT * FROM member ");

   $count_mem = $conn->query("SELECT count(*) FROM member")->fetch();
    $limit = 6;
    $get_page = !empty($_GET['page']) ? $_GET['page'] : 1; 
    $total = isset($count_mem->{'count(*)'}) ? $count_mem->{'count(*)'}:0;
    $total_page =  ceil($total/$limit);
    $start = ($get_page-1)*$limit;

    $membersql .= " LIMIT $start,$limit";
    $member = $conn->query($membersql);

?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý
        <small>khách hàng</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Danh sách khách hàng</h3>

        
        </div>
       <div class="them">
          
       </div>
        <div class="box-body">
          <div class="table-responsive">
            <table class="table table-hove table-bordered">
              <thead>
               <tr>
                  <th>STT</th>
                  <th>Họ và tên</th>
                  <th>Giới tính</th>
                  <th>Ngày sinh</th>
                  <th>Điện thoại</th>
                  <th>Email</th>
                  <th>Địa chỉ</th>
                  <th>Tài khoản</th>
                  <!-- <th>Mật khẩu</th> -->
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php $k=1; foreach ($member as $mem) { ?>
                <tr>
                  <td><?php echo $k; ?></td>
                  <td><?php echo $mem->full_name; ?></td>
                  <td><?php 
                      if ($mem->gender==0) {
                          echo('nam');
                       }else if ($mem->gender==1) {
                         echo('nữ');
                       }else{
                        echo('khác');
                       }

                   ?></td>
                  <td><?php echo date('d-m-Y',strtotime($mem->birth_day)); ?></td>
                  <td><?php echo $mem->phone; ?> </td>
                  <td><?php echo $mem->email; ?></td>
                  <td><?php echo $mem->address; ?></td>
                  <td><?php echo $mem->user_name; ?></td>
                  <!-- <td><?php echo $mem->Password; ?></td> -->
                <td>
                     <!-- <a class="btn btn-info" data-toggle="modal" id='xem' value ="xem" href='#modal-<?php echo $mem->UserId; ?>' ng-click="login()"><i class="glyphicon glyphicon-eye-open"></i></a> -->
                   <!-- <a class="btn btn-warning"  href='index.php?module=customer&action=sua&id=<?php echo $mem->UserId; ?>' ng-click="login()"><i class="glyphicon glyphicon-pencil"></i></a> -->
                   
                     <a class="btn btn-danger"  href="index.php?module=customer&action=xoa&id=<?php echo $mem->id; ?>"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
                </tr>
                  
              <?php $k++; } ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- /.box-body -->
         <div class="container">
    <ul class="pagination">
       <?php if($get_page > 1): ?>
            <li>
                <a href="index.php?module=customer<?php $pre_page = $get_page - 1; echo '&page='.$pre_page;?>" >&laquo;</i></a>
            </li>
        <?php endif; ?>
        <?php for ($i=1; $i <=$total_page ; $i++) :
            $ac = $i==$get_page?'active':''; ?>
        <li class="<?php echo $ac; ?>">
            <a href="index.php?module=customer<?php  echo '&page='.$i;?>" ><?php echo $i; ?></a>
        </li>
        <?php  endfor; ?>
        <?php if ($get_page < $total_page) :?>
        <li>
            <a href="index.php?module=customer<?php $next_page = $get_page + 1; echo '&page='.$next_page;?>" >&raquo;</a>
        </li>
        <?php endif; ?>
  
</ul>
      </div>
        <!-- /<div class="box-footer--"></div>
      </div>
       /.box -->

    </section>
    <!-- /.content -->