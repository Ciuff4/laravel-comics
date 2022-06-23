@extends('layouts.main')
@section('content')
<div class="container">
    @foreach ( $comics as $comic)
        <div class="card">
            <img src="{{$comic->image}}" alt="">
            <h3>{{$comic->title}}</h3>
            <p>{{$comic->type}}</p>
        </div>
    @endforeach
</div>
@endsection
