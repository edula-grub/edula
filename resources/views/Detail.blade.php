{{-- @dd($Detail); --}}
@extends('Template.Master')
@section('CSS')
    <link rel="stylesheet" href="{{ url('/EdulaExport/global.css') }}" />
    <link rel="stylesheet" href="{{ url('/EdulaExport/DetailKelasPelajar1.css') }}" />
    <link rel="stylesheet" href="{{ url('/EdulaExport/SertifikasiPortofolio.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manjari:wght@700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lovers Quarrel:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito Sans:wght@400;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    {{-- <script src="{{ url('/EdulaExport/script.js') }}"></script> --}}
    <style>
        .stars i {
            color: #e6e6e6;
            font-size: 35px;
            cursor: pointer;
            transition: color 0.2s ease;
        }

        .stars i.active {
            color: #FFD700;
        }
    </style>
@endsection

@section('content')
    <main class="frame-main" style="margin-top: 10dvh">
        {{-- @dump($Detail) --}}
        <div class="class-details4">
            <p class="cek-riwayat-container1">
                <span>Cek Riwayat > Kelas Terjadwal ></span>
                <span class="calculus-dasar-anak8">
                    {{ $Detail->nama_mapel }}
                </span>
            </p>
        </div>
        <hr class="col-12">

        <section class="class-info3">
            <div class="class-card row">

                <div class="card-content1 col-8">
                    {{-- tiitle data for task --}}
                    <div class="class-title1">
                        <img class="icon-mapel3" loading="lazy" alt=""
                            src="{{ url('EdulaExport/public/icon-mapel1.svg') }}">
                        <div class="class-name1">
                            <div class="class-name-price">
                                <div class="code-algoritma-dasar1">
                                    {{ $Detail->nama_mapel }}
                                </div>
                                <div class="sabtu-21-juni8">
                                    @php
                                        $hari = date('l', strtotime($Detail->jadwal));
                                        $tanggal = date('d F Y', strtotime($Detail->jadwal));
                                        echo $hari . ', ' . $tanggal;
                                    @endphp
                                </div>
                                <b class="rp-1000001">
                                    Rp. {{ $Detail->harga_bider_terpilih }}
                                </b>
                                <div class="button24">
                                    <div class="kuliah1">
                                        {{ $Detail->jenjang_pendidikan }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- taask deskripsion --}}
                    <div class="description2">
                        <div class="deskripsi-pelajaran-group">
                            <div class="deskripsi-pelajaran2">Deskripsi Pelajaran</div>
                            <p class="lorem-ipsum-dolor21">
                                {{ $Detail->deskripsi_kebutuhan }}
                            </p>
                        </div>
                    </div>
                    {{-- separator doang --}}
                    <div class="separator1">
                        <hr class="col-12">
                    </div>
                    @if (!empty($Detail->zoomlink))
                        {{-- info paaymend and class triger --}}
                        <div class="payment-details1">
                            <div class="payment-info1">
                                <div class="payment-date1">
                                    <div class="pembayaran1">Pembayaran</div>
                                    <p class="transfer-bank-1">Transfer Bank - BCA</p>
                                    <p class="kamis-19-juni1">Kamis, 19 Juni 2023</p>
                                </div>
                                <div class="zoom-link1">
                                    <div class="tautan-zoom2">Tautan Zoom</div>
                                    <a href="{{ $Detail->zoomlink }}" class="zoom-link-1" target="_blank">
                                        JOIN NOW
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                @if ($Detail->status != 'DONE')
                                    <form action="{{ route('form-review') }}" method="POST">
                                        <input type="hidden" name="id" value="{{ $Detail->BRID }}">
                                        @csrf
                                        <div class="rating-box" style="position: relative;">
                                            <header>Bagaimana pengalaman Anda?</header>
                                            <div class="stars d-flex align-items-center my-3" style="gap: 25px">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <input type="hidden" name="rating_siswa_ke_guru" id="rating" value="0">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputMataPelajaran" class="form-label">Mata Pelajaran</label>
                                            <input type="text" class="form-control" id="exampleInputMataPelajaran"
                                                aria-describedby="emailHelp" name="nama_mapel"
                                                value="{{ $Detail->nama_mapel }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputUlasan" class="form-label">Ulasan</label>
                                            <textarea name="komen_siswa_ke_guru" id="exampleInputUlasan" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    @endif

                    @session('gurus')
                        <div class="payment-details1">
                            <div class="payment-info1">
                                <div class="payment-date1">
                                    <h2>Tertarik mengajarkan Dia?</h1>
                                        @php
                                            $isExist = false;
                                            foreach ($reqlist as $key => $item) {
                                                if ($item->id == session('gurus')->id) {
                                                    $isExist = true;
                                                    break;
                                                }
                                            }
                                        @endphp
                                        @if (!$isExist)
                                            <a href="/Rom/setpo?s={{ $Detail->BRID }}&harga={{ $Detail->harga_bider_terpilih }}"
                                                class="col-12 btn btn-primary">Ambil Kelas</a>
                                        @else
                                            <div class="alert alert-warning" role="alert">
                                                Anda sudah mengajukan diri untuk mengajar
                                            </div>
                                        @endif
                                </div>
                            </div>
                        </div>
                    @endsession
                </div>

                <div class="col-4 Pengajar secmen1 row align-items-center">
                    <div class="col-12">
                        PENGAJARMU
                    </div>
                    @empty($reqlist)
                    @else
                        @foreach ($reqlist as $key => $item)
                            <div class="my-2 col-9 teacher-info5">
                                <div class="teacher-profile">
                                    <img class="profilepicture-icon11" loading="lazy" alt=""
                                        src="{{ url('EdulaExport/public/profilepicture-1.svg') }}">
                                    <div class="teacher-name">
                                        <div class="teacher-name-rating">
                                            <div class="budiman-h7">{{ $item->name }}</div>
                                            <div class="rating-experience">
                                                <div class="star-rating">
                                                    @empty($item->averageRating)
                                                    @else
                                                        @php
                                                            $star = ($key % 2) + 3;
                                                        @endphp
                                                        @for ($a = 0; $a < $star; $a++)
                                                            <img class="star-rating-child" loading="lazy" alt=""
                                                                src="{{ url('EdulaExport/public/star-81.svg') }}">
                                                        @endfor
                                                    @endempty
                                                </div>
                                                <div class="blank">({{ $item->totalReviews }})</div>
                                            </div>
                                            <div class="total-durasi-mengajar-container4">
                                                <span>Total Durasi Mengajar: </span>
                                                <span class="jam4">{{ $jam = $item->totalReviews }} Jam</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                {{-- if zoomlink ga ada --}}
                                @empty($Detail->zoomlink)
                                    @empty(!session('siswa'))
                                        @if ($Detail->siswa_id == session('siswa')->id)
                                            <a href="/Rom/approve?s={{ $Detail->BRID }}&g={{ $item->guru_id }}"
                                                class="btn btn-warning">
                                                Terima
                                            </a>
                                        @endif
                                    @endempty
                                @endempty
                            </div>
                        @endforeach
                    @endempty

                </div>
            </div>
        </section>
    </main>
@endsection

@section('JS')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.stars i');
            const ratingInput = document.getElementById('rating');

            stars.forEach((star, index1) => {
                star.addEventListener("click", () => {
                    let ratingValue = index1 + 1;
                    ratingInput.value = ratingValue;

                    stars.forEach((star, index2) => {
                        if (index1 >= index2) {
                            star.classList.add('active');
                        } else {
                            star.classList.remove('active');
                        }
                    });
                });
            });
        });
    </script>
@endsection
