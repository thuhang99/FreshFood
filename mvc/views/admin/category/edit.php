<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
    <h7 class="m-0 font-weight-bold text-primary">Chỉnh sửa danh mục</h7>
    </div>

    <div class="card-body">
      <form action="code.php" method="POST">
        <div class="modal-body">
            <div class="form-group">
                <label><strong>Tên danh mục:<span class="batbuoc">*</span></strong></label>
                <input type="text" name="name" id="name" class="form-control" value="<?php echo $data['row']['name']; ?>">
            </div>
            <div class="form-group">
                <label><strong>Link:</strong></label>
                <input type="text" class="form-control" name="link" id="link" value="<?php echo $data['row']['link']; ?>">
            </div>
            <div class="form-group">              
                <div class="form-group ">
                <label>Ghi chú:</label>
                <textarea name="note" class="form-control" name="note" id="note" rows="3">
                  <?php echo $data['row']['note']; ?>
                </textarea>
            </div>
            <div class="form-group">
              <label for="img">Ảnh đại diện</label>
                <div class="input-group">
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" name="img" id="img">
                      <label class="custom-file-label" for="img">Chọn ảnh</label>
                  </div>
                </div>
                <br>
                <p>
                  <img src="<?php echo URL.'uploads/category/'.$data['row']['img']; ?>" width="100">
                </p>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="addclass" class="btn btn-info">Lưu</button>
            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Nhập lại</button>
        </div>
      </form>

    </div>
  </div>
</div>