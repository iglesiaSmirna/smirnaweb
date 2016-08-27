<?php 
namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
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

        $pagTitle = 'Home';
        $tituloPag = 'Inicio';

        $isMain = true;
        $isWeb  = true;

        return view('main',get_defined_vars());
    }

    public function redirectUrl (Request $request)
    {
        $seccion = $request->seccion;
        $yy      = $request->yy;
        $vista  = $request->vista;
        // IDIOMA
        $idioma = $request->lang;
        $eng = (isset($idioma)&&$idioma=="en") ? true : false;
        // TITULO DE PAGINA
        $pagTitle  = ucfirst(strtolower($this->getTraduccionSeccion($seccion)));
        $tituloPag = ucfirst(strtolower($seccion));
        // VALIDACIONES DE ESTILO E IMPRESION
        $isCont = true;
        $isWeb  = true;

        if ($seccion != '' && $yy != '' && $vista != '')
        {
            $id_seccion = $this->getIdSeccion($seccion);

            $query = $this->getSeccion($id_seccion);

            if(isset($query)&&count($query)>0)
            {
                $articulo = (object)($this->buscaArticulo($query, $vista, $yy));

                if ($articulo->estado)
                {
                    return view($seccion.'.'.$vista,get_defined_vars());
                }
                else
                {
                    return redirect(url('/')); // NO EXISTE EL ARTICULO
                }
            }
            else
            {
                return redirect(url('/')); // NO HAY SECCIONES PARA ESA URL
            }
        }
        else
        {
            return redirect(url('/')); // LA SECCION NO ESTA DISPONIBLE...
        }
    }

    public function download(Request $request)
    {
        $seccion = $request->seccion;
        $yy      = $request->yy;
        $vista  = $request->vista;
        // IDIOMA
        $idioma = $request->lang;
        $eng = (isset($idioma)&&$idioma=="en") ? true : false;
        // TITULO DE PAGINA
        $pagTitle  = ucfirst(strtolower($this->getTraduccionSeccion($seccion)));
        $tituloPag = ucfirst(strtolower($seccion));
        // VALIDACIONES DE ESTILO E IMPRESION
        $isCont = true;
        $isWeb  = false;

        if ($seccion != '' && $yy != '' && $vista != '')
        {
            $id_seccion = $this->getIdSeccion($seccion);

            $query = $this->getSeccion($id_seccion);

            if(isset($query)&&count($query)>0)
            {
                $articulo = (object)($this->buscaArticulo($query, $vista, $yy));

                if ($articulo->estado)
                {

                    $view =  \View::make($seccion.'.'.$vista, get_defined_vars())->render();
                    $pdf = \App::make('dompdf.wrapper');
                    $pdf->loadHTML($view);

                    //$pdf = \PDF::loadView($seccion.'.'.$vista, get_defined_vars());

                    return $pdf->stream($vista.'.pdf');

                    //return $pdf->download($vista.'.pdf');

                    //return view($seccion.'.'.$vista,get_defined_vars());
                }
                else
                {
                    return redirect(url('/')); // NO EXISTE EL ARTICULO
                }
            }
            else
            {
                return redirect(url('/')); // NO HAY SECCIONES PARA ESA URL
            }
        }
        else
        {
            return redirect(url('/')); // LA SECCION NO ESTA DISPONIBLE...
        }
    }

    public function pruebadb ()
    {
        $query = DB::table('cat_secciones')->get();
        dd($query);
        return 'wow';
    }

    public function peticion (Request $request)
    {
        $nombre = $request->nombre;
        $email = $request->email;
        $telefono = $request->telefono;
        $peticion = $request->peticion;
        $ip       = '1.2.3.4';
        $telefono = isset($telefono) ? $telefono : '';

        $query = DB::table('tb_peticiones')->insert([
            ['nombre' => $nombre, 'correo' => $email, 'telefono'=>$telefono, 'peticion'=>$peticion, 'ip'=>$ip]
        ]);

        dd($query);

        return 'ok';
    }

    public function getIdSeccion ($seccion)
    {
        $sec = strtolower($seccion);

        switch ($sec)
        {
            case 'estudio':
                $id = 1;
                break;
            case 'capsula':
                $id = 2;
                break;
            case 'devocional':
                $id = 3;
                break;
            case 'liderazgo':
                $id = 4;
                break;
            default:
                $id = -1;
        }

        return $id;
    }

    public function getTraduccionSeccion ($seccion)
    {
        $sec = strtolower($seccion);

        switch ($sec)
        {
            case 'estudio':
                $id = 'study';
                break;
            case 'capsula':
                $id = 'capsule';
                break;
            case 'devocional':
                $id = 'devotional';
                break;
            case 'liderazgo':
                $id = 'leadership';
                break;
            default:
                $id = 'other';
        }

        return $id;
    }

    public function buscaArticulo ($data, $vista, $yy)
    {
        $response = ['estado'=>false];

        foreach ($data as $i)
        {
            if ($i->vista == $vista && $i->yy = $yy && $i->estado == 1)
            {
                $response = [
                    'estado'=>true,
                    'id'=>$i->id,
                    'titulo'=>$i->titulo,
                    'tittle'=>$i->tittle,
                    'visitas'=>$i->visitas,
                    'descargas'=>$i->descargas,
                ];
                break;
            }
        }

        return $response;
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

    /*** QUERYS ***/

    public function getSeccion($id_seccion)
    {
        $query = DB::table('tb_articulo')
            ->select('id','vista','titulo','tittle',DB::raw('extract(YEAR from fecha_publicacion) yy'),'visitas','descargas','estado')
            ->where('id_seccion',$id_seccion)
            ->orderby('fecha_publicacion','desc')
            ->get();

        return $query;
    }
}
