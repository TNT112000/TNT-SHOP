<?php

function show_error($sample){
    $error=array();
    global $error;
    if(!empty($error[$sample])){
        return $error[$sample];
    }
}

function show_success($sample){
    global $success;
    if(!empty($success[$sample])){
        return $success[$sample];
    }
}
function show_variable($sample){
    global $$sample;
    if(isset($$sample)){
        return $$sample;
    }
}
function navigation($url ='?page=home'){
   if(!empty($url)){
    header("location: {$url}");
   }
} 
?>