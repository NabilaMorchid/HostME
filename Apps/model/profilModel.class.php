<?php
require_once '../../DBinteraction/dbConnect.php';
require_once '../inc/functions.php';
/**
* this class will be reponsible on Member Login & checking BruteForcing account 
*/
class ProfilManager {
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
    /*this function is responsible on getting my ads that 
     * i have been posted and are validated by the admin
     */
    public function getMyAds($id) {
        try {
            $query = $this->cn->prepare("SELECT Ads.idAds , titre , ville , surface , prix , categ , url , villeEch ,  DAY(DOP) AS 'day' , MONTHNAME(DOP) AS 'month' , HOUR(DOP) AS 'hour' , MINUTE(DOP) AS 'minute' FROM Ads , images WHERE Ads.idAds = images.idAds AND idPoster = :id AND isValidated = 1 ORDER BY DOP DESC ");
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    /*this function is responsible on deleting the own user Ads*/
    public function delMyAds($idAds){
        try {
            $query = $this->cn->prepare("DELETE FROM Ads WHERE idAds = :idAds ");
            $query->bindParam(':idAds' , $idAds , PDO::PARAM_INT);
            $query->execute();
            return true;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    /*the same thing here to update an uploaded Ads */
    public function updAds($idAds){
        try {
            //$query = $this->cn->prepare("UPDATE Ads SET descrip....");
            /*bind params & execute*/
        } catch (Exception $e) {
            
        }
    }
    /*this function is on save my changed info gived on settings*/
    public function saveNewChanges($data) {
        try {
            $query = $this->cn->prepare("UPDATE Members SET name = :name , tel = :tel , city = :ville WHERE id = :id ");
            $query->bindParam('name', $data['name'], PDO::PARAM_STR);
            $query->bindParam('tel', $data['tel'], PDO::PARAM_STR);
            $query->bindParam('ville', $data['ville'], PDO::PARAM_STR);
            $query->bindParam('id', $_SESSION['user_id'], PDO::PARAM_INT);
            $query->execute();
            return true;
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
}