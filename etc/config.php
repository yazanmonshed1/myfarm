<?php

define("ROOTPATH", dirname(__FILE__) . "/../");
define("LIBPATH", ROOTPATH . "lib/");
function __autoload($class_name)
{
   $path = str_replace('_', DIRECTORY_SEPARATOR, $class_name);
   require_once LIBPATH . $path . '.php';
}
session_start();

   error_reporting(0);
    
    $objUser= new Users();

 $isLogin=$objUser->checkIfUserLogin();
 