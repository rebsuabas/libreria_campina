<?php

    class Conexion { 
        
        private $host;
        private $dbname;
        private $user;
        private $pwd;
        private $charset;
        
        public function __construct(){
            $this->host     = 'localhost';
            $this->dbname   = 'libreria_campina';
            $this->user     = 'root';
            $this->pwd      = '2asir';
            $this->charset  = 'utf8mb4';
        }

        public function connect(){
            try {
                $connection = "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=" . $this->charset;
                $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            PDO::ATTR_EMULATE_PREPARES => false];
                $pdo = new PDO($connection, $this->user, $this->pwd, $options);
                return $pdo;
            } catch (PDOException $e) {
                print_r("Error connection: " . $e->getMessage());
            }
        }
        
    }
    
?>