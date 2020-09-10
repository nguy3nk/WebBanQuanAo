  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm mới sản phẩn
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
         <form class="form-group form-contact" role="form" action="" method="post" name="">
          <div class="">
            <div class="">
               <div class="item-contact them">
                <label for="dia-chi">Tài khoảng:</label>
                <input type="text" class="form-control" id="dia-chi" placeholder="">
              </div>
               <div class="item-contact them">
                <label for="dia-chi">Mật khẩu:</label>
                <input type="text" class="form-control" id="dia-chi" placeholder="">
              </div>
              <div class="item-contact them">
                <label for="ho-ten">Họ Và tên*:</label>
                <input type="text" class="form-control" id="ho-ten" required placeholder="" >
              </div>
              <div class="item-contact them">
                <label for="mail">Email:</label>
                <input type="mail" class="form-control" id="mail" required placeholder="">
              </div>
              <div class="item-contact them">
                <label for="sdt">Ngày sinh:</label>
                <input type="date" class="form-control"id="date" name="date" placeholder="Ngày sinh" required="required">
              </div>
              <div class="item-contact them">
                <label for="dia-chi">Địa chỉ:</label>
                <input type="text" class="form-control" id="dia-chi" placeholder="">
              </div>
              <div class="item-contact them">
                <label for="dia-chi">Gới tính:</label>
                <select class="form-control" >
                  <option>Nam</option>
                  <option>Nữ</option>
                </select>
              </div>
              <div class="item-contact them">
                <label for="request" class="request">nội dung*:</label>
                <textarea type="text" class="form-control" id="request" placeholder="Ý kiến của bạn" rows="6" required></textarea>
              </div>


              
              <div class="text-center">
                <input type="submit" class="btn btn-button btn-gui" value="thêm vào"/>
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
  var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("date")[0].setAttribute('max', today);
    </script>