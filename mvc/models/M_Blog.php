<?php 
    class M_Blog extends Database
    {
        private $table = 'blog';

        function insert($array)
        {
            return $this->p_insert($this->table,$id);
        }
    }
?>