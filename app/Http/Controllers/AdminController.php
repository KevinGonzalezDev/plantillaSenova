<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $datos = ['info'=>$sql];
        return view('micrositio')->with('datos',$datos);
    }

    public function micrositioVideo($id){
      $sql = DB::SELECT("SELECT * "
              . "FROM tematica "
              . "WHERE id = ". $id);
      $sql1 = DB::SELECT("SELECT * "
              . "FROM video "
              . "WHERE tematica = ". $id);

        $datos = ['infoTematica'=>$sql,'videos'=>$sql1];
        return view('content')->with('datos',$datos);
    }

    public function content(){
        return view('content');
    }
}
