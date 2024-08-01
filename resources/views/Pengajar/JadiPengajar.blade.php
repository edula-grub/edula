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

        body {
            /* font-family: Arial, sans-serif; */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            background-color: #ffffff;
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

        .containers {
            background: #fff;
            width: 100%;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 100%;
        }

        .containers h4 {
            text-align: start;
            /* margin-bottom: 10px; */
            color: #275FCA;
        }

        .containers p {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 300;
            color: #275FCA;
            font-weight: 400;
        }

        .btn-riwayat {
            width: 10%;
            padding: 4px;
            background-color: #FDBA13;
            border: none;
            border-radius: 15px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            align-self: center;
        }

        .link-riwayat {
            text-decoration: none;
            color: white;
            font-weight: 500;
        }
    </style>
@endsection

@section('content')
    @include('components.navbar')
    <form method="POST">
        @csrf
        <div class="containers d-flex flex-column justify-content-center">
            <h4>Deskripsikan Pengalaman Anda</h4>
            <textarea name="portofolio" id="deskripsi" rows="15" placeholder="Deskripsi"
                style="margin-bottom: 10px; border-radius: 10px; padding: 5px;"></textarea>
            <button type="submit" class="btn-riwayat align-self-end">Kirim</button>
        </div>
    </form>
@endsection
