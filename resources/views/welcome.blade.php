@extends('layouts.app')

@section('title','KLINIK PRATAMA 24 JAM SUMBER MEDIKA MRANGGEN')
@section('content')
    <!-- home section -->
    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center text-center text-md-left">
                <div class="col-md-6 pr-md-5" data-aos="zoom-in">
                    <img src="{{ asset('images/Doctors-bro.svg')}}" width="100%" alt="">
                </div>
                <div class="col-md-6 pr-md-5 content" data-aos="fade-left">
                    <h1><span>Stay</span> Safe, <span>Stay</span> Healhty.</h1>
                    <h3>Caring For You.</h3>
                    <a href="#"><button class="button">Learn More</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- endsection home-->

    <!-- about section -->
    <section class="about" id="about">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="col-md-6 content" data-aos="fade-left">
                    <div class="box">
                        <h3><i class="fas fa-user-md"></i> Professional Doctor</h3>
                        <p>Kami memiliki dokter yang baik dan sangat profesional dalam penanganan pasien</p>
                    </div>
                    <div class="box">
                        <h3><i class="fas fa-procedures"></i> Emergency Rooms</h3>
                        <p>Kami memiliki ruang gawat darurat yang dibutuhkan untuk penanganan cepat</p>
                    </div>
                    <div class="box">
                        <h3><i class="fas fa-stethoscope"></i> Free Check-ups</h3>
                        <p>Gratis konsultasi dan check-up dalam masalah kesehatan</p>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block" data-aos="fade-left">
                    <img src="{{ asset('images/Medicine-bro.svg')}}" width="100%" alt="">
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
                    <a href="{{ asset('images/lab.jpeg')}}" title="Laboratorium">
                        <img src="{{ asset('images/lab.jpeg')}}" alt="">
                    </a>
                </div>
                <div class="box" data-aos="zoom-in">
                    <a href="{{ asset('images/ruang-periksa.jpeg')}}" title="Ruang Periksa">
                        <img src="{{ asset('images/ruang-periksa.jpeg')}}" alt="">
                    </a>
                </div>
                <div class="box" data-aos="zoom-in">
                    <a href="{{ asset('images/ruang-tunggu.jpeg')}}" title="Ruang Tunggu">
                        <img src="{{ asset('images/ruang-tunggu.jpeg')}}" alt="">
                    </a>
                </div>
                <div class="box" data-aos="zoom-in">
                    <a href="{{ asset('images/checkup.jpeg')}}" title="Check Up">
                        <img src="{{ asset('images/checkup.jpeg')}}" alt="">
                    </a>
                </div>
                <div class="box" data-aos="zoom-in">
                    <a href="{{ asset('images/halaman-depan.jpeg')}}" title="Halaman Depan">
                        <img src="{{ asset('images/halaman-depan.jpeg')}}" alt="">
                    </a>
                </div>
                <div class="box" data-aos="zoom-in">
                    <a href="{{ asset('images/fasilitas.jpeg')}}" title="Fasilitas">
                        <img src="{{ asset('images/fasilitas.jpeg')}}" alt="">
                    </a>
                </div>
                <div class="box" data-aos="zoom-in">
                    <a href="{{ asset('images/konsultasi.jpeg')}}" title="Konsultasi">
                        <img src="{{ asset('images/konsultasi.jpeg')}}" alt="">
                    </a>
                </div>
                <div class="box" data-aos="zoom-in">
                    <a href="{{ asset('images/pendaftaran.jpeg')}}" title="Pendaftaran">
                        <img src="{{ asset('images/pendaftaran.jpeg')}}" alt="">
                    </a>
                </div>
                <div class="box" data-aos="zoom-in">
                    <a href="{{ asset('images/jam-praktek.jpeg')}}" title="Jam Praktek">
                        <img src="{{ asset('images/jam-praktek.jpeg')}}" alt="">
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
            <h1 class="heading"><span>'</span> Berita Terbaru <span>'</span></h1>
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
@endsection
