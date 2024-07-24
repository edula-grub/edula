@extends('Template.Master')
@section('CSS')
    <link rel="stylesheet" href="{{ url('/EdulaExport/global.css') }}" />
    <link rel="stylesheet" href="{{ url('/EdulaExport/RiwayatPengajar.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/agus.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manjari:wght@700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lovers Quarrel:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito Sans:wght@400;600;700&display=swap" />

    <style>

    </style>
@endsection

@section('content')
    <div class="riwayat-pengajar">
        <header class="teacher-info2">
            <div class="frame-parent46">
                <div class="profilepicture-parent">
                    <img class="profilepicture-icon1" loading="lazy" alt=""
                        src="{{ url('EdulaExport/public/profilepicture.svg') }}" />
                    <div class="bio">
                        <div class="name-and-rating">
                            <div class="budiman-h-container">
                                <a class="budiman-h1">
                                    {{ session('gurus')->name }}
                                </a>
                            </div>
                            <div class="teaching-hours-and-rating">
                                <div class="rating-stars">
                                    @empty($averageRating)
                                        ☆☆☆☆☆
                                    @else
                                        @for ($i = 0; $i < floor($averageRating); $i++)
                                            <img class="stars-icon10" loading="lazy" alt=""
                                                src="{{ url('EdulaExport/public/star-13.svg') }}" />
                                        @endfor
                                        @if ($averageRating - floor($averageRating) >= 0.5)
                                            ☆
                                        @endif
                                    @endempty
                                </div>
                                <div class="hours-label">
                                    <div class="div">(
                                        {{ count($reviews) }}
                                        )</div>
                                </div>
                                <div class="hours-label1">
                                    <div class="durasi-mengajar-50-container1">
                                        <span>| Durasi mengajar: </span>
                                        <b>
                                            {{-- count total leng of $review --}}
                                            {{ count($reviews) }}
                                            Jam</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="actions2">
                    <div class="action-buttons2">
                        <div class="button3">
                            <a href="{{ url('/UbahProfilPelajar') }}" class="ubah-profil1">Ubah Profil</a>
                        </div>
                        <div class="button4">
                            <a class="keluar1" href="{{ url('/dashboard') }}">Keluar</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <img class="riwayat-pengajar-child" loading="lazy" alt=""
            src="{{ url('EdulaExport/public/line-3.svg') }}" />

        <div class="row justify-content-center">
            <div class="mb-3 col-sm-9">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation" id="idpresentation">
                        <button class="nav-link active" id="deskripsi-tab" data-bs-toggle="tab" data-bs-target="#deskripsi"
                            type="button" role="tab" aria-controls="deskripsi" aria-selected="true">Deskripsi</button>
                    </li>
                    <li class="nav-item" role="presentation" id="idpresentation">
                        <button class="nav-link" id="kelas-terjadwal-tab" data-bs-toggle="tab"
                            data-bs-target="#kelas-terjadwal" type="button" role="tab" aria-controls="kelas-terjadwal"
                            aria-selected="false">Kelas Terjadwal</button>
                    </li>
                    <li class="nav-item" role="presentation" id="idpresentation">
                        <button class="nav-link" id="kelas-selesai-tab" data-bs-toggle="tab" data-bs-target="#kelas-selesai"
                            type="button" role="tab" aria-controls="kelas-selesai" aria-selected="false">Kelas
                            Selesai</button>
                    </li>
                    <li class="nav-item" role="presentation" id="idpresentation">
                        <button class="nav-link" id="sertifikasi-tab" data-bs-toggle="tab" data-bs-target="#sertifikasi"
                            type="button" role="tab" aria-controls="sertifikasi"
                            aria-selected="false">Sertifikasi</button>
                    </li>
                    <li class="nav-item" role="presentation" id="idpresentation">
                        <button class="nav-link" id="rating-ulasan-tab" data-bs-toggle="tab"
                            data-bs-target="#rating-ulasan" type="button" role="tab" aria-controls="rating-ulasan"
                            aria-selected="false">Rating & Ulasan</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content col-sm-9 col-12">
                <div class="col-12 tab-pane fade show active" id="deskripsi" role="tabpanel"
                    aria-labelledby="deskripsi-tab">
                    <div class="container-fluid poinsetpanel col-12">
                        @include('Pengajar/DeskripsiPengajar')
                    </div>
                </div>
                <div class="col-12 tab-pane fade" id="kelas-terjadwal" role="tabpanel"
                    aria-labelledby="kelas-terjadwal-tab">
                    <div class="container-fluid poinsetpanel col-12">
                        <p class="mt-3">Konten Kelas Terjadwal</p>
                    </div>
                </div>
                <div class="col-12 tab-pane fade" id="kelas-selesai" role="tabpanel"
                    aria-labelledby="kelas-selesai-tab">
                    <div class="container-fluid poinsetpanel col-12">
                        <p class="mt-3">Konten Kelas Selesai</p>
                    </div>
                </div>
                <div class="col-12 tab-pane fade" id="sertifikasi" role="tabpanel" aria-labelledby="sertifikasi-tab">
                    <div class="container-fluid poinsetpanel col-12">
                        @include('Pengajar/SertifikasiPengajar')
                    </div>
                </div>
                <div class="col-12 tab-pane fade" id="rating-ulasan" role="tabpanel"
                    aria-labelledby="rating-ulasan-tab">
                    <div class="container-fluid poinsetpanel col-12">
                        @include('Pengajar/ratingPengajar')
                        @include('Pengajar.reviewPengajar')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('JS')
    {{-- http://localhost:8000/DetailPengajar#idpresentation if detect like this target nav-tab dengan id idpresentation lalu click --}}
    <script>
        $(document).ready(function() {
            if (window.location.hash) {
                var hash = window.location.hash;
                console.log(hash);
                document.getElementById(hash.replace('#', '')).click();
            }
        });
    </script>
@endsection
