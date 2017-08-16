<?php

$name = $_POST['name'];
$pw = $_POST['pw'];
$call_back = $_POST['call_back'];

if($name == 'baiyan'){
    $uuid = 553;
    setcookie('uuid', $uuid, time()+1800);
    header("Location:$call_back?uuid=$uuid");
}
else {
    header("Location:http://paladnix.b/sso/loginh.php?call_back=$call_back&uuid=$uuid&name=$name");
}
