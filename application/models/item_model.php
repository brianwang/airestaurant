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
class item_model extends MY_Model {

    protected $table = 'items';

    function getByUid($uid = '') {
        $result = array();
        if ($uid != '') {
            $query = $this->db->get_where('menus', array('creator_id' => $uid));
            $result = $query->result_array();
        }
        return $result;
    }

}

?>
