@extends('template2')

@section('content')

<div> 
    <center><h3>Résultat de la recherche</h3></center>
    <table>
<?php if(isset($tabLength)){?>
<table class="table-hover">
@for($i=0;$i<$tabLength;$i++)
@foreach ($results[$i] as $result)
    <?php $j=0;?>

        @if ($j%4== 0)

                </tr>
                <tr>
                    <td class="case" onclick="document.location='{{ URL::route('details', ['id'=> $result->id]) }}'"><p class="prix">{{ $result->prix }}€</p>
                        <img src= "{{URL::asset('photos/'.$result->photo)}}"/>
                @if(Auth::check() == true)
                @if(Auth::User()->isAdmin() ==true)
                <button class="btn btn-info"><a href="{{URL::route('supprimerBien', ['id'=> $result->id])}}">supprimer</a></button>
                @endif
                @endif
                </td>

        @else
        <td class="case"onclick="document.location='{{ URL::route('details', ['id'=> $result->id]) }}'"><p class="prix">{{ $result->prix }}€</p>
                <img src= "{{URL::asset('photos/'.$result->photo)}}" /> 
                @if(Auth::check() == true)
                @if(Auth::User()->isAdmin() ==true)
                <button class="btn btn-info"><a href="{{URL::route('supprimerBien', ['id'=> $result->id])}}">supprimer</a></button>
                @endif
                @endif
                </td>
        @endif
        <?php $j++;?>
        @endforeach
</table>
@endfor 
<?php }?>
</div>
@stop
