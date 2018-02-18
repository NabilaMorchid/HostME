<?php
require_once '../../DBinteraction/dbConnect.php';
/**
* this class will be reponsible on Member event's on index
*/
class indexModel {

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
    /*get the latest Uploaded Ads*/
    public function getTheLatestAds() {
        try {
            $query = $this->cn->prepare("SELECT Ads.idAds , titre , ville , surface , prix , categ , url , villeEch ,  DAY(DOP) AS 'day' , MONTHNAME(DOP) AS 'month' , debut , fin FROM Ads , images WHERE Ads.idAds = images.idAds AND isValidated = 1 ORDER BY DOP DESC LIMIT 0,5 ");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

}





