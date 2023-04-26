<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="description" content="{{$language->meta_description}}">
<meta name="keywords" content="{{$language->meta_keywords}}">
<meta property ="og:title" content = "{{$language->og_title}}">
<meta property ="og:description" content="{{$language->og_description}}">
<meta property ="og:image" content="{{$language->og_image}}">
<meta property ="og:type" content="{{$language->og_type}}">
<meta name="twitter:title" content ="{{$language->tw_title}}">
<meta name="twitter:card" content ="{{$language->tw_type}}">
<meta name ="twitter:description" content="{{$language->tw_description}}">
<meta name="twitter:image" content="{{$language->tw_image}}">


<link rel="stylesheet" href="{{ asset('css/app_active.css')}}">

@foreach ($allLanguages as $iso_language)
<link rel="alternate" hreflang="{{$iso_language->iso_code}}" href="http://{{$iso_language->iso_code}}.projet-laravel" />
@endforeach

<title>{{$language->title}}</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app_inactive.css')}}">