<?php 
    class M_Blog extends Database
    {
        private $table = 'blog';

        function insert($array)
        // function insert()
        {
            return $this->p_insert($this->table,$array);
        }

        function select_table()
        {
            $sql = "SELECT * FROM blog";
            $result = $this->conn->query($sql);

            if($result->num_rows > 0)
            {
                $str = '
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Hình ảnh</th>
                    <th>Tiêu đề</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>STT</th>
                    <th>Hình ảnh</th>
                    <th>Tiêu đề</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                  </tr>
                </tfoot>
                <tbody>
                ';
                $i = 0;
                while($row = $result->fetch_assoc()) {
                  $i++;
                    $str.='
                    <tr>
                      <td>'.$i.'</td>
                      <td><img src="'.URL.'uploads/blogs/'.$row['img'].'" width="100"></td>
                      <td>'.$row['title'].'</td>
                      <td>'.$row['created_at'].'</td>
                      <td>
                        <a href="#" class="btn btn-success btn-circle btn-sm">
                        <i class="fas fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-circle btn-sm">
                        <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr> ';
            }
                    $str.='
                    </tbody>
                    </table>';

                    $kq = $str;
          }
          else {
            $kq = 'Không có dữ liệu';
          }

          return $kq;
        }
    }
?>