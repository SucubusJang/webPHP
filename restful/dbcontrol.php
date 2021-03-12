<?php

class db{
    private $db;
    function _construct($user, $pass, $dbname, $debug){ #query insert,update,delete,selcet || connect,disconncet
       echo "test"; 
       $this->db = new mysqli("localhost",$user,$pass,$dbname,$debug);
        $this -> set_charset("utf8");
        //check conntion
        if($this->connect_errno){
            echo "Fail to connect to MYSQL: ".$this->connect_error;
            exit();
        }else{
            $this->debug_text("Connect Sucess...", $debug);
        }
    } 
    function debug_text($text ,$mode){
        if($mode){
            // if true debug text on for track any
            echo $text;
        }
    }
    function query($sql){
        $this->db->query($sql);
        $result = $this->db->fetch_all(MYSQLI_ASSOC);
        $this->debug_text($result,$mode);
        return $result;

    }
}
$mydb = new db("sucubus","1236547","test",true);
?>