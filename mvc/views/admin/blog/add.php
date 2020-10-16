<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
    <h7 class="m-0 font-weight-bold text-primary">Thêm mới bài viết</h7>
    </div>

    <div class="card-body">
      <form role="form" id="formBlog"  method="POST" enctype="multipart/from-data">

            <div class="form-group">
                <label for="title">Tiêu đề<span class="batbuoc">*</span></label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Nhập vào tên tiêu đề"
                onkeydown="ChangeToSlug()" onkeyup="ChangeToSlug()" onchange="ChangeToSlug()">
            </div>

            <div class="form-group ">
                <label for="link">Link</label>
                <input type="text" name="link" id="link" class="form-control">
            </div>  

            <div class="form-group ">
                <label for="contentB">Nội dung<span class="batbuoc">*</span></label>
                <textarea name="contentB"  name="contentB" id="contentB" ></textarea>
            </div>

            <div class="form-group">
                <label  for="image">Hình ảnh</label>
                <input type="file" name="img" id="img">
            </div>
           
            <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="status" id="status" checked>
                    <label class="form-check-label" for="status">Hiển thị</label>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Nhập lại</button>
            </div>
      </form>

    </div>
  </div>
</div>