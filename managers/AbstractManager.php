<?php 

class AbstractManager {
    protected PDO $db;
            
    public function __construct() {
                
            $host = "db.3wa.io";
            $port = "3306";
            $dbname = "morganledez_crud_mvc";
            $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
        
            $user = "morganledez";
            $password = "fddf083ac397e60104689ea7c5404f7c";
        
            $this->db = new PDO(
            $connexionString,
            $user,
            $password
        );
    }
}

?>