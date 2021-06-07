<?php

namespace vendor\core\base;

/**
 * Description of Controller
 *
 * @author pboyk
 */
abstract class Controller {    
    
    /**
     *Текущий маршрут и параметры (controller, action, params)
     * @var array
     */
    public $route = [];
    
    /**
     *Текущий шаблон
     * @var string
     */
    public $layout = [];
    
    /**
     *Вид
     * @var string
     */
    public $view;
    
    public function __construct($route) {
        $this -> route = $route;
        $this->view = $route['action'];
    }
    
    public function getView(){
        $vObj = new View($this->route, $thhis->layout, $this->view);
        $vObj->render();
    }
}
