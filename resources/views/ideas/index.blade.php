@extends('layouts.app')

@section('content')
    <h1>Feed</h1>
    @if (count($ideas) > 0)
    @foreach ($ideas as $idea)
        <div class="well well-sm">
            <h3><a href="/ideaPHP/public/api/idea/{{$idea->id}}">{{$idea->title}}</a></h3>
            <small>Written on {{$idea->created_at}} by  </small>
        </div>
    @endforeach
@else
    <p>No posts found</p>
@endif
@endsection