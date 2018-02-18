<?php
include_once 'include/includedView.class.php';
/*
 * this view class is the main class of create publication view
 * by extending the nav and the footer from includedView
 */
class createPub extends includedView{
    /*Setting Attributes*/
    private $creatPub;
    private $head;
    /*get the head element*/
	public function getHead(){
        $this->head = "<head>\r\n";
    	$this->head .= "<title>Host Me - Creer une annonce</title>\r\n";
    	$this->head .= "<meta charset='UTF-8'/>\r\n";
    	$this->head .= "<meta name='author' content='Ayoub RMIDI' />\r\n";
    	$this->head .= "<link rel='stylesheet' type='text/css' href='../../Template/include/css/jquery-ui.css'>\r\n";
        $this->head .= "<link rel='stylesheet' type='text/css' href='../../Template/include/css/style.css'>\r\n";
        $this->head .= "<link rel='stylesheet' type='text/css' href='../../Template/include/css/tooltips.min.css'>\r\n";
    	$this->head .= "<script type='text/javascript' src='../../Template/include/js/jquery.min.js'></script>\r\n";                                                  
    	$this->head .= "<script type='text/javascript' src='../../Template/include/js/jquery-ui.min.js'></script>\r\n";
        $this->head .= "<script type='text/javascript' src='../../Template/include/js/jquery.validate.min.js'></script>\r\n";
        $this->head .= "<script type='text/javascript' src='../../Template/include/js/validate.js'></script>\r\n";
        $this->head .= "<script type='text/javascript' src='../../Template/include/js/upload.js'></script>\r\n";
        $this->head .= "</head>\r\n";
        $this->head .="<body>\r\n";
        return $this->head;
    }
    /*get the form of create pub method*/
    public function getCreatPub() {
        $this->creatPub = "<div class='container mbm'>";
        $this->creatPub .= "<div class='row mypages_create'>";
        $this->creatPub .= "<div class='span13'>";
        $this->creatPub .= "<div class='panel'>";
        $this->creatPub .= "<div class='panel-heading panel-heading-xlarge'>";
        $this->creatPub .= "<i class='sprite_common_ma_smiley_small mls mrm float-left'></i>";
        $this->creatPub .= "Créer votre annonce sur Lamudi.ma";
        $this->creatPub .= "<span class='label label-important'>Nouveau !</span>";
        $this->creatPub .= "<br/>";
        $this->creatPub .= "<span class='float-left'>Toutes vos annonces et vos favoris à un seul endroit,<strong> C'est gratuit</strong></span>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "<form class='panel-main form-horizontal' id='creatPub' name='createPub' method='post' enctype='multipart/form-data' action=".filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_SANITIZE_STRING)." >"; #start of form createPub
        $this->creatPub .= "<div class='panel-body'>";
        $this->creatPub .= "<div class='control-group'>";
        $this->creatPub .= "<label class='control-label' for='name'>Categorie :</label>";
        $this->creatPub .= "<div class='controls'>";
        $this->creatPub .= "<select id='categorie' name='categorie'>";
        $this->creatPub .= "<option selected='selected' value=''>«Choisissez votre categorie»</option>";
        $this->creatPub .= "<option value='1'>Location</option>";
        $this->creatPub .= "<option value='2'>echange</option>";
        $this->creatPub .= "</select>";
        $this->creatPub .= "<input type='text' id='surface' name='surface' placeholder='Surface en m²' maxlength='4'>";
        $this->creatPub .= "<span class='prx'> m²</span>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "<div class='control-group' id='tempSelect'>";
        $this->creatPub .= "<label class='control-label' for='villeechange'>Ville d'echange :</label>";
        $this->creatPub .= "<div class='controls'>";
        $this->creatPub .= "<div class='input-icon relative'>";
        $this->creatPub .= "<input type='text' id='villeechange' name='villeechange' placeholder='ville de changement' class='input-xlarge' maxlength='50' size='35'>";
        $this->creatPub .= "<label class='no-margin' for='villeechange'><i class='fonction-phone'></i></label>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "<div class='control-group' id='tempCin'>";
        $this->creatPub .= "<label class='control-label' for='debut'>date de debut :</label>";
        $this->creatPub .= "<div class='controls'>";
        $this->creatPub .= "<div class='input-icon relative'>";
        $this->creatPub .= "<input type='text' id='debut' name='debut' placeholder='DD-MM-YYYY' class='input-xlarge' maxlength='50' size='35'>";
        $this->creatPub .= "<label class='no-margin' for='debut'></label>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "<div class='control-group' id='tempCout'>";
        $this->creatPub .= "<label class='control-label' for='fin'>date de fin :</label>";
        $this->creatPub .= "<div class='controls'>";
        $this->creatPub .= "<div class='input-icon relative'>";
        $this->creatPub .= "<input type='text' id='fin' name='fin' placeholder='DD-MM-YYYY' class='input-xlarge' maxlength='50' size='35'>";
        $this->creatPub .= "<label class='no-margin' for='fin'></label>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "<div class='control-group'>";
        $this->creatPub .= "<label class='control-label' for='ville'>Ville :</label>";
        $this->creatPub .= "<div class='controls'>";
        $this->creatPub .= "<div class='input-icon relative'>";
        $this->creatPub .= "<input type='text' id='ville' name='ville' placeholder='ville de mon bien' class='input-xlarge' maxlength='50' size='35'>";
        $this->creatPub .= "<label class='no-margin' for='ville'><i class='fonction-phone'></i></label>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "<div class='control-group'>";
        $this->creatPub .= "<label class='control-label' for='adresse'>Adresse :</label>";
        $this->creatPub .= "<div class='controls'>";
        $this->creatPub .= "<div class='input-icon relative'>";
        $this->creatPub .= "<input type='text' id='adresse' name='adresse' placeholder='adresse de mon bien' class='input-xlarge' maxlength='50' size='35'>";
        $this->creatPub .= "<label class='no-margin' for='adresse'><i class='fonction-phone'></i></label>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "<div class='control-group'>";
        $this->creatPub .= "<label class='control-label' for='titre'>Titre :</label>";
        $this->creatPub .= "<div class='controls'>";
        $this->creatPub .= "<div class='input-icon relative'>";
        $this->creatPub .= "<input type='text' id='titre' name='titre' class='input-xlarge' placeholder='maisin a louer a casablanca' maxlength='70' size='35'>";
        $this->creatPub .= "<label class='no-margin' for='titre'><i class='fonction-titre'></i></label>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "<div class='control-group'>";
        $this->creatPub .= "<label class='control-label' for='descrip'>texte de l'annonce :</label>";
        $this->creatPub .= "<div class='controls'>";
        $this->creatPub .= "<div class='input-icon relative'>";
        $this->creatPub .= "<textarea id='descrip' name='descrip' class='input-large' maxlength='2000' style='max-width:430px;width:430px' rows='10' cols='45'></textarea>";
        $this->creatPub .= "<label class='no-margin' for='descrip'><small>2000 caracteres restants</small></label>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "<div class='control-group' id='prx'>";
        $this->creatPub .= "<label class='control-label' for='prix'>Prix Total :</label>";
        $this->creatPub .= "<div class='controls'>";
        $this->creatPub .= "<div class='input-icon relative'>";
        $this->creatPub .= "<input type='text' id='prix' name='prix' class='input-large' placeholder='' value='' maxlength='70' autocomplete='off'><span class='prx'> DH</span>";
        $this->creatPub .= "<label class='no-margin' for='prix'><i class='fonction-lock'></i></label>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "<hr/>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "<div class='control-group'>";
        $this->creatPub .= "<label class='control-label' for='image'>Photos :<br/><small>Ajouter jusqu'à 3 photos</small></label>";
        $this->creatPub .= "<div class='controls'>";
        $this->creatPub .= "<div class='aiupload-start clearfix'>";
        $this->creatPub .= "<div class='imgUpload'>";
        $this->creatPub .= "<input type='file' id='image' class='imageUplaod' multiple name='image[]' tabindex='-1'>";#accept='image/jpeg,image/png,image/jpg'
        $this->creatPub .= "</div>";
        $this->creatPub .= "<div class='panel-body panel-info text-center span8 wlai' id='tot2'>";
        $this->creatPub .= "<div class='row-fluid'>";
        $this->creatPub .= "<div class='span9' id='tot'>";
        $this->creatPub .= "<h5 class='font-normal'>";
        $this->creatPub .= "Utiliser une<strong> vrai photo de votre objet , </strong> et non des photos d'internet";
        $this->creatPub .= "</h5>";
        $this->creatPub .= "</div>"; #end of div.span9
        $this->creatPub .= "<div class='span9'>";
        $this->creatPub .= "<i class='sprite_common_ma_ai_example_images show float-right mts'></i>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        //start
        $this->creatPub .= "<div class='control-group'>";
        $this->creatPub .= "<div class='controls'>";
        $this->creatPub .= "<div class='upload_tmp'></div>";
        $this->creatPub .= "</div>"; #end of div.controls
        $this->creatPub .= "</div>"; #end of div.control-group
        //end
        $this->creatPub .= "</div>"; #end of div.panel-body
        $this->creatPub .= "<div class='panel-footer'>";
        $this->creatPub .= "<span class='fonticon-attention fonticon-size-large fonticon-vertical-fix'>En validant mon annonce, j'accepte les <a href='#'> Règles d'utilisation</a>du site Lamudi.ma. </span>";
        $this->creatPub .= "<input type='submit' value='Deposer votre annonce !' name='create' id='create' class='btn btn-large btn-blue float-right'>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "<input type='hidden' id='picName' name='picName' value=''>";
        $this->creatPub .= "</form>"; #end ofo form
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>"; #end of div.span13
        $this->creatPub .= "<div class='span6'>";
        $this->creatPub .= "<div class='panel'>";
        $this->creatPub .= "<div class='panel-main panel-noheading'>";
        $this->creatPub .= "<div class='pps'>";
        $this->creatPub .= "<div class='pubZone'>Zone Pub</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        $this->creatPub .= "</div>";
        return $this->creatPub;
    }
}