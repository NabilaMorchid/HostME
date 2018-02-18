<?php
require_once '../../DBinteraction/dbConnect.php';
require_once '../inc/PHPMailer-master/PHPMailerAutoload.php';
require_once '../inc/functions.php';
/**
* this class will be reponsible on Member Login & checking BruteForcing account 
*/

class Member {
    /*Setting Attributs*/
    protected $cn;
    protected $db;
    /*Generating constructor*/
    function __construct() {
        $this->db = new dbConnect();
        $this->cn = $this->db->connect();
    }
    /*Destructor to close conenction with the Database*/
    function __destruct() {
        $this->cn = null;
    }
    /*the principal login function*/
    public function login($email , $password , $table) {
        try {
            $query = $this->cn->prepare("SELECT id , name , password , salt FROM $table WHERE email = :email LIMIT 1");
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);
            // hash the password
            $password = md5($password.$result['salt']);
            if($query->rowCount()==1){
                // If the user exists we check if the account is locked
                // from too many login attempts 
                if($this->checkBrute($result['id']) == TRUE){
                    // Account is locked 
                    // Send an email to user saying their account is locked 
                    return FALSE;
                }else{
                    if($result['password'] == $password){
                    // Password is correct :D
                    // Get the user-agent string of the user.
                    $user_browser = filter_input(INPUT_SERVER, 'HTTP_USER_AGENT' , FILTER_SANITIZE_STRING);
                    // XSS protection as we might print this value
                    $user_id = preg_replace("/[^0-9]+/", "", $result['id']);
                    $_SESSION['user_id'] = $user_id;
                    // XSS protection as we might print this value
                    $username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $result['name']);
                    $_SESSION['username'] = $username;
                    $_SESSION['login_string'] = hash('sha512', $password . $user_browser);
                    $_SESSION['email'] = $email;
                    //Login Sucessful
                    return TRUE;
                    }else{
                        //password is incorrect ==> We record this attempt in the database 
                        $now = time();
                        if(!$this->cn->query("INSERT INTO login_attempts VALUES($result[id] , $now)")){
                            //redirect to an error page
                            exit();
                        }
                    return FALSE;
                    }
                }
            }else{
                //No user exists
                return FALSE;
            }
        } catch (Exception $exc) {
            // Could not create a prepared statement
            echo $exc->getMessage();
        }
    }
    /*checking BruteForce Login*/
    public final function checkBrute($user_id) {
        // Get timestamp of current time 
        $now = time();
        // All login attempts are counted from the past 2 hours. 
        $valid_attempts = $now - (2 * 60 * 60);
        try {
            $query = $this->cn->prepare("SELECT time FROM login_attempts WHERE member_id = :id AND time > '$valid_attempts' ");
            $query->bindParam(':id', $user_id, PDO::PARAM_INT);
            $query->execute();
            // If there have been more than 3 failed logins
            if($query->rowCount() > 3 ){
                return TRUE;
            }else{
                return FALSE;
            }
        } catch (Exception $exc) {
            // Could not create a prepared statement ==> redirect to an error page
            echo $exc->getMessage();
        }
    }
    /*checking if the user close navigator
     * suddenly while having a session \
     * we'lle redirect him into his session without reask for login and password */
    public final function loginCheck() {
        if(isset($_SESSION['user_id'] , $_SESSION['username'] , $_SESSION['login_string'])){
            $user_id = $_SESSION['user_id'];
            $login_string = $_SESSION['login_string'];
            $username = $_SESSION['username'];
            //get the user agent string
            $user_agent = $_SERVER['HTTP_USER_AGENT'];
            try {
                $query = $this->cn->prepare("SELECT password FROM Members WHERE id = :id LIMIT 1");
                $query->bindParam(':id', $user_id, PDO::PARAM_INT);
                $query->execute();
                if($query->rowCount() == 1){
                    //user exist
                    $password = $query->fetchColumn();
                    $login_check = hash('sha512', $password . $user_agent);
                    if($login_check == $login_string){
                        return TRUE;
                    }else{
                        return FALSE;
                    }
                }else{
                    //no user founded
                    return FALSE;
                }
            } catch (Exception $exc) {
                echo $exc->getMessage();
            }
        }
    }
    /*this function is responsible on posting ads in DB
     *  & also filtering parametrs
     */
    public final function postAds($id , $data) {
        try {
            $url = "http://localhost/hostMe/Apps/upload/";
            //in case the user choosed location which is categorie 1
            if($data['cat'] == 1){
                $query = $this->cn->prepare("INSERT INTO Ads VALUES (NULL , :cat , :titre , :descrip , :price , :surf ,  0 , :addr , :ville , '' , NULL , NULL , now() , :id ) ");
                //binding Parameter
                $query->bindParam(':cat', $data['cat'], PDO::PARAM_INT);
                $query->bindParam(':titre', $data['titre'] , PDO::PARAM_STR);
                $query->bindParam(':descrip', $data['descrip'], PDO::PARAM_STR);
                $query->bindParam(':price', $data['price'], PDO::PARAM_INT);
                $query->bindParam(':surf', $data['surface'], PDO::PARAM_INT);
                $query->bindParam(':addr', $data['adresse'], PDO::PARAM_STR);
                $query->bindParam(':ville', $data['ville'], PDO::PARAM_STR);
                $query->bindParam(':id', $id, PDO::PARAM_INT);
                $query->execute();
                //get the last inserted id to reinsert it on image table
                $idAds = $this->cn->lastInsertId();
                //prepare teh 2nd query      
                $url = $url.$data['picName'];
                $query_2  =  $this->cn->prepare("INSERT INTO images VALUES (NULL , :url , '' , :idAds  )");
                $query_2->bindParam(':url', $url , PDO::PARAM_STR);
                $query_2->bindParam(':idAds', $idAds, PDO::PARAM_INT);              
                $query_2->execute();
            }elseif($data['cat'] == 2){
                //in case the user choosed swap which is categorie 2
                $query = $this->cn->prepare("INSERT INTO Ads VALUES (NULL , :cat , :titre , :descrip , :price , :surf , 0 , :addr , :ville , :villeech , STR_TO_DATE('".$data['debut']."', '%d-%m-%Y') , STR_TO_DATE('".$data['fin']."', '%d-%m-%Y') , now() , :id ) ");
                $query->bindParam(':cat', $data['cat'] , PDO::PARAM_INT);
                $query->bindParam(':titre', $data['titre'], PDO::PARAM_STR);
                $query->bindParam(':descrip', $data['descrip'], PDO::PARAM_STR);
                $query->bindParam(':price', $data['price'], PDO::PARAM_INT);
                $query->bindParam(':surf', $data['surface'], PDO::PARAM_INT);
                $query->bindParam(':addr', $data['adresse'], PDO::PARAM_STR);
                $query->bindParam(':ville', $data['ville'] , PDO::PARAM_STR);
                $query->bindParam(':villeech', $data['villeech'],Pdo::PARAM_STR);
                $query->bindParam(':id', $id, PDO::PARAM_INT);
                $query->execute();
                //get the last inserted id to reinsert it on image table
                $idAds = $this->cn->lastInsertId();
                //prepare teh 2nd query
                $url = $url.$data['picName'];
                $query_2 = $this->cn->prepare("INSERT INTO images VALUES (NULL , :url , '', :idAds )");
                $query_2->bindParam(':url', $url , PDO::PARAM_STR);
                $query_2->bindParam(':idAds', $idAds, PDO::PARAM_INT);
                $query_2->execute();
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    
}