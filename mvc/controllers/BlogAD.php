<?php 
	class BlogAD extends Connect
	{
		function index()
		{
			$data['main'] = 'blog/main';

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
			$title = $link = $contentB = $image = $err = $status ='';

			$title = $_POST['title'];
			$link = $_POST['link'];
			$contentB = $_POST['contentB'];
			$status = $_POST['status'];
			
			$flag = 1;

			if(strlen($name)>100){
                $flag=0;
                $err.="Tên bài viết vượt quá số ký tự cho phép\n";
			}
			
			if(strlen($link)>100){
                $flag=0;
                $err.="Link vượt quá số kí tự cho phép\n";
			}
			
			if( $_FILES['image']['name']!='' )
            {
                $target_dir = 'uploads/blogs/';
                $target_file = $target_dir . basename( $_FILES['image']['name'] );

                $flag_uploads=1;

                $err_uploads = '';

                if( file_exists($target_file) )
                {
                    $flag_uploads=0;
                    $err_uploads = "File đã tồn tại\n";
                }

                $pattern = '/^(image\/jpeg)|(image\/png)$/';
                $subject = $_FILES['image']['type'];

                if( preg_match( $pattern, $subject ) == FALSE )
                {
                    $flag_uploads=0;
                    $err_uploads = "File không đúng định dạng: .jpg, .png\n";
                }

                if( $_FILES['image']['size'] > 102400 ) // 100 KB
                {
                    $flag_uploads=0;
                    $err_uploads = "File vượt quá dung lượng: 100KB\n";
                }

                if( $flag_uploads==1 )
                {
                    move_uploaded_file( $_FILES['image']['tmp_name'], $target_file );
                    $img = $_FILES['img']['name'];
                }
                else
                {
                    $err.="Ảnh chưa được tải lên\n".$err_uploads;
                    $flag=0;
                }
			}
			
			if($flag==1)
			{
				$db = $this->load_models('M_Blog');

				$array = [
					'title' 	=> $title,
					'link'  	=> $link,
					'contentB'  => $contentB,
					'image'		=> $image,
					'status'	=> $status
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