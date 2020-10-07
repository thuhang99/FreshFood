<?php 
	class Layout extends Connect
	{
		function index()
		{
			$data['main'] = 'home/main';

			if(isset($_GET['url']))
			{
				if(strpos($_GET['url'], '.html'))
				{
					$data['main']='product/main';
				}
				else {
					$data['main']='category/main';
				}
			}
			 $this->load_views('layout/index', $data);
		}
	}
?>