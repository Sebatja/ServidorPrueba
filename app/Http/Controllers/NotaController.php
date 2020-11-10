<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class NotaController extends Controller
{
    public function create(){
        $user = User::all();
        return view('notas.create',compact('user'));
    }
    public function store(Request $request){
        $user = User::all();
        foreach ($user as $valor) {
         $lol = $valor->id;
         $o = $lol;
         $A = "A";
         $pepe = $A.$o;

         $notas = new Nota();
         $notas->Descripcion= $request->Descripcion;
         $notas->user_id= $request->$lol;
         $notas->Nota =  $request->$pepe;
         $notas->save();
        }
     

    }
    public function index(){
        $users = User::all();
        return view('notas.index',compact('users'));
    }
    public function ver(){
        // $notas = Nota::all();
        $notas = DB::table('notas')
        ->select('user_id', DB::raw('SUM(nota) as total_sales'))
        ->groupBy('user_id')
        ->get();
        return view('notas.ver', compact('notas'));
    }
}
