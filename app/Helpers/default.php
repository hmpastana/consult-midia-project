<?php

if( !function_exists('printR')){
    function printR($key){
        echo '<pre>';
        print_r($key);
        echo "<br>";
        if(json_last_error()){
            print_r(json_last_error());
        }
        exit;
    }
}
