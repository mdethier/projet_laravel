<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/accueil.css') }}" rel="stylesheet" type="text/css">
    <title>{{ $titre }}</title>

</head>
<body>
    
    <h1 class="title-style">
            {{$titre}}
        
    </h1>

    @foreach ($languages as $language)

    <div class="calzone">
    <a class="fullbox language-link" href="http://{{ $language->iso_code }}.projet-laravel" title={{$language->www_link_title}}
        lang="{{$language->iso_code}}">{{$language->www_link_text}}</a>

    @endforeach
    
</body>
</html>
