@extends('Template.Master')

@section('CSS')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manjari:wght@700&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lovers Quarrel:wght@400&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito Sans:wght@400;600;700&display=swap"/>
    <style>
        body {
            background-color: #ffffff;
            margin: 0;
            padding: 0;
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
            width: 60%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .header input[type="text"] {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .filter-btn {
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .card {
            display: flex;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        .profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 10px;
            margin-right: 20px;
        }

        .details {
            flex: 1;
        }

        .details h2 {
            margin-top: 0;
        }

        .price-rating {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 10px 0;
        }

        .price {
            color: red;
            font-size: 1.5em;
        }

        .rating {
            color: gold;
            font-size: 1.5em;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
        }

        .cancel-btn, .accept-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .cancel-btn {
            background-color: #ccc;
        }

        .accept-btn {
            background-color: #007bff;
            color: #fff;
        }
    </style>
@endsection

@section('content')
    <body>
        <div class="search-container mt-2 m-auto d-flex justify-content-between">
            <input type="text" id="search-input" placeholder="Cari">
            <span class="search-icon">&#128269;</span>
        </div>
        <div class="container">
            <h1>Detail Permintaan Mengajar</h1>
            <div class="card">
                <img src="cat.jpg" alt="Profile Picture" class="profile-pic">
                <div class="details">
                    <h2>MATEMATIKA WAJIB</h2>
                    <p><strong>Nama:</strong> Budiman Susanto</p>
                    <p><strong>Mata Pelajaran:</strong> Kalkulus</p>
                    <p><strong>Tanggal/Jam Pertemuan:</strong> 20 Mei 2020 | 18:00-19:00</p>
                    <p><strong>Jenjang:</strong> Kuliah Semester 1</p>
                    <p><strong>Deskripsi Pelajaran:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna fermentum iaculis eu non. Enim blandit volutpat maecenas volutpat blandit aliquam etiam erat velit. Porta nibh venenatis cras sed felis eget velit aliquet sagittis.</p>
                    <div class="price-rating">
                        <span class="price">Rp. 150,000</span>
                        <span class="rating">★★★★★</span>
                    </div>
                    <div class="buttons">
                        <button class="cancel-btn">Batal</button>
                        <button class="accept-btn">Terima</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
