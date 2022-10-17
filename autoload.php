<?php
spl_autoload_register(function($class_name) {
if (!defined('APP_DIR')){
define ("ROOT_DIR", 'D:\Programming\Programs\xampp\htdocs\Assignment1pain' ) ;
define ("APP_DIR", ROOT_DIR. "\app");
define ("FRAMEWORK DIR", ROOT_DIR .' \framework ' ) ;
define ('TPL_DIR', APP_DIR .'\View');
define ('DATA_DIR', ROOT_DIR. '\data');
}

if(file_exists('app/Controller/' . $class_name . '.php')){
    require 'app/Controller/' . $class_name . '.php';
}
else if(file_exists('app/Model/' . $class_name . '.php')){
    require 'app/Model/' . $class_name . '.php';
}
else if(file_exists('app/View/' . $class_name . '.php')){
    require 'app/View/' . $class_name . '.php';
}
else if(file_exists('framework/' . $class_name . '.php')){
    require 'framework/' . $class_name . '.php';
}
else{
    trigger_error('Cannot find classes+/interface/abstract class: ' . $class_name, E_USER_WARNING);
    debug_print_backtrace();
}
});

?>