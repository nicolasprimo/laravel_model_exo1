@extends('component.template')
@section('content')

<h1>Users</h1>
@foreach($datas as $data)
<div class="card mb-3 " style="width: 18rem;">
    <div class="card-header">
        Id : {{$data->id}}
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Nom : {{$data->name}}</li>
      <li class="list-group-item">Age : {{$data->age}}</li>
      <li class="list-group-item">Classe : {{$data->classe}}</li>
    </ul>
  </div>
@endforeach
@endsection