<?php
    class Database
    {
        protected $servername = SV;
        protected $username = USR;
        protected $password = PAS;
        protected $dbname = DB;

        public $conn = '';

        function __construct()
        {
            $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
            
            if ($this->conn->connect_error) 
            {
                die("Connection failed: " . $this->conn->connect_error);
            }
            else {
                $this->conn-> set_charset("utf8");
            }

        }

        function p_insert($table,$array)
        {
            $str_key = '';
            $str_value = '';

            foreach($array as $key => $value)
            {
                $str_key .= $key.',';
                $str_value .= "'".$value."'," ;
            }
            
            $str_key = trim($str_key, ',');
            $str_value = trim($str_value, ',');

            $sql = "INSERT INTO $table ($str_key) VALUES ($str_value)";
            if($this->conn->query($sql) == TRUE)
            {
                $kq = 'Thành công';
            }
            else
            {
                $kq = "Error: ".$sql."<br>".$this->conn->error;
            }

            return $kq;
        }
    }

?>