<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Convenios;
use App\Models\Quemsomos;

use App\Models\Especialidade;
use App\Models\Exame;
use App\Models\Equipe;

use DB;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $banners = Banner::where('deleted_at')->get();
        // dd($banners);
        $description = Banner::first()?->sub_title ;
        $quemsomos = QuemSomos::first();
        $convenios = Convenios::all();
        $especialidades = Especialidade::where('tipo','=','especialidades')->get();
        $exames = Exame::where('tipo','=','exames')->get();
        $equipes = Equipe::where('tipo','=','equipes')->get();
        // $eventosRelacionados = Eventos::where('categoria_id', $evento->categoria_id)->where('slug','<>', $slug)->limit(2)->get()->load('categoria');
        // $eventos = Eventos::all()->load('categoria');
        // $instagram = Instagram::all();

        // return view('index',compact('banner', 'quemSomos','eventos','convenios','instagram','description'));
        return view('index',compact('banners', 'quemsomos','description', 'especialidades', 'exames', 'equipes', 'convenios'));
        // return view('index');

}

    /**
     * @param  string  $slug
     * @return Application|Factory|View
     */
    public function show(string $slug)
    {

        $evento = Eventos::where('slug', $slug)->firstOrFail();
        $description = Banner::first()->sub_title;
        $eventosRelacionados = Eventos::where('categoria_id', $evento->categoria_id)->where('slug','<>', $slug)->limit(2)->get()->load('categoria');
        $quemSomos = QuemSomos::first();

        return view('eventos', compact('evento', 'quemSomos', 'eventosRelacionados','description'));
    }


}
