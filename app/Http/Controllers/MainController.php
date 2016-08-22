<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{


    public function index(Request $request)
    {
        $idioma = $request->lang;
        $eng = (isset($idioma)&&$idioma=="en") ? true : false;

        $info=$this->detect();
        $navegador =$info['browser'];

        $pagTitle = 'Iglesia Smirna';
        $tituloPag = 'Iglesia Smirna';

        $isMain = true;

        return view('main',get_defined_vars());
    }

    public function redirectUrl (Request $request)
    {
        $seccion = $request->seccion;
        $yy      = $request->yy;
        $titulo  = $request->titulo;

        if ($seccion != '' && $yy != '' && $titulo != '')
        {
            $idioma = $request->lang;
            $eng = (isset($idioma)&&$idioma=="en") ? true : false;
            dd($seccion, $yy, $titulo, $eng);
        }
        else
        {
            // LA SECCION NO ESTA DISPONIBLE...
            return redirect(url('/'));
        }
    }

    public function download(Request $request)
    {
        $idioma = $request->lang;
        $eng = (isset($idioma)&&$idioma=="en") ? true : false;

        $pagTitle = 'English';
        $tituloPag = 'Spanish';
        $isCont = true;
        $isWeb  = true;

        $titulo = 'Título en español...';
        $tittle = 'Título en ingles...';

        return view('layout.plantilla',get_defined_vars());
    }

    public function pruebadb ()
    {
        $query = DB::table('cat_secciones')->get();
        dd($query);
        return 'wow';
    }

    public function detect()
    {
        $browser=array("IE","OPERA","MOZILLA","NETSCAPE","FIREFOX","SAFARI","CHROME","EDGE");
        $os=array("WIN","MAC","LINUX");

        # definimos unos valores por defecto para el navegador y el sistema operativo
        $info['browser'] = "OTHER";
        $info['os'] = "OTHER";

        # buscamos el navegador con su sistema operativo
        foreach($browser as $parent)
        {
            $s = strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $parent);
            $f = $s + strlen($parent);
            $version = substr($_SERVER['HTTP_USER_AGENT'], $f, 15);
            $version = preg_replace('/[^0-9,.]/','',$version);
            if ($s)
            {
                $info['browser'] = $parent;
                $info['version'] = $version;
            }
        }

        # obtenemos el sistema operativo
        foreach($os as $val)
        {
            if (strpos(strtoupper($_SERVER['HTTP_USER_AGENT']),$val)!==false)
                $info['os'] = $val;
        }

        # devolvemos el array de valores
        return $info;
    }

}
