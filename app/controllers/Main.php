<?php

namespace app\controllers;
/**
 * Description of Main
 *
 * @author pboyk
 */
class Main extends App {
    
    public $layout = 'main';

    public function indexAction() {
//        $this->layout = false;
//        $this->layout = 'main';
//        $this->view = 'test';
        $this->layout = 'default';
        $name = 'Имя любимое моё';
        $hi = 'Hello';
        $colors = [
            'white' => 'белый',
            'black' => 'чёрный'
        ];
        $title = 'PAGE TITLE';
        $this->set(compact('name', 'hi', 'colors', 'title'));
    }
}
