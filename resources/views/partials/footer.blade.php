<footer id="footer">

  <div id="main-container">
    <div class="container linklist">
        @foreach ($footerLinksList as $singleLink)
          <div class="list-container">
            <div class="list-title">{{ $singleLink['title'] }}</div>
            <ul class="list">
              @foreach ($singleLink['contents'] as $singleContent)
                <li>
                  {{$singleContent}}
                </li>
              @endforeach
            </ul>
          </div>
        @endforeach
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
          @foreach ($socialIcons as $singleIcon)
            <img src="{{ Vite::asset('resources/img/' . $singleIcon) }}" alt="Digital comics" />
          @endforeach
        </div>
      </div>
    </div>
  </div>
</footer>