<?php
    function debug_text($text){
        if($this->db->debug){
            // if true debug text on for track any
            echo "Debug :{$text}<br>";
        }
    }
?>