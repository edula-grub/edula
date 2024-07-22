@extends('Template.Master')

@section('CSS')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manjari:wght@700&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lovers Quarrel:wght@400&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito Sans:wght@400;600;700&display=swap"/>
    <style>
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
            padding-right: 40px; /* Adjust to accommodate the icon */
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 50px; /* Rounded corners */
            font-size: 16px;
            outline: none;
        }

        .search-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #aaa; /* Optional: change color to fit your design */
        }

        .container {
            background: #fff;
            width: 820px;
            padding: 20px;
            border-radius:20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-height: 100vh;
        }
        .container {
            background: #fff;
            width: 820px;
            height: 400px;
            margin-top: 20px;
            padding: 40px;
            border-radius:20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h4 {
            text-align: center;
            margin-bottom: 10px;
            color: #275FCA;
        }
        .container p {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 300;
            color: #275FCA;
            font-weight: 400;
        }
        .btn-riwayat {
            width: 25%;
            padding: 4px;
            background-color: #FDBA13;
            border: none;
            border-radius: 15px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            align-self: center;
        }
        .link-riwayat{
            text-decoration: none;
            color: white;
            font-weight: 500;
        }
        .img-oke{
            max-width: 90px;
            align-self: center;
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')
    <div>
        <div class="container d-flex flex-column justify-content-center">
            <img class="img-oke d-flex flex-column justify-content-center" src="{{ asset('OkeButton.png') }}" alt="" srcset="">
            <h4>Selamat pembayaran kamu terverifikasi!</h4>
            <p>Kamu dapat menunggu guru yang cocok untukmu, cek status kelasmu di riwayat kelas</p>
            <button class="btn-riwayat align-self-center"><a class="link-riwayat" href="#">Cek Riwayat Kelas</a></button>
        </div>
    </div>
@endsection
