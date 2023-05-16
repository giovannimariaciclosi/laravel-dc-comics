<header id="header">
  <div class="top-banner">
    <div class="container">
      <div>DC POWER VISA</div>
      <div>ADDITIONAL DC SITES</div>
    </div>
  </div>
  <div class="container d-flex justify-content-between align-items-center">
    <div class="img-container">
      <img src="{{ Vite::asset('resources/img/dc-logo.png') }}"  alt="DC Logo" />
    </div>
    <ul class="d-flex align-items-center">
      @foreach ($linksList as $link)
      <li>{{$link}}</li>
      @endforeach
    </ul>
  </div>
  <div class="jumbotron"></div>
  
</header>