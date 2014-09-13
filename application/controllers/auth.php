<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Auth
 *
 * @author Administrator
 */
class auth extends MY_Controller {

    //put your code here
    function register() {
        $data = array();
        if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmpassword'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmpass = $_POST['confirmpassword'];
            if ($password == $confirmpass) {
                $userdata = array('email' => $email, 'password' => md5($password), 'username' => $email);
                $this->db->insert('users', $userdata);
                $data['message'] = '注册成功';
                $this->smarty->view('message.tpl', $data);
            } else {
                $data['error'] = "参数错误";
                $this->smarty->view('register.tpl', $data);
            }
        } else {
            $data['error'] = "参数错误";
            $this->smarty->view('register.tpl', $data);
        }
    }

    function login() {
        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['phrase'])) {
            $sphrase = $_SESSION["phrase"];
            $phrase = $_POST['phrase'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($sphrase == $phrase) {
                $this->load->model('user_model');
                $result = $this->user_model->login($username, $password);
                if (!empty($result)) {
                    $_SESSION['user'] = $result[0];
                    $data['message'] = '登陆成功';
                    $this->smarty->view('message.tpl', $data);
                } else {
                    $data['error'] = "用户名密码错误";
                    $this->smarty->view('login.tpl', $data);
                }
            } else {
                $data['error'] = "验证码错误";
                $this->smarty->view('login.tpl', $data);
            }
        } else {
            $data['error'] = "参数错误";
            $this->smarty->view('login.tpl', $data);
        }
    }

    function logout() {
        unset($_SESSION['user']);
        //var_dump($_SERVER);
        redirect($_SERVER['HTTP_REFERER']);
    }

    function hexrgb($hexstr) {
        $int = hexdec($hexstr);
        return array("red" => 0xFF & ($int >> 0x10),
            "green" => 0xFF & ($int >> 0x8),
            "blue" => 0xFF & $int);
    }

    function phrase() {
        //header('content-type', "img/png");
        $image_width = 120;
        $image_height = 40;
        $characters_on_image = 6;

        $font = BASEPATH . '../assets/monofont.ttf';
        /* set font path */
        $possible_letters = '23456789bcdfghjkmnpqrstvwxyz';
        $random_dots = 0;
        $random_lines = 20;
        $captcha_text_color = "0x142864";
        $captcha_noice_color = "0x142864";
        $code = '';
        $i = 0;
        while ($i < $characters_on_image) {
            $code .= substr($possible_letters, mt_rand(0, strlen($possible_letters) - 1), 1);
            $i++;
        }
        $_SESSION["phrase"] = $code;
        $font_size = $image_height * 0.75;
        $image = @imagecreate($image_width, $image_height);
        $this->output->set_content_type('jpeg'); // You could also use ".jpeg" which will have the full stop removed before looking in config/mimes.php
        $background_color = imagecolorallocate($image, 255, 255, 255);

        $arr_text_color = $this->hexrgb($captcha_text_color);
        /* changes of hexrgb to $this->hexrgb */
        $text_color = imagecolorallocate($image, $arr_text_color['red'], $arr_text_color['green'], $arr_text_color['blue']);

        $arr_noice_color = $this->hexrgb($captcha_noice_color);
        /* changes of hexrgb to $this->hexrgb */
        $image_noise_color = imagecolorallocate($image, $arr_noice_color['red'], $arr_noice_color['green'], $arr_noice_color['blue']);

        /* generating the dots randomly in background */
        for ($i = 0; $i < $random_dots; $i++) {
            imagefilledellipse($image, mt_rand(0, $image_width), mt_rand(0, $image_height), 2, 3, $image_noise_color);
        }

        /* generating lines randomly in background of image */
        for ($i = 0; $i < $random_lines; $i++) {
            imageline($image, mt_rand(0, $image_width), mt_rand(0, $image_height), mt_rand(0, $image_width), mt_rand(0, $image_height), $image_noise_color);
        }

        /* create a text box and add 6 letters code in it */
        $textbox = imagettfbbox($font_size, 0, $font, $code);
        $x = ($image_width - $textbox[4]) / 2;
        $y = ($image_height - $textbox[5]) / 2;
        imagettftext($image, $font_size, 0, $x, $y, $text_color, $font, $code);
        /* Show captcha image in the page html page */
        imagejpeg($image); //showing the image
        imagedestroy($image); //destroying the image instance
    }

}
