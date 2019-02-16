@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>{{config('app.name')}}</h1> 
    <p>Gør dine ideér til virkelighed!</p>
    <a href="{{ route('login') }}"><button class="btn btn-primary">Log ind</button></a>
    <a href="{{ route('register') }}"><button class="btn btn-secondary">Registrér</button></a>

</div>
@endsection