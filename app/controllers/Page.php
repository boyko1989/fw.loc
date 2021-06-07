<?php

namespace app\controllers;

/**
 * Description of Page
 *
 * @author pboyk
 */
class Page extends App {
    
    public function viewAction() {
        debug($this->route);
        debug($_GET);
        echo 'Page::test;';
    }
}
