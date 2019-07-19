<?php
/**
 * Created by Mahdi Hamdi.
 * User: M4hdi
 * Date: 7/18/2019
 * Time: 9:57 PM
 */

class functions{

    function URL(){
        define('PROTOCOL',(!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://',true);
        define('DOMAIN',$_SERVER['HTTP_HOST']);
        define('ROOT_URL', preg_replace("/\/$/",'',PROTOCOL.DOMAIN.str_replace(array('\\',"index.php","index.html"), '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))),1).'/',true);
        return ROOT_URL;
    }
}///class
?>

