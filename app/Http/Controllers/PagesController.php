<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class PagesController extends Controller
{
	public function index()
	{
		 $noticas = Noticia::orderBy('titulo', 'desc')->paginate(5);
        return view('noticias.index',[
            'noticias' => $noticas
        ]);
	}

    public function contacto()
    {
    	return view('pages.contacto');
    }

    public function noticias()
    {
    	return view('pages.noticias');
    }

    public function acercade()
    {
    	return view('pages.acercade');
    }

}
