@extends('layouts.app')
@section('content')
<div class="row text-center justify-content-center">
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
            <a href="" class="btn btn-primary">Detail de la Mission </a>
            </div>
        </div>
    </div>
</div>
@endsection