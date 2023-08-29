@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{url('/autores')}}" method="post" >
@csrf
@include('Autores.form', ['modo'=> 'Crear']);
</form>

</div>
@endsection