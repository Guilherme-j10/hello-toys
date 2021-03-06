<?php

    namespace app\core;
    
    class Dispath
    {

        protected $view_namespace = 'app/view/';
        protected $model_namespace = 'app/model/';

        public function view(String $view, String $title, Array $dados = []): void
        {
            require_once $this->view_namespace.$view.'.php';
        }

        public function model(String $model): Object
        {
            $explode = explode('/', $this->model_namespace);
            $use = implode('\\', $explode);

            require_once $this->model_namespace.$model.'.php';

            $class = $use.$model;
            return new $class;
        }   

    }