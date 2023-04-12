<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $titre }}</title>
    <link rel="stylesheet" href="/public/resources/css/accueil.css">
</head>
<body>

    <h1>
        {{$titre}}
    </h1>

    @foreach ($languages as $language)
    <p><a href="http://{{ $language->iso_code }}.nomdedomaine.jsp" title={{$language->www_link_title}}
        lang="{{$language->iso_code}}">{{$language->language_name}}</a></p>
@endforeach
</body>
</html>
