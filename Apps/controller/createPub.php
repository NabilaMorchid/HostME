<?php
/*including the model and the view first*/
include_once '../view/createPubView.php';
include_once '../model/loginModel.class.php';
require_once '../inc/functions.php';
sec_session_start();
if(!isset($_SESSION['user_id']) && empty($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}
if(isset($_POST['create']) && !empty($_POST['create'])){
    // Sanitize and validate the data passed in
    $cat = filter_input(INPUT_POST, 'categorie', FILTER_SANITIZE_NUMBER_INT);
    $surface = filter_input(INPUT_POST, 'surface', FILTER_SANITIZE_NUMBER_INT);
    $ville = filter_input(INPUT_POST, 'ville', FILTER_SANITIZE_STRING);
    $adress = filter_input(INPUT_POST, 'adresse', FILTER_SANITIZE_STRING);
    $titre = filter_input(INPUT_POST, 'titre', FILTER_SANITIZE_STRING);
    $descrip = filter_input(INPUT_POST, 'descrip', FILTER_SANITIZE_STRING);
    $prix = filter_input(INPUT_POST, 'prix', FILTER_SANITIZE_NUMBER_INT);
    $villech = filter_input(INPUT_POST, 'villeechange', FILTER_SANITIZE_STRING);
    $debut = filter_input(INPUT_POST, 'debut', FILTER_SANITIZE_NUMBER_INT);
    $fin = filter_input(INPUT_POST, 'fin', FILTER_SANITIZE_NUMBER_INT);
    $picName = filter_input(INPUT_POST, 'picName', FILTER_SANITIZE_STRING); 
    //check existence of variable 
    if(empty($cat) || empty($ville) || empty($adress) || empty($titre) || empty($descrip)){
        echo 'please insert values in the inputs below';
        die();
    }
    $data = array('cat'=>$cat,'surface'=>$surface,'ville'=>$ville,'adresse'=>$adress,'titre'=>$titre,'descrip'=>$descrip,'price'=>$prix,'villeech'=>$villech,'debut'=>$debut,'fin'=>$fin,'picName'=>$picName);
    //everything is good so we create our member object to post ads
    $member = new Member();
    $member->postAds($_SESSION['user_id'], $data );
    //echo '<pre>';
    //print_r($data);
    //redirect to the thnaks page
    header("Location: thanks.php");
    exit();
}else if(isset($_FILES['image'])){
    //check file verification before upload
    //size  , extension , changing name
    if(move_uploaded_file($_FILES['image']['tmp_name'],"../upload/{$_FILES['image']['name']}") == TRUE){
        echo $_FILES['image']['name'].' was uploades succesfully<br/>';
    }else{
         echo $_FILES['image']['name'].' could not be uploaded<br/>';
    }
}else{
    //instanciate an object from the indexView
    $createAds = new createPubView();
    //dispaly bloks in forms of functions
    echo $createAds->getRoot();
    echo $createAds->getHead();
    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
        echo $createAds->getProfilNav($_SESSION['username']);
    }
    echo $createAds->getCreatPub();
    echo $createAds->getFooter();
}