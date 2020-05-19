<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prove</title>
    </head>
    <body>
        @foreach ($posts as $post)

                    <img src="{{$post->src}}" alt="{{$post->title}}">
                    <h1>{{$post->title}}</h1>
                    <p>{{$post->body}}</p>
                    <small>{{$post->author}}</small>
                    <small>{{$post->created_at}}</small>
                    <br>

        @endforeach
    </body>
</html>
