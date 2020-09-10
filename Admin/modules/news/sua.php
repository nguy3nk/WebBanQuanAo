  <!-- Content Header (Page header) -->
  <section class="content-header">
  	<h1>
  		Sửa tin tức
  	</h1>
  </section>

  <!-- Main content -->
  <section class="content">

  	<!-- Default box -->
  	<div class="box">

  		<?php 
  		$id = isset($_GET['id']) ? $_GET['id'] : 0;

  		$query = $conn->query("SELECT * FROM news WHERE id=$id");
  		$new = $query->fetch();

  		// upload ảnh
  		$image = $new->image;

          if (!empty($_FILES['image']['name'])) {
            $file = $_FILES['image'];
            print_r($file);
            $img_name = time().$file['name'];
            $check_upload = move_uploaded_file($file['tmp_name'], '../uploads/news/'.$img_name);
            $image = $img_name;
          }

          if(isset($_POST['name'])){
          	$name = $_POST['name'];
          	$content = $_POST['content_news'];
          	$content_title = $_POST['content_title'];
          	$resources = $_POST['resources_news'];
          	$author = $_POST['author_news'];

          	$sql = "UPDATE news SET name = '$name',tomtat = '$content_title',content = '$content',image = '$image',resources = '$resources',author = '$author' WHERE id = $id";
          	$res = $conn->query($sql);

          	if ($res){
          		header('location: index.php?module=news');
          	}
          }
  		?>

  		<div class="box-body">
  			<form action="" method="POST"  enctype="multipart/form-data">
  				<div class="form-group">
  					<label for="">Tên tiêu đề</label>
  					<input class="form-control" name="name" value="<?php echo $new->name; ?>">
  				</div>
  				<div class="form-group">
  					<label for="">Nội dung tóm tắt</label> 
            <textarea class="form-control" name="content_title"><?php echo $new->tomtat; ?></textarea>
  				</div>
  				<div class="form-group">
  					<label for="">Nội dung</label>
  					<textarea name="content_news" class="form-control" id="content" value="<?php echo $new->content; ?>"></textarea>
  				</div> 
  				<div class="form-group">
  					<label for="">Nguồn</label>
  					<input class="form-control" name="resources_news" value="<?php echo $new->resources; ?>">
  				</div>  
  				<div class="form-group">
  					<label for="">Tác giả</label>
  					<input class="form-control" name="author_news" value="<?php echo $new->author; ?>">
  				</div>
  				<div class="form-group">
  					<label for="">Ảnh chính</label>
  					<input type="file" name="image" value="">
  					<br>
  					<img src="../uploads/news/<?php echo $new->image;?>" alt="Ảnh tin tức" width="15%">
  				</div>               
  				<button type="submit" class="btn btn-primary">Lưu</button>
  			</form>
  		</div>
  		<!-- /.box-body -->
  	</div>
  	<!-- /.box -->
  </section>