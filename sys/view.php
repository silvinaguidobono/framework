<?php

namespace Framework\Sys;

/**
 * Description of view
 *
 * @author linux
 */
class View extends \ArrayObject{
    
    protected $output;
    
    function __construct($dataView=null,$dataTable=null){
        //parent::__construct($dataView, flags: \ArrayObject::ARRAY_AS_PROPS);
        parent::__construct($dataView, \ArrayObject::ARRAY_AS_PROPS);
        // puedo acceder a las claves (key) del array como propiedades del objeto
        //print_r($this->page);
        
    }
    /*
     * renders template
     * @return void
     */        
    function render($filetemplate){
        // initialize output buffer
        // buffer: memoria para traspasar datos
        ob_start(); // inicia un buffer para la salida en pantalla
        try{
            include APP.'tpl'.DS.$filetemplate;
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        //clear and return output buffer
        return ob_get_clean();
    }
    
    function show(){
        echo $this->output;
    }
}
