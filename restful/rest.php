<?php
    include_once("dbcontrol.php");
    include_once("util.php");
    $debug_mode = false;
    
    if($_SERVER['REQUEST_METHOD'] == 'GET'){ # select
        debug_text("for GET Method" ,$debug_mode); 
        echo json_encode(show_data($debug_mode));
    }else if($_SERVER['REQUEST_METHOD'] == 'POST'){ # insert , update //ถ้ามีตัวแปรเข้ามาจะทำการเช็ค
        debug_text("for POST Method", $debug_mode);
        if(isset($_POST['u_id']) && isset($_POST['u_name'])){
            $u_id = $_POST['u_id'];
            $u_name = $_POST['u_name'];
            insert_data($u_id,$u_name,$debug_mode);
        }
        // $message = '{"Status":'+print_r($_POST)+'}';
        // echo json_encode($message);
    }else{
        debug_text("Error Unknow this Request" ,$debug_mode);
        http_response_code(405);
    }

    function show_data($debug_mode){
        $mydb = new db("root","","personal",$debug_mode);
        $data = $mydb->query("SELECT * FROM customer");
        return $data;
    }

    function insert_data($u_id ,$u_name ,$debug_mode){
        $mydb = new db("root","","personal",$debug_mode);
        $data = $mydb->query("insert.....");
        show_data($debug_mode);
        return $data;
    }
?>