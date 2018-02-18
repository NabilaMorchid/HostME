<?php
/*including the model and the view first*/
require_once '../view/loginView.php';
require_once '../model/loginModel.class.php';
require_once '../inc/functions.php';
//require_once '../inc/Connect.php';
sec_session_start();
/*Fineal test*/
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
    header("Location: profil.php");
    exit();
}
if(isset($_POST['login']) && !empty($_POST['login'])){
    // Sanitize and validate the data passed in
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    if(empty($email) || empty($password)){
        echo 'please check your inputs';
        die();
    }else{
    //try to login
        $member = new Member();
        if($member->login($email, $password , "Members") === TRUE){
            //redirect to profile
            //echo "welcome to profile";
            //echo '<pre>';
            //print_r($_SESSION);
            header("Location: profil.php");
            exit();
        }else{
            //retry to login 
            echo "The login and password you've entered is incorrect";
        } 
    }
}else{
//    $user = $fb->getUser();
//    if($user){
//        $member = $fb->api('/me?fields=id,name,email,locale');
//        echo "<pre>";
//        //print_r($member);
//        $_SESSION['user_id'] = $member['id'];
//        $_SESSION['username'] = $member['name'];
//        $_SESSION['email'] = $member['email'];
//        header("Location: profil.php");
//        exit();
//        //echo "welcome";
//    }else{
        //$loginUrl = $helper->getLoginUrl('http://localhost/hostMe/Apps/controller/profil.php', $permissions);
        //$url = $fb->getLoginUrl(array("scope"=>$fbPermissions));
        //instanciate an object from the loginView
        $login = new loginView();
        //dispaly bloks in forms of functions
        echo $login->getRoot();
        echo $login->getHead();
        echo $login->getNav();
        echo $login->getBread("Compte");
        echo $login->getLoginForm();
        echo $login->getFooter();
     // }
    
}