<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page
 *
 * @author Administrator
 */
class page extends MY_Controller {

    //put your code here

    function login() {
        $this->smarty->view('login.tpl');
    }

    function register() {
        $this->smarty->view('register.tpl');
    }

    function profile(){
        $this->smarty->view('profile.tpl');
    }    
    
    function applyrest(){
        $this->smarty->view('applyrest.tpl');
        
    }
}
