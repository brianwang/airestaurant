<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Item extends MY_Controller {

    public function create() {
        if ($this->form_validation->run('item')) {
            $this->load->model('item_model');
            $data = $_POST;
            $data['id'] = genid();
            $data['creator'] =$_SESSION['user']['id'];
            $this->item_model->insert($data);
            redirect_back();
        } else {
            redirect_back();
        }
    }

}
