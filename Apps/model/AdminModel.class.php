<?php
require_once 'loginModel.class.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author root
 */
class Admin extends Member {
    /*Generating constructor*/
    function __construct() {
        parent::__construct();
    }
    /*Destructor to close conenction with the Database*/
    function __destruct() {
        parent::__destruct();
    }
    
    /*this function will be responsible on validating ads*/
    public function getAds() {
        try {
            $query = $this->cn->prepare("SELECT Ads.idAds , titre , descrip  , prix , categ , url , debut , fin  FROM Ads , images WHERE Ads.idAds = images.idAds AND isValidated = 0 ORDER BY DOP DESC ");
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    
    /*this function will be responsible on validating ads*/
    public function acceptAds() {
        try {
            $id_ads = filter_input(INPUT_POST, 'idAds', FILTER_SANITIZE_NUMBER_INT);
            $query = $this->cn->prepare("UPDATE Ads SET isValidated = 1 WHERE idAds = $id_ads ");
            $query->execute();
            return TRUE;
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    
    /*this function will be responsible on declining ads*/
    public function declineAds() {
        try {
            $id_ads = filter_input(INPUT_POST, 'idAds', FILTER_SANITIZE_NUMBER_INT);
            $query = $this->cn->prepare("UPDATE Ads SET isValidated = 0 WHERE idAds = $id_ads ");
            $query->execute();
            return TRUE;
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    
    /*count registred users*/
    public function getRegistredUser() {
        try {
            $query = $this->cn->prepare("SELECT COUNT(*) FROM Members");
            $query->execute();
            return $query->fetchColumn();
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    /*count registred users*/
    public function getNumberOfAds() {
        try {
            $query = $this->cn->prepare("SELECT COUNT(*) FROM Ads");
            $query->execute();
            return $query->fetchColumn();
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
}
