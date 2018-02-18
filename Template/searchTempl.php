<?php
include_once 'include/includedView.class.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of searchTempl
 *
 * @author root
 */
class searchTempl extends includedView{
    //setting attributes
    private $head;
    private $searchForm;
    //get the head element
    public function getHead() {
        $this->head = "<head>\r\n";
    	$this->head .= "<title>Host Me - Recherche</title>\r\n";
        $this->head .= "<meta charset='UTF-8'/>\r\n";
 	$this->head .= "<meta name='author' content='Ayoub RMIDI' />\r\n";
        $this->head .= "<link rel='stylesheet' type='text/css' href='../../Template/include/css/jquery-ui.css'>\r\n";
        $this->head .= "<link rel='stylesheet' type='text/css' href='../../Template/include/css/style.css'>\r\n";
        $this->head .= "<link rel='stylesheet' type='text/css' href='../../Template/include/css/easydropdown.css'>\r\n";
    	$this->head .= "<script type='text/javascript' src='../../Template/include/js/jquery.min.js'></script>\r\n"; 
        $this->head .= "<script type='text/javascript' src='../../Template/include/js/jquery.easydropdown.js'></script>\r\n";
        $this->head .= "<script type='text/javascript' src='../../Template/include/js/jquery-ui.min.js'></script>\r\n";
        $this->head .= "<script type='text/javascript' src='../../Template/include/js/test.js'></script>\r\n";
        $this->head .= "<script type='text/javascript' src='../../Template/include/js/retouch.js'></script>\r\n";
        $this->head .= "</head>\r\n";
        $this->head .="<body>\r\n";
        return $this->head;
    }
    public function getSearchForm() {
        $this->searchForm = "<div class='brand-search no-margin ptm pbxs'>";
        $this->searchForm .= "<div class='container'>";
        $this->searchForm .= "<div class='serachWidget-tabConatiner'>";
        $this->searchForm .= "<form method='GET' id='search'>";#start of search form
        $this->searchForm .= "<div class='col-md-4 col-lg-4 homepage-form-field' id='place'>";
        $this->searchForm .= "<div class='row custom-row'>";
        $this->searchForm .= "<input type='text' id='city' class='input-filed col-md-10 col-lg-10' placeholder='Ou voulez-vous allez' name='city' autocomplete='off'>";
        $this->searchForm .= "</div>";
        $this->searchForm .= "</div>";
        $this->searchForm .= "<div class='col-md-4 no-padding-left col-lg-4 homepage-form-field' id='date'>";
        $this->searchForm .= "<div class='row custom-row'>";
        $this->searchForm .= "<input type='text' id='thedate' name='cin' class='checkin-picker input-filed col-md-5 col-lg-5' placeholder='arrive' style='cursor:pointer;' autocomplete='off' >";
        $this->searchForm .= "<input type='text' id='thedate_1' class='checkout-picker input-filed col-md-5 col-lg-5' placeholder='depart' name='cout' style='cursor:pointer;' autocomplete='off' >";
        $this->searchForm .= "</div>";
        $this->searchForm .= "</div>";
        $this->searchForm .= "<div id='typeAnnonce' class='col-md-2 col-lg-2 no-padding homepage-form-field mgright-spec'>";
        $this->searchForm .= "<div class='row custom-row'>";
        $this->searchForm .= "<select id='choice' class='dropdown' name='type'>";
        $this->searchForm .= "<option value=''>«Categorie»</option>";
        $this->searchForm .= "<option value='1'>Location</option>";
        $this->searchForm .= "<option value='2'>Échange</option>";
        $this->searchForm .= "</select>";
        $this->searchForm .= "</div>";
        $this->searchForm .= "</div>";
        $this->searchForm .= "<div class='col-md-2 col-lg-2 no-padding homepage-form-field'>";
        $this->searchForm .= "<div class='row custom-row'>";
        $this->searchForm .= "<input type='text' class='col-md-5 col-lg-5 input-filed' id='mpr' placeholder='prix max' name='mpr'>";
        $this->searchForm .= "</div>";
        $this->searchForm .= "</div>";
        $this->searchForm .= "<div id='form-home-page-submit' class='col-md-2 col-lg-2'>";
        $this->searchForm .= "<div class='row custom-row'>";
        $this->searchForm .= "<button id='btnSubmitSearch' class='serachWidget-submit' type='submit'>Rechercher</button>";
        $this->searchForm .= "</div>";
        $this->searchForm .= "</div>";
        $this->searchForm .= "</form>";#end of form
        $this->searchForm .= "</div>";
        $this->searchForm .= "</div>";
        $this->searchForm .= "</div>";
        return $this->searchForm ;
    }
}
