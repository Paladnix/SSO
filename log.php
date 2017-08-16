<?php 

$call_back = $_GET['call_back'];

if( $_COOKIE['uuid'] == '' ){
    header("Location:http://paladnix.b/sso/loginh.php?call_back=$call_back");
}else{ 
    $uuid = 553;
    setcookie('uuid', $uuid);
    //echo $_COOKIE['uuid'];
    header("Location:$call_back?uuid=$uuid");
}
