@extends('Template.Master')

@section('CSS')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manjari:wght@700&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lovers Quarrel:wght@400&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito Sans:wght@400;600;700&display=swap"/>
    <style>
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
        .container h2 {
            text-align: center;
            margin-bottom: 40px;
        }
        .container h5 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 300;
        }
        .btn-disini {
            width: 15%;
            padding: 4px;
            background-color: #007bff;
            border: none;
            border-radius: 20px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            align-self: center;
        }
        .link-disini{
            text-decoration: none;
            color: white;
        }
    </style>
@endsection

@section('content')
    <div class="search m-auto d-flex align-self-center mt-3">
        <div class="search-container">
            <input type="text" id="search-input" placeholder="Cari">
            <span class="search-icon">&#128269;</span>
        </div>
        <div class="dropdown">
            <img src="" alt="" sizes="" srcset="">
            <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 20px; width: 100px">
                Filter
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">SD</a></li>
              <li><a class="dropdown-item" href="#">SMP</a></li>
              <li><a class="dropdown-item" href="#">SMA</a></li>
              <li><a class="dropdown-item" href="#">Kuliah</a></li>
              <li><a class="dropdown-item" href="#">Umum</a></li>
            </ul>
        </div>
    </div>
    <div>
        <div class="container d-flex flex-column justify-content-center">
            <h2>Jadwal Pertemuan Sudah Terkirim</h1>
            <h5>Lihat Kelas Terjadwalmu</h5>
            <button class="btn-disini align-self-center"><a class="link-disini" href="#">Di sini</a></button>
        </div>
    </div>
@endsection

