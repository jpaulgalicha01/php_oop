<?php
include 'includes/autoload.inc.php';

function secured($data){
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    $data = trim($data);
    $data = str_replace("'","/'",$data);
    return $data;
}
if(isset($_POST['logging_in']) && secured($_POST['function']) == 'logging_in'){
    $name = secured($_POST['uname']);
    $pass = secured($_POST['pass']);

    $logging_in = new fetch();
    $logging_in->log_in($name,$pass);
}else{
    header("Location: index.php");
}
?>