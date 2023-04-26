<!DOCTYPE html>
<html lang="{{$language->iso_code}}">
<head>
   <x-head :languageData="$language"/>
</head>
<body>
    

<div class="wrapper">
  <form action="#" class="card-content">
    <div class="container">
      <div class="image">
        <i class="fas fa-envelope"></i>
      </div>
      <h1>{{__('inactive.inscris')}}</h1>
      <p>{{__('inactive.viens')}}</p>
      <p>{{__('inactive.bien')}}</p>
      <p>{{__('inactive.rejoins')}}</p>
      
    </div>
    <div class="form-input">
      <label for="email"></label>
      <input type="email" placeholder="{{__('inactive.data')}}">
      <button class="subscribe-btn">{{__('inactive.pizza')}}</button>
    </div>
  </form>
</div>
</body>
</html>