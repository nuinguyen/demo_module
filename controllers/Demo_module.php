<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Demo_module extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('demo_module_model');
    }
    public function index()
    {
        $data['company']=$this->demo_module_model->get();
        $this->load->view('demo_module',$data);
    }


}