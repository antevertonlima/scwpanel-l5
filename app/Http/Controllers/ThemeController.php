<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theme;

class ThemeController extends AdminBaseController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$themes = Theme::all();
        return $this->theme->view('index_theme',compact('themes'));
    }
}
