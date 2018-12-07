<?php

    error_reporting(E_ALL);
    ini_set('display_errors','On');
    
    use \Framework\Sys\Kernel;
    use \Framework\Sys\Autoload;
    // predefine constants
    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', realpath(__DIR__).DS);
    define('APP', ROOT.'app'.DS);
    
    // config file
    require_once __DIR__.'/sys/autoload.php';
    
    // metodos de autocarga
    $load=new Autoload();
    $load->register();
    //$load->addNamespace(prefix: 'Framework\Sys', base_dir: 'sys');
    $load->addNamespace('Framework\Sys','sys');
    $load->addNamespace('Framework\App','app');
    $load->addNamespace('Framework\App\Controllers','app/controllers');
    $load->addNamespace('Framework\App\Models','app/models');
    $load->addNamespace('Framework\App\Views','app/views');
    
    //  inicio de sesión
    
    //  inicio de front-controller
    Kernel::init();
    
//echo "hola<br>";
//echo $_SERVER['QUERY_STRING'];