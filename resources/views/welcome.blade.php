<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <style>
    svg {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100vw;
    }
    </style>
</head>

<body style="height:100vh;" class="d-flex justify-content-center flex-column">
    @if (Route::has('login'))
    <div class="navbar navbar-light bg-light position-absolute top-0 start-0 end-0 py-2 px-4">
        <div class="d-flex ms-auto">
            @auth
            <a href="{{ url('/home') }}" class="nav-link text-muted fw-bold">Home</a>
            @else
            <a href="{{ route('login') }}" class="nav-link text-muted fw-bold">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="nav-link text-muted fw-bold">Register</a>
            @endif
            @endauth
        </div>
    </div>
    @endif

    <div class="d-flex flex-column align-items-center">
        <p class="fs-3 fw-bold m-0">Welcome To <span class="text-warning fw-bolder">Noted.</span></p>
        <p>create your own node to remind you every time you need</p>
        <a href="{{ route('register') }}" class="btn btn-info shadow">Create Your Account</a>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#FFD9008C" fill-opacity="1"
            d="M0,288L16,256C32,224,64,160,96,138.7C128,117,160,139,192,170.7C224,203,256,245,288,261.3C320,277,352,267,384,272C416,277,448,299,480,304C512,309,544,299,576,266.7C608,235,640,181,672,165.3C704,149,736,171,768,197.3C800,224,832,256,864,234.7C896,213,928,139,960,144C992,149,1024,235,1056,256C1088,277,1120,235,1152,218.7C1184,203,1216,213,1248,218.7C1280,224,1312,224,1344,229.3C1376,235,1408,245,1424,250.7L1440,256L1440,320L1424,320C1408,320,1376,320,1344,320C1312,320,1280,320,1248,320C1216,320,1184,320,1152,320C1120,320,1088,320,1056,320C1024,320,992,320,960,320C928,320,896,320,864,320C832,320,800,320,768,320C736,320,704,320,672,320C640,320,608,320,576,320C544,320,512,320,480,320C448,320,416,320,384,320C352,320,320,320,288,320C256,320,224,320,192,320C160,320,128,320,96,320C64,320,32,320,16,320L0,320Z">
        </path>
    </svg>


</body>

</html>