<?php
    class App{

        protected $controllers = 'Layout'; 
        protected $actions = 'index'; 
        protected $params = []; 

        function __construct()
        {
            $url = $this->getUrl(); 

            if( isset($url[0]) )
            {

                if( file_exists( './mvc/controllers/'.$url[0].'.php' ) )
                {

                    $this->controllers = $url[0];


                    unset($url[0]);
                }
            }

            require_once './mvc/controllers/'.$this->controllers.'.php';

            $this->controllers = new $this->controllers;

            if( isset($url[1]) )
            {
                
                if( method_exists($this->controllers, $url[1]) )
                {
                    $this->actions = $url[1];

                    unset($url[1]);
                }
            }

            if( is_array($url) )
            {
                $this->params = array_values($url);
            }

            call_user_func_array( [$this->controllers, $this->actions], $this->params );
        }

        function getUrl()
        {
            (isset($_GET['url'])) ? $kq = explode('/', trim($_GET['url']) ) : $kq = '';
            return $kq;
        }
    }
?>