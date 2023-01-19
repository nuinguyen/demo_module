<?php

defined("BASEPATH") or exit("No direct script access allowed");
/*
Module Name: Demo Module
Description: Demo
Version: 1.0.0
Requires at least: 2.3.*
Author: SlimCRM
Author URI: https://xxx.com/slimcrm
*/
define('DEMO_MODULE_MODULE_NAME', 'demo_module');


/**
 * Register activation module hook
 */
register_activation_hook(DEMO_MODULE_MODULE_NAME, 'demo_module_module_activation_hook');

function demo_module_module_activation_hook()
{
    require_once(__DIR__ . '/install.php');
}
