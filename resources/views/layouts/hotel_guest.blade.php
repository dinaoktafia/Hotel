<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            background: linear-gradient(to bottom, #ffffff -3%, #191970 101%);
            background-repeat: no-repeat;
        }

        .active {
            border-bottom: 3px solid #000;
        }
    </style>

    <title>Home</title>
</head>
    <body>
        <div class="container">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light mt-4">
                    <div class="container-fluid">
                    <img src="../assets/app-img/home03.png" class="img-fluid" width="100" alt ="logo">
                        <h1 class="display-5 fw-bold">HOTEL RAINBOW</h1>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
    
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="/" class="nav-link {{ Request::is('dashboard/*') ? 'active' : '' }}">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/rooms" class="nav-link {{ Request::is('rooms') ? 'active' : '' }}">Kamar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/facilities" class="nav-link {{ Request::is('facilities') ? 'active' : '' }}">Fasilitas</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/booking" class="nav-link {{ Request::is('booking') ? 'active' : '' }}">Pesan Kamar</a>
                                </li>
                                <li class="nav-item text-nowrap ms-3">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="nav-link px-3 bg-light border-0" type="submit" onclick="return('Anda yakin ingin keluar?')">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>

            <main class="mt-4">
                <div class="container-fluid">
                    @if (!Request::is('dashboard*'))
                    <div class="text-center">
                        <img src="{{ asset('assets/app-img/home01.jpg') }}" class="img-fluid" width="900" alt="Hotel Image 01">
                    </div>
                    @endif

                    {{-- Container --}}
                    @yield('container')
                    
                </div>
            </main>

            @if (!Request::is('dashboard*'))
            <footer class="footer mt-auto py-3">
                <div class="container">
                    <div class="text-center">
                        &copy; 2022 HOTEL RAINBOW
                    </div>
                </div>
            </footer>
            @endif
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
    </body>
</html>