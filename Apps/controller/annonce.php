<?php
/*including the model and the view first*/
include_once '../view/annonceView.php';
require_once '../model/searchModel.class.php';
require_once '../inc/functions.php';
sec_session_start();
/* 
 * This Page is the main page telling us all
 * informations about the Ads
 */
if(isset($_GET['idAds']) && !empty($_GET['idAds'])){
    $idAds = filter_input(INPUT_GET, 'idAds', FILTER_SANITIZE_NUMBER_INT);
    //$idAds = $_GET['idAds'];
    $annonec = new annonceView();
    echo $annonec->getRoot();
    //instanciate a search Object from the Model
    $searchRes = new searchModel();
    echo $annonec->getHead($searchRes->getTitle($idAds));
    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
        echo $annonec->getProfilNav($_SESSION['username']);
    }else{
        echo $annonec->getNav();
    }
    echo $annonec->getBread("annonce");
    //$data = $searchRes->AdsInfo($idAds);
    //echo '<pre>';
    //print_r($data);
    echo $annonec->getAdsInfo($searchRes->AdsInfo($idAds));
    echo $annonec->getFooter();
}elseif (empty ($_GET['idAds'])) {
    echo "Jame3 li 9rayti fih ana li bnito";
    //redirect to error 404
}
