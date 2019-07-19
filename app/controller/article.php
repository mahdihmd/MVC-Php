<?php
/**
 * Created by Mahdi Hamdi.
 * User: M4hdi
 * Date: 7/18/2019
 * Time: 9:57 PM
 */
class ArticleController extends Controller{


    private function functions()
    {
        $obj = new functions();
        return $obj;
    }

    function index(){
        echo 'ArticleController -> index action';
    }

    function show($id=0){

        if(is_null($id) || $id==""){
            header("location:".$this->functions()->URL());
            echo "<script>window.location.href = '".$this->functions()->URL()."';</script>";
            exit;
        }

        $article = Load::model("articles");
        $row = $article->get_row("*","id='$id'");
        $this->view->set('data',$row);
        $this->view->render('view');
    }
}