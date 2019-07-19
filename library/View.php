<?php
/**
 * Created by Mahdi Hamdi.
 * User: M4hdi
 * Date: 7/18/2019
 * Time: 9:57 PM
 */
class View {
   
    private $vars = array(); 
    
    function set($var , $data) {
        $this->vars[$var] = $data;
    }
    
    function render($view) {
        extract($this->vars);
        include APP_DIR.DS.'view'.DS.$view.'.php';
    }
    
}
