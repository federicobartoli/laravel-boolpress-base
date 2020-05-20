@extends('layouts.layout')
@section('titolo')
     Posts
@endsection
@section('mainContent')

          <div class="card" style="width: 18rem;">
               <img class="card-img-top" src="{{$post->img}}" alt="{{$post->title}}">
               <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->body}}</p>
                    <p class="card-text"><small>{{$post->author}}</small>
                    <small>{{$post->created_at}}</small></p>
               </div>
          </div>
@endsection
