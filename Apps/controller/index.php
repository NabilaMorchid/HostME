<?php
/*including the model and the view first*/
include_once '../view/indexView.php';
include_once '../model/index.class.php';
require_once '../inc/functions.php';
sec_session_start();
if(isset($_GET['city']) && isset($_GET['cin']) && isset($_GET['cout']) && isset($_GET['type']) ){
    // Sanitize and validate the data passed in
    $city = filter_input(INPUT_GET, 'city', FILTER_SANITIZE_STRING);
    $cin = filter_input(INPUT_GET, 'cin', FILTER_SANITIZE_NUMBER_INT);
    $cout = filter_input(INPUT_GET, 'cout', FILTER_SANITIZE_NUMBER_INT);
    $categ = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_NUMBER_INT);
    $data = array('city'=>$city,'cin'=>$cin,'cout'=>$cout,'categ'=>$categ);
    header("Location: search.php?page=1&city=".$data['city']."&cin=".$data['cin']."&cout=".$data['cout']."&type=".$data['categ']);
    exit();
}else{
    //instanciate an object from the indexView
    $index = new indexView();
    //dispaly bloks in forms of functions
    echo $index->getRoot();
    echo $index->getHead();
    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
        echo $index->getProfilNav($_SESSION['username']);
    }else{
        echo $index->getNav();
    }
    echo $index->getHeader();
    echo $index->getHowItWorks();
    $indexMod = new indexModel();
    echo $index->getSlider($indexMod->getTheLatestAds());
    echo $index->getWHatTheySaid();
    echo $index->getFooter();
}