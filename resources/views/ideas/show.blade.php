@extends('layouts.app')

@section('content')
    <h1>{{$idea->title}}</h1>
    <div>
        {!!$idea->body!!}
    </div>
    <hr>
        <small>Written on {{$idea->created_at}} by</small>
    <hr>
@endsection