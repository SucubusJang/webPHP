<?php
    include_once("dbcontrol.php");
    include_once("util.php");
    $debug_mode = true;
    

    if($_SERVER['REQUEST_METHOD'] == 'GET'){ # select
        debug_text("for GET Method" ,$debug_mode); 
        show_data();
    }else if($_SERVER['REQUEST_METHOD'] == 'POST'){ # insert , update , delete
        debug_text("for POST Method", $debug_mode);
    }else{
        debug_text("Error Unknow this Request" ,$debug_mode);
        http_response_code(405);
    }

    function show_data(){
        $mydb = new db("sucubus","","test",false);
        echo json_encode($mydb->query("SELECT * FROM customer"));
        $mydb->close();
        
    }
?>