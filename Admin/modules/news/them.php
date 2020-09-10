<?php 
include '../database/connect.php';
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Thêm mới tin tức
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <?php 
    $image = '';

    if(!empty($_FILES['image'])){
      $file = $_FILES['image'];
      $img_name = time().$file['name'];
      $check_upload = move_uploaded_file($file['tmp_name'], '../uploads/news/'.$img_name);
      $image = $img_name;
    }

    if(isset($_POST['name_news'])) {
      $name = $_POST['name_news'];
      $content = $_POST['content_news'];
      $tomtat = $_POST['tomtat'];
      $resources = $_POST['resources_news'];
      $author = $_POST['author_news'];

      $sql = "INSERT INTO news(name,tomtat,content,image,resources,author) 
      VALUES ('$name','$tomtat','$content','$image','$resources','$author')";
      $news = $conn->query($sql);
      if($news){
       header('location: index.php?module=news');
      }
    }
    ?>
    <div class="box-header with-border">
      <div class="box-body">
        <form action="" method="POST"  enctype="multipart/form-data">
          <div class="form-group">
            <label for="">Tiêu đề</label>
            <input class="form-control" name="name_news" placeholder="Tên tiêu đề">
          </div>
          <div class="form-group">
            <label for="">Nội dung tóm tắt</label>
            <textarea class="form-control" name="tomtat"></textarea>
          </div>
          <div class="form-group">
            <label for="">Nội dung</label>
            <textarea name="content_news" class="form-control" id="content"></textarea>
          </div>
          <div class="form-group">
            <label for="">Nguồn</label>
            <input class="form-control" name="resources_news" placeholder="Nguồn">
          </div>
          <div class="form-group">
            <label for="">Tác giả</label>
            <input class="form-control" name="author_news" placeholder="Tác giả">
          </div>
          <div class="form-group">
            <label for="">Ảnh chính</label>
            <input type="file" name="image">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Thêm mới</button>
          </div>
          
        </form>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">

      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->
  </section>