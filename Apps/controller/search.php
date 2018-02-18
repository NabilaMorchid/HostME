<?php
/*including the model and the view first*/
require_once '../view/searchView.php';
require_once '../model/searchModel.class.php';
require_once '../inc/functions.php';
sec_session_start();
if(isset($_GET['city']) && isset($_GET['cin']) && isset($_GET['cout']) && isset($_GET['type']) && isset($_GET['page'])){
    // Sanitize and validate the data passed in
    $city = filter_input(INPUT_GET, 'city', FILTER_SANITIZE_STRING);
    $cin = filter_input(INPUT_GET, 'cin', FILTER_SANITIZE_NUMBER_INT);
    $cout = filter_input(INPUT_GET, 'cout', FILTER_SANITIZE_NUMBER_INT);
    $categ = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_NUMBER_INT);
    $data = array('city'=>$city,'cin'=>$cin,'cout'=>$cout,'categ'=>$categ);
    /*instanciat a view Object*/
    $searchView = new searchView();
    echo $searchView->getRoot();
    echo $searchView->getHead();
    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
        echo $searchView->getProfilNav($_SESSION['username']);
    }else{
        echo $searchView->getNav();
    }
    echo $searchView->getSearchForm();
    echo $searchView->getBread("recherche");
    //instanciate a search Object from the Model
    $searchRes = new searchModel();
    $info = $searchRes->xxx();
    $result = $searchRes->MySearchResult($info['range'],$info['perpage']);
    echo $searchView->getResultSearch($searchRes->MyCustomSearchResult($data,$info['range'],$info['perpage']),$info['next'],$info['prev'],$info['page'],$info['number'],$result);
    echo $searchView->getFooter();
    //echo '<pre>';
    //print_r($data);
}else{
    $searchView = new searchView();
    echo $searchView->getRoot();
    echo $searchView->getHead();
    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
        echo $searchView->getProfilNav($_SESSION['username']);
    }else{
        echo $searchView->getNav();
    }
    echo $searchView->getSearchForm();
    echo $searchView->getBread("recherche");
    //instanciate a search Object from the Model
    $searchRes = new searchModel();
    $data = $searchRes->xxx();
    $result = $searchRes->MySearchResult($data['range'],$data['perpage']);
    echo $searchView->getResultSearch($searchRes->MySearchResult($data['range'],$data['perpage']),$data['next'],$data['prev'],$data['page'],$data['number'],$result);
    echo $searchView->getFooter();
}
