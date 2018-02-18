<?php
include_once 'include/includedView.class.php';
/*
 * this view class is the main class for the profil view
 * by extending the nav and the footer from includedView
 */

class profil extends includedView {
	
	/*setting attributes*/
	private $head;
        private $setting;
        /*get the head element*/
	public function getHead(){
            $this->head = "<head>\r\n";
    	    $this->head .= "<title>Host Me - Mes Annonces</title>\r\n";
    	    $this->head .= "<meta charset='UTF-8'/>\r\n";
    	    $this->head .= "<meta name='author' content='Ayoub RMIDI' />\r\n";
    	    $this->head .= "<link rel='stylesheet' type='text/css' href='../../Template/include/css/style.css'>\r\n";
    	    $this->head .= "<script type='text/javascript' src='../../Template/include/js/jquery.min.js'></script>\r\n";                                                  
    	    $this->head .= "<script type='text/javascript' src='../../Template/include/js/test.js'></script>\r\n";
            $this->head .= "</head>\r\n";
            $this->head .="<body>\r\n";
    	    return $this->head;
        }
        /*get the setting user interface*/
        public function getSetting() {
            $this->setting = "<div class='container mcm'>";
            $this->setting .= "<div class='mypages-wrap-two mypages-ads'>";
            $this->setting .= $this->getMenuSetting();
            $this->setting .= "<div class='panel panel_help'>";
            $this->setting .= "<div class='panel-main panel-body'>";
            $this->setting .= "<div class='row-fluid spec'>";
            $this->setting .= "<nav class='span5'>";
            $this->setting .= "<ul class='nav nav-list pts'>";
            $this->setting .= "<li class='active'>";
            $this->setting .= "<a href='settings.php' title='modifier vos information'>Modifier les information de compte</a>";
            $this->setting .= "</li>";
            $this->setting .= "<li>";
            $this->setting .= "<a href='setpass.php' id='modifyPass' title='modifier votre mot de pass'>Modifier votre mot de pass</a>";
            $this->setting .= "</li>";
            $this->setting .= "</ul>";
            $this->setting .= "</nav>";
            $this->setting .= "<div class='span13'>";
            $this->setting .= "<h2>Modifiez les réglages de votre compte</h2>";
            $this->setting .= "<hr class='mtm mbs' />";
            $this->setting .= "<form class='form-horizontal mypages-setting' id='setting' name='settings' action=".filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_SANITIZE_STRING)." method='post'>";
            $this->setting .= "<div class='control-group'>";
            $this->setting .= "<label class='control-label' for='company_ad'></label>";
            $this->setting .= "<div class='controls'>Particulier</div>";
            $this->setting .= "</div>";
            $this->setting .= "<div class='control-group'>";
            $this->setting .= "<label class='control-label' for='name'>Nom :</label>";
            $this->setting .= "<div class='controls'>";
            $this->setting .= "<input type='text' id='name' name='name' class='input-xlarge' maxlength='50'>";
            $this->setting .= "</div>";
            $this->setting .= "</div>";
            $this->setting .= "<div class='control-group'>";
            $this->setting .= "<label class='control-label' for='phone'>Téléphone:</label>";
            $this->setting .= "<div class='controls'>";
            $this->setting .= "<input type='text' id='phone' name='phone' class='input-xlarge' maxlength='50'>";
            $this->setting .= "<label class='checkbox no-margin' for='phone-hidden'><input type='checkbox' value='1' name='phone-hidden' id='phone-hidden'>Masquer le numéro de téléphone sur les annonces publiées.</label>";
            $this->setting .= "</div>";
            $this->setting .= "</div>";
            $this->setting .= "<div class='control-group'>";
            $this->setting .= "<label class='control-label' for='mail'>E-mail:</label>";
            $this->setting .= "<div class='controls'>";
            $this->setting .= "<input type='text' id='mail' name='mail' class='input-xlarge' maxlength='60' value='$_SESSION[email]' disabled='on'>";
            $this->setting .= "<p class='no-margin'><small>Vous ne pouvez pas changer votre adresse e-mail.</small><a href='#'> Lisez les questions les plus fréquemment posées</a></p>";
            $this->setting .= "</div>";
            $this->setting .= "</div>";
            $this->setting .= "<div class='control-group'>";
            $this->setting .= "<label class='control-label' for='ville'>ville :</label>";
            $this->setting .= "<div class='controls'>";
            $this->setting .= "<input type='text' id='ville' name='ville' class='input-xlarge' maxlength='60' value=''>";
            $this->setting .= "</div>";
            $this->setting .= "</div>";
            $this->setting .= "<div class='control-group'>";
            $this->setting .= "<div class='controls'>";
            $this->setting .= "<hr class='no-margin' />";
            $this->setting .= "<input id='my_ads_acount_ad_button' class='btn btn-blue mtm mbl' type='submit' name='save_change' value='Sauvgarder les modifications'>";
            $this->setting .= "</div>";
            $this->setting .= "</div>";
            $this->setting .= "</form>";
            $this->setting .= "</div>";
            $this->setting .= "</div>";
            $this->setting .= "</div>";
            $this->setting .= "</div>";
            $this->setting .= "<hr />";
            $this->setting .= "<div class='text-center mbs'>";
            $this->setting .= "<h3>Vous avez quelque chose à louer ou a echenger ?</h3>";
            $this->setting .= "<p>Déposez votre annonce gratuitement sur Lamudi.ma aujourd'hui!</p>";
            $this->setting .= "<a href='createPub.php' id='' class='topNav-action-link topNav-newListing-button button import_bottom'>Deposer Vos Annonces</a>";
            $this->setting .= "</div>";
            $this->setting .= "</div>";
            $this->setting .= "</div>";
            return $this->setting;
        }
        
}