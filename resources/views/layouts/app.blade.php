<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="title" content="Klinik Pratama 24 Jam | Umum, Rapid Test Antigen, Swab Test, Gigi, Laboratorium">
    <meta name="description" content="Sumber Medika Mranggen | Rapid Test Antigen | Umum | Laboratorium | Periksa Kandungan Kehamilan | Dokter Patologi">
    <meta name="site_name" content="Klinik Pratama 24 Jam Sumber Medika Mranggen">

    <!-- aos css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- magnific popup css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <link rel="shortcut icon" href="{{('images/logo.jpeg')}}" type="image/x-icon">
</head>
<body>
    <header>
        <div class="container">
            <a href="/" class="logo">
                <img src="{{ asset('images/logo.jpeg')}}" class="img-fluid" style="width: 80px" alt=""> Sumber Medika</a>
            <nav class="nav">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#fasilitas">Fasilitas</a></li>
                    <li><a href="#review">Review</a></li>
                    <li><a href="#news">News</a></li>
                    <li><a href="#contact">Contact</a></li>
                    @guest
                        <li><a href="{{ route('login')}}">Login</a></li>
                    @else
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </nav>
            <div class="fas fa-bars"></div>
        </div>
    </header>

    @yield('content')

    <!-- footer section starts  -->
    <section class="footer" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4" data-aos="fade-right">
                    <a href="#" class="logo">Sumber Medika Mranggen</a>
                    <p class="text-justify">Klinik Pratama 24 Jam Sumber Medika Mranggen merupakan klinik yang bagus dan kompeten dalam menangani masalah pasien serta memiliki fasilitas yang memadai khususnya dalam pemeriksaan Rapid Test dan Swab </p>
                </div>
                <div class="col-md-4 text-center" data-aos="fade-up">
                    <h3>Links</h3>
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Fasilitas</a>
                    <a href="#">Review</a>
                    <a href="#">News</a>
                    <a href="#">Contact</a>
                </div>
                <div class="col-md-4 text-center" data-aos="fade-left">
                    <h3>Contact</h3>
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Instagram</a>
                    <a href="#">Github</a>
                </div>
            </div>
        </div>
        <h1 class="credit text-center mx-auto">Created By <span>Sumber Medika</span> | All Rights Reserved.</h1>
    </section>
    <!-- footer section ends -->




    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- magnific popup js link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <!-- aos js file cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script src="{{ asset('js/main.js')}}"></script>
    <script>
        AOS.init({
            duration:1000,
            delay:400
        });
    </script>
</body>
</html>
