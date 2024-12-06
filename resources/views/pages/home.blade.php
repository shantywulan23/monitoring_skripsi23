@extends('layouts.home')

@section('content')
    <section id="home" class="slider_area">
        <div id="carouselThree" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <div class="logo-container d-flex justify-content-center align-items-center mb-3">
                                        {{-- <img src="{{ url('logounmus.png') }}" alt="Logo 1" width="140"
                                            style="margin-right: auto"> --}}
                                        {{-- <img src="{{ url('frontend/assets/images/logo2.png') }}" alt="Logo 2"
                                            width="100"> --}}
                                    </div>
                                    <h1 class="title">SI Bimbingan Skripsi </h1>
                                    <p class="text">Sistem Informasi Bimbingan Skripsi Sebagai Platform Untuk Mempermudah
                                        Mahasiswa Dalam Melakukan Bimbingan Skripsi Menuju Seminar Hasil</p>
                                    <h3 class="text">Tugas Kelompok 7 UAS Pengembangan Aplikasi Berbasis Website</h3>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="{{ url('frontend/assets/images/slider/1.png') }}" alt="Hero" width="1000">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->
            </div>
        </div>
    </section>
@endsection
