<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends AdminBaseController
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->theme->view('index');
    }
}
