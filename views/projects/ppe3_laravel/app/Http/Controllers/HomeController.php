<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visiteur;
use App\Praticien;
use App\Responsable;
use App\Missions;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id=auth()->id();
        if(Visiteur::find($id)){
            $Visiteur = auth()->user();
            $Missions = Missions::where('id_personnel', $id)->get();
            //$Missions = $Visiteur->Missions; 
            return view('Visiteur',compact('Visiteur','id'))->with('Missions', $Missions);
        }elseif(Praticien::find($id)){
            return view('Praticien');
        }elseif(Responsable::find($id)){
            return view('Responsable');
        }else{
            return view('Personnel');
        }
    }
}
