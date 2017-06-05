@extends('template2')

@section('content')

<div class="conteneur">
	
	<h1>Bien n°{{$details->id}} : {{$details->prix}}  € / mois</h1>
	
	<h2>Photo</h2>
	<p class="centre"><img src= "{{URL::asset('photos/'.$details->photo)}}" class="bien"/></p>
	
	<h2>Caractéristiques</h2>
	<ul>
		<li>Type: {{$details->types}}</li>
		<li>Secteur: {{$details->secteur}}</li>
		<li>Surface: {{$details->surface}}</li>
		<li>Pièces: {{$details->pieces}} </li>
		<li>Classe énergetique: {{ $details->classe->lettre }}</li>
		<li>Description de la classe: {{$details->classe->description}}</li>			
	</ul>
		
</div>

@stop