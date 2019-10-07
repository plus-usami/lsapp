<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  

        <title>{{config('app.name', 'LSAPP')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
        <script>
        tinymce.init({
          selector: '#editor'
        });
        </script>
    
    </head>
    <body>
      @include('inc.navbar')
      @include('inc.messages')
      <div class="container">
        @yield('content')
      </div>
      <script src={{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}></script>
      <script>
          CKEDITOR.replace( 'article-ckeditor' );
      </script>
    </body>
</html>
