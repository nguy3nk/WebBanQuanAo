  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Sửa danh mục
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <?php 
      $id = isset($_GET['id']) ? $_GET['id'] : 0;

      $query = $conn->query("SELECT * FROM category WHERE id=$id");
      $cats = $query->fetch();

      $sql = $conn->query("SELECT DISTINCT style FROM category "); 
      $sql1 = $conn->query("SELECT DISTINCT id,name,parent_id FROM category");

      $danhmuc = [];
      foreach ($sql1 as $c) {
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


      if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $style = $_POST['style_other'] ? $_POST['style_other'] : $_POST['style'] ;
        $parent_id = $_POST['parent_id'];

        $sql = "UPDATE category SET name = '$name',style = '$style',parent_id = '$parent_id' WHERE id = $id";

        $res = $conn->query($sql);

        if ($res) {
          header('location: index.php?module=category');
        }
      }

      ?>
      <div class="box-body">
        <form action="" method="POST"  enctype="multipart/form-data">

      <div class="row">
           <div class="col-md-6">
           <div class="form-group">
            <label for="">Tên danh mục</label>
            <input class="form-control" name="name" value="<?php echo $cats->name;?>">
          </div>
          <div class="form-group">
            <label for="">Loại</label>
            <select name="style" class="form-control" required="required" onchange="thaydoi(this)">
              <?php foreach ($sql as $cat) { 
                $selected = ($cat->style == $cats->style) ? 'selected' : '';
                ?>
                <option value="<?php echo $cat->style; ?>" <?php echo $selected; ?>> <?php echo $cat->style; ?></option>
              <?php } ?>
              <option value="">Khác..</option>
                   <input style="display: none;" name="style_other" class="form-control">           
            </select>
          </div>
        </div>
         <div class="col-md-6">
           <div class="form-group">
             <label for="">Danh mục cha</label>
             <select name="parent_id" class="form-control" required="required">
               <option value="0">Không có danh mục cha</option>
               <?php show_danhmuc($danhmuc,$cats,0,''); ?>
             </select>
           </div>
         </div>
      </div>
        </div>
         <div class="text-center nu">
                <input type="submit" class="btn btn-button btn-gui" value="Lưu"/>
              </div>
      </form>
    </div>
    <!-- /.box-body -->
    <!-- <div class="box-footer">
    </div> -->
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->
</section>
 <script type="text/javascript">
    function thaydoi(thaydoi) {    
      var other_choice = thaydoi.form.elements["style_other"];
      if (other_choice) {
          other_choice.style.display = (thaydoi.value == "") ? "" : "none";
          if (thaydoi.value == "")
              other_choice.focus();
            other_choice.value = "";
      }
    }
  </script>