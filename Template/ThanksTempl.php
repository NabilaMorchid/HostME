<?php
include_once 'include/includedView.class.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ThanksTempl
 *
 * @author root
 */
class ThanksTempl extends includedView {
    /*Setting Attributes*/
    private $head;
    private $thanks;
    /*get the head element*/
    public function getHead(){
        $this->head = "<head>\r\n";
    	$this->head .= "<title>Merci pour votre annoce</title>\r\n";
    	$this->head .= "<meta charset='UTF-8'/>\r\n";
    	$this->head .= "<meta name='author' content='Ayoub RMIDI' />\r\n";
        $this->head .= "<link rel='stylesheet' type='text/css' href='../../Template/include/css/style.css'>\r\n";
        $this->head .= "<script type='text/javascript' src='../../Template/include/js/jquery.min.js'></script>\r\n";
        $this->head .= "</head>\r\n";
        $this->head .="<body>\r\n";
        return $this->head;
    }
    /*geth the thanks content*/
    public function getThanks()
    {
    	$this->thanks = "<div class='container mt20 '>";
    	$this->thanks .= "<div class='container'>";
    	$this->thanks .= "<div class='row'>";
    	$this->thanks .= "<div class='span10 offset4'>";
    	$this->thanks .= "<div class='panel mtm'>";
    	$this->thanks .= "<div class='panel-main panel-noheading'>";
    	$this->thanks .= "<div class='panel-body text-center paxl'>";
    	$this->thanks .= "<i class='sprite_common_ma_ai_clock mts inline-block'></i>";
    	$this->thanks .= "<h3 class='mbl'>";
    	$this->thanks .= "Merci! Votre annonce va être vérifiée par nos modérateurs et sera bientôt en ligne. Vous recevrez une <strong>notification par email</strong> avec un lien vers votre annonce très vite.";
    	$this->thanks .= "</h3>";
    	$this->thanks .= "<p class='muted no-margin'>(généralement dans moins de 15 min)</p><br/>";
    	$this->thanks .= "<p>Maintenant, que voulez-vous faire ?</p>";
    	$this->thanks .= "</div>";
    	$this->thanks .= "</div>";
    	$this->thanks .= "</div>";
    	$this->thanks .= "<div class='row' style='position: relative; height: 38px;'>";
    	$this->thanks .= "<div class='span7'>";
    	$this->thanks .= "<a href='createPub.php' class='btn btn-blue btn-block btn-xlarge'>Ajouter une nouvelle annonce</a>";
    	$this->thanks .= "</div>";
    	$this->thanks .= "<div class='span7'>";
    	$this->thanks .= "<a href='#' class='btn btn-blue btn-block btn-xlarge'>voir toutes les annonces</a>";
    	$this->thanks .= "</div>";
    	$this->thanks .= "</div>";
    	$this->thanks .= "<div class='text-center mtm'>";
    	$this->thanks .= "<p>Vous avez des questions? <a href='#'>service Clients</a></p>";
    	$this->thanks .= "</div>";
    	$this->thanks .= "</div>";
    	$this->thanks .= "</div>";
    	$this->thanks .= "</div>";
    	$this->thanks .= "</div>";
    	return $this->thanks;
    }
}
