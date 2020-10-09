<?php 
	class Contact extends Connect
	{
		function index()
		{
			$data['main'] = 'contact/main';

			 $this->load_views('layout/index', $data);
		}
	}
?>