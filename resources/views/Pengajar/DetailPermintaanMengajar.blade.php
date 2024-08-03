@extends('Template.Master')

@section('CSS')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manjari:wght@700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lovers Quarrel:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito Sans:wght@400;600;700&display=swap" />
    <style>
        body {
            display: flex;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            background-color: #ffffff;
        }

        .search {
            display: flex;
            justify-content: center !important;
            align-content: center !important;
            align-self: center !important;
        }

        .search-container {
            position: relative;
            width: 100%;
            max-width: 600px;
        }

        #search-input {
            width: 100%;
            padding: 10px 20px;
            padding-right: 40px;
            /* Adjust to accommodate the icon */
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 50px;
            /* Rounded corners */
            font-size: 16px;
            outline: none;
        }

        .search-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #aaa;
            /* Optional: change color to fit your design */
        }

        .container {
            background: #fff;
            width: 820px;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-height: 100vh;
        }

        .container {
            background: #fff;
            width: 820px;
            height: 400px;
            margin-top: 20px;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .img-pelajar {
            max-width: 200px;
            max-height: 800px;
            flex-direction: row;
            border-radius: 60px;
            margin-top: 10px;
            align-self: center !important;
            margin-bottom: 10px;
            display: flex;
            justify-content: center !important;
            align-content: center !important;

        }

        .price {
            margin-bottom: 0px !important;
            font-weight: 700;
            color: #FF0000;
            font-size: larger;
        }

        .row {
            margin-right: 0px;
            margin-left: 0px;
        }

        .name,
        .mapel,
        .tanggal,
        .desc,
        .jenjang {
            font-weight: 400;
            color: #696984;
            font-size: 14px;
        }

        button {
            border: none;
            border-radius: 30px;
            box-sizing: 20px;
        }

        .btn-batal {
            margin-right: 20px;
            background-color: #DADADA;
            color: black;
            font-weight: 500;
        }

        .btn-terima {
            background-color: #275FCA;
            color: white;
            font-weight: 500;
        }
    </style>
@endsection

@section('content')
    <h1 class="text-center mt-4 mb-3">Detail Permintaan Mengajar</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex align-self-center">
                <div class="row d-flex justify-content-center">
                    <img class="col-md-12 img-pelajar" src="{{ asset('storage/mask-group-8@2x.png') }}" alt=""
                        srcset="">
                    <p class="price d-flex justify-content-center">Rp 100.000</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <h5 class="mapel-title d-flex justify-content-center mb-3">MATEMATIKA WAJIB</h5>
                    <div class="row">
                        <h6 class="title-name col-md-4">Nama</h6>
                        <h6 class="name col-md-8">Budiman Susanto</h6>
                    </div>
                    <div class="row">
                        <h6 class="title-mapel col-md-4">Mata Pelajaran</h6>
                        <h6 class="mapel col-md-8">Matematika Peminatan</h6>
                    </div>
                    <div class="row">
                        <h6 class="title-tgl col-md-4">Tanggal Pertemuan</h6>
                        <h6 class="tanggal col-md-8">12 July 2023</h6>
                    </div>
                    <div class="row">
                        <h6 class="title-jenjang col-md-4">Jenjang</h6>
                        <h6 class="jenjang col-md-8">SMA</h6>
                    </div>
                    <div class="row">
                        <h6 class="title-desc col-md-4">Deskripsi</h6>
                        <h6 class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident nulla
                            aspernatur voluptatum! Rem, fugiat ut nulla ullam expedita eum minima, provident vero ex ab
                            cumque, beatae quos adipisci aut magnam.</h6>
                    </div>
                    <div class="row justify-content-end">
                        <button class="btn-batal col-md-2">
                            Batal
                        </button>
                        <a class="btn btn-terima col-md-2">
                            Terima
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
