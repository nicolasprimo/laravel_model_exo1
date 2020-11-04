@extends('component.template')
@section('content')

<h1>Liste des Classes</h1>

@foreach ($datas as $item)   
<h3>Nom : {{$item->nom}}</h3> 
<h4>Taille : {{$item->taille}}</h4>

@endforeach

@endsection