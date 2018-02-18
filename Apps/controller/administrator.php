<?php
require_once '../view/adminView.php';
require_once '../model/AdminModel.class.php';
require_once '../inc/functions.php';
sec_session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST['login']) && empty($_POST['login']) ){
    // Sanitize and validate the data passed in
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    if(empty($email) || empty($password)){
        echo 'please check your inputs';
        die();
    }else{
    //try to login
        $admin = new Admin();
        if($admin->login($email, $password ,"admin" ) === TRUE){
            //redirect to admin profile
            //echo "welcome to profile";
            //echo '<pre>';
            //print_r($_SESSION);
            header("Location: AdminPanel.php");
            exit();
        }else{
            //retry to login 
            echo "The login and password you've entered is incorrect";
        } 
    }
}else{
    $admin = new adminView();
    echo $admin->getHead();
    echo $admin->getAdm();
}

