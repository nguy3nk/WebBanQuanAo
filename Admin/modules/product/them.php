  <?php
  // echo "<pre>";
  // echo "FILE";
  // print_r($_FILES) ;
  // echo "</pre>"; 
  include '../database/connect.php';
 $cats = $conn->query("SELECT id,name,parent_id FROM Category");
      $danhmuc = [];
      foreach ($cats as $c) {
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
 
        // thực hiện uploads product/
      
      $image = '';

      if (!empty($_FILES['image'])) {
        $file = $_FILES['image'];
        $img_name = time().$file['name'];
        $check_upload = move_uploaded_file($file['tmp_name'], '../uploads/product/'.$img_name);
        $image = $img_name;
      }

        // lưu thông tin vào bảng sản phẩm

   
      if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $mota = $_POST['mota'];
        $sale_price = $_POST['sale_price'];
        $cat_id = $_POST['cat_id'];
        $content = $_POST['content'];

        $sql = "INSERT INTO Product(name,img,price,sale_price,cat_id,content,mota) 
        VALUES('$name','$image','$price','$sale_price','$cat_id','$content','$mota')";
        $res = $conn->query($sql);
        if ($res) {
            $pro_id = $conn->lastInsertId();

              // Thực hiện upload nhiều ảnh
              if (!empty($_FILES['image1'])) {

                $f = $_FILES['image1'];
                  for($i = 0; $i < count($f['name']); $i++){
                    $f_name = time().$f['name'][$i];
                    move_uploaded_file($f['tmp_name'][$i], '../uploads/product/'.$f_name);
                    $sql_img = "INSERT INTO product_img(img_link,pro_id,status) VALUES('$f_name','$pro_id',1)";
                     $conn->query($sql_img);
                  }
               }
          header('location: index.php?module=product');
        }
      }
?>

  <section class="content-header">
    <h1>
      Thêm mới sản phẩm
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-body">
        <form action="" method="POST"  enctype="multipart/form-data">

          <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input class="form-control" name="name" placeholder="Tên sản phẩm..">
          </div>
          <div class="form-group">
            <label for="">Danh mục</label>
              <select name="cat_id" class="form-control js-example-tags" required="required">
                  <?php show_danhmuc($danhmuc); ?>
              </select>
          </div>
          <div class="form-group">
            <label for="">Giá niêm yết</label>
            <input class="form-control" name="price" placeholder="Giá chính..">
          </div>
          <div class="form-group">
            <label for="">Giá sau giảm</label>
            <input class="form-control" name="sale_price" placeholder="Giảm giá..">
          </div>
          <div class="form-group">
            <label for="">Ảnh đại diện</label>
          
             <input type="file" name="image" data-id="0" class="add_img" id="imgInp" />
             <div class="review_0">
               
             </div>
                
          </div>
            <div class="item-contact them">
                      <b>Danh sách ảnh</b>
                    <!-- <input type="file" class="" id="" name="image1[]" placeholder="" class="flex-last"> -->
                    <div id="other-img">
                      <input type="file" class="add_img flex-last" multiple="" data-id="1" name="image1[]">
                      <div class="review_1"></div>
                    </div>
                      
                    
                  </div>
          <div class="form-group">
            <label for="">Mô tả</label>
            <textarea name="mota" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="">Nội dung</label>
            <textarea name="content" class="form-control" id="content"></textarea>
          </div>
          <div class="text-center nu">
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
    <!-- <img style="" id="blah" src="#" alt="" /> -->
