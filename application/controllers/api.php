<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of users
 *
 * @author Administrator
 */
require(APPPATH . 'libraries/REST_Controller.php');

class Api extends REST_Controller {

    function menus_get(){
        $menu = $this->_getbyID($this->get('id'),'menus');
        $this->_showResponse($menu);
    }
    function _getbyID($id,$table)
    {        
        if (is_numeric($id)) {
            $user = $this->db->get_where($table,array('id'=> $id))->result_array();
        }
    }
    
    function _showResponse($result)
    {
        if (isset($result) && empty($result)) {
            $this->response($result, 200); // 200 being the HTTP response code
        } else {
            $this->response(array('error' => 'Not found'), 404);
        }
    }
    function menu_get() {
        $menu = $this->_getbyID($this->get('id'), 'menus');
        _showResponse($menu);      
    }

    function menu_post() {
        
    }

    function menu_delete() {
        
    }

    function menu_put() {
        
    }

    function user_get() {
        if (is_numeric($this->get('id'))) {
            $user = $this->db->get_where('users',array('id'=> $this->get('id')))->result_array();
        }
        if (isset($user) && empty($user)) {
            $this->response($user, 200); // 200 being the HTTP response code
        } else {
            $this->response(array('error' => 'User could not be found'), 404);
        }
    }

    function user_put() {
        echo "PUT";
//        if (!isset($this->post('user')) && !empty($this->post('user'))) {
////            $user = $this->post('user');
////            $this->db->update($user);
//        }
    }

    function user_post() {
        echo "POST";
        
    }

    function user_delete() {
        echo "delete";
    }

    function users_get() {
        $users = $this->db->query("select * from users")->result_array();
        if ($users) {
            $this->response($users, 200); // 200 being the HTTP response code
        } else {
            $this->response(array('error' => 'Couldn\'t find any users!'), 404);
        }
    }

}

?>
