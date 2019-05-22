<?php
/**
 * Created by WaYi
 * Author: Ying Wang
 * Date: 2019-05-21
 * Time: 11:23
 */

class HomeController extends Controller
{

    protected $post;

    public function __construct()
    {
        $this->post = $this->model('Post');
    }

    public function index()
    {

        //$posts = Post::select('created_at', 'updated_at', 'title', 'body')->where('id', 1)->get()->toArray();
        $posts = Post::all('created_at', 'updated_at', 'title', 'body')->toArray();

        // get a instance of the views
        $this->view('header');
        $this->view('home/index', ['posts' => $posts]);
        $this->view('footer');

    }

}