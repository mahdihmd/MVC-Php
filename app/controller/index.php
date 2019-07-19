<?php
/**
 * Created by Mahdi Hamdi.
 * User: M4hdi
 * Date: 7/18/2019
 * Time: 9:57 PM
 */
class IndexController extends Controller{

    function Index(){
        $this->view->set("id",200);
        $this->view->set("body","Index View");
        $this->view->render("index");
    }

    public function page1($id=0){
        $this->view->set("id",$id);
        $this->view->render("page1");
    }

}
?>

