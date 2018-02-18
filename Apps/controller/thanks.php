<?php
/*including the model and the view first*/
require_once '../view/thanksView.php';
require_once '../inc/functions.php';
sec_session_start();
if(!isset($_SESSION['user_id']) && empty($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}else{
    // we have session so we instanciate an object from the thanks View
    $thanks = new thanksView();
    //dispaly bloks in forms of functions
    echo $thanks->getRoot();
    echo $thanks->getHead();
    echo $thanks->getProfilNav($_SESSION['username']);
    echo $thanks->getBread("Merci");
    echo $thanks->getThanks();
    echo $thanks->getFooter();    
}
    
