<?php
    class Post{
        private $conn;
        private $table = "posts";

        public $id;
        public $name;
        public $valor;
        public $qtd;

        public function __construct($db){
            $this->conn = $db;
        }

        public function read(){
            
            $query = 'SELECT * FROM ' .$this->table;
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }
    }

    ?>