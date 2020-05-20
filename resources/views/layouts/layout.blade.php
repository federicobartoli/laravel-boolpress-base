<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
     <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>@yield('titolo')</title>
          <script src="https://kit.fontawesome.com/4aa4c430a6.js" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="{{asset('css/app.css')}}">
     </head>
     <body>
          @include('partials.header')
          @include('partials.main')
               @yield('mainContent')
          @include('partials.footer')
     </body>
     @yield('script')
     {{-- scripts --}}
</html>
