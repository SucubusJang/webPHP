<?php
class db{
    private $db;
    function _construct($user, $pass, $dbname, $debug){
        $this->db = new mysqli("localhost",$user,$pass,$dbname,$debug);
        $this -> set_charset("utf8");
        if($this->connect_errno){
            echo "Fail to connect to MYSQL: ".$this->connect_error;
            exit();
        }else{
            if($debug) echo "Connect success...";
        }
    } 
} 
$mydb = new db("sucubus","1236547","test",true);
?>