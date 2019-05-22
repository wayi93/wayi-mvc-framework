<?php
/**
 * Created by WaYi
 * Author: Ying Wang
 * Date: 2019-05-21
 * Time: 11:19
 */

class Controller
{

    public function model($model)
    {
        $modelClassName = $model;
        require_once MODELS_ROOT . $model . '.php';
        return new $modelClassName();
    }

    public function view($view, $datas = [])
    {
        require_once PROJECT_ROOT . 'util/Helper.php';
        require_once VIEWS_ROOT . $view . '.php';
    }

}