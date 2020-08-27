<?php

    namespace app\controller;
    use app\core\Dispath;

    class HomeController extends Dispath
    {

        public function index(Array $req, Array $res): void
        {
            $this->view('home', 'Hiroki Toys');
        } 

    }