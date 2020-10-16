<?php 
	class BlogAD extends Connect
	{
		function index()
		{
			$db = $this->load_models('M_Blog');
			
			$data['main'] = 'blog/main';

			$data['table'] = $db->select_table();

			$this->load_views('admin/index', $data);
		}

		function add()
		{
			$db = $this->load_models('M_Blog');

			$data['main'] = 'blog/add';

			$this->load_views('admin/index', $data);
		}

		function process_add()
		{
			$title = $link = $contentB = $img = '';

			// Lay du lieu
			$title = $_POST['title'];
			$link = $_POST['link'];
			$contentB = $_POST['contentB'];

			$kt=1;
			$err = '';

			// Kiem tra ten san pham
			if(strlen($title) > 100)
			{
				$kt = 0;
				$err .= "Tên sản phẩm vượt quá số ký tự cho phép.\n";
			}

			// Kiem tra link
			if(strlen($link) > 100)
			{
				$kt = 0;
				$err .= "Link vượt quá số ký tự cho phép.\n";
			}

			// Kiem tra ảnh
			if($_FILES['img']['name'] != '')
			{
				$target_dir = 'uploads/blogs/';
				$target_file = $target_dir.basename($_FILES['img']['name']);

				// Kiem tra
				$kt_uploads = 1;
				$err_uploads = '';

				// 1. Kiem tra ton tai hay chua
				if(file_exists($target_file))
				{
					$kt_uploads = 0;
					$err_uploads = "File đã tồn tại!\n";
				}

				// 2. Kiem tra file đã đúng định dạng hay chưa
				$duoi_mo_rong = '/^(image\/jpeg)|(image\/png)|(image\/jpg)$/';
				$ten_file = $_FILES['img']['type'];

				if(preg_match($duoi_mo_rong, $ten_file) == FALSE)
				{
					$kt_uploads = 0;
					$err_uploads = "File không đúng định dạng: .jpeg; .png; .jpg!\n";
				}

				// 3. Kiem tra size cua file
				if($_FILES['img']['size'] > 1024000) // 100 KB
				{
					$kt_uploads = 0;
					$err_uploads = "File vượt quá dung lượng lưu trữ!\n";
				}

				// Khong sai thi insert vao csdl
				if($kt_uploads == 1)
				{
					move_uploaded_file($_FILES['img']['tmp_name'], $target_file);

					$img = $_FILES['img']['name'];
				}
				else
				{
					$err .= "Ảnh chưa được tải lên\n".$err_uploads;
					$kt = 0;
				}
			}

			// Ket qua
			if($kt == 1)
			{
				$db = $this->load_models('M_Blog');

				$array = [
					'title' => $title,
					'link' => $link,
					'contentB' => $contentB,
					'img' => $img
				];

				$kq = $db->insert($array);

				echo $kq;
			}
			else
			{
				echo $err;
			}
		}
}
?>