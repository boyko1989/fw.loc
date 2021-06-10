<?php

namespace app\controllers;

/**
 * Description of Page
 *
 * @author pboyk
 */
class PageController extends AppController {
    
    public function viewAction() {
        debug($this->route);
        debug($_GET);
        echo 'Page::test;';
    }
}
