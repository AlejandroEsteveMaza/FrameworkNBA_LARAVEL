<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class peliculasController extends Controller
{

    public function __invoke($idPelicula){
        $pelicula = DB::select('SELECT * FROM peliculas WHERE id = $idPelicula');
        $directores = DB::select("SELECT nombre FROM directores WHERE id IN (SELECT id_director FROM dirige WHERE id_pelicula = $idPelicula)");
        $actores = DB::select("SELECT nombre FROM actores WHERE id IN (SELECT id_actor FROM interpreta WHERE id_pelicula = $idPelicula)"); 
        return view('pelicula')-> with('pelicula',$pelicula[0])->with('directores',$directores)->with('actores',$actores);
    } 
     //querybuilder
    /* public function __invoke($idPelicula){
        $pelicula = DB::table('peliculas')->where('id',$idPelicula)->get();
        $directores = DB::table('directores')->join('dirige','id','=','id_director')->where('id',$idPelicula)->get();
        $directores = DB::table('directores')->join('dirige','id','=','id_director')->where('id_pelicula',$idPelicula)->toSql();
        $actores = DB::table('actores')->join('interpreta','id','=','id_director')->where('id_pelicula',$idPelicula)->get();
        return view('pelicula')-> with('pelicula',$pelicula[0])->with('directores',$directores)->with('actores',$actores);
    }  */
    
}