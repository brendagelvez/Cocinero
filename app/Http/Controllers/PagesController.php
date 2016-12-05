<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function inicio(){
    	return view('pages.index');
    }

    public function sobre(){
    	return view('pages.sobre');
    }
    
    public function carta(){
        return view('pages.carta');
    }

    public function contact(){
    	return view('pages.contact');
    }

    public function exito(){
    	return view('pages.exito');
    }

    public function ingredientes(){
    	return view('pages.ingredientes');
    	
    }

    public function pasos(){
        return view('pages.pasos');
    }

    public function recetas()
    {
      return view('pages.recetas');
    }

    public function registrar1(){
    	return view('pages.registrar1');

    }
	
	public function registrar2(){
    	return view('pages.registrar2');

    }
}
	
	?>