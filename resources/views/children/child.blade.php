<div class="container-fluid">
    <div class="row col-sm-12">
        <p><strong>Nom:</strong> {{$child->last_name}}&nbsp;&nbsp;</p>
        <p><strong>Prenom:</strong> {{$child->first_name}}&nbsp;&nbsp;</p>
        <p><strong>Sexe:</strong> {{$child->gendre}}&nbsp;&nbsp;</p>
        <p><strong>Date de Naissance:</strong> {{$child->birth_date}}&nbsp;&nbsp;</p>
        <p><strong>Classe:</strong> {{$child->grade}}&nbsp;&nbsp;</p>
        <p><strong>École:</strong> {{$child->school}}&nbsp;&nbsp;</p>
        <p><strong>Ville:</strong> {{$child->city}}&nbsp;&nbsp;</p>
        <p><strong>Taille:</strong> {{$child->height}}&nbsp;&nbsp;</p>
        <p><strong>Pointure:</strong> {{$child->shoe_size}}&nbsp;&nbsp;</p>
        <p><strong>Fréres et Soeurs:</strong> {{$child->siblings}}&nbsp;&nbsp;</p>
        <p><strong>Anomalie:</strong> {{$child->anomaly}}&nbsp;&nbsp;</p>
        <p><strong>Tuteur:</strong> {{$child->guardian_number}}&nbsp;&nbsp;</p>
        <p><strong>Autre:</strong> {{$child->other}}&nbsp;&nbsp;</p>
    </div>
    <form method="POST" action="/child/{{ $child->id }}">

        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
        <div class="form-group">
            <label for="exampleInputparrain"><strong>Affecter à un Parrain</strong></label>
            <input type="text" class="form-control" id="exampleInputparrain" placeholder="Parrain id" name="godparent" >
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Affecter</button>
        </div>
    </form>
</div>
<hr>