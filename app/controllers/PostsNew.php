<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PostsNew
 *
 * @author pboyk
 */
class PostsNew {
    public function indexAction() {
        echo 'PostsNew::index;';
    }
    
    public function testAction() {
        echo 'PostsNew::test;';
    }
    
    public function testPageAction() {
        echo 'PostsNew::testPage;';
    }
    
    public function before(){
        echo 'PostsNew::before;';
    }
}
