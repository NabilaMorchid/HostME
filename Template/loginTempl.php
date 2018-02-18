<?php
include_once 'include/includedView.class.php';
/*
 * this view class is the main class of login view
 * by extending the nav and the footer from includedView
 */

class logIn extends includedView{
	
	/*setting attributes*/
	private $head;
	private $loginForm;
        private $bread;
        
	/*get the head element*/
	public function getHead(){
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
            $this->head .="<body>\r\n";
    	    return $this->head;
        }
        
        /*get the login from content*/
        public function getLoginForm() {
            $this->loginForm = "<div class='container'>";
            $this->loginForm .= "<div class='container'>";
            $this->loginForm .= "<div class='row mtp80'>";
            $this->loginForm .= "<div class='span8 offset5'>";
            $this->loginForm .= "<div class='panel'>";
            $this->loginForm .= "<form method='post' class='panel-main panel-noheading' id='logIn' action=".filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_SANITIZE_STRING).">"; #start the for login
            $this->loginForm .= "<div class='panel-body pam'>";
            $this->loginForm .= "<h1 class='text-center'>Connexion</h1>";
            $this->loginForm .= "<h5 class='text-center'>Pas encore inscrit? <a href='createAcc.php' rel='nofollow'>S'inscrire gratuitement </a></h5>";
            $this->loginForm .= "<label for='email'>E-mail</label>";
            $this->loginForm .= "<div class='input-icon input-icon-large relative'>";
            $this->loginForm .= "<input type='text' id='email' class='input-block-level input-height-large' maxlength='60' size='50' name='email' placeholder='E-mail'>";
            $this->loginForm .= "<label class='no-margin' for='email'><i class='fonc-email'></i></label>";
            $this->loginForm .= "</div>";
            $this->loginForm .= "<label class='mtp' for='passwd'>Mot de passe:</label>";
            $this->loginForm .= "<div class='input-icon input-icon-large relative'>";
            $this->loginForm .= "<input type='password' id='passwd' class='input-block-level input-height-large' maxlength='60' size='50' name='password' placeholder='password'>";
            $this->loginForm .= "<label class='no-margin' for='password'><i class='fonc-passwd'></i></label>";
            $this->loginForm .= "</div>";
            $this->loginForm .= "<div class='mbtm12'>";
            $this->loginForm .= "<input type='submit' value='se connecter' name='login' id='login'>";
            $this->loginForm .= "</div>";
            $this->loginForm .= "</div>";
            $this->loginForm .= "<div class='panel-footer plm prm'>";
            $this->loginForm .= "<a class='cs-button cs-button-facebook' href=''>Login with facebook</a>";
            $this->loginForm .= "<span>";
            $this->loginForm .= "<a href='#' class='nohistory mypages-login-forgot-password float-right' rel='nofollow'>Mot de passe oublié?</a>";
            $this->loginForm .= "</span>";
            $this->loginForm .= "</div>";
            $this->loginForm .= "</form>";
            $this->loginForm .= "</div>";
            $this->loginForm .= "</div>";
            $this->loginForm .= "</div>";
            $this->loginForm .= "</div>";
            $this->loginForm .= "</div>";
            return $this->loginForm ;
        }
}