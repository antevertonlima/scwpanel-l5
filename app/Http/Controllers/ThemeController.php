<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theme;
use App\Http\Requests\UploadRequest;
use Zip;

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

    public function upload()
    {
        return $this->theme->view('new_theme');
    }

    public function move(UploadRequest $request)
    {
    	$file = $request->photos; //note que 'photo' remete ao nome do campo no formulário
    	//$file->store('photos');
    	$name_zip_file     = $file->getClientOriginalName();
    	$name_folder_theme = substr($file->getClientOriginalName(), 0, -4);
    	//dd($name_folder_theme);

    	$path = public_path('themes');
    	if(!file_exists($path)){
    		mkdir($path,777);
    	}

    	$zip = Zip::open($file);

    	if(!$zip->extract($path, $name_zip_file)){
    		return back()->with('warning','Arquivo não pode ser descompactado.');
    	}

    	return back()->with('success','Arquivo descompactado com sucesso.');
    }
}
