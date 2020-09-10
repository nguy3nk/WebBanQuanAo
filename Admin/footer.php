  </div>
  <footer class="main-footer">
    <strong>Bản quyền thuộc về<a href="https://adminlte.io"> Nhóm 10</a> .</strong>Tất cả các quyền kín đáo.
  </footer>


  <!-- ./wrapper -->

  <!-- jQuery 3 -->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/adminlte.min.js"></script>
  <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="js/select2.min.js"></script>
  <script src="js/dashboard.js"></script>
  <script src="tinymce/tinymce.min.js"></script>
  <script src="tinymce/config.js"></script>
  <script src="js/function.js"></script>

  <script type="text/javascript">
function readURL(input, data_id) {

  if (input.files && input.files[0]) {
    $('.review_'+data_id).html("");
    for(var i = 0; i < input.files.length; i++){
      var reader = new FileReader();

      reader.onload = function(e) {
        var data = e.target.result;
        var img = '<img style="height: 100px; width: 100px; padding: 5px;" src="'+data+'" alt="your image" />';
        $('.review_'+data_id).append(img);
      }
      reader.readAsDataURL(input.files[i]);
    }
    //reader.readAsDataURL(input.files[0]);
  }
}
    $(document).ready(function(){
      $(".add_img").change(function() {
        var data_id = $(this).data("id");
        //alert(data_id);
          readURL(this, data_id);
      });
      $('#myTable').DataTable({
            // ordering: false,
            "order": [[ 1, "desc" ]],
            "oLanguage": {
              "sSearch": "Tìm kiếm: "
            },
            "language": {
              "paginate": {
                "previous": "Lùi",
                "next": "Tiến"
              }
            },
            "bLengthChange": false,
            "bInfo": false,
          });
    });
  </script>
  
</body>
</html>