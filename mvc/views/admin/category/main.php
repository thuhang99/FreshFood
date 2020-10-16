<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Bảng danh mục</h6>
      
    </div>
    
    <div class="card-body">
      <div class="table-responsive">
      <h3 class="card-title">
        <a href="<?php echo URL.'Category/add' ?>" class="btn btn-primary">Thêm sản phẩm</a>
      </h3>
        <?php echo $data['table']; ?>
      </div>
    </div>
  </div>

</div>