@extends('template2')
@section('content')
    <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">Nous contacter</div>
        <div class="panel-body">
            {{Form::open(array('route'=>'envoie'))}}

            {{ Form::label('email', 'email: ') }}
            {{ Form::text('email') }}
        </br>

        </br>
            {{ Form::label('message', 'votre message: ') }}
            {{ Form::textarea('message') }}
        </br>
            {{ Form::submit('envoyer') }}
            {{ Form::close() }}    
        </div>
        
    </div>
</div>
@stop