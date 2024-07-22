@extends('Template.Master')

@section('CSS')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manjari:wght@700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lovers Quarrel:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito Sans:wght@400;600;700&display=swap" />
    <link rel="stylesheet" href="{{ asset('css/GlobalRequestKelas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/RequestKelas.css') }}">
@endsection

@section('content')

    <body>
        <div class="request-kelas-pelajar">
            <div class="request-kelas-pelajar-child"></div>
            <div class="ellipse-parent3">
                <div class="frame-child104"></div>
                <div class="frame-child105"></div>
                <div class="frame-child106"></div>
                <img class="undraw-online-learning-re-qw08-icon2" loading="lazy" alt=""
                    src="{{ asset('./EdulaExport/public/undraw-online-learning-re-qw08-1.svg') }}" />
            </div>
            <div class="header-parent">
                <div class="header3">
                    <div class="request-info1">
                        <h1 class="request-kelas-head">Request Kelas</h1>
                        <p class="req-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                            in imperdiet erat. Maecenas ut nisi tellus.
                        </p>
                    </div>
                    <button onclick="window.location.href = '{{ '#' }}';" class="request-button">
                        <b class="request-kelas1">Request Kelas</b>
                    </button>
                </div>
            </div>
        </div>
    </body>
@endsection
