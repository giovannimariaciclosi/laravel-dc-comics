<footer id="footer">

  <div id="main-container">
    <div class="container linklist">
        <div class="list-container">
          <div class="list-title">DC COMICS</div>
          <ul class="list">
              <li>Characters</li>
              <li><a href="{{route('home')}}">Comics</a></li>
              <li>Movies</li>
              <li>TV</li>
              <li>Games</li>
              <li>Videos</li>
              <li>News</li>
          </ul>
        </div>
        <div class="list-container">
          <div class="list-title">SHOP</div>
          <ul class="list">
              <li>Shop DC</li>
              <li>Shop DC Collectibles</li>
          </ul>
        </div>
        <div class="list-container">
          <div class="list-title">DC</div>
          <ul class="list">
              <li>Terms Of Use</li>
              <li>Privacy Policy (New)</li>
              <li>Ad Choices</li>
              <li>Advertising</li>
              <li>Jobs</li>
              <li>Subscriptions</li>
              <li>Talent Workshops</li>
              <li>CPSC Certificates</li>
              <li>Ratings</li>
              <li>Shop Help</li>
              <li>Contact Us</li>
          </ul>
        </div>
        <div class="list-container">
          <div class="list-title">SITES</div>
          <ul class="list">
              <li>DC</li>
              <li>MAD Magazine</li>
              <li>DC Kids</li>
              <li>DC Universe</li>
              <li>DC Power Visa</li>
          </ul>
        </div>
        {{-- <div class="copyright">
          <div>All Site Content TM and @ 2020 DC Entertainment, unless otherwise <span>noted here</span>. All right reserved. <span>Cookies Settings</span></div>
        </div> --}}
    </div>
  </div>

  {{-- last section --}}
  <div id="last-section-container">
    <div class="container" class="d-flex justify-content-between align-items-center">
      <button>SIGN-UP NOW!</button>
      <div class="social">
        <div class="social-text">FOLLOW US</div>
        <div class="social-icon-container">
            <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Digital comics" />
            <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="Digital comics" />
            <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="Digital comics" />
            <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="Digital comics" />
            <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="Digital comics" />
        </div>
      </div>
    </div>
  </div>
</footer>