@extends('layouts.layout')
@section('titolo')
     Send posts
@endsection
@section('mainContent')
<div class="container">
     <div class="row">
          <div class="col-sm-6 text-center">
               <form action="{{route('posts.update', $post->id)}}" method="POST">
              @csrf
              @method('PUT')
                   <div class="form-row">
                       <div class="form-group col-md-6">
                           <label for="title">Post Title</label>
                           <input type="text" class="form-control" name="title" placeholder="Title">
                              @error('title')
                                   <small class="alert alert-danger">{{$message}}</small>
                              @enderror
                       </div>
                       <div class="form-group col-md-6">
                           <label for="author">Author</label>
                           <input type="text" class="form-control" name="author" placeholder="Author">
                                @error('author')
                                     <small class="alert alert-danger">{{$message}}</small>
                                @enderror
                       </div>
                   </div>
                   <div class="form-group">
                         <label for="body">Write your article</label>
                         <textarea class="form-control" name="body" rows="3"></textarea>
                         @error('body')
                              <small class="alert alert-danger">{{$message}}</small>
                         @enderror
                   </div>
                   <div class="form-group">
                         <label for="img">Immagine</label>
                         <input type="text" placeholder="Inserisci il path" name="img">
                   </div>
                   <div class="form-group">
                       <div class="form-check">
                           <input class="form-check-input" type="checkbox" name="published" id="gridCheck">
                           <label class="form-check-label" name="published">
                              Published
                           </label>
                       </div>
                   </div>
                   <button type="submit" class="btn btn-primary">Save</button>
          </form>
          </div>
     </div>
</div>
@endsection
