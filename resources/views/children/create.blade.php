@extends('layouts.master')

@section('content')

    <h1>Ajouter un Enfant</h1>

    <hr>

    <form method="POST" action="/child">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="exampleInputnom">Nom</label>
        <input type="text" class="form-control" id="exampleInputnom" placeholder="Nom" name="nom" >
    </div>

    <div class="form-group">
        <label for="exampleInputprenom">Prenom</label>
        <input type="text" class="form-control" id="exampleInputprenom" placeholder="Prenom" name="prenom" >
    </div>

    <div class="form-group">Sexe<br>
        <input type="radio" name="Sexe" value="male" checked id="exampleInputmale"> <label for="exampleInputmale">Male</label><br>

        <input type="radio" name="Sexe" value="femelle" id="exampleInputfemelle"> <label for="exampleInputfemelle">Femelle</label><br>
        
    </div>

    <div class="form-group">
        <label for="exampleInputdate">Date de Naissance</label>
        <input type="text" class="form-control" id="exampleInputdate" placeholder="jj/mm/aaaa" name="date_de_naissance" >
    </div>

    <div class="form-group">
        <label for="exampleInputclasse">Classe</label>
        <input type="text" class="form-control" id="exampleInputclasse" placeholder="1 ére" name="Classe" >
    </div>

    <div class="form-group">
        <label for="exampleInputecole">École</label>
        <input type="text" class="form-control" id="exampleInputecole" placeholder="École" name="ecole" >
    </div>

    <div class="form-group">
        <label for="exampleInputville">Ville</label>
        <input type="text" class="form-control" id="exampleInputville" placeholder="Ville" name="ville" >
    </div>

    <div class="form-group">
        <label for="exampleInputtaille">Taille</label>
        <input type="text" class="form-control" id="exampleInputtaille" placeholder="1.60 cm" name="taille" >
    </div>

    <div class="form-group">
        <label for="exampleInputpointure">Pointure</label>
        <input type="text" class="form-control" id="exampleInputpointure" placeholder="36" name="pointure" >
    </div>

    <div class="form-group">
        <label for="exampleInputsiblings">Nombre de Frére et Soeur</label>
        <input type="text" class="form-control" id="exampleInputsiblings" placeholder="1 frére et 2 soeurs" name="siblings" >
    </div>

    <div class="form-group">
        <label for="exampleInputanomalie">Anomalie</label>
        <input type="text" class="form-control" id="exampleInputanomalie" placeholder="Probléme orthopédique" name="anomalie" >
    </div>

    <div class="form-group">
        <label for="exampleInputtueur">Numéro du Tuteur</label>
        <input type="text" class="form-control" id="exampleInputtueur" placeholder="22 123 456" name="tuteur" >
    </div>

    <div class="form-group">
        <label for="exampleInputautre">Autre</label>
        <textarea class="form-control" id="exampleInputautre" rows="5" placeholder="Autre chose..." name="autre"></textarea>
    </div>    
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>

    @if(count($errors))
        @include('layouts.error')
    @endif

    </form>

@endsection