<?php
/**
 * Created by WaYi
 * Author: Ying Wang
 * Date: 2019-05-21
 * Time: 11:23
 */

class HomeController extends Controller
{

    public function index($name = '')
    {

        // get a instance of the user model
        $user = $this->model('User');
        $user->name = $name;

        // get a instance of the views
        $this->view('header');
        $this->view('home/index', ['name' => $user->name]);
        $this->view('footer');

    }

}