<?php 
	class Admin extends Connect
	{
		function index()
		{
			$data['main'] = 'home/main';

			 $this->load_views('admin/index', $data);
		}
	}
?>