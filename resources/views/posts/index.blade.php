@extends('layouts.layout')
@section('titolo')
     Posts
@endsection
@section('mainContent')
  <div class="container">
    <div class="row">

     @foreach ($posts as $post)
         <div class="col-sm-6">
          <div class="card" style="width: 18rem;">
               <img class="card-img-top" src="{{$post->img}}" alt="{{$post->title}}">
               <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->body}}</p>
                    <p class="card-text"><small>{{$post->author}}</small>
                    <small>{{$post->created_at}}</small></p>
                    <a href="{{route('posts.edit', $post->id)}}">Modifica</a>
                    <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Elimina</button>
                    </form>
               </div>
          </div>
          </div>
     @endforeach
       <button type="button" class="btn btn-success">
              <a href="{{route('posts.create')}}">Nuovo articolo</a>
       </button>
 </div>
</div>
@endsection
