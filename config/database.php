<?php 
    class db{
        private $host = "localhost";
        private $user = 'eka';
        private $pass = '1996699';
        private $db_name = 'Catatan_db';

        public function connect(){
            $con = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;
            $pdo = new PDO($con, $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }
    }
?>
