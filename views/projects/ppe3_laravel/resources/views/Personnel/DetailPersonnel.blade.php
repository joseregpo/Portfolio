@extends('layouts.app')
@section('content')
<div class="row text-center justify-content-center">
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
            <h4 class="card-title">{{$UnPersonnel["nom"]}}</h4>
            <p class="card-text">
                <li>Heure depart: {{$UnPersonnel["prenom"]}} </li>
                <li>Heure arrivée: {{$UnPersonnel["date_naissance"]}} </li>
                <li>Date depart: {{$UnPersonnel["adresse"]}} </li>
                <li>Date arrivée: {{$UnPersonnel["code_postal"]}} </li>
                <li>{{$UnPersonnel["ville"]}}</li>
                <li>{{$UnPersonnel["date_embauche"]}}</li>
                <li>{{$UnPersonnel["matricule"]}}</li>
                <li>{{$UnPersonnel["fonction"]}}</li>
                <li>{{$UnPersonnel["email"]}}</li>
            </p>
            </div>
            <div class="card-footer">
                <a href="{{route('DetailPersonnel', $UnPersonnel['id_personnel'])}}" class="btn btn-primary">Detail de la Personne</a>
            </div>
        </div>
    </div>
</div>
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
@endsection