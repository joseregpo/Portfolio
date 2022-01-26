@extends('layouts.app')
@section('content')
<div class="row text-center justify-content-center">
    @foreach($Missions as $UneMission)
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                <div class="card-body">
                <h4 class="card-title">{{$UneMission["type_mission"]}}</h4>
                <p class="card-text">
                    <li>Heure depart: {{$UneMission["heure_depart"]}} </li>
                    <li>Heure arrivée: {{$UneMission["heure_arrive"]}} </li>
                    <li>Date depart: {{$UneMission["date_depart"]}} </li>
                    <li>Date arrivée: {{$UneMission["date_arrive"]}} </li>
                </p>
                </div>
                <div class="card-footer">
                    <a href="{{action('MissionController@show', $UneMission['id_mission'])}}" class="btn btn-primary">Detail de la Mission </a>
                </div>
                <div class="card-footer">
                    <a href="{{action('MissionController@edit', $UneMission['id_mission'])}}" class="btn btn-primary">Modifier la Mission </a>
                </div>
                <div class="card-footer">
                    <form action="{{action('MissionController@destroy', $UneMission['id_mission'])}}" method="post"> @csrf      
                        <input name="_method" type="hidden" value="DELETE"> 
                            <button class="btn btn-danger" type="submit">Supprimer</button> 
                        </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row text-center justify-content-center">
        <a href="{{action('MissionController@create')}}" class="btn btn-primary">Ajouter une mission Mission </a>
    </div>
@endsection