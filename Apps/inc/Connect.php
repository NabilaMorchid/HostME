<?php
/*
*   Login with Facebook 
*/
require_once 'facebook/facebook.php';

$appId          = "1720027144922957"; //Facebook App ID
$appSecret      = "8ebc27fc34577d47c7f5c09e54e1b97f"; // Facebook App Secret
//$homeurl        = 'http://localhost/my_test/login.php?login=facebook';  //return to home " ?login=facebook "
$fbPermissions  = 'email';  //Required facebook permissions

//Call Facebook API
$fb = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));

