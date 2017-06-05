@extends('template2')

@section('content')
    
<div class="container-fluid">
        <button id="btnVentes" class="btn btn-info">afficher les ventes</button> <button id="btnLocations" class="btn btn-info">afficher les locations</button> 
</div> 
</br>
        <script>
            
            window.onload = function() {
                document.getElementById("tableLocations").style.visibility = "hidden";
            }
            
            $( "#btnVentes" ).click(function() {
                if(document.getElementById("tableLocations").style.visibility = "visible"){
                $("#tableLocations").hide();
            }
                $( "#tableVentes" ).show();  
            });
            
            $( "#btnLocations" ).click(function() {
                if(document.getElementById("tableVentes").style.visibility = "visible"){
                $("#tableVentes").hide();
            }
                $( "#tableLocations" ).show();  
            });
        </script>

	<table class="table table-striped" id="tableVentes">
		<tr>
			<th>Référence numero bien</th>
			<th>numero bien</th>
			<th>Secteur</th>
			<th>Surface</th>
			<th>Loyer</th>
			@if(Auth::check() == true)
                            @if(Auth::User()->isAdmin() == true)
				<th>supprimer<th>
                            @endif
			@endif
		</tr>

		@foreach($ventes as $vente)
			<tr onclick="document.location='{{ URL::route('details', ['id'=> $vente->id]) }}'" style="background-color:#60656B">
				<td>{{ $vente->id }}</td>
				<td>{{ $vente->types }}</td>
				<td>{{ $vente->secteur }}</td>
				<td>{{ $vente->surface }}</td>
				<td>{{ $vente->prix }} €</td>
				@if(Auth::check() == true)
                                @if(Auth::User()->isAdmin() ==true)
					<td><a href="{{URL::route('supprimerBien', ['id'=> $vente->id])}}">supprimer</a></td>
                                @endif
				@endif
			</tr>
		@endforeach
	</table>

        <table class="table table-striped" id="tableLocations">
		<tr>
			<th>Référence numero bien</th>
			<th>numero bien</th>
			<th>Secteur</th>
			<th>Surface</th>
			<th>Loyer</th>
			@if(Auth::check() == true)
                            @if(Auth::User()->isAdmin() == true)
				<th>supprimer<th>
                            @endif
			@endif
		</tr>

		@foreach($locations as $location)
			<tr onclick="document.location='{{ URL::route('details', ['id'=> $location->id]) }}'" style="background-color:#60656B">
				<td>{{ $location->id }}</td>
				<td>{{ $location->types }}</td>
				<td>{{ $location->secteur }}</td>
				<td>{{ $location->surface }}</td>
				<td>{{ $location->prix }} €</td>
				@if(Auth::check() == true)
                                @if(Auth::User()->isAdmin() ==true)
					<td><a href="{{URL::route('supprimerBien', ['id'=> $location->id])}}">supprimer</a></td>
                                @endif
				@endif
			</tr>
		@endforeach
                
	</table>

<!--	<a href="{{ URL::to('/ajoutBien') }}">ajoutez un bien</a>-->
@stop