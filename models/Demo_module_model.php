<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Demo_module_model extends App_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Get data
     */
    public function get()
    {
        return 'modules SlimCRM';
    }

}
