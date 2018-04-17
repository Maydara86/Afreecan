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

    @if($child->user_id === 1)
        <form method="POST" action="/child/{{ $child->id }}">

            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
            <div class="form-inline">
                <label for="exampleInputparrain"><strong>Affecter à un Parrain</strong></label>
                <input type="text" class="form-control ml-2" id="exampleInputparrain" placeholder="Parrain id" name="godparent" required>
            
                <button type="submit" class="btn btn-primary ml-2">Affecter</button>
            </div>
        </form>
    @else           
        <form method="POST" action="/child/revoke-godparent/{{ $child->id }}">

            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
            <div class="form-inline">
                <strong>Parrain:</strong> {{$child->user->name}}
            
                <button type="submit" class="btn btn-danger ml-2">Désaffecter</button>
            </div>
        </form>
    @endif
</div>
<hr>