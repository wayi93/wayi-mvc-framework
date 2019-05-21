<?php
/**
 * Created by WaYi
 * Author: Ying Wang
 * Date: 2019-05-21
 * Time: 11:17
 */

class App
{

    protected $controller = 'Home';

    protected $method = 'index';

    protected $params = [];

    public function __construct()
    {
        $urlParts = $this->parseUrl();

        $controller = ucfirst($urlParts[0]);
        unset($urlParts[0]);
        $controllerFileName = $controller . 'Controller';

        // check whether the controller class file exists
        if(file_exists(CONTROLLERS_ROOT . $controllerFileName . '.php'))
        {
            $this->controller = $controller;
        }

        // include the class file of the controller
        require_once CONTROLLERS_ROOT . $this->controller . 'Controller.php';

        // new a instance of the controller class
        $controllerClassName = $this->controller . 'Controller';
        $this->controller = new $controllerClassName();

        // check whether the method in url exists
        if(isset($urlParts[1]))
        {
            if(method_exists($this->controller, $urlParts[1]))
            {
                $this->method = $urlParts[1];
                unset($urlParts[1]);
            }
        }

        // the values in $urlParts, which were not removed, are parameters
        $this->params = $urlParts ? array_values($urlParts) : [];

        // call the method in the controller with parameters
        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    public function parseUrl()
    {
        if(isset($_GET['url']))
        {
            return explode('/', filter_var(rtrim(strtolower($_GET['url']), '/'), FILTER_SANITIZE_URL));
        }
    }

}