@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{url ('/libros/'.$libros -> id)}}" method="post">


@csrf
{{method_field ('PATCH')}}
@include('Libros.form', ['modo'=> 'Editar']);


</form>

</div>
@endsection



