@extends('template2')

@section('content')
<div class="container-fluid">
        <button id="btnVentes" class="btn btn-info">afficher les ventes</button> 
        <button id="btnLocations" class="btn btn-info">afficher les locations</button> 
        @if(Auth::check())
        <button class="btn btn-warning"><a href="{{ URL::to('/ajoutBien') }}">ajoutez un bien</a></button>
        @endif
</div> 
</br>
        <script>
            
            window.onload = function() {
                $("#tableLocations").hide();
            }
            
            $( "#btnVentes" ).click(function() {
                if(document.getElementById("tableLocations").style.visibility = "visible"){
                $("#tableLocations").hide();
            }
                $( "#tableVentes" ).show();  
            });
            
            $( "#btnLocations" ).click(function() {
                $("#tableVentes").hide();
                $("#tableLocations").show();
            });
        </script>
        <style>
	
	.case:hover{
		box-shadow: 3px 3px 3px 3px #aaa;
	}
	.case{
		padding:50px;
		border-radius:10px;
                width: 500px;
                height: 200px;
	}
        .prix{
            text-align: center;
        }
        tr{
            width: 100%;
        }
        img{
            padding-bottom: 10px;
        }
        </style>
        
        <div id="tableVentes"> 
            <center><h3>Liste des ventes</h3></center>
            <table>
            <?php $i=0;?>
		@foreach($ventes as $vente)
                
                @if ($i%4== 0)
                
                        </tr>
                        <tr>
                            <td class="case" onclick="document.location='{{ URL::route('details', ['id'=> $vente->id]) }}'"><p class="prix">{{ $vente->prix }}€</p>
                                <img src= "{{URL::asset('photos/'.$vente->photo)}}"/>
                        @if(Auth::check() == true)
                        @if(Auth::User()->isAdmin() ==true)
                        <button class="btn btn-info"><a href="{{URL::route('supprimerBien', ['id'=> $vente->id])}}">supprimer</a></button>
                        @endif
                        @endif
                        </td>
                        
                @else
                <td class="case"onclick="document.location='{{ URL::route('details', ['id'=> $vente->id]) }}'"><p class="prix">{{ $vente->prix }}€</p>
                        <img src= "{{URL::asset('photos/'.$vente->photo)}}" /> 
                        @if(Auth::check() == true)
                        @if(Auth::User()->isAdmin() ==true)
                        <button class="btn btn-info"><a href="{{URL::route('supprimerBien', ['id'=> $vente->id])}}">supprimer</a></button>
                        @endif
                        @endif
                        </td>
                @endif
                <?php $i++;?>
		@endforeach
	</table>
            <center><div class="pagination">{!! $ventes->render() !!}</div></center>
        </div>

        <div id="tableLocations">  
            <center><h3>Liste des locations</h3></center>
        <table>
            <?php $i=0;?>
		@foreach($locations as $location)
                
                @if ($i%4== 0)
                
                        </tr>
                        <tr>
                            <td class="case" onclick="document.location='{{ URL::route('details', ['id'=> $location->id]) }}'"><p class="prix">{{ $location->prix }}€</p>
                                <img src= "{{URL::asset('photos/'.$location->photo)}}"/>
                        @if(Auth::check() == true)
                        @if(Auth::User()->isAdmin() ==true)
                        <button class="btn btn-info" style="align:center;"><a href="{{URL::route('supprimerBien', ['id'=> $location->id])}}">supprimer</a></button>
                        @endif
                        @endif
                        </td>
                        
                @else
                <td class="case"onclick="document.location='{{ URL::route('details', ['id'=> $location->id]) }}'"><p class="prix">{{ $location->prix }}€</p>
                        <img src= "{{URL::asset('photos/'.$location->photo)}}" /> 
                        @if(Auth::check() == true)
                        @if(Auth::User()->isAdmin() ==true)
                        <button class="btn btn-info"><a href="{{URL::route('supprimerBien', ['id'=> $location->id])}}">supprimer</a></button>
                        @endif
                        @endif
                        </td>
                @endif
                <?php $i++;?>
		@endforeach
	</table>
            <center><div class="pagination">{!! $locations->render() !!}</div></center>
        </div>
@stop