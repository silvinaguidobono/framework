<?php

namespace Framework\App\Controllers;
/**
 * Description of home
 *
 * @author linux
 */

use Framework\Sys\Controller;
//use Framework\Sys\View;
use Framework\App\Views\vHome;
use Framework\App\Models\mHome;

class Home extends Controller {
    function __construct($params) {
        parent::__construct($params);
        //print_r($this);  // ahora se ha construido el padre
        //$this->view=new View($this->dataView);
        $this->addData([
            'page'=>'Home'
        ]);
        $this->model=new mHome();
        $this->view=new vHome($this->dataView, $this->dataTable);
        //$this->view->__construct($this->dataView);
        $this->view->show();
        //print_r($this->dataView);
        //echo "<br>";
        
        echo 'controlador home<br>';
    }
    
    function prueba(){
        echo "acción prueba <br>";
    }
    
    function home(){
        //print_r($this);
        echo "acción home <br>";
    }
    
    function error(){
        echo "Hubo un error en el controlador Home";
    }
}
