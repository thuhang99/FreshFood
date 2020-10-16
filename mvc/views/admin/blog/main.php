<div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Quản lý bài viết</h6>
            </div>
            <div class="card-body">

            <div>
            <a href="<?php echo URL.'BlogAD/add'?>" class="btn btn-primary">Thêm mới bài viết</a> 
            </div>
            <br>
              <div class="table-responsive">
             
                  <?php echo $data['table'];?>
              
              </div>
            </div>
          </div>

        </div>