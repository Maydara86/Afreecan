@extends('layouts.master')

@section('content')

<h1>Éditer {{$child->first_name}} {{  $child->last_name }}</h1>

    <hr>

    <form method="POST" action="{{url('/child/edit/'.$child->id)}}">

        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <label for="exampleInputprenom">Prenom</label>
        <input type="text" class="form-control" id="exampleInputprenom" value="{{ $child->first_name }}" placeholder="Prenom" name="first_name" >
    </div>

    <div class="form-group">
        <label for="exampleInputnom">Nom</label>
        <input type="text" class="form-control" id="exampleInputnom" value="{{ $child->last_name }}" placeholder="Nom" name="last_name" >
    </div>

    <div class="form-group">Sexe<br>
        
        <input type="radio" name="gender" value="male" @if($child->gender === "m") checked @endif id="exampleInputmale"> <label for="exampleInputmale">Male</label><br>
    
        <input type="radio" name="gender" value="femelle" @if($child->gender === "f") checked @endif id="exampleInputfemelle"> <label for="exampleInputfemelle">Femelle</label><br>
        
    </div>

    <div class="form-group">
        <label for="exampleInputdate">Date de Naissance</label>
        <input type="text" class="form-control" id="exampleInputdate" value="{{ $child->birth_date ?? "" }}" placeholder="jj/mm/aaaa" name="birth_date" >
    </div>

    <div class="form-group">
        <label for="exampleInputclasse">Classe</label>
        <input type="text" class="form-control" id="exampleInputclasse" value="{{ $child->grade ?? "" }}" placeholder="1 ére" name="grade" >
    </div>

    <div class="form-group">
        <label for="exampleInputecole">École</label>
        <input type="text" class="form-control" id="exampleInputecole" value="{{ $child->school ?? "" }}" placeholder="Abu Kacem Echabbi" name="school" >
    </div>

    <div class="form-group">
        <label for="exampleInputville">Ville</label>
        <input type="text" class="form-control" id="exampleInputville" value="{{ $child->city ?? "" }}" placeholder="Ville" name="city" >
    </div>

    <div class="form-group">
        <label for="exampleInputtaille">Taille</label>
        <input type="text" class="form-control" id="exampleInputtaille" value="{{ $child->height ?? "" }}" placeholder="1.60 cm" name="height" >
    </div>

    <div class="form-group">
        <label for="exampleInputpointure">Pointure</label>
        <input type="text" class="form-control" id="exampleInputpointure" value="{{ $child->shoe_size ?? "" }}" placeholder="36" name="shoe_size" >
    </div>

    <div class="form-group">
        <label for="exampleInputsiblings">Nombre de Frére et Soeur</label>
        <input type="text" class="form-control" id="exampleInputsiblings" value="{{ $child->siblings ?? "" }}" placeholder="1 frére et 2 soeurs" name="siblings" >
    </div>

    <div class="form-group">
        <label for="exampleInputanomalie">Anomalie</label>
        <input type="text" class="form-control" id="exampleInputanomalie" value="{{ $child->anomaly ?? "" }}" placeholder="Probléme orthopédique" name="anomaly" >
    </div>

    <div class="form-group">
        <label for="exampleInputtueur">Numéro du Tuteur</label>
        <input type="text" class="form-control" id="exampleInputtueur" value="{{ $child->guardian_number ?? "" }}" placeholder="22 123 456" name="guardian_number" >
    </div>

    <div class="form-group">
        <label for="exampleInputautre">Autre</label>
        <textarea class="form-control" id="exampleInputautre" rows="5" value="{{ $child->other ?? "" }}" placeholder="Autre chose..." name="other"></textarea>
    </div>    
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>

    @if(count($errors))
        @include('layouts.error')
    @endif

    </form>

@endsection