<?php 
    class Database {
        
        var $db_host;
        var $db_user; 
        var $db_pass;
        var $db_name;

        var $conn;
        public function __construct() {
            $this->db_host = "localhost";
            $this->db_user = "root"; 
            $this->db_pass = ""; 
            $this->db_name = "db_crud";
    
            $this->conn = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
            if (!$this->conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
        }
        public function insert($name, $email, $password) {
            $sql = "INSERT INTO users (name, email, password) VALUES ('".$name."', '".$email."', '".$password."')";
            
             if (mysqli_query($this->conn, $sql)) {
                 echo "New record created successfully";
             } else {
                 echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
             }
        }
        public function desconect() {
            mysqli_close($conn);
        }
    }
?>