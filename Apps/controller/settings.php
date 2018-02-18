<?php
/*including the model and the view first*/
require_once '../view/profilView.php';
require_once '../model/profilModel.class.php';
require_once '../inc/functions.php';
sec_session_start();
if(!isset($_SESSION['user_id']) && empty($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}
if(isset($_POST['save_change']) && !empty($_POST['save_change'])){
    //Collect Variables that would be updated
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $tel = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $hideMyNumber = filter_input(INPUT_POST, 'phone-hidden', FILTER_SANITIZE_NUMBER_INT);
    if($hideMyNumber == 1){
        $hideMyNumber = 'yes';
    }else{
        $hideMyNumber = 'no';
    }
    $ville = filter_input(INPUT_POST, 'ville', FILTER_SANITIZE_STRING);
    //compress all variables in one array that would be sended to the model
    $data = array('name'=>$name,'tel'=>$tel,'hideNum'=>$hideMyNumber,'ville'=>$ville);
    //echo '<pre>';
    //print_r($data);
    $profil = new ProfilManager();
    if($profil->saveNewChanges($data)==TRUE){
        $_SESSION['username'] = $data['name'];
        //redirect to a page telling the user that the change was succesfully applied
    }else{
        //there was an error while trying to update changes
    }
}else{
    $sesstingView = new profilView();
    echo $sesstingView->getRoot();
    echo $sesstingView->getHead();
    echo $sesstingView->getProfilNav($_SESSION['username']);
    echo $sesstingView->getBread("Compte");
    echo $sesstingView->getSetting();
    echo $sesstingView->getFooter();
}

