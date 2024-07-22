@extends('Template.Master')

@section('CSS')

<style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manjari:wght@700&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lovers Quarrel:wght@400&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito Sans:wght@400;600;700&display=swap"/>
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
    .header h1 {
        margin: 0;
        color: #1A73E8;
    }

    .header p {
        margin-top: 10px;
        margin-bottom: 10%;
        color: #666;
    }
    .container {
        background: #fff;
        max-height: 100vh;
        margin-top: 30vh;
    }
    .back-button {
        background-color: #E6E8E7;
        border: none;
        border-radius: 15px;
        padding: 10px;
        color: #989898;
        cursor: pointer;
        font-weight: 500;
    }

    .back-button:hover, .select-button:hover {
        background-color: #999;
        color: white;
        font-weight: 500;
    }
</style>

@endsection

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-5 d-flex justify-content-center">
                    <div class="header">
                        <h1>Pilih Jadwal Lesmu</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in imperdiet erat. Maecenas ut nisi tellus.</p>
                        <button class="back-button">Kembali</button>
                    </div>
                </div>
                {{-- Ini untuk kalender nanti --}}
                <div class="col-md-7 bg-primary">
                    Ini div buat kalender dan time
                </div>
            </div>
        </div>
@endsection
