<?php
/*including the model and the view first*/
include_once '../view/createAccView.php';
include_once '../model/createAccModel.class.php';
if(isset($_POST['create']) && !empty($_POST['create'])){
    // Sanitize and validate the data passed in
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $tel = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
    $country = filter_input(INPUT_POST, 'pays', FILTER_SANITIZE_NUMBER_INT);
    $ville = filter_input(INPUT_POST, 'ville', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $salt = md5(uniqid(openssl_random_pseudo_bytes(16), TRUE));
    $password = md5(filter_input(INPUT_POST, 'password' , FILTER_SANITIZE_STRING).$salt);
    $confPassword = md5(filter_input(INPUT_POST, 'passwd_conf' , FILTER_SANITIZE_STRING).$salt);
    //check existence of variable 
    if(empty($name) || empty($tel) || empty($country) || empty($ville) || empty($email) || empty($password)){
        echo 'please insert values in the inputs below';
        die();
    }
    //check if the password is equal or not
    if($password !== $confPassword && !empty($password)){
        echo $errorMsg = "These passwords doesn't match each other";
        //redirect to createAcc again
    }
    //check if the email exists before for another user or not
    $user = new User();
    if(!empty($user->getMemberId($email))){
        echo $errorMsg = "This user exist already";
        die();
    }else{
        // collect all the filterede variables in an array to send it to the DataBase
        $data = array('name'=>$name,'tel'=>$tel,'pays'=>$country,'ville'=>$ville,'email'=>$email,'password'=>$password,'confPasswd'=>$confPassword,'salt'=>$salt);
        $user->createAcc($data);
        //send email to the user just to activate his account
        $user->sendVerifMail($email);
        //echo '<pre>';
        //print_r($data);
        //redirect to a page telling him to validate account in gmail
    }   
}else{
    $createAcc = new createAccView();
    echo $createAcc->getRoot();
    echo $createAcc->getHead();
    echo $createAcc->getNav();
    echo $createAcc->getMainContent();
    echo $createAcc->getFooter();
}
