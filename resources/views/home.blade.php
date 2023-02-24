<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Comics | Home</title>
  {{-- fontawesome --}}
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'
    integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=='
    crossorigin='anonymous' />

  @vite('resources/js/app.js')
</head>

<body>
  {{-- # header --}}
  <header class="container">
    <figure>
      <a href="{{ url('/') }}">
        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="dc logo">
      </a>
    </figure>

    <nav>
      <ul>
        {{-- TODO da migliorare foreach --}}
        @foreach (config('headermenu') as $link)
          <li><a href="#" class="{{ $link['current'] ? 'current' : '' }}">{{ $link['text'] }}</a></li>
          {{-- Route::is('nome rotta') 
		 	request()->route-is('nome rotta') ? active : '' 
		  --}}
        @endforeach
      </ul>
    </nav>
    <form class="d-flex" role="search">
      <input type="search" placeholder="Search">
      <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
  </header>

  {{-- # jumbotron --}}
  <section id="jumbo"></section>

  {{-- TODO main --}}
  <main></main>

  {{-- #footer --}}
  <footer>
    {{-- * footer top --}}
    <section id="footer-top">
      <div class="container">
        <div class="footer-list-container">
          <div class="footer-list-col">
            <h3>dc comics</h3>
            <ul>
              <li><a href="#">Characters</a></li>
              <li><a href="#">Comics</a></li>
              <li><a href="#">Movies</a></li>
              <li><a href="#">TV</a></li>
              <li><a href="#">Games</a></li>
              <li><a href="#">Videos</a></li>
              <li><a href="#">News</a></li>
            </ul>

            <h3>shop</h3>
            <ul>
              <li><a href="#">Shop DC</a></li>
              <li><a href="#">Shop DC Collectibles</a></li>
            </ul>
          </div>
          <div class="footer-list-col">
            <h3>dc</h3>
            <ul>
              <li><a href="#">Terms Of Use</a></li>
              <li><a href="#">Privacy policy (New)</a></li>
              <li><a href="#">Ad Choices</a></li>
              <li><a href="#">Advertising</a></li>
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Subscriptions</a></li>
              <li><a href="#">Talent WorkShops</a></li>
              <li><a href="#">CPSC Certificates</a></li>
              <li><a href="#">Ratings</a></li>
              <li><a href="#">Shop Help</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <div class="footer-list-col">
            <h3>sites</h3>
            <ul>
              <li><a href="#">DC</a></li>
              <li><a href="#">MAD Magazine</a></li>
              <li><a href="#">DC Kids</a></li>
              <li><a href="#">DC Universe</a></li>
              <li><a href="#">DC Power Visa</a></li>
            </ul>
          </div>
        </div>
        <figure>
          <img src="{{ Vite::asset('resources/images/dc-logo-bg.png') }}" alt="DC logo">
        </figure>
      </div>
    </section>

    {{-- * footer bottom --}}
    <section id="footer-bottom">
      <div class="container">
        <button>sign-up now!</button>
        <div class="footer-links">
          <a href="#">follow us</a>
          <a href="#"><img src="{{ Vite::asset('resources/images/footer-facebook.png') }}" alt="fb"></a>
          <a href="#"><img src="{{ Vite::asset('resources/images/footer-twitter.png') }}" alt="tw"></a>
          <a href="#"><img src="{{ Vite::asset('resources/images/footer-youtube.png') }}" alt="yt"></a>
          <a href="#"><img src="{{ Vite::asset('resources/images/footer-pinterest.png') }}" alt="pt"></a>
          <a href="#"><img src="{{ Vite::asset('resources/images/footer-periscope.png') }}" alt="ps"></a>
        </div>
      </div>
    </section>
  </footer>

</body>

</html>
