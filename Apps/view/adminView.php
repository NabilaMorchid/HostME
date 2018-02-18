<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of adminView
 *
 * @author root
 */
class adminView {
    //setting attributes
    private $adm;
    private $head;
    //method for getting the head
    public function getHead() {
        $this->head = "<!DOCTYPE html>\r\n";
        $this->head .= "<html>\r\n";
        $this->head .= "<head>\r\n";
        $this->head .= "<title>Administrator</title>\r\n";
        $this->head .= "<meta charset='utf-8' />\r\n";
        $this->head .= "<meta name='author' content='Ayoub RMIDI' />\r\n";
        $this->head .= "<meta name='viewport' content='width=device-width, initialscale=1.0' >\r\n";
        $this->head .= "<link rel='stylesheet' type='text/css' href='../../Template/include/css/admStyle.css'>\r\n";
        $this->head .= "</head>\r\n";
        return $this->head;
    }
    //get the admin body
    public function getAdm() {
        $this->adm = "<body>";
        $this->adm .= "<div class='header'> ";
        $this->adm .= "<div class='container' >";
        $this->adm .= "<div class='logo' ></div>";
        $this->adm .= "</div>";
        $this->adm .= "</div>";
        $this->adm .= "<div class='content'>";
        $this->adm .= "<form action=".filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_SANITIZE_STRING)." method='post'>";
        $this->adm .= "<h3>Login</h3>";
        $this->adm .= "<input type='text' name='email' placeholder='Username' required autofocus>";
        $this->adm .= "<input type='password' name='password' placeholder='Password'  required>";
        $this->adm .= "<input type='hidden' name='login'>";
        $this->adm .= "<button type='submit'>Log In</button>";
        $this->adm .= "<a class='forgot' href='#'>Forgot your password??</a>";
        $this->adm .= "</form>";
        $this->adm .= "</div>";
        $this->adm .= "</body>";
        $this->adm .= "</html>";
        return $this->adm;      
    }
}
