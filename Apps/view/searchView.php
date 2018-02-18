<?php
include_once '../../Template/searchTempl.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of searchView
 *
 * @author root
 */
class searchView extends searchTempl {
    //setting attributes
    private $search;
    //get result search
    public function getResultSearch($items,$next,$prev,$page,$number,$result) {
        $this->search = "<div class='container'>";
        $this->search .= "<div class='span24 list_container'>";
        $this->search .= "<div class='panel panel-btn-footer'>";
        $this->search .= "<div class='panel-main no-border-radius bord-top-wid'>";
        $this->search .= "<div class='pas clearfix listing-filtering'>";
        $this->search .= "<a id='listingTopSaveSearch' class='inline-block fs13 mtxs' href='#'><i class='fonction-star'></i>Sauvgarder cette recherche</a>";
        $this->search .= "<div id='listing_select_order' class='select-dropdown float-right'>";
        $this->search .= "<select id='sort' class='dropdown' name='sort'>";
        $this->search .= "<option value='0'>Trier par date</option>";
        $this->search .= "<option value='1'>Trier par prix</option>";
        $this->search .= "</select>";
        $this->search .= "</div>";
        $this->search .= "</div>";
        foreach ($items as $item) {
            $this->search .= "<div class='listing listing-thumbs'>";#start of loop
            $this->search .= "<div class='item li-hover'>";
            $this->search .= "<div class='item-age mt20'>";
            $this->search .= "<strong><abbr><small>$item[day] $item[month]</small><br />$item[hour]:$item[minute]</abbr></strong>";
            $this->search .= "</div>";
            $this->search .= "<div class='item_img'>";
            $this->search .= "<a href='annonce.php?idAds=$item[idAds]'><img src='$item[url]' alt='$item[titre]'></a>";
            $this->search .= "</div>";
            $this->search .= "<div class='item-info'>";
            $this->search .= "<h3><a href='#' class='main-link'>$item[titre]</a></h3>";
            $this->search .= "<p class='listing-adress icon-location'>$item[ville]</p>";
            if($item['categ']==1){
                $this->search .= "<span class='listing-price'>Dhs $item[prix]</span>";
                $this->search .= "<p class='listing-adress icon-location'>Posté pour : <span>location</span></p>";
            }elseif ($item['categ']==2) {
                $this->search .= "<p class='listing-adress icon-location'>Posté pour : <span>Echange</span></p>";
                $this->search .= "<p class='listing-adress icon-location'>Ville d'echange : <span>$item[villeEch]</span></p>";
                $this->search .= "<p class='listing-adress icon-location'>Du : <span>$item[debut] <span>Au :</span> $item[fin]</span></p>";
            }
            $this->search .= "<span class='listing-price'>$item[surface] m²</span>";
            $this->search .= "<div class='list-actions'>";
            $this->search .= "<div class='list-action-inner'>";
            $this->search .= "<button class='more inverse'>Plus de Details</button>";
            $this->search .= "</div>";
            $this->search .= "</div>";
            $this->search .= "</div>";
            $this->search .= "</div>";
            $this->search .= "</div>";#end of loop
        }
        $this->search .= "</div>";
        $this->search .= "</div>";
        //pagination
        $this->search .= "<div class='navigation'>";
        if($result && COUNT($result)>0){
            if($number<=1){
                $this->search .= "<span>&laquo; prev</span> | <a href='?page=$next'>next &raquo;</a>";
            }elseif($number>=$page){
                $this->search .= "<a href='?page=$prev'>&laquo; prev</a> | <span>next &raquo;</span>";
            }else{
                $this->search .= "<a href='?page=$prev'>&laquo; prev</a> | <a href='?page=$next'>&raquo; next</a>";
            }
        }
        $this->search .= "</div>"; 
        //end of pagination
        $this->search .= "</div>";       
        $this->search .= "<div class='sidebar'>";
        $this->search .= "<p>ZONE PUB 1</p>";        
        $this->search .= "</div>";
//        $this->search .= "<div class='sidebar'>";
//        $this->search .= "<p>ZONE PUB 2</p>";      
        $this->search .= "</div>";      
        $this->search .= "</div>";
        return $this->search;      
    }
}
