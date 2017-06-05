@extends('template2')


@section('content')

@foreach($users as $user)
<table  id="{{$user->id}}" class="table table-striped">
    <th>{{ $user->name }}</th>
    <th>{{ $user->prenom }}</th>
    <th>{{ $user->email }}</th>
@foreach($user->biens as $bien)
<tr style="background-color:#60656B">
    <td>{{$bien->id}}</td>
    <td>{{$bien->types}}</td>
    <td>{{ $bien->secteur }}</td>
    <td>{{ $bien->surface }}</td>
    <td>{{ $bien->prix }} €</td>
</tr>
@endforeach
</table>
@endforeach




@stop

