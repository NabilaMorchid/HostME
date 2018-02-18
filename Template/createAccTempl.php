<?php
include_once 'include/includedView.class.php';
/*
 * this view class is the main class of creating account view
 * by extending the nav and the footer from includedView
 */
class createAcc extends includedView {
    
    /*setting the vies Attributes*/
    private $head;
    private $form;
    /*get the header elememnt*/
    public function getHead()
    {
        $this->head = "<head>\r\n";
    	$this->head .= "<title>Host Me - Creer un compte</title>\r\n";
    	$this->head .= "<meta charset='UTF-8'/>\r\n";
    	$this->head .= "<meta name='author' content='Ayoub RMIDI' />\r\n";
    	$this->head .= "<link rel='stylesheet' type='text/css' href='../../Template/include/css/style.css'>\r\n";
    	$this->head .= "<link rel='stylesheet' type='text/css' href='../../Template/include/css/tooltips.min.css'>\r\n";
    	$this->head .= "<script type='text/javascript' src='../../Template/include/js/jquery.min.js'></script>\r\n";
        $this->head .= "<script type='text/javascript' src='../../Template/include/js/jquery-ui.min.js'></script>\r\n";
    	$this->head .= "<script type='text/javascript' src='../../Template/include/js/jquery.validate.min.js'></script>\r\n";
        $this->head .= "<script type='text/javascript' src='../../Template/include/js/validate.js'></script>\r\n";
    	$this->head .= "</head>\r\n";
        $this->head .= "<body>\r\n";
    	return $this->head;
    }
    
    public function getMainContent()
    {
        $this->form = "<div class='container mbm'>";
        $this->form .= "<div class='row mypages_create'>";
        $this->form .= "<div class='span13'>";
        $this->form .= "<div class='panel'>";
        $this->form .= "<div class='panel-heading panel-heading-xlarge'>";
        $this->form .= "<i class='sprite_common_ma_smiley_small mls mrm float-left'></i>";
        $this->form .= "Créer un compte Lamudi.ma";
        $this->form .= "<span class='label label-important'>Nouveau !</span>";
        $this->form .= "<br/>";
        $this->form .= "<span class='float-left'>Toutes vos annonces et vos favoris à un seul endroit,<strong> C'est gratuit</strong></span>";
        $this->form .= "</div>";
        $this->form .= "<form class='panel-main form-horizontal' id='SignUp' name='create_acc' method='post' action=".filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_SANITIZE_STRING).">"; #$_SERVER[PHP_SELF]
        $this->form .= "<div class='panel-body'>";
        $this->form .= "<div class='control-group'>"; #start of div.control group
        $this->form .= "<label class='control-label' for='name'>Nom :</label>";
        $this->form .= "<div class='controls'>"; #start of div.controls
        $this->form .= "<div class='input-icon relative'>";
        $this->form .= "<input type='text' id='name' name='name' placeholder='Votre nom' class='input-xlarge' maxlength='50' size='35'>";
        $this->form .= "<label class='no-margin' for='name'><i class='fonction-user'></i></label>";
        $this->form .= "</div>";
        $this->form .= "</div>"; #end of div.controls
        $this->form .= "</div>"; #end of div.control-group
        $this->form .= "<div class='control-group'>";#start of div.control-group
        $this->form .= "<label class='control-label' for='phone'>Telephone :</label>";
        $this->form .= "<div class='controls'>";
        $this->form .= "<div class='input-icon relative'>";
        $this->form .= "<input type='text' id='phone' name='phone' placeholder='06XXXXXXXX' class='input-xlarge' maxlength='50' size='35'>";
        $this->form .= "<label class='no-margin' for='phone'><i class='fonction-phone'></i></label>";
        $this->form .= "</div>";
        $this->form .= "<label class='checkbox input-block-level'>";
        $this->form .= "<input type='checkbox' name='phone-hidden' value='1' id='phone-hidden'>Masquer le numéro de téléphone sur les annonces publiées.";
        $this->form .= "</label>";
        $this->form .= "<hr />";
        $this->form .= "</div>";
        $this->form .= "</div>"; #end of div.control-group
        $this->form .= "<div class='control-group'>"; #start of div.control-group
        $this->form .= "<label class='control-label' for='pays'>pays :</label>";
        $this->form .= "<div class='controls'>";
        $this->form .= "<select id='pays' name='pays'>";
        $this->form .= "<option selected='selected' value='0'>Maroc</option>";
        $this->form .= "<option value='1'>Espagne</option>";
        $this->form .= "<option value='2'>Germany</option>";
        $this->form .= "<option value='3'>France</option>";
        $this->form .= "<option value='4'>Italie</option>";
        $this->form .= "<option value='5'>Portugale</option>";
        $this->form .= "<option value='6'>England</option>";
        $this->form .= "<option value='7'>Pays-Bas</option>";
        $this->form .= "</select>";
        $this->form .= "</div>";
        $this->form .= "</div>"; #end of div.control-group
        $this->form .= "<div class='control-group'>"; #start of div.control-group
        $this->form .= "<label class='control-label' for='ville'>ville :</label>";
        $this->form .= "<div class='controls'>";
        $this->form .= "<div class='input-icon relative'>";
        $this->form .= "<input type='text' id='ville' name='ville' class='input-xlarge' placeholder='Casablanca' maxlength='50' size='35'>";
        $this->form .= "<label class='no-margin' for='ville'><i class='fonction-ville'></i></label>";
        $this->form .= "</div>";
        $this->form .= "</div>";
        $this->form .= "</div>"; #end of div.control-group
        $this->form .= "<div class='control-group'>"; #start of div.control-group
        $this->form .= "<label class='control-label' for='mail'>E-mail :</label>";
        $this->form .= "<div class='controls'>";
        $this->form .= "<div class='input-icon relative'>";
        $this->form .= "<input type='text' id='mail' name='email' class='input-xlarge' placeholder='nom@domaine.com' maxlength='50' size='35'>";
        $this->form .= "<label class='no-margin' for='mail'><i class='fonction-email'></i></label>";
        $this->form .= "</div>";
        $this->form .= "</div>";
        $this->form .= "</div>"; #end of div.control-group
        $this->form .= "<div class='control-group'>";  #start of div.control-group
        $this->form .= "<label class='control-label' for='passwd'>password :</label>";
        $this->form .= "<div class='controls'>";
        $this->form .= "<div class='input-icon relative'>";
        $this->form .= "<input type='password' id='passwd' name='password' class='input-large' placeholder='Choisissez un mot de passe' maxlength='70' autocomplete='off'>";
        $this->form .= "<label class='no-margin' for='passwd'><small>(au moins 6 caractères) Choisissez un mot de passe qui n'est pas facile à deviner.</small></label>";
        $this->form .= "</div>";
        $this->form .= "</div>";
        $this->form .= "</div>"; #end of div.control-group
        $this->form .= "<div class='control-group'>"; #start of div.control-group
        $this->form .= "<label class='control-label' for='passwd_conf'>Confirmer le mot de passe:</label>";
        $this->form .= "<div class='controls'>";
        $this->form .= "<div class='input-icon relative'>";
        $this->form .= "<input type='password' id='passwd_conf' name='passwd_conf' class='input-large' placeholder='Confirmez le mot de passe' maxlength='70' autocomplete='off'>";
        $this->form .= "<label class='no-margin' for='passwd_conf'><i class='fonction-lock'></i></label>";
        $this->form .= "</div>";
        $this->form .= "<hr/>";
        $this->form .= "</div>";
        $this->form .= "</div>"; #end of div.control-group
        $this->form .= "<div class='control-group'>"; #start of div.control-group
        $this->form .= "<div class='controls'>";
        $this->form .= "<div class='text-block'>";
        $this->form .= "En cliquant sur 'Créer un compte' j'accepte la <a href='#' id='polit'>Politique de confidentialité</a> de Lamudi.ma";
        $this->form .= "</div>";
        $this->form .= "</div>";
        $this->form .= "</div>"; #end of div.control-group
        $this->form .= "</div>"; #end of div.panel-body
        $this->form .= "<div class='panel-footer'>";
        $this->form .= "<input type='submit' value='Créez un compte !' name='create' id='create' class='btn btn-large btn-blue float-right'>";
        $this->form .= "</div>";
        $this->form .= "</form>"; #end of form
        $this->form .= "</div>";
        $this->form .= "</div>"; #end of div.span13
        $this->form .= "<div class='span23'>"; #star of div span23
        $this->form .= "<div class='panel'>";
        $this->form .= "<div class='panel-heading panel-heading-small'>Suivez-nous sur Facebook";
        $this->form .= "</div>";
        $this->form .= "<div class='panel-body panel-main no-padding'><b>api facebook zone<br />tkellef a marwan</b></div>";
        $this->form .= "</div>";
        $this->form .= "<div class='sky_sticky'>";
        $this->form .= "<b>zone pub</b>";
        $this->form .= "</div>";
        $this->form .= "</div>"; #end of div span23
        $this->form .= "</div>"; #end of div.mypages_create
        $this->form .= "</div>"; #end of div.container
        return $this->form ;
    }

}