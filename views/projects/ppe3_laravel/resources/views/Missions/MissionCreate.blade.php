@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Modifier une Mission:</h2><br />
    <h1>Votre id est : {{Auth::user()->id_personnel}}</h1>
    <form method="post" action="{{action('MissionController@store')}}" enctype="multipart/form-data"> 
    @csrf 
        <input name="_method" type="hidden" value="POST">
        <div class="form-group col-md-4">
                <label for="id_personnel">Id Personnel:</label> 
                <input type="text" class="form-control" name='id_personnel' placeholder="id_personnel (int)"> 
                <label for="type_mission">Type de Mission:</label> 
                <input type="text" class="form-control" name='type_mission' placeholder="type mission (string)">
                <label for="heure_depart">Heure de Depart:</label>  
                <input type="text" class="form-control" name='heure_depart' placeholder=" 00 : 00 am/pm">
                <label for="heure_arrive">Heure d'arrivé:</label>  
                <input type="text" class="form-control" name='heure_arrive' placeholder=" 00 : 00 am/pm ">
                <label for="date_depart">Date de Depart:</label>  
                <input type="text" class="form-control" name='date_depart' placeholder="MM/JJ/AAAA">
                <label for="date_arrive">Date d'arrivé:</label>  
                <input type="text" class="form-control" name='date_arrive' placeholder="MM/JJ/AAAA">  
        </div>
        <button type="submit" class="btn btn-success">Valider</button>
    </form>
</div>
@endsection