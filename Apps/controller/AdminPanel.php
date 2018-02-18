<?php
/*including the model and the view first*/
include_once '../view/profilAdminView.php';
require_once '../model/AdminModel.class.php';
require_once '../inc/functions.php';
sec_session_start();
if(!isset($_SESSION['user_id']) && empty($_SESSION['user_id'])){
    header("Location: administrator.php");
    exit();
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST['accept']) && empty($_POST['accept'])){
    $adm = new Admin();
    echo $adm->acceptAds();
}elseif(isset ($_POST['decline']) && empty ($_POST['decline'])){
    $adm = new Admin();
    echo $adm->declineAds();
}else{
    $admProfil = new profilAdminView();
    echo $admProfil->getHead();
    echo $admProfil->getheader();
    echo $admProfil->getMenu();
    $admData = new Admin();
    echo $admProfil->getContent($admData->getAds(),$admData->getRegistredUser(),$admData->getNumberOfAds());
}
