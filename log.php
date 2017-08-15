<?php 

$call_back = $_GET['call_back'];

if( $_COOKIE['uuid'] == '' ){
    header("Location:http://paladnix.b/login.html?call_back=$call_back");
}else{ 
    $uuid = 553;
    header("Location:$call_back?$uuid");
}
