<?php

class db{
    private $db;
    function __construct($user, $pass, $dbname, $debug){ #query insert,update,delete,selcet || connect,disconncet
        $this->debug = $debug;
        $this->db = new mysqli("localhost",$user,$pass,$dbname);
        $this ->db->set_charset("utf8");
        //check conntion
        if($this->connect_errno){
            echo "Fail to connect to MYSQL: ".$this->connect_error;
            exit();
        }else{
            $this->debug_text("Connect Sucess...", $debug);
        }
    } 
    function debug_text($text){
        if($this->debug){
            // if true debug text on for track any
            echo "Debug{$text}";
        }
    }
    function query($sql){
        $result = $this->db->query($sql);
        $this->debug_text($sql);
        $data = $result->fetch_all(MYSQLI_ASSOC);
        $this->debug_text(print_r($data));
        return $data;
    }
    function close(){
        $this->db->close();
    }
}
$mydb = new db("sucubus","","test",true);
?>