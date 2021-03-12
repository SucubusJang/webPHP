<?php
    include_once("dbcontrol.php");
    $mydb = new db("sucubus","","test",false);

    if($_SERVER['REQUEST_METHOD' == 'post']){
        
    }else if($_SERVER['REQUEST_METHOD' == 'get']){
       
    }else{
        http_response_code(405);
    }

    function show_data(){
        $mydb->query("SELECT * FROM customer");
        
    }
?>