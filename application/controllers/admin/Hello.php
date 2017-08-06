<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

    public function index() {
        $data['title'] = '我是来此C的标题';
        $this->load->view('head', $data);
        $this->load->view('hello', $data);
        $this->load->view('foot', $data);
    }

}
