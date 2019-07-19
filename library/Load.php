<?php
/**
 * Created by Mahdi Hamdi.
 * User: M4hdi
 * Date: 7/18/2019
 * Time: 9:57 PM
 */
class Load {

    static function autoload($class) {
            include LIB_DIR . DS . $class . '.php';
    }

    static function model($modelName) {
        if(file_exists($file = APP_DIR.DS.'model'.DS.$modelName.'.php')){
            include $file;
            return new $modelName();
        }
    }
}
