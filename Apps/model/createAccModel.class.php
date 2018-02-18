<?php
require_once '../../DBinteraction/dbConnect.php';
require_once '../inc/PHPMailer-master/PHPMailerAutoload.php';
/**
* this class will be reponsible on User Registration & validating Account 
*/

class User {
    /*Setting Attributs*/
    private $cn;
    private $db;
    /*Generating constructor*/
    function __construct() {
        $this->db = new dbConnect();
        $this->cn = $this->db->connect();
    }
    /*Destructor to close conenction with the Database*/
    function __destruct() {
        $this->cn = null;
    }
    /*Inserting user data in the dataBase*/
    public function createAcc($data) {
        try {
            $date = date("y-m-d H:i:s");
            $query = $this->cn->prepare("INSERT INTO Members VALUES (NULL , :email , :password , :salt , :name , :tel , :pays , :ville , :date , 0  )");
            $query->bindParam(':email', $data['email'], PDO::PARAM_STR);
            $query->bindParam(':password', $data['password'], PDO::PARAM_STR);
            $query->bindParam(':salt', $data['salt'] , PDO::PARAM_STR);
            $query->bindParam(':name', $data['name'], PDO::PARAM_STR);
            $query->bindParam(':tel', $data['tel'], PDO::PARAM_INT);
            $query->bindParam(':pays', $data['pays'], PDO::PARAM_INT);
            $query->bindParam(':ville', $data['ville'], PDO::PARAM_STR);
            $query->bindParam(':date', $date, PDO::PARAM_STR);
            $query->execute();
        } catch (Exception $exc) {
            echo 'there was an error while creating the account '.$exc->getMessage();
        }
    }
    
    /*check if a user insert an existing email*/
    public function getMemberId($email) {
        try {
            $query = $this->cn->prepare("SELECT id FROM Members WHERE email = :email LIMIT 1 ");
            $query->bindColumn(':email', $email, PDO::PARAM_STR);
            $query->execute();
            return $query->fetchColumn();    
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    
    /*send a verification mail to validate the member's account*/
    public function sendVerifMail($email) {
        $mail = new PHPMailer;
        $mail->SMTPDebug = 3;  // Enable verbose debug output
        $mail->isSMTP(); 
        $mail->Debugoutput = 'html';  // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;       // Enable SMTP authentication
        $mail->Username = 'ayoub.rmidi@gmail.com';      // SMTP username
        $mail->Password = 'AyoubRmidi2013';            // SMTP password
        $mail->SMTPSecure = 'tls';   // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;       // TCP port to connect to
        $mail->setFrom('ayoub.rmidi@gmail.com', 'hostMe Comunity');
        $mail->addAddress($email, 'recepient');     // Add a recipient
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);       // Set email format to HTML
        $mail->Subject = 'Account Verification';
        $mail->Body    = 'Thank you for signing up!/<br />';
        $mail->Body   .= "Your account has been created, you can login with the following credentials after you have activated your account by clicking the url below.<br />";
        $mail->Body   .= "<br />";
        $mail->Body   .= "<br />";
        $mail->Body   .= "Please click this link to activate your account:<br />";
        $mail->Body   .= "<br />";
        $mail->AltBody = "This is the body in plain text for non-HTML mail clients"; //for non-html clients
        if($mail->send()){
            echo "Message has been sent";
        }else{
            echo "there was an error while sending the email".$mail->ErrorInfo;
        }
    }
}