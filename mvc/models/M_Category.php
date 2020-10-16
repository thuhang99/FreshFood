<?php

    class M_Category extends Database
    {
        private $table = 'category';

        function insert($array)
        {
            return $this->p_insert($this->table, $array);
        }

        function select_table()
        {
            $sql = "SELECT * FROM category";
            $result = $this->conn->query($sql);

            if($result->num_rows > 0)
            {
                $str = '
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên danh mục</th>
                        <th>Link</th>
                        <th>Ghi chú</th>
                        <th>Ảnh</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Tên danh mục</th>
                        <th>Link</th>
                        <th>Ghi chú</th>
                        <th>Ảnh</th>
                        <th>Thao tác</th>
                    </tr>
                    </tfoot>
                    <tbody>
                ';

                $i = 0;

                while($row = $result->fetch_assoc())
                {
                    $i++;

                    $str .= '
                    <tr>
                        <td>'.$i.'</td>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['link'].'</td>
                        <td>'.$row['note'].'</td>
                        <td><img src="'.URL.'uploads/category/'.$row['img'].'" width="50"></td>
                        <td>
                        <a href="'.URL.'Category/edit/'.$row['ID'].'" class="btn btn-success btn-circle btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-circle btn-sm">
                            <i class="fas fa-trash"></i>
                        </a>
                        </td>
                    </tr>
                    ';
                }

                $str .= '
                    </tbody>
                    </table>
                ';

                $kq = $str;
            }
            else
            {
                $kq = '0 result';
            }

            return $kq;
        }
    }

?>