@extends('layouts.app')

@section('content')
    @include('components.navbarPengajar')
    <!-- Bagian content -->
    <div class="mw-100 container pt-5">
        <div class="d-flex justify-content-center my-5 pt-5">
            <h1 class="fw-semibold text-primary">Cara Ambil Requestan Kelas di Edula</h1>
        </div>

        <div style="margin-bottom: 100px">
            <!-- Step 1 -->
            <div class="my-2">
                <div class="row">
                    <div class="col text-center">
                        <img src="{{ asset('./img/Cara1Pengajar.png') }}" alt="">
                    </div>

                    <div class="col d-flex align-items-center justify-content-start">
                        <div class="text-start" alt="Step">
                            <h2 class="text-primary fw-semibold">Step 01</h2>
                            <p class="col-9">Pengajar dapat melihat daftar pelajar yang sedang membutuhkan bantuan dan
                                memilih yang paling sesuai dengan kriteria atau keahlian mereka. Pastikan untuk
                                mempertimbangkan berbagai faktor, seperti topik pelajaran yang dibutuhkan dan
                                waktu yang sesuai.</p>
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
                            <p class="col-9 offset-3">Setelah memilih pelajar, pengajar perlu mengisi formulir dengan
                                tanggal dan waktu yang diusulkan untuk sesi les. Pastikan tanggal dan waktu yang dipilih
                                sesuai dengan ketersediaan pengajar. Dalam formulir ini juga, pengajar harus mencantumkan
                                link Zoom untuk pertemuan yang akan dilakukan.</p>
                        </div>
                    </div>

                    <div class="col text-center">
                        <img src="{{ asset('./img/Cara2Pengajar.png') }}" alt="">
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="my-2">
                <div class="row">
                    <div class="col text-center">
                        <img src="{{ asset('./img/Cara3Pengajar.png') }}" alt="">
                    </div>

                    <div class="col d-flex align-items-center justify-content-start">
                        <div class="text-start" alt="Step">
                            <h2 class="text-primary fw-semibold">Step 03</h2>
                            <p class="col-9">Setelah mengisi formulir, pengajar akan menerima notifikasi untuk
                                mengonfirmasi jadwal yang diusulkan. Pengajar hanya perlu mengonfirmasi jadwal tersebut
                                tanpa perlu persetujuan tambahan dari pelajar.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="my-2">
                <div class="row">
                    <div class="col d-flex align-items-center justify-content-end">
                        <div class="text-end" alt="Step">
                            <h2 class="text-primary fw-semibold">Step 04</h2>
                            <p class="col-9 offset-3">Setelah jadwal dikonfirmasi, siap-siaplah untuk sesi les melalui Zoom
                                pada waktu yang telah disepakati. Pastikan semua peralatan, seperti komputer, kamera, dan
                                mikrofon, berfungsi dengan baik. Juga, pastikan link Zoom yang telah dicantumkan dalam
                                formulir bisa diakses dengan mudah oleh pelajar.</p>
                        </div>
                    </div>

                    <div class="col text-center">
                        <img src="{{ asset('./img/Cara4Pengajar.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
@endsection
