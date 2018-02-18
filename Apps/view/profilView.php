<?php
include_once '../../Template/profilTempl.php';
class profilView extends profil {

    /*
     * Thsi class is the main class view for login
    */
    /*Setting Attributes*/
    private $myItems;
    /*get the list Items*/
    public function getItems($items) {
        $this->myItems = "<div class='container mcm'>";
        $this->myItems .= "<div class='mypages-wrap-two mypages-ads'>";
        $this->myItems .= $this->getMenuProfil();
        $this->myItems .= "<div class='panel panel_help'>";
        $this->myItems .= "<div class='panel-main panel-body'>";
        foreach($items as $item){
            $this->myItems .= "<div class='listing'>"; #start of div.listing (start of loop)
            $this->myItems .= "<div class='item'>";
            $this->myItems .= "<div class='item-age mt20'>";
            $this->myItems .= "<strong><abbr><small>$item[day] $item[month]</small><br />$item[hour]:$item[minute]</abbr></strong>";
            $this->myItems .= "</div>";
            $this->myItems .= "<div class='item_img'>";
            $this->myItems .= "<a href='annonce.php?idAds=$item[idAds]'><img src='$item[url]' alt='$item[titre]'></a>";
            $this->myItems .= "</div>";
            $this->myItems .= "<div class='item-info'>";
            $this->myItems .= "<h3><a href='annonce.php?idAds=$item[idAds]' class='main-link'>$item[titre]</a></h3>";
            $this->myItems .= "<p class='listing-adress icon-location'>$item[ville]</p>";
            if($item['categ']==1){
                $this->myItems .= "<span class='listing-price'>$item[prix] DH</span>";
                $this->myItems .= "<p class='listing-adress icon-location'>Posté pour : <span>Location</span></p>";
            }elseif ($item['categ']==2) {
                $this->myItems .= "<p class='listing-adress icon-location'>Posté pour : <span>Echange</span></p>";
                $this->myItems .= "<p class='listing-adress icon-location'>Ville d'echange : <span>$item[villeEch]</span></p>";
                
            }
            $this->myItems .= "<span class='listing-price'>$item[surface] m²</span>";
            $this->myItems .= "</div>";
            $this->myItems .= "<div class='settings-ma span5'>";
            $this->myItems .= "<div class='dropdown span'>";
            $this->myItems .= "<a href='#' id='renouveler' class='btn btn-large btn-blue'>Renouveler</a>";
            $this->myItems .= "</div>";
            $this->myItems .= "<div class='dropdown span'>";
            $this->myItems .= "<a href='#' id='modifier' class='btn btn-large btn-blue'>Modifier</a>";
            $this->myItems .= "</div>";
            $this->myItems .= "<div class='dropdown span'>";
            $this->myItems .= "<a href='#' id='supprimer' class='btn btn-large btn-blue'>Supprimer</a>";
            $this->myItems .= "</div>";
            $this->myItems .= "</div>";
            $this->myItems .= "</div>";
            $this->myItems .= "</div>"; #end of div.listing (end of loop)
        }
        $this->myItems .= "</div>";
        $this->myItems .= "</div>"; #end of div.panel
        $this->myItems .= "<hr />";
        $this->myItems .= "<div class='text-center mbs'>";
        $this->myItems .= "<h3>Vous avez quelque chose à louer ou a echenger ?</h3>";
        $this->myItems .= "<p>Déposez votre annonce gratuitement sur Lamudi.ma aujourd'hui!</p>";
        $this->myItems .= "<a href='createPub.php' class='topNav-action-link topNav-newListing-button button import_bottom'>Deposer Vos Annonces</a>";
        $this->myItems .= "</div>";
        $this->myItems .= "</div>";
        $this->myItems .= "</div>"; #end of div.container
        return $this->myItems;
    }
    
}