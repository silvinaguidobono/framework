<?php

namespace Framework\App\Views;

use Framework\Sys\View;
/**
 * Description of vhome
 *
 * @author linux
 */
class vHome extends View {
    
    public function __construct($dataView = null,$dataTable=null) {
        parent::__construct($dataView,$dataTable);
        //$this->output= $this->render(filetemplate: 'thome.php');
        $this->output= $this->render('thome.php');
    }
}
