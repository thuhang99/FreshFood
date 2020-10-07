<?php 
	class Blog extends Connect
	{
		function index()
		{
			$data['main'] = 'blog/main';

			 $this->load_views('layout/index', $data);
		}
	}
?>