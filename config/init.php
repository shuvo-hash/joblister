<?php
//start session
session_start();

// Config file
require_once 'config.php';

//include helpers
require_once 'helpers/system_helper.php';

// Autoloader

function __autoload($class_name)
{
    require_once 'lib/' . $class_name . '.php';
}
