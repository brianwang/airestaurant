<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Menu extends MY_Controller {

    public function create() {
        if ($this->form_validation->run('menu')) {
            $this->load->model('menu_model');
            $data = $_POST;
            $data['id'] = genid();
            $data['create_time'] =date("Y-m-d h:i:s",time());
            $this->menu_model->insert($data);
            redirect_back();
        } else {
            //$errors = validation_errors();
            redirect('/page/createmenu');
        }
    }

}
