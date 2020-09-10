  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Hồ sơ thông tin
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">

      <div class="box-body">
       <?php 
       if (isset($_GET['id'])) {
         $id = $_GET['id'];
       }
       $banner = $conn->query("SELECT * FROM admin WHERE id = $id");
       $ban= $banner->fetch();

       $image = $ban->Admin_img; 
       if (!empty($_FILES['image'])) {
        $file = $_FILES['image'];
        $img = $file['name'];
        $check_upload = move_uploaded_file($file['tmp_name'], '../uploads/'.$img);
        if($check_upload){
         $image = $img;
       }

     }      if (isset($_POST['name'])) {
      $name = $_POST['name'];  
      $Password = md5($_POST['Password']);
      $sql = "UPDATE  admin SET full_name = '$name',Password='$Password',Admin_img = '$image' WHERE id=$id" ;
            // echo "<pre>";
      $res = $conn->query($sql);
            // print_r($sql);
      if ($res) {
       header('location: index.php?module=admin');
     }
   }
   ?>

   <form class="form-group form-contact" role="form" action="" method="post" name="" enctype="multipart/form-data">
    <div class="">
      <div class="">
       <div class="item-contact them">
        <label for="ho-ten">Tên:</label>
        <input type="text" class="form-control" id="ho-ten" name="name" required placeholder="" value="<?php echo $ban->full_name; ?>" >
      </div>
      <div class="item-contact them">
        <label for="ho-ten">Email:</label>
        <input type="text" class="form-control" id="ho-ten" name="email" value="<?php echo $ban->email; ?>" disabled="">
      </div>
      <div class="item-contact them">
        <label for="ho-ten">Mật khẩu:</label>
        <input type="text" class="form-control" id="ho-ten" name="Password" required placeholder="**********"  >
      </div>
      <div class="item-contact them">
        <label for="dia-chi">Ảnh:</label>
        <input type="file" name="image" data-id="0"  class="add_img" id="imgInp" />
        <div class="review_0">
          <img src="../uploads/<?php echo $ban->Admin_img; ?>"   style="width: 100px; height: 100px;margin-top: 13px">
        </div>         
        <div class="text-center nu">
          <input type="submit" class="btn btn-button btn-primary" value="Thay đổi"/>
        </div>

      </div>

    </div>
  </form>
</div>
<!-- /.box-body -->

<!-- /.box-footer-->
</div>
<!-- /.box -->
</section>
<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#blah').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#imgInp").change(function() {
    readURL(this);
  });
</script>