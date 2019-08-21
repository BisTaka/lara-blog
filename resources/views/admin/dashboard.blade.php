<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Bismantaka Aldila">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name' , 'BisTaka-Blog') }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            window.Laravel = { csrfToken: 'csrf_token()' }
        </script>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <meta charset="utf-8">
    </head>
    <body>

        <div id="app">
            <Homepage
            :user-name='@json(auth()->user()->name)'
            :user-id='@json(auth()->user()->id)'>
            </Homepage>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
    </html>
