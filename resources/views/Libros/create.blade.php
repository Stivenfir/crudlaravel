@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{url('/libros')}}" method="post" >
@csrf
@include('Libros.form', ['modo'=> 'Crear']);

</form>

</div>
@endsection