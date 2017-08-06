<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 默认前台控制器
 */
class Home extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('index/index.html');
    }

    /**
     *  分类显示
     */
    public function category()
    {
        $this->load->view('index/category.html');
    }
}
