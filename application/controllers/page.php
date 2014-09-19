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

    function profile() {
        $this->smarty->view('profile.tpl');
    }

    function applyrest() {
        $this->smarty->view('applyrest.tpl');
    }

    function createmenu() {
        $this->load->model('rest_model');
        $rest = $this->rest_model->getByUid($_SESSION['user']['id']);
        $data['rests'] = $rest;
        $this->smarty->view('menu/create.tpl', $data);
    }

    function createitem() {
        $this->load->model('rest_model');
        $this->load->model('menu_model');
        $uid = $_SESSION['user']['id'];
        $rest = $this->rest_model->getByUid($uid);
        $data['rests'] = $rest;
        $menu= $this->menu_model->getByUid($uid);
        $data['menus'] =$menu;
        $this->smarty->view('menu/itemcreate.tpl', $data);
    }

}
