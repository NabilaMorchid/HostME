<?php
require_once '../../DBinteraction/dbConnect.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of searchModel
 *
 * @author root
 */
class searchModel {
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
    /*get the default search ads*/
    public function MySearchResult($range,$perpage) {
        try {
            
            $query = $this->cn->prepare("SELECT Ads.idAds , titre , ville , surface , prix , categ , url , villeEch ,  DAY(DOP) AS 'day' , MONTHNAME(DOP) AS 'month' , HOUR(DOP) AS 'hour' , MINUTE(DOP) AS 'minute' , debut , fin FROM Ads , images WHERE Ads.idAds = images.idAds AND isValidated = 1 ORDER BY DOP DESC LIMIT :range , :perpage");
            $query->bindParam(':range', $range, PDO::PARAM_INT);
            $query->bindParam(':perpage', $perpage, PDO::PARAM_INT);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    /*get the custom search ads */
    public function MyCustomSearchResult($data,$range,$perpage) {
        try {
            $query = $this->cn->prepare("SELECT Ads.idAds, titre , ville , surface , prix , categ , url , villeEch , DAY(DOP) AS 'day' , MONTHNAME(DOP) AS 'month' , HOUR(DOP) AS 'hour' , MINUTE(DOP) AS 'minute' , debut , fin FROM Ads , images WHERE Ads.idAds = images.idAds AND Ads.ville LIKE :city  AND Ads.categ = :categ AND isValidated = 1 ORDER BY DOP DESC LIMIT :range , :perpage");//AND Ads.debut=$data[cin] AND Ads.fin=$data[cout]
            //this x is to avoid "cannot pass parameter 2 by refernce " fatal error
            $query->bindParam(':range', $range, PDO::PARAM_INT);
            $query->bindParam(':perpage', $perpage, PDO::PARAM_INT);
            $city = '%'.$data['city'].'%';
            $query->bindParam(':city', $city , PDO::PARAM_STR);
            $query->bindParam(':categ', $data['categ'], PDO::PARAM_INT);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    /*get All the ads info*/
    public function AdsInfo($idAds) {
        try {
            $query = $this->cn->prepare("SELECT DISTINCT  titre , descrip , prix , categ , surface , adress , ville , villeEch , debut , fin , DOP , url , name , city , tel FROM Ads , images , Members WHERE Ads.idAds = :idAds AND images.idAds = :idAds AND Members.id = Ads.idPoster ");
            $query->bindParam(':idAds', $idAds,  PDO::PARAM_INT);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    /*get the title of ads to show it on the head*/
    public function getTitle($idAds) {
        try {
            $query = $this->cn->prepare("SELECT titre FROM Ads WHERE idAds = :idAds");
            $query->bindParam(':idAds', $idAds, PDO::PARAM_INT);
            $query->execute();
            return $query->fetchColumn();
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    //
    public function xxx() {
        try {
            //start of test
            $total = $this->cn->query("SELECT COUNT(*) AS 'rows' FROM Ads")->fetch(PDO::FETCH_OBJ);
            $perpage = 2;
            $poste = $total->rows;
            $page = ceil($poste/$perpage);
            //default
            $get_page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_NUMBER_INT) ? filter_input(INPUT_GET, 'page', FILTER_SANITIZE_NUMBER_INT) : 1 ; /*isset($_GET['page'])?$_GET['page']:1;*/
            $data = array('option'=>array(
                'default'=>1,
                'min_range'=>1,
                'max_range'=>$page
            ));
            $number = trim($get_page);
            $number = filter_var($number, FILTER_VALIDATE_INT, $data);
            $range = $perpage*($number-1);
            $prev = $number-1;
            $next = $number+1;
            $result = array('next'=>$next,'prev'=>$prev,'perpage'=>$perpage,'range'=>$range,'number'=>$number,'page'=>$page);
            //end of test
            return $result;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }
}
