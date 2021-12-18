@extends('people.app')

@section('content')

<table class="table table-striped">
    <tr>
      <td>Nombre</td>
      <td>Apellido</td>
    </tr>
    <tr>
      <td>{{$peoples1}}</td>
      <td>{{$peoples2}}</td>
    </tr>
</table>

<h1>{{$peoples1}}</h1>
    
@endsection