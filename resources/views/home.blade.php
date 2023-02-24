<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics | Home</title>
    {{-- fontawesome --}}
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css' integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==' crossorigin='anonymous'/>

    @vite('resources/js/app.js')
</head>
<body>
    <header class="container">
        <figure>
            <a href="{{url('/')}}">
                <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="dc logo">
            </a>
        </figure>

        <nav>
            <ul>
                @foreach (config('headermenu') as $link)
                <li><a href="#" class="{{ $link['current'] ? 'current' : '' }}">{{ $link['text'] }}</a></li>
                @endforeach
            </ul>
        </nav>
        <form class="d-flex" role="search">
            <input type="search" placeholder="Search">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </header>
    
</body>
</html>