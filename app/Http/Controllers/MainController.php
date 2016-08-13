<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{


    public function index(Request $request)
    {
        $idioma = $request->lang;
        $eng = (isset($idioma)&&$idioma=="en") ? true : false;

        return view('inicio',get_defined_vars());
    }

    public function devocionales()
    {
        return view('home');
    }

}
