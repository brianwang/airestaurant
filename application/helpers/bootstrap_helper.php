<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bootstrap_helper
 *
 * @author Administrator
 */
if (!function_exists('b_nav')) {

    function b_nav($menu = array()) {

        $output = '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">';
        $output .= '<ul class="nav navbar-nav">';
        foreach ($menu as $item) {


            $output.='<li';
            if (isset($item['class'])) {
                $output .= 'class = "' . $item['class'];
                if (!empty($item['submenu'])) {
                    $output .= 'dropdown';
                }
                $output .='"';
            }
            $output .='>';
            $output .= '<a href = "' . $item['url'] . '"';
            if (!empty($item['submenu'])) {
                $output .='class = "dropdown-toggle" data-toggle = "dropdown"';
            }

            $output.='>' . $item['title'];
            if (!empty($item['submenu'])) {
                $output.='<span class = "caret"></span>';
            }
            $output.= '</a>';
            if (!empty($item['submenu'])) {
                $output.= '<ul class = "dropdown-menu" role = "menu">';
                foreach ($item['submenu'] as $sumitem) {
                    $output.= '<li><a href = "' . $sumitem['url'] . '">' . $sumitem['title'] . '</a></li>';
                }
                $output.= '</ul>';
            }

            $output .='</li>';
            $output .='</ul>';
        }
    }

}