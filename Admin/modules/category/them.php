  <?php 
  include '../database/connect.php';
  $sql = $conn->query("SELECT DISTINCT name,style,parent_id,id FROM category ");
  $sql1 = $conn->query("SELECT DISTINCT style FROM category ");  
  // echo "<pre>";
  // print_r($_POST);
  // echo "<pre>";
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
  ?>
  <section class="content-header">
    <h1>
      Thêm mới danh mục
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">

      <?php 
      if(isset($_POST['name'])){
        $name = $_POST['name'];
        $style = $_POST['style_other'] ? $_POST['style_other'] : $_POST['style'] ;
        $parent_id = $_POST['parent_id'];

        $sql= "INSERT INTO category(name,style,parent_id)
        VALUES ('$name','$style','$parent_id')";
        if($conn->query($sql)) {
          header('location: index.php?module=category');
        }

      }
      ?>
      <div class="box-body">
        <form method="POST"  enctype="multipart/form-data">

         <div class="row">
           <div class="col-md-6">
              <div class="form-group">
               <label for="">Tên danh mục</label>
               <input class="form-control" name="name" placeholder="Tên danh mục..">
             </div>
             <div class="form-group">
               <label for="">Loại</label>
             
               <select name="style" class="form-control" onchange="thaydoi(this)" >
                 <?php foreach ($sql1 as $cat) { ?>
                   <option value="<?php echo $cat->style ?>"><?php echo $cat->style ?></option>
                 <?php } ?>
                   <option value="">Khác..</option>
                   <input style="display: none;" name="style_other" class="form-control">            
               </select>
             </div>
           </div>
           <div class="col-md-6">
              <div class="form-group">
               <label for="">Danh mục cha</label>
               <select name="parent_id" class="form-control" >
                 <option value="0">Không có danh mục cha</option>
                 <?php show_danhmuc($danhmuc); ?>
               </select>
             </div>
           </div>
         </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Thêm mới</button>
          </div>
        </form>
      </div>
      <!-- /.box-body -->
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