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
function show_variable_introduce($sample){
    global $update_introduce;
    if(isset($update_introduce[$sample])){
        return $update_introduce[$sample];
    }
    else{
        echo 'Không có gì';
    }
}

function show_variable($sample){
    if(isset($sample)){
        return $sample;
    }
    else{
        echo 'Không có gì';
    }
}


function show_variable_contact($sample){
    global $update_contact;
    if(isset($update_contact[$sample])){
        return $update_contact[$sample];
    }
    else{
        echo 'Không có gì';
    }
}
function navigation($url ='?page=home'){
   if(!empty($url)){
    header("location: {$url}");
   }
} 

function show_array($array){
    if(isset($array)){
        return $array;
    }
    else{
        false;
    }
}
?>