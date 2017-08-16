<?php 

if( ($_GET['uuid']== '' || $_GET['uuid']!=553) && ($_COOKIE['uuid']=='' || $_COOKIE['uuid']!=553 )){
    header("Location:http://paladnix.b/sso/log.php?call_back=http://baiyan.a/sso/hello.php");
}
else{
    setcookie('uuid', $_GET['uuid'], time()+3600);
    echo "Hello ".$_GET['uuid']." ".$_COOKIE['uuid'];
}
