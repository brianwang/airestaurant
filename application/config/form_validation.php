<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$config = array(
    'rest' => array(
        array(
            'field' => 'name',
            'label' => '饭店名称',
            'rules' => 'required'
        ),
        array(
            'field' => 'startprice',
            'label' => '起定价格',
            'rules' => 'required'
        ),
        array(
            'field' => 'notice',
            'label' => '公告',
            'rules' => 'required'
        ),
        array(
            'field' => 'address',
            'label' => '地址',
            'rules' => 'required'
        ),
        array(
            'field' => 'opentime',
            'label' => '开业时间',
            'rules' => 'required'
        ),
        array(
            'field' => 'week',
            'label' => '每周营业时间',
            'rules' => 'required'
        ),
        array(
            'field' => 'description',
            'label' => '描述',
            'rules' => 'required'
        ),
    ),
    'menu' => array(
        array(
            'field' => 'name',
            'label' => '菜单名称',
            'rules' => 'required'
        ),
        array(
            'field' => 'rest_id',
            'label' => '自己的餐馆',
            'rules' => 'required'
        ),
    ),
    //菜单上的内容
    'item' => array(
        array(
            'field' => 'name',
            'label' => '菜品名称',
            'rules' => 'required'
        ),
        array(
            'field' => 'rest_id',
            'label' => '自己的餐馆',
            'rules' => 'required'
        ),
        array(
            'field' => 'menu_id',
            'label' => '菜单名称',
            'rules' => 'required'
        ),
        array(
            'field' => 'value',
            'label' => '价格',
            'rules' => 'required'
        )
    )
);
