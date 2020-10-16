  <script src="assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/admin/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="assets/admin/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/admin/js/demo/chart-area-demo.js"></script>
  <script src="assets/admin/js/demo/chart-pie-demo.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>

<!-- CKEDITOR -->
<script src="assets/admin/ckeditor/ckeditor.js"></script>
<script>CKEDITOR.replace('contentB');</script>

<script>
function ChangeToSlug()
{
  var title, slug;

  //Lấy text từ thẻ input title 
  title = document.getElementById("name").value;

  //Đổi chữ hoa thành chữ thường
  slug = title.toLowerCase();

  //Đổi ký tự có dấu thành không dấu
  slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
  slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
  slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
  slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
  slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
  slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
  slug = slug.replace(/đ/gi, 'd');
  //Xóa các ký tự đặt biệt
  slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
  //Đổi khoảng trắng thành ký tự gạch ngang
  slug = slug.replace(/ /gi, "-");
  //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
  //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
  slug = slug.replace(/\-\-\-\-\-/gi, '-');
  slug = slug.replace(/\-\-\-\-/gi, '-');
  slug = slug.replace(/\-\-\-/gi, '-');
  slug = slug.replace(/\-\-/gi, '-');
  //Xóa các ký tự gạch ngang ở đầu và cuối
  slug = '@' + slug + '@';
  slug = slug.replace(/\@\-|\-\@|\@/gi, '');
  //In slug ra textbox có id “slug”
  document.getElementById('link').value = slug;
}
</script>

<!-- Kiểm tra dữ liệu bảng Category -->
<script>
  <?php
  
    $url = $_GET['url'];
    $url = explode('/',$url);

    if($url[0]=='Category')
    {
      if(isset($url[1]))
      {
        if($url[1]!='')
        {

  ?>

          $(document).ready(function(){
            $('#formCategory').on('submit', function(e){
              // Tat load lai trang
              e.preventDefault();
              // Khai bao bien
              var name, link, note, img, kt=1, err='';
              // Lay du lieu
              name = $('#name').val();
              link = $('#link').val();
              note = $('#note').val();
              img = $('#img').val();
              
              var form = new FormData(this);
              form.append('name', name);
              form.append('link', link);
              form.append('note', note);
              form.append('img', img);

              // thêm id
              form.append('id', <?php echo (isset($url[2])) ? $url[2]:0; ?>);

              // Kết quả
              if(kt==1)
              {
                // Gửi ajax qua backend xử lý
                $.ajax({
                  // Đường dẫn
                  url:'<?php echo URL; ?>Category/process_<?php echo $url[1]; ?>',
                  type: 'POST',
                  data: form,
                  contentType: false,
                  cache: false,
                  processData: false,

                  success: function(rs){
                    if(rs=='ok'){
                      window.location.href='<?php echo URL; ?>Category';
                    } else if(rs=='ok-update'){
                      alert('Đã cập nhật thành công!');
                    } else {
                      alert(rs);
                    }
                  }
                });

                return false;
              }
              else
              {
                alert(err);
              }
            });
          });

  <?php        
        }
      }
    }
  ?>

  // ?>
</script>
