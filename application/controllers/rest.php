<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of rest
 *
 * @author Administrator
 */
class Rest extends MY_Controller {
    //put your code here
    public function create() {
        if ($this->form_validation->run('rest')) {
            $this->load->model('rest_model');
            $_POST['id'] = genid();
            $data = $_POST;
            if (isset($_POST['week'])) {
                $data['week'] = json_encode($_POST['week']);
            }
            //var_dump($data);
            $this->rest_model->insert($data);
            $data['message'] = "创建成功";
            $this->smarty->view('message.tpl', $data);
        } else {
            //$errors = validation_errors();
            $this->smarty->view('rest/create.tpl');
        }
    }

    public function get($restid = '') {
        $this->load->model('rest_model');
        if ($restid == '') {
            show_404();
        }
        $rest = $this->rest_model->get($restid);
        $this->smarty->view('rest/profile.tpl', $rest);
    }

    public function uploadimg($restid = '') {
        $this->load->model('rest_model');
        if (is_get()) {
            if ($restid == '')
                show_404();
            $data = array();
            $data['restid'] = $restid;
            $this->smarty->view('rest/uploadimg.tpl', $data);
        }else if (is_post()) {
            $uploads_dir = APPPATH . 'uploads' . DIRECTORY_SEPARATOR;
            $files = array();
            foreach ($_FILES['imgs']['tmp_name'] as $key=>$file) {
                $filename = genid();
                $fileext = '';
                switch ($_FILES['imgs']['type'][$key]) {
                    case "image/jpeg":
                        $fileext = 'jpg';
                        break;
                    case "image/bmp":
                        $fileext = 'bmp';
                        break;
                    case "image/gif":
                        $fileext = 'gif';
                        break;
                    case "image/png":
                        $fileext = 'png';
                        break;
                    default:
                        break;
                }
                if ($fileext == '')
                    continue;
                move_uploaded_file($file, $uploads_dir . $filename . '.' . $fileext);
                array_push($files, $filename);
            }
            //$restid = $restid;
            $this->rest_model->uploadimgs($restid, $files);
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function edit() {
        
    }

    public function delete() {
        
    }

    public function _remap() {
        $method = $this->router->method;
        $params = array_slice($this->uri->segments, 2);
        //var_dump($this->router);
        if ($method == 'page') {
            $pagename = 'rest/' . $params[0] . '.tpl';
            $data = array();
            $data['data'] = array_slice($params, 1);
            $this->smarty->view($pagename, $data);
        } else {
            call_user_func_array(array($this, $method), $params);
        }
    }

}
