<?php

namespace App\Http\Controllers;

use App\Missions;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    //
        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $UneMission = \App\Missions::find($id);
        return view('Missions/MissionDetail',compact('UneMission','id'));
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $UneMission = \App\Missions::find($id);
        return view('Missions/MissionEdit',compact('UneMission','id'));
    }
        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $UneMission = \App\Missions::find($id) ; 
        $UneMission->type_mission = $request->input('type_mission'); 
        $UneMission->heure_depart = $request->input('heure_depart'); 
        $UneMission->heure_arrive = $request->input('heure_arrive'); 
        $UneMission->date_depart = $request->input('date_depart');
        $UneMission->date_arrive = $request->input('date_arrive');  
        $UneMission->save(); 
        return redirect('home');
    }
        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $UneMission = \App\Missions::find($id); 
        $UneMission->delete(); 
        return redirect('home');
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return(view('Missions.MissionCreate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $UneMission = new \App\Missions();
        $UneMission->id_personnel = $request->input('id_personnel'); 
        $UneMission->type_mission = $request->input('type_mission'); 
        $UneMission->heure_depart = $request->input('heure_depart'); 
        $UneMission->heure_arrive = $request->input('heure_arrive'); 
        $UneMission->date_depart = $request->input('date_depart');
        $UneMission->date_arrive = $request->input('date_arrive');  
        $UneMission->save(); 
        return redirect('home');
    }
}
