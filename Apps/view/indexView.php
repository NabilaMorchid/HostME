<?php
include_once '../../Template/indexTempl.php';
class indexView extends index {

    /*
     * Thsi class is the main class view for index
    */
    /*get the 2nd section*/
    public function getSlider($lastItems){
        $this->slider = "<section id='Num3'>";
        $this->slider .= "<div class='container'>";
        $this->slider .= "<div class='col-lg-12 col-md-12 mtpsec2'>";
        $this->slider .= "<div class='row'>";
        $this->slider .= "<h2 class='how-it-works-title'>what people share in lamudi</h2>";
        $this->slider .= "</div>";
        $this->slider .= "</div>";
        $this->slider .= "</div>";
        $this->slider .= "<div class='containerMajeur'>";
        $this->slider .= "<div id='slider'>  ";
        $this->slider .= "<ul>";
        foreach ($lastItems as $item) { 
            $this->slider .= "<li>"; #start of loop
            $this->slider .= "<div class='localPic'>"; 
            $this->slider .= "<img src='$item[url]' alt='$item[titre]' title='titre' width='100%' height='100%'>";
            $this->slider .= "</div>";
            $this->slider .= "<div class='localInfo'>";
            $this->slider .= "<h3 class='localTitle'><a href='annonce.php?idAds=$item[idAds]' >$item[titre]</a></h3>";
            $this->slider .= "<p class='listing-adress text-center ft-wght'>$item[ville]</p>";
            if($item['categ']==1){
                $this->slider .= "<p class='listing-adress mlft'>Posté pour : <span class='fsz16'>Location</span><span class='mright fsz16'>$item[surface] m²</span></p>";
                $this->slider .= "<span class='listing-price price'>Dhs $item[prix]</span>";       
            }elseif($item['categ']==2){
                $this->slider .= "<p class='listing-adress mlft'>Posté pour : <span class='fsz16'>Echange</span><span class='mright fsz16'>$item[surface] m²</span></p>";
                $this->slider .= "<p class='listing-adress ft-wght'>Du : $item[debut] Au : $item[fin]</p>";
            }
            
            $this->slider .= "</div>";
            $this->slider .= "</li>"; #end of loop
        }
        $this->slider .= "</ul>";
        $this->slider .= "<div class='nextSlid'></div> ";
        $this->slider .= "<div class='prevSlid'></div>";
        $this->slider .= "</div>";
        $this->slider .= "</div>";
        $this->slider .= "<div class='nxt nxt_3'></div>";
        $this->slider .= "</section>";
        return $this->slider;
    }
}