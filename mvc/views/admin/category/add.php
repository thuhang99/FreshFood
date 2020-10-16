<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
    <h7 class="m-0 font-weight-bold text-primary">Thêm mới danh mục</h7>
    </div>

    <div class="card-body">
      <form role="form" id="formCategory" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="form-group">
                <label><strong>Tên danh mục:<span class="batbuoc">*</span></strong></label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nhập vào tên danh mục" onkeyup="ChangeToSlug()" onkeydown="ChangeToSlug()">
            </div>
            <div class="form-group">
                <label><strong>Link:</strong></label>
                <input type="text" class="form-control" name="link" id="link">
            </div>
            <div class="form-group">              
                <div class="form-group ">
                <label>Ghi chú:</label>
                <textarea name="note" class="form-control" name="note" id="note" rows="5"></textarea>
            </div>
            <!-- <div class="form-group">
            <label for="img">Ảnh đại diện</label>
              <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="img" id="img">
                    <label class="custom-file-label" for="img">Chọn ảnh:</label>
                </div>
              </div>
            </div> -->
            <div class="form-group">
                <label  for="image">Hình ảnh: </label>
                <input type="file" name="img" id="img">
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