<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="title" content="Klinik 24 Jam | Umum, Spesialis, Gigi, Anak, Rapid Test Antigen">
    <meta name="description" content="Sumber Medika Klinik Pratama 24 Jam | Rapid Test Antigen | Periksa Kandungan Kehamilan | Klinik Anak Semarang, Imunisasi, Khitan | Dokter Patologi">
    <meta name="site_name" content="Klinik Sumber Medika">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap-grid.min.css" integrity="sha512-cKoGpmS4czjv58PNt1YTHxg0wUDlctZyp9KUxQpdbAft+XqnyKvDvcGX0QYCgCohQenOuyGSl8l1f7/+axAqyg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
    <header>
        <div class="container">
            <a href="" class="logo">Sumber Medika</a>
            <nav class="nav">
                <ul>
                    <li><a href="#home">home</a></li>
                    <li><a href="#about">about us</a></li>
                    <li><a href="#fasilitas">fasilitas</a></li>
                    <li><a href="#review">review</a></li>
                    <li><a href="#news">news</a></li>
                    <li><a href="#contact">contact</a></li>
                    @guest
                        <li><a href="{{ route('login')}}">login</a></li>
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

    <!-- home section -->
    <section class="home" id="home" style="margin-top: 80px;min-height:100vh">
        <div class="container">
            <div class="row align-items-center text-center text-md-left">
                <div class="col-md-6 pr-md-5" data-aos="zoom-in">
                    <img src="{{ asset('images/Doctors-bro.svg')}}" width="100%" alt="">
                </div>
                <div class="col-md-6 pr-md-5 content" data-aos="fade-left">
                    <h1><span>stay</span> safe, <span>stay</span> healhty.</h1>
                    <h3>caring for you.</h3>
                    <a href="#"><button class="button">learn more</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- endsection home-->

    <!-- about section -->
    <section class="about" id="about" style="min-height:100vh">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 content" data-aos="fade-left">
                    <div class="box">
                        <h3><i class="fas fa-ambulance"></i> ambulance services</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, unde?</p>
                    </div>
                    <div class="box">
                        <h3><i class="fas fa-procedures"></i> emergency rooms</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, unde?</p>
                    </div>
                    <div class="box">
                        <h3><i class="fas fa-stethoscope"></i> free check-ups</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, unde?</p>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block" data-aos="fade-left">
                    <img src="{{ asset('images/medicine-bro.svg')}}" width="100%" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- endsection about -->

    <!-- fasilitas section -->
    <section class="fasilitas" id="fasilitas" style="min-height:100vh">
        <div class="container">
            <h1 class="heading"><span>'</span> Fasilitas Kami <span>'</span></h1>
            <div class="box-container">
                <div class="box" data-aos="zoom-in">
                    <a href="{{ asset('images/lab.jpg')}}" title="Laboratorium">
                        <img src="{{ asset('images/lab.jpg')}}" alt="">
                    </a>
                </div>
                <div class="box" data-aos="zoom-in">
                    <a href="{{ asset('images/lab.jpg')}}" title="Laboratorium">
                        <img src="{{ asset('images/lab.jpg')}}" alt="">
                    </a>
                </div>
                <div class="box" data-aos="zoom-in">
                    <a href="{{ asset('images/lab.jpg')}}" title="Laboratorium">
                        <img src="{{ asset('images/lab.jpg')}}" alt="">
                    </a>
                </div>
                <div class="box" data-aos="zoom-in">
                    <a href="{{ asset('images/lab.jpg')}}" title="Laboratorium">
                        <img src="{{ asset('images/lab.jpg')}}" alt="">
                    </a>
                </div>
                <div class="box" data-aos="zoom-in">
                    <a href="{{ asset('images/lab.jpg')}}" title="Laboratorium">
                        <img src="{{ asset('images/lab.jpg')}}" alt="">
                    </a>
                </div>
                <div class="box" data-aos="zoom-in">
                    <a href="{{ asset('images/lab.jpg')}}" title="Laboratorium">
                        <img src="{{ asset('images/lab.jpg')}}" alt="">
                    </a>
                </div>
                <div class="box" data-aos="zoom-in">
                    <a href="{{ asset('images/lab.jpg')}}" title="Laboratorium">
                        <img src="{{ asset('images/lab.jpg')}}" alt="">
                    </a>
                </div>
                <div class="box" data-aos="zoom-in">
                    <a href="{{ asset('images/lab.jpg')}}" title="Laboratorium">
                        <img src="{{ asset('images/lab.jpg')}}" alt="">
                    </a>
                </div>
                <div class="box" data-aos="zoom-in">
                    <a href="{{ asset('images/lab.jpg')}}" title="Laboratorium">
                        <img src="{{ asset('images/lab.jpg')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- endsection fasilitas -->

    <!-- review section starts  -->

    <section class="review" id="review">
        <div class="container">
            <h1 class="heading"><span>'</span> Review Pasien <span>'</span></h1>
            <div class="box-container">
                    <div class="box" data-aos="fade-right">
                        <p>Klinik yg menyediakan Banyak promo laboratorium, termasuk promo rapid antigen dan Antibody. Jika rapid lebih dari 10 orang, maka akan mendapatkan harga khusus</p>
                        <h3>Chautsar Maulana</h3>
                        <span>jan 5, 2021</span>
                        <img src="{{ asset('images/1.jpg')}}" alt="">
                    </div>
                    <div class="box" data-aos="fade-up">
                        <p>Klinik 24 jam, fasilitas lengkap. Ada laboratorium dan melayani rapid antigen maupun Antibody. Super komplit</p>
                        <h3>Agung</h3>
                        <span>jan 7, 2021</span>
                        <img src="{{ asset('images/2.jpg')}}" alt="">
                    </div>
                    <div class="box" data-aos="fade-left">
                        <p>Pelayanan memuaskan, diperiksa oleh dokter yang berkualitas dan profesional. Sukses selalu Klinik Sumber Medika</p>
                        <h3>Dinda</h3>
                        <span>jan 10, 2021</span>
                        <img src="{{ asset('images/3.jpg')}}" alt="">
                    </div>
                </div>
        </div>
    </section>
    <!-- review section ends  -->

    <!-- post section starts  -->
    <section class="post" id="news" style="min-height: 100vh">
        <div class="container">
            <h1 class="heading"><span>'</span> berita terbaru <span>'</span></h1>
            <div class="box-container">
                <div class="box" data-aos="fade-right">
                    <img src="{{ asset('images/3.jpg')}}" alt="">
                    <div class="content">
                        <span>jan 5, 2021</span>
                        <a href="#"><h3>post title goes here</h3></a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ex porro libero at veniam molestias facere quo necessitatibus ipsum ad?</p>
                        <a href="#"><button class="button">learn more</button></a>
                    </div>
                </div>
                <div class="box" data-aos="fade-up">
                    <img src="{{ asset('images/3.jpg')}}" alt="">
                    <div class="content">
                        <span>jan 5, 2021</span>
                        <a href="#"><h3>post title goes here</h3></a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ex porro libero at veniam molestias facere quo necessitatibus ipsum ad?</p>
                        <a href="#"><button class="button">learn more</button></a>
                    </div>
                </div>
                <div class="box" data-aos="fade-left">
                    <img src="{{ asset('images/3.jpg')}}" alt="">
                    <div class="content">
                        <span>jan 5, 2021</span>
                        <a href="#"><h3>post title goes here</h3></a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ex porro libero at veniam molestias facere quo necessitatibus ipsum ad?</p>
                        <a href="#"><button class="button">learn more</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- post section ends -->

    <!-- footer section starts  -->
    <section class="footer" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4" data-aos="fade-right">
                    <a href="#" class="logo">Sumber Medika</a>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur nemo porro quasi minima consequuntur dolorum, quas amet in autem id?</p>
                </div>
                <div class="col-md-4 text-center" data-aos="fade-up">
                    <h3>links</h3>
                    <a href="#">home</a>
                    <a href="#">about</a>
                    <a href="#">facility</a>
                    <a href="#">review</a>
                    <a href="#">contact</a>
                    <a href="#">post</a>
                </div>
                <div class="col-md-4 text-center" data-aos="fade-left">
                    <h3>contact</h3>
                    <a href="#">facebook</a>
                    <a href="#">twitter</a>
                    <a href="#">instagram</a>
                    <a href="#">github</a>
                </div>
            </div>
        </div>
        <h1 class="credit text-center mx-auto">created by <span>Sumber Medika</span> | all rights reserved.</h1>
    </section>
    <!-- footer section ends -->




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    <script>
        AOS.init({
            duration:1000,
            delay:400
        });
    </script>
</body>
</html>
