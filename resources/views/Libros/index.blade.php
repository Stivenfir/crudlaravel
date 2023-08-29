@extends('layouts.app')

@section('content')
<div class="container">

<div class="alert alert-success alert-dismissible" role="alert">
        @if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif





    
</div>



<a href="{{url('libros/create')}}" class="btn btn-success">Nuevo Registro Libro</a>
<br>
<br>
<table class="table table-light">


    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Año publicacion</th>
            <th>Genero</th>
            <th>opciones</th>
        </tr>
    </thead>


    <tbody>

     @foreach ($libros as $libro )

        <tr>
            <td>{{$libro -> id}}</td>
            <td>{{$libro -> titulo}}</td>
            <td>{{$libro -> autor}}</td>
            <td>{{$libro -> anio_publicacion}}</td>
            <td>{{$libro -> genero}}</td>
            <td> 

            <a href="{{url('/libros/'.$libro->id.'/edit')}}" class="btn btn-warning">Editar </a>

            |

            <form action="{{url('/libros/'.$libro->id)}}" class="d-inline" method="post">
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