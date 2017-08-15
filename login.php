<?php

$name = $_POST['name'];
$pw = $_POST['pw'];

$call_back = $_GET['call_back'];

if($name == 'baiyan'){
    $uuid = 553;
    header("Location:$call_back?$uuid");
}
else {
    header("Location:http://paladnix.b/login.html?call_back=$call_back");
}
