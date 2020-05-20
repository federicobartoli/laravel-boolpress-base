@extends('layouts.layout')
@section('titolo')
     Send posts
@endsection
@section('mainContent')
     <form action="{{route('posts.store')}}" method="POST">
    @csrf
    @method('POST')
         <div class="form-row">
             <div class="form-group col-md-6">
                 <label for="title">Post Title</label>
                 <input type="text" class="form-control" name="title" placeholder="Title">
             </div>
             <div class="form-group col-md-6">
                 <label for="author">Author</label>
                 <input type="text" class="form-control" name="author" placeholder="Author">
             </div>
         </div>
         <div class="form-group">
               <label for="body">Write your article/label>
               <textarea class="form-control" name="body" rows="3"></textarea>
         </div>
         <div class="form-group">
               <label for="src">Immagine</label>
               <input type="text" placeholder="Inserisci il path" name="src">
         </div>
         <div class="form-group">
             <div class="form-check">
                 <input class="form-check-input" type="checkbox" id="gridCheck">
                 <label class="form-check-label" name="published" value="1">
                    Published
                 </label>
             </div>
         </div>
         <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
