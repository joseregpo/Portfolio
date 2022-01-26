@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Modifier une Mission:</h2><br />
    <form method="post" action="{{action('MissionController@update', $id)}}" enctype="multipart/form-data"> 
    @csrf 
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="form-group col-md-4"> 
                <label for="type_mission">type_mission:</label> 
                <input type="text" class="form-control" name='type_mission' value="{{$UneMission->type_mission}}">
                <label for="heure_depart">heure_depart:</label>  
                <input type="text" class="form-control" name='heure_depart' value="{{$UneMission->heure_depart}}">
                <label for="heure_arrive">heure_arrive:</label>  
                <input type="text" class="form-control" name='heure_arrive' value="{{$UneMission->heure_arrive}}">
                <label for="date_depart">date_depart:</label>  
                <input type="text" class="form-control" name='date_depart' value="{{$UneMission->date_depart}}">
                <label for="date_arrive">date_arrive:</label>  
                <input type="text" class="form-control" name='date_arrive' value="{{$UneMission->date_arrive}}">  
            </div>
        </div>
        <button type="submit" class="btn btn-success">Valider</button>
    </form>
</div>
@endsection