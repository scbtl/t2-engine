<?php

namespace app\controller;

use app\Response;

class IndexController
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        return view('index');
    }
}