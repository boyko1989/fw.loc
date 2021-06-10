<?php

namespace app\controllers;

use app\models\Main;
/**
 * Description of Main
 *
 * @author pboyk
 */
class MainController extends AppController {
    
    public $layout = 'main';

    public function indexAction() {
        
        $model = new Main;
        
        //$res = $model->query("CREATE TABLE usern SELECT * FROM mysql.user");
        //var_dump($res);
        $posts = $model->findAll();
        debug($posts);
        $title = 'PAGE TITLE';
        $this->set(compact('title'));
    }
}
