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
        return view('inicio');
    }
    public function equipo()
    {
        return view('equipo');
    }
    public function jugadores()
    {
        $jugadores = DB::table('jugadores')->select('nombre')->where('Nombre_equipo', 'Celtics')->toSql();
        return view('jugadores')->with('jugadores', $jugadores);
    }


    /*  public function peliculas()
    {
        $peliculas = DB::select('SELECT id, nombre FROM peliculas');
        dd($peliculas);
        return view('peliculas')->with('peliculas', $peliculas);
    } */

    //querybuilder
    /*  public function peliculas()
    {
        $peliculas = DB::table('peliculas')->select('id','nombre')->get();
        return view('peliculas')->with('peliculas', $peliculas);
    } */
}
