<?php

/**
* this class is about creating the header and footer's code that will be repeated in the App
*/
class includedView  
{
        private $root;
	private $nav;
	private $profilNav;
	private $footer;
        private $bread;
        private $menu;
        /*get the root element*/
        public function getRoot() {
            $this->root = "<!DOCTYPE html>\r\n";
            $this->root .= "<html>\r\n";
            return $this->root;
        }
	/*
	*the header function interface
	*/
	public function getNav()
	{
		$this->nav = "<nav class='topNav'>";
		$this->nav .= "<div class='topNav-body container'>";
		$this->nav .= "<a id='lnkLogo' class='topNav-logo' href='index.php'>";
		$this->nav .= "<img src='../../Template/include/images/Logo_Resize-2.png' alt=''>";
		$this->nav .= "<span class='topNav-logo-country'>maroc</span>";
		$this->nav .= "<br />";
		$this->nav .= "</a>";
		$this->nav .= "<div class='topNav-action'>";
		$this->nav .= "<ul class='topNav-action-list'>"; #Start of the list menu in teh head
		$this->nav .= "<li class='topNav-action'>";
		$this->nav .= "<a class='topNav-action-link' id='lnkLoginRegister' href='login.php'><i class='icon_user'></i>Connexion / Inscription</a>";
		$this->nav .= "</li>";
		$this->nav .= "<li class='topNav-action topNav-newLang'>";
		$this->nav .= "<a class='topNav-action-link' id='lnkLang_en' href='#'>English</a>";
		$this->nav .= "</li>";
		$this->nav .= "<li class='topNav-action topNav-newListing'>";
		$this->nav .= "<a class='topNav-action-link topNav-newListing-button button' id='lnkCreateListing' href='login.php'><i class='iconPlus'></i>Créer une annonce</a>";
		$this->nav .= "</li>";
		$this->nav .= "</ul>"; #end of the list menu in the head
		$this->nav .= "</div>";
		$this->nav .= "</div>";
		$this->nav .= "</nav>";
		return $this->nav;
	}

	/*
	*the profil Nav function interface
	*/
	public function getProfilNav($Nnom)
	{
		$this->profilNav = "<nav class='topNav'>";
		$this->profilNav .= "<div class='topNav-body container'>";
		$this->profilNav .= "<a id='lnkLogo' class='topNav-logo' href='index.php'>";
		$this->profilNav .= "<img src='../../Template/include/images/Logo_Resize-2.png' alt=''>";
		$this->profilNav .= "<span class='topNav-logo-country'>maroc</span>";
		$this->profilNav .= "<br />";
		$this->profilNav .= "</a>";
		$this->profilNav .= "<div class='topNav-action'>";
		$this->profilNav .= "<ul class='topNav-action-list'>";
		$this->profilNav .= "<li class='topNav-action'>";
		$this->profilNav .= "<a class='topNav-action-link' id='lnkUserProfil'><i class='icon_user'></i>$Nnom</a>";
		$this->profilNav .= "</li>";
		$this->profilNav .= "<li class='topNav-action topNav-newLang'>";
		$this->profilNav .= "<a class='topNav-action-link' id='lnkLang_en' href='#'>English</a>";
		$this->profilNav .= "</li>";
		$this->profilNav .= "<li class='topNav-action topNav-newListing'>";
		$this->profilNav .= "<a class='topNav-action-link topNav-newListing-button button' id='lnkCreateListing' href='createPub.php'><i class='iconPlus'></i>Créer une annonce</a>";
		$this->profilNav .= "</li>";
		$this->profilNav .= "</ul>";
		$this->profilNav .= "<ul class='dropdown-menu drop-down-top-85 float-right'>";
		$this->profilNav .= "<li><span class='smallTriangle forUser'></span></li>";
		$this->profilNav .= "<li>";
		$this->profilNav .= "<a href='profil.php' id='my_ads_navbar_my_ads'>Mes annonces</a>";
		$this->profilNav .= "</li>";
		$this->profilNav .= "<li>";
		$this->profilNav .= "<a href='saved_ads.html' id='my_ads_navbar_my_saved_ads'>Annonces Sauvgardees</a>";
		$this->profilNav .= "</li>";
		$this->profilNav .= "<li>";
		$this->profilNav .= "<a href='settings.php' id='my_ads_navbar_my_ads_settings'>Reglage</a>";
		$this->profilNav .= "</li>";
		$this->profilNav .= "<li class='divider'></li>";
		$this->profilNav .= "<li>";
		$this->profilNav .= "<a href='../inc/logout.php' id='my_ads_navbar_my_ads_logOut'>Deconnexion</a>";
		$this->profilNav .= "</li>";
		$this->profilNav .= "</ul>";
		$this->profilNav .= "</div>";
		$this->profilNav .= "</div>";
		$this->profilNav .= "</nav>";
                $this->profilNav .= "<script type='text/javascript' src='../../Template/include/js/profMenu.js'></script>\r\n";
                return $this->profilNav;
	}
	/*
	*the footer function interface
	*/
	public function getFooter()
	{
		$this->footer = "<footer id='last'>";
		$this->footer .= "<div class='container'>";
		$this->footer .= "<div class='col-md-3 re-ft-grd float-left'>";
		$this->footer .= "<h3>Short links</h3>";
		$this->footer .= "<ul class='shot-links'>";
		$this->footer .= "<li><a href='#'>Contact us</a></li>";
		$this->footer .= "<li><a href='#'>Support</a></li>";
		$this->footer .= "<li><a href='#'>Return Policy</a></li>";
		$this->footer .= "<li><a href='#'>Terms & Conditions</a></li>";
		$this->footer .= "<li><a href='#'>A propos de Nous</a></li>";
		$this->footer .= "</ul>";
		$this->footer .= "</div>";
		$this->footer .= "<div class='col-md-6 re-ft-grd float-left'>";
		$this->footer .= "<h3 style='text-align: center;'>SOCIAL</h3>";
		$this->footer .= "<ul class='social'>";
		$this->footer .= "<li><a href='#' class='fb'>facebook</a></li>";
		$this->footer .= "<li><a href='#' class='twt'>twitter</a></li>";
		$this->footer .= "<li><a href='#' class='google'>G+ plus</a></li>";
		$this->footer .= "</ul>";
		$this->footer .= "</div>";
		$this->footer .= "<div class='col-md-29 re-ft-grd float-left'>";
		$this->footer .= "<h3 style='text-align: center;'>News Letter</h3>";
		$this->footer .= "<input id='sub-email' type='text' maxlength='60' size='35' placeholder='E-mail' />";
		$this->footer .= "<input type='submit' id='newsLetetr' value='S inscrire' name='newsLetetr' />";
		$this->footer .= "</div>";
		$this->footer .= "</div>";
		$this->footer .= "</footer>\r\n";
		$this->footer .= "</body>\r\n";
		$this->footer .= "</html>";
		return $this->footer;
	}
        /*get the bread header*/
        public function getBread($context) {
                $this->bread = "<div class='breadcrumb-wrap'>";
                $this->bread .= "<div class='container'>";
                $this->bread .= "<ul id='breadcrumb_mypages' class='breadcrumb'>";
                $this->bread .= "<li>";
                $this->bread .= "<a href='index.html'><i class='searchicon'></i></a>";
                $this->bread .= "<i class='divider fonticon-right-open'></i>";
                $this->bread .= "</li>";
                $this->bread .= "<li class='active'>$context</li>";
                $this->bread .= "</ul>";
                $this->bread .= "</div>";
                $this->bread .= "</div>";
                return $this->bread;
        }
        
        /*get the menu nav in the head*/
        public function getMenuProfil() {
            $this->menu = "<ul id='myads-tab' class='nav nav-tabs nav-tabs-basic'>";
            $this->menu .= "<li class='active'>";
            $this->menu .= "<a id='profil.php' title='mes annonces'>mes annonces</a>";
            $this->menu .= "</li>";
            $this->menu .= "<li>";
            $this->menu .= "<a href='savedAds.php' id='my_ads_tab_saved_ads' title='Annonces sauvgardee'>Annonces sauvgardee</a>";
            $this->menu .= "</li>";
            $this->menu .= "<li>";
            $this->menu .= "<a href='settings.php' id='my_ads_tab_settings' title='reglage'>reglage</a>";
            $this->menu .= "</li>";
            $this->menu .= "</ul>";
            return $this->menu;
        }
        /*get the menu nav in the head for settings cause we cannot made it with Js by loading all the page*/
        public function getMenuSetting() {
            $this->menu = "<ul id='myads-tab' class='nav nav-tabs nav-tabs-basic'>";
            $this->menu .= "<li>";
            $this->menu .= "<a href='profil.php' id='' title='mes annonces'>mes annonces</a>";
            $this->menu .= "</li>";
            $this->menu .= "<li>";
            $this->menu .= "<a href='savedAds.php' id='my_ads_tab_saved_ads' title='Annonces sauvgardee'>Annonces sauvgardee</a>";
            $this->menu .= "</li>";
            $this->menu .= "<li class='active'>";
            $this->menu .= "<a href='settings.php' id='my_ads_tab_settings' title='reglage'>reglage</a>";
            $this->menu .= "</li>";
            $this->menu .= "</ul>";
            return $this->menu;
        }
}