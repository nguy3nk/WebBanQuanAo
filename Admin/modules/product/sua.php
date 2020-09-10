  <?php 
  include '../database/connect.php';;
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
      <?php 
      if(isset($_GET['id']))
      {
        $id= $_GET['id'];
      }

      $cats = $conn->query("SELECT id,name FROM category");
      $res = $conn->query("SELECT * FROM product WHERE id = $id");
      $cat1 = $conn->query("SELECT c.id,c.name FROM category c join product p on p.cat_id = c.id WHERE p.id = $id ")->fetch();
      $pro = $res->fetch();
      $image = $pro->img;

      if (!empty($_FILES['image'])) {
        $file = $_FILES['image'];
        $img_name = time().$file['name'];
        $check_upload = move_uploaded_file($file['tmp_name'], '../uploads/product/'.$img_name);
        if ($check_upload) {
          $image = $img_name;
        }
      }

        // lưu thông tin vào bảng sản phẩm

      if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $mota = $_POST['mota'];
        $sale_price = $_POST['sale_price'];
        $Category_id = $_POST['Category_id'];
        $content = $_POST['content'];

        $sql = "UPDATE product SET name='$name',price='$price',img='$image',sale_price='$sale_price', content='$content' , mota='$mota'WHERE id=$id";

        $res = $conn->query($sql);
        // var_dump($res);die;
        if ($res) {
          if (!empty($_FILES['image1'])) {
              $f = $_FILES['image1'];
                for($i = 0; $i < count($f['name']); $i++){
                  $f_name = time().$f['name'][$i];
                  $check=move_uploaded_file($f['tmp_name'][$i], '../uploads/product/'.$f_name);
                  if($check){
                  $sql_img = "INSERT INTO product_img(img_link,pro_id,status) VALUES('$f_name',$id,1)";
                   $conn->query($sql_img);
                 }
                }
             }
            $pro_id = $conn->lastInsertId();

              // thuc hen upload nhieu anhr
              
          header('location: index.php?module=product');
        }
      }

      ?>
      <div class="box-body">
        <form action="" method="POST"  enctype="multipart/form-data">

          <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input class="form-control" name="name" value="<?php echo $pro->name; ?>">

          </div>
          <div class="form-group">
            <label for="">Danh mục</label>
              <select name="Category_id" class="form-control" required="required">
                  <option value="<?php echo $cat1->id; ?>"><?php echo $cat1->name; ?></option>
            <?php foreach ($cats as $cat) { ?>
                <option value="<?php echo $cat->id; ?>"><?php echo $cat->name; ?></option>
            <?php } ?>
              </select>
          </div>
          <div class="form-group">
            <label for="">Giá cũ</label>
            <input class="form-control" name="price" value="<?php echo $pro->price; ?>">
          </div>
          <div class="form-group">
            <label for="">Giá Mới</label>
            <input class="form-control" name="sale_price" value="<?php echo $pro->sale_price; ?>">
          </div>
          <div class="form-group">
            <label for="">Ảnh đại điện  </label>
            <input type="file" name="image" data-id="0" placeholder="xửa anh" class="add_img" id="imgInp" />
             <div class="review_0">
            <!-- <input type="file" name="image"> -->
            <img src="../uploads/product/<?php echo $pro->img; ?>" style="width: 100px; height: 100px;margin-top: 13px">
          </div>

          <div class="item-contact them">
           <label for="">Ảnh có liên quan</label>
           <div class="">
            <div class="row">
                <div id="other-img"  style="padding: 7px 0px;">
                 <?php  
                 $anh = $conn->query("SELECT * FROM product_img WHERE pro_id = $id "); ?>
                 <?php foreach($anh as $img) { 
                  ?>

              <div class="col-md-2"> 
               <div class="pro_item hover8">
                  <div >
                   <img src="../uploads/product/<?php echo $img->img_link; ?>" style="width: 100%; height: 120px;">
                </div>
                 <div class="sale">
                    <a class=""  href='index.php?module=product&action=xoaanh&id=<?php echo $img->id;; ?>&pro_id=<?php echo $id;?>' ng-click="login()">x</a>
                 </div>
               </div>
                  
              </div>
            
                <?php } ?>    
                <!-- <input type="file" class="" id="" name="image1[]" placeholder="" class="flex-last"> -->
            </div>
          </div>
        </div>
        <div style="padding: 7px 0px;">
           <div id="other-img">
                      <input type="file" class="add_img flex-last" multiple="" data-id="1" name="image1[]">
                      <div class="review_1"></div>
                    </div>
        </div>


      </div>
          <div class="form-group">
            <label for="">Mô tả</label>
            <textarea name="mota" class="form-control"><?php echo $pro->mota; ?></textarea>
          </div>
          <div class="form-group">
            <label for="">Nội dung</label>
            <textarea name="content" id="content" class="form-control"><?php echo $pro->content; ?></textarea>
            <tinymc>
          </div>
          <div class="text-center nu">
            <button type="submit" class="btn btn-primary">Lưu</button>
          </div>
        </form>
      </div>
      <!-- /.box-body -->
     <!--  <div class="box-footer">
        Footer
      </div> -->
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->
  </section>

    <script type="text/javascript">
      function add_img_file(){
        var other = document.getElementById('other-img');
        var input = document.createElement("input");
        input.type = 'file'; 
        input.name='image1[]';
        input.className='flex-last';
        other.appendChild(input);
      }
    </script>
