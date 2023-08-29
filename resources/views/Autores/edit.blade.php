@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{url ('/autores/'.$autores -> id)}}" method="post">


@csrf
{{method_field ('PATCH')}}
@include('Autores.form', ['modo'=> 'Editar']);


</form>

</div>
@endsection

