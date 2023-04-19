<!DOCTYPE html>
<html lang="{{$language->iso_code}}">
<head>
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

    


    <title>{{$language->title}}</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app_inactive.css')}}">

    @foreach ($allLanguages as $iso_language)
    <link rel="alternate" hreflang="{{$iso_language->iso_code}}" href="http://{{$iso_language->iso_code}}.projet-laravel" />
    @endforeach
</head>
<body>
    

<div class="wrapper">
  <form action="#" class="card-content">
    <div class="container">
      <div class="image">
        <i class="fas fa-envelope"></i>
      </div>
      <h1>Subscribe</h1>
      <p>Subscribe to our newsletter and stay updated when our app will be ready.</p>
    </div>
    <div class="form-input">
      <label for="email"></label>
      <input type="email" placeholder="Your Email">
      <button class="subscribe-btn">Subscribe</button>
    </div>
  </form>
</div>
</body>
</html>