<?php
include_once 'include/includedView.class.php';
/*
 * this view class is the main class of index view
 * by extending the nav and the footer from includedView
 */
class index extends includedView{
    
    /*setting attributes*/
    private $head;
    private $header;
    private $section_1;
    private $slider;
    private $section_2;

    /*get the head element*/
    public function getHead(){
        $this->head = "<head>\r\n";
    	$this->head .= "<title>Host Me - Accueil</title>\r\n";
    	$this->head .= "<meta charset='UTF-8'/>\r\n";
    	$this->head .= "<meta name='author' content='Ayoub RMIDI' />\r\n";
    	$this->head .= "<link rel='stylesheet' type='text/css' href='../../Template/include/css/jquery-ui.css'>\r\n";
    	$this->head .= "<link rel='stylesheet' type='text/css' href='../../Template/include/css/style.css'>\r\n";
    	$this->head .= "<link rel='stylesheet' type='text/css' href='../../Template/include/css/easydropdown.css'>\r\n";
    	$this->head .= "<link rel='stylesheet' type='text/css' href='../../Template/include/css/tooltips.min.css'>\r\n";
        $this->head .= "<script type='text/javascript' src='../../Template/include/js/jquery.min.js'></script>\r\n";
    	$this->head .= "<script type='text/javascript' src='../../Template/include/js/jquery-ui.min.js'></script>\r\n";
        $this->head .= "<script type='text/javascript' src='../../Template/include/js/jquery.easydropdown.js'></script>\r\n";
    	$this->head .= "<script type='text/javascript' src='../../Template/include/js/jquery.validate.min.js'></script>\r\n";
        $this->head .= "<script type='text/javascript' src='../../Template/include/js/retouch.js'></script>\r\n";
        $this->head .= "</head>\r\n";
        $this->head .="<body>\r\n";
    	return $this->head;
    }
    /*get the header element*/
    public function getHeader() {
        $this->header = "<header class='home-header'>"; #start of heder div
        $this->header .= "<div class='swiper-container home-header-bg'>";
        $this->header .= "<div class='swiper-wraper'>";
        $this->header .= "<div class='swiper-slide home-slide'>";
        $this->header .= "<img src='../../Template/include/images/IMG5.jpg' alt=''>";
        $this->header .= "</div>";
        $this->header .= "</div>";
        $this->header .= "</div>";
        $this->header .= "<div class='container home-searchWidget'>";
        $this->header .= "<div class='searchWidget'>";
        $this->header .= "<h1 class='searchWidget-title'>Location et échange temporelle de propriétés en ligne</h1>";
        $this->header .= "<div class='serachWidget-tabConatiner'>";
        $this->header .= "<form method='GET' id='search' novalidate>"; #start of form#search
        $this->header .= "<div class='col-md-4 col-lg-4 homepage-form-field'>";
        $this->header .= "<div class='row custom-row'>";
        $this->header .= "<input type='text' id='city' class='input-filed col-md-10 col-lg-10' placeholder='Ou voulez-vous allez' required name='city' autocomplete='off'>";
        $this->header .= "</div>";
        $this->header .= "</div>";
        $this->header .= "<div class='col-md-4 no-padding-left col-lg-4 homepage-form-field'>";
        $this->header .= "<div class='row custom-row'>";
        $this->header .= "<input type='text' id='thedate' name='cin' class='checkin-picker input-filed col-md-5 col-lg-5' placeholder='arrive' style='cursor:pointer;' autocomplete='off' required>";
        $this->header .= "<input type='text' id='thedate_1' class='checkout-picker input-filed col-md-5 col-lg-5' placeholder='depart' name='cout' style='cursor:pointer;' autocomplete='off' required>";
        $this->header .= "</div>";
        $this->header .= "</div>";
        $this->header .= "<div id='typeAnnonce' class='col-md-2 col-lg-2 no-padding homepage-form-field'>";
        $this->header .= "<div class='row custom-row'>";
        $this->header .= "<select id='choice' class='dropdown' name='type'>";
        $this->header .= "<option value='2'>Échange</option>";
        $this->header .= "<option value='1'>Location</option>";
        $this->header .= "</select>";
        $this->header .= "</div>";
        $this->header .= "</div>";
        $this->header .= "<div id='form-home-page-submit' class='col-md-2 col-lg-2'>";
        $this->header .= "<div class='row custom-row'>";
        $this->header .= "<button id='btnSubmitSearch' class='serachWidget-submit' type='submit'>Rechercher</button>";
        $this->header .= "</div>";
        $this->header .= "</div>";
        $this->header .= "<input type='hidden' value='submit' name='search'>";
        $this->header .= "</form>"; #end of form#search
        $this->header .= "</div>";
        $this->header .= "</div>";
        $this->header .= "</div>";
        $this->header .= "<div class='nxt nxt_1'></div>";
        $this->header .= "</header>"; #end of header
        return $this->header;
    }
    /*get the 1st section*/
    public function getHowItWorks() {
        $this->section_1 = "<section>";
        $this->section_1 .= "<div class='top-destin-homepage'>";
        $this->section_1 .= "<div class='how-it-works-container' >";
        $this->section_1 .= "<div class='row'>";
        $this->section_1 .= "<div class='col-lg-12 col-md-12'>";
        $this->section_1 .= "<h2 class='how-it-works-title'>Comment ça marche ?</h2>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "<div class='row'>";
        $this->section_1 .= "<div class='col-lg-4 col-md-4'>";
        $this->section_1 .= "<div class='row'>";
        $this->section_1 .= "<div class='col-lg-12 col-md-12 how-it-work-icon-container'>";
        $this->section_1 .= "<div class='hiwi'>";
        $this->section_1 .= "<span class='how-it-work how-it-work1'></span>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "<div class='row'>";
        $this->section_1 .= "<div class='col-lg-12 col-md-12 hiw-content'>";
        $this->section_1 .= "<span>chercher</span>";
        $this->section_1 .= "<div class='hiw-text'>";
        $this->section_1 .= "Entrez votre destination, les dates de voyage et le type de location dans le moteur de recherche.";
        $this->section_1 .= "</div>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "<div class='col-lg-4 col-md-4'>";
        $this->section_1 .= "<div class='row'>";
        $this->section_1 .= "<div class='col-lg-12 col-md-12 how-it-work-icon-container'>";
        $this->section_1 .= "<div class='hiwi'>";
        $this->section_1 .= "<span class='how-it-work how-it-work2'></span>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "<div class='row'>";
        $this->section_1 .= "<div class='col-lg-12 col-md-12 hiw-content'>";
        $this->section_1 .= "<span>Comparez</span>";
        $this->section_1 .= "<div class='hiw-text'>";
        $this->section_1 .= "Trouvez votre hébergement idéal au meilleur prix en utilisant le filtre et les options de tri (étoiles, prix, localité et équipement).";
        $this->section_1 .= "</div>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "<div class='col-lg-4 col-md-4'>";
        $this->section_1 .= "<div class='row'>";
        $this->section_1 .= "<div class='col-lg-12 col-md-12 how-it-work-icon-container'>";
        $this->section_1 .= "<div class='hiwi'>";
        $this->section_1 .= "<span class='how-it-work how-it-work3'></span>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "<div class='row'>";
        $this->section_1 .= "<div class='col-lg-12 col-md-12 hiw-content'>";
        $this->section_1 .= "<span>Contacter</span>";
        $this->section_1 .= "<div class='hiw-text'>";
        $this->section_1 .= "contacter le propriétaire de votre locale desiré, et plqnifiew pour un rendez-vous. Faites votre affaire, et partez en toute sérénité !";
        $this->section_1 .= "</div>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "</div>";
        $this->section_1 .= "<div class='nxt nxt_2'></div>";
        $this->section_1 .= "</section>";
        return $this->section_1;       
    }
    /*get the 2nd section*/
    public function getWHatTheySaid(){
       $this->section_2 = "<section id='Num2'>";
       $this->section_2 .= "<div class='top-destin-homepage'>";
       $this->section_2 .= "<div class='how-it-works-container' id='topDestin'>";
       $this->section_2 .= "<div class='row'>";
       $this->section_2 .= "<div class='col-lg-12 col-md-12'>";
       $this->section_2 .= "<h2 class='how-it-works-title'>Ce que disent nos clients et partenaires</h2>";
       $this->section_2 .= "</div>";
       $this->section_2 .= "</div>";
       $this->section_2 .= "<div class='row'>";
       $this->section_2 .= "<div class='col-lg-4 col-md-4'>";
       $this->section_2 .= "<div class='row'>";
       $this->section_2 .= "<div class='col-lg-12 col-md-12 how-it-work-icon-container'>";
       $this->section_2 .= "<div class='hiwi'>";
       $this->section_2 .= "<span class='wht-he wht-he-say1'></span>";
       $this->section_2 .= "</div>";
       $this->section_2 .= "</div>";
       $this->section_2 .= "</div>";
       $this->section_2 .= "<div class='row'>";
       $this->section_2 .= "<div class='col-lg-12 col-md-12 wht-content'>";
       $this->section_2 .= "<h3>Marouane Lachgar</h3>";
       $this->section_2 .= "<div class='hiw-text'>";
       $this->section_2 .= "Même si je vis loin de chez moi, mon coeur est toujours au Nigéria. Je n'ai jamais de problème pour trouver un hébergement lorsque je rentre au pays, Jovago me permet de réserver facilement et sans stress.";
       $this->section_2 .= "</div>";
       $this->section_2 .= "</div>";
       $this->section_2 .= "</div>";
       $this->section_2 .= "</div>";
       $this->section_2 .= "<div class='col-lg-4 col-md-4'>";
       $this->section_2 .= "<div class='row'>";
       $this->section_2 .= "<div class='col-lg-12 col-md-12 how-it-work-icon-container'>";
       $this->section_2 .= "<div class='hiwi'>";
       $this->section_2 .= "<span class='wht-he wht-he-say2'></span>";
       $this->section_2 .= "</div>";
       $this->section_2 .= "</div>";
       $this->section_2 .= "</div>";
       $this->section_2 .= "<div class='row'>";
       $this->section_2 .= "<div class='col-lg-12 col-md-12 wht-content'>";
       $this->section_2 .= "<h3>Nabila Morchid</h3>";
       $this->section_2 .= "<div class='hiw-text'>";
       $this->section_2 .= "Réserver un hôtel est devenu un plaisir grâce à Jovago et toujours au meilleur prix. Du coup, à chaque fois que je pense voyage, je pense Jovago.com.";
       $this->section_2 .= "</div>";
       $this->section_2 .= "</div>";
       $this->section_2 .= "</div>";
       $this->section_2 .= "</div>";
       $this->section_2 .= "<div class='col-lg-4 col-md-4'>";
       $this->section_2 .= "<div class='row'>";
       $this->section_2 .= "<div class='col-lg-12 col-md-12 how-it-work-icon-container'>";
       $this->section_2 .= "<div class='hiwi'>";
       $this->section_2 .= "<span class='wht-he wht-he-say3'></span>";
       $this->section_2 .= "</div>";
       $this->section_2 .= "</div>";
       $this->section_2 .= "</div>";
       $this->section_2 .= "<div class='row'>";
       $this->section_2 .= "<div class='col-lg-12 col-md-12 wht-content'>";
       $this->section_2 .= "<h3>Ayoub Rmidi</h3>";
       $this->section_2 .= "<div class='hiw-text'>";
       $this->section_2 .= "Super expérience. Réservation et confirmation en quelques minutes ! Bravo Jovago pour votre efficacité !";
       $this->section_2 .= "</div>";
       $this->section_2 .= "</div>";
       $this->section_2 .= "</div>";
       $this->section_2 .= "</div>"; 
       $this->section_2 .= "</div>"; 
       $this->section_2 .= "</div>"; 
       $this->section_2 .= "</div>"; 
       $this->section_2 .= "<div class='nxt nxt_5'></div>"; 
       $this->section_2 .= "</section>"; 
       return $this->section_2; 
    }
    
}