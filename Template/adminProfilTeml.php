<?php

/*
 * To change this license head, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of adminProfilTeml
 *
 * @author root
 */
class adminProfilTeml {
    //setting attributes
    private $head;
    private $header;
    private $menu;
    private $content;
    /*get the head element*/
    public function getHead() {
        $this->head = "<!DOCTYPE html>\r\n";
        $this->head .= "<html>\r\n";
        $this->head .= "<head>\r\n";
        $this->head .= "<title>Admin Panel - HostMe</title>\r\n";
        $this->head .= "<meta charset='utf-8' />\r\n";
        $this->head .= "<meta name='viewport' content='width=device-width, initialscale=1.0' >\r\n";
        $this->head .= "<script type='text/javascript' src='../../Template/include/js/jquery.min.js'></script>\r\n";
        $this->head .= "<link rel='stylesheet' type='text/css' href='../../Template/include/bootstrap-3.3.6-dist/css/bootstrap.min.css'>\r\n";
        $this->head .= "<link rel='stylesheet' type='text/css' href='../../Template/include/font-awesome-4.5.0/css/font-awesome.min.css'>\r\n";
        $this->head .= "<link rel='stylesheet' type='text/css' href='../../Template/include/_css/style.css'>\r\n";
        $this->head .= "<link rel='stylesheet' type='text/css' href='../../Template/include/font-awesome-4.5.0/css/font-awesome.min.css'>\r\n";
        $this->head .= "<script type='text/javascript' src='../../Template/include/js/test.js'></script>\r\n";
        $this->head .= "</head>\r\n";
        return $this->head;
    }
    /*get the header nav element*/
    public function getheader() {
        $this->header = "<body>";
        $this->header .= "<div class='header' >";
        $this->header .= "<div class='container'>";
        $this->header .= "<div class='row'><br>";
        $this->header .= "<div class='col-md-4' ><a href='#' class='pull-left' ><img src='../../Template/include/images/Logo_Resize-2.png' height='40px'></a></div>";
        $this->header .= "<div class='col-md-4 col-md-offset-4' >";
        $this->header .= "<div class='row'>";
        $this->header .= "<div class='col-md-5'><div class='profil_admin' ></div><span>$_SESSION[email]</span></div>";
        $this->header .= "<div class='col-md-2'><br><a href='#' ><span class='glyphicon glyphicon-th' ></span></a></div>";
        $this->header .= "</div>";
        $this->header .= "</div>";
        $this->header .= "</div>";
        $this->header .= "</div>";
        $this->header .= "</div>";
        return $this->header;       
    }
    /*get the menu element*/
    public function getMenu() {
        $this->menu = "<div class='menu'>";
        $this->menu .= "<div class='navbar navbar-inverse'>";
        $this->menu .= "<div class='container'>";
        $this->menu .= "<ul class='nav navbar-nav pull-left' >";
        $this->menu .= "<li><a href='#'><span class='glyphicon glyphicon-envelope' ></span></a></li>";
        $this->menu .= "<li><a href='#'><span class='glyphicon glyphicon-link' ></span></a></li>";
        $this->menu .= "<li><a href='#'><span class='glyphicon glyphicon-bell' ></span></a></li>";
        $this->menu .= "<li><a href='#'><span class='glyphicon glyphicon-wrench' ></span></a></li>";
        $this->menu .= "</ul>";
        $this->menu .= "<ul class='nav navbar-nav pull-right' >";
        $this->menu .= "<li><a href='#'>messages <span class='badge'>42</span></a></li>";
        $this->menu .= "<li><a href='#'>notifications <span class='badge'>+99</span></a></li>";
        $this->menu .= "<li><a href='#'>social media</a></li>";
        $this->menu .= "<li><a href='../inc/logout.php'>Log out</a></li>";
        $this->menu .= "</ul>";
        $this->menu .= "</div>";
        $this->menu .= "</div>";
        $this->menu .= "</div>";
        return $this->menu;
        
    }
    /*get the content element*/
    public function getContent($ads,$cntUsers,$cntAds) {
        $this->content = "<div class='content'>";
        $this->content .= "<div class='container'>";
        $this->content .= "<div class='row'><br>";
        $this->content .= "<div class='col-md-3 navig'>";
        $this->content .= "<div class='row'>";
        $this->content .= "<div class='col-md-5'><br><div class='icone'><img src='../../Template/include/images/icon(1).png' width='100px' height='100px'></div><br></div>";
        $this->content .= "<div class='col-md-7'>";
        $this->content .= "<div class='row'>";
        $this->content .= "<div class='col-md-12'><h3><a href='#'>new messages</a></h3></div>";
        $this->content .= "<div class='col-md-12'> <p>341</p></div>";
        $this->content .= "</div>";
        $this->content .= "<div class='row'></div>";
        $this->content .= "</div>";
        $this->content .= "</div>";
        $this->content .= "</div>";
        $this->content .= "<div class='col-md-3  navig' >";
        $this->content .= "<div class='row'>";
        $this->content .= "<div class='col-md-5'><br><div class='icone' ><img src='../../Template/include/images/icon(3).png'  ></div><br></div>";
        $this->content .= "<div class='col-md-7'>";
        $this->content .= "<div class='row'>";
        $this->content .= "<div class='col-md-12'><h3><a href='#'>registreds users</a></h3></div>";
        $this->content .= "<div class='col-md-12'> <p>$cntUsers</p></div>";
        $this->content .= "</div>";
        $this->content .= "<div class='row'></div>";
        $this->content .= "</div>";
        $this->content .= "</div>";
        $this->content .= "</div>";
        $this->content .= "<div class='col-md-3 navig' >";
        $this->content .= "<div class='row'>";
        $this->content .= "<div class='col-md-5'><br><div class='icone' ><img src='../../Template/include/images/icon(2).png'  ></div><br></div>";
        $this->content .= "<div class='col-md-7'>";
        $this->content .= "<div class='row'>";
        $this->content .= "<div class='col-md-12'><h3><a href='#'>total<br>visiteurs</a></h3></div>";
        $this->content .= "<div class='col-md-12'> <p>341</p></div>";
        $this->content .= "</div>";
        $this->content .= "<div class='row'></div>";
        $this->content .= "</div>";
        $this->content .= "</div>";
        $this->content .= "</div><div class='col-md-3 navig'>";
        $this->content .= "<div class='row'>";
        $this->content .= "<div class='col-md-5'><br><div class='icone' ><img src='../../Template/include/images/icon(6).png'  ></div><br></div>";
        $this->content .= "<div class='col-md-7'>";
        $this->content .= "<div class='row'>";
        $this->content .= "<div class='col-md-12'><h3><a href='#'>nombre d'annonces</a></h3></div>";
        $this->content .= "<div class='col-md-12'> <p>$cntAds</p></div>";
        $this->content .= "</div>";
        $this->content .= "</div>";
        $this->content .= "</div>";
        $this->content .= "</div>";
        $this->content .= "</div>";
        $this->content .= "<div class='stati' >";
        $this->content .= "<ul class='nav nav-tabs' role='tablist'>";
        $this->content .= "<li role='presentation' class='active' ><a href='#home' class='sous_nav' aria-controls='home' role='tab' data-toggle='tab'>les annonces</a></li>";
        $this->content .= "<li role='presentation'><a href='#profile' class='sous_nav' aria-controls='profile' role='tab' data-toggle='tab'>Messages <span class='badge'>+99</span></a></li>";
        $this->content .= "<li role='presentation'><a href='#messages' class='sous_nav' aria-controls='messages' role='tab' data-toggle='tab'>users</a></li>";
        $this->content .= "<li role='presentation'><a href='#settings' class='sous_nav' aria-controls='settings' role='tab' data-toggle='tab'>Settings</a></li>";
        $this->content .= "</ul>";
        $this->content .= "<div class='tab-content'>";
        $this->content .= "<div role='tabpanel' class='tab-pane active' id='home'>";
        $this->content .= "<div class='row'>";
        foreach($ads as $ad){
            $this->content .= "<div class='col-md-4'>"; #start of loop
            $this->content .= "<div class='thumbnail'>";
            $this->content .= "<div class='imgContainer'><img src='$ad[url]' alt='$ad[titre]'></div>";#
            $this->content .= "<div class='caption'>";
            if($ad['categ']==1){
                $this->content .= "<h3>Location</h3>";
                $this->content .= "<p><b>Prix:</b> $ad[prix]</p>";
            }else{
                $this->content .= "<h3>Echange</h3>";
                $this->content .= "<p><b>Debut:</b> $ad[debut]<b> Fin :</b>$ad[fin]</p>";
            }   
            $this->content .= "<input type='hidden' class='idAds' value='$ad[idAds]' />";
            $this->content .= "<p><b>Description</b><br/>";
            $this->content .= "$ad[descrip]";
            $this->content .= "</p>";
            $this->content .= "<p><a id='accept' class='btn btn-success' role='button'>validé</a> <a id='decline' class='btn btn-danger' role='button'>refusé</a></p>";
            $this->content .= "</div>";
            $this->content .= "</div>";
            $this->content .= "</div>"; #end of loop
        }
        $this->content .= "</div>";
        $this->content .= "</div>";
        $this->content .= "</div>";
        $this->content .= "</div>";
        $this->content .= "<nav>";
        $this->content .= "<ul class='pager'>";
        $this->content .= "<li><a href='#'>Previous</a></li>";
        $this->content .= "<li><a href='#'>Next</a></li>";
        $this->content .= "</ul>";
        $this->content .= "</nav>";
        $this->content .= "</body>";
        $this->content .= "</html>";
        return $this->content ;
    }
}
