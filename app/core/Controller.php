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
        $modelClassName = $model . 'Model';
        require_once MODELS_ROOT . $modelClassName . '.php';
        return new $modelClassName();
    }

    public function view($view, $datas = [])
    {
        require_once VIEWS_ROOT . $view . '.php';
    }

}