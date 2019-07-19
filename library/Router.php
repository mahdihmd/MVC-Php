<?php
/**
 * Created by Mahdi Hamdi.
 * User: M4hdi
 * Date: 7/18/2019
 * Time: 9:57 PM
 */
class Router {
    static function route($url){

        $urlparts = @explode('/',$url);

        $controller = ($urlparts[0] == '' ) ? 'index' : $urlparts[0];
        array_shift($urlparts);
        $action = ($urlparts[0] == '' ) ? 'index' : $urlparts[0];
        array_shift($urlparts);
        $param = $urlparts;

        if(file_exists($cFile = ROOT.'/app/controller/'.$controller.'.php')){
            include  $cFile;
        }else{

            //// if not found Controller Then use Index Actions ////
            include  ROOT.'/app/controller/index.php';
            if($action!='index'){
                $param = array($action);
            }
            $action = $controller;
            $controller='index';
        }

        $controller = ucwords($controller).'Controller';
        $contollerObj = new $controller();


        if(method_exists($contollerObj, $action)){
            call_user_func_array(array($contollerObj,$action), $param);
        }else{
           include APP_DIR.DS.'view'.DS.'404'.'.php';
        }

    }
}
