<?php
/**
 * Created by Mahdi Hamdi.
 * User: M4hdi
 * Date: 7/18/2019
 * Time: 9:57 PM
 */
class Config {

    static function get($key) {
        $config = array("driver" => "mysql",
            "dbName" => "mvc",
            "dbUsername" => "root",
            "dbPassword" => "");
        return $config[$key];
    }

}
