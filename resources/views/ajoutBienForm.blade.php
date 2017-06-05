@extends('template2')

@section('content')

<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">Ajouter un bien</div>
        <div class="panel-body">
            {{Form::open(array('route'=>'ajouteBienForm','files'=> true))}}

            {{ Form::label('secteur', 'secteur: ') }}
            {{ Form::text('secteur') }}
        </br>
            <label>photo: </label>
            <input type="file" name="photo">
        </br>
            {{ Form::label('surface', 'surface: ') }}
            {{ Form::text('surface') }}
        </br>
            {{ Form::label('surfaceTerrain', 'surface du terrain (vide si pas de terrain):') }}
            {{ Form::text('surfaceTerrain') }}
        </br>
            {{ Form::label('chambres', 'nombre de chambres: ') }}
            {{ Form::number('chambres') }}
        </br>
            {{ Form::label('pieces', 'nombre de pieces: ') }}
            {{ Form::number('pieces') }}
        </br>
            {{ Form::label('types', 'type de bien: ') }}
            {{ Form::text('types') }}
        </br>
            {{ Form::label('prix', 'prix: ') }}
            {{ Form::number('prix') }}
        </br>
            {{ Form::label('categorie_id', 'categorie du bien: ') }}
            {{ Form::select('categorie_id', $categories) }}
        </br>
            {{ Form::label('classe_id', 'categorie du bien: ') }}
            {{ Form::select('classe_id', $classes ) }}
        </br>
            {{ Form::label('user_id', 'personnel en charge: ') }}
            {{ Form::select('user_id', $users ) }}
        </br>
            {{ Form::submit('enregistrer') }}
            {{ Form::close() }}
        
        </div>
    </div>
</div>
@stop