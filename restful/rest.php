<?php
    include_once("dbcontrol.php");
    include_once("util.php");
    $debug_mode = false;
    
    if($_SERVER['REQUEST_METHOD'] == 'GET'){ # select
        debug_text("for GET Method" ,$debug_mode); 
        echo json_encode(show_data($debug_mode));
    }else if($_SERVER['REQUEST_METHOD'] == 'POST'){ # insert , update
        debug_text("for POST Method", $debug_mode);
        $message = '{"Status":'+print_r($_POST)+'}';
        echo json_encode($message);
    }else{
        debug_text("Error Unknow this Request" ,$debug_mode);
        http_response_code(405);
    }

    function show_data($debug_mode){
        $mydb = new db("root","","personal",$debug_mode);
        $data = $mydb->query("SELECT * FROM customer");
        return $data;
    }
?>