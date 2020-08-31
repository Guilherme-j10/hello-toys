<?php

    namespace app\controller;
    use app\core\Dispath;

    class ProductController extends Dispath
    {
        public function index(Array $req, Array $res):void
        {
            $this->view('Product', 'Item - '.$req['params']['id'], [
                'id' => $req['params']['id']
            ]);
        }
    }