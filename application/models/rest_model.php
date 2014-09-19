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
class rest_model extends MY_Model {

    protected $table = 'restaurant';

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

    public function uploadimgs($restid, $imgs = array()) {
        $tmp = array();
        foreach ($imgs as $img) {
            array_push($tmp, array('rid' => $restid, 'imgurl' => $img, 'creator' => $_SESSION['user']['id'], 'createtime' => time()));
        }
        $this->db->insert_batch('rest_imgs', $tmp);
    }

    function getByUid($uid = '') {
        $result = array();
        if ($uid != '') {
            $query = $this->db->get_where('restaurant', array('owner_id' => $uid));
            $result = $query->result_array();
        }
        return $result;
    }

}

?>
