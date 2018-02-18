<?php
include_once '../../Template/include/includedView.class.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of annonceView
 *
 * @author root
 */
class annonceView extends includedView {
    //Setting Up Attributes
    private  $head;
    private $ads ;
    /**
     * this dynamic function will be responsible
     * on displaying any ads info 
    **/
    public function getAdsInfo($item) {
        $this->ads = "<div class='container mcm mcl'>";
        $this->ads .= "<div class='row mtxs'>";
        $this->ads .= "<div class='span13'>";
        $this->ads .= "<div class='panel panel-main panel-noheading'>";
        $this->ads .= "<div class='panel-body'>";
        $this->ads .= "<div class='page-header-wrap'>";
        $this->ads .= "<h1 class='page-header mtxs mbxs'>$item[titre]</h1>";
        $this->ads .= "<div class='page-header-info'>";
        $this->ads .= "<span class='inline-block mrm'>$item[ville]</span>";
        $this->ads .= "<span class='inline-block'>Publiée le<abbr class='date dtstart value'> $item[DOP] </abbr></span>";
        $this->ads .= "</div>";
        $this->ads .= "</div>";
        $this->ads .= "</div>";
        $this->ads .= "<h1 class='vi-price-label text-center fs18 no-margin' >";
        if($item['categ']==2){
            $this->ads .= "<span class='amount value' title='\$value'>Echange</span>";
            $this->ads .= "<abbr class='currency' title='\$DH'></abbr>";
        }else{
            $this->ads .= "<span class='amount value' title='\$value'>$item[prix] </span>";
            $this->ads .= "<abbr class='currency' title='\$DH'>DH</abbr>";
        } 
        $this->ads .= "</h1>";
        $this->ads .= "<div id='myCarousel' class='carousel slide mcl mtp'>";
        $this->ads .= "<div class='carousel-wrap text-center'>";
        $this->ads .= "<div id='slider_container'>";
        $this->ads .= "<div class='animation_container'>";
        $this->ads .= "<div class='next_div'></div>";
        $this->ads .= "<div class='prev_div'></div>";
        $this->ads .= "<div class='slider_btn'></div>";
        $this->ads .= "<div id='animation'>";
        $this->ads .= "<div class='next'><img src='$item[url]' alt='\$title' width='697px' height='480px'></div>";
        $this->ads .= "<div><img src='$item[url]' alt='\$title' width='697px' height='480px'></div>";
        $this->ads .= "<div><img src='$item[url]' alt='\$title' width='697px' height='480px'></div>";
        $this->ads .= "<div><img src='$item[url]' alt='\$title' width='697px' height='480px'></div>";
        $this->ads .= "<div><img src='$item[url]' alt='\$title' width='697px' height='480px'></div>";
        $this->ads .= "</div>";
        $this->ads .= "</div>";
        $this->ads .= "</div>";
        $this->ads .= "</div>";
        $this->ads .= "</div>";
        $this->ads .= "<div class='panel-body mbl'>";
        $this->ads .= "<div class='param-table'>";
        $this->ads .= "<div class='param-table-row'>";
        $this->ads .= "<div class='param-table-column'>";
        $this->ads .= "<span class='adparam_label float-left prm'>Type d'annonce : </span>";
        if($item['categ']==1){
            $this->ads .= "<strong>Location</strong>";
        }else{
            $this->ads .= "<strong>Echange</strong>";
        }
        $this->ads .= "</div>";
        if($item['categ']==2){
            $this->ads .= "<div class='param-table-column'>";
            $this->ads .= "<span class='adparam_label float-left prm'>Debut d'echange :</span>";
            $this->ads .= "<strong>$item[debut]</strong>";
            $this->ads .= "</div>";
            $this->ads .= "<div class='param-table-column nbm' >";
            $this->ads .= "<span class='adparam_label float-left prm'>Fin d'echange :</span>";
            $this->ads .= "<strong>$item[fin]</strong>";
            $this->ads .= "</div>";  
        }
        $this->ads .= "</div>";
        $this->ads .= "<div class='param-table-row'></div>";
        $this->ads .= "<div class='param-table-row'></div>";
        $this->ads .= "<div class='param-table-row'></div>";
        $this->ads .= "<div class='param-table-row'>";
        $this->ads .= "<div class='param-table-column'>";
        $this->ads .= "<span class='adparam_label float-left prm'>Surface habitable :</span>";
        $this->ads .= "<strong>$item[surface] m²</strong>";
        $this->ads .= "</div>";
        $this->ads .= "<div class='param-table-column nbm'>";
        $this->ads .= "<span class='adparam_label float-left prm'>Adresse :</span>";
        $this->ads .= "<strong>$item[adress]</strong>";
        $this->ads .= "</div>";
        $this->ads .= "</div>";
        $this->ads .= "</div>";
        $this->ads .= "<div class='fs16'>";
        $this->ads .= "<p>$item[descrip]</p>";
        $this->ads .= "</div>";
        $this->ads .= "</div>";
        $this->ads .= "<div class='user-information mcl mtm text-center'>";
        $this->ads .= "<div class='user-divider'>";
        $this->ads .= "<i class='fonticon-avatar'></i>";
        $this->ads .= "</div>";
        $this->ads .= "<div class='panel-body'>";
        $this->ads .= "<h3>$item[name]</h3>";
        $this->ads .= "<div class='user-small-info'>";
        $this->ads .= "<span class='inline-block'>Particulier ,</span>";
        $this->ads .= "<span class='inline-block'>$item[city]</span>";
        $this->ads .= "</div>";
        $this->ads .= "<div class='action-buttons mtm'>";
        $this->ads .= "<div class='action-btn'>";
        $this->ads .= "<a href='#' class='topNav-action-link topNav-newListing-button button' id='adview_phonenumber_main_btn'><i class='fonction-phone'></i>Afficher le numero</a>";
        $this->ads .= "</div>";
        $this->ads .= "<div class='action-btn'>";
        $this->ads .= "<a href='#' class='topNav-action-link topNav-newListing-button button' id='sendMessage_main_btn'><i class='fonction-mail'></i>Envoyer un message</a>";
        $this->ads .= "</div>";
        $this->ads .= "<div class='action-btn'>";
        $this->ads .= "<a href='#' class='saved-ads' id='save_ads_main_btn'><i class='fonction-save'></i>Sauvgarder l'annonce</a>";
        $this->ads .= "</div>";
        $this->ads .= "</div>";
        $this->ads .= "</div>";
        $this->ads .= "</div>";
        $this->ads .= "</div>";
        $this->ads .= "<p class='text-center mtxl'>Lamudi.ma n'est pas responsable des produits proposés dans les annonces</p>";
        $this->ads .= "</div>";
        $this->ads .= "<div class='span6'>";
        $this->ads .= "<div class='panel'>";
        $this->ads .= "<div class='panel-main panel-noheading'>";
        $this->ads .= "<div class='text-center user-information user-information-sidebar'>";
        $this->ads .= "<div class='user-divider'>";
        $this->ads .= "<i class='fobtion-avatar'></i>";
        $this->ads .= "</div>";
        $this->ads .= "<div class='panel-body user-info-divider'>";
        $this->ads .= "<h3>$item[name]</h3>";
        $this->ads .= "<div>Particulier</div>";
        $this->ads .= "<div>$item[city] , \$country</div>";
        $this->ads .= "</div>";
        $this->ads .= "<div class='pps menu_save_ad'>";
        $this->ads .= "<a href='#' class='topNav-action-link topNav-newListing-button button' id='adview_phonenumber_sidebar_btn'>Afficher le numero</a>";
        $this->ads .= "<a href='#' class='topNav-action-link topNav-newListing-button button' id='adview_adreply_sidebar_btn'>Envoyer un message</a>";
        $this->ads .= "<a href='#' class='saved-ads' id='adview_save_ad_sidebar_btn'>Sauvgarder l'annonnce</a>";
        $this->ads .= "</div>";
        $this->ads .= "</div>";
        $this->ads .= "<div class='panel-footer text-center view-options'>";
        $this->ads .= "<a href='#' class='adview_report_abuse_btn'><i class='fonction-attention'></i>Signaler l'annonce </a>";
        $this->ads .= "</div>";
        $this->ads .= "</div>";
        $this->ads .= "</div>";
        $this->ads .= "<div class='panel'>";
        $this->ads .= "<div class='panel-main panel-noheading'>";
        $this->ads .= "<div class='pps'>";
        $this->ads .= "<div class='pubZone'>Zone Pub</div>";
        $this->ads .= "</div>";
        $this->ads .= "</div>";
        $this->ads .= "</div>";
        $this->ads .= "</div>";
        $this->ads .= "</div>";
        $this->ads .= "</div>";
        return $this->ads; 
    }
    /*this function is reponsible on getting teh Ads's header*/
    public function getHead($titre) {
        $this->head = "<head>\r\n";
    	$this->head .= "<title>Host Me - $titre</title>\r\n";
        $this->head .= "<meta charset='UTF-8'/>\r\n";
    	$this->head .= "<meta name='author' content='Ayoub RMIDI' />\r\n";
        $this->head .= "<link rel='stylesheet' type='text/css' href='../../Template/include/css/style.css'>\r\n";
        $this->head .= "<link rel='stylesheet' type='text/css' href='../../Template/include/css/style_1.css'>\r\n";
    	$this->head .= "<script type='text/javascript' src='../../Template/include/js/jquery.min.js'></script>\r\n";                                                  
        $this->head .= "<script type='text/javascript' src='../../Template/include/js/myjs.js'></script>\r\n";
        $this->head .= "</head>\r\n";
        $this->head .="<body>\r\n";
 	return $this->head;
    }
}
