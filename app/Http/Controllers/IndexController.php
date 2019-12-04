<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class indexController extends Controller
{

    /* este no public function __invoke($idPelicula){
        return view('pelicula')-> with('idPelicula',$idPelicula);
    } */
    public function index()
    {
        return view('portada');
    }
    public function peliculas()
    {
        $peliculas = DB::select('SELECT id, nombre FROM peliculas');
        dd($peliculas);/* depurar */
        return view('peliculas')->with('peliculas', $peliculas);
    }

    //querybuilder
   /*  public function peliculas()
    {
        $peliculas = DB::table('peliculas')->select('id','nombre')->get();
        return view('peliculas')->with('peliculas', $peliculas);
    } */
}
