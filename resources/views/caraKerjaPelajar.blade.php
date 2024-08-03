@extends('layouts.app')

@include('components.navbarPelajar')
@section('content')
    <!-- Bagian content -->
    <div class="mw-100 container pt-5">
        <div class="d-flex justify-content-center my-5 pt-5">
            <h1 class="fw-semibold text-primary">Cara Request Kelas di Edula</h1>
        </div>

        <div>
            <!-- Step 1 -->
            <div class="my-2">
                <div class="row">
                    <div class="col text-center">
                        <img src="{{ asset('./img/Step1Icon.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col d-flex align-items-center justify-content-start">
                        <div class="text-start" alt="Step">
                            <h2 class="text-primary fw-semibold">Step 01</h2>
                            <p class="col-9">Pelajar dapat membuat permintaan kelas dengan memilih tanggal
                                dan jam yang diinginkan untuk les. Pastikan memilih waktu yang sesuai
                                dengan jadwal pelajar.?</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="my-2">
                <div class="row">
                    <div class="col d-flex align-items-center justify-content-end">
                        <div class="text-end" alt="Step">
                            <h2 class="text-primary fw-semibold">Step 02</h2>
                            <p class="col-9 offset-3">Pelajar perlu mengisi deskripsi terkait pelajaran yang
                                ingin dipelajari. Ini termasuk nama pelajaran, deskripsi singkat tentang apa
                                yang ingin dipelajari, harga yang diinginkan, serta jenjang pendidikan yang relevan.</p>
                        </div>
                    </div>

                    <div class="col text-center">
                        <img src="{{ asset('./img/Step2Icon.png') }}" alt="">
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="my-2">
                <div class="row">
                    <div class="col text-center">
                        <img src="{{ asset('./img/step3Icon.png') }}" alt="">
                    </div>

                    <div class="col d-flex align-items-center justify-content-start">
                        <div class="text-start" alt="Step">
                            <h2 class="text-primary fw-semibold">Step 03</h2>
                            <p class="col-9">Setelah mengisi deskripsi, pelajar harus memilih metode pembayaran yang
                                tersedia. Lakukan pembayaran sesuai dengan metode yang dipilih untuk menyelesaikan
                                proses pendaftaran.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="my-2">
                <div class="row">
                    <div class="col d-flex align-items-center justify-content-end">
                        <div class="text-end" alt="Step">
                            <h2 class="text-primary fw-semibold">Step 04 </h2>
                            <p class="col-9 offset-3">Setelah pengajar menerima permintaan pelajar, sesi les akan dilakukan
                                melalui Zoom pada waktu yang telah ditentukan. Pastikan pelajar siap untuk mengikuti sesi
                                pada waktu yang telah disepakati.</p>
                        </div>
                    </div>

                    <div class="col text-center">
                        <img src="{{ asset('./img/step4Icon.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-info-subtle d-flex justify-content-center py-5">
        <div class="row">
            <div class="col-12">
                <div class="banner">
                    <div class="banner-content">
                        <h1 class="fw-semibold text-primary">Ayo, request kelas sekarang!</h1>
                        <p>Dapatkan Pengajar yang kompeten dan terampil untuk membantu kesulitanmu.</p>
                        <a href="{{ url('/ReqPelajaran') }}" class="btn btn-warning fw-semibold text-white">Request
                            Kelas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
