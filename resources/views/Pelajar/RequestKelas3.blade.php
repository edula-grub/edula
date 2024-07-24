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
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            background-color: #ffffff;
        }

        .container {
            background: #fff;
            width: 820px;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-height: 100vh;
        }

        /* form {
                                                                                                                                                                                    width: 500px;
                                                                                                                                                                                    margin: 0 auto;
                                                                                                                                                                                    padding: 20px;
                                                                                                                                                                                    border: 1px solid #ccc;
                                                                                                                                                                                } */

        h4 {
            text-align: center;
            margin-bottom: 20px;
            color: #275FCA;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #275FCA;
            font-weight: 600;
        }

        select,
        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
            /* font-family: sans-serif; */
        }

        textarea {
            height: 100px;
        }

        .btn-lanjut {
            background-color: #FDBA13;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            display: block;
            margin-top: 15px;
            width: 28%;
            font-weight: 700;
            font-size: 16px;
        }
    </style>
@endsection

@section('content')
    <div class="container ">
        <form action="#" class="row" method="POST">
            @csrf
            <div class="col-12">
                <h4>Kamu mau belajar apa?</h4>
            </div>
            <div class="col-8">
                <label for="pelajaran">Pelajaran yang kamu ingin pelajari:</label>
                <input type="text" name="pelajaran" id="pelajaran">
            </div>
            <div class="col-4">
                <label for="jenjang">Pilih jenjang:</label>
                <select name="jenjang" id="jenjang">
                    <option value="sd">SD</option>
                    <option value="smp">SMP</option>
                    <option value="sma">SMA</option>
                    <option value="kuliah">Kuliah</option>
                    <option value="umum">Umum</option>
                </select>
            </div>
            <div class="col-8">
                <label for="deskripsi">Deskripsikan pelajaran tersebut lebih detail:</label>
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
            </div>
            <div class="col-4 card">
                <h1 class="alert-primary">error</h1>
            </div>
            <div class="col-8">
                <label for="harga">Tentukan harga yang sesuai:</label>
                <input type="price" name="harga" id="harga">
            </div>
            <div class="col-9"></div>
            <div class="col-3">
                <button type="submit" class="btn btn-warning text-light">Lanjut Pembayaran</button>
            </div>
        </form>
    </div>
@endsection
