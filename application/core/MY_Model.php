<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ModelExecption extends Exception {
    
}

class MY_Model extends CI_Model {

    protected $table;

    public function __construct() {
        parent::__construct();
        if ($this->table == '') {
            $this->table = __CLASS__;
        }
    }

    public function insert($data = NULL) {
        if ($data != NULL) {
            $this->db->insert($this->table, $data);
        } else {
            throw new ModelException('data is null');
        }
    }

    public function edit($data, $key) {
        if ($data != NULL && $key != NULL && is_numeric($key)) {
            $this->db->where(array('id' => $key))->update($this->table, $data);
        } else {
            throw new ModelException('key or data is null or key is not a int');
        }
    }

    public function delete($id = NULL) {
        if ($id != NULL) {
            $this->db->delete($this->table, array('id' => $key));
        } else {
            throw new ModelException('id is NULL');
        }
    }

    public function getlist($filters = array()) {
        if (isset($filters['pageidx'])) {
            $idx = $filters['pageidx'];
        } else {
            $idx = 0;
        }
        if (isset($filters['pagesize'])) {
            $pagesize = $filters['pagesize'];
        } else {
            $pagesize = $this->config->pagesize;
        }
        $query = $this->db->limit($pagesize, $idx)->get($this->table);
        return $query->result_array();
    }

    //获得某个
    public function getItem($id) {
        $query = $this->db->where($this->table, array('id' => $id))->get();

        return $query->result_array();
    }

}
