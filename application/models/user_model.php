<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author Administrator
 */
class user_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    //put your code here
    //注册
    public function register($username, $password, $cpassword) {
        return true;
    }

    //登陆
    public function login($username, $password) {
        $query = $this->db->where(array('email' => $username, 'password' => md5($password)))->get('users');
        $result = $query->result_array();
        if (!empty($result)) {
            return $result;
        } else {
            return false;
        }
    }

    //获得所有订单
    public function getOrders() {

        return array();
    }

    //获得某订单详情
    public function gerOrder($params) {

        return array();
    }

    //登出
    public function logout() {

        return true;
    }

}

?>
