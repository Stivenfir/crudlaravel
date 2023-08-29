@extends('layouts.app')

@section('content')
<div class="container">

<div class="alert alert-success alert-dismissible" role="alert">

@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif



</div>

<a href="{{url('autores/create')}}" class="btn btn-success">Nuevo Registro Autor</a>
<br>
<br>
<table class="table table-dark">

    <thead class="thead-dark">

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Ciudad</th>
            <th>opciones</th>
        </tr>
    </thead>


    <tbody>

    @foreach ($autores as $autor)

        <tr>
            <td>{{$autor -> id}}</td>
            <td>{{$autor -> nombre}}</td>
            <td>{{$autor -> apellido}}</td>
            <td>{{$autor -> direccion}}</td>
            <td>{{$autor -> telefono}}</td>
            <td>{{$autor -> email}}</td>
            <td>{{$autor -> ciudad}}</td>
            <td> 

            <a href="{{url('/autores/'.$autor->id.'/edit')}}" class="btn btn-warning">Editar </a>

            |


            <form action="{{url('/autores/'.$autor->id)}}" class="d-inline" method="post">
            @csrf
            {{method_field('DELETE')}}
            <input type="submit" onclick="return confirm ('¿Deseas borrar?')" value="Borrar" class="btn btn-danger">
            </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection