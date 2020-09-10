  <!-- Content Header (Page header) -->
  <?php 
      $id = isset($_GET['id']) ? $_GET['id'] : 0;
      $query = $conn->query("SELECT * FROM banner WHERE id = $id");
      $ban = $query->fetch();
      
      $image = $ban->image;

 $sql = $conn->query("SELECT DISTINCT name,style,parent_id,id FROM category ");
$query = $conn->query("SELECT * FROM category WHERE id=$ban->cat_id");
      $cats = $query->fetch();
      $danhmuc = [];
      foreach ($sql as $c) {
        $danhmuc[] = $c;
      }
        function show_danhmuc($data,$se,$parent_id=0,$string=''){
        foreach ($data as $k => $dt) {
          $selec = ($dt->id == $se->parent_id) ? "selected" : '';
          if ($dt->parent_id == $parent_id) {
            echo '<option '.$selec.' value="'.$dt->id.'">'.$string.$dt->name.'</option>';
            unset($data[$k]);
            show_danhmuc($data,$se,$dt->id,$string.'--');
          }
        }
      } 
      if (!empty($_FILES['image']['name'])) {
        $file = $_FILES['image'];
        print_r($file);
        $img_name = time().$file['name'];
        $check_upload = move_uploaded_file($file['tmp_name'], '../uploads/banner/'.$img_name);
        $image = $img_name;
      }

      if(isset($_POST['name_banner'])){
        $name = $_POST['name_banner'];
        $status = $_POST['status'];
         $effect = $_POST['effect'];
         $locate = $_POST['locate_other'] ? $_POST['locate_other'] :$_POST['locate'];
         $cat_id = $_POST['cat_id'];
        $sql = "UPDATE banner SET name = '$name',image = '$image',locate = '$locate',effect = '$effect',cat_id = '$cat_id',Status = '$status[0]' WHERE id = $id";
        if($conn->query($sql)){
          header('location: index.php?module=banner');
        }
      }


      ?>
  <section class="content-header">
    <h1>
      Sửa banner
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      
      <div class="box-body">
       <form action="" method="POST"  enctype="multipart/form-data">
        <div class="form-group">
         <label for="">Tên banner</label>
         <input class="form-control" name="name_banner" value="<?php echo $ban->name;?>">
       </div>
       <div class="form-group">
         <div class="col-md-2">
            <label for="">Trạng thái</label>
            <div >
              <input id="an" type="radio" name="status[]" <?php if($ban->Status = 'Ẩn') echo "checked"; ?> value="Ẩn"> <label for="an">Ẩn</label> <br/>
              <input id="hien" type="radio" name="status[]" <?php if($ban->Status = 'Hiện') echo "checked"; ?> value="Hiện"> <label for="hien">Hiện</label> <br/>
            </div> 
        </div><div>
           <label for="">Ảnh</label>
           <input type="file" name="image">
           <br>
           <img src="../uploads/banner/<?php echo $ban->image;?>" alt="Ảnh banner" width="12%">
         </div>

       </div>
      <div class="form-group">
       
        <div >
             <label for="">Vị trí</label>
                <select name="locate" class="form-control" required="required" onchange="thaydoi(this)">
                  <?php $bnn = $conn->query("SELECT DISTINCT locate FROM  banner");
                  foreach ($bnn as $bn) : ?>
                  <option value="<?php echo $bn->locate;?>" <?php if($ban->locate == $bn->locate) echo ' selected' ?>><?php echo $bn->locate; ?></option>
                <?php endforeach; ?>
                  <option value="">Khác..</option>
                   <input style="display: none;" name="locate_other" class="form-control">  
                </select>  
        </div>
      </div>
      <div class="form-group">
             <label for="cate">Danh mục</label>
               <select id="cate" name="cat_id" class="form-control" >
                 <option value="0">Không</option>
                 <?php show_danhmuc($danhmuc,$cats,0,''); ?>
               </select>
      </div>
      <div class="form-group">
            <label for="">Hiệu ứng</label>
            <textarea name="effect" class="form-control" id="content" value="<?php echo $ban->effect; ?>"></textarea>
          </div>
      <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
  </div>
</div>
<!-- /.box-body -->
<!-- /.box -->
</section><script type="text/javascript">
    function thaydoi(thaydoi) {    
      var other_choice = thaydoi.form.elements["locate_other"];
      if (other_choice) {
          other_choice.style.display = (thaydoi.value == "") ? "" : "none";
          if (thaydoi.value == "")
              other_choice.focus();
            other_choice.value = "";
      }
    }
  </script>
    