  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm banner mới 
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
       
        <div class="box-body">
                 <?php 
          $image = '';
          if (!empty($_FILES['image'])) {
            $file = $_FILES['image'];
            $img = $file['name'];
            $check_upload = move_uploaded_file($file['tmp_name'], '../uploads/banner/'.$img);
            $image = $img;
          }
 $sql = $conn->query("SELECT DISTINCT name,style,parent_id,id FROM category ");

      $danhmuc = [];
      foreach ($sql as $c) {
        $danhmuc[] = $c;
      }
           function show_danhmuc($data,$parent_id=0,$string=''){
        foreach ($data as $k => $dt) {
          if ($dt->parent_id == $parent_id) {
            echo '<option value="'.$dt->id.'">'.$string.$dt->name.'</option>';
            unset($data[$k]);
            show_danhmuc($data,$dt->id,$string.'--');
          }
        }
      } 
        
            if (isset($_POST['name'])) {
            $name = $_POST['name'];  
            $status = $_POST['status'];
            $locate = $_POST['locate_other'] ? $_POST['locate_other'] :$_POST['locate'];
            $effect = $_POST['effect'];
            $cat_id = $_POST['cat_id'];
            $sql = "INSERT INTO banner(name,image,Status,locate,effect,cat_id) 
              VALUES('$name','$image','$status','$locate','$effect','$cat_id')";
            // echo "<pre>";
            $res = $conn->query($sql);
            // print_r($sql);
            // 
             if ($res) {
               header('location: index.php?module=banner');
             }
          }

   ?>

         <form class="form-group form-contact" role="form" action="" method="post" name="" enctype="multipart/form-data">
          <div class="">
            <div class="">
               <div class="item-contact them">
                <label for="ho-ten">Tên *:</label>
                <input type="text" class="form-control" id="ho-ten" name="name" required placeholder="" >
              </div>
               <div class="item-contact them">
                <label for="cate">Danh mục</label>
               <select id="cate" name="cat_id" class="form-control" >
                 <option value="0">Không</option>
                 <?php show_danhmuc($danhmuc); ?>
               </select>
              </div>
               <div class="item-contact them">
                <label for="">Trạng thái</label>
                <select name="status" class="form-control" required="required">
                  <option value="Hiện">Hiện</option>
                  <option value="Ẩn">Ẩn</option>
                </select>
              </div>
               <div class="item-contact them">
                <label for="">Vị trí</label>
                <select name="locate" class="form-control" required="required" onchange="thaydoi(this)">
                  <?php $bnn = $conn->query("SELECT DISTINCT locate FROM  banner");
                  foreach ($bnn as $bn) : ?>
                  <option value="<?php echo $bn->locate; ?>"><?php echo $bn->locate; ?></option>
                <?php endforeach; ?>
                  <option value="">Khác..</option>
                   <input style="display: none;" name="locate_other" class="form-control">  
                </select>
              </div>
              <div class="item-contact them">
                <label for="dia-chi">Ảnh:</label>
                <!-- <input type="file" name="image" id="imgInp" />
                <img style="height: 100px; width: 100px;" id="blah" src="#" alt="your image" /> -->
                <input type="file" name="image" data-id="0" class="add_img" id="imgInp" />
                 <div class="form-group">
            <label for="">Hiệu ứng</label>
            <textarea name="effect" class="form-control" id="content"></textarea>
          </div>
             <div class="review_0">
              </div>         
              <div class="text-center nu">
                <input type="submit" class="btn btn-button btn-gui btn-primary" value="Thêm vào" />
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
<script type="text/javascript">
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
    
