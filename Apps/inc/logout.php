<?php
require_once 'functions.php';
//require_once 'Connect.php';
//if($fb->getUser()){
//    $fb->destroySession();
//}else{
    sec_session_start();
    // unset all session values into an empty array
    session_unset();
    $_SESSION = array();
    // get session parameters 
    $params = session_get_cookie_params();
    //delete the actual cppkie
    setcookie(session_name(),'', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
    // Destroy session 
    session_destroy();
    //redirect to the index.php
    header("Location: ../controller/index.php");
    exit();
//}
