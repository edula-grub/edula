@extends('Template.Master')
@section('CSS')
    <link rel="stylesheet" href="{{ url('/EdulaExport/global.css') }}" />
    <link rel="stylesheet" href="{{ url('/EdulaExport/RiwayatPengajar.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manjari:wght@700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lovers Quarrel:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito Sans:wght@400;600;700&display=swap" />
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
                                <a class="budiman-h1">Budiman H</a>
                            </div>
                            <div class="teaching-hours-and-rating">
                                <div class="rating-stars">
                                    <img class="stars-icon10" loading="lazy" alt=""
                                        src="{{ url('EdulaExport/public/star-13.svg') }}" />

                                    <img class="stars-icon11" loading="lazy" alt=""
                                        src="{{ url('EdulaExport/public/star-13.svg') }}" />

                                    <img class="stars-icon12" loading="lazy" alt=""
                                        src="{{ url('EdulaExport/public/star-13.svg') }}" />

                                    <img class="stars-icon13" loading="lazy" alt=""
                                        src="{{ url('EdulaExport/public/star-13.svg') }}" />

                                    <img class="stars-icon14" loading="lazy" alt=""
                                        src="{{ url('EdulaExport/public/star-13.svg') }}" />
                                </div>
                                <div class="hours-label">
                                    <div class="div">(300)</div>
                                </div>
                                <div class="hours-label1">
                                    <div class="durasi-mengajar-50-container1">
                                        <span>| Durasi mengajar: </span>
                                        <b>50 Jam</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="actions2">
                    <div class="action-buttons2">
                        <div class="button3">
                            <div class="ubah-profil1">Ubah Profil</div>
                        </div>
                        <div class="button4">
                            <div class="keluar1">Keluar</div>
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
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="deskripsi-tab" data-bs-toggle="tab" data-bs-target="#deskripsi"
                            type="button" role="tab" aria-controls="deskripsi" aria-selected="true">Deskripsi</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="kelas-terjadwal-tab" data-bs-toggle="tab"
                            data-bs-target="#kelas-terjadwal" type="button" role="tab" aria-controls="kelas-terjadwal"
                            aria-selected="false">Kelas Terjadwal</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="kelas-selesai-tab" data-bs-toggle="tab" data-bs-target="#kelas-selesai"
                            type="button" role="tab" aria-controls="kelas-selesai" aria-selected="false">Kelas
                            Selesai</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="sertifikasi-tab" data-bs-toggle="tab" data-bs-target="#sertifikasi"
                            type="button" role="tab" aria-controls="sertifikasi"
                            aria-selected="false">Sertifikasi</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="rating-ulasan-tab" data-bs-toggle="tab"
                            data-bs-target="#rating-ulasan" type="button" role="tab" aria-controls="rating-ulasan"
                            aria-selected="false">Rating & Ulasan</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content col-sm-10 col-12">
                <div class="col-12 tab-pane fade show active" id="deskripsi" role="tabpanel"
                    aria-labelledby="deskripsi-tab">
                    <div class="container-fluid poinsetpanel col-12">
                        @include('Pengajar/DeskripsiPengajar')
                    </div>
                </div>
                <div class="col-12 tab-pane fade" id="kelas-terjadwal" role="tabpanel"
                    aria-labelledby="kelas-terjadwal-tab">
                    <div class="container-fluid poinsetpanel col-12">
                        <div class="kotak">
                            <div class="kotakimg">
                                <img src="{{ url('EdulaExport/public/ellipse-70@2x.png') }}" alt="">
                            </div>
                            <div class="kotakisi">
                                <h5>Calculus Dasar Anak Kuliah semester 1</h5>
                                <p>Sabtu, 21 Juni 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 tab-pane fade" id="kelas-selesai" role="tabpanel"
                    aria-labelledby="kelas-selesai-tab">
                    <div class="container-fluid poinsetpanel col-12">
                        <div class="kotak">
                            <div class="kotakimg">
                                <img src="{{ url('EdulaExport/public/ellipse-70@2x.png') }}" alt="">
                            </div>
                            <div class="kotakisi">
                                <h5>Calculus Dasar Anak Kuliah semester 1</h5>
                                <p>Sabtu, 21 Juni 2024</p>
                            </div>
                            <div class="kotakbutton">
                                <button class="statusbutton">Lunas</button>
                            </div>
                        </div>
                        <!-- KOTAK UNTUK PELAJAR KELAS SELESAI -->
                        <div class="kotak">
                            <div class="kotakimg">
                                <img src="{{ url('EdulaExport/public/ellipse-70@2x.png') }}" alt="">
                            </div>
                            <div class="kotakisi">
                                <h5>Calculus Dasar Anak Kuliah semester 1</h5>
                                <p>Sabtu, 21 Juni 2024</p>
                            </div>
                            <div class="kotakbutton">
                                <button class="statusbutton">Selesai</button>
                            </div>
                        </div>
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
    @endsection

    @section('JS')
    @endsection
