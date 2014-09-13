<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of menu_helper
 *
 * @author Administrator
 */
/**
 *
 * array(
 *  array('title'=>'aaa', url=>'aaa', submenu = array()),
 *  array('title'=>'aaa', url=>'aaa', submenu = array())
 * )
 * 
 * 
 *  */
if (!function_exists('menu_ul')) {

    function menu_url($menu = array()) {
        $output = '';
        foreach ($menu as $key => $value) {
            $output .= '<li>';
        }
    }

}

