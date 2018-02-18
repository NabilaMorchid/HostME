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
if(isset($_POST['reNew']) && empty($_POST['reNew'])){
    //send a post to the DB to reNew the Ads
    
}else if(isset ($_POST['modify']) && empty ($_POST['modify'])){
    //send a post to the DB to modify the Ads
    
}else if(isset ($_POST['delete']) && empty ($_POST['delete'])){
    //send a post to the DB to delete the Ads
    
}else if(isset ($_POST['getMyAds']) && empty ($_POST['getMyAds'])){
    
}
else{
    //get my ads from database
    $x = new ProfilManager();
    //instanciate an object from the profilView
    $profil = new profilView();
    //dispaly bloks in forms of functions
    echo $profil->getRoot();
    echo $profil->getHead();
    echo $profil->getProfilNav($_SESSION['username']);
    echo $profil->getBread("Compte");
    echo $profil->getItems($x->getMyAds($_SESSION['user_id']));
    echo $profil->getFooter();
}