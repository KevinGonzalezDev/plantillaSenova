<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index(){
      $sql = DB::SELECT("SELECT * "
              . "FROM micrositio");
        $datos = ['info'=>$sql];
        return view('lobby')->with('datos',$datos);
    }

    public function micrositio($id){
      $sql = DB::SELECT("SELECT * "
              . "FROM tematica "
              . "WHERE micrositio = ". $id);
      $sql1 = DB::SELECT("SELECT * "
              . "FROM micrositio "
              . "WHERE id = ". $id);

        $datos = ['info'=>$sql,'micrositio'=>$sql1];
        return view('micrositio')->with('datos',$datos);
    }

    public function micrositioVideo($id){
      $sql = DB::SELECT("SELECT * "
              . "FROM tematica "
              . "WHERE id = ". $id);
      $sql1 = DB::SELECT("SELECT * "
              . "FROM video "
              . "WHERE tematica = ". $id);
      if (count($sql1) == 1 && !$sql1[0]->embebido) {
        return Redirect::to($sql1[0]->url);
      }

        $datos = ['infoTematica'=>$sql,'videos'=>$sql1];
        return view('content')->with('datos',$datos);
    }

    public function content(){
        return view('content');
    }
}
